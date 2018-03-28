@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<h1>ตารางข้อมูล</h1>
<form action="/list_users_find" method="post" class="form-inline">
<div style="float:right">
        <div class="form-group">
            <input type="text" name="find" class="form-control" value="{{ $find }}" placeholder="ค้นหา....">
        </div>
        <button type="submit" class="btn btn-warning">ค้นหา</button>
    </div>
 </form>
 <br>
 <a href="/form_register" type="button" class="btn btn-primary btn-md" style="margin-center">เพิ่มข้อมูล</a>
 <br>
 <br>
<table class="table table-bordered" style="text-align: center;">
    <tr class="info">
        <td>ID</td>
        <td>code</td>
        <td>Username</td>
        <td>Password</td>
        <td>level</td>
        <td>enable</td>
        <td></td>
    </tr>
    @foreach($data_list as $item)
    <tr>
        <td>{{$item->user_id}}</td>
        <td>{{$item->user_code}}</td>
        <td>{{$item->user_name}}</td>
        <td>{{$item->user_password}}</td>
        <td>{{$item->user_level}}</td>
        <td>{{$item->user_enable}}</td>
        <td>
        <button type="button" class="btn btn-danger" onclick="return _confirm('{{ $item->user_id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>
                <a href="/list_user_edit/{{ $item->user_id }}" class="btn btn-info">แก้ไข</a>
        @endforeach
    </tr>
</table>
<script>
    function _confirm(id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_user/'+id;
        }
    }
</script>
@endsection