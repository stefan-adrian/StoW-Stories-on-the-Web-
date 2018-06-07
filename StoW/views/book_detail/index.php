<?php

$thisBook=Session::get('thisBook');
$characters=Session::get('characters');
$description=Session::get('description');

$page=Session::get('page');
$thread1=Session::get('thread1');
$thread2=Session::get('thread2');

?>


    <div >

        <div class="center">
            <a href="<?php echo URL; ?>read?page=<?php echo 1;  ?>" class="previous">   Start Book  </a>
            <?php if ($page!=1):  ?>
            <a href="<?php echo URL; ?>read?page=<?php echo $page  ?>" class="previous">   Resume Book  </a>
            <?php endif; ?>
    
        </div>

        
        <div class="title">
            
            <br/>
            <b>Title:</b>  <a href="<?php echo URL; ?>read?page=<?php echo $page  ?>" style=color:black;>   <?php echo $thisBook->getName()  ?>   </a>
            <br/>
            <b>Author:</b>  <?php echo $thisBook->getAuthor() ?>
            <br/> <br/> <br/>
        </div>
        
        <div  class="cover" >
            
            <img src="<?php echo $thisBook->getPhotoLink(); ?>" alt="Book Image" style='height: 100%; width: 100%; object-fit: contain'>
        </div> 
    
        <div class="description">
            <br/> <br/> <br/>
            <b>Year:</b>   <?php echo $thisBook->getYear()  ?>
            <br><br/>
            <b>Threads:</b>   <?php echo $thread1; echo', '; echo $thread2;  ?>
            <br><br/>
            <b>Characters:</b>   <?php echo $characters  ?>
            <br><br/>
            <b>Age category:</b>   <?php echo $thisBook->getAgeCategory() ?>
            <br><br/>
            <b>Description:</b>  <?php echo $description  ?>
            <br><br/>
        </div>
             
    </div>


