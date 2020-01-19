<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->


<html>
<?php 
    
    $unemployment = $_POST["unemployment"];
    $density = $_POST["density"];
    $income = $_POST["lowincome"];
    $cpi = $_POST["cpi"];
    $emissions = $_POST["emissions"];

    $points = getPoints($unemployment, $density, $income, $cpi, $emissions);
    echo "$points";
?>

<?php 

function unemploymentClass($unem){
    $points =0;
    if($unem >= 4.6 && $unem <= 5.7 ){
        
        $points =2;
    }
    elseif(($unem > 3.10 && $unem < 4.6) || ($unem >5.7 && $unem < 6)){
        $points =1;
    }
    elseif(is_int($unem) == false){
        print("invalid type");
    }
    else{
        $points =0;
    }
    return $points;
}
function popDensity($pop){
    $points =0;
    if($pop >= 1173 && $pop <= 4916){
        $points =2;
    }
    elseif(($pop >=317 && $pop <1173) || $pop >4916 && $pop <= 5493){
        $points =1;
    }
    elseif($pop >0){
        $points =0;
    }
    else{
        print("invalid entry");
    }
    return $points;
}
function incomeClass($income){
    if($income >=13.9 && $income <= 19.9){
        $points =2;
    }
    elseif(($income >11 && $income <13.9)|| $income >19.9 && $income <20.1){
        $points =1;
    }
    elseif($income>0){
        $points =0;
    }
    else{
        echo "invalid entry";
    }
    return $points;
}
function cpiClass($cpi){
    if($cpi >=133.3 && $cpi<= 136.7){
        $point =2;
    }
    elseif(($cpi >130.9 && $cpi < 133.3)|| ($cpi >136.7 && $cpi <= 139.9)){
        $point = 1;
    }
    elseif($cpi>0){
        $point =0;
    }
    else{
        print("invalid number");
    }
    return $point;

}
function emissionsClass($emissions){
    $point =0;
    if($emissions >= 4.505 && $emissions <= 5.081 ){
        $point =2;
    }
    elseif(($emissions >= 4.474 && $emissions < 4.505) ||$emissions > 5.081 && $emissions <= 5.260 )
    {
        $point =1;
    }
    elseif(($emissions>0)){
        $point = 0;
    }
    else{
        print("invalid number");
    }
    return $point;
}
function getPoints($unem, $density, $income, $cpi, $emissions){
    $points= 0;
    $points += unemploymentClass($unem); 
    $points += popDensity($density);
    $points += incomeClass($income);
    $points += cpiClass($cpi);
    $points += emissionsClass($emissions);

    return $points;
}
?>
<script type = "text/javascript">

