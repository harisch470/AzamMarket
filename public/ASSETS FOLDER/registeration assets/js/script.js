<script> 
	document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
	};
	document.getElementById("uploadBtn2").onchange = function () {
    document.getElementById("uploadFile2").value = this.value;
	};	

    $(".selling-type").on("change paste keyup", function () {
            
             sellingtype = $(this).val();
             sellingtype = $.trim(sellingtype);
             if (sellingtype =='Whole Sale'){
              $('.subscription-charges').val( 5000 + ' RS');
             }
              else if (sellingtype =='Retail'){
              $('.subscription-charges').val( 10000 + ' RS');
             }
             else if(sellingtype =='Both'){
                $('.subscription-charges').val( 15000 + ' Rs');
             }
             else {
                $('.subscription-charges').val('');  
             }
               
        });
	</script>
	<script src="js/jquery-1.7.2.min.js" type="text/javascript">
    </script>
    <script src="js/language/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
    </script>
    <script src="js/jquery.validationEngine.js" type="text/javascript" charset="	   utf-8">
    </script>
    <script>
          jQuery(document).ready(function () {
         // binds form submission and fields to the validation engine
         jQuery("#formID").validationEngine('attach');
         });
    </script>