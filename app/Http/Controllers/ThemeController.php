<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Theme;

class ThemeController extends Controller
{
    public function list(){
        $themes = Theme::get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'totalThemes' => $themes->count(),
            'themes' => $themes
        ]);
    }
}
