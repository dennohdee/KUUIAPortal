@extends('layouts.admin')
@section('content')

<section class="content-header">
<h1>
All Users.&nbsp;
<small>System user data</small>
</h1>
<ol class="breadcrumb">
<li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
<li class="active">Users</li>
</ol>
</section>
<!-- Main section-->
<section class="content container-fluid">
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title"><i class="fa fa-group"></i>&nbsp;</h3>

<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
</button>
</div>
<!-- /.box-tools -->
</div>
<!-- /.box-header -->
<div class="box-body">
<table class="table table-striped">
<tr>
<th>Full Name</th>
<th>Date Created</th>
</tr>
@foreach($users as $user)
<tr>
<td>{{ $user->name }}</td>
<td>{{ $user->created_at }}</td>
</tr>
@endforeach
</table>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</section>

@endsection