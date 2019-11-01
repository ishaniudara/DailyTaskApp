<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<br>
<br>
<br>
<form action="/updated" method="post">
{{csrf_field()}}
<input type="text" class="form-control" value="{{$taskdata->task}}"/>
<input type="hidden" name="id" value="{{$taskdata->id}}"/>

<br>
<br>
<input type="submit" class="btn btn-success" value="update"/>
&nbsp;
&nbsp;
<input type="button" class="btn btn-danger" value="cancel"/>
</form>
</div>
</body>
</html>