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
            <h1>รายการชนิดพืช</h1>  
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-file-alt nav-icon"></i>
            ชนิดพืช</h3>
          </div>
          <!-- /.card-header -->
          
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10%">No.</th>
                  <th>ชนิดพืช</th>
                  <th>แก้ไข</th>
                </tr>
                </thead>
                <tbody>
                 <div style="visibility: hidden;">{{ $number = 1 }}</div>
                @foreach($plant as $row)
                <tr>
                  <td>{{ $number++ }}</td>
                  <td>{{ $row['name'] }}</td>
                  <td>{{ $row['id'] }}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>ชนิดพืช</th>
                  <th>แก้ไข</th>
                </tr>
                </tfoot>
              </table>
        </div>
      </div>
      </div>
    </div>
  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


            <!-- /.card-header -->
            <div class="card-body">

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

@section('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('.data-table').dataTable();
        });
    </script>
@stop
@endsection