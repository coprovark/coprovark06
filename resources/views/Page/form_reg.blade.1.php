@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form >
                        <!-- div คำนำหน้า -->
                            <div class="form-group">
                              <label for="Sirname" >คำนำหน้าชื่อ</label>
                              <select name="select" class="form-control" placeholder="-คำนำหน้าชื่อ-">
                                    <option value="0">-คำนำหน้าชื่อ-</option>
                                    <option value="1">นาย</option>
                                    <option value="2">นางสาว</option>
                                    <option value="3">นาง</option>
                                    <option value="4">ว่าที่...</option>
                                    <option value="5">จัก</option>
                                    
                                </select>
                            </div>
                        <!-- div ชื่อ -->
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="Fname">ชื่อ</label>
                                    <input type="text" class="form-control" id="Fname" placeholder="xxx"> 
                                </div>
                        <!-- div สกุล -->
                                <div class="col-md-6">
                                    <label for="Lname">สกุล</label>
                                    <input type="text" class="form-control" id="Lname" placeholder="xxxxx">
                                </div>
                            </div><br>

                        <!-- div เพศ-->
                            <div class="form-group">
                              <label for="Sex">เพศ</label>
                                <input type="radio" name="sex" value="men"><font size="" color="">ชาย</font>
                                <input type="radio" name="sex" value="women"><font size="" color="">หญิง</font>
                            </div>
                        <!-- div เบอร์ -->
                            <div class="form-group">
                                <label for="Tell">เบอร์โทร</label>
                                <input type="number" class="form-control" id="Tell" placeholder="+66">
                              </div>
                        <!-- div ที่อยู่ -->
                              <div class="form-group">
                                <label for="Address">ที่อยู่</label><br>
                                <textarea name="adress" class="form-control" rows="8"  cols="100" maxlength="" placeholder="Adress"> </textarea>
                              </div>
                        <!-- div เมลล์ -->
                              <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="Email" class="form-control" id="Email" placeholder="example@gmail.com">
                              </div>
                        <!-- div ชอบ -->
                              <div class="form-group">
                                <label for="Like">สิ่งที่ชอบ&nbsp;&nbsp;&nbsp;</label>
                                <input type="checkbox" name="Phone" value="1"><font size="" color="">IPhone&nbsp;&nbsp;&nbsp;</font>
                                <input type="checkbox" name="Phone" value="2"><font size="" color="">Sumsung&nbsp;&nbsp;&nbsp;</font>
                                <input type="checkbox" name="Phone" value="3"><font size="" color="">Oppo&nbsp;&nbsp;&nbsp;</font>
                                <input type="checkbox" name="Phone" value="5"><font size="" color="">Vivo&nbsp;&nbsp;&nbsp;</font>
                                <input type="checkbox" name="Phone" value="6"><font size="" color="">Nokia&nbsp;&nbsp;&nbsp;</font>
                                <input type="checkbox" name="Phone" value="7"><font size="" color="">Huawei&nbsp;&nbsp;&nbsp;</font>
                                <input type="checkbox" name="Phone" value="8"><font size="" color="">Sony&nbsp;&nbsp;&nbsp;</font>
                                <input type="checkbox" name="Phone" value="0"><font size="" color="">อื่นๆ&nbsp;&nbsp;&nbsp;</font>
                              </div>
                        <!-- div จังหวัด -->
                              <div class="form-group">
                                    <label for="Email">จังหวัด</label>
                                    <input list="city" class="form-control" name="city" placeholder="ค้นหาจังหวัด">
                                    <datalist id="city">
                                            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                            <option value="กระบี่">กระบี่ </option>
                                            <option value="กาญจนบุรี">กาญจนบุรี </option>
                                            <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                            <option value="กำแพงเพชร">กำแพงเพชร </option>
                                            <option value="ขอนแก่น">ขอนแก่น</option>
                                            <option value="จันทบุรี">จันทบุรี</option>
                                            <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                            <option value="ชัยนาท">ชัยนาท </option>
                                            <option value="ชัยภูมิ">ชัยภูมิ </option>
                                            <option value="ชุมพร">ชุมพร </option>
                                            <option value="ชลบุรี">ชลบุรี </option>
                                            <option value="เชียงใหม่">เชียงใหม่ </option>
                                            <option value="เชียงราย">เชียงราย </option>
                                            <option value="ตรัง">ตรัง </option>
                                            <option value="ตราด">ตราด </option>
                                            <option value="ตาก">ตาก </option>
                                            <option value="นครนายก">นครนายก </option>
                                            <option value="นครปฐม">นครปฐม </option>
                                            <option value="นครพนม">นครพนม </option>
                                            <option value="นครราชสีมา">นครราชสีมา </option>
                                            <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                            <option value="นครสวรรค์">นครสวรรค์ </option>
                                            <option value="นราธิวาส">นราธิวาส </option>
                                            <option value="น่าน">น่าน </option>
                                            <option value="นนทบุรี">นนทบุรี </option>
                                            <option value="บึงกาฬ">บึงกาฬ</option>
                                            <option value="บุรีรัมย์">บุรีรัมย์</option>
                                            <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                            <option value="ปทุมธานี">ปทุมธานี </option>
                                            <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                            <option value="ปัตตานี">ปัตตานี </option>
                                            <option value="พะเยา">พะเยา </option>
                                            <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                            <option value="พังงา">พังงา </option>
                                            <option value="พิจิตร">พิจิตร </option>
                                            <option value="พิษณุโลก">พิษณุโลก </option>
                                            <option value="เพชรบุรี">เพชรบุรี </option>
                                            <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                            <option value="แพร่">แพร่ </option>
                                            <option value="พัทลุง">พัทลุง </option>
                                            <option value="ภูเก็ต">ภูเก็ต </option>
                                            <option value="มหาสารคาม">มหาสารคาม </option>
                                            <option value="มุกดาหาร">มุกดาหาร </option>
                                            <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                            <option value="ยโสธร">ยโสธร </option>
                                            <option value="ยะลา">ยะลา </option>
                                            <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                            <option value="ระนอง">ระนอง </option>
                                            <option value="ระยอง">ระยอง </option>
                                            <option value="ราชบุรี">ราชบุรี</option>
                                            <option value="ลพบุรี">ลพบุรี </option>
                                            <option value="ลำปาง">ลำปาง </option>
                                            <option value="ลำพูน">ลำพูน </option>
                                            <option value="เลย">เลย </option>
                                            <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                            <option value="สกลนคร">สกลนคร</option>
                                            <option value="สงขลา">สงขลา </option>
                                            <option value="สมุทรสาคร">สมุทรสาคร </option>
                                            <option value="สมุทรปราการ">สมุทรปราการ </option>
                                            <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                            <option value="สระแก้ว">สระแก้ว </option>
                                            <option value="สระบุรี">สระบุรี </option>
                                            <option value="สิงห์บุรี">สิงห์บุรี </option>
                                            <option value="สุโขทัย">สุโขทัย </option>
                                            <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                            <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                            <option value="สุรินทร์">สุรินทร์ </option>
                                            <option value="สตูล">สตูล </option>
                                            <option value="หนองคาย">หนองคาย </option>
                                            <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                            <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                            <option value="อุดรธานี">อุดรธานี </option>
                                            <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                            <option value="อุทัยธานี">อุทัยธานี </option>
                                            <option value="อุบลราชธานี">อุบลราชธานี</option>
                                            <option value="อ่างทอง">อ่างทอง </option>
                                            <option value="อื่นๆ">อื่นๆ</option>
                                    </datalist>
                                  </div>

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
                        <!-- div upload -->
                            <div class="form-group">
                              <label for="exampleInputFile">File input</label>
                              <input type="file" id="exampleInputFile" class="btn btn-default">
                              <p class="help-block">Example block-level help text here.</p>
                            </div>
                        <!-- div Check me out -->
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Check me out
                              </label>
                            </div>
                        <!-- button sucmit -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <br>
                            <br><hr>
                          </form>

@endsection