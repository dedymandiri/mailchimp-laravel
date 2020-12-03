<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>

<style>
body{
    margin-left:100px;
}
.card-body{
    width:1000px;
    margin-left:-20px;
}
.form-group input{
    width:300px;
    height:45px;
}
</style>

<body><br>
<h3>Integrate Mailchimp Newsletter </h3>

<!--Bagian alert-->
<div class="card-body">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success') }}
        </div>
    @endif
    @if (session('failed'))
        <div class="alert alert-danger" role="alert">
            {{ session ('failed') }}
        </div>
    @endif
</div>

<!--Bagian form inputan buat email-->
<form action="{{url('/newsletter')}}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label><br>
    <input type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><br>
     </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

