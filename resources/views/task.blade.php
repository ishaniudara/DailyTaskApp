<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="text-center">
<h2>Daily Task</h2>

<div class="row">
<div class="col-md-12">
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
{{$error}}
</div>
@endforeach
<form method="post" action="/savetask">
{{csrf_field()}}
<input type="text" name="task" placeholder="enter your task" class="form-control">
<br> 
<br><input type="submit" value="SAVE" class="btn btn-primary">
<input type="button" value="CANCEL" class="btn btn-warning">
</form>
<br>
<BR>
<br>
<table class="table table-dark">
<th>Id</th>
<th>Task</th>
<th>Completed</th>
<th>Action</th>

@foreach($tasks as $task)
<tr>

<td>{{$task->id}}</td>
<td>{{$task->task}}</td>
<td>
@if($task->Iscompleted)
<button class="btn btn-success">Completed</button>
@else<button class="btn btn-warning">Not Completed</button>
@endif
</td>

<td>
@if(!$task->Iscompleted)
<a href="/mark/{{$task->id}}" class="btn btn-primary">Mark as completed</a>
@else
<a href="/marknot/{{$task->id}}" class="btn btn-danger">Mark as Not completed</a>
@endif
<a href="/deletetask/{{$task->id}}" class="btn btn-warning">DELETE</a>
<a href="/updatethetask/{{$task->id}}" class="btn btn-success">UPDATE</a>
</td>

</tr>
@endforeach 
</table>


</div>
</div>
</div>
</div>

</body>


</html>
