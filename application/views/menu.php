<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=URL::base();?>">LekkaCAT</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			  <!-- class="active" /-->
            <li><a href="<?=URL::base();?>recipe/list">Alle Rezepte</a></li>
            <li><a href="<?=URL::base();?>editor/newrecipe">Rezept aufschreiben</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Happa<b class="caret"></b></a>
				<ul class="dropdown-menu">
					  <li><a href="#">Aufstriche</a></li>
					  <li><a href="#">Vorspeisen</a></li>
					  <li><a href="#">Hauptgerichte</a></li>
					  <li><a href="#">Nachspeisen</a></li>					  
				</ul>
			</li>
          </ul>
			<ul class="nav navbar-nav navbar-right">
				  <li><a href="#">Link</a></li>
				  <li class="dropdown">
					<a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
					  <li><a href="#">Action</a></li>
					  <li><a href="#">Another action</a></li>
					  <li><a href="#">Something else here</a></li>
					  <li class="divider"></li>
					  <li><a href="#">Separated link</a></li>
					</ul>
				  </li>
				</ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
