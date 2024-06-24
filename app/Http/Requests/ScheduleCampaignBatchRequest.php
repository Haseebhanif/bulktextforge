<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleCampaignBatchRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'sender_id'=>'required | integer',
            'group_id'=>'required | integer',
            'message'=>'required',
            'send_date'=>'required | date_format:d-m-Y',
            'send_time'=>'required | date_format:H:i',
            'opt_out'=>'required|bool',
        ];
    }
}