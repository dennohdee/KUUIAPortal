@extends('layouts.admin')
@section('content')
<section class="content-header">
      <h1>
      Membership Renewal.&nbsp;
        <small>Please report in time</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Renewal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Renew here</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form role="form" action="{{ route('report') }}" method="post">
            @csrf
            <div class="form-group">
                  <label for="academicyear">Academic Year</label>
                  <select class="form-control" name="ac" id="ac">
                    <option value="2016/2017">2016/2017</option>
                    <option value="2017/2018">2017/2018</option>
                  </select>
            </div>
            
            <div class="box-footer">
            <a href="{{ route('sessionreporting')}}">
            <button type="button" class="btn btn-default">Cancel</button>
            </a>
            <button type="submit" class="btn btn-primary pull-right">Renew</button>
            </div>  

              <table class="table table-striped">
                <tr>
                    <th>Session Reported</th>
                    <th>Date Created</th>
                </tr>
                <tr>
                    <td>2017/2018 </td>
                    <td>1/12/2016 1:39:49 AM </td>
                </tr>
                <tr>
                    <td>2016/2017</td>
                    <td>1/12/2016 1:39:49 AM </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
              </table>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </section>
@endsection