<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plane;
use App\Brand;

class PlanesController extends Controller
{
    public function add(){
        $brand = Brand::all();
        return view('planes.add',compact('brand'));
    }
    public function save(Request $request){
        $request->validate([
            'name' => 'required|max:255|unique:planes',
            'brands_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'required'=> "Không được để trống",
            'max' => 'Không được vượt quá :max ký tự',
            'image' => 'Ảnh không đúng định dạng',
            'unique' => 'Tên máy bay đã tồn tại'
        ]);

        if($request->hasFile('image')){
            $extension = $request->image->extension();
            $filename =  uniqid(). "." . $extension;
            $path = $request->image->storeAs(
              'image', $filename, 'public'
            );
            $image = "storage/".$path;  
        }

        $Plane = new Plane;
        $Plane->name = $request->name;
        $Plane->brands_id = $request->brands_id;
        $Plane->image = $image;
        $Plane->save();
        return redirect()->route('list');
    }
    public function edit($id){
        $data = Plane::find($id);
        $brand = Brand::all();
        return view('planes.edit',compact('data','brand'));
    }
    public function update(Request $request , $id){
        $request->validate([
            'name' =>'required|max:255|unique:planes,name,' .$id,
            'brands_id' => 'required|max:255',
        ],[
            'required'=> "Không được để trống",
            'max' => 'Không được vượt quá :max ký tự',
            'unique' => 'Tên đã tồn tại'
        ]);
        $image = 0;
        if($request->hasFile('image')){
            $extension = $request->image->extension();
            $filename =  uniqid(). "." . $extension;
            $path = $request->image->storeAs(
              'image', $filename, 'public'
            );
            $image = "storage/".$path;  
        }

        $Plane = Plane::find($id);
        $Plane->name = $request->name;
        $Plane->brands_id = $request->brands_id;
        if($image != 0){
            $Plane->image = $image;
        }
        $Plane->save();
        return redirect()->route('list');
    }
    public function delete($id){
        Plane::destroy($id);
        return redirect()->route('list');
    }
}

