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
    <form action="{{url('/update')}}" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="{{$pd->pid}}">
        @csrf
        <p>Product Title</p>
        <p><input type="text" name="pname" value="{{$pd->pname}}" /></p>
        <p>Description</p>
        <p><input type="text" name="desp" value="{{$pd->desp}}" /></p>
        <p>Price</p>
        <p><input type="number" name="price" value="{{$pd->price}}"/></p>
        <p>Quantity</p>
        <p><input type="number" name="quantity" value="{{$pd->quantity}}"></p>
       
        <p>Image</p>
        <p><input type="file" name="simg"></p>
        <p><img style="width: 100px;" src="{{url('/std_img')}}/{{$pd->image}}"/></p>
        <p><input type="submit" name="submit" value="submit"/>
        <input type="reset" name="reset" value="reset"/></p>
    </form>
</body>
</html>
</body>
</html>