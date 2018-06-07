<!doctype html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/login.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/upload.css" />

        <link rel="stylesheet" href="<?php echo URL; ?>public/css/profile.css" />

        <link rel="stylesheet" href="<?php echo URL; ?>public/css/book_detail.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/book_detail_edit.css" />
        
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/read.css" />

		<link rel="stylesheet" href="<?php echo URL; ?>public/css/index.css" />

	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
	<?php
		if (isset($this->js)) 
		{
			foreach ($this->js as $js)
			{
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
			}
		}
	?>
</head>
<body>
<?php Session::init(); ?>
	
<div id="header">
	
	<?php if (Session::get('loggedIn') == true):?>
		<a href="<?php echo URL; ?>index">Home</a>
		
		<?php if (Session::get('role') == 'admin'):?>
		<a href="<?php echo URL; ?>user">Users</a>
                <a href="<?php echo URL; ?>books_edit">Books</a>
                <a href="<?php echo URL; ?>upload">Upload</a>
                
		<?php endif; ?>
                
                <a href="<?php echo URL; ?>profile">Profile</a>	           
                
		
		<a href="<?php echo URL; ?>index/logout">Logout</a>	
	<?php else: ?>
		<a href="<?php echo URL; ?>login">Login</a>
	<?php endif; ?>
</div>
	
<div id="content">
    
        
	
	