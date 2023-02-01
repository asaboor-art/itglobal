<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Property;
use App\Models\Media;
use DB;
use Log;

class PropertyController extends BaseController
{
    //
    private $property,$media;
    public function __construct(Property $property,Media $media) {
        //$this->property = $property;
        $this->setModel($property);
        $this->setMedia($media);
        //parent::__construct();
    }

    public function index(Request $request){
        return view('admin.crud.index',[
             'title' => trans('lang.properties'),
             'name'  => trans('lang.property'),
        ]);
    }

    public function create(Request $request){
        return view('admin.crud.create',[
            'title' => trans('lang.pages').' | '.trans('lang.create'),
            'name' => 'page',
        ]);
    }

     public function edit(Request $request){
        return view('admin.crud.edit',[
            'title' => trans('lang.properties').' | '.trans('lang.edit'),
            'name' => 'property',
        ]);
    }


}
