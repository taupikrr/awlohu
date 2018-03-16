<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rumah Idaman</title>

    <!-- Bootstrap -->
    <link href="{{asset ('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('css/animate.css') }}">
    <link rel="stylesheet" href="{{asset ('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset ('css/jquery.bxslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset ('css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset ('css/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset ('css/set1.css') }}" />
    <link href="{{asset ('css/overwrite.css') }}" rel="stylesheet">
    <link href="{{asset ('css/style.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><span>Rumah Idaman</span></a>
            </div>
            <div class="navbar-collapse collapse">                          
                <div class="menu">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="/">Home</a></li>
                        <li class="dropdown" role="presentation">
                          <a data-toggle="dropdown">Daftar Perumahan</a>
                          <ul class="dropdown-menu">
                            @php
                            $model = App\jenis::all();
                            @endphp
                            @foreach($model as $data)
                            <li><a href="{{url('/perumahan/'.$data->id)}}">{{$data->jenis}}</a></li>
                            @endforeach
                          </ul>
                        </li>
                        <li role="presentation"><a href="{{url('/contact/')}}">Contact</a></li>                     
                    </ul>
                </div>
            </div>          
        </div>
    </nav>
    

        @yield('content')






<footer>
        <div class="inner-footer">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
        
        
        <div class="last-div">
            <div class="container">
                <div class="row">
                    <div class="copyright">
                        © 2018 Pemasaran Rumah Masa Kini </a>
                    </div>  
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=eNno
                    -->             
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!--<ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
                    </ul> -->
                </div>
            </div>
            
            <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>    
                
            
        </div>  
    </footer>
    <!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aab7597d7591465c7089df0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

</script> -->
<!--End of Tawk.to Script-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset ('js/jquery-2.1.1.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('js/wow.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset ('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.bxslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/fliplightbox.min.js') }}"></script>
    <script src="{{ asset ('js/functions.js') }}"></script> 
    <script type="text/javascript">$('.portfolio').flipLightBox()</script>
  </body>
</html>