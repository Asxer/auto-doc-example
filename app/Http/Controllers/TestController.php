<?php
/**
 * Created by PhpStorm.
 * User: romandubrovin
 * Date: 14.05.2018
 * Time: 11:37
 */

namespace App\Http\Controllers;

use App\Http\Requests\TestGetRequest;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    public function lists(TestGetRequest $request) {
        if ($request->input('not-found')) {
            return response()->json([
                'error' => 'entity not found'
            ], Response::HTTP_NOT_FOUND);
        }

        if ($request->input('need-authorization')) {
            return response()->json([
                'error' => 'authorization failed'
            ], Response::HTTP_UNAUTHORIZED);
        }

        return response()->json([
            'some' => 'complex',
            'structure' => [
                'with' => 'multiple',
                'nesting' => []
            ]
        ]);
    }
}