function changeBar(points){
    
    console.log(points);

    if( points == 1){
        document.getElementById('#block10').style.backgroundcolor = "red";
    }
    else if(points ==2){
        document.getElementById('#block10').style.backgroundcolor = "red";
        document.getElementById('#block9').style.backgroundcolor = "red";
    }
    else if(points ==3){
        document.getElementById('#block10').style.backgroundcolor = "red";
        document.getElementById('#block9').style.backgroundcolor = "red";
        document.getElementById('#block8').style.backgroundcolor = "red";
    }
    else if(points == 4){
        document.getElementById('#block10').style.backgroundcolor = "red";
        document.getElementById('#block9').style.backgroundcolor = "red";
        document.getElementById('#block8').style.backgroundcolor = "red";
        document.getElementById('#block7').style.backgroundcolor = "yellow";
    }
    else if(points ==5){
        document.getElementById('#block10').style.backgroundcolor = "red";
        document.getElementById('#block9').style.backgroundcolor = "red";
        document.getElementById('#block8').style.backgroundcolor = "red";
        document.getElementById('#block7').style.backgroundcolor = "yellow";
        document.getElementById('#block6').style.backgroundcolor = "yellow";
    }
    else if(points ==6){
        document.getElementById('#block10').style.backgroundcolor = "red";
        document.getElementById('#block9').style.backgroundcolor = "red";
        document.getElementById('#block8').style.backgroundcolor = "red";
        document.getElementById('#block7').style.backgroundcolor = "yellow";
        document.getElementById('#block6').style.backgroundcolor = "yellow";
        document.getElementById('#block5').style.backgroundcolor = "yellow";
    }
    else if(points ==7){
        document.getElementById('#block10').style.backgroundcolor = "red";
        document.getElementById('#block9').style.backgroundcolor = "red";
        document.getElementById('#block8').style.backgroundcolor = "red";
        document.getElementById('#block7').style.backgroundcolor = "yellow";
        document.getElementById('#block6').style.backgroundcolor = "yellow";
        document.getElementById('#block5').style.backgroundcolor = "yellow";
        document.getElementById('#block4').style.backgroundcolor = "yellow";
    }
    else if(points ==8){
        document.getElementById('#block10').style.backgroundcolor = "red";
        document.getElementById('#block9').style.backgroundcolor = "red";
        document.getElementById('#block8').style.backgroundcolor = "red";
        document.getElementById('#block7').style.backgroundcolor = "yellow";
        document.getElementById('#block6').style.backgroundcolor = "yellow";
        document.getElementById('#block5').style.backgroundcolor = "yellow";
        document.getElementById('#block4').style.backgroundcolor = "yellow";
        document.getElementById('#block3').style.backgroundcolor = "green";
    }
    else if(points ==9){
        document.getElementById('#block10').style.backgroundcolor = "red";
        document.getElementById('#block9').style.backgroundcolor = "red";
        document.getElementById('#block8').style.backgroundcolor = "red";
        document.getElementById('#block7').style.backgroundcolor = "yellow";
        document.getElementById('#block6').style.backgroundcolor = "yellow";
        document.getElementById('#block5').style.backgroundcolor = "yellow";
        document.getElementById('#block4').style.backgroundcolor = "yellow";
        document.getElementById('#block3').style.backgroundcolor = "green";
        document.getElementById('#block2').style.backgroundcolor = "green";
    }
    else if(points ==10){
        document.getElementById('#block10').style.backgroundcolor = "red";
        document.getElementById('#block9').style.backgroundcolor = "red";
        document.getElementById('#block8').style.backgroundcolor = "red";
        document.getElementById('#block7').style.backgroundcolor = "yellow";
        document.getElementById('#block6').style.backgroundcolor = "yellow";
        document.getElementById('#block5').style.backgroundcolor = "yellow";
        document.getElementById('#block4').style.backgroundcolor = "yellow";
        document.getElementById('#block3').style.backgroundcolor = "green";
        document.getElementById('#block2').style.backgroundcolor = "green";
        document.getElementById('#block1').style.backgroundcolor = "green";
    }
    else{
        
    }
}
</script>

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
							<a href="#" class="image"><img src="https://raw.githubusercontent.com/Marco-Cen/Candev2020/master/Graph.png" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Smart City Indicators</h2>
									<p>One of the greatest challenges in predicting early smart city adopters is evaluating the number of factors and weighting their influence.</p>
									
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="https://raw.githubusercontent.com/Marco-Cen/Candev2020/master/Unemployment%20rate.png" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Unemployment Rate</h2>
									<p>These examples of smart cities share a low unemployment rate, as shown in the boxplot.</p>
									
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="https://raw.githubusercontent.com/Marco-Cen/Candev2020/master/Lowincome.png" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Low Income</h2>
									<p>A smart city tends to have a lower percentage of households considered to hold low-income status.</p>
									
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
					 
							<form class ="values" action ="#" method ="POST" onsubmit ="changeBar(points)">
							 <label><input type = "text" id ="firstval" name ="unemployment" placeholder = "Enter your city's unemployment rate ()" maxlength="100" ></label>
							 <label><input type = "text" id ="secondval" name = "density" placeholder = "Enter your city's population density" maxlength="100"></label>
                             <label><input type = "text" id= "thirdval" name ="lowincome" placeholder = "Enter your city's % of low income households (50% below the median income)" maxlength="100"></label>
                             <label><input type = "text" id= "fourthval" name="cpi" placeholder = "Enter your city's CPI" maxlength="100"></label>
                             <label><input type = "text" id= "fifthval" name="emissions" placeholder = "Enter your city's CO2 and electricity emmisions" maxlength="100"></label>
                            <label><input type = "submit"></label>
                
                     </form>
                     <script> var points = <?php echo $points;?> </script>
                     <h3>How it works:</h3>       
                     <p>This is a 10 point scale</p>
							
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>What's missing?</h2>
                            <p>Statistics we would have liked to use if they were available: </p>
                            <ul>
                                <li>% of the population that is Indiginous</li>
                                <li>ANY statistics on transportation on a city-city level</li>
                                <li>Ease of property rights</li>
                                <li>City funding/ distribution of resources</li>
                                <li>
                                
                            </ul>
                            <h4>Challenge: We do not have the 30 pieces of data to show normal distribution, however, because we are working with population data 
                                we assumed that it will fall into normal distribution.
                            </h4>
                            <h4>Challenge 2: We recognize that some factors play a more important role than others, however due to time contraints we weren't available
                                to create an accurate algorithm to account for this. Therefore in the model, each factor is weighted the same.
                            </h4>
                            <p>We believe that the ISO standards for classifying smart cities takes into consideration a lot of good data sets,
                                however, these are some we would have liked to see where the corelation lies with respect to a city's potential to be "Smart"
                            </p>
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