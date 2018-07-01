

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/8E04A26E-EDAB-BB4B-9128-5320A122E48E/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E84E221A0235-8219-B4BB-BADE-E62A40E8/abn/main.css"/><style rel="stylesheet" type="text/css">

body{ margin-top:20px;}
.glyphicon { margin-right:5px;}
.rating .glyphicon {font-size: 22px;}
.rating-num { margin-top:0px;font-size: 54px; }
.progress { margin-bottom: 5px;}
.progress-bar { text-align: left; }
.rating-desc .col-md-3 {padding-right: 0px;}
.sr-only { margin-left: 5px;overflow: visible;clip: auto; }
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Single :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="css/etalage.css" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>

<script src="js/jquery.etalage.min.js"></script>

<link href="css/star.css" rel="stylesheet" type="text/css" media="all" />

<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
</head>
<body>

 <?php



// if(isset($_POST['pc']))
// {
	// $fs = fopen("dataset/book.csv","a");
// $varName="AMERICAN TOURISTER";
// $varN1=$_POST[''];
  // fwrite($fs,$varName . ", " . $csvdt . "\n");

  // fclose($fs);

// }

// ?>
<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];


 $file = fopen("dataset/book.csv","a");

$s = $name."\n";
fputs($file,$s) ;
fclose($file); 
}
?>




<form method="post" action=''>
	<!--header-->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul class="support">
						<li><a href="#"><label> </label></a></li>
						<li><a href="#">24x7 live<span class="live"> support</span></a></li>
					</ul>
					<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="top-header-right">
					<div class="down-top">		
						  <select class="in-drop">
							  <option value="English" class="in-of">English</option>
							  <option value="Japanese" class="in-of">Japanese</option>
							  <option value="French" class="in-of">French</option>
							  <option value="German" class="in-of">German</option>
							</select>
					 </div>
					<div class="down-top top-down">
						  <select class="in-drop">
						  
						  <option value="Dollar" class="in-of">Dollar</option>
						  <option value="Yen" class="in-of">Yen</option>
						  <option value="Euro" class="in-of">Euro</option>
							</select>
					 </div>
					<div class="clearfix"> </div>	
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=" " /></a>
					</div>
					<div class="search">
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submitt"  value="SEARCH">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
						<div class="account"><a href="login.html"><span> </span>YOUR ACCOUNT</a></div>
							<ul class="login">
								<li><a href="login.html"><span> </span>LOGIN</a></li> |
								<li ><a href="register.html">SIGNUP</a></li>
							</ul>
						<div class="cart"><a href="#"><span> </span>CART</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!---->
	
	 <div class="container"> 
	 	
	 	<div class=" single_top">
	      <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/bag.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images/bag.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/bag1.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/bag1.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/bag2.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/bag2.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/bag3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/bag3.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"> </div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  
					
					<h4 name="id1">AMERICAN TOURISTER</h4>
					<h3><span class="label label-danger">New</span></h3>
				<div class="cart-b">
					<div class="left-n ">Rs 1200/-</div>
					<div>
					<br /><br />
					Special Price
₹1,861₹2,80033% off<br />


Special PriceGet extra 10% off (price inclusive of discount)T&C<br />

Special PriceGet extra 5% off (price inclusive of discount)T&C
					</div>
				    <a class="now-get get-cart-in" style="margin-left:-0px; clear:both; position:absolute" href="#">ADD TO CART</a> 
					 <a class="now-get get-cart-in" style="margin-left:-0px; clear:both; position:right" href="#">BUY NOW</a>
					<br />	<br />
				    <div class="clearfix"></div>
				 </div>
				 
				 <h3>Rate This Product:</h3>
			   	<p>
				<textarea  name="name"  rows="8" cols="60" value=''>
				</textarea>
				<br />
				<br>
				<input type="submit"  value="Submit"  name="submit" class="btn btn-success"/>
				</p>
			   	<div class="share">
							<h5>Share Product :</h5>
							<ul class="share_nav">
								<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
			   
				
				</div>
          	    <div class="clearfix"> </div>
				  <div class="tab-content">
				  
    <h3>Rating</h3>
	<hr />
    <div>
	<div class="container" style="width:1500px;">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-center">
					
					<?php
					{
					$n=13;
                    //echo '<div id="ert"><h1> $n</h1></div>';   					
					// echo "<div class = 'rating-num' role='rating' value=$n>"
					
					
					
					
					
					
					
					if (PHP_SAPI != 'cli') {
	//echo "<pre>";
}
require_once __DIR__ . '/autoload.php';
$sentiment = new \PHPInsight\Sentiment();


$csv = explode("\n", file_get_contents('dataset/book.csv'));

foreach ($csv as $key => $line)
{
	$csv[$key] = str_getcsv($line);
}
$variable=count($csv);

for ($i=0;$i<$variable;$i++)
{
	$strings[$i]=$csv[$i][0];
}



$j=0;
$k=0;
$o=0;
foreach ($strings as $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);
	

	// output:
if($class=="neu"){
	
	$a[$j]=$string;
	$j=$j+1;
 
    $c = count($a);
	$f=($c-1); 
	}
if($class=="neg"){
	
	$b[$k]=$string;
	$k=$k+1;
    $d = count($b);
	}
if($class=="pos"){
	$w[$o]=$string;
	$o=$o+1;
    $y = count($w); 
	}	
		
}

