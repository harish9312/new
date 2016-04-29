<?php

include "includes/db.php";

include "includes/header.php";
//    <!-- Navigation -->
include "includes/nav.php";

?>
     
<script>
$(function(){
    var $mwo = $('.marquee-with-options');
    $('.marquee').marquee();
    $('.marquee-with-options').marquee({
        //speed in milliseconds of the marquee
        speed: 4000,
        //gap in pixels between the tickers
        gap: 5,
        //gap in pixels between the tickers
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true,
        //on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
        pauseOnHover: true
    });
    //Direction upward
    $('.marquee-horz').marquee({
        direction: 'left',
        speed: 1500
    });
    //pause and resume links
    $('.pause').click(function(e){
        e.preventDefault();
        $mwo.trigger('pause');
    });
    $('.resume').click(function(e){
        e.preventDefault();
        $mwo.trigger('resume');
    });
    //toggle
    $('.toggle').hover(function(e){
        $mwo.trigger('pause');
    },function(){
        $mwo.trigger('resume');
    })
    .click(function(e){
        e.preventDefault();
    })
});
</script>

	 
	 
	 
	 
	 
<style>
icon{
	margin:0 auto;
	display:block;
}
services section{
	text-align: center;
}
img {
    float: left;
    border: 0px dotted black;
    margin: 0px 0px 15px 20px;
}
</style><div class="container-fluid">
		<h1><font face="calibari"><center>Welcome To The Online Movie Ticketing Service</h1>
		<h2><font face="Times New Roman"><center>The Latest Movie Of The Months are Listed Below Click on The Link To Book Tickets</h2>
<br><br><br>



		<strong><font face="Castellar" size="4"><a href="book1.php"><img class="img-responsive" src="one.jpg" width="300" height="1900"></a>
		<strong><font face="Castellar" size="4"><a href="book2.php"><img class="img-responsive" src="2.jpg" width="300" height="190"></a>
		<strong><font face="Castellar" size="4"><a href="book3.php"><img class="img-responsive" src="3.jpg" width="300" height="190"></a>


		<strong><font face="Castellar" size="4"><a href="book4.php"><img class="img-responsive" src="4.jpg" width="300" height="190"></a>




		
<?php
include "includes/footer.php";
?>