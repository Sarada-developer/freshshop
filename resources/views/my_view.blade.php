<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insert" method="post">
@csrf
<table>
<tr><td>
Name:
</td><td><input type="text" name="name"/></td>

</tr>
<tr><td>
Email:
</td><td><input type="email" name="email"/></td>

</tr>
<tr><td>
Password:
</td><td><input type="password" name="password"/></td>

</tr>
<tr><td><input type="submit" name="submit" value="Submit"/></td>

</tr>
</table>

</form>
</body>
</html>