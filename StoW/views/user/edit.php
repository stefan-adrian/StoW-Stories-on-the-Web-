<h1>User: Edit</h1>

<form method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user['id']; ?>">
	<label>Username</label><input type="text" name="username" value="<?php echo $this->user['username']; ?>" /><br />
	<label>Password</label><input type="text" name="password" /><br />
	<label>Role</label>
		<select name="role">
			<option value="user" <?php if($this->user['role'] == 'user') echo 'selected'; ?>>User</option>
			<option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
		</select><br />
	<label>&nbsp;</label><input type="submit" />
</form>