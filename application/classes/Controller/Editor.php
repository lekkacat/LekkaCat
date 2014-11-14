<?php
class Controller_Editor extends Controller_Template_Lekkacattpl{
	public function action_edit() {
		$this->template->javascripts[] = URL::base($this->request).'assets/editor.js';
		$id = $this->request->param('id');
		$recipe = ORM::factory('Recipe',$id);
		$validation = Validation::factory($this->request->post())->rule('et_name', 'not_empty');
	    if ($validation->check()){
			$recipe->name = $validation['et_name'];
			
		}
		$validation = Validation::factory($this->request->post())->rule('et_desc', 'not_empty');
	    if ($validation->check()){
			$recipe->desc = $validation['et_desc'];
			
		}
		$validation = Validation::factory($this->request->post())->rule('et_todo', 'not_empty');
	    if ($validation->check()){
			$recipe->todo = $validation['et_todo'];
			
		}
		$recipe->save();
		$this->template->layout = new View('layouts/recipe_edit');
		$this->template->layout->recipe = $recipe;
	}
	public function action_newrecipe(){
		$recipe = ORM::factory('Recipe');
		$validation = Validation::factory($this->request->post())->rule('et_name', 'not_empty');
	    if ($validation->check()){
			$recipe->name = $validation['et_name'];
			$recipe->save();
			$this->redirect('editor/edit/'.$recipe->id, 302);
		}
		$this->template->layout = new View('layouts/newrecipe');
	}
	public function action_ajaxtable(){
		$id = $this->request->param('id');
		$recipe = ORM::factory('Recipe',$id);
		if (isset($_REQUEST['ajax']) ){
				if ( isset( $_REQUEST['data'] ) ){	
					$recipe->setingredientsJsonData(json_decode($_REQUEST['data']));
				}
		}
		$ingredients = $recipe->getRecipeInformation();
		foreach($ingredients as $igedient) {
				$igredient_model = ORM::factory('Ingredient',$igedient['ingredient_id']);
				$data[] = array($igredient_model->name,$igedient['amount'],$igedient['unit']);
		}
		echo json_encode( $data );

		die();		
	}
}
?>
