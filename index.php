<!DOCTYPE html>

<html>

	<head>

		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


		<?php

			$filename = 'ads';

			if (file_exists($filename)) {


			$useragent=$_SERVER['HTTP_USER_AGENT'];

			if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
			?>
			<!-- page-level ads-->
			<script>
			  (adsbygoogle = window.adsbygoogle || []).push({
			    google_ad_client: "ca-pub-4410734268512605",
			    enable_page_level_ads: true
			  });
			</script>
		<?
	} else {
			?>
			<!-- normal ads -->
			<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-4410734268512605"
					 data-ad-slot="8482062270"
					 data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
			<?
		}
	}
			?>



		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111729830-1"></script>
		<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  			gtag('js', new Date());

  			gtag('config', 'UA-111729830-1');
			</script>


	<!--script src="js/preload.js"></script-->





		<meta property="og:image" content="https://pacman-e281c.firebaseapp.com/img/preview.png">
		<meta property="og:url" content="https://pacman-e281c.firebaseapp.com/">
		<meta property="og:description" content="Made by Giuseppe Sollazzo, adapting the Pac Man HTML5 app made by Lucio Panepinto.">
		<meta property="og:title" content="Pacs-Man">

		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
		<meta name="description" content="Pac-Man game written in HTML5 + CSS3 + jQuery with Canvas. This WebApp is a Responsive Web Design (RWD) website." />
		<meta name="keywords" content="pacman, pac-man, pac-man online, pacman online, online, online games, games, free, puzzle, lucio panepinto, lucio, panepinto, html, html5, css, css3, javascript, jquery, rwd, responsive, responsive web design, responsive web, web design, canvas, draw" />

		<link rel="stylesheet" type="text/css" href="css/pacman.css" />
		<link rel="stylesheet" type="text/css" href="css/pacman-home.css" />

		<script type="text/javascript" src="js/jquery.js"></script>
		<!--<script type="text/javascript" src="js/jquery-mobile.js"></script>-->
		<script type="text/javascript" src="js/jquery-buzz.js"></script>

		<script type="text/javascript" src="js/game.js"></script>
		<script type="text/javascript" src="js/tools.js"></script>
		<script type="text/javascript" src="js/board.js"></script>
		<script type="text/javascript" src="js/paths.js"></script>
		<script type="text/javascript" src="js/bubbles.js"></script>
		<script type="text/javascript" src="js/fruits.js"></script>
		<script type="text/javascript" src="js/pacman.js"></script>
		<script type="text/javascript" src="js/ghosts.js"></script>
		<script type="text/javascript" src="js/home.js"></script>
		<script type="text/javascript" src="js/sound.js"></script>




		<script type="text/javascript">

			function simulateKeyup(code) {
				var e = jQuery.Event("keyup");
				e.keyCode = code;
				jQuery('body').trigger(e);
			}
			function simulateKeydown(code) {
				var e = jQuery.Event("keydown");
				e.keyCode = code;
				jQuery('body').trigger(e);
			}

			//$(document).ready(function() {
			window.onload = function() {
				//$.mobile.loading().hide();
				loadAllSound();

				HELP_TIMER = setInterval('blinkHelp()', HELP_DELAY);

				initHome();

				$(".sound").click(function(e) {
					e.stopPropagation();

					var sound = $(this).attr("data-sound");
					if ( sound === "on" ) {
						$(".sound").attr("data-sound", "off");
						$(".sound").find("img").attr("src", "img/sound-off.png");
						GROUP_SOUND.mute();
					} else {
						$(".sound").attr("data-sound", "on");
						$(".sound").find("img").attr("src", "img/sound-on.png");
						GROUP_SOUND.unmute();
					}
				});

				$(".help-button, #help").click(function(e) {
					e.stopPropagation();
					if (!PACMAN_DEAD && !LOCK && !GAMEOVER) {
						if ( $('#help').css("display") === "none") {
							$('#help').fadeIn("slow");
							$(".help-button").hide();
							if ( $("#panel").css("display") !== "none") {
								pauseGame();
							}
						} else {
							$('#help').fadeOut("slow");
							$(".help-button").show();
						}
					}
				});

				$(".github").click(function(e) {
					e.stopPropagation();
				});

				$("#home").on("click touchstart", function(e) {
					if ( $('#help').css("display") === "none") {
						e.preventDefault();
						simulateKeydown(13);
					}
				});
				$("#control-up, #control-up-second, #control-up-big").on("mousedown touchstart", function(e) {
					e.preventDefault();
					simulateKeydown(38);
					simulateKeyup(13);
				});
				$("#control-down, #control-down-second, #control-down-big").on("mousedown touchstart", function(e) {
					e.preventDefault();
					simulateKeydown(40);
					simulateKeyup(13);
				});
				$("#control-left, #control-left-big").on("mousedown touchstart", function(e) {
					e.preventDefault();
					simulateKeydown(37);
					simulateKeyup(13);
				});
				$("#control-right, #control-right-big").on("mousedown touchstart", function(e) {
					e.preventDefault();
					simulateKeydown(39);
					simulateKeyup(13);
				});


				$("body").keyup(function(e) {
					KEYDOWN = false;
				});

				$("body").keydown(function(e) {

					if (HOME) {

						initGame(true);

					} else {
						//if (!KEYDOWN) {
							KEYDOWN = true;
							if (PACMAN_DEAD && !LOCK) {
								erasePacman();
								resetPacman();
								drawPacman();

								eraseGhosts();
								resetGhosts();
								drawGhosts();
								moveGhosts();

								blinkSuperBubbles();

							} else if (e.keyCode >= 37 && e.keyCode <= 40 && !PAUSE && !PACMAN_DEAD && !LOCK) {
								if ( e.keyCode === 39 ) {
									movePacman(1);
								} else if ( e.keyCode === 40 ) {
									movePacman(2);
								} else if ( e.keyCode === 37 ) {
									movePacman(3);
								} else if ( e.keyCode === 38 ) {
									movePacman(4);
								}
							} else if (e.keyCode === 68 && !PAUSE) {
								/*if ( $("#canvas-paths").css("display") === "none" ) {
									$("#canvas-paths").show();
								} else {
									$("#canvas-paths").hide();
								}*/
							} else if (e.keyCode === 80 && !PACMAN_DEAD && !LOCK) {
								if (PAUSE) {
									resumeGame();
								} else {
									pauseGame();
								}
							} else if (GAMEOVER) {
								initHome();
							}
						//}
					}
				});
			}; //was }); because of document ready vs window.onload
		</script>

		<title>Pacs-Man</title>
	</head>

	<body>
		<img id="source" src="img/jeremyLEFT.png" style="display: none;"/>
		<img id="sourceright" src="img/jeremyRIGHT.png" style="display: none;"/>
		<img id="sourceJezza" src="img/jezza.png" style="display: none;"/>
		<img id="sourceTerry" src="img/terry.png" style="display: none;"/>
		<img id="sourceDeedee" src="img/deedee.png" style="display: none;"/>
		<img id="sourceBlondey" src="img/blondey.png" style="display: none;"/>
		<img id="sourceHoward" src="img/howard.png" style="display: none;"/>
		<div id="sound"></div>

		<div id="help">
			<h2>Help</h2>
			<table align="center" border="0" cellPadding="2" cellSpacing="0">
				<tbody>
					<tr><td>Arrow Left : </td><td>Move Left</td></tr>
					<tr><td>Arrow Right : </td><td>Move Right</td></tr>
					<tr><td>Arrow Down : </td><td>Move Down</td></tr>
					<tr><td>Arrow Up : </td><td>Move Up</td></tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr><td>P : </td><td>PAUSE</td></tr>
				</tbody>
			</table>
		</div>

		<div id="home">
			<h1>pacs-man</h1>
			<!--h3><a href="https://github.com/puntofisso/pacsman">Credits</a><br><em>2017</em></h3-->
			<!--canvas id="canvas-home-title-pacman"></canvas-->
			<div id="presentation">

				<div id="presentation-titles">characters</div>
				<canvas id="canvas-presentation-pinky"></canvas><div id="presentation-character-pinky">terry</div><!--div id="presentation-name-blinky">"blinky"</div-->
				<canvas id="canvas-presentation-blinky"></canvas><div id="presentation-character-blinky">jezza</div><!--div id="presentation-name-pinky">"pinky"</div-->
				<canvas id="canvas-presentation-inky"></canvas><div id="presentation-character-inky">deedee</div><!--div id="presentation-name-inky">"inky"</div-->
				<canvas id="canvas-presentation-clyde"></canvas><div id="presentation-character-clyde">blondey</div><!--div id="presentation-name-clyde">"clyde"</div-->
			</div>
			<canvas id="trailer"></canvas>
			<div class="help-button" style="display: none;">- help -</div>
			<div class="credits-button"><a href="https://github.com/puntofisso/pacsman">- credits -</a></div>
			<a class="sound" href="javascript:void(0);" data-sound="on"><img src="img/sound-on.png" alt="" border="0"></a>
			<!--a class="github" target="_blank" href="https://github.com/puntofisso/pacsman"><img src="img/github.png" alt="GitHub - Lucio PANEPINTO - Pac-Man"></a-->
		</div>

		<div id="panel">
			<h1>pacs-man</h1>
			<!--canvas id="canvas-panel-title-pacman"></canvas-->
			<div id="score"><h2>1UP</h2><span>00</span></div>
			<div id="highscore"><h2>High Score</h2><span>00</span></div>
			<div id="board">
				<canvas id="canvas-board"></canvas>
				<canvas id="canvas-paths"></canvas>
				<canvas id="canvas-bubbles"></canvas>
				<canvas id="canvas-fruits"></canvas>
				<canvas id="canvas-pacman"></canvas>
				<canvas id="canvas-ghost-blinky"></canvas>
				<canvas id="canvas-ghost-pinky"></canvas>
				<canvas id="canvas-ghost-inky"></canvas>
				<canvas id="canvas-ghost-clyde"></canvas>
				<div id="control-up-big"></div>
				<div id="control-down-big"></div>
				<div id="control-left-big"></div>
				<div id="control-right-big"></div>
			</div>
			<div id="control">
				<div id="control-up"></div>
				<div id="control-up-second"></div>
				<div id="control-down"></div>
				<div id="control-down-second"></div>
				<div id="control-left"></div>
				<div id="control-right"></div>
			</div>
			<canvas id="canvas-lifes"></canvas>
			<canvas id="canvas-level-fruits"></canvas>
			<div id="message"></div>
			<div class="help-button">- help -</div>
			<a class="sound" href="javascript:void(0);" data-sound="on"><img src="img/sound-on.png" alt="" border="0"></a>
		</div>



		<!--script>
			window.onload = use_preloaded_image()
		</script-->


	</body>

</html>
