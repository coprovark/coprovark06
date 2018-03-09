@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<Form action="/page12" target="" method="POST">
    <select name="select">
        <option value="0"><center>-สังกัด-</center></option>
        <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
        <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์ </option>
        <option value="คณะบริหารธุรกิจและการจัดการ">คณะบริหารธุรกิจและการจัดการ </option>
        <option value="คณะนิติศาสตร์">คณะนิติศาสตร์ </option>
        <option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
        <option value="คณะเกษตรศาสตร์">คณะเกษตรศาสตร์</option>
        <option value="คณะเทคโนโลยีอุตสาหกรรม">คณะเทคโนโลยีอุตสาหกรรม</option>
        <option value="คณะวิทยาการคอมพิวเตอร์">คณะวิทยาการคอมพิวเตอร์</option>
        <option value="คณะสาธารณสุขศาสตร์">คณะสาธารณสุขศาสตร์</option>
        <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
        <option value="คณะแพทย์แผนไทยและแพทย์ทางเลือก">คณะแพทย์แผนไทยและแพทย์ทางเลือก</option>
    </select>
    <br>
    <textarea name="txt_textarea"></textarea>
    <br>
    <input  type="submit" value="ส่ง">
</form>
@endsection