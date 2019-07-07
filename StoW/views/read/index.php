<?php
Session::init();
$pageText=Session::get('pageText');
$page=Session::get('page');
$numberOfPages=Session::get('numberOfPages');


?>

<div> 
    
    <div class="center">
    
    <a href="<?php echo URL; ?>read?page=<?php if($page-1>0){ echo $page-1;} else { echo $page;}  ?>" class="previous">&laquo; Previous</a>
    <a href="<?php echo URL; ?>read?bookmarkSetted=<?php echo 1 ?> " class="next">Bookmark </a>
    <a href="<?php echo URL; ?>read?page=<?php if($page+1<=$numberOfPages){ echo $page+1;} else { echo $page;} ?>" class="next">Next &raquo; </a> 
    <br/> <br/> <br/>
    
    </div>
    
    <div style="font-size:200%;" >
        <p style="font-family:'Comic Sans MS';">  <?php  echo $pageText ?> </p>
   
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
    
    
    <a href="#" class="say" style="color:black">Read this for me!</a>
    
    <audio src="" class="speech" hidden></audio>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <script>
        $(function(){
            $('a.say').on('click',function(e){
                e.preventDefault();

                var text =<?php echo json_encode($pageText); ?>;
                text=text.substring(0,1400);
                var url = "http://api.voicerss.org/?key=58f97c4fc12344639e08936b95e31995&hl=en-ca&r=1&src="+ text;
                $('audio').attr('src',url).get(0).play();
       
            });
        });
    </script>
    
</div>