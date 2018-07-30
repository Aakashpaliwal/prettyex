<?php
//include 'session.php';
ob_start();
?>


    <!--testing-jssor-slider-------->
    
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1280px;height:530px;overflow:hidden;visibility:hidden;background-color:#ffffff;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
       
               
                   <div class="container">
                     <div class="row">
                         
                     <div class="gallery-text">
                      <h1>Loren Ipson-1</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur <br>
adipiscing elit. Nam laoreet efficitur pharetra</p>
                     </div>
                      </div>
                       </div>
                     
        <div data-u="slides" style="cursor:default;position:relative;top:20px;left:300px;width:599px;height:542px;overflow:hidden;">
            <div data-p="126.75">
                
                <img data-u="image" src="gallery/1.jpg"/>
                <img data-u="thumb" src="gallery/1.jpg"/>
            </div>
            <div data-p="126.75">
                <img data-u="image" src="gallery/2.jpg"/>
                <img data-u="thumb" src="gallery/2.jpg"/>
            </div>
            <div data-p="2028">
                <img data-u="image" src="gallery/3.jpg"/>
                <img data-u="thumb" src="gallery/3.jpg"/>
            </div>
            <div data-p="126.75">
                <img data-u="image" src="gallery/4.jpg"/>
                <img data-u="thumb" src="gallery/4.jpg"/>
            </div>
            <div data-p="126.75">
                <img data-u="image" src="gallery/5.jpg"/>
                <img data-u="thumb" src="gallery/5.jpg"/>
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01-94-107" style="position:absolute;left:368px;top:0px;width:1680px;height:542px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
    </div>
    
    <!-- #endregion Jssor Slider End -->


    <!--end-testing-jssor-slider----->
    <!--end-->
          
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Gallery";
$contentheader = "";
//Apply the template
include("template2.php");
?>  

 	<!--<link href="css/ninja-slider.css" rel="stylesheet" />
    <script src="js/ninja-slider.js"></script>
    <link href="css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/thumbnail-slider.js" type="text/javascript"></script>-->
    <link href="css/jssor-style.css" rel="stylesheet" type="text/css">
    <script src="js/jssor-galler-slider.js" type="text/javascript"></script>
    <script src="js/jssor-galler-2.0-slider.js" type="text/javascript"></script>
    <script type="text/javascript">jssor_1_slider_init();</script>

		