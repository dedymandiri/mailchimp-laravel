
@if (session('status'))
    <div class="alert alert-success">
    {{ session('status') }}
    </div>
@endif

<form action="/index/newsletter" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label><br>
    <input style="width:300px;height:35px;" type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><br>
     </div><br>
  {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

