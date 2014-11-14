<div class="row">
	<h1><?=$recipe->name;?></h1>
</div>
<div class="row">
	<div class="col-md-4">
			<div class="thumbnail">
				<img src="<?=URL::base()?>recipe/smallpic/<?=$recipe->id;?>"/>
			</div>
			<br/>
			<a  href="<?=URL::base()?>editor/edit/<?=$recipe->id;?>" class="btn label label-success">Bearbeiten</a>
			<p><?=$recipe->desc;?></p>
	</div>
	<div class="col-md-4">
			<h2>Zutaten</h2>
				<table class="table table-striped table-hover ">
					<thead>
					<tr>
						<th>Zutat</th>
						<th>Menge</th>
					</tr>
					</thead>
				<? foreach($ingredients as $ingredient) { ?>
					<tr>
						<td><?=$ingredient[1]?></td>
						<td><?=$ingredient[2]?> <?=$ingredient[3]?></td>
					</tr>
				<? } ?>
				</table>
	</div>
	<div class="col-md-4">
			<h2>Zubereitung</h2>
			<?=$recipe->todo;?>
	</div>
</div>