$tot = ($y+$d+$f);					
$rating = ((5*$y)+(1*$d)+(3.5*$f))/$tot;					
$m= floor($rating*100)/100;					
//print_r($rating);					
					
					
					
					
					
				     echo '<font size="18" >'; 
					 echo "$m";
					 echo '</font>';
					//print_r ($n);
					
					
					switch($m){
						
						case $m<=1 :    if($m<=0.30){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
                                        <span class="glyphicon glyphicon-star quad"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }
										if($m>0.30 && $m<0.65){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
                                        <span class="glyphicon glyphicon-star half"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }  
										if($m>=0.65 && $m <0.90){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
                                        <span class="glyphicon glyphicon-star oct"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }   
										if($m>=0.90 && $m<=1){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
                                        <span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   } 
                                        break;										   
						
						case $m>1&&$m<=2  :    if($m<=1.30){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star quad"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }
										if($m>1.30 && $m<1.65){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star half"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>';
						                   }  
										if($m>=1.65 && $m <1.90){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star oct"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }   
										if($m>=1.90 && $m<=2){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }     
						
										break;

						case $m>2&&$m<=3  :    if($m<=2.30){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star quad"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }
										if($m>2.30 && $m<2.65){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star half"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>';
						                   }  
										if($m>=2.65 && $m <2.90){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star oct"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }   
										if($m>=2.90 && $m<=3){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }     
						
										break;		 

                        case $m>3&&$m<=4  :    if($m<=3.30){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star quad"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }
										if($m>3.30 && $m<3.65){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star half"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>';
						                   }  
										if($m>=3.65 && $m <3.90){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star oct"></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }   
										if($m>=3.90 && $m<=4){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star-empty "></span>
                                        </div>'; 
						                   }     
						
										break;		   		
					
					case $m>4&&$m<=5  :    if($m<=4.30){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star quad"></span>
                                        </div>'; 
						                   }
										if($m>4.30 && $m<4.65){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star half"></span>
                                        </div>';
						                   }  
										if($m>=4.65 && $m <4.90){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star oct"></span>
                                        </div>'; 
						                   }   
										if($m>=4.90 && $m<=5){
						                echo '<h1 class="rating-num"> </h1>
							            <div class="rating" >
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
										<span class="glyphicon glyphicon-star "></span>
                                        <span class="glyphicon glyphicon-star "></span>
                                        </div>'; 
						                   }     
						
										break;		   		
					}
					
					
					}
					 ?>
					    
                        
							
							
							
							
                        
                        <div>
                            <span class="glyphicon glyphicon-user"></span><?php
error_reporting(0);
							$fp = file('dataset/book.csv');
echo count($fp); total?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="row rating-desc">
                           <!--total-->
						  
						   <!--total-->
                            
                            <!-- end 5 -->
                           <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>TOT
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
								<?php 
								error_reporting(0);
							$fp = file('dataset/book.csv');
//$c1= count($fp);
								$variable=count($fp)."%"; 
								$variablee=count($fp); 
								print_r($variablee);
                                 echo "<div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='20'
                                        aria-valuemin='0' aria-valuemax='100'  style='width: $variable'>" ?>
										
                                        <span class="sr-only">40%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 4 -->
							
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>NEU
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
								<!--pos-->
								 <?php
if (PHP_SAPI != 'cli') {
	//echo "<pre>";
}
require_once __DIR__ . '/autoload.php';
$sentiment = new \PHPInsight\Sentiment();


$csv = explode("\n", file_get_contents('dataset/book.csv'));

foreach ($csv as $key => $line)
{
	$csv[$key] = str_getcsv($line);
}
$variable=count($csv);

for ($i=0;$i<$variable;$i++)
{
	$strings[$i]=$csv[$i][0];
}



$j=0;
foreach ($strings as $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);
	//$var=10;

	// output:
if($class=="neu"){
	//echo "<br /><br /> $string\n";
	//echo "Dominant: $class, scores: ";
	//print_r($scores);
	
	$a[$j]=$string;
	$j=$j+1;
 
    $c = count($a)."%";
	$f=($c-1)."%";
	$variable1=$f; 
	}
	//echo "\n";
	//echo "\n";
}
 print_r($f);

                                     echo "<div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='20'
                                        aria-valuemin='0' aria-valuemax='100'  style='width: $variable1'>" ?>
                                        <span class="sr-only">40%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 3 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>NEG
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    								 <?php
if (PHP_SAPI != 'cli') {
	//echo "<pre>";
}
require_once __DIR__ . '/autoload.php';
$sentiment = new \PHPInsight\Sentiment();

$strings = explode("\n", file_get_contents('dataset/book.csv'));

$csv = explode("\n", file_get_contents('dataset/book.csv'));

foreach ($csv as $key => $line)
{
	$csv[$key] = str_getcsv($line);
}
$variable=count($csv);

for ($i=0;$i<$variable;$i++)
{
	$strings[$i]=$csv[$i][0];
}

$k=0;
foreach ($strings as $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);
	$var1=5;

	// output:
if($class=="neg"){
	//echo "<br /><br /> $string\n";
	//echo "Dominant: $class, scores: ";
	//print_r($scores);
	
	$b[$k]=$string;
	$k=$k+1;
 
    $d = count($b)."%";
	$variable2=$d; 
	}
	//echo "\n";
	//echo "\n";
}
print_r($d);

                                     echo "<div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='20'
                                        aria-valuemin='0' aria-valuemax='100'  style='width: $variable2'>" ?>
                                        <span class="sr-only">20%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star"></span>POS
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    								 <?php
if (PHP_SAPI != 'cli') {
	//echo "<pre>";
}
require_once __DIR__ . '/autoload.php';
$sentiment = new \PHPInsight\Sentiment();

$strings = explode("\n", file_get_contents('dataset/book.csv'));

$csv = explode("\n", file_get_contents('dataset/book.csv'));

foreach ($csv as $key => $line)
{
	$csv[$key] = str_getcsv($line);
}
$variable=count($csv);

for ($i=0;$i<$variable;$i++)
{
	$strings[$i]=$csv[$i][0];
}


$o=0;
foreach ($strings as $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);
	$var2=13;

	// output:
if($class=="pos"){
	//echo "<br /><br /> $string\n";
//	echo "Dominant: $class, scores: ";
	//print_r($scores);
	
	$w[$o]=$string;
	$o=$o+1;
 
    $y = count($w)."%";
	$variable3=$y; 
	}
	//echo "\n";
	//echo "\n";
}
print_r($y);

                                     echo "<div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='20'
                                        aria-valuemin='0' aria-valuemax='100'  style='width: $variable3'>" ?>
                                        <span class="sr-only">15%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1 -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	</div>
   
    
  </div>
          	   </div>
          	
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

          	    	<div class="toogle">
				     	
				     	<p class="m_text">

						<hr />
<div class="container">
 <h3 class="m_3">Product Review</h3>
						
  <p></p>

  <ul class="nav nav-tabs" style="width:500px">
    <li class="active">
    <li><a data-toggle="tab" href="#menu4">Most Recent</a></li>
	 <li><a data-toggle="tab" href="#menua">Neutral</a></li>
    <li><a data-toggle="tab" href="#menu5">Positive</a></li>
    <li><a data-toggle="tab" href="#menu6">Negative</a></li>
  </ul>

  <div class="tab-content">
    
    <div id="menu4" class="tab-pane fade in active">
      <h3>Most Recent</h3>
      <p>
	  <?php
	
echo "<html><body><table class=table style=width:500px>\n\n";
$f = fopen("dataset/book.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";



?>
	  </p>
    </div>
	<div id="menua" class="tab-pane fade">
      <h3>Neutral</h3>
      <p>
	  
	  <?php
if (PHP_SAPI != 'cli') {
	//echo "<pre>";
}
require_once __DIR__ . '/autoload.php';
$sentiment = new \PHPInsight\Sentiment();

$strings = explode("\n", file_get_contents('dataset/book.csv'));

$csv = explode("\n", file_get_contents('dataset/book.csv'));

foreach ($csv as $key => $line)
{
	$csv[$key] = str_getcsv($line);
}
$variable=count($csv);

for ($i=0;$i<$variable;$i++)
{
	$strings[$i]=$csv[$i][0];
}



foreach ($strings as $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);

	// output:
if($class=="neu"){
	echo "<br /><br /> $string\n";
	//echo "Dominant: $class, scores: ";
	//print_r($scores);
	}
	echo "\n";
	echo "\n";
}
?>
	  </p>
    </div>
    <div id="menu5" class="tab-pane fade">
      <h3>Positive</h3>
      <p>
	  <?php
if (PHP_SAPI != 'cli') {
	//echo "<pre>";
}
require_once __DIR__ . '/autoload.php';
$sentiment = new \PHPInsight\Sentiment();

$csv = explode("\n", file_get_contents('dataset/book.csv'));

foreach ($csv as $key => $line)
{
	$csv[$key] = str_getcsv($line);
}
$variable=count($csv);

for ($i=0;$i<$variable;$i++)
{
	$strings[$i]=$csv[$i][0];
}



foreach ($strings as $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);

	// output:
	if($class=="pos"){
	echo "<br /><br /> $string\n";
	//echo "Dominant: $class, scores: ";
	//print_r($scores);
	}
	echo "\n";
}
?>
	  </p>
    </div>
    <div id="menu6" class="tab-pane fade">
      <h3>Negative</h3>
      <p>
	  <?php
if (PHP_SAPI != 'cli') {
	//echo "<pre>";
}
require_once __DIR__ . '/autoload.php';
$sentiment = new \PHPInsight\Sentiment();

$csv = explode("\n", file_get_contents('dataset/book.csv'));

foreach ($csv as $key => $line)
{
	$csv[$key] = str_getcsv($line);
}
$variable=count($csv);

for ($i=0;$i<$variable;$i++)
{
	$strings[$i]=$csv[$i][0];
}

foreach ($strings as $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);

	// output:
if($class=="neg"){
	echo "<br /><br /> $string\n";
	//echo "Dominant: $class, scores: ";
	//print_r($scores);
	}
	echo "\n";
	echo "\n";
}
?>
	  </p>
    </div>
  </div>
