<?php

namespace App\Http\Controllers\Traits;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait apiTrait
{
    public function apiResponse($data, $status, $msg , $code = 200)
    {
        return response()->json([
            'status' => $status,
            'message' => $msg,
            'data' => $data,
        ], $code);
    }


}
