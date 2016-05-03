<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Margot McMahon</title>
	<link href='http://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
	<link href="/css/tanya_fonts.css" rel='stylesheet' type='text/css'>
	<meta name="description" content="Portfolio of Margot McMahon">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="/css/main_tanya.css" />
	<link rel="stylesheet" type="text/css" href="main.css" />

	<script type="text/javascript" src="/js/tanya_jquery.js"></script>
	<script src="/js/tanya_ajax.js"></script>
	<script src="/js/tanya_mixitup.js"></script>
	<script src="/js/tanya_modernizr.js"></script>

	<script type="text/javascript">
		// Google stuff
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-46245222-1']);
		_gaq.push(['_trackPageview']);

		(function() {
	 	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  	})();
	</script>
</head>
<body>
	<nav class="navigation">
		<a class="navigation__logo" href="#home"><img src="/img/naked_sensiboii.ico"></a>
		<ul class="navigation__list">
			<li class="navigation__item"><a class="navigation__link" href="#work">See Work</a></li> &#5159;
			<li class="navigation__item"><a class="navigation__link" href="#resume">Resume</a></li> &#5159;
			<li class="navigation__item"><a class="navigation__link" href="mailto:amcmahon@nes.ru">Drop Me A Line</a></li>
		</ul>
	</nav>
	<section class="welcome" style="background:rgba(1,179,147,0.33)"><a name="home">  </a>

		<div class="welcome__container">
			<div class="welcome__background-container">
			<div class="welcome__image-container">

			<img class="margot_welcome" src="/img/margotPortfolio.jpg">
		</div>
			<div class="welcome__headline" style="font-family:Karla">Margot McMahon:<br>Developer, Doodler, Dingus</div>

			<div class="welcome__message">
				<p class="welcome__paragraph" style="font-family:Karla">
					Hi! I'm a web developer who doesn't have a strong preference for either front-end or back-end (yet). I am a compulsive doodler of doodles. I am interested in design theory. I spend time thinking about how web applications can be used in queer advocacy. My other interests include sociolinguistics, racquetball, and bike safety.
				</p>	
			</div> 
		</div>	 							

		<script>
			$('a').click(function(){
		    $('html, body').animate({
		        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top - 70
		    }, 500);
		    return false;
		});
		</script>
	</section>
	<section class="work">
		<a name="work">
			<header class="section-title">Work</header>
		</a>
			<div class="work__container">
				<div class="grid grid-pad">
					<div class="col-1-2 mobile-col-1-1">
						<div class="work__item">
							<a href="http://snailhatcomics.tumblr.com">
								<img src="/img/snail_hat_pate.png" alt="Snail Hat Comics" class="work__image"/>
								<div class="work__title">Comics I'm Ashamed Of</div>
							</a>
						</div>
					</div>
					<div class="col-1-2 mobile-col-1-1">
						<div class="work__item">
							<a href="{{{ action('HomeController@showDoodles') }}}">
								<img src="/img/reluctant_lovers.png" alt="Reluctant Lovers" class="work__image"/>
								<div class="work__title">Minimalist Doodles</div>
							</a>
						</div>
					</div>
					<div class="grid grid-pad">
					<div class="col-1-2 mobile-col-1-1">
						<div class="work__item">
							<a href="{{{ action('HomeController@showTheDorn') }}}">
								<img src="/img/horndornPortfolio.png" alt="Snail Hat Comics" class="work__image"/>
								<div class="work__title">Horn Dorn Javascript Game</div>
							</a>
						</div>
					</div>
					<div class="col-1-2 mobile-col-1-1">
						<div class="work__item">
							<a href="{{{ action('HomeController@showSimpleSnailman') }}}">
								<img src="/img/simplesnailmanPortfolio.png" alt="Reluctant Lovers" class="work__image"/>
								<div class="work__title">Simple Snailman Javascript Game</div>
							</a>
						</div>
					</div>
					</div><!--  end work container-->
				</section>
		<section class="work">
		<a name="resume">
			<header class="section-title">Resume</header>
			<br>
				@include('resume')
			<br>
	<footer>
		&copy; Horn Dondistries 2016
	</footer>
</body>
</html>