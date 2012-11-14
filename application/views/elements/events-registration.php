<form name="trainerForm" method="post" class="registration-form" action="<?php echo base_url().'c_events/add'?>">
	<h3>Event Form</h3>

	
		<section class="fields">
			<input type="text" name="eventName" placeholder="Event Name" required>
            <select name="eventType">
            	<option>
            		Anniversary
            	</option>
            	<option>
            		Birthdays
            	</option>
            	<option>
            		Corporate Events
            	</option>
            	<option>
            		Party
            	</option>
            	<option>
            		TeamBuilding
            	</option>
            	<option>
            		Weddings
            	</option>
            </select>
		</section>
	
	
	<input type="submit" value="Submit">

</form>