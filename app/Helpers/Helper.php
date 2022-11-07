<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use PDF;
use Mail;

class Helper
{
    public static function getuserrole($id = 0, $type = '')
    {
        $roles = [
            config('constants.admin') => __('global.admin'),
            config('constants.company') => __('global.company'),
            config('constants.innovator') => __('global.innovator'),
        ];

        $roleName = '';
        if ($id == 0) {
            if (!auth()->user()) {
                $roleName = '';
            } else {
                // dd(auth()->user()->email);
                $roleName = auth()->user()->roles->pluck('name')[0];
            }
        } else {
            $user = \App\Models\User::where(['id' => $id])->first();
            // dd($user->email);
            $roleName = $user->roles->pluck('name')[0];
        }
        if ($type == 'heading') {
            return $roles[$roleName];
        } else {
            return $roleName;
        }
    }

    public static function getAdminAction($dropdown = [])
    {
        return view('components.bt-dropdown', [
            'dropdown' => $dropdown
        ])->render();
    }

    public static function stripeCreateProduct($name)
    {
        try {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $product = $stripe->products->create([
                'name' => $name,
            ]);
            return $product;
        } catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public static function stripeCreatePlan($price, $product, $interval)
    {

        try {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $plan = $stripe->plans->create([
                'amount' => $price * 100,
                'currency' => 'usd',
                'interval' => $interval,
                'product' => $product,
            ]);

            return $plan;
        } catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public static function saveFiles($files, $directory)
    {
        try {
            $result = self::base64ToImage($files);
            if (explode('/', $result['type'])[1] == 'vnd.openxmlformats-officedocument.wordprocessingml.document') {
                $type = 'docx';
            } else {
                $type = explode('/', $result['type'])[1];
            }

            if (file_exists(public_path('uploads/' . $directory . '/' . $directory . '_' . time() . '.' . $type))) {
                @unlink(public_path('uploads/' . $directory . '\\' . $directory . '_' . time() . '.' . $type));
            }
            if (!file_exists(public_path('uploads/' . $directory)) && !is_dir(public_path('uploads/' . $directory))) {
                mkdir(public_path('uploads/' . $directory), 0777);
            }
            $path = public_path('uploads/' . $directory . '/' . $directory . '_' . time() . '.' . $type);

            $public_path = 'uploads/' . $directory . '/' . $directory . '_' . time() . '.' . $type;
            file_put_contents($path, $result['data']);

            return $public_path;
        } catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public static function moveNormalFile($file, $directory)
    {
        if (file_exists(public_path('uploads/' . $directory . '/' . $directory . '_' . time() . '_' . $file->getClientOriginalName() . '.' . $file->getClientOriginalExtension()))) {
            @unlink(public_path('uploads/' . $directory . '\\' . $directory . '_' . time() . '.' . $file->getClientOriginalExtension()));
        }
        if (!file_exists(public_path('uploads/' . $directory)) && !is_dir(public_path('uploads/' . $directory))) {
            mkdir(public_path('uploads/' . $directory), 0777);
        }

        $path = public_path('uploads/' . $directory);
        $public_path = 'uploads/' . $directory . '/' . time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, time() . '.' . $file->getClientOriginalExtension());

        return $public_path;
    }

    public static function base64ToImage($data)
    {
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        //        dd($data);
        return [
            'data' => $data,
            'type' => $type,
        ];
    }
    // Firebase RealTime
    public static function realTimeNotification($message, $user_id, $type)
    {

        $firebase = (new Factory)
            ->withServiceAccount(public_path('ilaunch-18212-firebase-adminsdk-3c4j3-17f73d8f4c.json'))
            ->withProjectId('ilaunch-18212')
            ->withDatabaseUri(env('FIREBASE_DATABASE_URL'));

        $database = $firebase->createDatabase();
        $newPost = $database
            ->getReference('user_' . $user_id . '/' . $type . '_' . time() . $user_id)
            ->set([
                'title' => $message['title'],
                'body' => $message['message'],
            ]);
    }
    // Number Format
    public static function numberFormat($number)
    {
        if ($number < 9) {
            return '0' . $number;
        }
        return $number;
    }


    // PDF FILE
    public static function generatePDF($view, $data)
    {
        $pdf =  PDF::loadView($view, $data);
        if (!file_exists(public_path('uploads/' . 'statements')) && !is_dir(public_path('uploads/' . 'statements'))) {
            mkdir(public_path('uploads/' . 'statements'), 0777);
        }
        $pdf->save(public_path('uploads/statements/deal_' . $data['Deal']->id . '.pdf'));
        $path = 'statements/deal_' . $data['Deal']->id . '.pdf';
        return $path;
    }

    // Mail
    public static function sendMail($to,$MailObject,$from="support.cpcweb@gmail.com")
    {   
        $message = "";

        try{
            Mail::to($to)->send($MailObject);
        }catch(\Exception $e){
            $response = trans('messages.mail_error');
        }
        
        return $message;

    }
}
