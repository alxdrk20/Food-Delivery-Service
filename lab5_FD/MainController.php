<?php


namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\OrderData;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class MainController extends Controller
{
    public function ingredients()
    {
        $ingredients = Ingredient::all();
        return view("ingredients", compact('ingredients'));
    }

    public function getCategoryById($id)
    {
        $category = Category::find($id);
        return view("category", compact('category'));
    }

    public function getDishesById($id)
    {
        $dish = Dish::find($id);
        return view("dish", compact('dish'));
    }

    public function FetIngredientsById($id)
    {
        $ingredient = Ingredient::find($id);
        return view("ingredient", compact('ingredient'));
    }

    public function AddDish()
    {
        return view("AddDish", ["ingredients" => Ingredient::all()]);
    }


    public function addDishPost(Request $request)
    {
        $dish = new dish();
        $dish->name=$request->name;
        $dish->size=$request->size;

        return view('AddDish', ["status"=>true, "ingredients"=>Ingredient]);
    }
}
