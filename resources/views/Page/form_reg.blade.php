@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/form_register_save" method="post">
                                        <!-- div sid -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-inline">
                                   <label for="Tell">รหัสนักศึกษา</label>
                                   <input type="int" class="form-control" name="sid" placeholder="">
                                </div> <br>
                            

                        <!-- div คำนำหน้า -->
                                <div class="form-inline">
                                    <label for="Sirname" >คำนำหน้าชื่อ</label>
                                    <select name="titleName" class="form-control" placeholder="-คำนำหน้าชื่อ-">
                                            <option value="0">-คำนำหน้าชื่อ-</option>
                                            <option value="1">นาย</option>
                                            <option value="2">นางสาว</option>
                                            <option value="3">นาง</option>
                                        </select>
                                    </div>
                            </div>
                        </div><br>

                        <!-- div fullname -->
                                <div class="form-inline">
                                    <label >ชื่อ-สกุล   </label>
                                    <input type="char" class="form-control" name="fullName" placeholder="ชื่อ-สกุล" size="50%">
                                </div><br>


                        <!-- div เพศ-->
                        <div class="form-group">
                              <label >เพศ</label>
                                <input type="radio" name="gender" value="1"><font size="" color="">ชาย</font>
                                <input type="radio" name="gender" value="2"><font size="" color="">หญิง</font>
                                <input type="radio" name="gender" value="3"><font size="" color="">เพศทางเลือก</font>
                            </div>
                        
                        <!-- div วันเเกิด -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                        <label>วัน เดือน ปีเกิด</label>
                                        <input type="date" class="form-control" name="birthDay" placeholder=""><br>
                                        <label>อายุ</label>
                                    </div>
                                </div>
                            </div>

                            <!-- div คณะ -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pass">สังกัดคณะ</label>
                                    <input class="form-control" list="faculty" name="facultyID" placeholder="ค้นหาคณะ">
                                        <datalist id="faculty">
                                        <option value="01">คณะครุศาสตร์</option>
                                        <option value="02">คณะมนุษยศาสตร์และสังคมศาสตร์ </option>
                                        <option value="03">คณะบริหารธุรกิจและการจัดการ </option>
                                        <option value="04">คณะนิติศาสตร์ </option>
                                        <option value="05">คณะวิทยาศาสตร์</option>
                                        <option value="06">คณะเกษตรศาสตร์</option>
                                        <option value="07">คณะเทคโนโลยีอุตสาหกรรม</option>
                                        <option value="08">คณะวิทยาการคอมพิวเตอร์</option>
                                        <option value="09">คณะสาธารณสุขศาสตร์</option>
                                        <option value="10">คณะพยาบาลศาสตร์</option>
                                        <option value="11">คณะแพทย์แผนไทยและแพทย์ทางเลือก</option>
                                        </datalist>
                                </div>

                                <!-- div สาขา -->
                                <div class="form-group">
                                    <label for="major" >สาขา</label>
                                    <select name="majorID" class="form-control" placeholder="-สาขาวิชา-">
                                            <option value="01">CS</option>
                                            <option value="02">SE</option>
                                            <option value="03">IMT</option>
                                            <option value="04">CET</option>
                                        </select>
                                    </div>
                            </div>
                        </div>


                            <!-- div ที่อยู่ -->
                            <div class="form-group">
                                <label for="Address">ที่อยู่</label><br>
                                <textarea name="address" class="form-control" rows="8"  cols="100" maxlength="" placeholder="Adress"> </textarea>
                            </div>

                        <!-- div เบอร์ -->
                        <div class="form-group">
                                <label for="Tell">เบอร์โทร</label>
                                <input type="char" class="form-control" name="mobile" placeholder="+66" size="50%">
                              </div>
                    
                        <div class="form-group">
                                <p>
                              <label >อาหารที่ชอบ</label>&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="food1" value="1"><font size="" color="">IPhone</font>&nbsp;&nbsp;
                                <input type="checkbox" name="food2" value="2"><font size="" color="">Sumsung</font>&nbsp;&nbsp;
                                <input type="checkbox" name="food3" value="3"><font size="" color="">Oppo</font>&nbsp;&nbsp;
                                <input type="checkbox" name="food4" value="5"><font size="" color="">Vivo</font>&nbsp;&nbsp;
                                </p>
                        </div>
                        <hr><br>

                        <div class="row">
                            <div class="col-md-6">
                         <!-- div user -->
                                    <div class="form-group">
                                            <label for="User">Username</label>
                                            <input type="char" class="form-control" name="username" placeholder="Username">
                                    </div>

                                <!-- div pass -->
                                
                                        <div class="form-group">
                                            <label for="pass">Password</label>
                                            <input type="Password" class="form-control" name="password" placeholder="Password">
                                        </div>
                            </div>
                        </div>
                        <br>

                        <!-- button sucmit -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <br>
                            <br><hr>
                          </form>

@endsection