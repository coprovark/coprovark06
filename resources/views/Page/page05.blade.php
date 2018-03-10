@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/cal" method="post">

                        
        <!-- div user -->
        <div class="form-group">
            <label for="User">A</label>
            <input type="number" name="A" value="" class="form-control"  placeholder="">
        </div>
        <!-- div pass -->
        <div class="form-group">
            <label for="pass">B</label>
            <input type="number" name="B" value="" class="form-control"  placeholder="">
        </div>

                        <!-- button sucmit -->
                            <button type="submit" class="btn btn-primary">Calculate</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <br>
                            <br><hr>
                          </form>

<div class="btn btn-default">
  GetA   =   {{ $A }}<br>
  GetB   =   {{ $B }}<br>
</div><br>
<?php
    if($A&&$B != 'Null'){
    $Positive = $A + $B;
    $minus = $A - $B;
    $multiply = $A * $B;
    $divide = $A / $B;
    $mod = $A%$B;
    echo"A + B = $Positive<br />";
    echo"A - B = $minus<br />";
    echo"A * B = $multiply<br />";
    echo"A / B = $divide<br />";
    echo"A % B = $mod<br />";
    }
    ?>
<br><br>
@endsection