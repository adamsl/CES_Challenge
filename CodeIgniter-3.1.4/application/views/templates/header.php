<html>
<head>
<title><?php echo $title;?></title>
<!--include jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"
type="text/javascript"></script>
<!--include jQuery Validation Plugin-->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"
type="text/javascript"></script>

<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">

</head>
<body>
	<?php $this->load->helper('url');?>
	<div id="spacer" style="padding-top: 10px"></div>
	<div style="float: left; padding-right: 20px; padding-left: 20px">
		<table>
			<tr>
				<td style="border-style: solid; border-width: 1px">
				<a href="<?php echo site_url(); ?>/members">Home</a></td>
			</tr>
			<tr>
				<td style="border-style: solid; border-width: 1px">
					<a href="<?php echo site_url(); ?>/members/create">
					Add Member</a>
				</td>
			</tr>
			
		</table>
	</div>