<h1>Books Edit&Delete</h1>
<table>
<?php
	foreach($this->bookList as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value['id'] . '</td>';
		echo '<td>' . $value['name'] . '</td>';
		echo '<td>' . $value['author'] . '</td>';
                
                echo '<td>
				<a href="'.URL.'book_detail?idBook='.$value['id'].'" style=color:black;>Edit</a>
				<a href="'.URL.'books_edit/delete/'.$value['id'].'" style=color:black;>Delete</a></td>';
		echo '</tr>';
	}
?>
</table>