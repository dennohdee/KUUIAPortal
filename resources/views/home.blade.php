@extends('layouts.admin')
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
                            {{ session('status') }}
                        </div>
                    @endif
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
            <a href="{{ route('repository') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="{{ route('sessionreporting') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="{{ route('contact') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="{{ route('calendar')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      </section>
                   
               
@endsection
