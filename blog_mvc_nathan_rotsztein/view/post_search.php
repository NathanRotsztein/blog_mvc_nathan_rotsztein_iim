<h2>Liste de post</h2>
<a href="/nathan-taff-php/view/post_create.php">Ajouter</a><br><hr>
<?php 
include_once('../entity/post.php');

if(isset($_GET['data']))
{
	
	$data = urldecode(($_GET['data']));
	$data = unserialize($data);

	foreach ($data as $key => $value) 
	{
		?>
			<a href="/nathan-taff-php/controller/post.php?action=read&id=<?=$value->get_id()?>"><?=$value->get_nom()?></a><br>
		<?php
	}
}

?>