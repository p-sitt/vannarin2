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
            <h1>เพิ่มชนิดพืช</h1>  
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
              <i class="fas fa-plus-square nav-icon"></i>
            เพิ่มชนิดพืช</h3>
          </div>
          <!-- /.card-header -->

          <form method="post"  action="{{ url('plant-type') }}"> {{ csrf_field() }}
          <div class="card-body">
            @if(count($errors) > 0)
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i>Error!</h5>
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
              </div>
            @endif

            @if(\Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Success</h5>
                  {{ \Session::get('success') }}
              </div>
              @endif
            <div class="form-group">   
                <label>ชนิดพืข</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="ชนิดพืข">
            </div>
          </div>
          <div class="card-footer">
              <input type="submit" class="btn btn-primary float-right" value="เพิ่มข้อมูล">
          </div>
        </form>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection