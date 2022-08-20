<?php

namespace SamuelNunes\Requests;

use Illuminate\Http\Request;

trait BasicRequestMethods
{
    protected $request;

    /**
     * Validate the request with your rules and messages and define request attributes in the class for easy access.
     * 
     * @param Illuminate\Http\Request $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->validate($request, $this->rules(), $this->messages());
        $this->request = $request;
        foreach($request->all() as $key => $value) {
            $this->{$key} = $value;
        }
    }

    /**
     * Get all the parameters received in the request.
     * 
     * @return array
     */
    public function all()
    {
        return $this->request->all();
    }

    /**
     * Get only parameters specified in $keys received in request.
     * 
     * @param string|array $keys
     * @return array
     */
    public function only($keys)
    {
        return $this->request->only($keys);
    }

    /**
     * Get all parameters received in the request with the exception of those specified in the $keys.
     * 
     * @param string|array $keys
     * @return array
     */
    public function except($keys)
    {
        return $this->request->except($keys);
    }

    /**
     * Get the validation rules that apply to the request.
     * 
     * @return array
     */
    public function rules()
    {
        return [];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }
}