@extends('layouts.admins')
@section('content')
<section class="content-header">
      <h1>
        Repository
        <small> Content Repository</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Repository</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content container-fluid">
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title"><i class="fa fa-database"></i>&nbsp;</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
</button>
</div>
<!-- /.box-tools -->
</div>
<!-- /.box-header -->
<div class="box-body">
 <!-- form start -->
 <form role="form" action="{{ route('admin.repository') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="category">Category</label>
                  <select class="form-control" id="category" name="category" required>
                  <option value="">--Select Category--</option>
                  <option value="Software">Software</option>
                  <option value="Database">Database</option>
                  <option value="Networking">Networking</option>
                  <option value="Others">Others</option>
                  </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="email">File</label>
                  <input id="file" name="file" placeholder="Your file" type="file" required>
                </div>
                </div>
                </div>
                <div class="form-group">
                  <label for="message">Description</label>
                  <textarea name="description" id="description" class="form-control" required></textarea>
                </div>
            
              
              <!-- /.box-body -->

              <div class="box-footer">
              <span class="input-group-btn">
                            <button type="submit" class="btn pull-right btn-primary">Send</button>
                          </span>
              </div>
              
            </form>
<hr>
@foreach($repo as $repo)  
  <h3>{!! $repo->category!!}</h3>
  <l><a href="/storage/files/{{$repo->file}}" >Download {{ substr($repo->file,-4)}} file</a></l>
  <form role="form" method="delete" route='admin.repository,$repo->id'>
  @csrf
  <input type="hidden" value="{!! $repo->id!!}" name="id" />
                      <button data-toggle="tooltip" data-placement="top" title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-remove"></span></button>
  </form>
  <p>{!! $repo->description!!}</p>
  <l class="pull-right">Posted By: {!! $repo->posted_by!!} at {!! $repo->created_at!!}</l><br>
  <hr />
@endforeach
    </div>
  </div>
</section>

    @endsection