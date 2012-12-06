<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8" />
    <title>#nuitinfo 2012 &bull; IARISS Team</title>
    
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
    <meta name="robots" content="index, follow, archive" />
    
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="icon" type="image/png" href="/favicon.png" />
    
    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Imprima" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/screen.css" />
    <style>
      #logo a  {
        text-indent: -90000px;
        position: absolute; top: 5%; left: 0; right: 0; z-index: 1000; text-align: center;
        background-image: url('./img/team_400x280.png');
        background-size: auto 100%;
        background-repeat: no-repeat;
        background-position: top center;
        height: 200px;
      }
      canvas   { left: 50%; position: absolute; top: 50%; margin-top: -150px; margin-left: -300px; z-index: 500; }
      #wrapper { position: fixed; top: 0; bottom: 0; left: 0; right: 0; }
      #text    { position: absolute; bottom: 5%; left: 0; right: 0; text-align: center; z-index: 1000; }

      nav      { position: absolute; bottom: 5%; left: 0; right: 0; text-align: center; z-index: 1500; }
      nav ul,
      nav li   { margin: 0; padding: 0; }
      nav li   { list-style-type: none; display: inline-block; width: 20%; }

      nav li a { text-decoration: none; text-shadow: 0 0 1px rgba(255, 255, 255, .5); }
      nav li a:hover { color: darkred; }

      li.twitter a {
        color: rgb(64, 175, 222);
        padding-left: 28px;
        background: url("http://iarissteam.me/img/twitter.png") no-repeat scroll left center transparent;
      }

      li.tumblr a {
          color: gray;
          padding-left: 28px;
          background: url("http://res.iarissteam.me/tumblr/favicon.ico") no-repeat scroll left center transparent;
      }

      li.fb a {
          color: rgb(12, 42, 121);
          padding-left: 28px;
          background: url("http://iarissteam.me/img/facebook.png") no-repeat scroll left center transparent;
      }
      li.live a {
          color: rgb(255, 255, 255);
          padding-left: 28px;
          background: url("http://iarissteam.me/img/live.png") no-repeat scroll left center transparent;
      }
    </style>
  </head>
  <body>
    <div id="wrapper"></div>
    <canvas id="canvas" width="600" height="300"></canvas>
    <div id="text"></div>
    <div id="logo"><a href="http://iarissteam.me">Iariss Team</a></div>
    <nav>
      <ul>
        <li class="twitter"><a href="//twitter.com/IarissTeam">@IarissTeam</a></li>
        <li class="fb"><a href="http://fb.me/IarissTeam">IarissTeam</a></li>
        <li class="tumblr"><a href="//lesjoiesdelanuit.tumblr.com">Les joies de la nuit</a></li>
        <li class="live"><a href="http://live.iarissteam.me">Live</a></li>
      </ul>
    </nav>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>
      /**
       * @source http://cssdeck.com/labs/db2o5oej
       */
      /* 
      original script by Rishabh
      additions by Rezoner: blur, pulsation, quality, blinking, arc/rect, trembling, background adjusting
      */
        
      /* play with these values */

      BLUR = false;

      PULSATION = false;
      PULSATION_PERIOD = 500;
      PARTICLE_RADIUS = 2;

      /* disable blur before using blink */

      BLINK = false;

      GLOBAL_PULSATION = false;

      QUALITY = 5; /* 0 - 5 */

      /* set false if you prefer rectangles */
      ARC = false;

      /* trembling + blur = fun */
      TREMBLING = 0; /* 0 - infinity */

      FANCY_FONT = "arial";

      BACKGROUND = "black";

      BLENDING = false;

      /* ------------------ */

      QUALITY_TO_FONT_SIZE = [10, 20, 50, 100, 200, 80];
      QUALITY_TO_SCALE = [20, 14, 6, 3, 1.5, 1.6];
      QUALITY_TO_TEXT_POS = [10, 18, 43, 86, 170, 120];

      window.onload = function() {
        document.body.style.backgroundColor = BACKGROUND;
        
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");

        var W = canvas.width;
        var H = canvas.height;

        var tcanvas = document.createElement("canvas");
        var tctx = tcanvas.getContext("2d");
        tcanvas.width = W;
        tcanvas.height = H;


        total_area = W * H;
        total_particles = 800;
        single_particle_area = total_area / total_particles;
        area_length = Math.sqrt(single_particle_area);
        console.log(area_length);

        var particles = [];
        for(var i = 1; i <= total_particles; i++) {
          particles.push(new particle(i));
        }

        function particle(i) {
          this.r = Math.round(Math.random() * 255 | 0);
          this.g = Math.round(Math.random() * 255 | 0);
          this.b = Math.round(Math.random() * 255 | 0);
          this.alpha = 1;

          this.x = (i * area_length) % W;
          this.y = (i * area_length) / W * area_length;


          /* randomize delta to make particles sparkling */
          this.deltaOffset = Math.random() * PULSATION_PERIOD | 0;

          this.radius = 0.1 + Math.random() * 2;
        }

        var positions = [];

        function new_positions() {
          tctx.fillStyle = "white";
          tctx.fillRect(0, 0, W, H)
          tctx.fill();

          tctx.font = "bold " + QUALITY_TO_FONT_SIZE[QUALITY] + "px " + FANCY_FONT;
          tctx.align = 'center';

          _do = 1354807980;
          _dn = new Date();
          _dnTime = Math.ceil( _dn.getTime()/1000);

          if( _dnTime <= 1354807980 ) {
            var _time = _do - _dnTime;
          }
          else if( _dnTime <= 1354864260 ){
            var _time = 1354864260 - _dnTime;
          }


          var text = _time;

          var textArray = [];

          var _s = 0, m = 0, _h = 0, _d = 0, _m = 0;
          times = [60, 60, 24];

          for( a in times ) {
            _s = _time % times[a];
            _s = _s < 10 ? '0' + _s : _s;

            textArray.push(_s);
            _time = Math.floor(_time/times[a]);
          }

          text = textArray.reverse().join(":");

            //$('#text').html('Avant le début de la Nuit De L\'Info');
          //}

          //alert(_dn.getTime() + ' @ ' + (_dn.getTime()));
          //_time = _do - Math.ceil(_dn.getTime()/1000) - 169500;

          //var text = _time;//String(Math.random()).substr(-3);

          tctx.strokeStyle = "black";
          tctx.strokeText(text, (QUALITY + 1) * 5, QUALITY_TO_TEXT_POS[QUALITY]);

          image_data = tctx.getImageData(0, 0, W, H);
          pixels = image_data.data;
          positions = [];
          for(var i = 0; i < pixels.length; i = i + 4) {
            if(pixels[i] != 255) {
              position = {
                x: (i / 4 % W | 0) * QUALITY_TO_SCALE[QUALITY] | 0,
                y: (i / 4 / W | 0) * QUALITY_TO_SCALE[QUALITY] | 0
              }
              positions.push(position);
            }
          }   

          get_destinations();
        }

        function draw() {

          var now = Date.now();

          ctx.globalCompositeOperation = "source-over";
          
          if(BLUR) ctx.globalAlpha = 0.1;
          else if(!BLUR && !BLINK) ctx.globalAlpha = 1.0;
          
          ctx.fillStyle = 'transparent';//BACKGROUND;
          ctx.fillRect(0, 0, W, H);
          ctx.clearRect(0, 0, W, H);

          if(BLENDING) ctx.globalCompositeOperation = "lighter";

          for(var i = 0; i < particles.length; i++) {
            p = particles[i];

            /* in lower qualities there is not enough full pixels for all of  them - dirty hack*/

            if(isNaN(p.x)) continue

            ctx.beginPath();
            ctx.fillStyle = "rgb(" + p.r + ", " + p.g + ", " + p.b + ")";
            ctx.fillStyle = "rgba(" + p.r + ", " + p.g + ", " + p.b + ", " + p.alpha + ")";


            if(BLINK) ctx.globalAlpha = Math.sin(Math.PI * mod * 1.0);

            if(PULSATION) { /* this would be 0 -> 1 */
              var mod = ((GLOBAL_PULSATION ? 0 : p.deltaOffset) + now) % PULSATION_PERIOD / PULSATION_PERIOD;

              /* lets make the value bouncing with sinus */
              mod = Math.sin(mod * Math.PI);
            } else var mod = 1;

            var offset = TREMBLING ? TREMBLING * (-1 + Math.random() * 2) : 0;
            
            var radius = PARTICLE_RADIUS * p.radius;

            if(!ARC) {
              ctx.fillRect(offset + p.x - mod * radius / 2 | 0, offset + p.y - mod * radius / 2 | 0, radius * mod, radius * mod);
            } else {
              ctx.arc(offset + p.x | 0, offset + p.y | 0, radius * mod, Math.PI * 2, false);
              ctx.fill();
            }



            p.x += (p.dx - p.x) / 10;
            p.y += (p.dy - p.y) / 10;
          }
        }

        function get_destinations() {
          for(var i = 0; i < particles.length; i++) {
            pa = particles[i];
            particles[i].alpha = 1;
            var distance = [];
            nearest_position = 0;
            if(positions.length) {
              for(var n = 0; n < positions.length; n++) {
                po = positions[n];
                distance[n] = Math.sqrt((pa.x - po.x) * (pa.x - po.x) + (pa.y - po.y) * (pa.y - po.y));
                if(n > 0) {
                  if(distance[n] <= distance[nearest_position]) {
                    nearest_position = n;
                  }
                }
              }
              particles[i].dx = positions[nearest_position].x;
              particles[i].dy = positions[nearest_position].y;
              particles[i].distance = distance[nearest_position];

              var po1 = positions[nearest_position];
              for(var n = 0; n < positions.length; n++) {
                var po2 = positions[n];
                distance = Math.sqrt((po1.x - po2.x) * (po1.x - po2.x) + (po1.y - po2.y) * (po1.y - po2.y));
                if(distance <= 5) {
                  positions.splice(n, 1);
                }
              }
            } else {
              //particles[i].alpha = 0;
            }
          }
        }

        function init() {
          new_positions();
          setInterval(draw, 16.67);
          setInterval(new_positions, 1000);
        }

        init();
      }
    </script>
    <script charset="utf-8" src="js/jquery.tubular.1.0.js"></script> 
    <script>
    $().ready(function() {
      $('#wrapper').tubular({
        videoId: 'FG0fTKAqZ5g',
        mute: false,
        start: 3,
      }); // where idOfYourVideo is the YouTube ID.
    });
    </script>
  </body>
</html>