


@extends('layouts.master')
@section('headAssets')
	<link rel="stylesheet" href="ASSETS FOLDER/registeration assets/assets/style/enquiry.css"/>
	<script src="ASSETS FOLDER/registeration assets/assets/js/image slider/jquery-2.1.3.min.js"></script>
	<script src="ASSETS FOLDER/registeration assets/assets/js/image slider/index.js"></script>
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/registeration assets/styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/registeration assets/styles/bootstrap.css">
	<script type="text/javascript" src="ASSETS FOLDER/registeration assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="ASSETS FOLDER/registeration assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/registeration assets/styles/validationEngine.jquery.css">
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/registeration assets/styles/buyerb.css">
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/registeration assets/styles/responsive.css">
@stop
@section('title')<title>Buyer Sign Up Page</title>
@stop
@section('pageContent')
<div class="buyer-main-div">
	<div class="container-fluid">
		<div class="inner-container"> 
			<h4 class="signupinfo"> SIGN UP & PROFILE INFORMATION </h4>
			<form enctype="multipart/form-data" class="form-horizontal" id="formID" action="{{route('create.User')}}" method="post">  <!--form start -->
				<div class="inner-form">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group field-distance">
								<div class="col-sm-10">
									<input type="text" name="name" class="form-control validate[required,custom[onlyLetterSp]] " id="yourname" placeholder="Your Name">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group field-distance">
								<div class="col-sm-10 col-sm-offset-2">
									<input type="text" class="form-control
	      			validate[required,custom[phone]]"
										   name="contactNo" id="phone" placeholder="Contact Number">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group field-distance">
								<div class="col-sm-10">
									<select name="type" class="form-control  validate[required]" style="text-align-last:center;" placeholder="Select type">
										<option value="" style="text-align-last:center;" disabled selected="">Buying Type </option>
										<option value="WholeSale">Whole Sale</option>
										<option value="Retail">Retail</option>
										<option  value="Both" class="center">Both</option>

									</select>

									</ul>
								</div>
							</div>
						{{ csrf_field() }}


						<!-- Example single danger button -->
						</div>
						<!-- Example single danger button -->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group field-distance">
								<div class="col-sm-10 col-sm-offset-2">
									<input type="text" name="address" class="form-control  validate[required]" id="address" placeholder="Address">
								</div>
							</div>
						</div>
					</div>	<!-- end row -->
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group field-distance">
								<div class="col-sm-10">
									<input type="email" name="email" class="form-control  validate[required,custom[email]]" id="email" placeholder="Email Address">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group field-distance">
								<div class="col-sm-10 col-sm-offset-2">
									<input type="password" name="password" maxlength="20" class="form-control validate[required,minSize[6]]" id="password" placeholder="Password">
								</div> 	  		</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<div class="col-sm-10">
									<label class="btn custom-btn"
										   style="background-color:#C7C7C7;"> Attach Profile Image
										<input type="file" id="uploadBtn"  name="profileImg" style="display:none;"
										>
									</label>
									<input disabled="disabled" class="upload-input-border"  id="uploadFile">

								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<label class="btn custom-btn"
										   style="background-color:#C7C7C7;"> Attach Cover Image
										<input type="file" id="uploadBtn2"  name="coverImg" style="display:none;"
										>
									</label>
									<input disabled="disabled" type="text" id="uploadFile2" class="upload-input-border">


								</div>
							</div>
						</div>
					</div><!-- end row -->
					<div class="row">
						<div class="form-group ">
							<div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
								<button type="submit" class="btn btn-success" style="width: 100%; margin:0px auto; margin-top: 30px; margin-bottom:40px; font-family: sans-serif;text-transform: uppercase;padding: 8px 0px;font-size:18px;">Sign Up</button>
							</div>
						</div>
					</div> <!-- end row -->
				</div><!-- inner form-->
			</form> <!-- end form -->
		</div><!-- end inner-container --> 
	</div><!-- end container-fluid div -->
	</div> <!-- end main div --> 

	<script> 
	document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
	};
	document.getElementById("uploadBtn2").onchange = function () {
    document.getElementById("uploadFile2").value = this.value;
	};	

	</script>
	<script src="ASSETS FOLDER/registeration assets/js/jquery-1.7.2.min.js" type="text/javascript">
    </script>
    <script src="ASSETS FOLDER/registeration assets/js/language/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
    </script>
    <script src="ASSETS FOLDER/registeration assets/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
    </script>
    <script>
          jQuery(document).ready(function () {
         // binds form submission and fields to the validation engine
         jQuery("#formID").validationEngine('attach');
         });
    </script>

@stop

@section('footerAssets')@stop
