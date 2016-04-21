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
		<a class="navigation__logo" href="#home"><img src="#x"></a>
		<ul class="navigation__list">
			<li class="navigation__item"><a class="navigation__link" href="#work">See Work</a></li> &#5159;
			<li class="navigation__item"><a class="navigation__link" href="mailto:amcmahon@nes.ru">Drop Me A Line</a></li>&#5159;
		</ul>
	</nav>
	<section class="welcome" style="background:rgba(1,179,147,0.33)"><a name="home">  </a>

		<div class="welcome__container">
			<div class="welcome__background-container">
			<div class="welcome__image-container">

			<img class="margot_welcome" src="/img/margotPortfolio.jpg">
		</div>
			<div class="welcome__headline" style="font-family:Karla">I'm Margot, and I'm learning to code.</div>

			<div class="welcome__message">
				<p class="welcome__paragraph" style="font-family:Karla">
				 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
								<div class="work__title">Comics</div>
							</a>
						</div>
					</div>
					<div class="col-1-2 mobile-col-1-1">
						<div class="work__item">
							<a href="http://google.com">
								<img src="/img/reluctant_lovers.jpg" alt="Reluctant Lovers" class="work__image"/>
								<div class="work__title">Minimalist Doodles</div>
							</a>
						</div>
					</div>
					<div class="col-1-2 mobile-col-1-1">
						<div class="work__item">
							<a href="resume.html">
								<img src="/img/horndornPortfolio.png" class="work__image"/>
								<div class="work__title">Horn Dorn JavaScript Game</div>
							</a>
						</div>
					</div>
					<div class="col-1-2 mobile-col-1-1">
						<div class="work__item">
							<a href="http://tumblr.com">
								<img src="/img/simplesnailmanPortfolio.png" class="work__image"/>
								<div class="work__title">Simple Snailman JavaScript Game</div>
							</a>
						</div>
					</div>
					<div class="col-1-2 mobile-col-1-1">
						<div class="work__item">
							<a href="codeup.dev/css_box_model.html">
								<img src="/img/web_projects_thumbnail.png" alt="web_projects_thumbnail" class="work__image"/>
									<div class="work__title">Web Projects</div>
								</a>
							</div>
						</div>
						<div class="col-1-2 mobile-col-1-1">
						</div>
					</div><!--  end work container-->
				</section>
	<footer>
		Horn Dondistries 2016
	</footer>
</body>
</html>