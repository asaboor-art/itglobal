<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class ContactForm extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'first_name','phone','email','message','city','property_id'
    ];
}
