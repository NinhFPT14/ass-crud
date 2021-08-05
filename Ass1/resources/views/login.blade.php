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
  <h1>Đăng nhập</h1>
    <form method="POST" action="{{route('login.confirm')}}">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Tên đăng nhập</label>
          <input type="text" class="form-control" name='name'>
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div><br>
        <div class="form-group">
          <label for="exampleInputPassword1">Mật khẩu</label>
          <input type="password" class="form-control" name='password'>
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div><br>
        <button type="submit" class="btn btn-primary">Đăng nhâp</button>
      </form>
</body>
</html>