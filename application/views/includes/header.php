<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title><?php echo $pageTitle; ?></title>
    <!-- CSS-->
    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <script src="<?php echo base_url(); ?>html/js/script.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://daneden.github.io/animate.css/animate.min.css">

    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<?php 
  $c = $this->db->query("select * from category_one");
  $cc = $c->result_array();
?>

<div class="row herow navbar-fixed">
     <nav class="henav">
        <div class="nav-wrapper henavwrap">
         <!--  <a href="<?php echo base_url(); ?>home" class="brand-logo" ><img src="<?php echo base_url(); ?>html/images/li.jpg"> </a> -->
          <ul id="nav-mobile" class="right hide-on-med-and-down heul">
            <li><a href="<?= base_url(); ?>" id="home">home</a></li>
            <li><a href="#" id="productsa">product </span></a></li>
            <li><a href="#" id="beardA">beard</a></li>
            <li><a href="#" id="hairA">hair</a></li>
            <li><a href="#" id="skinA">skin</a></li>
             <li><a href="<?= base_url(); ?>contact" id="contactt">contact</a></li>
           <!--  <li><a href="#">combo</a></li> -->
          </ul>
        </div>
     </nav>

</div>
<div class="logodiv">
  <img src="<?php echo base_url(); ?>html/images/logoo.png">
</div>
<!--=================================================product part==========================-->
<div class="products" id="products" >
  <img class="c1img"  src="<?php echo base_url(); ?>html/images/c1.png ">
  <img class="c2img"  src="<?php echo base_url(); ?>html/images/c2.png ">
  <img class="c3img"  src="<?php echo base_url(); ?>html/images/c3.png ">
  
    <div class="row">
          <div class="col s6 m2">
            <div class="probox">
                <div class="proimg">
                    <img src="<?php echo base_url(); ?>html/images/products/hear-serum.jpg">
                </div>
                <div class="protitle hedbtn btn btn-1 btn-effect-1" data-direction="left">
                    <a href="<?php echo base_url(); ?>Category_List"><span>HAIR</span></a>
                </div>
            </div>
          </div>

           <div class="col s6 m2">
            <div class="probox">
                <div class="proimg">
                    <img src="<?php echo base_url(); ?>html/images/products/skin.jpg">
                </div>
                <div class="protitle hedbtn btn btn-1 btn-effect-1" data-direction="left">
                    <a href="<?php echo base_url(); ?>Category_List"><span>SKIN</span></a>
                </div>
            </div>
          </div>

          <div class="col s6 m2">
            <div class="probox">
                <div class="proimg">
                    <img src="<?php echo base_url(); ?>html/images/products/tattoo.jpg">
                </div>
                <div class="protitle btn hedbtn btn-1 btn-effect-1" data-direction="left">
                    <a href="<?php echo base_url(); ?>Category_List"><span>Tattoo</span></a>
                </div>
            </div>
          </div>

           <div class="col s6 m2">
            <div class="probox">
                <div class="proimg">
                    <img src="<?php echo base_url(); ?>html/images/products/combo.jpg">
                </div>
                <div class="protitle btn hedbtn btn-1 btn-effect-1" data-direction="left">
                    <a href="<?php echo base_url(); ?>Category_List"><span>combo</span></a>
                </div>
            </div>
          </div>

           <div class="col s6 m2">
            <div class="probox">
                <div class="proimg">
                    <img src="<?php echo base_url(); ?>html/images/products/gift.jpg">
                </div>
                <div class="protitle  hedbtn btn btn-1 btn-effect-1" data-direction="left">
                    <a href="<?php echo base_url(); ?>Category_List"><span>gift</span></a>
                </div>
            </div>
          </div>

           <div class="col s6 m2">
            <div class="probox">
                <div class="proimg">
                    <img src="<?php echo base_url(); ?>html/images/products/beard.jpg">
                </div>
                <div class="protitle btn hedbtn btn-1 btn-effect-1" data-direction="left">
                    <a href="<?php echo base_url(); ?>Category_List"><span>beard</span></a>
                </div>
            </div>
          </div>

    </div>
</div>
<!--=================================================end product part==========================-->

