<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\BaseModel;
use App\Models\User;
use App\Models\GeneralSetting;
use App\Helpers\Helper;
use App\Traits\Validation;
use Pusher\Pusher;
use DB;

class BaseController extends Controller
{
    //
    use Validation;
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

    public function changeProfileStatus(Request $request, User $user)
    {
        if (!$request->has('user_id') && $request->user_id <= 0) {
            return $this->sendError('', []);
        }

        $response = $user->changeProfileStatus($request->user_id);
        return $this->sendResponse($response);
    }

    public function getHonourCode(Request $request, GeneralSetting $generalSetting)
    {
        $request->validate([
            'role' => ['required', 'integer', 'exists:roles,id'],
        ]);

        $data = $generalSetting->getGeneralSetting('honor_code', $request->role);
        if (!isset($data)) {
            if ($request->role == 2) {
                $data['value'] = config('honor-code.innovator');
            } else if ($request->role == 3) {
                $data['value'] = config('honor-code.company');
            }
        }
        return $this->sendResponse($data);
    }

    
}
