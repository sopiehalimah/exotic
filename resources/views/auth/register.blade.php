<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miminium</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="{{ url('css2/asset/css/bootstrap.min.css') }}">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="{{ url('css2/asset/css/plugins/font-awesome.min.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('css2/asset/css/plugins/simple-line-icons.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('css2/asset/css/plugins/animate.min.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('css2/asset/css/plugins/fullcalendar.min.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('css2/asset/css/plugins/icheck/skins/flat/red.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('css2/asset/css/plugins/animate.min.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('css2/asset/css/plugins/summernote.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('css2/asset/css/plugins/normalize.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('css2/asset/css/plugins/mediaelementplayer.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('select2/dist/css/select2.min.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('select2/dist/css/select2.css') }}"/>
      <link href="{{ url('css2/asset/css/style.css') }}" rel="stylesheet"/>

  <!-- end: Css -->
  
  <link rel="shortcut icon" href="{{ url('css2/asset/img/logomi.png') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

      <form class="form-signin" action="{{ url('/register') }}" method="POST" style="margin-top: 50px;">
      {!! csrf_field() !!}
          <div class="panel periodic-login">
              <!-- <span class="atomic-number">28</span> -->
              <div class="panel-body text-center">
                  <!-- <h1 class="atomic-symbol">Mi</h1> -->
                  <!-- <p class="atomic-mass">14.072110</p> -->
                  <p class="element-name">Exotic</p>

                  <i class="icons icon-arrow-down"></i>
                   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="name" value="{{ old('name') }}" required>
                     <span>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </span>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="email" value="{{ old('email') }}" class="form-text" required>
                     <span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </span>
                    <span class="bar"></span>
                    <label>Email</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="password" value="{{ old('password') }}" class="form-text" required>
                     <span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </span>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="password_confirmation" class="form-text"  value="{{ old('password') }}"  required>
                     <span>
                                @if ($errors->has('password-confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password-confirmation') }}</strong>
                                    </span>
                                @endif
                                </span>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                <!--  -->
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> &nbsp Agree the terms and policy
                  </label>
                  <input type="submit" class="btn col-md-12" value="SignUp"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="login.html">Already have an account?</a>
                </div>
          </div>
        </form>

          </div>



          <!-- start: Javascript -->
    <script src="{{ url('css2/asset/js/jquery.min.js') }}"></script>
    <script src="{{ url('css2/asset/js/jquery.ui.min.js') }}"></script>
    <script src="{{ url('css2/asset/js/bootstrap.min.js') }}"></script>
   
    
    <!-- plugins -->
    <script src="{{ url('css2/asset/js/plugins/moment.min.js') }}"></script>
    <script src="{{ url('css2/asset/js/plugins/fullcalendar.min.js') }}"></script>
    <script src="{{ url('css2/asset/js/plugins/jquery.nicescroll.js') }}"></script>
    <script src="{{ url('css2/asset/js/plugins/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('css2/asset/js/plugins/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ url('css2/asset/js/plugins/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ url('css2/asset/js/plugins/chart.min.js') }}"></script>
    <script src="{{ url('css2/asset/js/plugins/icheck.min.js') }}"></script>
    <script src="{{ url('css2/asset/js/plugins/summernote.min.js') }}"></script>
    <script src="{{ url('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('css2/asset/js/plugins/holder.min.js') }}"></script>
    <script src="{{ url('css2/asset/js/plugins/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ url('select2/dist/js/select2.full.js') }}"></script>


    

    <!-- custom -->
     <script src="{{ url('css2/asset/js/main.js') }}"></script>

      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>