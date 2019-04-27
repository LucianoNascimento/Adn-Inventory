<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class salesInvStore extends FormRequest
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
            'invoice_number' => 'required|unique:sales_invoices',
            'do_no' => 'required|string|max:20',
            'customer_id' => 'required',
            'date' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'invoice_number.required' => 'Sales Invoice is required!',
            'do_no.required' => 'DO NO is required!',
            'do_no.string' => 'DO NO is not string!',
            'customer_id.required' => 'Customer is required!',
            'date.required' => 'Date is required!'
        ];
    }
}
