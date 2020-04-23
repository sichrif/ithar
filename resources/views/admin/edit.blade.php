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
     <!--          
          <form action="/register-update/{{  $users->id  }}" method="post"> 
          -->
          <form action="/register-update/{{  $users->id  }}" method="post">
            {{ csrf_field()}}
  {{ method_field('PUT')}}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" value="{{ $users->email }}" id="inputEmail4" placeholder="Email" name="email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" value="{{ $users->password }}" id="inputPassword4" placeholder="Password" name="password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" value="{{ $users->adress }}" placeholder="1234 Main St" name="adress">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="">
                    Check me out
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
 
</div>
</div>
</div>


@endsection
