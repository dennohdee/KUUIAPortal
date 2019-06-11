@extends('layouts.admin')
@section('content')
<section class="content-header">
      <h1>
        Admin.&nbsp;
        <small>Personal details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">My Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
<!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('profile') }}" method="post">
                @csrf
              <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input class="form-control" id="name" name="name" value="" placeholder="" type="text" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input class="form-control" id="email" name="email" value="" placeholder="Your Email" type="email" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Member Since:</label>
                  <input class="form-control" id="created_at" name="created_at" value="" placeholder="" type="text" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Photo</label>
                  <input class="form-control" id="email" name="email" value="" type="file" required>
                </div>
                </div>
                </div>
                        
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          <!-- /.box -->
          </section>
@endsection