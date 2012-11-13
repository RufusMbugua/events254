<?php $this -> load -> view('segments/header'); ?>

<body>

	<header>
		<?php $this -> load -> view('segments/banner'); ?>
		<?php $this -> load -> view('menus/main-menu'); ?>
	</header>
	<section class="content">
		<section class="image-scroller">
			<div class="slider-wrapper theme-default">
							<div id="slider" class="nivoSlider">
								<img src="<?php echo base_url(); ?>images/nemo.jpg" data-thumb="<?php echo base_url(); ?>images/nemo.jpg" alt="" />
								<img src="<?php echo base_url(); ?>images/toystory.jpg" data-thumb="<?php echo base_url(); ?>images/toystory.jpg" alt="" title="This is an example of a caption" />
								<img src="<?php echo base_url(); ?>images/up.jpg" data-thumb="<?php echo base_url(); ?>images/up.jpg" alt=""/>
							</div>
							<div id="htmlcaption" class="nivo-html-caption">
								<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
							</div>
						</div>
		</section>
	</section>
	<section class="tile-area">
		<section class="tile" style="float:left"></section>
		<section class="tile" style="float:right"></section>
	</section>

	<footer></footer>
</body>
</html>