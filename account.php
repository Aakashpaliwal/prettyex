<?php
//include 'session.php';
ob_start();
?>

     <div class="background-account">
	   <div class="container">
	    <div class="row padd15">
		 <h3>Account</h3>
		  <p>Loren ipson</p>
		   <div class="line-account"></div>
		    <div class="margin15"></div>
		     <div class="row">
		     <div class="col-md-3">
			  <h4>Overview</h4>
			   <div class="line-account"></div>
			    <div class="margin15"></div>
			     <h4><strong>Orders</strong></h4>
			       <p>Orders</p>
			     <div class="line-account"></div>
			   <div class="margin15"></div>
			  <p>Credit</p>
			   <h5><strong>Coupons</strong></h5>
			    <h5><strong>Manage Gift Cards</strong></h5>
			    <h5><strong>Cashback</strong></h5>
			    <div class="line-account"></div>
			    <div class="margin15"></div>
			     <p>Acount</p>
			     <h5><strong>Profile</strong></h5>
			      <h5><strong>Save Cards</strong></h5>
			       <h5><strong>Address</strong></h5>
		      </div>

		     <div class="col-md-9 relative">
		    	 <div class="bg-account-right">
		    		<h3>Account Details</h3>
		    		<a href="#">
		    		  <p class="text-right change-p">Change Password</p>
		    		  </a>
		    		 <form>
		    		 <div class="row">
		    		   <div class="col-md-6">
		    		  <div class="form-group">
				       <div class="icon1">
				     	<img src="img/login-icon1.svg">
				     </div>
				    <input type="email" class="form-control01" id=""  placeholder="Email">
				    </div>
		    		 </div>
 				        <div class="col-md-6">
		    		<div class="form-group">
				     <div class="icon1">
				     <img src="img/password-icon.svg">
				     </div>
				  <input type="password" class="form-control01" id=""  
				  placeholder="Password">
				    </div>
		    		 </div>	 
		    		 	</div>
		    		 	<div class="clearfix"></div>
		    		 <div class="line-account"></div>
		    		<h3>General Information</h3>
		    	     <div class="row">
		    		  <div class="col-md-6">
		    		   <div class="form-group">
				        <div class="icon1">
				     	<img src="img/user-icon.svg">
				     </div>
				    <input type="email" class="form-control01" id=""
				     placeholder="First Name">
				     </div>
		    		   </div>
		    		   
		    		<div class="col-md-6">
		    		  <div class="form-group">
				       <div class="icon1">
				     	<img src="img/user-icon.svg">
				     </div>
				    <input type="email" class="form-control01" id="" 
				     placeholder="Last Name">
				     </div>
		    		   </div>
		    		   
		    		<div class="col-md-6">
		    		  <div class="form-group">
				       <div class="icon1">
				     	<img src="img/calender.svg">
				     </div>
				    <input type="email" class="form-control01" id="" 
				     placeholder="Date of Birth">
				     </div>
		    		   </div>
		    		   
		    	    <div class="col-md-6">
		    		  <div class="form-group">
				       <div class="icon1">
				     	<img src="img/phone.svg">
				      </div>
				     <input type="email" class="form-control01" id="" 
				     placeholder="phone number">
				       </div>
		    		    </div>
		    		    <div class="clearfix"></div>
		    		<div class="form-group padd15">
				       <div class="comment">
				        <img src="img/comment.svg">
				        </div>
                       <textarea class="form-control01" id="" 
                       rows="4" placeholder="Comments"></textarea>
                      </div>
                      
                    <div class="col-md-6">
		    		  <div class="form-group">
				       <div class="icon1">
				     	<img src="img/locate.svg">
				      </div>
				     <input type="text" class="form-control01" id="" 
				     placeholder="Location">
				       </div>
		    		    </div>
		    		    
		    	<div class="col-md-6 margin-t">
		    	 <span> <strong>Gender :</strong> </span>
		    	  <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1"> Male </label>
                    </div>
                    
               <div class="radio radio-info radio-inline">
                 <input type="radio" id="inlineRadio2" value="option1" name="radioInline" checked="">
                   <label for="inlineRadio2"> Female </label>
                     </div>
		    		    </div>
		    		    <div class="clearfix margin15"></div>
		    		    <div class="text-center">
                        <button type="button" class="btn btn-sub">Submit</button>
                        </div>
		    		     </div>
		    		   </form>
		    	     </div>
		           </div>				
	             </div>
	              <div class="clearfix margin15"></div>
               </div>
              </div>
             </div>

          
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Account";
$contentheader = "";
//Apply the template
include("template.php");
?>  


		