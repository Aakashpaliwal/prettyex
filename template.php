<!DOCTYPE html>
<html>
    <head>
    <title><?php echo $pagetitle; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="css/animate.css">
        <link rel="shortcut icon" href="img/favi.png">
        <script src="js/story-box.min.js"></script>
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<script src="js/owl.carousel.js"></script>
		<script src="js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="css/video.css">
       
        <!--<script src="js/video.js"></script> video-js-->
       

    </head> 
    
    <body>
        <header>
            <?php include('header.php'); ?>
        </header>

        <div>
            <?php echo $pagemaincontent; ?>
        </div>
        <footer>
            <?php include ('footer.php'); ?>
        </footer>
    </body>
   
</html>


<script>
    function buttonUp(){
         var valux = $('.sb-search-input').val(); 
            valux = $.trim(valux).length;
            if(valux !== 0){
                $('.sb-search-submit').css('z-index','99');
            } else{
                $('.sb-search-input').val(''); 
                $('.sb-search-submit').css('z-index','-999');
            }
    }
    
    $(document).ready(function(){
        var submitIcon = $('.sb-icon-search');
        var submitInput = $('.sb-search-input');
        var searchBox = $('.sb-search');
        var isOpen = false;
        
        $(document).mouseup(function(){
            if(isOpen == true){
            submitInput.val('');
            $('.sb-search-submit').css('z-index','-999');
            submitIcon.click();
            }
        });
        
        submitIcon.mouseup(function(){
            return false;
        });
        
        searchBox.mouseup(function(){
            return false;
        });
                
        submitIcon.click(function(){
            if(isOpen == false){
                searchBox.addClass('sb-search-open');
                isOpen = true;
            } else {
                searchBox.removeClass('sb-search-open');
                isOpen = false;
            }
    });

});

</script>


