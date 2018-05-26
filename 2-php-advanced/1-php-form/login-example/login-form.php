<html>
<head>
<meta charset="UTF-8">
<title>Login example</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type='text/css'>

h1{
    color:red;
}
.login{
   
}
</style>
</head>         `
<body>

<div class='login' >

    <h1 class='col-xs-offset-1 col-xs-12'>Login</h1>

    <form action='process.php' method='POST' class='form-horizontal' >
        <div class='form-group'>
            <label class='control-label  col-xs-2'>Email</label>
            <div class='col-xs-3'>
                <input type='text' name='email' class='form-control' placeholder='Email'>
            </div>
        </div>

        <div class='form-group'>
            <label class='control-label col-xs-2'>Password</label>
            <div class='col-xs-3'>
                <input type='password' name='password' class='form-control' placeholder='Password'>
            </div>
        </div>

        <div class='form-group'>
            <div class='col-xs-offset-2 col-xs-10'>
                <button type='submit' class='btn btn-primary'>Đăng nhập</button>
            </div>
        </div>

</div>
</body>
</html>             
