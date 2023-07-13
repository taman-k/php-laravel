<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>


<body>
<div class="container">
<h2>Product Details</h2>
<table class="table table-striped">
<h1> Welcome {{$usr->name}}</h1>
<h1>Role: {{$usr->role}}</h1>
<h1>User-Id: {{Auth::user()->id}}</h1>
<p><a href="{{url('/logout')}}" class="btn btn-danger">Log Out</a></p>
    <p><a href="{{url('/add')}}" class="btn btn-primary">Add More</a></p>
    <thead>
      <tr>
        <th>Product Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Delete</th>
        <th>Edit</th>
        
        
      </tr>
    </thead>
    <tbody>
    <tr>
      @foreach($pd as $s)
      <td>{{$s->pname}}</td>
      <td>{{$s->desp}}</td>
      <td>{{$s->price}}</td>
      <td>{{$s->quantity}}</td>
    <td><img style="width: 100px;" src="{{url('/std_img')}}/{{$s->image}}"/></td>
    <td><a onclick="return confirm('Are you sure?')" href="{{url('/delstd')}}/{{$s->pid}}" class="btn btn-danger">Delete</td>
    <td><a href="{{url('/edit')}}/{{$s->pid}}" class="btn btn-primary">Edit</td>  
  </tr>
      @endforeach

    </tbody>
  </table>
</div>
</body>
</html>