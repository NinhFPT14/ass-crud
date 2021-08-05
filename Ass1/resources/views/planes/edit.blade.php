<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="row">
    <a  href="{{route('brand.list')}}" class="btn btn-success col-sm-5">Thương hiệu</a>
    <a  href="{{route('plane.list')}}" class="btn btn-warning col-sm-5">Máy Bay</a>
    @if(!Auth::check())
    <a  href="{{route('login.index')}}" class="btn btn-primary col-sm-2">Đăng nhập</a>
    @else
    <a  href="{{route('logout')}}" class="btn btn-danger col-sm-2">Đăng xuất</a>
    @endif
</div>
    <h2>Sửa Máy bay</h2>
    <form method="POST" action="{{route('plane.update',['id'=>$data->id])}}"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Tên</label>
          <input type="text" name="name" class="form-control" value="{{$data->name}}">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Thương hiệu</label>
            <select class="form-control" name="brands_id">
            @foreach($brand as $value)
              <option value="{{$value->id}}" {{$value->id == $data->brands_id ? 'selected':''}}>{{$value->name}}</option>
              @endforeach
            </select>
            @error('brands_id')
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
</body>
</html>