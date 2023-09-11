<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Question;

class QuestionController extends Controller
{
    public function list(){
        $questions = Question::with('theme')->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'totalQuestions' => $questions->count(),
            'questions' => $questions
        ]);
    }

    public function listThemeQuestion($id){
        $questions = Question::where('theme_id',$id)->with('theme')->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'totalQuestions' => $questions->count(),
            'questions' => $questions
        ]);
    }

    public function test($themeId){
        $questions = Question::where('theme_id',$themeId)
                                ->with('theme')
                                ->inRandomOrder()
                                ->limit(10)
                                ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'totalQuestions' => $questions->count(),
            'questions' => $questions
        ]);
    }
}
