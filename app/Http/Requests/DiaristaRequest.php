<?php

namespace App\Http\Requests;

use App\Rules\ValidaCep;
use App\Services\ViaCEP;
use Illuminate\Foundation\Http\FormRequest;

class DiaristaRequest extends FormRequest
{
    public function __construct(
        public ViaCEP $viaCep
    ){}
    
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
        $regras = [
            'nome_completo' => ['required', 'max:100'],
            'cpf' => ['required', 'size:14'],
            'email' => ['required', 'email', 'max:100'],
            'telefone' => ['required', 'size:15'],
            'logradouro' => ['required', 'max:255'],
            'numero' => ['required', 'max:20'],
            'bairro' => ['required', 'max:50'],
            'cidade' => ['required', 'max:50'],
            'estado' => ['required', 'size:2'],
            'cep' => ['required', new ValidaCep($this->viaCep)],
            'foto_usuario' => ['image']
        ];

        if ($this->isMethod('post')) {
            $regras['foto_usuario'] = ['required', 'image'];
        }

        return $regras;
    }
}
