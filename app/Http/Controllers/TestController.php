<?php
/**
 * Created by PhpStorm.
 * User: romandubrovin
 * Date: 14.05.2018
 * Time: 11:37
 */

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function lists() {
        $data = [
            'some' => 'complex',
            'structure' => [
                'with' => 'multiple',
                'nesting' => []
            ]
        ];

        return response()->json($data);
    }
}