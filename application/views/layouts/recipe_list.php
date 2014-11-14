<?php
	foreach($recipes_list as $recipe){
?>
	<h2><a href="<?=URL::base();?>recipe/view/<?=$recipe->id;?>"><?=$recipe->name;?></a></h2>
<?php	
	}
?>
