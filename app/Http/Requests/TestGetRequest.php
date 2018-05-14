<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @description
 *  This request designed to demonstrate request with full annotation and response witch contain some data.
 * It has multi-line description witch will be displayed in Annotation Notes block of documentation.
 * It has custom summary, response code descriptions and parameters descriptions.
 *
 * @summary Test Get Request with full annotations
 *
 * @_204 This request has successfully done
 * @_401 You must remove need-authorization flag from input parameters for pass authorization.
 * @_404 We so sorry but you entity not exists.
 * @_422 Wrong input parameter. It must be integer
 *
 * @need-authorization If this parameter is true then you will get 401 response
 * @not-found If this parameter is true then you will get 404 response
 * @test-parameter This parameter designed for demonstrate unprocesable entity response
 */
class TestGetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'not-found' => 'boolean',
            'need-authorization' => 'boolean',
            'test-parameter' => 'integer'
        ];
    }
}
