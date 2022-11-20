<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Page;
use DB;
use Log;

class PageController extends BaseController
{
    //
    private $page;
    public function __construct(Page $page) {
       
        $this->page = $page;

    }

    public function index(Request $request){
       return view('admin.pages.index',[
        'title' => trans('lang.pages'),
       ]);
    }

    public function renderTable(Request $request){
        $this->setGeneralFilters($request,$this->page);

        if($request->has('search') && $request->search !=''){
            $this->page->setFilters(['name','like','%'.$request->search.'%']);
            
        }

        $condition = [];

        
        $result = $this->page->getAllDatatables([],
        ['name','slug','view','is_active','display_to_menu','has_custom_view','created_at'],
        [],'is_delete');

        
            $count = 0;
            $data = [];
            $response = [];
            foreach ($result['data'] as $key => $row) {
                $count++;
                $data['id'] = $row->id;
                $data['is_active'] = $row->is_active;
                $data['sno'] = $count;
                $data['name'] = $row->name ;
                $data['view'] = $row->view ;
                $data['slug'] = $row->slug;
                $data['status'] = $row->is_active == 1 ? '<span class="badge badge-success">' . trans('lang.active') . '</span>' : '<span class="badge badge-danger">' . trans('lang.inactive') . '</span>';
                $data['display_to_menu'] = $row->display_to_menu == 1 ? '<span class="badge badge-success">' . trans('lang.active') . '</span>' : '<span class="badge badge-danger">' . trans('lang.inactive') . '</span>';
                $data['created_at'] =  $row->created_at;
                $response['data'][] = $data;
            }

            $response['columns'] = [];
            if (!isset($response['data'])) {
                $response['data'] = [];
            }
            $response['totalRecords'] = $result['totalRecord'];
            $response['pages'] = $result['pages'];
            $response['totalFilterRecords'] = $result['totalFilterRecords'];

            return $this->sendResponse($response);
    }

    public function store(Request $request){

        $request->validate($this->page->rules);

        try {
            DB::beginTransaction();
            $data = $request->except('_token');
            //dd($data);
            $path = ""; //config('constant.default-images.general');
            $logo_path = ""; //config('constant.defau""; //lt-images.general');
            $this->page->name = $data['name'];
            $this->page->slug = $data['slug'];
            $this->page->display_to_menu = (int)$request->display_to_menu;
            $this->page->is_home_page = (int)$request->is_home_page;
            $this->page->view = $data['view'];
            $this->page->layout = $data['layout'];
            $this->page->is_active = 1;
            if ($request->has('image')) {

                if (!is_array($request->image)) {

                    $response = Helper::saveFiles($request->image, 'page');

                    if ($response) {
                        $path = $response;
                    }
                }
                $this->page->image = $path;
                $this->page->image_url = $logo_path;
            }
            
            $this->page->save();
            DB::commit();
            return $this->sendResponse([], trans('messages.success_msg', ['action' => trans('lang.saved')]));
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }

    public function create(Request $request){
        return view('admin.pages.create',[
            'title' => trans('lang.pages').' | '.trans('lang.create'),
        ]);
    }
}
