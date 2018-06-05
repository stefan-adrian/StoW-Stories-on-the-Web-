<?php

$thisBook=Session::get('thisBook');
$characters=Session::get('characters');
$description=Session::get('description');

?>


    <div >

        <div class="center">
    
            <a href="<?php echo URL; ?>read?page=<?php 1 //aici va trebui adaugat bookmarkul ?>" class="previous">   Read Boook  </a>
    
        </div>

        
        <div class="title">
            
            <br/>
            <b>Title:</b>  <a href="<?php echo URL; ?>read?page=<?php 1 //aici va trebui adaugat bookmarkul ?>" style=color:black;>   <?php echo $thisBook->getName()  ?>   </a>
            <br/>
            <b>Author:</b>  <?php echo $thisBook->getAuthor() ?>
            <br/> <br/> <br/>
        </div>
        
        <div  class="cover" >
            
            <img src="<?php echo $thisBook->getPhotoLink(); ?>" alt="Book Image">
        </div> 
    
        <div class="description">
            <br/> <br/> <br/>
            <b>Year:</b>   <?php echo $thisBook->getYear()  ?>
            <br><br/>
            <b>Threads:</b>   <?php echo $thisBook->getThread()  ?>
            <br><br/>
            <b>Characters:</b>   <?php echo $characters  ?>
            <br><br/>
            
            <b>Description:</b>  <?php echo $description  ?>
            <br><br/>
        </div>
             
    </div>


