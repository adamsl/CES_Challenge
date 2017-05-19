<h2><?php echo $title; ?></h2>

<table style="border-style: solid; border-width: 1px;" class="current_view">
	<tr>
    	<th style="border-style: solid; border-width: .5px;">Name</th>
    	<th style="border-style: solid; border-width: .5px;">Birthdate</th>
    	<th style="border-style: solid; border-width: .5px;">Email</th>
    	<th style="border-style: solid; border-width: .5px;">Favorite Color</th>
    </tr>
<?php foreach ($members as $member): ?>
	<tr>
    	<td style="border-style: solid; border-width: .5px;"><?php echo $member['name']; ?></td>
    	<td style="border-style: solid; border-width: .5px;"><?php echo $member['dob']; ?></td>
    	<td style="border-style: solid; border-width: .5px;"><?php echo $member['email']; ?></td>
    	<td style="border-style: solid; border-width: .5px;"><?php echo $member['color']; ?></td>
    </tr>
        
<?php endforeach; ?>
</table>


