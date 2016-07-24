<!DOCTYPE html>
<html lang="en" data-ng-app="filmApp">
<head>
    <!---- meta tags ---->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---- meta tags ---->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="{{ url('/') }}/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="{{ url('/') }}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!---- title ---->
    <title>I'm a Film</title>
    <!---- title ---->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <link href="{{ asset('assets/css/intlTelInput.css') }}" rel="stylesheet">

    <!---- syles ---->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/theme/dark.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <style type="text/css">
              
              .iti-flag {
                background-image: url("{{ asset('assets/images/flags.png') }}");
                        }

              .phone{

                display: block !important;
              }          

    </style>

    <!---- syles ---->
    @yield('header.style')
</head>
<body>


@yield('content')

 <footer></footer>

    <!---- JavaScript Files ---->
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=" {{ url('/') }}/assets/js/jquery-1.11.3.min.js"></script>

    <!-- AngularJs -->
    <script src=" {{ url('/') }}/assets/js/angular.min.js"></script>

    <!-- AngularJs Route -->
    <script src=" {{ url('/') }}/assets/js/angular-route.min.js"></script>

    <!-- BootstrapJs -->
    <script src=" {{ url('/') }}/assets/js/bootstrap.min.js"></script>

    <!-- magnfic popup plugin -->
    <script src=" {{ url('/') }}/assets/js/jquery.magnific-popup.min.js"></script>

    <!-- Google-map -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <!-- mapJs -->
    <script src=" {{ url('/') }}/assets/js/map.js"></script>

    <!-- CustomJs -->
    <script src=" {{ url('/') }}/assets/js/script.js"></script>


    <script src=" {{ url('/') }}/assets/js/dirPagination.js"></script>

    <!-- appJs -->
    <script src=" {{ url('/') }}/assets/app/app.js"></script>

    <!-- moment  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>

    <!-- time picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

    <!-- input phone -->
    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>


    <script type="text/javascript">
      $("#phone").intlTelInput();
       $(".intl-tel-input .country-list").width($('.form-control').width()*3);

       console.log($('.sign-up-input').width());


    </script>
     <script>

               $(function(){


               $("#phone").click(function() {

               var phone = $("#phone").intlTelInput("getSelectedCountryData").name+' '+$("#phone").intlTelInput("getSelectedCountryData").                                                   dialCode;
               $("#country").val(phone);

               console.log(phone);


               });

                /* ajaxForm is a function existed in new plugin called  */
                /* "http://malsup.github.com/jquery.form.js" */
                /* use it while uploading image */
                
            });


    </script>


    <!---- JavaScript Files ---->
</body>
</html>
