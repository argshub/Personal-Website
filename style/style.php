<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Gravitas+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,900' rel='stylesheet' type='text/css'>

<script type="text/javascript">
		$(document).ready(function()
		{
			$('#slider1').tinycarousel();
		});
	</script>
    <style>
        body {
            font: 400 15px/1.8 Lato, sans-serif;
            color: #777;
            background: #f4f4f4;
        }
        h3, h4 {
            margin: 10px 0 30px 0;
            letter-spacing: 10px;
            font-size: 20px;
            color: #111;

        }

        /* header */

        .head {
            font-family: 'Gravitas One', cursive;
        }

        .head-down {
            font-family: 'Gravitas One', cursive;
        }

        #foot {
            max-height: 350px;
        }


        /* my image */


        #profile {
            max-height: 350px;
            background: #003600;

        }
        #text-carousel {
          width: 100%;
          height: auto;
          padding: 50px;
        }

        #middle {

           width: 200px;
            height: 200px;
            margin-top: 70px;
            margin-left: 0px;
            border-radius: 20px;
            position: absolute;
            border-radius: 50%;
            background: #750000;

        }


        .fa:hover, .fa:focus {
            color: #7F1806;
        }
        .container {
            padding: 80px 120px;
        }
        .person {
            border: 10px solid transparent;
            margin-bottom: 25px;
            width: 80%;
            height: 80%;
            opacity: 0.7;
        }
        .person:hover {
            border-color: #f1f1f1;
        }

        @media (max-width: 600px) {
            .carousel-caption {
                display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
            }
        }
        .bg-1 {
            background: #2d2d30;
            color: #bdbdbd;
        }
        .bg-2 {
            background: #2d2d30;
            max-height: 300px;
           }


        .bg-1 h3 {color: #fff;}
        .bg-1 p {font-style: italic;}
        .list-group-item:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0;
        }
        .list-group-item:last-child {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        .thumbnail p {
            margin-top: 15px;
            color: #555;
        }
        .btn {
            padding: 10px 20px;
            background-color: #333;
            color: #f1f1f1;
            border-radius: 0;
            transition: .2s;
        }
        .btn:hover, .btn:focus {
            border: 1px solid #333;
            background-color: #fff;
            color: #000;
        }
        .modal-header, h4, .close {
            background-color: #333;
            color: #fff !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-header, .modal-body {
            padding: 40px 50px;
        }
        .nav-tabs li a {
            color: #777;
        }
        #googleMap {
            width: 100%;
            height: 400px;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        }
        .navbar {
            font-family: Montserrat, sans-serif;
            margin-bottom: 0;
            background-color: #272425;
            border: 0;
            font-size: 11px !important;
            letter-spacing: 4px;
            opacity: 0.9;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #d5d5d5 !important;
        }
        .navbar-nav li a:hover {
            color: #fff !important;
        }
        .navbar-nav li.active a {
            color: #fff !important;
            background-color: #29292c !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
        }
        .open .dropdown-toggle {
            color: #fff;
            background-color: #555 !important;
        }
        .dropdown-menu li a {
            color: #000 !important;
        }
        .dropdown-menu li a:hover {
            background-color: red !important;
        }
        footer {
            background-color: #2d2d30;
            color: #f5f5f5;
            padding: 32px;
        }
        footer a {
            color: #f5f5f5;
        }
        footer a:hover {
            color: #777;
            text-decoration: none;
        }
        .form-control {
            border-radius: 0;
        }
        textarea {
            resize: none;
        }

    /* silder */

/* Tiny Carousel */
#slider1 {
    height: 1%;
    margin: 30px 0 0;
    overflow: hidden;
    position: relative;
    padding: 0 50px 10px;
}

#slider1 .viewport {
    height: 125px;
    overflow: hidden;
    position: relative;
}

#slider1 .buttons {
    background: #C01313;
    border-radius: 35px;
    display: block;
    position: absolute;
    top: 50%;
    left: 0;
    width: 35px;
    height: 35px;
    color: #fff;
    font-weight: bold;
    text-align: center;
    line-height: 35px;
    text-decoration: none;
    font-size: 22px;
}

#slider1 .next {
    right: 0;
    left: auto;
    top: 50%;
}

#slider1 .buttons:hover {
    color: #C01313;
    background: #fff;
}

#slider1 .disable {
    visibility: hidden;
}

#slider1 .overview {
    list-style: none;
    position: absolute;
    padding: 0;
    margin: 0;
    width: 240px;
    left: 0;
    top: 0;
}

#slider1 .overview li {
    float: left;
    margin: 0 20px 0 0;
    padding: 1px;
    height: 121px;
    border: 1px solid #dcdcdc;
    width: 236px;
 }
</style>