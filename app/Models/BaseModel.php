<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
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

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::addGlobalScope('is_delete', function (Builder $builder) {
            $builder->where('is_delete', '=', 0);
        });
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

    public function getAllDatatables($relation = [],$select = ['*'] ,$conditions = [],$scope='')
    {
        
        if($scope != ''){
           
            $Model = static::withoutGlobalScope($scope)->selectRaw(implode(',',$select));
        }else{
            $Model = static::selectRaw(implode(',',$select));
        }
        if (!empty($relation)) {
            foreach ($relation as $index => $rel){
                $Model->join($rel[0],$rel[1],$rel[2],$rel[3]);
            }
            
        }
        if (!empty($conditions)) {
            foreach ($conditions as $condition) {
                $Model->where($condition[0], $condition[1], $condition[2]);
            }
        }
       
        
        $totalRecord = $Model->count();

        foreach ($this->getFilters() as $key => $filter) {
            $Model = $Model->orwhere($filter[0], $filter[1], $filter[2]);
        }

        $totalFilteredRecord = $Model->count();

        return [
            'totalRecord' => $totalRecord,
            'totalFilterRecords' => $totalFilteredRecord,
            'pages' => (int)ceil($totalFilteredRecord / $this->getLength()),
            'data' => $Model->skip($this->getLength() * ($this->getStart() - 1))->take($this->getLength())->orderBy($this->getOrderBy(), $this->getOrder())->get(),

        ];
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

    public function updateByColumn($data, $column = 'id', $value)
    {
        $data['updated_at'] = Carbon::now();
        return static::where($column, $value)->update($data);
    }

    public function destroyByid($id)
    {

        $data['updated_at'] = Carbon::now();
        $data['is_delete'] = 1;
        return $this->where('id', $id)->update($data);
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
        return $data->get();
    }

    public function first($column = 'id', $value = 0, $operator = '=', $relation = [])
    {

        if (!empty($relation)) {

            return $this->with($relation)->where($column, $operator, $value)->firstorfail();
        }
        return $this->where($column, $operator, $value)->firstorfail();
    }

    public function find($id)
    {

        return static::findorfail($id);
    }
}
