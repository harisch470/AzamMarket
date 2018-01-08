@extends('layouts.master')
@section('headAssets')
    <style>

    </style>
@stop
@section('title')<title>Login</title>@stop
@section('pageContent')
<div class="login-content-div">
    <div class="container-fluid">
        <div class="inner-container">
            <div class="text-top text-center">
                <h1 class="login"> Log In </h1>
                <P> Don't have an account? Sign Up</P>
            </div>    <!-- end text-top div -->
        </div>

        <div class="row">
            <div class="horrizontal" style="padding-left: 30px;">
                <hr style="width: 100%; margin:0px;padding:0px; margin-top:8px;">

            </div>
            <div class="midor text-center" style="padding: 0px;">
                OR
            </div>
            <div class="horrizontal" style="padding-right: 30px;">
                <hr style="width: 100%; margin-top:8px;">
            </div>
            <div class="clearfix">
            </div>
        </div>
        <div class="inner-container">
            <form id="formID">
                <div class="form-group">
                    <label for="formGroupExampleInput">Email</label>
                    <input type="email" class="form-control validate[required,custom[email]]">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Password</label>
                    <input type="Password" class="form-control validate[required]">
                </div>
                <div class="row">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"
                                style="font-family: sans-serif;text-transform: uppercase;padding: 8px 0px; font-size: 18px;">
                            Log In
                        </button>
                    </div>
                </div><!-- end row -->
            </form>
        </div>
    </div>
</div><!-- end inner-container div -->
@stop

@section('footerAssets')@stop
