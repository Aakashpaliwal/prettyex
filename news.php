<?php
//include 'session.php';
ob_start();
?>
<div class="margin15 clearfix"></div>
  <div class="container-fluid">
	<div class="row">
		<div class="text-center news-heading">
		  <h4>Showstopper Collection</h4>
			 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			    <br>Nam laoreet efficitur pharetra</p>
			   </div>
			   <div class="margin15 clearfix"></div>
		<a href="news-detail.php">   
		   <div class="col-md-8">
			 <div class="news-img">
			    <div class="top-shape">Loren ipson
			    </div>
			     <div id="triangle-down"></div>
			     <span class="view"><i class="fa fa-eye" aria-hidden="true"></i> 125 View </span>
				<h3>Lorem Ipsum Simple Dummy Text</h3>
				<p>Vivamus nec libero quis ligula porttitor dictum sed at nibh.<br> 
Vivamus tristique finibus lacus, eget tristique risus tempus ac.</p>
<span>Publised by - Lorem Ispum</span>
<span class="space"><i class="fa fa-calendar" aria-hidden="true"></i> SEPT 3, 2017</span>
			</div>
		</div>
       </a>
       <a href="news-detail.php">  
		<div class="col-md-4">
			 <div class="news-img2">
			    <div class="top-shape2">Loren ipson
			    </div>
			     <div id="triangle-down"></div>
			     <span class="view"><i class="fa fa-eye" aria-hidden="true"></i> 125 View </span>
				<h3>Lorem Ipsum Simple Dummy Text</h3>				
		        <span>Publised by - Lorem Ispum</span>
	    	  <span class="space2"><i class="fa fa-calendar" aria-hidden="true"></i> SEPT 3, 2017</span>
	  	    </div>
	 	  </div>
	 	  </a>
		<div class="clearfix"></div>
		<a href="news-detail.php">  
		       <div class="col-md-6">
			 <div class="news-img3">
			    <div class="top-shape">Loren ipson
			    </div>
			     <div id="triangle-down"></div>
			     <span class="view"><i class="fa fa-eye" aria-hidden="true"></i> 125 View </span>
				<h3>Lorem Ipsum Simple Dummy Text</h3>
				<p>Vivamus nec libero quis ligula porttitor dictum sed at nibh.<br> 
Vivamus tristique finibus lacus, eget tristique risus tempus ac.</p>
<span>Publised by - Lorem Ispum</span>
<span class="space"> <i class="fa fa-calendar" aria-hidden="true"></i> SEPT 3, 2017</span>
			</div>
		</div>
		</a>
		<a href="news-detail.php">  
		    <div class="col-md-6">
			 <div class="news-img4">
			    <div class="top-shape">Loren ipson
			    </div>
			     <div id="triangle-down"></div>
			     <span class="view"><i class="fa fa-eye" aria-hidden="true"></i> 125 View </span>
				<h3>Lorem Ipsum Simple Dummy Text</h3>
				<p>Vivamus nec libero quis ligula porttitor dictum sed at nibh.<br> 
Vivamus tristique finibus lacus, eget tristique risus tempus ac.</p>
<span>Publised by - Lorem Ispum</span>
<span class="space"> <i class="fa fa-calendar" aria-hidden="true"></i> SEPT 3, 2017</span>
			</div>
		</div>
		</a>
 	
		   <div class="clearfix"></div>
		   <a href="news-detail.php">  
		    <div class="col-md-3">
			  <div class="news-img5">
			    <div class="top-shape5">Loren ipson
			      </div>
			      <div id="triangle-down"></div>
			      <span class="view"><i class="fa fa-eye" aria-hidden="true"></i> 125 View </span>
				 <h3>Lorem Ipsum Simple Dummy Text</h3>
				
<span>Publised by - Lorem Ispum</span>
<span class="space5"> <i class="fa fa-calendar" aria-hidden="true"></i> SEPT 3, 2017</span>
			</div>
		</div>
		</a>
			<a href="news-detail.php">  	
		     <div class="col-md-6">
			   <div class="news-img4">
			    <div class="top-shape">Loren ipson
			    </div>
			     <div id="triangle-down"></div>
			     <span class="view"><i class="fa fa-eye" aria-hidden="true"></i> 125 View </span>
				<h3>Lorem Ipsum Simple Dummy Text</h3>
				<p>Vivamus nec libero quis ligula porttitor dictum sed at nibh.<br> 
Vivamus tristique finibus lacus, eget tristique risus tempus ac.</p>
<span>Publised by - Lorem Ispum</span>
<span class="space"> <i class="fa fa-calendar" aria-hidden="true"></i> SEPT 3, 2017</span>
			</div>
		</div>
		</a>
 
		   <a href="news-detail.php">  
             <div class="col-md-3">
			  <div class="news-img5">
			    <div class="top-shape5">Loren ipson
			      </div>
			      <div id="triangle-down"></div>
			      <span class="view"><i class="fa fa-eye" aria-hidden="true"></i> 125 View </span>
				 <h3>Lorem Ipsum Simple Dummy Text</h3>
				
			  <span>Publised by - Lorem Ispum</span>
			<span class="space5"> <i class="fa fa-calendar" aria-hidden="true"></i> SEPT 3, 2017</span>
			</div>
		  </div>
		</a>
	  </div>
    </div>
   <div class="margin15 clearfix"></div>
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "News";
$contentheader = "";
//Apply the template
include("template.php");
?>  


	