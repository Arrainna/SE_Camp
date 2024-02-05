@extends('layouts.default')

@section('title','Homepage')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Starter Page</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Workshop #Laravel-form</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>ชื่อ</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                          <label>สกุล</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                      </div>
                    </div>

                    <!-- input states -->
                    <div class="form-group">
                      <label class="col-form-label" for="inputSuccess"><i class="fas fa-calendar"></i> วัน/เดือน/ปีเกิด:</label>
                        <input type="date" id="birthday" name="birthday">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputWarning"><i class="fas fa-clock"></i> อายุ</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputError"> เพศ</label>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <label for="Man"><input type="radio" id="man" name="sex" value="Man"> ชาย</label>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <label for="Woman"><input type="radio" id="Woman" name="sex" value="Woman"> หญิง</label><br>
                    </div>
                    <div>
                      <label class="col-form-label" for="inputError"> รูป</label>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image/*">
                      <label class="custom-file-label" for="image/*">image</label>
                    </div>
                    <div class="form-group">
                      <br>
                      <label>ที่อยู่</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                      <label for="colorPicker">สีที่ชอบ:</label>
                      <input type="color" id="colorPicker" name="colorPicker" value="#ff0000">
                    </div>
                    <div class="form-group">
                      <label for="song">แนวเพลงที่ชอบ:</label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label for="html"><input type="radio" id="song1" name="song" value="song"> เพื่อชีวิต</label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label for="html"><input type="radio" id="song2" name="song" value="song"> ลูกทุ่ง</label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label for="html"><input type="radio" id="song3" name="song" value="song"> อื่นๆ</label><br><br>
                    </div>
                    <div class="form-group">
                      <label for="vehicle1"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> ยินยอมให้เก็บข้อมูล</label>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Submit</button>
                      <button type="submit" class="btn btn-default float-right">Cancel</button>
                    </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              </div>
              <!-- /.card -->
            </div>
@endsection
