<?php
session_start();
?>

<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Klein Oak Girls Who Code</title>
<meta name="viewport" content="width=device-width, initial-scale=1">		<!--dimensioning-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


<style>
/* . is class selector; it styles all elements in the class
	# is an id selector
	
	color codes:
	#62baa9 teal
	#0d4369 navy
	#105889 light navy
	#dcdee8 grey
	#f5f5f5 white
	#606166 dark grey
	
*/
@font-face{
	font-family: "Aller Display";	
	src: url("fonts/AllerDisplay.ttf");
}
body {
	background-image: url("website background2.jpg") ;
	background-repeat: 	repeat-y ;
	background-position: center top; 
	margin-left: 0%;
	margin-right: 0%;	
}
.content{
	font-size: 20px;
	font-family: "Arial", Helvetica, sans-serif;
	padding: 15px;
	display: block;
    margin-left: 0%;
    margin-right: auto;
	color: #0d4369; 
	background-color: #f5f5f5;
}

.sticky{
	position: fixed;
	top: 0;
}

#footer {
	padding: 15px;
    clear: both;
    text-align: center;
	background-color: #105889; 
	display: block;
    margin-left: 0%;
    margin-right: auto;
}

.button{
	position:relative;
	left: 20px;
	top: 10px;
	background-color: #105889; 
	color: white;
    border: none;
	padding: 8px 15px;
	font-size: 17px;
	cursor: pointer;
	border-radius: 3px;
}
.button sub: hover{
	background-color: #f5f5f5;
	color: #105889;
}
.entry input[type=text], input[type=password] {		
    float: left;
    padding: 10px;
    border: none;
    margin-top: 8px;
    margin-left: 20px;
    font-size: 17px;	
}
textarea {
	float: left;
    padding: 10px;
	margin-top: 8px;
    margin-left: 20px;
    font-size: 17px;
    border-radius: 2px;
	
}

.entry {
	margin: 8px;
}

.space{
	margin: 200px;
}

</style>
</head>

<body>

	<div id="header">
	<?php include("header.inc.php"); ?>
	</div>
	
	<div class="content">

	<?php								/*allows users to load pages*/
	if (!isset($_REQUEST['content']))
	include("main.inc.php");
	else{
	$content = $_REQUEST['content'];
	$nextpage = $content . ".inc.php";
	include($nextpage);
	}
	?> 
	
	</div>
	
<div class = "space">
</div>

<div id="footer">
<?php include("footer.inc.php"); ?>
</div>



<script type="text/javascript">
/*window.onscroll = function() {			//onscroll is an event when an element is being scrolled
	scroll()
}; */
	$(window).scroll(function(){
		if($(this).scrollTop()>100){
			$('#topnav').addClass("sticky");
		}
		else{
			$('#topnav').removeClass("sticky");
		}
	})
</script>





</body>

</html>
