<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Media;
use Carbon\Carbon;
use DB;

class BaseModel extends Model
{
    use HasFactory;

    private $length = 10;
    private $start = 1;
    private $orderBy = 'created_at';
    private $order = 'desc';
    private $filters = [];
    public $class_name = '';
    protected $table = '';
    private $select_columns = [];
    private $render_columns = [];
    public static function boot()
    {   
        //$table = $this->table;
        parent::boot(); // TODO: Change the autogenerated stub
        // static::addGlobalScope('is_delete', function (Builder $builder) use ($table) {
        //     $builder->where($table.'.is_delete', '=', 0);
        // });
    }

    public function setLength($length)
    {
        $this->length = $length > 0 ? $length : $this->length;
    }

    public function setStart($start)
    {
        $this->start = $start > 0 ? $start : $this->start;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setFilters($value)
    {
        $this->filters[] = $value;
    }

    public function getFilter($key)
    {
        return $this->filters[$key];
    }

    public function getFilters()
    {
        return $this->filters;
    }

    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }

    public function getOrderBy()
    {
        return $this->orderBy;
    }

    public function setOrder($order)
    {
        $this->order = $order;
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function setSelectedColumn($columns){
        $this->select_columns = $columns;
    }
    public function getSelectedColumns(){
        return $this->select_columns;
    }

    public function setRenderColumn($columns){
        $this->render_columns = $columns;
    }
    public function getRenderColumns(){
        return $this->render_columns;
    }

    public function setSlugAttribute($slug)
    {
        $slug = preg_replace("![^a-z0-9]+!i", "-", strtolower($slug));
        if(isset($this->id)){
            $property = self::where('slug',$slug)->where('id','!=',$this->id)->first();
            $this->attributes['slug'] = $slug.'-'.((int)$this->id);
            return true;
        }
        $property = self::where('slug',$slug)->first();
        if(isset($property)){
            $this->attributes['slug'] = $slug.'-'.((int)$property->id+1);
            return true;
        }
        $this->attributes['slug'] = $slug;
        return true;
    }
    // Relation with media
    public function media(){
        return $this->hasMany(Media::class,'model_id')->where('model',$this->class_name);
    }
    public function getAllDatatables($relation = [],$select = ['*'] ,$conditions = [],$scope='',$join=[],$where='orwhere')
    {
        
        if($scope != ''){
           
            $Model = static::withoutGlobalScope($scope)->selectRaw(implode(',',$select));
        }else{
            $Model = static::selectRaw(implode(',',$select));
        }

        if(!empty($relation)){
            $Model = static::with($relation)->selectRaw(implode(',',$select));
        }
        if (!empty($join)) {
            foreach ($join as $index => $rel){
                $Model->leftjoin($rel[0],$rel[1],$rel[2],$rel[3]);
            }
            
        }
        if (!empty($conditions)) {
            foreach ($conditions as $condition) {
                $Model->where($condition[0], $condition[1], $condition[2]);
            }
        }
       
        
        $totalRecord = $Model->count();
        
        foreach ($this->getFilters() as $key => $filter) {
            $Model = $Model->{$where}($filter[0], $filter[1], $filter[2]);
        }

        $totalFilteredRecord = $Model->count();

        $count = 0;
        $response = [];
        $result = $Model->skip($this->getLength() * ($this->getStart() - 1))->take($this->getLength())->orderBy($this->getOrderBy(), $this->getOrder())->get();
        
        foreach ($result as $key => $row) {
                $count++;
                $data = [];
                $data['sno'] = $count;
                foreach($this->getRenderColumns() as $key => $column) {
                    if($column['html'] && $column['type'] == 'boolean') {
                        $data[$column['name']] = $row->{$column['condition_colum']} == 1 ? '<span class="badge badge-success">' . trans('lang.active') . '</span>' : '<span class="badge badge-danger">' . trans('lang.inactive') . '</span>';
                    }
                    else if($column['html'] && $column['type'] == 'string'){
                        $data[$column['name']] = '<a href="'.route($column['link'],$row->{$column['link_column']}).'">'.$row->{$column['name']}.'</a>';
                    }else{
                        $data[$column['name']] = $row->{$column['name']};
                    }
                }
                
                $response['data'][] = $data;
        }
        $response['totalRecord'] = $totalRecord;
        $response['totalFilterRecords'] = $totalFilteredRecord;
        $response['pages'] = (int)ceil($totalFilteredRecord / $this->getLength());
        if (!isset($response['data'])) {
            $response['data'] = [];
        }
        return $response;
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format(config('constant.date_format'));
    }

    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->format(config('constant.date_format'));
    }

    public function store($data)
    {
        $data['created_at'] = Carbon::now();
        return static::create($data)->id;
    }

    public function updateByColumn($data,$value,$column = 'id')
    {
        $data['updated_at'] = Carbon::now();
        return static::where($column, $value)->update($data);
    }

    public function destroyByid($id)
    {
        if(config('app.APP_ENV') == 'production'){
            $data['updated_at'] = Carbon::now();
            $data['is_delete'] = 1;
            return $this->where('id', $id)->update($data);
        }else{
            return $this->where('id', $id)->delete();
        }
        
    }

    public static function getAllRoles()
    {
        return DB::table('roles')->select('id', 'name')->where('name', '<>', config('constant.admin'))->get();
    }

    public static function getAllRoleById($id)
    {
        return DB::table('roles')->where('id', $id)->first();
    }

    public function insertOrUpdate($data, $where)
    {

        $data['updated_at'] = Carbon::now();
        $data['created_at'] = Carbon::now();

        $response = static::where($where)->first();
        if (isset($response)) {
            $result = $response->update($data);
            return $response->id;
        }
        return static::insertGetId($data);
    }

    public function getAll($relation = [], $select = ['*'], $where = [])
    {
        $data = null;
        if (count($relation) > 0) {
            $data = static::with($relation)->selectRaw(implode(',', $select));
        } else {
            $data =  static::selectRaw(implode(',', $select));
        }

        if (count($where) > 0) {
            foreach ($where as $condition) {
                $data->where($condition[0], $condition[1], $condition[2]);
            }
        }
        if($this->getLength() > 0 )
            $Model = $data->skip($this->getLength() * ($this->getStart() - 1))->take($this->getLength())->orderBy($this->getOrderBy(), $this->getOrder())->get();
        
        $Model =$data->get();
        
        return $data->get();
         
    }

    public function first($column = 'id', $value = 0, $operator = '=', $relation = [],$join=[],$select=['*'])
    {
        $result = null;
        if (!empty($relation)) {
            $result = static::with($relation)->where($column, $operator, $value);
             
        }else{
            $result = static::where($column, $operator, $value);
        }
        $result->selectRaw(implode(',', $select));
        if (!empty($join)) {
            
            foreach ($join as $index => $rel){
                $result->leftjoin($rel[0],$rel[1],$rel[2],$rel[3]);
            }      
        }
        $result = $result->firstorfail();
        $result['media'] = Media::where('model',$this->class_name)->where('model_id',  $result->id)->get();
        return $result;
    }

    public function find($id)
    {
        return static::findorfail($id);
    }
}
