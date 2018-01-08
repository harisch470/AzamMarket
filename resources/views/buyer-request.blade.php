@extends('layouts.master')
@section('headAssets')

    <link rel="stylesheet" type="text/css" href="ASSETS FOLDER/buyer tables/buyer request/styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="ASSETS FOLDER/buyer tables/buyer request/styles/style.css">
    <link rel="stylesheet" href="ASSETS FOLDER/enquiry assets/assets/style/enquiry.css"/>
    <link rel="stylesheet" type="text/css" href="ASSETS FOLDER/enquiry assets/assets/bootstrap/bootstrap.min.css"/>
    <script type="text/javascript" src="ASSETS FOLDER/buyer tables/buyer request/js/jquery-3.1.1.min.js"></script>
    <script src="ASSETS FOLDER/buyer tables/buyer request/js/bootstrap.min.js"></script>
    <script src="ASSETS FOLDER/enquiry assets/assets/js/image slider/jquery-2.1.3.min.js"></script>
    <script src="ASSETS FOLDER/enquiry assets/assets/js/image slider/index.js"></script>


@stop
@section('title')<title>Buyer Request Page</title>@stop
@section('pageContent')
    <!--<div class="search">
     <input type="text" name="">
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 btn-col-xs-12">
                <h1 class="buyer-head"> buyer request</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 btn-col-xs-12">
                <button class="btn btn-default btn-pos"> Select Category</button>
            </div>
        </div> <!-- dnd of head-and btn div-->
        <table class="table custom-table table-responsive">
            <thead>
            <th> S.#</th>
            <th> Details</th>
            <th> Offers
            </td>
            <th> Duration</th>
            <th> Budget</th>
            <th> Send Offer</th>
            </thead>
            <tr>
                <td>
                    <div class="round-img"></div>
                </td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center">
                    <button class="btn btn-sm-12 btn-md-12 btn-success" data-toggle="modal" data-target="#myModal"> Send
                        Offer
                    </button>


                </td>
            </tr>
            <tr>
                <td>
                    <div class="round-img"></div>
                </td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center">
                    <button class="btn btn-sm-12 btn-md-12 btn-success" data-toggle="modal" data-target="#myModal"> Send
                        Offer
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="round-img"></div>
                </td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center">
                    <button class="btn btn-sm-12 btn-md-12 btn-success" data-toggle="modal" data-target="#myModal"> Send
                        Offer
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="round-img"></div>
                </td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center"> first</td>
                <td class="text-center">
                    <button class="btn btn-sm-12 btn-md-12 btn-success" data-toggle="modal" data-target="#myModal"> Send
                        Offer
                    </button>
                </td>
            </tr>


        </table>


    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title desc-title">DESCRIBE YOUR OFFER </h2>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-box" style="border:solid 1px #e5e5e5;padding: 10px;margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2> Delivery Time </h2>
                                </div>
                                <div class="col-md-4 ">
                                    <select class="form-control">
                                        <option value="1" selected="selected"> 1 day</option>
                                        <option value="2"> 2 day</option>
                                        <option value="3"> 3 day</option>
                                        <option value="4"> 4 day</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-box" style="border:solid 1px #e5e5e5;padding: 10px;">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2> Offer Amount</h2>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" id="Offer Amount">
                                        <option value="0000" selected="selected"> 0000</option>
                                        <option value="2"> 0001</option>
                                        <option value="3"> 0002</option>
                                        <option value="4"> 0003</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" data-dismiss="modal" style="font-family: arial;">
                        Submit
                        Offer
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end  -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#nav-btn").on("click", function () {
                $('.menue li').toggleClass("show", "easeOutSine");

            });
        });
    </script>

@stop

@section('footerAssets')@stop

