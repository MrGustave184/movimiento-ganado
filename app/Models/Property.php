<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function formatForResponse()
    {
        return [
            'nombre' => $this->nombre,
            'cedula' => $this->cedula,
            'codigo_catastral' => str_split($this->codigo_catastral),
            'area' => $this->area,
            'encabezado' => $this->encabezado,
            'medidas' => [
                'norte' => [
                    'texto' => $this->medida_norte,
                    'ml' => $this->norte_ml
                ],
                'sur' => [
                    'texto' => $this->medida_sur,
                    'ml' => $this->sur_ml
                ],
                'este' => [
                    'texto' => $this->medida_este,
                    'ml' => $this->este_ml
                ],
                'oeste' => [
                    'texto' => $this->medida_oeste,
                    'ml' => $this->oeste_ml
                ],
            ],
            'date' => Carbon::parse()
        ];
    }
}
