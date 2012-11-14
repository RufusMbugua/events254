<?php $this -> load -> view('segments/header'); ?>
<body>
	<header>
		<?php $this -> load -> view('segments/banner'); ?>
		<?php $this -> load -> view('menus/main-menu'); ?>
	</header>
	<section class="content">
		<?php $this->load->view('elements/events-registration'); ?>
	</section>
</body>

<?php $this -> load -> view('segments/footer'); ?>