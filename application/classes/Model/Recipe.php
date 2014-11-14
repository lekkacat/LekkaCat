<?php
class Model_Recipe extends ORM
{
	protected $_has_many = array(
		'ingredients' => array(
			'model'   => 'Ingredient',
			'through' => 'recipes_ingredients',
		),
	);
	public function getRecipeInformation(){
		$query = DB::select()->from('recipes_ingredients');
		$query->where('recipe_id', '=', $this->id);
		$results = $query->execute()->as_array();
		return $results;
	}
	
	public function setingredientsJsonData($data){
			// Delete Old Records
			$query = DB::query(Database::DELETE, 'DELETE FROM recipes_ingredients WHERE recipe_id = ' . $this->id);
			$query->execute();
		foreach($data as $ingredient){
				// check alredy exist
				$ingredient_check = ORM::factory('Ingredient')->where('name','=',$ingredient[0])->count_all();
				if($ingredient_check == 1){
						// set realation
						$new_ingredient = ORM::factory('Ingredient')->where('name','=', $ingredient[0])->find();
				}
				else {
						// create ingredient
						$new_ingredient = ORM::factory('Ingredient');
						$new_ingredient->name = $ingredient[0];
						$new_ingredient->save();
				}
				$query = DB::query(Database::INSERT,"INSERT INTO recipes_ingredients (`recipe_id`,`ingredient_id`,`amount`,`unit`) VALUES (
						".$this->id.",
						".$new_ingredient->id.",
						".$ingredient[1].",
						'".$ingredient[2]."'
				)");
				$query->execute();
				// write new from ajax table
				
		}
	}
}
?>
