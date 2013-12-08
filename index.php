<html>
<head>
<title>The Tea Club</title> 
<link rel="stylesheet" type="text/css" href="style.css">
<link href="favicon.ico" rel="shortucut icon" />
<?php 
    $i = 0; 
    $dir = 'img/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head> 

<body> 

<div class="wrapper" >

	<div class="LR-bg-img_wrapper">
		<div class="LR-bg-img-overlay" style="background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;"></div>
		<div class="LR-bg-img LR-site-bg-image-container LR-site-show-on-bg-image"></div>
	</div>
	<div class="LR-box-wrapper">
		<div class="LR-box-container">
			<div class="LR-site-tagline  LR-clearfix">
				<p>The Tea Club</p>
			</div>		
			<div class="LR-site-description ">
				<p style="font-size: 90%;">This club started with a small group of UT students drinking tea in their balcony. Wanting to bring new ideas and hoping to broaden discussions, the idea of inviting the student body to participate in casual philosophical conversations about anything was materialized.</p>
				<p style="font-size: 90%;">The Tea Club provides a large variety of tea for you to drink - hot water and cup included. Just bring your favorite topic of discussion, and a friend.</p>
				<p style="font-size: 70%;">Join the <a href="http://on.fb.me/1cpjJ0B">Facebook group</a> to learn more.</p>
			</div>
		</div>
		<div class="footer"><a href="http://yvescourtois.com">Made with love by Yves Courtois.</a></div>

	</div>

</div>  

<script type="text/javascript">var count=<?php echo json_encode($i); ?>;console.log(count);</script>
<script type="text/javascript" src="includes/jquery.min.js"></script>
<script type="text/javascript" src="includes/background.js"></script>
<script type="text/javascript" src="includes/footer.js"></script>
<script type="text/javascript" src="includes/fadein.js"></script>

</body>
</html>