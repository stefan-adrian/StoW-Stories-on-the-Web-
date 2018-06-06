<?php
Session::init();
$pageText=Session::get('pageText');
$page=Session::get('page');
$numberOfPages=Session::get('numberOfPages');
include 'classes/PHP_Text2Speech.php';

$t2s = new PHP_Text2Speech;
?>

<div> 
    
    <div class="center">
    
    <a href="<?php echo URL; ?>read?page=<?php if($page-1>0){ echo $page-1;} else { echo $page;}  ?>" class="previous">&laquo; Previous</a>
    <a href="<?php echo URL; ?>read?bookmarkSetted=<?php echo 1 ?> " class="next">Bookmark </a>
    <a href="<?php echo URL; ?>read?page=<?php if($page+1<=$numberOfPages){ echo $page+1;} else { echo $page;} ?>" class="next">Next &raquo; </a> 
    <br/> <br/> <br/>
    
    </div>
    
    <div class="a">
        <?php  echo $pageText ?>
   
    </div>
    
    
    <div class="center">
    <br/>
    
    <?php if ($page==$numberOfPages&&Session::get('thread')==0&&Session::get('thread1')!=NULL):  ?>
    <a href="<?php echo URL; ?>read?page=1&thread=1" class="previous"> <?php echo Session::get('thread1') ?> </a>
    <a href="<?php echo URL; ?>read?page=1&thread=2?>" class="previous"> <?php echo Session::get('thread2') ?> </a>    
    <br/><br/>
    <?php endif; ?>
    
    <a href="#" class="next">Page <?php echo ($page)?> of <?php echo ($numberOfPages)?></a>  <br/>
    
    </div>

 <audio controls="controls" autoplay="autoplay">
  <source src="<?php echo $t2s->speak('What are you looking at? Wipe that face off your head.'); ?>" type="audio/mp3" />
</audio>
</div>