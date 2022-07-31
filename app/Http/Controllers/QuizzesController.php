<?php

namespace App\Http\Controllers;

use App\Models\Quizes;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    public function index(Request $req) {
        $quizes = Quizes::with('banner')->inRandomOrder()->get();

        // Randomizar?
        // if(isset($req->random)) {
        //     $quizes = $quizes;
        // } else {
        //     $quizes = $quizes->get();
        // }

        return response($quizes, 200);
    }

    public function retrieve(Request $req) {
        if(!$quiz = Quizes::where("id", $req->quizzId)->with("banner")->first()) {
            return response("Página não encontrada", 404);
        }

        return response($quiz, 200);
    }
}
