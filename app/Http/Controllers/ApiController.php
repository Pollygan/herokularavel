<?php

namespace App\Http\Controllers;


class ApiController extends Controller
{
    public function getInfo($id)
    {
        $mySwapiProxy = new ProxyController('https://api.spoonacular.com/recipes/716429/information?apiKey=bed71e4843144de4a35fe949b53edb22&includeNutrition=true');

        $result = $mySwapiProxy->getData($id);

        print_r($result);
    }
}
