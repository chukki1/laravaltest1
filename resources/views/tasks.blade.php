<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <script src="main.js"></script>
</head>

<body>
    <div class="container">
    <div class="text-center">
  
  <h1>Daily Tasks</h1>
  
   <div class="row">
   <div class="col-md-12">
   @foreach($errors->all() as $error)

   <div class="alert alert-danger" role="alert">
  {{$error}}
</div>
@endforeach
  

    <form method="post" action="/SaveTask">
    {{csrf_field()}}
    <input type="text" class="form-control" name="task" placeholder="Enter your task here">
    <br>
    <input type="submit" class="btn btn-primary" value="SAVE">
    <input type="button" class="btn btn-success" value="CLEAR">

    </form>
    <br><br>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TASK</th>
      <th scope="col">COMPLETED</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  @foreach($tasks as $task)
  <tbody>
 
    <tr>
      <th>{{$task->id}}</th>
      <td>{{$task->task}}</td>
      <td>
      @if($task->isCompleted)
      <button class="btn btn-success">Completed</button>
      @else
      <button class="btn btn-warning">Not Completed</button>
      @endif
      </td>
      <td>
      @if(!$task->isCompleted)
      <a href="/taskhascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
      @else
      <a href="/taskhasnotcompleted/{{$task->id}}" class="btn btn-primary">Mark As Not Completed</a>
      @endif
      <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
      <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>

      </td>
    </tr>
    </tbody>
    @endforeach
    </table>

   </div>
   </div>
    </div>
    </div>
</body>
</html>