<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Layout extends BaseModel
{
    use HasFactory;

    public function __construct(){
        $this->rules = config('rules.layout');
    }

    protected $fillable = ['name','view','header_id','footer_id'];
    protected $table = 'layouts';
    public $class_name = 'App\Models\Layout';
}
