<?php
require_once('templates/header.php');
require_once('lib/recipe.php');

$recipes = getRecipes($pdo, _HOME_RECIPES_LIMIT_);


?>




<div class="row flex-lg-row-reverse align-items-center g-5 py-5 m-4">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/images/Cuisinea.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="600" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Cuisinea - recette de cuisine</h1>
        <p class="lead">Découvrez un monde de saveurs exquises sur notre site de cuisine.
            Plongez dans des recettes alléchantes, des astuces culinaires innovantes et des inspirations gourmandes.
            Rejoignez notre communauté passionnée de gastronomie et
            laissez-vous emporter par une expérience culinaire inoubliable.</p>
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
require_once('templates/footer.php');
?>