<?php
  $nuit_info = 1354807980;
  $delay = floor(($nuit_info - time()) / (60*60*24));
?><!DOCTYPE html>
<html lang="fr-fr">
  <head>
    <meta charset="utf-8" />
    <title>J&minus;<?php echo $delay; ?> &bull; IARISS Team</title>
    
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
    <meta name="description" lang="fr" content="IARISS Team, l'équipe IARISS de la nuit de l'info 2012 qui va promouvoir le patrimoine français !" />
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
  
    <h1><a href="http://www.nuitdelinfo.com/nuitinfo2012/teams:iariss_team:start">IARISS Team</a></h1>
    <h2><span>J&minus;<?php echo $delay; ?></span> avant la <a href="//nuitdelinfo.com/nuitinfo2012/">#nuitinfo</a> 2012 !</h2>
    <h3>Préparez-vous, nous arrivons \o/</h3>
    
    <nav>
      <ul>
        <li class="twitter"><a href="//twitter.com/IarissTeam">@IarissTeam</a></li>
        <li class="github"><a href="//github.com/IARISS/">GitHub</a></li>
        <li class="fb"><a href="http://fb.me/IarissTeam">IarissTeam</a></li>
<?php /*<li class="iariss"><a href="http://iariss.fr">IARISS</a></li>*/ ?>
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