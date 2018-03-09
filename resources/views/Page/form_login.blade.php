@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form >


                        <!-- div user -->
                        <div class="form-group">
                                <label for="User">Username</label>
                                <input type="text" class="form-control" id="User" placeholder="Username">
                              </div>
                        <!-- div pass -->
                        <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="Password" class="form-control" id="Password" placeholder="Password">
                              </div>
                        <!-- div Repass -->
                        <div class="form-group">
                                <label for="pass">RePassword</label>
                                <input type="Password" class="form-control" id="RePassword" placeholder="RePassword">
                              </div>
                        <!-- button sucmit -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <br>
                            <br><hr>
                          </form>

@endsection