@extends('layouts.admins')
@section('content')

                    
                    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Home</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      @if (session('status'))
                        <div class="alert alert-success" role="alert">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Welcome!</h4>
               You are Logged in As Admin!
              </div>
                    
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><i class="fa fa-database" style="opacity:0.3"></i>
             
              </h3>

              <p>Repository</p>
            </div>
            <div class="icon">
              <i class="ion ion-message"></i>
            </div>
            <a href="{{ route('admin.repository') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><i class="fa fa-retweet" style="opacity:0.3"></i>
              <sup style="font-size: 20px"></sup>
              </h3>

              <p>Renew Membership</p>
            </div>
            <div class="icon">
              <i class="ion ion-bed"></i>
            </div>
            <a href="{{ route('admin.sessionreporting') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><i class="fa fa-comments" style="opacity:0.3"></i></h3>

              <p>Messages</p>
            </div>
            <div class="icon">
              <i class="ion ion-status"></i>
            </div>
            <a href="{{ route('admin.contact') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><i class="fa fa-calendar" style="opacity:0.3"></i></h3>

              <p>Calendar</p>
            </div>
            <div class="icon">
              <i class="ion ion-comments"></i>
            </div>
            <a href="{{ route('admin.events')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      </section>
                   
               
@endsection
