<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Smart Cities Classification</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/indexer.css"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
   
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">What is a Smart City?</a></li>
							<li><a href="#one">Methodology</a></li>
							<li><a href="#two">Where does your city stand?</a></li>
							<li><a href="#three">Conclusion</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
				<div id ="bg-img"></div>
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>What is a Smart City?</h1>
							<div id ="first-part">
							<p>Cities have always employed technology in service of the collective goals of their 
								urban communities.  “Smart cities” use modern sensor, network, and “big data” technologies to manage and control urban 
								environments in real-time. Their “smartness” lies in their ability to improve decision-making 
								and increase efficiency. They accomplish this by processing vast quantities of data at high speeds, automating processes, 
								and providing decision-makers with valuable insights. The Smart City movement aims to improve living standards and public safety 
								and promote environmental sustainability.
								 <a href="https://cippic.ca/en/Open_Smart_Cities#What%20is%20a%20%E2%80%9Csmart%20city%E2%80%9D?"><i>source</i></a>.</p>
								 <h1>Factors that make a city smart: </h1>
								 <ul>
									 <li>Economics</li>
									 <ul>
										 <li>% of service contacts providing city services which contain an open data policy</li>
										 <li>Survival rate of new businesses</li>
										 <li>% of labour force employed in ICT sector</li>
										 <li>% of labour force in education and R&D sectors</li>
									 </ul>
									 <li>Health</li>
									 <ul>
										 <li>% of the city's pop. with an online health file accessible to health care providers</li>
										 <li>Annual number of medical appointments conducted remotely per 100 000 pop.</li>
										 <li>% of pop. with access to real-time public alert systems for air and water quality advisories</li>
									 </ul>
									 <li>Transportation</li>
									 <ul>
										 <li>% of streets covered by real-time traffic alerts and information</li>
										 <li>% of vehicles that are low-emmision vehicles</li>
										 <li>% of traffic lights that are "smart"</li>
										 <li>many many more</li>
									 </ul>
									 <li>Environment</li>
									 <ul>
										 <li>% of buildings built or refurbished within the last 5 years in conformity with green building principles</li>
										 <li>Number of real-time remote air quality monitoring stations per square km</li>
										 <li>% of public buildings equipped for monitoring indoor air quality</li>
									 </ul>
								 </ul>
								</div>
							<ul class="actions">
								<li><a href="#one" class="button scrolly">Next</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Sed ipsum dolor</h2>
									<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
									
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Feugiat consequat</h2>
									<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
									
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Ultricies aliquam</h2>
									<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
									
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Where does your city stand?</h2>
							<p>Certain factors affect a city's potential to implement smart technologies.
								We have made an algorithm that classifies your city's potential based on certain statistics 
								we have found to be critical aspects in pre-existing smart cities.
							</p>

							<div id="bar">
								<div id="block1"></div>
								<div id="block2"></div>
								<div id="block3"></div>
								<div id="block4"></div>
								<div id="block5"></div>
								<div id="block6"></div>
								<div id="block7"></div>
								<div id="block8"></div>
								<div id="block9"></div>
								<div id="block10"></div>
							</div>
					 
							<form class ="values" action ="assets/functions.php" method ="POST">
								<label><input type = "text" id="pop" placeholder= "Enter your city's population"></label>
							 <label><input type = "text" id ="firstval" value = "" maxlength="100" ></label>
							 <label><input type = "text" id ="secondval" value = "" maxlength="100"></label>
							 <label><input type = "text" id= "thirdval" value = "" maxlength="100"></label>
							<label><input type = "submit"></label>
					 </form>
							
							
							<ul class="actions">
								<li><a href="generic.html" class="button">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Get in touch</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<div class="split style1">
								<section>
									
									
									
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>