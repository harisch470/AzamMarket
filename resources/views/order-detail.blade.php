@extends('layouts.master')
@section('headAssets')
    <link rel="stylesheet" href="ASSETS FOLDER/buyer tables/assets/style/enquiry.css"/>
    <link rel="stylesheet" type="text/css" href="ASSETS FOLDER/buyer tables/assets/bootstrap/bootstrap.min.css"/>

    <script src="ASSETS FOLDER/buyer tables/assets/js/image slider/jquery-2.1.3.min.js"></script>
    <script src="ASSETS FOLDER/buyer tables/assets/js/image slider/index.js"></script>

    <style>
        .arrowBox {
            width: 200px;
            height: 80px;
            background-color: #CCC;
            border-radius: 5px;
            position: relative;
            float: right;
            padding: 20px;
            font-family: Righteous;
            font-size: 14px;
            color: #313333;
            text-align: center;
            margin-top: -300px;
        }

        .arrowBox1 {
            width: 200px;
            height: 80px;
            background-color: #CCC;
            border-radius: 5px;
            top: 2em;
            position: relative;
            float: right;
            padding: 35px;
            font-family: Righteous;
            font-size: 14px;
            line-height: 10px;
            color: #313333;
            text-align: center;
            margin-top: -230px;
        }


    </style>
@stop
@section('title')<title>ORDER Detail</title>
@stop
@section('pageContent')
    <div class="Full_box" style="margin:150px">
        <h2 style="font-family:Righteous;">ORDER DETAIL</h2>
        <div class="Content_box" style="width: 820px; height:300px; border-radius:5px; background: #CCC;"> Some Content
            Text DUmmy
            <button style=" width:130px; margin-left:935px; text-decoration:underline; margin-top:200px; background:#FFF; color: #F00;
          font-size:14px;font-family:Righteous;">Remove Order
            </button>
        </div>
        <div class="arrowBox">Dilevery Date<br/>10/12/2016</div>
        <br/>
        <div class="arrowBox1">PRICE</div>
        <br/>

    </div>

@stop

@section('footerAssets')@stop


