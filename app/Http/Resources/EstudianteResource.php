<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstudianteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'carnet'            => $this->carnet,
            'identificacion'    => $this->identificacion,
            'tipo_id'           => $this->tipo_id,
            'nombre'            => $this->nombre,
            'nacio'             => $this->nacio,
            'correo'            => $this->correo,
            'telefonos'         => $this->telefonos
        ];
    }
}
