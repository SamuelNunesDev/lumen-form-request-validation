<?php

namespace SamuelNunes\LumenFormRequestValidation\Contracts;

interface BasicRequestMethodsContract
{
    /**
     * Get all the parameters received in the request.
     * 
     * @return array
     */
    public function all();

    /**
     * Get only parameters specified in $keys received in request.
     * 
     * @param string|array $keys
     * @return array
     */
    public function only($keys);

    /**
     * Get all parameters received in the request with the exception of those specified in the $keys.
     * 
     * @param string|array $keys
     * @return array
     */
    public function except($keys);

    /**
     * Get the validation rules that apply to the request.
     * 
     * @return array
     */
    public function rules();

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages();
}