@extends("master")
@section("content")
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Logowanie</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif

  <form method="post" action="{{url('login')}}">
   {{csrf_field()}}
   <div class="form-group">
   		<input type="text" name="login" class="form-control" placeholder="Login" />
   </div>
   <div class="form-group">
    	<input type="password" name="haslo" class="form-control" placeholder="Has�o" />
   </div>
   <div class="form-group">
    	<input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection