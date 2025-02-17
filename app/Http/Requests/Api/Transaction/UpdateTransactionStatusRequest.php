<?php

namespace App\Http\Requests\Api\Transaction;

use App\Response\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTransactionStatusRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required|exists:transactions,id',
            'status' => 'required|in:1,2',
        ];
    }
}
