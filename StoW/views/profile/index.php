
<?php

$bookName=Session::get('bookName');
$me=Session::get('me');
$page=Session::get('page');

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
                    <?php if ($me->getIdBookmark()!=NULL):?>
                    <b>Book:</b> <a href="<?php echo URL; ?>read?page=<?php echo $page  ?>" style=color:black;> <?php echo $bookName  ?> </a> 
                    <?php endif; ?>
                    <br/>
                    
                    
                    
                </P>
            </div>
     </div>
   
    
</div>


