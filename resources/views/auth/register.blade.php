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
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                  <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">Firstname</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Lastname</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                                <div class="form-group{{ $errors->has('idnumber') ? ' has-error' : '' }}">
                            <label for="idnumber" class="col-md-4 control-label">Idnumber</label>

                            <div class="col-md-6">
                                <input id="idnumber" type="text" class="form-control" name="idnumber" value="{{ old('idnumber') }}" required autofocus>

                                @if ($errors->has('idnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                       <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                            <label for="phonenumber" class="col-md-4 control-label">Phonenumber</label>

                            <div class="col-md-6">
                                <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}" required autofocus>

                                @if ($errors->has('phonenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('county') ? ' has-error' : '' }}">
                            <label for="county" class="col-md-4 control-label">County</label>

                            <div class="col-md-6">
                               <select name="county">
  
  
  
<option value="Baringo County">Baringo</option>
<option value="Bomet County">Bomet</option>
<option value="Bungoma County">Bungoma</option>
<option value="Busia County">Busia</option>
<option value="eldoret">Eldoret</option>
<option value="Elgeyo Marakwet County">Elgeyo Marakwet</option>
<option value="Embu County">Embu</option>
<option value="Garissa County">Garisaa</option>
<option value="Homa Bay County">Homa Bay</option>
<option value="Isiolo County">Isiolo</option>
<option value="Kajiado County">Kajiado</option>
<option value="Kakamega County">Kakamega</option>
<option value="Kericho County">Kericho</option>
<option value="Kiambu County">Kiambu</option>
<option value="Kilifi County">Kilifi</option>
<option value="Kirinyaga County">Kirinyaga</option>
<option value="Kisii County">Kisii</option>
<option value="Kisumu County">Kisumu</option>
<option value="Kitui County">Kitui</option>
<option value="Kwale County">Kwale</option>
<option value="Laikipia County">Laikipia</option>
<option value="Lamu County">Lamu</option>
<option value="Machakos County">Machakos</option>
<option value="Makueni County">Makueni</option>
<option value="Mandera County">Mandera</option>
<option value="Meru County">Meru</option>
<option value="Migori County">Migori</option>
<option value="Marsabit County">Marsabit</option>
<option value="Mombasa">Mombasa</option>
<option value="Muranga County">Muranga</option>

<option value="Nakuru County">Nakuru</option>
<option value="Nandi County">Nandi</option>
<option value="Narok County">Narok</option>
<option value="Nyamira County">Nyamira</option>
<option value="Nyandarua County">Nyandarua</option>
<option value="Nyeri County">Nyeri</option>
<option value="Samburu County">Sanburu</option>
<option value="Siaya County">Siaya</option>
<option value="Taita Taveta County">Taita Taveta</option>
<option value="Tana River County">Tana RIver</option>
<option value="Tharaka Nithi County">Thraka Nith</option>
<option value="Trans Nzoia County">Trans Nzoia</option>
<option value="Turkana County">Turkana</option>
<option value="Uasin Gishu County">Uasin Gishu</option>
<option value="Vihiga County">Vihiga</option>
<option value="Wajir County">Wajir</option>
<option value="West Pokot County">West Pokot</option>

</select>
                            </div>
                        </div>
 <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        

                       
                            <div >
                                <button type="submit"  class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        
                    </form>


              

                </div>
            </div>



            <p>Already a member?</p>
 <div class="head-btn wow fadeInLeft">
                        <a href="{{route('login')}}" class="btn-primary app-store">
                         <span> --Login--</span>
                        </a>
        </div>
    </div>
</div>



<br>
<br>
<br>
<br>
<br>

<footer id="footer">
    <div class="container">
        <div class="col-sm-4 col-sm-offset-4">
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
