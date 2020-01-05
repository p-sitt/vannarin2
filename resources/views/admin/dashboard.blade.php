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
            <h1>สวัสดี {{ Auth::user()->name }}</h1>  
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
            <i class="fas fa-newspaper"></i>
            ข่าวสาร
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=VANNARIN" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=Agriculture+go+green" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=Vannarin" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

<div class="col-md-6">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">
            <i class="fas fa-bullhorn"></i>
            การแจ้งเตือน
            </h3>
          </div>
          <!-- /.card-header -->
              <div class="card-body">
                <div class="callout callout-danger">
                  <h5>Lorem Ipsum is simply dummy</h5>

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eleifend venenatis libero non laoreet. Cras placerat ipsum vehicula massa tempor ullamcorper. Mauris posuere ante quis odio auctor,</p>
                </div>
                <div class="callout callout-info">
                  <h5>Lorem ipsum dolor</h5>

                  <p>Fusce egestas, purus ut bibendum volutpat, nunc tellus iaculis nisl, id fringilla urna quam ut risus.</p>
                </div>
                <div class="callout callout-warning">
                  <h5>Etiam ullamcorper sit amet</h5>

                  <p>metus id tempus. Maecenas mattis est ac maximus tincidunt.</p>
                </div>
                <div class="callout callout-success">
                  <h5>consequat in dolor</h5>

                  <p>Curabitur a sem tincidunt, semper ligula vitae, euismod lorem. Aliquam quis venenatis libero.</p>
                </div>
              </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

        <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-th-list"></i>
                รายการสั่งจอง
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <li class="item">
                    <div class="product-img">
                      <img src="{{ asset('/img/Passion_Fr.jpg') }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">เสาวรส
                        <span class="badge badge-warning float-right">฿1000</span></a>
                      <span class="product-description">
                        สั่งจองไว้ 50 กิโล คุณมานพ กิติ
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="{{ asset('/img/Passion_Fr.jpg') }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">เสาวรส
                        <span class="badge badge-info float-right">฿500</span></a>
                      <span class="product-description">
                        สั่งจองไว้ 25 กิโล คุณปวีณา
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="{{ asset('/img/cucumbers.jpg') }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">
                        แตงกวา <span class="badge badge-success float-right">
                        $350
                      </span>
                      </a>
                      <span class="product-description">
                        สั่งจองไว้ 20 กิโล คุณปวีณา
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="{{ asset('/img/cabbage.jpg') }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">กะหล่ำปลี
                        <span class="badge badge-success float-right">฿100</span></a>
                      <span class="product-description">
                        สั่งจองไว้ 25 กิโล คุณปวีณา
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript:void(0)" class="uppercase">ดูทั้งหมด</a>
              </div>
              <!-- /.card-footer -->
            </div>
        </div></div>
    </section>
  </div>

@endsection