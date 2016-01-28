@extends('layouts.app')

@section('head.style')
<link rel="stylesheet" href="css/bootstrap-select.css">
@show


@section('alert')
<div>
@if(Session::has('flash_message'))
              <div class="alert alert-success alert-dismissible col-xs-12" role="alert">
                  <button type="button" class="close btn-round col-xs-1" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>

                  {{ Session::get('flash_message') }}
              </div>
              @endif
</div>
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                  <ul class="nav nav-tabs">
                    <li>
                      <a href="{{ url('/home') }}">Buat</a>
                    </li>
                    <li class="active">
                      <a href="{{ url('/getData') }}">Data</a>
                    </li>
                  </ul>
                  <br>
                  
                  @yield('content.getData')
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('body.script')
<script src="js/bootstrap-select.js"></script>
<script>
$(document).ready(function() {
    $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
    });
    
})
</script>
@show