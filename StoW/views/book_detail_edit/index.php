<?php

$thisBook=Session::get('thisBook');
$characters=Session::get('characters');
$description=Session::get('description');

$page=Session::get('page');
$thread1=Session::get('thread1');
$thread2=Session::get('thread2');

?>


    <div >

       

        <form action="book_detail_edit/run" method="post">
        <div class="title">
            
            <br/>
            <b>Title:</b>   <input type="text" name="bookTitle" value="<?php echo $thisBook->getName()  ?>  " >  
            <br/>
            <b>Author:</b>  <input type="text" name="author" value="<?php echo $thisBook->getAuthor() ?>  " > 
            <br/> <br/> <br/>
        </div>
        
        <div  class="cover" >
            
            <img src="<?php echo $thisBook->getPhotoLink(); ?>" alt="Book Image" style='height: 100%; width: 100%; object-fit: contain'>
        </div> 
    
        <div class="description">
            <br/> <br/> <br/>
            <b>Year:</b> <input type="text" name="year" value="<?php echo $thisBook->getYear()  ?>  " >  
            <br><br/>
            <b>Threads:</b> <?php echo $thread1; echo', '; echo $thread2;  ?>    
            <br><br/>
            <b>Characters:</b> <input type="text" name="characters" value="<?php echo $characters  ?>  " >  
            <br><br/>
            <b>Age category:</b> <input type="text" name="ageCategory" value="<?php echo $thisBook->getAgeCategory() ?>  " >  
            <br><br/>
            <b>Description:</b> <input type="text" name="description" value="<?php echo $description  ?>  " > 
            <br><br/>
            <input class="saveButton" type="submit" value="Save" />
            
        </div>
        </form>
             
    </div>


