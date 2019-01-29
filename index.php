<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'inc/header.php'; ?>

<?php 
	$db = new Database();
?>


</div>

<div id="casing">
<div id="featured">

<div class="flexslider">
	<ul class="slides">
		
	<li>
		<a href="#"><img class="slideimg" style="width: 300px; height: 300px; margin-right: 150px;" src="images/SLIDER.jpg" title="" alt="" /></a>
		<div class="flex-caption">
			<h2><a href="#" rel="bookmark" title="Permanent Link to Galaxy Tab">JUCAI Industrial Equipment</a></h2>
			<p style="color:#000; ">Fully owned subsidiary of Hong Kong JUCAI International Group starting the production and operation in 1989, JUCAI Industrial (Shenzhen) Co., Ltd., is a professional manufacturer of air compressor integrating design, production and sale into a whole.
				
			JUCAI Industrial (Shenzhen) Co., Ltd. is a leading manufacturer of screw air compressor and piston air compressor in China. Our products cover piston air compressor from 1/2 HP to 30 HP and screw air compressor from 7.5HP to 450HP. Most customers know our quality policy and choose high quality air compressors.
			  </p>
		</div>
	</li>
		
	<li>
		<a href="#"><img class="slideimg" style="width: 300px; height: 300px; margin-right: 150px;" src="images/sl2.jpg" title="" alt="" /></a>
		<div class="flex-caption">
			<h2><a href="#" rel="bookmark" title="Permanent Link to Kindle Fire">Electric generator</a></h2>
			<p style="color:#000; " >Cooltech Global offers different solutions according to our customers’ needs. By providing our customers with high quality products, flexible approach and industry leading technical support, we are positioned to be the first choice supplier to discerning customers across the globe.</p>
		</div>
	</li>
		
	<li>
		<a href="#"><img class="slideimg" style="width: 300px; height: 300px; margin-right: 150px;" src="images/jjjj.jpg" title="" alt="" /></a>
		<div class="flex-caption">
			<h2><a href="#" rel="bookmark" title="Permanent Link to Acer Iconia">Soundproof Generator</a></h2>
			<p style="color:#000; " >ASTRA 3000 rounds soundproof generators are designed for the supply of small and large construction sites and industrial systems.
The generator sets come with modern diesel engines from reputable brands in the world, Lombardini/Kohler, with liquid cooling systems and operate at a normal speed of 3000 RPM with up to three phases. Everything is automatic: the generator turns on if the power from the main grid fails.
</p>
		</div>
	</li>
		</ul>
</div>


</div>

	<?php 
		$query = "select * from post_cat";
		$title = $db -> select($query);
		if($title){
			while($result = $title->fetch_assoc()){

		
	?>

				<div id="home-content" class="clearfix">
					<p class="header"><?php echo $result['title']; ?></p>
					<p class="para"><?php echo $result['bold_disc']; ?> </p>
					<div class="paragraph"><?php echo $result['discrip']; ?></div>
				</div>

	<?php } } ?>



<br />
<div id="box">
	<h2>Featured Products</h2>
</div>
<div id="home-content" class="clearfix">
<ul id="shelf">


	<?php 
		$query = "select * from product_all order by id limit 12";
		$product = $db -> select($query);
		if($product){
			while($result = $product->fetch_assoc()){

		
	?>	
	
<li class="box" id="#">
				<div class="boxtitle">
			<h2><a href="" rel="bookmark" title="Permanent Link to Citizen"><?php echo $result['name']; ?></a></h2>
		</div>
		<a href=""><img class="productshot" src="admin/<?php echo $result['image']; ?>" alt=""/></a>
		
		<div class="pricetab clearfix">Model:
		
		
		<span class="price"><?php echo $result['product_id']; ?></span>
		<span class="prodetail"><a href="Detail.php?id=<?php echo $result['id']; ?>">Details</a></span>
		</div>
	</li>
	
	<?php } } ?>
		

<div class="clear"></div>
	<!-- <div id="pnavigation" class="clearfix">
<div class='wp-pagenavi'>
<span class='pages'>Page 1 of 2</span><span class='current'>1</span><a class="page larger" href="http://demo.fabthemes.com/zenshop/page/2/">2</a><a class="nextpostslink" rel="next" href="http://demo.fabthemes.com/zenshop/page/2/">&raquo;</a>
</div>
</div> -->
<?php include 'inc/footer.php'; ?>