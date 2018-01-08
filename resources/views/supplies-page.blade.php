@extends('layouts.master')
@section('headAssets')
    <link rel="stylesheet" href="assets/style/supplier.css"/>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/style/Supplier_Style.css"/>

    <script src="assets/js/Supplier_Script.js" type="text/javascript"></script>

    <script src="assets/js/image slider/jquery-2.1.3.min.js"></script>
    <script src="assets/js/image slider/index.js"></script>


@stop
@section('title')<title>
Custom Order Page</title>
@stop
@section('pageContent')

<div id="body">
    	<div class="container">
        	<div id="center">
            	<div class="section1">
                	<div class="section1_inner">
                		<input type="text" id="image"/>
                    </div>
                    <span><b>Supplier Name</b><br /><br />Work Type</span>
                    <input type="button" id="button_order" value="Make Custom Order" />
                </div>
                <div class="clr"></div>
                <input type="button" value="My Shop" class="button_activity" id="shop" onclick="show_shopPage()" />
                <input type="button" value="Selling Activity" class="button_activity" id="sell" onclick="sell_buy()" />
                <input type="button" value="Buying Activity" class="button_activity" id="buy" onclick="sell_buy()" />
                <div class="section2" id="order1">
                	<span id="span_title">Title of The Order</span>
                    <span id="span_datepost">Date Posted</span>
                    <div class="clr"></div>
                    <div class="section2_inner">
                    	<input type="image" id="circle" src="assets/images/supplier/circle.png" />
                        <input type="text" placeholder="Feed Back From The Client." id="feedback"/>
                        <div class="clr"></div>
                        <span id="span_datecomplete">Date Completed</span>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="section2" id="order2">
                	<span id="span_title">Title of The Order</span>
                    <span id="span_datepost">Date Posted</span>
                    <div class="clr"></div>
                    <div class="section2_inner">
                    	<input type="image" id="circle" src="assets/images/supplier/circle.png" />
                        <input type="text" placeholder="Feed Back From The Client." id="feedback"/>
                        <div class="clr"></div>
                        <span id="span_datecomplete">Date Completed</span>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="section2" id="order3">
                	<span id="span_title">Title of The Order</span>
                    <span id="span_datepost">Date Posted</span>
                    <div class="clr"></div>
                    <div class="section2_inner">
                    	<input type="image" id="circle" src="assets/images/supplier/circle.png" />
                        <input type="text" placeholder="Feed Back From The Client." id="feedback"/>
                        <div class="clr"></div>
                        <span id="span_datecomplete">Date Completed</span>
                        <div class="clr"></div>
                    </div>
                </div>
                <div id="shop_page" class="section_shop">
                	<div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="section_navigate">
                	<div><a href="#">1</a></div>
                    <div><a href="#">2</a></div>
                    <div><a href="#">3</a></div>
                    <div><a href="#">4</a></div>
                    <div><a href="#">5</a></div>
                    <div><a href="#">...</a></div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footerAssets')@stop
