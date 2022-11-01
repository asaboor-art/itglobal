<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class SitePageController extends BaseController
{
    //
    public function __construct(){

    }

    public function renderMainPage(Request $request){
       
       
        return view(config('site_config.assets.home_pages').'indexv1',[
            'title' => trans('lang.home'),
        ]);
    }

    public function renderSitePages(Request $request,$page){
        
        return view(config('site_config.assets.pages').$page,[
            'title' =>'Page',
        ]);
    }
    
}
