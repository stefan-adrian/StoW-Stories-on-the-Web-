<?php
Session::init();
$pageText=Session::get('pageText');
$page=Session::get('page');
$numberOfPages=Session::get('numberOfPages');

?>

<div> 
    
    <div class="center">
    
    <a href="<?php echo URL; ?>read?page=<?php if($page-1>0){ echo $page-1;} else { echo $page;}  ?>" class="previous">&laquo; Previous</a>
    <a href="#" class="next">Bookmark </a>
    <a href="<?php echo URL; ?>read?page=<?php if($page+1<=$numberOfPages){ echo $page+1;} else { echo $page;} ?>" class="next">Next &raquo; </a> 
    <br/> <br/> <br/>
    
    </div>
    
    <div class="a">
        <?php  echo $pageText ?>
   
    </div>
    
    
    <div class="center">
    <br/>
    <a href="#" class="next">Page <?php echo ($page)?> of <?php echo ($numberOfPages)?></a>  <br/>
    
    </div>
</div>