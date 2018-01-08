


@extends('layouts.master')
@section('headAssets')
	<link rel="stylesheet" href="ASSETS FOLDER/registeration assets/assets/style/enquiry.css">
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/registeration assets/styles/bootstrap.min.css">
	<script src="ASSETS FOLDER/registeration assets/assets/js/image slider/jquery-2.1.3.min.js"></script>
	<script src="ASSETS FOLDER/registeration assets/assets/js/image slider/index.js"></script>
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/registeration assets/styles/style.css">
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/registeration assets/styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/registeration assets/styles/validationEngine.jquery.css">
	<script type="text/javascript" src="ASSETS FOLDER/registeration assets/js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/registeration assets/styles/responsive.css">
	<script type="text/javascript" src="ASSETS FOLDER/registeration assets/js/bootstrap.min.js"></script>
@stop
@section('title')<title>Select Type Page</title>
@stop
@section('pageContent')
<div class="main-content-div">
	<div class="container-fluid">
		<div class="inner-container">
			<div class="text-top">
				<h4> Let's Get Started! </h4>	
				<h4>First, tell us what you're looking for. </h4>
			</div>	<!-- end text-top div -->	
			<div class="row">
			<div class="col-md-5 col-lg-5 col-sm-5 col-xs-5 desc-img">
				<img src="ASSETS FOLDER/registeration assets/images/salesman-working.svg"> 
				<h3> I Am A Seller. </h3>
				<h6>Join with us and increase your sale</h6>
				<a href="seller-signup.blade.php" type="button" class="btn btn-success btn-lg">Join</a>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center midlines-area">
				<div class="mid-line"> </div> 
				</br> 
				<div class="or"> OR </div>	
				<div class="mid-line2"> </div> 
			</div>
		
			<div class="col-md-5 col-lg-5 col-sm-5 col-xs-5 desc-img">
				<img src="ASSETS FOLDER/registeration assets/images/man-shopping.svg"> 
				<h3> I Am A Buyer. </h3>
				<h6>Join with us and enjoy luxury clothing</h6>
				<a href="buyer-signup.blade.php" type="button" class="btn btn-success btn-lg " >Join</a>
			</div>
		
		</div><!-- end row div --> 
		</div><!-- end inner-container div -->

	</div><!-- end container-fluid div -->
</div> <!-- end main div -->

@stop

@section('footerAssets')

<script src="ASSETS FOLDER/registeration assets/js/jquery-1.7.2.min.js" type="text/javascript">
    </script>
    <script src="ASSETS FOLDER/registeration assets/js/language/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
    </script>
    <script src="ASSETS FOLDER/registeration assets/js/jquery.validationEngine.js" type="text/javascript" charset="	   utf-8">
    </script>
    <script>
          jQuery(document).ready(function () {
         // binds form submission and fields to the validation engine
         jQuery("#formID").validationEngine('attach');
         });
    </script>
@stop