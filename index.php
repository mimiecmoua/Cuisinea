<?php
require_once('templates/header.php');
require_once('lib/recipe.php');


?>




<div class="row flex-lg-row-reverse align-items-center g-5 py-5 m-4">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="350" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisinea - recette de cuisine</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="recettes.php" class="btn btn-primary">Voir nos recettes</a>
        </div>
    </div>
</div>


<div class="row p-5">

    <?php foreach ($recipes as $key => $recipe) {
        include('templates/recipe_partial.php');
    }
    ?>




</div>

<?php
include('templates/footer.php');
?>