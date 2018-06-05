<?php

$thisBook=Session::get('thisBook');

?>


    <div >

        

        
        <div class="title">
            <b>Title:</b>  <a href="<?php echo URL; ?>read?page=<?php 1 //aici va trebui adaugat bookmarkul ?>" style=color:blue;>   <?php echo $thisBook->getName()  ?>   </a>
            <br/>
            <b>Author:</b>  <?php echo $thisBook->getAuthor() ?>
        </div>
        
        <div class="cover" >
            
            <img src="<?php echo $thisBook->getPhotoLink(); ?>" alt="Italian Trulli">
        </div> 
    
        <div class="description">
            <b>Year:</b>   <?php echo $thisBook->getYear()  ?>
            <br><br/>
            <b>Threads:</b>   <?php echo $thisBook->getThread()  ?>
            <br><br/>

            
            <b>Description:</b>   to be added
            <br><br/>
        </div>
             
    </div>


