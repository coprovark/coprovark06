@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/testf" method="post">

                        
                        <!-- div user -->
                        <div class="form-group">
                                <label for="User">Input</label>
                                <input type="text" name="input" value="" class="form-control"  placeholder="---input your information---">
                              </div>
                        <!-- button sucmit -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            
                            <br><hr>
                          </form>
<div class="btn btn-default">
  True value = Osasxxx
</div><br><br>
<div class="btn btn-default">
  InPut   =   {{ $IN }}<br>
</div>
<?php
    if($IN != 'Null')
        if($IN=='Osasxxx'){
        echo "True"; 
        }
            else echo "False"
    ?>

@endsection