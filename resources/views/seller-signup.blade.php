



@extends('layouts.master')
@section('headAssets')
	<link rel="stylesheet" href="ASSETS FOLDER/registeration assets/assets/style/enquiry.css"/>
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
@section('title')<title>Seller Sign Up Page</title>@stop
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
								<div class="col-sm-10 ">
									<input type="text" name="name" class="form-control validate[required,custom[onlyLetterSp]] " id="yourname" placeholder="Your Name">
								</div>
							</div>
						</div>
						{{ csrf_field() }}

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group field-distance">
								<div class="col-sm-10 col-sm-offset-2">
									<input type="text" class="form-control validate[required,custom[phone]]" name="contactNo" id="phone" placeholder="Contact Number">                  </div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group field-distance">
								<div class="col-sm-10">
									<select name="type" class="form-control selling-type validate[required]"
											style="text-align-last:center;">
										<option value="" selected disabled="disabled"> Selling Type</option>
										<option class="opt-center"   value="WholeSale">Whole Sale</option>
										<option class="opt-center"  value="Retail">Retail</option>
										<option class="opt-center center" value="Both" >Both</option>
									</select>

									</ul>
								</div>
							</div>
							<!-- Example single danger button -->
						</div>
						<!-- Example single danger button -->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group field-distance">
								<div class="col-sm-10 col-sm-offset-2 ">
									<input type="text" name="subCharges" class="form-control subscription-charges" placeholder="Subscription Charges" readonly>
								</div>
							</div>
						</div>
					</div>	<!-- end row -->
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group field-distance">
								<div class="col-sm-10">
									<input type="text" name="shopName" class="form-control  validate[required]" id="shopname" placeholder="Shop Name">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group field-distance">
								<div class="col-sm-10 col-sm-offset-2">
									<input type="text" name="address" maxlength="15" class="form-control validate[required]"  placeholder="Shop Address">
								</div>
							</div>
						</div>
					</div>
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
									<input type="password" name="password" maxlength="12" class="form-control validate[required,minSize[6]]" id="password" placeholder="Password">
								</div>
							</div>

						</div>
					</div>



					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<div class="col-sm-10 ">
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
										<input type="file" id="uploadBtn2"  name="coverImg" style="display:none;">
									</label>
									<input disabled="disabled"  type="text" id="uploadFile2" class="upload-input-border">
								</div>
							</div>
						</div>
					</div><!-- end row -->
					<div class="row">
						<div class="form-group ">
							<div class="col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">
								<button type="submit" class="btn btn-success" style="width: 100%; margin:0px auto; margin-top: 30px; margin-bottom:40px; font-family: sans-serif;text-transform: uppercase;padding: 8px 0px;font-size:18px;">Sign Up</button>
							</div>
						</div>
					</div> <!-- end row -->
				</div><!-- inner form-->
			</form> <!-- end form -->

		</div><!-- end inner-container --> 
	</div><!-- end container-fluid div -->
</div> <!-- end main div -->
@stop

@section('footerAssets')

<script> 

		/*$(document).ready(function(){
			 sellingtype = $(".selling-type").val();
sellingtype = $.trim(sellingtype);

            if(sellingtype == 'Whole Sale'){
            	 $('.subscription-charges').val( 5000 + ' RS');
            }
			
		});*/

    $(".selling-type").on("change paste keyup", function () {
            
             sellingtype = $(this).val();
             sellingtype = $.trim(sellingtype);
             if (sellingtype =='WholeSale'){
              $('.subscription-charges').val( 5000);
             }
              else if (sellingtype =='Retail'){
              $('.subscription-charges').val( 10000);
             }
             else if(sellingtype =='Both'){
                $('.subscription-charges').val( 15000);
             }
             else {
                $('.subscription-charges').val('');  
             }
               
        });
	</script>
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
