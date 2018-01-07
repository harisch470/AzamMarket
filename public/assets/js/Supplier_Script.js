// JavaScript Document
function sell_buy(){
	document.getElementById('shop_page').style.display = "none";
	document.getElementById('order1').style.display = "block";
    document.getElementById('order2').style.display = "block";
    document.getElementById('order3').style.display = "block";
}

function show_shopPage(){
	document.getElementById('order1').style.display = "none";
    document.getElementById('order2').style.display = "none";
    document.getElementById('order3').style.display = "none";
	document.getElementById('shop_page').style.display = "block";
}