</div>
						</p>
				     </div>	
          	   </div>
          	   
          	   <!---->
<div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
		  <ul class="menu">
		<li class="item1"><a href="#">MENS<img class="arrow-img" src="images/arrow1.png" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="amtbag123.php">Cute Kittens </a></li>
				<li class="subitem2"><a href="amtbag123.php">Strange Stuff </a></li>
				<li class="subitem3"><a href="amtbag123.php">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">WOMEN <img class="arrow-img " src="images/arrow1.png" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="amtbag123.php">Cute Kittens </a></li>
				<li class="subitem2"><a href="amtbag123.php">Strange Stuff </a></li>
				<li class="subitem3"><a href="amtbag123.php">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item3"><a href="#">KIDS<img class="arrow-img img-arrow" src="images/arrow1.png" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="amtbag123.php">Cute Kittens </a></li>
				<li class="subitem2"><a href="amtbag123.php">Strange Stuff </a></li>
				<li class="subitem3"><a href="amtbag123.php">Automatic Fails</a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">HOUSEHOLD <img class="arrow-img img-left-arrow" src="images/arrow1.png" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="amtbag123.php">Cute Kittens </a></li>
				<li class="subitem2"><a href="amtbag123.php">Strange Stuff </a></li>
				<li class="subitem3"><a href="amtbag123.php">Automatic Fails </a></li>
			</ul>
		</li>
				<li>
			<ul class="kid-menu">
				<li><a href="amtbag123.php">BOOKS AND STATIONARY</a></li>
				<li ><a href="amtbag123.php">ELECTRONICS</a></li>
				<li ><a href="contact.html">CONTACT US</a></li>
			</ul>
		</li>
	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
					<div class=" chain-grid menu-chain">
	   		     		<a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">300$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6>Lorem ipsum dolor</h6>  		     			   		     										
	   		     		</div>
	   		     	</div>
	   		     	 <a class="view-all all-product" href="amtbag123.php">VIEW ALL PRODUCTS<span> </span></a> 	
			</div>
