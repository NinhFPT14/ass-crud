
@extends('layout')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Sửa thương hiệu</h1>
    <div class="card mb-4">
        <div class="card-header">
        </div>
        <div class="card-body">
          <div class="row">
        </div>
        <form method="POST" action="{{route('brand.update',['id'=>$data->id])}}"  enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên</label>
            <input type="text" name="name" class="form-control" value="{{$data->name}}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
            <input type="text" name="address" class="form-control"  value="{{$data->address}}">
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Ảnh</label>
              <input type="file" name="image" class="form-control">
              @error('image')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          <button type="submit" class="btn btn-warning">Sửa</button>
        </form>
        </div>
    </div>
</div>
@endsection