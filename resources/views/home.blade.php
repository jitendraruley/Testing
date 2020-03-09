@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    <img src="{{asset(Auth::user()->user_profile)}}" style="height: 60px; width: 60px; border-radius: 50%; margin-right: 15px" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
