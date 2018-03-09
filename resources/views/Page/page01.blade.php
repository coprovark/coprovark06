@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<style>
  /* คำสั่งกำกับ CSS */
p { border: 1px solid powderblue;}
td {font-family : PL-EDIT;}
</style>
<Form action="/page" target="" method="POST">
	<!-- ฟอร์ม1 -->
	<table border="2" width="100%" style="color:blue;">	
			<tr>
				<td width="100%" bgcolor="black"><textarea name="name" rows="4"  cols="100%" maxlength="" value=""></textarea></td>
			</tr>
	</table>
		<table border="2" width="100%" style="color:blue;">
            <tr>
				<td width="10%" align="center"><font size="5" color="" face=""> ยี่ห้อมือถือที่ใช้&nbsp;</font>
				</td>
				<td width="40%"><input type="checkbox" name="checkbox" value="Iphone"><font size="" color="black">IPhone</font>
					<input type="checkbox" name="checkbox" value="Somsung"><font size="" color="black">Sumsung</font>
                    <input type="checkbox" name="Phone" value="3"><font size="" color="black">Oppo</font>
				</td>
            </tr>

            <tr>
				<td width=""align="center"><font size="5" color="" face="">เพศ&nbsp;</font></td>
				<td><input type="radio" name="radio" value="Men"><font size="" color="black">ชาย</font>
					<input type="radio" name="radio" value="Women"><font size="" color="black">หญิง</font>
                    <input type="radio" name="radio" value="[- -]"><font size="" color="black">อื่นๆ</font>
				</td>
            </tr>
			<tr>
				<td width=""align="center">
					<font size="5" color="" face="">Password</font>
				</td>
				<td>
					<input type="password" name="password" value="">
				</td>
            </tr>
        </table><br>
		<input type="hidden" name="hidden" value="58181740122">
		<br>
        <input width="30%" type="submit" value="ส่ง">
</form>
<h1><font size="20" color="#ff9900" face="PL-EDIT">แสดงค่า</font></h1>
ชื่อ      {{ $Namaewa }} <br>
เพศ     {{ $Sex }}<br>
ID      {{ $ID }}<br>
มือถือ    {{ $Phone }}<br>
pass    {{ $password }}<br>
@endsection