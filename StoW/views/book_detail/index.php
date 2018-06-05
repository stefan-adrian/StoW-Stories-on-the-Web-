<?php

$thisBook=Session::get('thisBook');

?>


    <div >
        
        <div class="title">
            <b>Title:</b>   <?php echo $thisBook->getName()  ?>
            <br/>
            <b>Author:</b>  <?php echo $thisBook->getAuthor() ?>
        </div>
        
        <div class="cover" style="background-image:url(<?php echo $thisBook->getPhotoLink(); ?>);">
            Photo - Not working
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


