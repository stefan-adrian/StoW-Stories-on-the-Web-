<?php

$thisBook=Session::get('thisBook');

?>


    <div >
<<<<<<< HEAD
        <div class="rightMenu">


            <div class="bookInfo">
                <div class="bookCover" style="background-image:url(public/images/Origin.jpg)">
                
                </div>
                <div class="bookTitle">
                    <br>
                    <b>Titlu:</b> <a href="<?php echo URL; ?>read?page=<?php 1 //aici va trebui adaugat bookmarkul ?>">   <?php echo $thisBook->getName()  ?>  </a>
                    
                    
                    <br/>
                    
                </div>
                <div class="bookSummary">
                </div>
=======
        
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
>>>>>>> c828b4fd03041b66ff77fa08a74bd6093002a78a
            
            <b>Description:</b>   to be added
            <br><br/>
        </div>
             
    </div>


