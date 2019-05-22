<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <script src="main.js"></script>

</head>
<body>

<div class="container">
<br><br>
<form  method="post" action="/updatetasks">
{{csrf_field()}}
<input type="text" class="form-control" name="task" value="{{$taskdata->task}}"><br>
<input type="hidden" name="id" value="{{$taskdata->id}}"><br>
<input type="submit" class="btn btn-success" value="update"/>
&nbsp;&nbsp;<input type="button" class="btn btn-danger" value="cancel">

</form>
</div>
         
</body>
</html>