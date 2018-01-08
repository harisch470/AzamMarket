@extends('layouts.master')
@section('headAssets')
	<style>

	</style>
@stop
@section('title')<title>WishList Page</title>@stop
@section('pageContent')
  <!-- main body section -->
  <section class="main-body">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<h2 class="shop">Wish List items</h2>
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
  									<img src="ASSETS FOLDER/wishlist assets/assets1/images/product.png"></img>
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
  								<p><a href="#">Move to Bag</a>&nbsp|&nbsp<a href="#">Remove Item</a></p>
  							</div>
  						</div>
  					</div>

  					<!-- single product list -->
  					<div class="product-item">
  						<hr>
  						<div class="row">
  							<div class="col-md-2">
  								<a class="productimg" href="">
  									<img src="ASSETS FOLDER/wishlist assets/assets1/images/product.png"></img>
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
  								<p><a href="#">Move to Bag</a>&nbsp|&nbsp<a href="#">Remove Item</a></p>
  							</div>
  						</div>
  					</div>

  					<!-- single product list -->
  					<div class="product-item">
  						<hr>
  						<div class="row">
  							<div class="col-md-2">
  								<a class="productimg" href="">
  									<img src="ASSETS FOLDER/wishlist assets/assets1/images/product.png"></img>
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
  									<p><a href="#">Move to  Bag</a>|<a href="#">Remove Item</a></p>
  								</div>
  								
  							</div>
  						</div>
  					</div>

  				</div>
  			</div>	
  			
  		</div>
  	</div>
  </section>

  <!-- footer section -->
    <hr class="line" />
@stop

@section('footerAssets')@stop