<!--=================================================beard part==========================-->
<div class="products" id="beard" style="display: none;">
    <img class="c1img"  src="<?php echo base_url(); ?>html/images/c1.png ">
  <img class="c2img"  src="<?php echo base_url(); ?>html/images/c2.png ">
  <img class="c3img"  src="<?php echo base_url(); ?>html/images/c3.png ">
    <div class="row">
          <div class="col s6 m2">
            <div class="probox">
                <div class="proimg">
                    <img src="<?php echo base_url(); ?>html/images/products/hear-serum.jpg">
                </div>
                <div class="protitle hedbtn btn btn-1 btn-effect-1" data-direction="left">
                    <a href="<?php echo base_url(); ?>Category_List"><span>HAIR</span></a>
                </div>
            </div>
          </div>

           <div class="col s6 m2">
            <div class="probox">
                <div class="proimg">
                    <img src="<?php echo base_url(); ?>html/images/products/skin.jpg">
                </div>
                <div class="protitle hedbtn btn btn-1 btn-effect-1" data-direction="left">
                    <a href="<?php echo base_url(); ?>Category_List"><span>SKIN</span></a>
                </div>
            </div>
          </div>

    </div>
</div>
<!--=================================================end beard part==========================-->

<!--=================================================hair part==========================-->
<div class="products" id="hair" style="display: none;">
    <img class="c1img"  src="<?php echo base_url(); ?>html/images/c1.png ">
  <img class="c2img"  src="<?php echo base_url(); ?>html/images/c2.png ">
  <img class="c3img"  src="<?php echo base_url(); ?>html/images/c3.png ">
    <div class="row">
          <div class="col s6 m2">
            <div class="probox">
                <div class="proimg">
                    <img src="<?php echo base_url(); ?>html/images/products/hai-fall.jpg">
                </div>
                <div class="protitle btn hedbtn btn-1 btn-effect-1" data-direction="left">
                    <a href="<?php echo base_url(); ?>Category_List"><span>hai-fall</span></a>
                </div>
            </div>
          </div>

    </div>
</div>
<!--=================================================end Concerns part==========================-->

<!--=================================================skin part==========================-->
<div class="products" id="skin" style="display: none;">
    <img class="c1img"  src="<?php echo base_url(); ?>html/images/c1.png ">
  <img class="c2img"  src="<?php echo base_url(); ?>html/images/c2.png ">
  <img class="c3img"  src="<?php echo base_url(); ?>html/images/c3.png ">
    <div class="row">
          <div class="col s6 m2">
            <div class="probox">
                <div class="proimg">
                    <img src="<?php echo base_url(); ?>html/images/products/hai-fall.jpg">
                </div>
                <div class="protitle btn hedbtn btn-1 btn-effect-1" data-direction="left">
                    <a href="<?php echo base_url(); ?>Category_List"><span>hai-fall</span></a>
                </div>
            </div>
          </div>

    </div>
</div>
<!--=================================================end Concerns part==========================-->
<body>



<script type="text/javascript">
$("#productsa").mouseenter(function() {
      $("#products").fadeIn();
});
$("#products").mouseleave(function() {
      $("#products").fadeOut();
});

$("#beardA").mouseenter(function() {
      $("#beard").fadeIn();
});
$("#beard").mouseleave(function() {
      $("#beard").fadeOut();
});

$("#hairA").mouseenter(function() {
      $("#hair").fadeIn();
});
$("#hair").mouseleave(function() {
      $("#hair").fadeOut();
});

$("#skinA").mouseenter(function() {
      $("#skin").fadeIn();
});
$("#skin").mouseleave(function() {
      $("#skin").fadeOut();
});
</script>

<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700);
  @import url(https://fonts.googleapis.com/css?family=Eczar);

  a.crtaa span {
    position:  relative;
    bottom: 80px;
    left: 24px;
    background: #eae9e9;
    width: 87px !important;
    padding: 3px 11px;
    border-radius: 42px;
    font-size: 14px;
    color:  black;
}
body{
  overflow: hidden;
}

#container {

  width: 100%;
  height: 100vh;
  z-index: 100;
  padding-top: 84px;
  box-sizing: border-box;
      position: relative;
    overflow: hidden !important;

}
.logodiv img {
    text-align:  center;
    margin:  0 auto;
        height: 160px;
}

.logodiv {
    width: 100%;
    margin:  0 auto;
    text-align:  center;
    position:  relative;
   
}

