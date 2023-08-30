<?php

namespace App\Http\Resources;

use App\Models\Pregunta;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AsignaturaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'asignatura'=>$this->content,
            'preguntas'=>PreguntaResource::collection($this->preguntas)
        ];
    }
}
