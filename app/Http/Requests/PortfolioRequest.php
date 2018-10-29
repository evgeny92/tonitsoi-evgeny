<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PortfolioRequest extends FormRequest
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
       switch($this->method()){
          CASE 'GET':
          CASE 'DELETE':
             {
                return [];
             }
          CASE 'POST':
             {
                return [
                   'translation.*.title' => 'required|min:10|max:100|unique:portfolio_translations,title',
                   'image' => 'required|image|max:1024|',
                   'translation.*.content' => 'required|mi',
                ];
             }
          CASE 'PUT':
          CASE 'PATCH':
             {
                return [
                   /*'translation.*.title' => ['min:10',
                      'max:100',
                      Rule::unique('portfolio_translations', 'title')
                         ->where('id', $this->id)
                         ->ignore($this->title, 'title'),
                   ],*/
                   'translation.*.title' => 'min:10|max:100',
                   'image' => 'image|max:1024|',
                   'translation.*.content' => 'min:10|max:5000',
                ];
             }
          default:
             break;
       }
    }

}
