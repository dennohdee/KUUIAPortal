@extends('layouts.admin')
@section('content')
<section class="content-header">
      <h1>
        About Us
        <small> About KUUIA</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">About</li>
      </ol>
    </section>

<!-- Main content -->
<section class="content container-fluid">
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title"><i class="fa fa-info-circle"></i>&nbsp;</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
</button>
</div>
<!-- /.box-tools -->
</div>
<!-- /.box-header -->
<div class="box-body">
<img src="{{ asset('/img/logo.jpg')}}" width="80px" height="80px" title="{{ config('app.name', 'Laravel') }}">&nbsp;<br><br>
<p>Kibabii University UNESCO Informatics Association (KUUIA) is a non-political Association based at Kibabii University and bound by all rules of Kibabii University. The Association shall but not be limited to handling ICT matters brought forward by its members.<p>
<p>The Association name shall be <strong>Kibabii University UNESCO Informatics Association</strong> 
abbreviated as KUUIA. It is composed of computing students as well as the academic staff in the 
computing discipline. The activities of the Association shall be of academic and industrial benefit
 to its members.</p>
 <h3>Vision</h3>
<p>To be an avenue through which computing students can link with the ICT industry through research, innovations and skills.</p>
<h3>Mission</h3>
<p>Encourage practical approach to ICT problems, career development through projects and academic interactions as well as research, innovations and mentorship programs.</p>
<h3> Download KUUIA constitution</h3>
<i class="fa fa-file"></i><a href="{{ asset('files/KUUIA constitution.docx')}}"> The KUUIA constitution</a>
    </div>
  </div>
</section>
    @endsection