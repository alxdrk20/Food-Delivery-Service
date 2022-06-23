<?php


namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\OrderData;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class MainController extends Controller
{
    public function landing()
    {
        return view('Pages/landing', ['dishes'=>Dish::all()]);
    }

    public function about()
    {
        return view('Pages/about');
    }

    public function menu(Request $request)
    {
        $dishes = Dish::all();
        $data = $dishes->getData();
        $search = $request->input('search');
        if ($search !== null){
            $searched_ingredients = Ingredient::where('name', 'like', '%'.$request->input('search').'%')->get();
            $dishes = new Collection();
            foreach ($searched_ingredients as $ingredient){
                $dishes=$dishes->merge($ingredient->dish);
            }
        }
        return view('Pages/menu', ['dishes'=>$dishes, 'search'=>$search]);
    }

    public function basket()
    {
        return view('Pages/basket');
    }

    public function ordering()
    {
        $translate_eng = ['name', 'phone', 'street', 'house', 'flat'];
        return view('Pages/ordering', ['eng' => $translate_eng]);
    }

    public function message()
    {
        $order = new OrderData();
        return view('Pages/message', ['name'=>'']);
    }

    public function item($id, Request $request){
        $dishes = new Dish();
        $dish = $dishes->find($id);
        return view('Pages/item', ['dish'=>$dish, 'dishes'=>$dishes->all(),
            'search'=>$request->input('search'));
    }

    public function orderingPost(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha',
            'phone' => 'required',
            'street' => 'required|alpha',
            'house' => 'required',
            'flat' => 'required|numeric'
        ]);
        $order = new OrderData();
        $order->put(
            $request->input('name'),
            $request->input('phone'),
            $request->input('street'),
            $request->input('house'),
            $request->input('flat'),
            $request->input('comment'));
        return redirect('message');
    }
}
