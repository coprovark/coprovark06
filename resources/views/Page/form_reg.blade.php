@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/form_register_save" method="post">
                                        <!-- div เบอร์ -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Tell">ID</label>
                                    <input type="number" class="form-control" name="ID" placeholder="">
                                </div>
                            </div>
                        </div>

                        <!-- div user -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label for="User">Username</label>
                                        <input type="text" class="form-control" name="USER" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <!-- div pass -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label for="pass">Password</label>
                                        <input type="Password" class="form-control" name="PASSWORD" placeholder="Password">
                                </div>
                            </div>
                        </div>

                        <!-- div Repass -->
                        <div class="row">
                            <div class="col-md-3">
                            <select name="STATUS" class="form-control" placeholder="-Status-">
                                    <option value="0">Admin</option>
                                    <option value="1">User</option>
                                    <option value="3">Vip</option>
                                    
                                </select>
                            </div>
                        </div><br>

                        <!-- button sucmit -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <br>
                            <br><hr>
                          </form>

@endsection