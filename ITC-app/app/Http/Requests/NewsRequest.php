<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Validation\Rule;

    class NewsRequest extends FormRequest
    {
        public function authorize(){
            return true;
        }

        public function rules(){
            return [
                'title'=>'required|string|between:3,225',
                'content'=>'required|string|between:3,225',
                'date'=>'required|date|date_format:Y-m-d',
            ];
        }
    }
?>