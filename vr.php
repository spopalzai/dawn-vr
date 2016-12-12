<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,600,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <style type="text/css">

      .a-enter-vr{
        bottom: 0px !important;
      }

      .a-enter-vr-button:active, .a-enter-vr-button:hover{
        background-color: transparent !important; 
      }

      .a-enter-vr-button{
        min-height: 50px !important; 
      }

      .vr_nav{
        position: fixed; bottom: 0; width: 100%; background: #000;
      }

      .vr_nav .social_icons a{
        float: left;
        font-size: 20px;
        margin-top: 10px;
        padding: 8px;
      }

      .backbtn{
        z-index: 1;
      }


      .read-about, .read-about:hover{
        background: #fff none repeat scroll 0 0;
        color: #000;
        float: left;
        font-size: 15px;
        font-weight: bold;
        margin: 19px 0;
        padding: 0 13px;
      }


    </style>
</head>
<body >


    <a href="index.php#home" class="backbtn"><i class="fa fa-chevron-left" aria-hidden="true"></i>Home</a>


    <a-scene>
      <a-sky src="assets/media/puydesancy.jpg"></a-sky>
    </a-scene>

    <div class="vr_nav">
        <div class="col-sm-1 col-md-1 col-lg-1 col-xs-2">
            <a class="bottom_logo" style="font-size: 40px; text-align: center;" href="index.php">D</a>
        </div>

        <div class="col-md-8 col-sm-6 col-lg-8  col-xs-10">
            
            <a onclick="aud_play_pause()" title="Preview" data-toggle="tooltip" class="btn btn-default" href="javascript:void(0)" style="float: left;font-size: 24px;padding: 13px;"><i class="fa fa-pause" id="stateicon"></i></a>
            
            <a style="float: left;font-size: 24px;padding: 13px;">By The Sea</a>

            <a href="inner.php" class="read-about pull-right">Read about this location &gt;</a>
        </div>
        <div class="col-md-3 col-sm-5 col-lg-2  col-xs-12 social_icons">
            <a href="javascript:;" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="javascript:;" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="javascript:;" class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="javascript:;" class="en"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
            <a href="javascript:;" class="cmnt leftcomment"><i class="fa fa-commenting-o" aria-hidden="true"></i></a>
        </div>
    </div>


<?php include('comments.php'); ?>

<div style="display: none">
<audio autoplay="" controls="" loop="" preload="" id="myTune">
 <source src="http://192.254.184.234/~tangh/01_admin_resources/Shimmer/ogg/Smile.ogg" type="audio/ogg"></source>
 <source src="http://192.254.184.234/~tangh/01_admin_resources/Shimmer/mp3/Smile.mp3" type="audio/mpeg"></source>
 Your browser does not support the audio element.
</audio>
</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/aframe.js"></script>
<script type="text/javascript">
    
    function aud_play_pause() {
            var myAudio = document.getElementById("myTune");
            if (myAudio.paused) {
              $('#stateicon').removeClass('fa fa-play');
              $('#stateicon').addClass('fa fa-pause');
              myAudio.play();
            } else {
              $('#stateicon').removeClass('fa fa-pause');
              $('#stateicon').addClass('fa fa-play');
              myAudio.pause();
           }
         }

</script>
</body>
</html>