<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
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
        $method = strtolower($this->method());
        $user_id = $this->route()->user;
        
// dd($method);
        $rules = [];
        switch ($method) {
            case 'post':
                $rules = [
                    'username' => 'required|max:20',
                    'first_name' => 'required|max:20',
                    'last_name' => 'required|max:20',
                    'date_of_birth' => 'required',
                    'password' => 'required|confirmed|min:8',
                    'email' => 'required|max:191|email|unique:users',
                    'phone_number'=>'max:13',
                    'marital_status' => 'required',
                    'age' => 'required',
                    'gender' =>  'required',
                    'country' =>  'max:191',
                    'state' =>  'max:50',
                    'city' =>  'max:25',
                    'address' =>  'max:191',
                    'user_type' =>  'max:15',
                    'status' => 'required',
                ];
                break;
            case 'patch':
                $rules = [
                    'username' => 'required|max:20',
                    'first_name' => 'required|max:20',
                    'last_name' => 'required|max:20',
                    'date_of_birth' => 'required',
                    'password' => 'required|confirmed|min:8',
                    'email' => 'required|max:191|email|unique:users',
                    'phone_number'=>'max:13',
                    'marital_status' => 'required',
                    'age' => 'required',
                    'gender' =>  'required',
                    'country' =>  'max:191',
                    'state' =>  'max:50',
                    'city' =>  'max:25',
                    'address' =>  'max:191',
                    'user_type' =>  'max:15',
                    'status' => 'required',
                ];
                break;

        }

        return $rules;
    }

    public function messages()
    {
        return [
            'gender.*'  =>'Gender is required.',
            'dob.*'  =>'DOB is required.',
            'country.*'  =>'Country may not be greater than 191 characters.',
            'state.*'  =>'State may not be greater than 191 characters.',
            'city.*'  =>'City may not be greater than 191 characters.',
            'address.*'  =>'Pincode may not be greater than 191 characters.',
        ];
    }

    protected function failedValidation(Validator $validator){
        $data = [
            'status' => true,
            'message' => $validator->errors()->first(),
            'all_message' =>  $validator->errors()
        ];

        if ($this->ajax()) {
            throw new HttpResponseException(response()->json($data,422));
        } else {
            throw new HttpResponseException(redirect()->back()->withInput()->with('errors', $validator->errors()));
        }
    }

}
