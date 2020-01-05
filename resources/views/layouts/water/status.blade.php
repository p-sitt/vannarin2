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
            สถานะของระบบ</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <div class="row">
              <div class="col-lg-6 col-6">
              <!-- small card -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                  <p>เสาวรส</p>
                </div>
                <div class="icon">
                  <i class="nav-icon fas fa-tint"></i>
                </div>
                <a href="#" class="small-box-footer">
                  ข้อมูลเพิ่มเติม<i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
      
              <div class="col-lg-6 col-6">
              <!-- small card -->
              <div class="small-box bg-info">
                <!-- Loading (remove the following to stop the loading)-->
                <div class="overlay">
                  <i class="fas fa-3x fa-sync-alt"></i>
                </div>
                <!-- end loading -->
                <div class="inner">
                  <h3>25<sup style="font-size: 20px">%</sup></h3>

                  <p>ลำไย</p>
                </div>
                <div class="icon">
                  <i class="nav-icon fas fa-tint"></i>
                </div>
                <a href="#" class="small-box-footer">
                  ข้อมูลเพิ่มเติม <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
</div>
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