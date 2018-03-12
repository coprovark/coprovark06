@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/form_login2" method="post">

                        
    <!-- div user -->
        <div class="form-group">
            <label for="User">Username</label>
            <input type="text" name="username" value="" class="form-control"  placeholder="Username">
          </div>
      <!-- div pass -->
          <div class="form-group">
              <label for="pass">Password</label>
              <input type="Password" name="pass" value="" class="form-control"  placeholder="Password">
          </div>

                        <!-- button submit -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <br>
                            <br><hr>
                          </form>
<h3>User name =</h3> {{ $username }}
<h3>ID =</h3> {{ $name }}
@endsection