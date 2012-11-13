<?php
$sessionEmail = $this -> session -> userdata('email');
?>
<nav>
	<ul>
		<li>
			<a href="<?php echo base_url() ?>index">Home</a>
		</li>
		<li>
			<a href="<?php echo base_url() ?>events">Events</a>
		</li>
		<li>
			<a href="<?php echo base_url() ?>">Articles</a>
		</li>
		<li>
			<a href="<?php echo base_url() ?>">Contact Us</a>
		</li>
		<li>
		<?php
		if($sessionEmail==""){
		?>
		<a href="<?php echo base_url() ?>login">Login</a>
		<?php
		}
		else{
		?>
		<a href="<?php echo base_url() ?>login">Logout</a>
		<?php		
		}
		?>
			
		</li>
	</ul>
	<?php 
     
     echo '<p style="color:black">Welcome &nbsp; '.$sessionEmail.'</p>' ;?>
	<!--<section class="search">
	<form>
	<input type="search" placeholder="Search Here..."/
	</form>
	</section> -->
</nav>