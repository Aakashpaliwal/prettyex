   <div class="black-top hidden-xs">
    <div class="container">
     <div class="row">
	  <div class="col-md-6"></div>
	   <div class="col-md-6 text-right top-cont ">
	     <span class="icon-t-color"><img src="img/email.svg"> info@prettyex.com </span>
		   <span class="space-icon icon-t-color"><img src="img/call.svg" 
		  alt="call"> +0123 456 789</span>
		    <button type="button" class="btn btn-login" data-toggle="modal" data-target="#myModal">Login</button>
		      <button type="button" class="btn btn-signup">signup</button>
	  	       </div>
		    	 </div>
		   		   </div>
				     </div>
	<nav class="navbar navbar-default bg0 affix" data-spy="affix" data-offset-top="10">
     <div class="container">
       <div class="navbar-header h0">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
         <a class="navbar-brand" href="index.php"><img class="img-responsive logo" src="img/logo1.svg"></a>
          </div>
           <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav text-uppercase">
              <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?>><a href="index.php">Pretty Me!! </a></li>
               <li <?php if (basename($_SERVER['PHP_SELF']) == 'filter.php') echo 'class="active"' ?>><a href="filter.php"> PrettyEx Exclusive  </a></li>
			    <li <?php if (basename($_SERVER['PHP_SELF']) == 'brand.php') echo 'class="active"' ?>><a href="brand.php"> The Brand </a></li>
			     <li <?php if (basename($_SERVER['PHP_SELF']) == 'news.php') echo 'class="active"' ?>><a href="news.php"> News </a></li>
			      <li <?php if (basename($_SERVER['PHP_SELF']) == 'gallery.php') echo 'class="active"' ?>><a href="gallery.php"> Gallery</a></li>
			       <li <?php if (basename($_SERVER['PHP_SELF']) == 'styling.php') echo 'class="active"' ?>><a href="styling.php"> Styling</a></li>
			         <li><a href="#">
			           <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
			           
			            <li class="visible-xs visible-sm"><a href="#"> <button type="button" class="btn btn-login" data-toggle="modal" data-target="#myModal">Login</button></a></li>
			             
			 		    </ul>
				      </div><!--/.nav-collapse -->
		  <div id="sb-search" class="sb-search" >       
            <form>
               <input class="sb-search-input" placeholder="Enter Search..." 
               onkeyup="buttonUp();" onblur="monkey();" type="search" value="" 
               name="search" id="" >
            <input class="sb-search-submit" type="submit"  value="">
            <span class="sb-icon-search"><i class="fa fa-search"></i></span>     
          </form>
        </div>
	         </div><!--/.container-fluid -->
	           </nav>
	           

<!-- Popup -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog mob-s">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>
</button>
      </div>
      <div class="modal-body">
      <div class="row">

      <div class="col-md-6 col-md-push-6">
        <div class="text-center">
        	<img src="img/logo2.svg">
         </div>
 <div class="margin15"></div>
  <form>
    <div class="form-group">
		<!--<div class="signup-icon2">
		  <img src="img/login-icon1.svg">
			 </div>-->
			 <input type="email" class="form-control" id=""  placeholder="Email">
				    </div>
		<div class="form-group">
		<!--<div class="signup-icon2">
		  <img src="img/login-icon1.svg">
			 </div>-->
		<input type="password" class="form-control" id=""  placehold="Password">
			 </div>
       </form>
               <span class="remember">
    	           <div class="checkbox checkbox-primary">
                     <input id="checkbox2" type="checkbox" checked="">
                        <label for="checkbox2">
                           <span class="white">Remember Me</span>
                        </label>
                    </div>
   				 </span>
   				 <span class="signup">Signup</span>
   				 <div class="margin15 clearfix"></div>
   				 <button type="button" class="btn btn-log">Login</button>
   				 <div class="margin15"></div>
   				 <div class="text-center">
   				  <p class="white">or login with :</p> 
   				    <span>
   				 	<button class="loginBtn loginBtn--facebook">
   				 	  Facebook
						</button>
   				 	    </span>
   				 	  <span>
   				 	<button class="loginBtn loginBtn--google">
					Google
					</button>
   				 	 </span>
   				   </div>
          		 </div>
          		       <div class="col-md-6 p-l p-r col-md-pull-6 hidden-xs  hidden-sm">
<iframe width="100%" height="450" src="https://www.youtube.com/embed/5e_7LdSK3HM" frameborder="0" allowfullscreen></iframe>
      </div>
              </div>  
            </div>
          </div>
  		 </div>
		</div>           
