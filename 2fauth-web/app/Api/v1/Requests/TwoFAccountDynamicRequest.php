<?php

namespace App\Api\v1\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class TwoFAccountDynamicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = Arr::has($this->validationData(), 'uri')
            ? (new TwoFAccountUriRequest)->rules()
            : (new TwoFAccountStoreRequest)->rules();

        return $rules;
    }

    /**
     * Prepare the data for validation.
     *
     * @codeCoverageIgnore
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'otp_type'  => strtolower($this->otp_type),
            'algorithm' => strtolower($this->algorithm),
        ]);
    }
}
