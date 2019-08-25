<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPatentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
      $rules = [
          'user_id' => 'required',
          'pat_id' => 'required',
          'sell_cost' => '',
          'rent_cost' => '',
      ];

      switch ($this->getMethod())
      {
        case 'POST':
          return $rules;
        case 'PUT':
          return [
            'user_id' => 'required|integer|exists:users,id', //должен существовать. 
          ] + $rules; // и берем все остальные правила
        // case 'PATCH':
   //     case 'DELETE':
    //      return [
   //           'game_id' => 'required|integer|exists:games,id'
   //       ];
      }
    }
    public function all($keys = null)
    {
      // return $this->all();
      $data = parent::all($keys);
      switch ($this->getMethod())
      {
        // case 'PUT':
        // case 'PATCH':
       // case 'DELETE':
        //  $data['date'] = $this->route('day');
      }
      return $data;
    }
}
