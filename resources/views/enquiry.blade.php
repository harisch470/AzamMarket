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
        @if(isset($success))
        <h3 style="color: green">Your Enquiry has been successfully submitted.</h3>
        @endif
        <h3>POST AN ENQUIRY</h3>
        <div class="form3">
            <form action="{{route('create.Enquiry')}}" method="post">
                {{csrf_field()}}
                <input placeholder="Your Name" type="text" id="namebox" name="name"/>
                <input placeholder="Your Email" type="text" id="namebox" name="email"/> <br>
                <input placeholder="Contact Number" type="text" id="namebox" name="contactNo"/>
                <input placeholder="Subject/Title" type="text" id="namebox" name="subject"/><br>
                <input placeholder="City/Town" type="text" id="namebox" name="city"/>

                <select id="namebox" name="country" style="font-size:15px;">
                    <option value="" selected disabled="disabled">Choose Your Country</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="India">India</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="China">China</option>
                    <option value="Iran">Iran</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Srilanka">Srilanka</option>
                    <option value="Thailand">Thailand</option>
                    <option value="USA">USA</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="UK">UK</option>
                    <option value="Canada">Canada</option>
                    <option value="South Korea">South Korea</option>
                    <option value="North Korea">North Korea</option>
                    <option value="South Africa">South Africa</option>
                    <option value="North Africa">North Africa</option>
                    <option value="USSR">USSR</option>
                    <option value="Japan">Japan</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Egypt">Egypt</option>
                    <option value="UAE">UAE</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Singapur">Singapur</option>
                </select><br>
                <input placeholder="Write Down Your Enquiry" type="text" id="enquirybox" name="message"/><br>
                <br>
                <input type="submit" class="button2" value="SUBMIT"/>
                <br>
            </form>

        </div>


    </div>

@stop

@section('footerAssets')@stop
