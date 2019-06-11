@extends('layouts.admins')
@section('content')
<section class="content-header">
      <h1>
        Membership Renewal.&nbsp;
        <small> Please pay the renewal fee in time</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Renewal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Renew Membership</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form role="form" action="" method="post">
            @csrf
            <div class="box-footer">
            <a href="{{ route('admin.report') }}" ><button type="button" class="btn btn-primary">Renew</button></a>
              </div>
              <table class="table table-striped">
                <tr>
                    <th>Membership History</th>
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