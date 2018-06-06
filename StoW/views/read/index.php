<?php
Session::init();
$pageText=Session::get('pageText');
$page=Session::get('page');
$numberOfPages=Session::get('numberOfPages');
if($_POST){
//get the text
$text = substr($_POST['txttext'], 0, 100);
 
//we are passing as a query string so encode it, space will become +
$text = urlencode($text);
 
//give a file name and path to store the file
$file  = 'filename';
$file = $file . ".mp3";
 
//now get the content from the Google API using file_get_contents
$mp3 = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text");
 
//save the mp3 file to the path
file_put_contents($file, $mp3);
}
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
    
    <h2>Text to Speech PHP Script</h2>
 
<form action="" method="post">
Enter your text:
<textarea name="txttext" rows="5" cols="30"></textarea>
<br>
<input type="submit" name="submit" value="Convert">
</form>
 
<?php  if($_POST){?>
 
<!-- play the audio file using a player. Here I'm used a HTML5 player. You can use any player insted-->
<audio controls="controls" autoplay="autoplay">
<source src="<?php echo $file; ?>" type="audio/mp3" />
</audio>
 
<?php }?>
 
</div>