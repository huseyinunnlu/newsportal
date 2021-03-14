<?php

namespace App\Http\Controllers;

use App\Http\Request as HttpRequest; 
use Illuminate\Support\Facades\Input; 
use Request; 
use DB; 
use Session;

class crudController extends Controller
{
    public function insertData(){
        $data = Request::except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at'] = date('Y-m-d H:i:s');

        if (Request::has('social')) {
            $data['social'] = implode(',',$data['social']);
        }

        if (Request::hasFile('image')) {
            $data['image'] = $this->uploadimage($tbl,$data['image']);
        }

        if (Request::has('category_id')) {
            $data['category_id'] = implode(',',$data['category_id']);
        }
        
        DB::table($tbl)->insert($data);
        session::flash('message', 'Data inserted successfully');
        return redirect()->back();
    }

    public function updateData(){
        $data = Request::except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['updated_at'] = date('Y-m-d H:i:s');

        if (Request::has('social')) {
            $data['social'] = implode(',',$data['social']);
        }

        if (Request::hasFile('image')) {
            $data['image'] = $this->uploadimage($tbl,$data['image']);
        }

        if (Request::has('category_id')) {
            $data['category_id'] = implode(',',$data['category_id']);
        }

        DB::table($tbl)->where(key($data),reset($data))->update($data);
        session::flash('message', 'Data updated successfully');
        return redirect()->back();
    }

    public function uploadimage($location,$imagename){

        $name = $imagename->getClientOriginalName();
        echo $name;
        $imagename->move(public_path().'/'.$location,date('ymdgis').$name);
        return date('ymdgis').$name;
    }
}

