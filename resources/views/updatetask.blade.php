<!DOCTYPE <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Task</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
<div class="container">
<br><br>
<form action="/updatenewtask" method="post">
        {{csrf_field()}}
        <br><br><br><br>
    <input type="text" class="form-control" name="task" value="{{$taskdata->task}}">
    <br>
    <input type="hidden" name="id" value="{{$taskdata->id}}">
    <input type="submit" class="btn btn-warning" value="Update">
    &nbsp;&nbsp; <input type="submit " class="btn btn-danger" value="Cancel"> 
</form>
    
</body>
</html>