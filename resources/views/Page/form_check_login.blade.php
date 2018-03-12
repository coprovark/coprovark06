@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/form_check_login" method="post">

                        
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

                        <!-- button sucmit -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <br>
                            <br><hr>
                          </form>
                          <hr>

@foreach ($users as $user)
    {{ $user->username }}
@endforeach
@endsection