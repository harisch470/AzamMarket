@extends('layouts.master')
@section('headAssets')
    <!-- font-awesome -->
    <link rel="stylesheet" href="ASSETS FOLDER/bag assets/assets/style/style.css"/>
    <!--Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="ASSETS FOLDER/bag assets/assets/bootstrap/bootstrap.min.css"/>
    <!--CSS for this templates-->
    <link rel="stylesheet" type="text/css" href="ASSETS FOLDER/bag assets/assets/style/style.css"/>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Nova+Mono" rel="stylesheet">
    <link rel="stylesheet" href="ASSETS FOLDER/bag assets/assets1/style/enquiry.css"/>
    <link rel="stylesheet" type="text/css" href="ASSETS FOLDER/bag assets/assets1/styles/bootstrap.min.css">
    <script src="ASSETS FOLDER/bag assets/assets1/js/image slider/jquery-2.1.3.min.js"></script>
    <script src="ASSETS FOLDER/bag assets/assets1/js/image slider/index.js"></script>

@stop
@section('title')<title>Cart Page</title> @stop
@section('pageContent')
    <section class="main-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="shop">Shopping bag items</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="products">
                        <!-- single product list -->
                        <div class="product-item">
                            <hr>
                            <div class="row">
                                <div class="col-md-2">
                                    <a class="productimg" href="">
                                        <img src="ASSETS FOLDER/bag assets/assets/images/product.png"></img>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <h2>Product name</h2>
                                    <p>Product descriptions</p>
                                </div>
                                <div class="col-md-4" style="text-align:right;">
                                    <p>Price: 0.00$ <a href="#"><i class="fa fa-cart-plus"></i></a></p>
                                    <br>
                                    <br>
                                    <p><a href="#">Move to Wishlist</a>&nbsp|&nbsp<a href="#">Remove Item</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- single product list -->
                        <div class="product-item">
                            <hr>
                            <div class="row">
                                <div class="col-md-2">
                                    <a class="productimg" href="">
                                        <img src="ASSETS FOLDER/bag assets/assets/images/product.png"></img>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <h2>Product name</h2>
                                    <p>Product descriptions</p>
                                </div>
                                <div class="col-md-4" style="text-align:right;">
                                    <p>Price: 0.00$ <a href="#"><i class="fa fa-cart-plus"></i></a></p>
                                    <br>
                                    <br>
                                    <p><a href="#">Move to Wishlist</a>&nbsp|&nbsp<a href="#">Remove Item</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- single product list -->
                        <div class="product-item">
                            <hr>
                            <div class="row">
                                <div class="col-md-2">
                                    <a class="productimg" href="">
                                        <img src="ASSETS FOLDER/bag assets/assets/images/product.png"></img>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <h2>Product name</h2>
                                    <p>Product descriptions</p>
                                </div>
                                <div class="col-md-4" style="text-align:right;">
                                    <p>Price: 0.00$ <a href="#"><i class="fa fa-cart-plus"></i></a></p>
                                    <br>
                                    <br>
                                    <div class="links">
                                        <p><a href="#">Move to Wishlist</a>|<a href="#">Remove Item</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carts">
                        <h3>Price Summery</h3>
                        <table width="100%">
                            <tr>
                                <td>Subtotal</td>
                                <td align="right">0.00</td>
                            </tr>
                            <tr>
                                <td>Delevary</td>
                                <td align="right">0.00</td>
                            </tr>
                        </table>
                        <hr>
                        <table width="100%">
                            <tr>
                                <td>Total</td>
                                <td align="right">0.00</td>
                            </tr>
                        </table>
                        <a class="btn-ceckout" href="#">Go to checkout <span style="float:right">></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('footerAssets')@stop
