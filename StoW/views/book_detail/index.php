<?php

$thisBook=Session::get('thisBook');

?>


    <div >
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
            
            </div> 
        </div>
    </div>


