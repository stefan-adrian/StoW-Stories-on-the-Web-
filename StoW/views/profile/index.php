
<?php

$bookName=Session::get('bookName');
$me=Session::get('me');

?>



<div>
    
    
    <div class="profile-page">
            <div class="form">
                <p class="message">
                    
                    <br >
                    <b>Username: </b>   <?php echo $me->getUsername()  ?>
                    <br/>
                    <br>
                    <b>Name:</b> <?php echo $me->getName()  ?>
                    <br/>
                    <br>
                    <b>Surname:</b> <?php echo $me->getSurname()  ?>
                    <br/>
                    <br>
                    <b>Email:</b> <?php echo $me->getEmail()  ?>
                    <br/>
                    <br>

                    <b>Age:</b> <?php echo $me->getAge()  ?>
                    <br/>
                    <br>
                    <b>Book:</b>  <?php echo $bookName     //aici o sa se adauge linkul la adresa cartii ca referinta ?>  
                    <br/>
                </P>
            </div>
     </div>
   
    
</div>


