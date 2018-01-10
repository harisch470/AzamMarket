
	document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
	};
	document.getElementById("uploadBtn2").onchange = function () {
    document.getElementById("uploadFile2").value = this.value;
	};	

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
          jQuery(document).ready(function () {
         // binds form submission and fields to the validation engine
         jQuery("#formID").validationEngine('attach');
         });
