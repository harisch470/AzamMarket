



@extends('layouts.master')
@section('headAssets')
    <link rel="stylesheet" href="ASSETS FOLDER/buyer tables/assets/style/enquiry.css"/>
    <link rel="stylesheet" type="text/css" href="ASSETS FOLDER/buyer tables/assets/bootstrap/bootstrap.min.css"/>

    <script src="ASSETS FOLDER/buyer tables/assets/js/image slider/jquery-2.1.3.min.js"></script>
    <script src="ASSETS FOLDER/buyer tables/assets/js/image slider/index.js"></script>

    <style>

        .arrowBox{
            width: 200px;
            height: 100px;
            background-color: #CCC;
            border-radius: 5px;
            position: relative;
            float:right;
            padding: 10px;
            font-family: Roboto, sans-serif;
            font-size: 18px;
            color: #313333;
            text-align: center;
            margin-top:-100px;
        }

    </style>

@stop
@section('title')Offer Recieved
@stop
@section('pageContent')
<div class="Full_box" style="margin:150px"> 
         <div class="Content_box" style="width: 820px; height:100px; border-radius:5px; background: #CCC; overflow:hidden;"> 
         <span style="font-size:18px; margin-left:10px; font-family:Righteous">Custom Order Name</span>
         <button style="background:#CCC; color:#fff; margin-top:10px; margin-right:10px; float:right;">
         <a href="order ofer list.html" style="color:#FFF; text-decoration:underline;">Remove</a></button>
         <button style="background:#CCC; color:#fff; margin-top:75px; margin-right:-50px; float:right;">
         <a href="Order Detail.html" style="color:#FFF; text-decoration:underline;">See Your Order Detail </a></button>
         </div>
         <div class="arrowBox">Offer Recieved <h3 style="color:#F00; margin-top:5px;">00 </h3>
         <button style="background:#CCC; color:#fff; margin-top:-5px;">
         <a href="order ofer list.html" style="color:#FFF; text-decoration:underline;">See Offer Details </a></button> 
  </div><br />

</div>
<div style="margin-top:-150px">
<div class="Full_box" style="margin:150px"> 
          <div class="Content_box" style="width: 820px; height:100px; border-radius:5px; background: #CCC; overflow:hidden;"> 
         <span style="font-size:18px; margin-left:10px; font-family:Righteous">Custom Order Name</span>
         <button style="background:#CCC; color:#fff; margin-top:10px; margin-right:10px; float:right;">
         <a href="order ofer list.html" style="color:#FFF; text-decoration:underline;">Remove</a></button>
         <button style="background:#CCC; color:#fff; margin-top:75px; margin-right:-50px; float:right;">
         <a href="Order Detail.html" style="color:#FFF; text-decoration:underline;">See Your Order Detail </a></button>
         </div>
         <div class="arrowBox">Offer Recieved <h3 style="color:#F00; margin-top:5px;">00 </h3>
         <button style="background:#CCC; color:#fff; margin-top:-5px;">
         <a href="order ofer list.html" style="color:#FFF; text-decoration:underline;">See Offer Details </a></button> 
  </div><br />

</div>
</div>
<div style="margin-top:-150px">
<div class="Full_box" style="margin:150px"> 
          <div class="Content_box" style="width: 820px; height:100px; border-radius:5px; background: #CCC; overflow:hidden;"> 
         <span style="font-size:18px; margin-left:10px; font-family:Righteous">Custom Order Name</span>
         <button style="background:#CCC; color:#fff; margin-top:10px; margin-right:10px; float:right;">
         <a href="order ofer list.html" style="color:#FFF; text-decoration:underline;">Remove</a></button>
         <button style="background:#CCC; color:#fff; margin-top:75px; margin-right:-50px; float:right;">
         <a href="Order Detail.html" style="color:#FFF; text-decoration:underline;">See Your Order Detail </a></button>
         </div>
         <div class="arrowBox">Offer Recieved <h3 style="color:#F00; margin-top:5px;">00 </h3>
         <button style="background:#CCC; color:#fff; margin-top:-5px;">
         <a href="order ofer list.html" style="color:#FFF; text-decoration:underline;">See Offer Details </a></button> 
  </div><br />

</div>
</div>



<nav aria-label="Page navigation" class="text-center">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item"><a class="page-link" href="#">4</a></li>
			    <li class="page-item"><a class="page-link" href="#">5</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li>
			  </ul>
			</nav>

@stop

@section('footerAssets')@stop
