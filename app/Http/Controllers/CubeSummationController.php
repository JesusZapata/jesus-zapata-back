<?php

namespace App\Http\Controllers;

use Storage;
use App\Http\Requests\CubeSummationRequest;

class CubeSummationController extends Controller
{
    
    /**
     * 
     */
    public function upload(CubeSummationRequest $request)
    {
        $path = $request->file('cube_summation')->store('cube_summation');
        $content = Storage::get($path);
    }
}
