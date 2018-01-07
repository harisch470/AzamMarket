@extends('layouts.master')
@section('title')whole sale Category page@stop

@section('headAssets')
	<link rel="shortcut icon" href="../favicon.ico">

	<link rel="stylesheet" type="text/css" href="css/set2.css" />

	<link rel="stylesheet" href="ASSETS FOLDER/catagory assets/css/enquiry.css"/>
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/catagory assets/css/bootstrap.min.css"/>


	<script src="ASSETS FOLDER/catagory assets/js/jquery-2.1.3.min.js"></script>
	<script src="ASSETS FOLDER/catagory assets/js/index.js"></script>

	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<style>


		*, *:before, *:after {
			box-sizing: border-box;
		}

		ol, ul {
			list-style: none;
		}
		blockquote, q {
			quotes: none;
		}
		blockquote:before, blockquote:after, q:before, q:after {
			content: '';
			content: none;
		}
		table {
			border-collapse: collapse;
			border-spacing: 0;
		}


		.cat-nav{
			margin-bottom:50px;
			top:125px;
			height:700px;
			width:200px;
			float:left;
			paddding-top:400px;
		}


		.cat{

			height:600px;
			margin-top:100px;
			padding-top:50px;
			padding-left:50px;
			width:285px;
			color:black;
		}

		.cat h1{

			margin-top:10px;
			font-size:1.6em;
		}

		.cat h2{
			margin-top:7px;

			font-size:1.2em;
		}

		.cat hr{
			margin-right:80px;
			border-color:black;
			margin-top:12px;
			margin-bottom:2px;
			width:165px;
		}


		.cat-pics{
			float:right;
			height:1200px;
			width:1100px;
			margin-left:20px;
			margin-bottom:50px;
			paddding-top:500px;
		}

		.wrap-cat-1{
			float:left;
			margin-top:140px;
			height:520px;
			width:500px;
			background-color:blue;
			margin-left:25px;

		}

		.wrap-cat-2{
			float:left;
			margin-top:20px;
			height:520px;
			width:500px;
			background-color:blue;
			margin-left:25px;

		}

		.wrap-cat-1 img{

			height:520px;
			width:500px;

		}

		.wrap-cat-2 img{

			height:520px;
			width:500px;

		}

		.buttoncat {
			z-index:-1000;
			border: none;
			color: white;
			font-size:1.2em;
			text-decoration: none;
			-webkit-transition-duration: 0.4s; /* Safari */
			transition-duration: 0.4s;
			cursor: pointer;
			opacity:0.7;
		}

		.button1cat {
			background-color: white;
			color: grey;

		}

		.button1cat:hover {
			background-color: white;
			color: black;
			font-weight:500;
		}


		.btn {
			background: #383438;
			background-image: -webkit-linear-gradient(top, #383438, #000000);
			background-image: -moz-linear-gradient(top, #383438, #000000);
			background-image: -ms-linear-gradient(top, #383438, #000000);
			background-image: -o-linear-gradient(top, #383438, #000000);
			background-image: linear-gradient(to bottom, #383438, #000000);
			-webkit-border-radius: 24px;
			-moz-border-radius: 24px;
			border-radius: 24px;
			font-family: Arial;
			color: #ffffff;
			font-size: 12px;
			padding: 5px 7px 5px 7px;
			text-decoration: none;
			float:right;

		}

		.btn:hover {
			background: #59bd7a;
			background-image: -webkit-linear-gradient(top, #59bd7a, #6aa85c);
			background-image: -moz-linear-gradient(top, #59bd7a, #6aa85c);
			background-image: -ms-linear-gradient(top, #59bd7a, #6aa85c);
			background-image: -o-linear-gradient(top, #59bd7a, #6aa85c);
			background-image: linear-gradient(to bottom, #59bd7a, #6aa85c);
			text-decoration: none;
			cursor: pointer;
		}




	</style>
@stop

@section('pageContent')

	<div class="cat-nav">
	
	         <div class="cat">
			 

                   
				   <h1>   CATEGORIES  </h1> 
                    <h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
			        <h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
					<h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
					<h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
					<h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
					    <hr>
					<h1>   DESIGNER  </h1> 
                    <h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
			        <h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
					       <hr>
					<h1>   SIZE  </h1> 
                    <h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
			        <h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
					         <hr>
					<h1>   PRICE RANGE  </h1> 
                   <h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
			        <h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
					           <hr>
					<h1>   COLOR  </h1> 
                    <h2><button class="buttoncat button1cat"> DUMMY TEXT</button> </h2>
			        
	         </div>
    </div>
	
	
	<div class="cat-pics">
       <div class="wrap-cat-1">	      
		  <div class="grid">
					
					<figure class="effect-zoe">
						<img src="1.jpg" alt="img1"/>
						<figcaption>
							
						
								
						 <img class="desc" style="width:20px; height:1px;  display:inline; float:left; margin-right:2px" src="rate-star-button.svg"> 
                         <div style="display:inline; float:left; margin-top:4px; margin-left:7px; margin-right:7px; opacity:0.3;"> <Strong> <font size="4%"> |  </font> </strong> </div>
							<img class="desc" style="width:25px; height:4px; display:inline;  float:left;" src="eye.png">
                          <button class="btn"> Buy Now </button>					 
							
							<p class="description">KHADI PRINT <br><br><br>
							           3000 Rs
							</p>
						</figcaption>			
					</figure>
				</div>
	   </div>
	   
	   <div class="wrap-cat-1">	      
		  <div class="grid">
					
					<figure class="effect-zoe">
						<img src="3.jpg" alt="img1"/>
						<figcaption>
							
						
								
						 <img class="desc" style="width:20px; height:1px;  display:inline; float:left; margin-right:2px" src="rate-star-button.svg"> 
                         <div style="display:inline; float:left; margin-top:4px; margin-left:7px; margin-right:7px; opacity:0.3;"> <Strong> <font size="4%"> |  </font> </strong> </div>
							<img class="desc" style="width:25px; height:4px; display:inline;  float:left;" src="eye.png">
                          <button class="btn"> Buy Now </button>					 
							
							<p class="description">KHADI PRINT <br><br><br>
							           3000 Rs
							</p>
						</figcaption>			
					</figure>
				</div>
	   </div>
	   
	   
	   
	    <div class="wrap-cat-2">	      
		 <div class="grid">
					
					<figure class="effect-zoe">
						<img src="7.jpg" alt="img1"/>
						<figcaption>
							
						
								
						 <img class="desc" style="width:20px; height:1px;  display:inline; float:left; margin-right:2px" src="rate-star-button.svg"> 
                         <div style="display:inline; float:left; margin-top:4px; margin-left:7px; margin-right:7px; opacity:0.3;"> <Strong> <font size="4%"> | </font> </strong>  </div>
							<img class="desc" style="width:25px; height:4px; display:inline;  float:left;" src="eye.png">
                          <button class="btn"> Buy Now </button>					 
							
							<p class="description">KHADI PRINT <br><br><br>
							           3000 Rs
							</p>
						</figcaption>			
					</figure>
				</div>
	   </div>
	   
	   	    <div class="wrap-cat-2">	      
		 <div class="grid">
					
					<figure class="effect-zoe">
						<img src="4.jpg" alt="img1"/>
						<figcaption>
							
						
								
						 <img class="desc" style="width:20px; height:1px;  display:inline; float:left; margin-right:2px" src="rate-star-button.svg"> 
                         <div style="display:inline; float:left; margin-top:4px; margin-left:7px; margin-right:7px; opacity:0.3;"> <Strong> <font size="4%"> | </font> </strong>  </div>
							<img class="desc" style="width:25px; height:4px; display:inline;  float:left;" src="eye.png">
                          <button class="btn"> Buy Now </button>					 
							
							<p class="description">KHADI PRINT <br><br><br>
							           3000 Rs
							</p>
						</figcaption>			
					</figure>
				</div>
	   </div>
	   
	   	   
	</div>
	
<hr />
@stop

@section('footerAssets')
<script>
			// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
@stop