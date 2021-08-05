<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Đăng nhập</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('login.confirm')}}">
                                          @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name='name' />
                                                <label for="inputEmail">Tên tài khoản</label>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name='password' />
                                                <label for="inputPassword">Mật khẩu</label>
                                                @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html"></a>
                                                <button class="btn btn-primary " type="submit">Đăng nhập</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
