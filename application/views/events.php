<?php $this -> load -> view('segments/header'); ?>
<body>
	<header>
		<?php $this -> load -> view('segments/banner'); ?>
		<?php $this -> load -> view('menus/main-menu'); ?>
	</header>
	<section class="events">
		<section class="side-menu">
<h3>Events</h3>
	<ul class="alphaList">
					<div class="top-menu">
						
						<li>
							<a class="event-title weddings">Weddings</a>
						</li>
						<li>
							<a class="event-title birthdays">Birthdays</a>
						</li>
						<li>
							<a class="event-title anniversary">Anniversary</a>
						</li>
						<li>
							<a class="event-title party">Party</a>
						</li>
						<li>
							<a class="event-title corporate">Corporate Events</a>
						</li>
						<li>
							<a class="event-title teambuilding">Team Building</a>
						</li>
						
					</div>
				</ul>
		</section>

		<section class="result">
           <?php $this -> load -> view('segments/events'); ?>
		</section>
	</section>
</body>

<?php $this -> load -> view('segments/footer'); ?>