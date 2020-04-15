@extends('layouts.master')


@section('title')

        edit users

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
        <form action="/register-update/{{  $users->id  }}" method="post">
    {{ csrf_field()}}
    {{ method_field('PUT')}}
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="email" value="{{ $users->name  }}" placeholder="Enter email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10">          
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div></div>
  </form>
</div>
</div>
</div>
  @section('scripts')


@endsection
