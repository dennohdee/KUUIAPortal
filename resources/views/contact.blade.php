@extends('layouts.admin')
@section('content')
<section class="content-header">
      <h1>
        Contact Us
        <small>Please enquire from us</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Message</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
          <!-- DIRECT CHAT -->
          <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Text</h3>

                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                 
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                     @foreach($contacts as $contact)
                     <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">{!! $contact->email !!}</span>
                        <span class="direct-chat-timestamp pull-right">{!! $contact->created_at !!}</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="{{ asset('/img/avatar.png')}}" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                      {!! $contact->message !!}
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">{!! $contact->replier !!}</span>
                        <span class="direct-chat-timestamp pull-left">{!! $contact->updated_at !!}</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="{{ asset('/img/avatar.png')}}" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                      {!! $contact->reply !!}
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                   @endforeach

                   </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                <form role="form" action="{{ route('contact') }}" method="post">
                @csrf
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-flat">Send</button>
                          </span>
                    </div>
                  </form>
                </div>
                <!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
              
          </section>
         
@endsection
