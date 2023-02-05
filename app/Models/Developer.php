<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BaseModel;
use App\Helpers\Helper;
use Auth;

class Developer extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name','slug','is_active','is_delete'];
    public $class_name = 'App\Models\Developer';
    protected $table = 'developers';

    private $rules = [
        'name' => 'required',
        'slug' => 'required',
    ];

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::addGlobalScope('active_developers', function (Builder $builder) {
            $user = Auth::user();
            if(isset($user) && !$user->hasRole('admin')){
                $builder->where('developers.is_delete', '=', 0);
            }else{
                $builder->where('developers.is_delete', '=', 0)->where('developers.is_active','=',1);
            }
           
        });
    }

    

    public function getRecordDataTable($request){
        if($request->has('search') && $request->search !=''){
            $this->setFilters(['name','like','%'.$request->search.'%']);     
        }

        $condition = [];
        $result = [];
        $this->setSelectedColumn(['id','name','slug','is_active','created_at']);

        $this->setRenderColumn([
            [
                'name' => 'id',
                'db_name' => 'id',
                'type' => 'integer',
                'html' => false,
            ],
            [
                'name' => 'name',
                'type' => 'string',
                'html' => false,
                'link' => 'property',
                'link_column' => 'slug',
                
            ],
            [
                'name' => 'slug',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'created_at',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'is_active',
                'type' => 'boolean',
                'html' => false,
                
            ],
            [
                'name' => 'status',
                'type' => 'boolean',
                'html' => true,
                'condition_colum' => 'is_active'
            ],
            

        ]);
        
        $result = $this->getAllDatatables([],
        $this->getSelectedColumns(),
        []);
            
        return $result;
    }

    public function getRule(){
        return $this->rules;
    }

    public function getRecodsForSelect(){
        try{
            $response = [];
            $data = $this->getAll([],['id','name as text']);
            return $data;
        }catch(Exception $e){
            Logger::error($e->getMessage());
        }
    }
}
