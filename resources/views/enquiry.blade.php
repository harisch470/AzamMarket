


@extends('layouts.master')
@section('headAssets')
	<link rel="stylesheet" href="ASSETS FOLDER/enquiry assets/assets/style/enquiry.css"/>
	<link rel="stylesheet" type="text/css" href="ASSETS FOLDER/enquiry assets/assets/bootstrap/bootstrap.min.css"/>

	<script src="ASSETS FOLDER/enquiry assets/assets/js/image slider/jquery-2.1.3.min.js"></script>
	<script src="ASSETS FOLDER/enquiry assets/assets/js/image slider/index.js"></script>

@stop
@section('title')<title>Enquiry Page</title>
@stop
@section('pageContent')
<div class="form" align="center">

<h3>POST AN ENQUIRY</h3>
<div  class="form3">
				<input placeholder="Your Name" type="text" id="namebox" name="name1" />
				<input placeholder="Your Email" type="text" id="namebox"  /> <br>
				<input placeholder="Contact Number" type="text" id="namebox" />
				<input placeholder="Subject/Title" type="text" id="namebox"  /><br>
				<input placeholder="City/Town" type="text" id="namebox"  />
				
				<select id="namebox" style="font-size:15px;">
						<option>Choose Your Country</option>
						<option>Pakistan</option>
						<option>India </option>
						<option>Afghanistan</option>
						<option>China</option>
						<option>Iran</option>
						<option>Bangladesh</option>
						<option>Srilanka</option>
						<option>Thailand</option>
						<option>USA</option>
						<option>Australia</option>
						<option>Austria</option>
						<option>UK</option>
						<option>Canada</option>
						<option>South Korea</option>
						<option>North Korea</option>
						<option>South Africa</option>
						<option>North Africa</option>
						<option>USSR</option>
						<option>Japan</option>
						<option>Nepal</option>
						<option>Egypt</option>
						<option>UAE</option>
						<option>Indonesia</option>
						<option>Malaysia</option>
						<option>Singapur</option>
						<option>Other
				</select><br>
				<input placeholder="Write Down Your Enquiry" type="text" id="enquirybox" /><br>
				<br>
				<input type="submit" class="button2" value="POST" />
				<br>
				
				
			</div>

 
</div>

@stop

@section('footerAssets')@stop
