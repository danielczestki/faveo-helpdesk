<?php

namespace App\Http\Requests\kb;

use App\Http\Requests\Request;

class SettingsRequests extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
                // 'company_name' => 'required',
                // 'website' => 'required|url',
        ];
    }

}
