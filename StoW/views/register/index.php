<div>
	<div class="login">
        <div class="login-page">
			<div class="loginForm">
				<form action="register/create" method="post">  
					<input class="loginData" type="text" name="username" placeholder="Username" /><br />
                    <input class="loginData" type="password" name="password" placeholder="Password" /><br />
                    <input class="loginData" type="text" name="name" placeholder="Nume" /><br />
                    <input class="loginData" type="text" name="surname" placeholder="Prenume" /><br />
                    <input class="loginData" type="text" name="age" placeholder="Varsta" /><br />
                    <input class="loginData" type="text" name="email" placeholder="Email adress" /><br />
					<input class="loginButton" type="submit" value="Create" />
				</form>
                <p class="message">Already registered? <a href="<?php echo URL; ?>login">Sign In</a></p>
            </div>
        </div>
	</div>
</div>




