<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseInvStore extends FormRequest
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
            'invoice_number' => 'required|unique:purches_invoices',
            'do_no' => 'required|string|max:20',
            'supplier_id' => 'required',
            'date' => 'required',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'invoice_number.required' => 'Purchase Invoice is required!',
            'do_no.required' => 'DO NO is required!',
            'supplier_id.required' => 'Supplier is required!',
            'date.required' => 'Date is required!'
        ];
    }
}
