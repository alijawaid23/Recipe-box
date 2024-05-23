<?php
class Recipe{
    private $id;
    private $ingredients;
    private $cookingTime;
    private $dietaryRequirements;
    private $keywords;
    private $recipeText;
    private $recipeCost;

    function __get($name){
    return $this ->$name;
    }

    function __set($name,$value){
    $this->$name = $value;
    }
}
?>