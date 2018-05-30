
<?php
$username=Session::get('username');
$age=Session::get('age');
$name=Session::get('name');
$surname=Session::get('surname');
$email=Session::get('email');
$bookName=Session::get('bookName');

?>



<div>
    
    
    <div class="profile-page">
            <div class="form">
                <p class="message">
                    
                    <br >
                    <b>Username: </b>   <?php echo $username  ?>
                    <br/>
                    <br>
                    <b>Name:</b> <?php echo $name  ?>
                    <br/>
                    <br>
                    <b>Surname:</b> <?php echo $surname  ?>
                    <br/>
                    <br>
                    <b>Email:</b> <?php echo $email  ?>
                    <br/>
                    <br>

                    <b>Age:</b> <?php echo $age  ?>
                    <br/>
                    <br>
                    <b>Book:</b>  <?php echo $bookName     //aici o sa se adauge linkul la adresa cartii ca referinta ?>  
                    <br/>
                </P>
            </div>
     </div>
   
    
</div>


