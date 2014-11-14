<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Recipe extends Controller_Template_Lekkacattpl{

	public function action_index()
	{
		$this->response->body('Hallo');
	}
	public function action_view() {
		$id = $this->request->param('id');
		$recipe = ORM::factory('Recipe',$id);
		$ingredients = $recipe->getRecipeInformation();
		$data = array();
		foreach($ingredients as $igedient) {
				$igredient_model = ORM::factory('Ingredient',$igedient['ingredient_id']);
				$data[] = array($igedient['ingredient_id'],$igredient_model->name,$igedient['amount'],$igedient['unit']);
		}
		$this->template->layout = new View('layouts/recipe_view');
		$this->template->layout->recipe = $recipe;
		$this->template->layout->ingredients = $data;
	}
	public function action_list(){
		 $recipes = ORM::factory('Recipe')->find_all();
		 $this->template->layout = new View('layouts/recipe_list');
		 $this->template->layout->recipes_list = $recipes;
	}
	public function action_search(){
		
	}
	public function action_add(){
		
	}
	public function action_smallpic(){
			$picture_name = $this->request->param('pictur_name');
			$filename = DOCROOT.'assets/img/'.$picture_name.'.png';
			header("Content-type: image/png");
            if (is_file($filename))
            {
				$img = new Image;
                $img->resize(250);
                echo $img->render('png');
            }
			else
			{
				$img = Image::factory(DOCROOT . 'assets/img/no-picture.png');
				$img->resize(250);
				echo $img->render('png');
			}
			die();
	}

} // End Welcome
