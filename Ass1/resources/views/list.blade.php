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
    <h2>Thương hiệu</h2>
    <a href="{{route('brand.add')}}" class="btn btn-success">Tạo mới</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Thời gian tạo</th>
            <th scope="col">Thời gian cập nhật</th>
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
            <td>{{$value->created_at}}</td>
            <td>{{$value->updated_at}}</td>
            <td>  <a href="{{route('brand.edit',['id'=>$value->id])}}" class="btn btn-warning">Sửa</a>
                <a href="{{route('brand.delete',['id'=>$value->id])}}" class="btn btn-danger">Xoá</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <h2>Máy bay</h2>
      <a href="{{route('plane.add')}}" class="btn btn-success">Tạo mới</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Thuơng hiệu</th>
            <th scope="col">Thời gian tạo</th>
            <th scope="col">Thời gian cập nhật</th>
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        <tbody>
          @foreach($plane as $key=>$value)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$value->name}}</td>
            <td><img src="{{$value->image}}" alt="" style="width:100px"></td>
            <td>
              <?php
              $brands = DB::table('brands')->find($value->brands_id);
              if($brands != null){
                echo($brands->name);
              }
              ?></td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->update_at}}</td>
            <td>  <a href="{{route('plane.edit',['id'=>$value->id])}}" class="btn btn-warning">Sửa</a>
                <a href="{{route('plane.delete',['id'=>$value->id])}}" class="btn btn-danger">Xoá</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    
</body>
</html>