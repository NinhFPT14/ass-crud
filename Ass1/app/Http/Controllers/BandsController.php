<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Brand;
use App\Plane;


class BandsController extends Controller
{
    public function list(){
        $brand = Brand::all();
        $plane = Plane::all();
        return view('list',compact('brand','plane'));
    }
    public function add(){
        return view('brands.add');
    }
    public function save(Request $request){
        $request->validate([
            'name' => 'required|max:255|unique:brands',
            'address' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'required'=> "Không được để trống",
            'max' => 'Không được vượt quá :max ký tự',
            'image' => 'Ảnh không đúng định dạng',
            'unique'=>'Tên thương hiệu đã tồn tại'
        ]);

        if($request->hasFile('image')){
            $extension = $request->image->extension();
            $filename =  uniqid(). "." . $extension;
            $path = $request->image->storeAs(
              'image', $filename, 'public'
            );
            $image = "storage/".$path;  
        }

        $Brand = new Brand;
        $Brand->name = $request->name;
        $Brand->address = $request->address;
        $Brand->image = $image;
        $Brand->save();
        return redirect()->route('list');
    }
    public function edit($id){
        $data = Brand::find($id);
        return view('brands.edit',compact('data'));
    }
    public function update(Request $request , $id){
        $request->validate([
            'name' =>'required|max:255|unique:brands,name,' .$id,
            'address' => 'required|max:255',
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

        $Brand = Brand::find($id);
        $Brand->name = $request->name;
        $Brand->address = $request->address;
        if($image != 0){
            $Brand->image = $image;
        }
        $Brand->save();
        return redirect()->route('list');
    }
    public function delete($id){
        $plane = Plane::where('brands_id',$id)->get();
        foreach($plane as $value){
            Plane::destroy($value->id);
        }
        Brand::destroy($id);
        return redirect()->route('list');
    }
}
