<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Blog extends BaseModel
{
    use HasFactory;
    public function __construct(){
        $this->rules = [];
    }
    
    protected $fillable = ['name','view'];
    protected $table = 'blogs';
    public $class_name = 'App\Models\Blog';
}
