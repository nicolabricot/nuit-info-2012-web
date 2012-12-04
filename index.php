<?php
  $delay = round((1354807980 - time()) / (60*60*24));
?><!DOCTYPE html>
<html lang="fr-fr">
  <head>
    <meta charset="utf-8" />
    <title><?php echo $delay>0 ? 'J&minus;' . $delay . ' avant' : 'Jour J pour'; ?> la #nuitinfo 2012 &bull; IARISS Team</title>
    
    <!--
    
    $$$$$$\                    $$\                           $$$$$$$$\                                
    \_$$  _|                   \__|                          \__$$  __|                               
      $$ |  $$$$$$\   $$$$$$\  $$\  $$$$$$$\  $$$$$$$\          $$ | $$$$$$\   $$$$$$\  $$$$$$\$$$$\  
      $$ |  \____$$\ $$  __$$\ $$ |$$  _____|$$  _____|         $$ |$$  __$$\  \____$$\ $$  _$$  _$$\ 
      $$ |  $$$$$$$ |$$ |  \__|$$ |\$$$$$$\  \$$$$$$\           $$ |$$$$$$$$ | $$$$$$$ |$$ / $$ / $$ |
      $$ | $$  __$$ |$$ |      $$ | \____$$\  \____$$\          $$ |$$   ____|$$  __$$ |$$ | $$ | $$ |
    $$$$$$\\$$$$$$$ |$$ |      $$ |$$$$$$$  |$$$$$$$  |         $$ |\$$$$$$$\ \$$$$$$$ |$$ | $$ | $$ |
    \______|\_______|\__|      \__|\_______/ \_______/          \__| \_______| \_______|\__| \__| \__|
    
    -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" lang="fr" content="IARISS Team, l'équipe IARISS de la nuit de l'info 2012 qui va promouvoir le patrimoine français ! Nous allons bien nous amuser, alors venez nous supporter :) Surprises en vue \o/" />
    <meta name="keywords" content="IARISS, IARISS Team, Nuit de l'info 2012, #nuitinfo, Alsace, Mulhouse, Programmation, Promotion du patrimoine français, patrimoine français"/>
    <meta name="author" content="IARISS Team" />
    <meta name="copyright" content="IARISS Team" />
    <meta name="robots" content="index, follow, archive" />
    
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="icon" type="image/png" href="/favicon.png" />
    
    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Imprima" type="text/css" />
<?php /*<link rel="stylesheet" href="css/jquery.countup.css" />*/?>
    <link rel="stylesheet" href="/css/expectation.css" />

  </head>
  
  <body>
    
  <div id="container">
  
    <h1><a href="http://iarissteam.me">Iariss Team</a></h1>
    <h2><span><?php echo $delay>0 ? 'J&minus;' . $delay . ' avant' : 'Jour J pour'; ?></span> la <a href="http://www.nuitdelinfo.com/nuitinfo2012/teams:iariss_team:start">#nuitinfo</a> 2012 !</h2>
    <h3><?php echo $delay>0 ? 'Ça se rapproche très vite' : 'C’est parti pour l’aventure'; ?> \o/</h3>
    
    <nav>
      <ul>
        <li class="twitter"><a href="//twitter.com/IarissTeam">@IarissTeam</a></li>
        <li class="fb"><a href="http://fb.me/IarissTeam">IarissTeam</a></li>
        <li class="tumblr"><a href="//lesjoiesdelanuit.tumblr.com">Les joies de la nuit</a></li>
        <li class="live"><a href="http://live.iarissteam.me">Live</a></li>
<?php /*<li class="github"><a href="//github.com/IARISS/" rel="nofollow">GitHub</a></li>*/ ?>
      </ul>
    </nav>
  
  </div><!-- #container -->

<?php /*<div id="countdown"></div>*/ ?>
  
  <!-- Oui, on sait, c'est une machine à gaz que nous chargons pour une fonctionnalité non importante, mais hein on avait envie que ce soit bien centré -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<?php /*<script src="js/jquery.countup.js"></script>
  <script src="js/scripts.js"></script> */ ?>
  <script>
    $(function() {
    jQuery.fn.center = function () {
      this.css("position","absolute");
      this.css("top", Math.max(0, (($(window).height() - this.outerHeight()) / 2) +  $(window).scrollTop()) + "px");
      this.css("left", Math.max(0, (($(window).width() - this.outerWidth()) / 2) + $(window).scrollLeft()) + "px");
      return this;
    }
    $("#container").css('margin-top', 0).center();
    });
  </script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36456913-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  </body>
</html>