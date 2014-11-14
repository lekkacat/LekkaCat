<div class="row">
	<div class="col-md-6">
				<h3>Zutaten</h3>
				<div id="edittable2"></div>
				<span class="savetable btn btn-primary">Speichern</span>
				<br/><br/><br/>
				<div class="thumbnail">
					<img src="<?=URL::base()?>recipe/smallpic/<?=$recipe->id;?>"/>
				</div>
				<a  href="<?=URL::base()?>recipe/view/<?=$recipe->id;?>" class="btn label label-success">Ansehen</a>
	</div>
	<div class="col-md-6">
	<?php echo Form::open() ?>
			<h3>Allgemeine Angaben</h3>
			  <label for="et_name">Titel</label>
			  <input name="et_name" id="et_name" type="text" class="form-control" placeholder="Titel deines Gerichtes" value="<?=$recipe->name;?>">
			  <br/>
			  <label for="et_desc">Kurzbeschreibung</label>
			  <textarea name="et_desc" id="et_desc" type="text" class="form-control" placeholder="Kurze Beschreibung deines Gerichtes"><?=$recipe->desc;?></textarea>
			  <br/>
			  <input type="submit" class="btn btn-primary">
			  <h3>Zubereitung</h3>
			  <label for="et_todo">Schritt f&uuml;r Schritt Anleitung</label>
			  <textarea name="et_todo" id="et_todo" type="text" rows="10" class="form-control" placeholder="Eine genaue Anleitung wie man deine Speise zubereitet."><?=$recipe->todo;?></textarea>
			  <br/>
			  <input type="submit" class="btn btn-primary">
		</form>




	</div>
</div>
<script type="text/javascript">
 $(window).ready(function () {
// Initialize table example 3
var eTable =  $("#edittable2").editTable({
	url: '<?=URL::base()?>editor/ajaxtable/<?=$recipe->id;?>',
	type: 'POST',
	first_row: false,   
	headerCols: [
		'Zutat',
		'Menge',
		'Einheit'
	],
    field_templates: {
        'select' : {
            html: '<select><option value="">None</option><option value="g">Gramm</option><option value="Kg">Kilogramm</option><option value="EL">Essl&ouml;ffel</option><option value="TL">Teel&ouml;ffel</option><option value="ml">Milliliter</option><option value="l">l</option><option value="stueck">St&uuml;ck</option></select>',
            getValue: function (input) {
                return $(input).val();
            },
            setValue: function (input, value) {
                var select = $(input);
                select.find('option').filter(function() {
                    return $(this).val() == value; 
                }).attr('selected', true);
                return select;
            }
        }
    },
    row_template: ['text', 'text','select'],
});

$.ajax({
		url: 	'<?=URL::base()?>editor/ajaxtable/<?=$recipe->id;?>',
		type: 	'POST',
		data: 	{
			ajax: true
		},
		complete: function (result) {
			eTable.loadJsonData(result.responseText);
		}
	});

// Send JSON data trough an ajax call
$('.savetable').click(function () {
	$.ajax({
		url: 	'<?=URL::base()?>editor/ajaxtable/<?=$recipe->id;?>',
		type: 	'POST',
		data: 	{
			ajax: true,
			data: eTable.getJsonData()
		},
		complete: function (result) {
			console.log(JSON.parse(result.responseText));
		}
	});
	return false;
});
})

	
</script>
