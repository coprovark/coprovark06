@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/check" method="post">

                        
                        <!-- div user -->
                        <div class="form-group">
                                <label for="User">Username</label>
                                <input type="text" name="user" value="" class="form-control"  placeholder="Username">
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

<div class="btn btn-danger">
  Set User = Osasxx<br>
  Set Password = 99999 
</div>
<br><br>
<div class="btn btn-default">
  Username   =   {{ $user }}<br>
  Password   =   {{ $pass }}<br>
</div><br><br>
<?php
    if($user&&$pass != 'Null'){
        if($user=='Osasxxx'&& $pass=='99999')
        {
          echo " True"; 
        }
          else {
                echo " False";
               }
    }  
    ?>
<br><br>
@endsection