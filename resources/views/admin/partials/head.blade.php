<!-- Head Section -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="legacy">
    <meta name="keyword" content="legacy">

    <title>Admin Panel | Legacy Cruise & Events {{ config('legacy.site_name') }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('/admin-assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('css/jnoty.css') }}" rel="stylesheet">


    <!--external css-->
    <link href="{{ URL::asset('/admin-assets/plugins/node-waves/waves.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('/admin-assets/plugins/animate-css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/admin-assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{ URL::asset('/admin-assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/admin-assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('/admin-assets/css/style.min.css') }}" rel="stylesheet">
{{--    <link href="{{ URL::asset('/admin-assets/css/style_new.css') }}" rel="stylesheet">--}}
    <link href="{{ URL::asset('/admin-assets/css/themes/all-themes.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

    <style>
        .table100 .ps__rail-y {
            width: 9px;
            background-color: transparent;
            opacity: 1 !important;
            right: 5px;
        }

        .table100 .ps__rail-y::before {
            content: "";
            display: block;
            position: absolute;
            background-color: #ebebeb;
            border-radius: 5px;
            width: 100%;
            height: calc(100% - 30px);
            left: 0;
            top: 15px;
        }

        .table100 .ps__rail-y .ps__thumb-y {
            width: 100%;
            right: 0;
            background-color: transparent;
            opacity: 1 !important;
        }

        .table100 .ps__rail-y .ps__thumb-y::before {
            content: "";
            display: block;
            position: absolute;
            background-color: #cccccc;
            border-radius: 5px;
            width: 100%;
            height: calc(100% - 30px);
            left: 0;
            top: 15px;
        }


        /*//////////////////////////////////////////////////////////////////
        [ Table ]*/

        .limiter {
            width: 1366px;
            margin: 0 auto;
        }

        .container-table100 {
            width: 100%;
            min-height: 100vh;
            background: #fff;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            padding: 33px 30px;
        }

        .wrap-table100 {
            width: 1170px;
        }

        /*//////////////////////////////////////////////////////////////////
        [ Table ]*/
        .table100 {
            background-color: #fff;
        }

        table {
            width: 100%;
        }

        th, td {
            font-weight: unset;
            padding-right: 10px;
        }

        .column1 {
            width: 33%;
            padding-left: 40px;
        }

        .column2 {
            width: 13%;
        }

        .column3 {
            width: 22%;
        }

        .column4 {
            width: 19%;
        }

        .column5 {
            width: 13%;
        }

        .table100-head th {
            padding-top: 18px;
            padding-bottom: 18px;
        }

        .table100-body td {
            padding-top: 16px;
            padding-bottom: 16px;
        }

        /*==================================================================
        [ Fix header ]*/
        .table100 {
            position: relative;
            padding-top: 60px;
        }

        .table100-head {
            position: absolute;
            width: 100%;
            top: 0;
            left: 0;
        }

        .table100-body {
            max-height: 585px;
            overflow: auto;
        }


        /*==================================================================
        [ Ver1 ]*/

        .table100.ver1 th {
            font-family: Lato-Bold;
            font-size: 18px;
            color: #fff;
            line-height: 1.4;

            background-color: #6c7ae0;
        }

        .table100.ver1 td {
            font-family: Lato-Regular;
            font-size: 15px;
            color: #808080;
            line-height: 1.4;
        }

        .table100.ver1 .table100-body tr:nth-child(even) {
            background-color: #f8f6ff;
        }

        /*---------------------------------------------*/

        .table100.ver1 {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
        }

        .table100.ver1 .ps__rail-y {
            right: 5px;
        }

        .table100.ver1 .ps__rail-y::before {
            background-color: #ebebeb;
        }

        .table100.ver1 .ps__rail-y .ps__thumb-y::before {
            background-color: #cccccc;
        }

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }


        /*==================================================================
        [ Ver2 ]*/

        .table100.ver2 . table100-head{
            box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
        }

        .table100.ver2 th {
            font-family: Lato-Bold;
            font-size: 18px;
            color: #fa4251;
            line-height: 1.4;

            background-color: transparent;
        }

        .table100.ver2 td {
            font-family: Lato-Regular;
            font-size: 15px;
            color: #808080;
            line-height: 1.4;
        }

        .table100.ver2 .table100-body tr {
            border-bottom: 1px solid #f2f2f2;
        }

        /*---------------------------------------------*/

        .table100.ver2 {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
        }

        .table100.ver2 .ps__rail-y {
            right: 5px;
        }

        .table100.ver2 .ps__rail-y::before {
            background-color: #ebebeb;
        }

        .table100.ver2 .ps__rail-y .ps__thumb-y::before {
            background-color: #cccccc;
        }

        /*==================================================================
        [ Ver3 ]*/

        .table100.ver3 {
            background-color: #393939;
        }

        .table100.ver3 th {
            font-family: Lato-Bold;
            font-size: 15px;
            color: #00ad5f;
            line-height: 1.4;
            text-transform: uppercase;
            background-color: #393939;
        }

        .table100.ver3 td {
            font-family: Lato-Regular;
            font-size: 15px;
            color: #808080;
            line-height: 1.4;
            background-color: #222222;
        }


        /*---------------------------------------------*/

        .table100.ver3 {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
        }

        .table100.ver3 .ps__rail-y {
            right: 5px;
        }

        .table100.ver3 .ps__rail-y::before {
            background-color: #4e4e4e;
        }

        .table100.ver3 .ps__rail-y .ps__thumb-y::before {
            background-color: #00ad5f;
        }


        /*==================================================================
        [ Ver4 ]*/
        .table100.ver4 {
            margin-right: -20px;
        }

        .table100.ver4 .table100-head {
            padding-right: 20px;
        }

        .table100.ver4 th {
            font-family: Lato-Bold;
            font-size: 18px;
            color: #4272d7;
            line-height: 1.4;

            background-color: transparent;
            border-bottom: 2px solid #f2f2f2;
        }

        .table100.ver4 .column1 {
            padding-left: 7px;
        }

        .table100.ver4 td {
            font-family: Lato-Regular;
            font-size: 15px;
            color: #808080;
            line-height: 1.4;
        }

        .table100.ver4 .table100-body tr {
            border-bottom: 1px solid #f2f2f2;
        }

        /*---------------------------------------------*/

        .table100.ver4 {
            overflow: hidden;
        }

        .table100.ver4 .table100-body{
            padding-right: 20px;
        }

        .table100.ver4 .ps__rail-y {
            right: 0px;
        }

        .table100.ver4 .ps__rail-y::before {
            background-color: #ebebeb;
        }

        .table100.ver4 .ps__rail-y .ps__thumb-y::before {
            background-color: #cccccc;
        }


        /*==================================================================
        [ Ver5 ]*/
        .table100.ver5 {
            margin-right: -30px;
        }

        .table100.ver5 .table100-head {
            padding-right: 30px;
        }

        .table100.ver5 th {
            font-family: Lato-Bold;
            font-size: 14px;
            color: #555555;
            line-height: 1.4;
            text-transform: uppercase;

            background-color: transparent;
        }

        .table100.ver5 td {
            font-family: Lato-Regular;
            font-size: 15px;
            color: #808080;
            line-height: 1.4;

            background-color: #f7f7f7;
        }

        .table100.ver5 .table100-body tr {
            overflow: hidden;
            border-bottom: 10px solid #fff;
            border-radius: 10px;
        }

        .table100.ver5 .table100-body table {
            border-collapse: separate;
            border-spacing: 0 10px;
        }
        .table100.ver5 .table100-body td {
            border: solid 1px transparent;
            border-style: solid none;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .table100.ver5 .table100-body td:first-child {
            border-left-style: solid;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        .table100.ver5 .table100-body td:last-child {
            border-right-style: solid;
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px;
        }

        .table100.ver5 tr:hover td {
            background-color: #ebebeb;
            cursor: pointer;
        }

        .table100.ver5 .table100-head th {
            padding-top: 25px;
            padding-bottom: 25px;
        }

        /*---------------------------------------------*/

        .table100.ver5 {
            overflow: hidden;
        }

        .table100.ver5 .table100-body{
            padding-right: 30px;
        }

        .table100.ver5 .ps__rail-y {
            right: 0px;
        }

        .table100.ver5 .ps__rail-y::before {
            background-color: #ebebeb;
        }

        .table100.ver5 .ps__rail-y .ps__thumb-y::before {
            background-color: #cccccc;
        }
        .table100-ver6 thead th {

            font-family: Lato-Bold;
            font-size: 18px;
            color: #fff;
            line-height: 1.4;
border-radius: 10px;
            background-color: #6c7ae0;
        }
    </style>
</head>
<!-- End of Head Section -->
