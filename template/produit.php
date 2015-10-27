<html lang="en">
<head>
    <?php include 'content/header.html';?>
</head>
<body>
    <div class="body-inner">
	<!-- Header start -->
        <?php include 'content/bodyHeader.html';?>
        <div id="inner-header">
		<img src="images/banner/banner1.jpg" alt ="" />
	</div>
        <?php $name = basename(__FILE__); ?>
        <?php include 'content/breadcrumb.php';?>
        <div class="gap-40"></div>
        <?php include 'content/sectionProduit.html';?>
        <?php include 'content/sectionFooter.html';?>
        <?php include 'content/footer.html';?>
    </div>
</body>
</html>