<!-- All javascript custome code are include in below script.js file -->
<script type="text/javascript" src="ASSETS FOLDER/registeration assets/js/jquery-3.1.1.min.js"></script>
<script src="ASSETS FOLDER/registeration assets/assets/js/image slider/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="ASSETS FOLDER/registeration assets/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="ASSETS FOLDER/registeration assets/js/jquery-1.7.2.min.js" type="text/javascript">
</script>
<script src="ASSETS FOLDER/registeration assets/js/language/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
</script>
<script src="ASSETS FOLDER/registeration assets/js/jquery.validationEngine.js" type="text/javascript" charset="	   utf-8">
</script>
<script src="ASSETS FOLDER/wishlist assets/assets/js/image slider/jquery-2.1.3.min.js"></script>
<script src="ASSETS FOLDER/wishlist assets/assets/js/image slider/index.js"></script>


<script src="ASSETS FOLDER/home assets/assets/js/image slider/jquery-2.1.3.min.js"></script>
<script src="ASSETS FOLDER/home assets/assets/js/image slider/cycle2.js"></script>
<script src="ASSETS FOLDER/home assets/assets/js/image slider/index.js"></script>
<script type="text/javascript">
    function height() {
        var h = window.innerHeight;
        var a = document.getElementById('container');
        a.style.height = h + "px";
    }
    window.addEventListener('load',height);
    window.addEventListener('resize',height);
</script>

<script src="ASSETS FOLDER/registeration assets/assets/js/image slider/index.js"></script>
<script>
    $(document).ready(function(){
        var submitIcon = $('.searchbox-icon');
        var inputBox = $('.searchbox-input');
        var searchBox = $('.searchbox');
        var isOpen = false;
        submitIcon.click(function(){
            if(isOpen == false){
                searchBox.addClass('searchbox-open');
                inputBox.focus();
                isOpen = true;
            } else {
                searchBox.removeClass('searchbox-open');
                inputBox.focusout();
                isOpen = false;
            }
        });
        submitIcon.mouseup(function(){
            return false;
        });
        searchBox.mouseup(function(){
            return false;
        });
        $(document).mouseup(function(){
            if(isOpen == true){
                $('.searchbox-icon').css('display','block');
                submitIcon.click();
            }
        });
    });
    function buttonUp(){
        var inputVal = $('.searchbox-input').val();
        inputVal = $.trim(inputVal).length;
        if( inputVal !== 0){
            $('.searchbox-icon').css('display','none');
        } else {
            $('.searchbox-input').val('');
            $('.searchbox-icon').css('display','block');
        }
    }
</script>

<script>
    $( function() {
        // run the currently selected effect
        function runEffect() {
            // get effect type from
            var selectedEffect = $( "#effectTypes" ).val();

            // Most effect types need no options passed by default
            var options = {};
            // some effects have required parameters
            if ( selectedEffect === "scale" ) {
                options = { percent: 50 };
            } else if ( selectedEffect === "size" ) {
                options = { to: { width: 200, height: 60 } };
            }

            // Run the effect
            $( "#effect" ).toggle( selectedEffect, options, 500 );
        };

        // Set effect from select menu value
        $( "#button" ).on( "click", function() {
            runEffect();
        });
    } );
</script>
<script>
    jQuery(document).ready(function () {
        // binds form submission and fields to the validation engine
        jQuery("#formID").validationEngine('attach');
    });
</script>
