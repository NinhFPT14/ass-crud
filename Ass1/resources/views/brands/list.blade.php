@extends('layout')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Thương hiệu</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <a href="{{route('brand.add')}}" class="btn btn-success">Tạo mới</a>
        </div>
        <div class="card-body">
          <div class="row">
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
              @foreach($brand as $key=>$value)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->address}}</td>
                <td>
                <img src="{{$value->image}}" alt="" style="width:100px"></td>
                <td>  <a href="{{route('brand.edit',['id'=>$value->id])}}" class="btn btn-warning">Sửa</a>
                    <a href="{{route('brand.delete',['id'=>$value->id])}}" class="btn btn-danger">Xoá</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection