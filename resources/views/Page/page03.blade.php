@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<Form action="/page11" target="" method="POST">
    <input type="password" name="password" value="">
    <input  type="submit" value="ส่ง">
</form>
@endsection