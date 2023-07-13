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
    <form action="{{url('/ins')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <p>Product Title</p>
        <p><input type="text" name="pname" /></p>
        <p>Description</p>
        <p><input type="text" name="desp" /></p>
        <p>Price</p>
        <p><input type="number" name="price" /></p>
        <p>Quantity</p>
        <p><input type="number" name="quantity"></p>
       
        <p>Image</p>
        <p><input type="file" name="simg"></p>
        <p><input type="submit" name="submit" value="submit"/>
        <input type="reset" name="reset" value="reset"/></p>
    </form>
</body>
</html>
</body>
</html>