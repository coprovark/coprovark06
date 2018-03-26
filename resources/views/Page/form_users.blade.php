@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form >
<form action="/form_register_save2" method="post">
                        <!-- div user -->
                        <div class="form-group">
                                <label for="User">User_code</label>
                                <input type="int" class="form-control" name="user_code" placeholder="">
                              </div>
                        <!-- div pass -->
                        <div class="form-group">
                                <label for="pass">Username</label>
                                <input type="varchar" class="form-control" name="user_name" placeholder="Username">
                              </div>
                        <!-- div Repass -->
                        <div class="form-group">
                                <label for="pass">user_password</label>
                                <input type="varchar" class="form-control" name="user_password" placeholder="RePassword">
                              </div>
                        <div class="form-group">
                                <label for="pass">user_level</label>
                                <input type="varchar" class="form-control" name="user_level" placeholder="">
                        </div>
                        <div class="form-group">
                                <label for="pass">user_enable</label>
                                <input type="varchar" class="form-control" name="user_enable" placeholder="">
                        </div>
                        <!-- button sucmit -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <br>
                            <br><hr>
                          </form>

@endsection