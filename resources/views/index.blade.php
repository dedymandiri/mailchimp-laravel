<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body style="margin-left:100px;"><br>
<h3>Integrate Mailchimp Newsletter </h3>
@if (session('status'))
    <div style="width:1000px;" class="alert alert-success" role="alert">
        {{ session ('status') }}
    </div>
@endif
<br>
<form action="/index/newsletter" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label><br>
    <input style="width:300px;height:45px;" type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><br>
     </div>
  {{ csrf_field() }}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

