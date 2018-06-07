<h1>Add</h1>

<form method="post" action="<?php echo URL;?>user/create">
	<label>Username</label><input type="text" name="username" /><br />
	<label>Password</label><input type="text" name="password" /><br />
	<label>Role</label>
		<select name="role">
			<option value="user">User</option>
			<option value="admin">Admin</option>
		</select><br />
	<label>&nbsp;</label><input type="submit" />
</form>

<hr />
<h1>Edit&Delete</h1>
<table>
<?php
	foreach($this->userList as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value['id'] . '</td>';
		echo '<td>' . $value['username'] . '</td>';
		echo '<td>' . $value['role'] . '</td>';
		echo '<td>
				<a href="'.URL.'user/edit/'.$value['id'].'" style=color:black;>Edit</a> 
				<a href="'.URL.'user/delete/'.$value['id'].'" style=color:black;>Delete</a></td>';
		echo '</tr>';
	}
?>
</table>