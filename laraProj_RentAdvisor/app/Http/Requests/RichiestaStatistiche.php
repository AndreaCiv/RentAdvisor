<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RichiestaStatistiche extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
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
            'locazione_inizio' => 'nullable|date_format:Y-m-d',
            'locazione_fine' =>  'nullable|date_format:Y-m-d'|'after:locazione_inizio',
            'tipologia' => 'nullable|string',
        ];
            //
    }
}
