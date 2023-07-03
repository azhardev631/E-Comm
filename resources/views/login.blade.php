@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <form method="POST" action="login">
                    @csrf
                    <div class="row mb-3">
                      <label for="inputEmail3" class=" col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class=" col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </form>
            </div>
        </div>
    </div>
@endsection


