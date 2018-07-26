@extends('layouts.app')

@section('content')
<style type="text/css">
img.pImg {
    width: 50px;
    height: auto;
    border-radius: 50%;
    padding: 3px;
    border: 1px solid #dedede;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Patient Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{ Auth::user()->name }} You are logged in!<br><br>
                    <b>Name:</b> {{ Auth::user()->name }}<br>
                    <b>Email Address:</b> {{ Auth::user()->email }}<br>
                    <b>Mobile:</b> {{ Auth::user()->mobile }}<br>
                    <b>gener:</b> {{ Auth::user()->sex }}<br>
                    <b>Blood Group:</b> {{ Auth::user()->bloodgrp }}<br>
                    <b>Address:</b> {{ Auth::user()->address }}<br>
                    <b>Status:</b> {{  Auth::user()->status > 0 ? 'Active' : 'Uncofirmed' }}<br>
                    <b>Profile Image:</b> <img class="pImg" src="{{ asset('public/img/users/') }}/{{ Auth::user()->photo }}"><br>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
