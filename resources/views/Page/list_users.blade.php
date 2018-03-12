@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<h1>List user</h1>

<hr>

<!-- @foreach($data_list as $obj)
    <p>{{ $obj->id }}</p>
    @endforeach -->
<form class="form-inline">
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">
        <i class="fa fa-search"></i>
        </button>
       </span>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Transfer cash</button>
</form>

<table class="table">
    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Password</td>
        <td>Status</td>
        <td>Operation</td>
    </tr>
    @foreach($data_list as $obj)
    <tr>
        <td>{{ $obj->id }}</td>
        <td>{{ $obj->username }}</td>
        <td>{{ $obj->password }}</td>
        <td>{{ $obj->status }}</td>
        <td>
            <button class="btn btn-danger btn-xs">
                <span class="glyphicon glyphicon-remove"></span>
                ลบข้อมูล
                <button class="btn btn-warning btn-xs">
                <span class="glyphicon glyphicon-pencil"></span>
                แก้ไข
        </td>
    </tr>
    @endforeach
</table>

@endsection