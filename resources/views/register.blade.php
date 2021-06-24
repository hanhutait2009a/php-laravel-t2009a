<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Customer</title>
</head>
<body>
<h1>Đăng Kí Tài Khoản</h1>
<form action="/user/register" method="post">
    @csrf
    <div>
        <input placeholder="Nhập fullname" name="Fullname">
    </div>
    <div>
        <input placeholder="Nhập email" name="Email">
    </div>
    <div>
        <input placeholder="Nhập phone" name="Phone">
    </div>
    <div>
        <input placeholder="Nhập address" name="Address">
    </div>
    <div>
        <input placeholder="Nhập identity-card" name="Identity-Card">
    </div>
    <button>Click</button>
</form>
</body>
</html>
