<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Header extends BaseModel
{
    use HasFactory;
    protected $fillable = ['name','view'];
    protected $table = 'headers';

    private $rules = [
        'name' => 'required',
        'view' =>  'required',
    ];


    public function getRule(){
        return $this->rules;
    }
}
