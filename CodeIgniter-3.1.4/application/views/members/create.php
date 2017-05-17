<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>


<?php echo form_open('members/create'); ?>

<table>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name"
			value="<?php echo set_value('name'); ?>" size="50" /></td>
	</tr>

	<tr>
		<td>Email Address:</td>
		<td><input type="text" name="email"
			value="<?php echo set_value('email'); ?>" size="50" /></td>
	</tr>

	<tr>
		<td>Birth Date:</td>
		<td><input type="text" name="dob"
			value="<?php echo set_value('dob'); ?>" size="50" /></td>
	</tr>

	<tr>
		<td>Favorite Color:</td>
		<td><input type="text" name="color"
			value="<?php echo set_value('color'); ?>" size="50" /></td>
	</tr>

	<tr>
		<td>&nbsp;</td>
	</tr>

	<tr>
		<td><input type="submit" name="submit" value="Create Member" /></td>
	</tr>
</table>
</form>
<script>
$("form").validate(
		{
		rules: 
		{

		// dob rule
		dob: 
		{	
		required: true,
		date: true
		},

		// color rule
		color: 
		{	
		required: true,
		minlength: 3
		},

		// name rule
		name: 
		{
		required: true,
		minlength: 2
		},

		// email rule
		email: 
		{
		required: true,
		email: true
		}
		},
		
		messages: 
		{

		// name message
		name: 
		{
		required: "Please enter a name here."
		},

		// dob message
		dob: 
		{
		required: "Please enter a birth date."
		},

		// color message
		color: 
		{
		required: "Please enter a favorite color."
		},

		// email message
		email: 
		{
		required: "Please enter an email address."
		}
		}
		});
</script>






