<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>CI Insert Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/addstyles.css">
</head>

<body>

<form method="post" action="<?php echo base_url();?>index.php/users/update">
<?php
extract($guestform);
?>
<div id="body">
 <div id="content">
<table align="center">
    <tr>
    <td><input type="text" name="complete_name" placeholder="Complete Name" value="<?php echo $complete_name; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $nickname; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Email_Address" placeholder="Email Address" value="<?php echo $Email_Address; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Home_Address" placeholder="Home Address" value="<?php echo $Home_Address; ?>" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo $gender; ?> value="Female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo $gender; ?> value="Male">Male
	</td>
    </tr>
	<tr>
    <td><input type="number" name="cellphone" placeholder="Cellphone Number" value="<?php echo $cellphone; ?>" required /></td>
    </tr>
	 <td>Comment: <br>
	 <textarea name="comment" rows="5" cols="144"><?php echo $comment; ?></textarea>
	 </td>
    <tr>
    <td>
	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <button type="submit" name="sbumit" value="Update" /><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
</div>
</div>
</form>

</body>

</html>