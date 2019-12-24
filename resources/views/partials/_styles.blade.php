<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css">



<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta name="description" content="Responsive Admin Template" />
<meta name="author" content="SmartUniversity" />
<title>Smart University | Bootstrap Responsive Admin Template</title>
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
<!-- icons -->
<link href="{{ asset('assets/fonts/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
<!--bootstrap -->
<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
<!-- Material Design Lite CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/material/material.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/material_style.css')}}">
<!-- inbox style -->
<link href="{{ asset('assets/css/pages/inbox.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Theme Styles -->
<link href="{{ asset('assets/css/theme/light/theme_style.css')}}" rel="stylesheet" id="rt_style_components"
    type="text/css" />
<link href="{{ asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/theme/light/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/theme/light/theme-color.css')}}" rel="stylesheet" type="text/css" />
<!-- favicon -->
<link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico')}} " />

<!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('adminAssets/assets/css/sweetalert.css')}}" type="text/css" />
    <style>
        span.form-error{
            color: red !important;
        }
        input.error::placeholder{
            color: red !important;
        }
        span.input-group-text{
            background-color: #335D98 !important;
            color: #fff !important;
        }
        #logoSite img,
        #favicon img{
            border: 1px solid grey !important;
            padding: 10px !important;
        }
    </style>

    <!-- data tables -->
    <link href="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
        type="text/css" />
    @yield('css')
