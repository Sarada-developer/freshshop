<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>

<h1>This is a Home Page</h1>

<table border="1">
<tr>
<th>Name</th>
<th>Email</th>
<th>Password</th>
</tr>
@foreach($data as $d)

<tr>
<!-- <td>{{$d->name}}</td>
<td>{{$d->email}}</td>
<td>{{$d->password}}</td> -->
<td>{{$d['name']}}</td>
<td>{{$d['email']}}</td>
<td>{{$d['password']}}</td>

</tr>
@endforeach

</table>



    
</body>
</html>