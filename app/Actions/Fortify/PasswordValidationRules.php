<?php

namespace App\Actions\Fortify;

trait PasswordValidationRules
{
    /**
     * Get the default password validation rules.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|string>
     */
    protected function passwordRules()
    {
        return [
            'required',
            'string',
            'min:8',             // minimal 8 karakter
            'regex:/[a-z]/',     // minimal 1 huruf kecil
            'regex:/[A-Z]/',     // minimal 1 huruf besar
            'regex:/[0-9]/',     // minimal 1 angka
            'regex:/[@$!%*?&]/', // minimal 1 simbol
        ];
    }
}
