<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\BaseModel;
use App\Models\ContactForm;
use App\Models\Newsletter;
use App\Helpers\Helper;
use App\Traits\Validation;
use App\Mail\ContactUss;
use Pusher\Pusher;
use DB;

class BaseController extends Controller
{
    //
    // use Validation;
    private $baseModel,$contactForm,$newsletter;
    public function __construct(BaseModel $baseModel,Newsletter $newsletter,ContactForm $contactForm){
        $this->baseModel = $baseModel;
        $this->contactForm = $contactForm;
        $this->newsletter = $newsletter;
    }
    public function setGeneralFilters(Request $request, BaseModel $model)
    {
        $model->setLength($request->has('length') ? $request->length : 10);
        $model->setStart($request->has('start') ? $request->start : 1);
        $model->setOrderBy($request->has('orderBy') ? $request->orderBy : 'created_at');
        $model->setOrder($request->has('order') ? $request->order : 'desc');
    }

    public function sendResponse($result = [], $message = '')
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
            'fields' => [],
        ];

        return response()->json($response, 200);
    }

    public function sendError($error = '', $errorMessages = [], $code = 400, $data = [])
    {
        $response = [
            'success' => false,
            'message' => $error,
            'data' => $data,
            'fields' => (!empty($errorMessages) ? $errorMessages : [])
        ];

        return response()->json($response, $code);
    }
// Subscribe for newsletter
    public function newsletterSubscription(Request $request){
        $request->validate([
            'email' => 'required|email|unique:email'
        ]);

        $response =$this->newsLetter->store($request->except('_token'));
        if($response){
            return $this->sendResponse([],trans('messages.success_msg',['action' => trans('lang.subscribed')]));
        }
        return $this->sendError(trans('messages.error_msg',['action' => trans('lang.subscribing')]));
    }
// Contact us form
    public function saveContactForm(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'subject' =>'required',
            'message' => 'required'
        ]);

        $response = $this->contactForm->store($request->except('_token'));
        if($response){
            $message = Helper::sendMail(env('MAIL_FROM_ADDRESS'),new Contactus($response));
            if($message ==""){
                return $this->sendResponse([],'Your response has been '.trans('messages.success_msg',['action' => trans('lang.save')]));
            }else{
                return $this->sendResponse([],$message);
            }
            
        }
        return $this->sendError(trans('messages.error_msg',['action' => trans('lang.saving')]));
    }

    
}
