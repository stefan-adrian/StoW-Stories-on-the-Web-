<?php if(Session::get('loggedIn') == true)
{
  echo 'ceva';
}
else
  echo 'da';
?>
        <form action="index/search" method="post">
                        <input type="text" name="cauta" placeholder="Search">
        </form>
<?php
  foreach($this->bookList as $key => $value) { ?>
       <div class="imagine">
        <a href="book_detail.html"><?php echo '<img src='.$value['photoLink'].' alt='.$value['name'].'>'; ?></a>
<?php
  ?>
  <span><?php echo $value['name']; ?></span></div>
    <?php
  }
?>