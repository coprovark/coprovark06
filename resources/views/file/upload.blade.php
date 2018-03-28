@extends('layouts.main')

@section('content')


                    <div class="col-sm-12">
                          <form action="/uploader" method="post" enctype="multipart/form-data">
                             
                          <center>
                          <div class="form-group">

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label"><h2>File</h2></label>
                                <br>
                                <div class="col-sm-9">
                                <input type="text" class="form-control"  name="uploadfilename" placeholder="กรอกชื่อไฟล์"><br>
                                <input type="file" class="form-control"  name="uploadfile" ><br>
                                </div>
                                
                          </div>
                          </center>
                           

                                                  
                          
                  <center>
                        <button type="submit" class="btn btn-primary">Upload</button>
                        <a type="reset"  class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br>

                </form>

<table  width="80%" class="table">
    <thead>
        <tr class = "info">
            <th width="200px"></th>
            <th>#</th>
            <th>ชื่อไฟล์</th>
            <th>ประเภทไฟล์</th>
            <th>path</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datatable as $row)
        <tr>
            <td>
            @if($row->file_type=='jpeg')
            <img src ="upload/{{$row->file_path}}" width="100%">
            @endif
            </td>
            <td>{{ $i++ }}</td>
            <td>{{ $row->file_name }}</td>
            <td>{{ $row->file_type }}</td>
            <td>{{ $row->file_path }}</td>
            <td><a href="dl/{{$row->file_path}}" taget="new">Download</a></td>
        </tr>
<br>
        @endforeach
    </tbody>

</table>
@endsection