<div class="clearfix"> </div>			
		</div>
	<!---->
	
	<div>
	
</div
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>NEWS-LETTER</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submitt" value="SUBSCRIBE" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latter-right">
					<p>FOLLOW US</p>
					<ul class="face-in-to">
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span class="facebook-in"> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6>CATEGORIES</h6>
					<ul>
						<li><a href="#">Mens</a></li>
						<li><a href="#">Women</a></li>
						<li><a href="#">Kids</a></li>
						<li ><a href="#">House Hold</a></li>
						<li ><a href="#">Books and Stationary</a></li>
						<li><a href="#">Electronics</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>FEATURE PRODUCTS</h6>
					<ul>
						<li><a href="#">Bags</a></li>
						<li><a href="#">Watches</a></li>
						<li><a href="#">Shoes</a></li>
						<li ><a href="#">Laptops</a></li>
						<li ><a href="#">Mobiles</a></li
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>TOP BRANDS</h6>
					<ul>
						<li><a href="#">Adidas</a></li>
						<li><a href="#">Puma</a></li>
						<li><a href="#">American Tourister</a></li>
						<li ><a href="#">Wild Craft</a></li>
						<li ><a href="#">Hp</a></li>
						<li><a href="#">Dell</a></li>
						<li><a href="#">Asus</a></li>
						<li ><a href="#">Sony</a></li>
						<li><a href="#">Apple</a></li>
						<li><a href="#">Samsung</a></li>
						<li ><a href="#">LG</a></li>
						<li ><a href="#">Philips</a></li>
					</ul>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</form>
</body>
</html>