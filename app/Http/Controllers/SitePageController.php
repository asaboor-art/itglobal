<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Helpers\Helper;
use App\Models\CustomForm;
use App\Mail\CustomForm as MailForm;

class SitePageController extends BaseController
{
    //
    private $customForm;
    public function __construct(CustomForm $customForm){

        $this->customForm = $customForm;
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

    public function storeCustomForm(Request $request){
        
        $request->validate([
            'first_name' => 'required',
            'last_name' =>'required',
            'email' =>'required|email',
            'phone_no' =>'required|integer',
            'state' =>'required',
            'postal_code' =>'required|integer',
            'message' =>'required'
        ]);
        $path = "NULL";
        

        $form = [];
        
        foreach($request->input() as $key => $value){
            $form[] = [
                'key' => $key,
                'name' => ucwords(str_replace('_',' ',$key)),
                'value' => $value,
            ];
        }
        
        
        //dd($request->file);
        if($request->hasFile('file')){
            $path = Helper::moveNormalFile($request->file('file'),'quotes');
            array_push($form,[
                'key' => 'path',
                'name' => 'Attachment',
                'value' => $path,
            ]);
            
        }
        // Setting data;

        $data['form_data'] = json_encode($form);
        $data['name'] = 'Get A Quote Form';
        $data['slug'] = 'get-a-quote';

        $response = $this->customForm->store($data);
        if($response){
            $message = Helper::sendMail(env('MAIL_FROM_ADDRESS'),new MailForm($form));
            if($message ==""){
                return $this->sendResponse([],'Your response has been '.trans('messages.success_msg',['action' => trans('lang.save')]));
            }else{
                return $this->sendResponse([],$message);
            }
            
        }
    }
    
}
