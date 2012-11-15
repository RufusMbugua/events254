<?php $this ->load ->view('segments/header'); ?>

<header>
	
	<?php $this -> load -> view('menus/main-menu'); ?>

</header>
<section class='content'>
	<?php $this -> load -> view('elements/message'); ?>
	<h3><?php echo $viewName; ?></h3>
	<?php echo anchor(base_url() . 'C_events/register', 'Add Event'); ?>
<?php
echo '
<table>
	<tr class="tr-title">
		<td>
			Event Name
		</td>
		<td>
			Date Created
		</td>
		<td>
			Event Type
		</td>
		<td>
			Created By
		</td>
		<td>
			Operations
		</td>
	</tr>
';
if ($viewName == 'View Events') {
	foreach ($events as $key => $value) {

		echo '
	<tr class="tr-row">
		<td>
			'.$value['Event_Name'].'
		</td>
		<td>
			'.$value['Date_Created'].'
		</td>
		<td>
			'.$value['Event_Type'].'
		</td>
		<td>
			'.$value['Created_By'].'
		</td>
		<td>
		    <a href="#">Edit</a><a href="#">Delete</a>
		</td>
	</tr>
		
		';
		
		
		
		 
	}

}

echo '</table>';
?>


</section>
<?php $this ->load ->view('segments/footer'); ?>




