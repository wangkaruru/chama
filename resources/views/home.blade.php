@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
 
<link href="css/styles.css" rel="stylesheet" media="screen">    

<!-- Google Fonts --> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,700' rel='stylesheet' type='text/css'>


<!-- Font Awesome -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> 
</head>
<body>

    <div id="menu">
    <nav class="navbar-wrapper navbar-default" role="navigation">
        <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-themers">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand site-name" href="#top"><img src="images/spc.png" alt="logo"></a>
              </div>
     
     
              <div id="navbar-scroll" class="collapse navbar-collapse navbar-themers navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                     
                    <li><a href="{{ url('/') }}">About</a></li>
                    <li><a href="{{ url('/') }}">Services</a></li>
                    <li><a href="{{ url('/') }}">How to Join</a></li>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                   <li><a href="{{ route('logout') }}">Logout</a></li>

                   
                </ul>
              </div>
        </div>
    </nav>
</div>

    
    <div id="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

    
        
                
                
                
                 
    


    
    <!-- javascript files -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/ekko-lightbox-min.js"></script>
    <script type="text/javascript">
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) { event.preventDefault(); $(this).ekkoLightbox(); }); 
    </script>
    <script>
        new WOW().init();
    </script>
  






<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
              
              

                </div>
            </div>
        </div>
    </div>
</div>
 <br/>
                
   
   <div >
<h3 class="text-center">MY CONTRIBUTIONS </h3>
</div>
<table id="dataTable1" width="100%"  border="1" class="table table-striped table-lightfont"><thead><tr><th>Phone Number</th><th>Amount</th><th>Receipt</th><th>Date</th></tr></thead>
<tbody id="records_table">
@foreach($details as $detail)

        <tr>
            <td>{{ $detail->phonenumber }}</td>
            <td>{{ $detail->depositamount }}</td>
           <td>{{ $detail->receipt}}</td>
             <td>{{$detail->created_at}}</td>
        </tr>

    @endforeach



</tbody>
</table>

                  <br/>
                  <br/>
                  <br/>
                        <br/>
                  <br/>
                  
                   <br/>
                   
                
               



<footer id="footer">
    <div class="container">
        <div class="col-sm-4 col-sm-offset-4" style="background-color: #777 !important;">
            <!-- social links -->
                <div class="social text-center">
                    <ul>
                        <li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
                    </ul>

<a href="{{ url('terms') }}">Terms and Conditions</a>
                </div>  
            <div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright superchama @2018 


             </div>

            <a href="#" class="scrollToTop"><i class="fa fa-arrow-circle-o-up"></i></a>
        </div>  
    </div>  
</footer>
</body>
</html>
@endsection







