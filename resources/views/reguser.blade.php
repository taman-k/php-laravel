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
    <form action="{{url('/regins')}}" method="post" >
        @csrf
        <p>Name</p>
        <p><input type="text" name="name" /></p>
        <p>Email</p>
        <p><input type="text" name="email" /></p>
        <p>Password</p>
        <p><input type="text" name="pass" /></p>
      
        <p><input type="submit" name="submit" value="Sign Up"/>
        
    </form>
</body>
</html>
</body>
</html>