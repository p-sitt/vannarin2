@extends('layouts.master')

@section('content')
@if (session('status'))
        <div class="alert alert-success" role="alert">
             {{ session('status') }}
         </div>
 @endif
   
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ติดตั้งระบบ</h1>  
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-tools nav-icon"></i>
            ติดตั้งระบบ</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          
                <div class="form-group">   
                <form role="form">
                <div class="card-body">
                  <div class="form-group">
                      <label>เลือกโซน</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option>โซน 1</option>
                        <option>โซน 2</option>
                        <option>โซน 3</option>
                        <option>โซน 4</option>
                        <option>โซน 5</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>การทำงาน</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option>ให้น้ำพืช</option>
                        <option>สั่งการทำงานอื่น</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>เลือกชนิดพืช</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option>เสาวรส</option>
                        <option>ลำไย</option>
                        <option>ผักขึ้นฉ่าย</option>
                        <option>อะโวคาโด</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>ช่วงการเจริญเติบโต</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option>ช่วงปกติ</option>
                        <option>ช่วงออกดอก</option>
                        <option>ช่วงให้ผลผลิต</option>
                        <option>ช่วงพัก</option>
                      </select>
                  </div>
                  <a href="#" class="btn btn-lg btn-secondary">ยกเลิก</a>
                  <a href="/waterstatus" class="btn btn-lg btn-primary">ตกลง</a>
                </div>
                </form>
                </div>
                <!-- /.form-group -->
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection