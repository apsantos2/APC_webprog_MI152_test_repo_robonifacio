<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM guestform WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Form</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>

<style>
#body {
	width: 100%;
	height: 415px;
	margin-left: 0px;
	margin-top: 252px;
	overflow: auto;	margin-top: 140px;
}
a {
 text-decoration: none;
}

a:hover {
 opacity: 0.7;	
}

#tabs {
	margin-top: -50px;
	display: none;
}

#phpform {
	margin-left: 50px;
	margin-top: 90px;
	color: white;
	display: none;
}

.comment {
	margin-left: 700px;
	margin-top: -300px;
}

.result {
	margin-left: 700px;
}

.error {
	color : red;
}

button {
color: white;
background-color: grey;
border-color: white;
}

button:hover {
 color: grey;
 background-color: white;
 border-color: grey;
}



</style>
</head>
<body style="background: url(bg.png); background-repeat:no-repeat; background-position:top center; background-size:100%; margin:0; padding:0;">
<center>
<div id="goto" style="margin-top: 50px;">
<h2><a href="mypage.php" style="color: white;">Go to Main Page</a></h2>
</div>
<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="9"><a href="add_data.php">Add Data Now</a></th>
    </tr>
    <th>Complete Name</th>
    <th>Nickname</th>
    <th>Email Address</th>
	<th>Home Address</th>
	<th>Gender</th>
	<th>Cellphone Number</th>
	<th>Comment</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM guestform";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>