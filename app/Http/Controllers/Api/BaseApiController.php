<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class BaseApiController extends Controller
{
    /**
     * @return JsonResponse
     */
    protected function successResponse(): JsonResponse
    {
        return response()->json(['status' => 'success']);
    }
}
