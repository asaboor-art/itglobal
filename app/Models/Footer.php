<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Footer extends BaseModel
{
    use HasFactory;
    protected $fillable = ['name','view'];
    protected $table = 'footers';

    private $rules = [
        'name' => 'required',
        'view' =>  'required',
    ];


    public function getRule(){
        return $this->rules;
    }
}
