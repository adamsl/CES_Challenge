<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>


<?php 
	$attributes = array('id' => 'form_id');
	echo form_open('members/create', $attributes); ?>

<table class="current_view">
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name" id="name_input"
			value="<?php echo set_value('name'); ?>" size="50" /></td>
	</tr>

	<tr>
		<td>Email Address:</td>
		<td><input type="text" name="email" id="email_input"
			value="<?php echo set_value('email'); ?>" size="50" /></td>
	</tr>

	<tr>
		<td>Birth Date:</td>
		<td><input type="text" name="dob" id="dob_input"
			value="<?php echo set_value('dob'); ?>" size="50" /></td>
	</tr>

	<tr>
		<td>Favorite Color:</td>
		<td><input type="text" name="color" id="color_input"
			value="<?php echo set_value('color'); ?>" size="50" /></td>
	</tr>

	<tr>
		<td>&nbsp;</td>
	</tr>

	<tr>
		<td><input type="submit" name="submit" value="Create Member" id="create_button" /></td>
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

/*
 * ajax
 */
$(document).ready(function() {
    $("#create_button").click(function(event) {

	  	if ($('#form_id').valid()) {
			// console.log("form is valid.");
		}else{
			return;	
		}
		
		/*
	     * stop normal submit.
	     */
        event.preventDefault();

        /*
         * set up variables for json string.
         */
        var name 	= $("#name_input").val();
        var email	= $("#email_input").val();
        var dob 	= $("#dob_input").val();
        var color	= $("#color_input").val();

        /*
         * set up ajax call
         */
        jQuery.ajax({
            type: 		"POST",
            url: 		"<?php echo base_url(); ?>" + "index.php/members/create",
            dataType:	'text',
            data: 		{name: name, email: email, dob: dob, color: color},
            success: 	function(res) {
            	$("#name_input").val('');
            	$("#email_input").val('');
            	$("#dob_input").val('');
            	$("#color_input").val('');
	        	alert(name + " added successfully.");    
            },
            error: function (xhr, ajaxOptions, thrownError) {
            	alert(xhr.status);
                alert(thrownError);
                alert(xhr.statusText);
            }
        });
    });
})

</script>