#loader {
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 58px;
  height: 86px;
  margin-top: -43px;
  margin-left: -29px;
  font-family: 'Montserrat Alternates', sans-serif;
  line-height: 42px;
  overflow: hidden;
  opacity: 0;
  animation: Loader 10s ease-in-out infinite;
  -moz-transform: scale(1.7, 1.7);
  -ms-transform: scale(1.7, 1.7);
  -webkit-transform: scale(1.7, 1.7);
  transform: scale(1.7, 1.7);
}
#loader * {
  display: block;
  position: absolute;
}

@keyframes Loader {
  5%, 100% {
    opacity: 1;
  }
  30% {
    width: 58px;
    margin-left: -29px;
  }
  40%, 82% {
    width: 282px;
    margin-left: -172px;
  }
  86%, 100% {
    width: 4px;
    margin-left: 2px;
  }
}
#loader .rectangle {
  left: 0;
  bottom: 20px;
  width: 58px;
  height: 66px;
  border: 2px solid #313131;
  overflow: hidden;
  box-sizing: border-box;
  background-color: #fff;
}
#loader .rectangle span {
  left: 0px;
  bottom: 3px;
  font-size: 36px;
  font-weight: 700;
  color: #313131;
  animation: FillSpan 10s ease-in-out infinite;
}
#loader .rectangle.outlines {
  animation: Outlines 10s ease-in-out infinite;
}
#loader .rectangle.fill {
  height: 4px;
  border-color: transparent;
  background-color: #313131;
  animation: Fill 10s ease-in-out infinite;
}
#loader .rectangle.fill span {
  color: #fff;
}

@keyframes Outlines {
  82% {
    width: 58px;
    height: 66px;
    bottom: 20px;
  }
  85%, 100% {
    width: 4px;
    bottom: 0;
  }
  85%, 86% {
    height: 86px;
    border-width: 2px;
  }
  89%, 100% {
    height: 0;
    border-width: 0;
  }
}
@keyframes Fill {
  30%, 100% {
    height: 66px;
  }
  30% {
    background-color: #313131;
  }
  40%, 100% {
    background-color: #D96D1B;
  }
  82% {
    width: 58px;
    height: 66px;
    bottom: 20px;
  }
  85%, 100% {
    width: 4px;
    bottom: 0;
  }
  85%, 86% {
    height: 86px;
    border-width: 2px;
  }
  89%, 100% {
    height: 0;
    border-width: 0;
  }
}
@keyframes FillSpan {
  80% {
    left: 24px;
  }
  84%, 100% {
    left: -34px;
  }
  82% {
    bottom: 3px;
  }
  85%, 100% {
    bottom: 9px;
  }
}
#loader .rinkin_coffee {
  left: -220px;
  top: 19px;
  width: 300px;
  animation: rinkinCoffee 10s ease-in-out infinite;
}
#loader .rinkin_coffee span {
  display: inline-block;
  position: static;
  color: #313131;
}
#loader .rinkin_coffee span.rinkin {
  font-size: 36px;
  font-weight: 700;
}
#loader .rinkin_coffee span.coffee {
  font-family: 'Eczar', serif;
  font-size: 41px;
  font-weight: 400;
}

@keyframes rinkinCoffee {
  30% {
    left: -220px;
  }
  40%, 82% {
    left: 62px;
  }
  86%, 100% {
    left: -260px;
  }
}
#loader .slogan {
  right: 2px;
  bottom: 0;
  width: 115px;
  font-size: 12px;
  line-height: 16px;
  color: #313131;
  opacity: 0;
  animation: Slogan 10s ease-in-out infinite;
}

@keyframes Slogan {
  42% {
    opacity: 0;
  }
  48%, 100% {
    opacity: 1;
  }
  81% {
    right: 2px;
  }
  86%, 100% {
    right: 58px;
  }
}


   .loaded #loader {
  opacity: 0;
  display: none;
  transition: all 0.3s ease-out;
}

.loaded #container {
  position: absolute;
  -webkit-transform: translateY(-100%);
                  transform: translateY(-100%);
  transition: all 0.3s 1s ease-out;
}
</style>


<script type="text/javascript">
  $(document).ready(function() {
  // Fakes the loading setting a timeout
      setTimeout(function() {
              $('body').addClass('loaded');
              $('body').css('overflow','auto');
      }, 100);

});
</script>

<style type="text/css">
 a.brand-logo img {
       width: 108px;
    position: relative;
    top: 6px;
}
</style>
