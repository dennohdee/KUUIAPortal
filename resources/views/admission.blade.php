@extends('layouts.admin')
@section('content')
<section class="content-header">
      <h1>
        Online Admission.&nbsp;
        <small>Please register here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Admission</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Student Details</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- form-->
          
<!-- general form elements -->
          
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
                @csrf
              <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input class="form-control" id="name" name="name" placeholder="Your full name." type="text">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <div class="radio">
                    <label>
                      <input name="gender" id="gender" value="Male" type="radio">
                      Male&nbsp;
                      <label>
                      </label>
                      <input name="gender" id="gender" value="Female" type="radio">
                      Female
                  </label>
                  </div>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="name">ID No.</label>
                  <input class="form-control" id="idno" name="name" placeholder="ID No." type="text">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Full Name</label>
                  <input class="form-control" id="name" name="name" placeholder="Your name" type="name">
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="name">ID No.</label>
                  <input class="form-control" id="idno" name="name" placeholder="ID No." type="text">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Full Name</label>
                  <input class="form-control" id="name" name="name" placeholder="Your name" type="name">
                </div>
                </div>
                </div>
                
                <div class="checkbox">
                  <label>
                     <input type="checkbox" name="newsletter"> Disabled
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
            </form>
          
          <!-- /.box -->
             </div>
            <!-- /.box-body -->
        
          <!-- /.box -->
          </section>
@endsection