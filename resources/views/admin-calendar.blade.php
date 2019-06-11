@extends('layouts.admins')
@section('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection
@section('content')
<section class="content-header">
      <h1>
        Calendar
        <small> Our Academic Calendar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Calendar</li>
      </ol>
    </section>

  <!-- Main content -->
<section class="content container-fluid">
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title"><i class="fa fa-calendar"></i>&nbsp;</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
</button>
</div>
<!-- /.box-tools -->
</div>
<!-- /.box-header -->
<div class="box-body">
     
      <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Common Events</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
                <div class="external-event bg-green">Coding Sessions</div>
                <div class="external-event bg-yellow">Coding Nights</div>
                <div class="external-event bg-aqua">GDGs</div>
                <div class="external-event bg-red">Shows</div>
                
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
         <div class="box box-solid">
          <div class="box-body">
          <form role="form" action="{{ route('admin.events') }}" method="post">   
          @csrf
              <!-- /btn-group -->
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Time:</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="time" name="time" class="form-control timepicker">
                  
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
              <div class="form-group">
                  <label>Venue:</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-university"></i>
                    </div>
                    <input type="text" name="venue" class="form-control">
                   
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name="description" rows="3" placeholder="Description..."></textarea>
                </div>
                <div class="form-group">
                  <label>Event:</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-university"></i>
                    </div>
                    <input type="text" name="event" class="form-control">
                  </div>
                  <!-- /.input group -->
                  </div>
                  <div class="form-group">
                  <div class="input-group pull-right">
                   <button type="submit" class="btn btn-primary form-control pull-right"><i class="fa fa-plus"></i> Add</button>
                 </div>
                </div>
               </div></form>
          </div>
          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
              {!! $calendar->calendar() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    </div>
  </div>

  
</section>

    @endsection
    @section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}
@endsection
