<?php $this -> load -> view('segments/header'); ?>

<body>

	<header>
		<?php $this -> load -> view('segments/banner'); ?>
		<?php $this -> load -> view('menus/main-menu'); ?>
	</header>
	<section class="content">
		<?php $this->load->view('elements/login-form'); ?>
	</section>

	<footer></footer>
</body>
</html>