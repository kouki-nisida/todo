<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index(Request $request)
    {
        $items = Todo::all();

        
        return view('index', ['items'=>$items]);

    }
    // public function a(Request $request)
    // {
        // $items = Todo::all();

        
    //     return view('add', ['items'=>$items]);


    // }

    public function add(Request $request){
        $todo =new Todo;
        // $items = Todo::all();
        $data=[
                'content'=> $request->content,
                'id'=>$request->id,
            ];
        DB::table('todos')->insert($data);
        return redirect('/');

    }

    public function delete(Request $request)
    {
        // $items = Todo::all();

        // return response()->json([
        //     'id' => $request->id,
        //     'data' => Todo::find($request->id)
        // ], 201);
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
