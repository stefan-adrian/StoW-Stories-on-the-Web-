<?php
$search=Session::get('search');
if($search == 1)
$bookList=Session::get('bookList2');
else
$bookList=Session::get('bookList');

?>
        <form class="search" action="index/search" method="post">
          <input class type="text" name="cauta" placeholder="Search">
        </form>
        <?php if($search == 1){ ?>
         <h2> Rezultatele cautarii
        <?php echo Session::get('searchText'); echo ': ';?><?php
        if($bookList == NULL) { echo 'Nu s-au gasit rezultate'; }
        else {?>

         <?php echo count($bookList); ?> </h2><?php
        }} ?>
        <div class="carti">
<?php
  foreach($bookList as $key => $value) { ?>
       <div class="imagine">
        <a href="<?php echo URL; ?>book_detail?idBook=<?php echo $value['id'];   ?>"> <?php echo '<img src='.$value['photoLink'].' alt='.$value['name'].'>'; ?></a>
<?php
  ?>
  <span><?php echo $value['name']; ?></span></div>
    <?php
  }
  Session::set('search',0); ?>
</div>