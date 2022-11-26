<?php declare(strict_types=1);
namespace Views;

use Controllers\RecipeController;

require_once('../Controllers/RecipeController.php');

$replace = [
    '{recipeId}',
    '{recipePageTitle}',
    '{recipeTitle}',
    '{recipeSubTitle}',
    '{imageLinkOne}',
    '{calories}',
    '{prepTime}',
    '{bakeTime}',
    '{portions}',
    '{ingredients}',
    '{necessary}',
    '{preparation}',
    '{nutrition}'
];

// get Recipe
$recipe = RecipeController::getRecipeById(1);

$template = file_get_contents(__DIR__.'/../Templates/Recipe.html');
echo str_replace($replace, $recipe, $template);