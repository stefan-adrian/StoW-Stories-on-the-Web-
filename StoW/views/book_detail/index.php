<?php

$thisBook=Session::get('thisBook');

?>


    <div >
        <div class="rightMenu">


            <div class="bookInfo">
                <div class="bookCover" style="background-image:url(images/Origin.jpg)">
                
                </div>
                <div class="bookTitle">
                    <br>
                    <b>Titlu:</b>   <?php echo $thisBook->getName()  ?>
                    <br/>
                    
                </div>
                <div class="bookSummary">
                </div>
            
            </div> 
        </div>
    </div>


