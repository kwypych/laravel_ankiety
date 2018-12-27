<meta charset="utf-8">
@extends('master')

    @section('content')
    <div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Rejestracja</h3>
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
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('user')}}">
   {{csrf_field()}}
   <div class="form-group">
   		<input type="text" name="imie" class="form-control" placeholder="Imie" />
   </div>
   <div class="form-group">
    	<input type="text" name="nazwisko" class="form-control" placeholder="Nazwisko" />
   </div>
   <div class="form-group">
   		<input type="text" name="login" class="form-control" placeholder="Login" />
   </div>
   <div class="form-group">
    	<input type="password" name="haslo" class="form-control" placeholder="Haslo" />
   </div>
   <div class="form-group">
   		<input type="text" name="email" class="form-control" placeholder="Email" />
   		<small id="emailHelp" class="form-text text-muted">Nigdy nikomu nie podamy Twojego adresu email.</small>
   </div>
   <div class="form-group">
    	<input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection