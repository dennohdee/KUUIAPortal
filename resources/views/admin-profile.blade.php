@extends('layouts.admins')
@section('content')
<section class="content-header">
      <h1>
        My profile.&nbsp;
        <small>Personal details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Profile</li>
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
            <form role="form" action="{{ route('admin.profile') }}" method="PUT">
                @csrf
                @foreach($users as $user)
              <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="" type="text" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Your Email" type="email" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="created_at">Member Since:</label>
                  <input class="form-control" id="created_at" name="created_at" value="{{ $user->created_at }}" type="text" readonly>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="file">Photo</label>
                  <input id="file" name="file" type="file">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input class="form-control" type="password" name="cpassword">
                </div>
                </div>
                </div>
                @endforeach
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          <!-- /.box -->
          </section>
@endsection