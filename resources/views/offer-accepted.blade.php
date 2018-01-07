@extends('layouts.master')
@section('headAssets')
    <link rel="stylesheet" href="ASSETS FOLDER/buyer tables/assets/style/enquiry.css"/>
    <link rel="stylesheet" type="text/css" href="ASSETS FOLDER/buyer tables/assets/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="ASSETS FOLDER/buyer tables/assets/style/OFFER ACCEPTED.css"/>

    <script type="text/javascript" src="ASSETS FOLDER/buyer tables/assets/js/jquery.1.7.2.js"></script>
    <script type="text/javascript" src="ASSETS FOLDER/buyer tables/assets/js/jquery.syotimer.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            /* Simple Timer. The countdown to 20:30 2100.05.09
             --------------------------------------------------------- */
            $('#simple_timer').syotimer({
                year: 2016,
                month: 12,
                day: 2,
            });
        });
    </script>

    <script src="ASSETS FOLDER/buyer tables/assets/js/image slider/index.js"></script>

    <script>
        $(document).ready(function () {
            var submitIcon = $('.searchbox-icon');

            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function () {
                if (isOpen == false) {
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });
            submitIcon.mouseup(function () {
                return false;
            });
            searchBox.mouseup(function () {
                return false;
            });
            $(document).mouseup(function () {
                if (isOpen == true) {
                    $('.searchbox-icon').css('display', 'block');
                    submitIcon.click();
                }
            });
        });
        function buttonUp() {
            var inputVal = $('.searchbox-input').val();
            inputVal = $.trim(inputVal).length;
            if (inputVal !== 0) {
                $('.searchbox-icon').css('display', 'none');
            } else {
                $('.searchbox-input').val('');
                $('.searchbox-icon').css('display', 'block');
            }
        }
    </script>
@stop
@section('title')ACCEPTED ORDER list@stop
@section('pageContent')

    <table class="flatTable">

        <tr class="headingTr">
            <td>OFFER SENDER NAME</td>
            <td>DILEVERY PERIOD</td>
            <td>PRICE</td>
            <td></td>
        </tr>

        <tr>
            <td>AZEEM KAMRAN</td>
            <td>4 DAYS</td>
            <td>$1500</td>
            <td>
                <img style="width:60px; height:40px;"
                     src="ASSETS FOLDER/buyer tables/assets/images/svg/GREENCHECK.svg"/>
            </td>
        </tr>

    </table>

    <div id="simple_timer">
    </div>

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>


@stop

@section('footerAssets')@stop

