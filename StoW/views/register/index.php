<?php 
    $emptyUsername = Session::get('emptyUsername');
    $emptyPassword = Session::get('emptyPassword');
    $emptyName = Session::get('emptyName');
    $emptySurname = Session::get('emptySurname');
    $emptyAge = Session::get('emptyAge');
    $emptyEmail = Session::get('emptyEmail');
?>
<div>
	<div class="login">
        <div class="login-page">
			<div class="loginForm">
				<form action="register/create" method="post">  
					<input type="text" name="username" placeholder="Username" class=<?php if($emptyUsername == '1') echo 'loginError'; else echo 'loginInit'; ?> value=<?php if($emptyUsername != '1') echo $emptyUsername;?>><br />
                    <input type="password" name="password" placeholder="Password" class=<?php if($emptyPassword == '2') echo 'loginError'; else echo 'loginInit'; ?> ><br />
                    <input type="text" name="name" placeholder="Nume" class=<?php if($emptyName == '3') echo 'loginError'; else echo 'loginInit';  ?> value=<?php if($emptyName != '3') echo $emptyName;?>><br />
                    <input  type="text" name="surname" placeholder="Prenume"  class=<?php if($emptySurname == '4') echo 'loginError'; else echo 'loginInit'; ?> value=<?php if($emptySurname != '4') echo $emptySurname;?>><br />
                    <input type="text" name="age" placeholder="Varsta"  class=<?php if($emptyAge == '5') echo 'loginError'; else echo 'loginInit'; ?> value=<?php if($emptyAge != '5') echo $emptyAge; echo " ";?> ><br />
                    <input  type="text" name="email" placeholder="Email adress"  class=<?php if($emptyEmail == '6') echo 'loginError'; else echo 'loginInit'; ?> value=<?php if($emptyEmail != '6') echo $emptyEmail;?>><br />
                    <input class="loginButton" type="submit" value="Create" />
                    
				</form>
                <p class="message">Already registered? <a href="<?php echo URL; ?>login">Sign In</a></p>
            </div>
        </div>
	</div>
</div>




