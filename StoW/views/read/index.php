<?php
Session::init();
$pageText=Session::get('pageText');
$page=Session::get('page');

?>

<div> 
    
    <div class="center">
    
    <a href="<?php echo URL; ?>read?page=<?php echo $page-1; ?>" class="previous">&laquo; Previous</a>
    <a href="#" class="next">Bookmark </a>
    <a href="<?php echo URL; ?>read?page=<?php echo $page+1; ?>" class="next">Next &raquo; </a>  <br/> <br/> <br/>
    
    </div>
    
    <div class="a">
        <?php  echo $pageText ?>
    
    
    
        
    </div>
    
    
    <div class="center">
    <br/>
    <a href="#" class="next">Page <?php echo ($page)?></a>  <br/>
    
    </div>
</div>