<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:120',
            'email' => 'required|email:rfc|max:160',
            'phone' => 'nullable|string|max:40',
            'message' => 'required|string|max:3000',
            'website' => 'max:0',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Podaj imię i nazwisko lub nazwę firmy.',
            'email.required' => 'Podaj adres e-mail.',
            'email.email' => 'Podaj poprawny adres e-mail.',
            'phone.max' => 'Numer telefonu jest za długi.',
            'message.required' => 'Wpisz treść wiadomości.',
            'message.max' => 'Wiadomość może mieć maksymalnie 3000 znaków.',
            'website.max' => 'Nie udało się wysłać formularza.',
        ];
    }
}
