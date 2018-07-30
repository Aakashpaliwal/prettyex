<?php
//include 'session.php';
ob_start();
?>

 <div class="styling-bg">
  <a href="styling-detail.php">
 	<div class="container">
 	  <div class="row">
 		<h2>Lorem Ipsum Simple Dummy Article</h2>
 		<p>Lorem ipsum dolor sit amet, consectetur 
adipiscing elit. Nam laoreet efficitur pharetra</p>	
<p>Publised by - Lorem Ispum</p>
		<div class="socail-style">
            <ul>
			 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				 </ul>
				  </div>			
 	        </div>
 	      </div>
 	      </a>
        </div>
        
        
   <div class="styling-bg2">
     <a href="styling-detail.php">
 	<div class="container">
 	  <div class="row">
 		<h2>Lorem Ipsum Simple Dummy Article</h2>
 		<p>Lorem ipsum dolor sit amet, consectetur 
adipiscing elit. Nam laoreet efficitur pharetra</p>	
<p>Publised by - Lorem Ispum</p>
		<div class="socail-style">
            <ul>
			 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				 </ul>
				  </div>			
 	        </div>
 	      </div>
 	      </a>
        </div>
        
           <div class="styling-bg3">
                 <a href="styling-detail.php">
 	<div class="container">
 	  <div class="row">
 		<h2>Lorem Ipsum Simple Dummy Article</h2>
 		<p>Lorem ipsum dolor sit amet, consectetur 
adipiscing elit. Nam laoreet efficitur pharetra</p>	
<p>Publised by - Lorem Ispum</p>
		<div class="socail-style">
            <ul>
			 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				 </ul>
				  </div>			
 	        </div>
 	      </div>
 	      </a>
        </div>

 
          
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Styling";
$contentheader = "";
//Apply the template
include("template.php");
?>  
