<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Page;
use App\Models\Header;
use App\Models\Footer;
use DB;
use Log;

class PageController extends BaseController
{
    //
    private $page;
    private $header;
    private $footer;
    public function __construct(Page $page,Header $header,Footer $footer) {
        $this->page = $page;
        $this->header = $header;
        $this->footer = $header;
    }

    public function index(Request $request){
       return view('admin.pages.index',[
            'title' => trans('lang.pages'),
       ]);
    }

    public function renderTable(Request $request){
        $this->setGeneralFilters($request,$this->page);
        $response = [];
        try{
            $response = $this->page->getRecordDataTable($request);  
        }catch(\Exception $e){
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
        return $this->sendResponse($response);
    }

    public function store(Request $request){

        $request->validate($this->page->getRule());

        try {
            DB::beginTransaction();
            $data = $request->except('_token');
            
            // $this->page->name = $data['name'];
            // $this->page->slug = $data['slug'];
            // $this->page->display_to_menu = (int)$request->display_to_menu;
            // $this->page->is_home_page = (int)$request->is_home_page;
            // $this->page->view = $data['view'];
            // $this->page->layout = $data['layout'];
            // $this->page->is_active = 1;
            
            
            $result = $this->page->store($data);
            if ($request->has('image')) {
                if (!is_array($request->image)) {
                    $response = Helper::saveMedia($request->image, 'page',Page::class,$result->id);  
                }
            }
            DB::commit();
            return $this->sendResponse([], trans('messages.success_msg', ['action' => trans('lang.saved')]));
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }

    public function update(Request $request,$id){
        
        $request->validate($this->page->getRule());
        try {
            DB::beginTransaction();
            $data = $request->except('_token');
            //dd($data);
            $path = ""; //config('constant.default-images.general');
            $logo_path = ""; //config('constant.defau""; //lt-images.general');
            // $this->page->name = $data['name'];
            // $this->page->slug = $data['slug'];
            // $this->page->display_to_menu = (int)$request->display_to_menu;
            // $this->page->is_home_page = (int)$request->is_home_page;
            // $this->page->view = $data['view'];
            // $this->page->layout = $data['layout'];
            // $this->page->is_active = 1;
            if ($request->has('image')) {

                if (!is_array($request->image)) {
                    $response = Helper::saveFiles($request->image, 'page');
                    if ($response) {
                        $path = $response;
                    }
                }
                $data['image'] = $path;
                // $this->page->image = $path;
                // $this->page->image_url = $logo_path;
            }
            
            $this->page->updateByColumn($data,$id);
            DB::commit();
            return $this->sendResponse([], trans('messages.success_msg', ['action' => trans('lang.updated')]));
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    
    }

    public function edit(Request $request){
        return view('admin.pages.edit',[
            'title' => trans('lang.pages').' | '.trans('lang.edit'),
        ]);
    }

    public function getPage(Request $request,$id){
        $Page = $this->page->where('id',$id)->first();
        return $this->sendResponse($Page);
    }
    public function create(Request $request){
        return view('admin.pages.create',[
            'title' => trans('lang.pages').' | '.trans('lang.create'),
        ]);
    }

    public function destroy(Request $request,$id){
        try{
            DB::beginTransaction();
            $this->page->destroyByid($id);
            DB::commit();
        }catch(Exception $e){
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }
}
