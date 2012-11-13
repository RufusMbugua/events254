<form class="login" accept-charset="utf-8" action="<?php echo base_url().'c_authorize/login'?>" method="post">
	<h3>Sign In</h3>
	<input type="text" class="email" placeholder="Email Address" name="email" required/>
	<input type = "password" class="secret" placeholder="Password" name="password" required/>

	<input type="submit" value="submit" />
		
	<section class= "links">
		<a style="float:left">Forgot Password</a>
		<a style="float:right">Register</a>
	</section>

</form>
