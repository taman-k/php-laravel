<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(Session::has("msg"))
    <h1>{{Session::get("msg")}}</h1>
    @endif
    <form action="{{url('/lc')}}" method="post" >
        @csrf
        <p>Email</p>
        <p><input type="text" name="email" /></p>
        <p>Password</p>
        <p><input type="text" name="pass" /></p>
      
        <p><input type="submit" name="submit" value="Login"/>
        
    </form>
</body>
</html>
</body>
</html>