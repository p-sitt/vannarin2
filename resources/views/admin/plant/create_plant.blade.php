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
            <h1>เพิ่มข้อมูลพืช</h1>  
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <form method="post"  action="{{ url('plant') }}"> {{ csrf_field() }}
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-plus-square nav-icon"></i>
            ข้อมูลทั่วไป</h3>
          </div>
          <!-- /.card-header -->

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
            <div class="form-group input-group-lg">   
                <label>ชนิดพืข</label>
                <select class="form-control">
                    <option>เลือกชนิดของพืช</option>
                @foreach($plantType as $row)
                    <option value="{{ $row['id'] }}">{{ $row['name'] }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group input-group-lg">   
                <label>ชื่อสามัญ</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อสามัญ">
            </div>
            <div class="form-group input-group-lg">   
                <label>ชื่อวงศ์</label>
                <input type="text" class="form-control" id="family_name" name="family_name" placeholder="ชื่อวงศ์">
            </div>
            <div class="form-group input-group-lg">   
                <label>ชื่อวิทยาศาสตร์</label>
                <input type="text" class="form-control" id="sci_name" name="sci_name" placeholder="ชื่อวิทยาศาสตร์">
            </div>
            <div class="form-group input-group-lg">   
                <label>ชื่ออื่นๆ</label>
                <input type="text" class="form-control" id="other_name" name="other_name" placeholder="ชื่ออื่นๆ">
            </div>
            <div class="form-group input-group-lg">   
                <label>ช่วงที่เหมาะสมในการปลูก</label>
                <input type="text" class="form-control" id="suitable_range" name="suitable_range" placeholder="ช่วงที่เหมาะสมในการปลูก">
            </div>
            <div class="form-group input-group-lg">   
                <label>ปริมาณการใช้น้ำ</label>
                <input type="text" class="form-control" id="water_level" name="water_level" placeholder="ปริมาณการใช้น้ำ">
            </div>
          </div>
        </div>
        </div>

        <div class="col-md-6">
          <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-plus-square nav-icon"></i>
            ข้อมูลอื่นๆ</h3>
          </div>
          <div class="card-body">
            
            <div class="form-group input-group-lg">   
                <label>ความสูงของต้น</label>
                <input type="text" class="form-control" id="height" name="height" placeholder="ความสูงของต้น">
            </div>
            <div class="form-group input-group-lg">   
                <label>ความยาวของราก</label>
                <input type="text" class="form-control" id="root_range" name="root_range" placeholder="ความยาวของราก">
            </div>
            <div class="form-group input-group-lg">   
                <label>เริ่มให้ผลผลิต</label>
                <input type="text" class="form-control" id="product_start" name="product_start" placeholder="เริ่มให้ผลผลิต">
            </div>
            <div class="form-group input-group-lg">   
                <label>ช่วงการให้ผลผลิต</label>
                <input type="text" class="form-control" id="  product_range" name=" product_range" placeholder="ช่วงการให้ผลผลิต">
            </div>
            <div class="form-group input-group-lg">   
                <label>อายุ</label>
                <input type="text" class="form-control" id="age" name="age" placeholder="อายุ">
            </div>
            <div class="form-group input-group-lg">   
                <label>ข้อเสนอแนะ</label>
                <input type="text" class="form-control" id="comment" name="comment" placeholder="ข้อเสนอแนะ">
            </div>
          </div>
        </div>
        </div>


        <div class="col-md-6">
          <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-plus-square nav-icon"></i>
            เพิ่มรูปภาพ</h3>
          </div>
          <div class="card-body">
              <div class="form-group ">
                <label for="exampleInputFile">รูปลำต้น</label>
                <div class="input-group ">
                  <div class="custom-file ">
                    <input type="file" class="custom-file-input" id="img_trunk" name="img_trunk">
                    <label class="custom-file-label" for="exampleInputFile">เลือกไฟล์</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">รูปดอก</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="img_flower" name="img_flower">
                    <label class="custom-file-label" for="exampleInputFile">เลือกไฟล์</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">รูปใบ</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="img_blade" name="img_blade">
                    <label class="custom-file-label" for="exampleInputFile">เลือกไฟล์</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">รูปผล</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="img_fruit" name="img_fruit">
                    <label class="custom-file-label" for="exampleInputFile">เลือกไฟล์</label>
                  </div>
                </div>
              </div>
          </div>
          <div class="card-footer">
          <input type="submit" class="btn btn-primary float-right" value="เพิ่มข้อมูล">
        </div>
        </div>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
  </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection