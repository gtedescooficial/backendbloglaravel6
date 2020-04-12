<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'key' => $this->id,
            'titulo' => $this->title,
            'conteudo' => $this->content,
            'capa' => $this->cover,
            'url' => $this->slug,
            'usuario' => $this->user_id,
            'categoria' => $this->category_id,
            'creadoem' => $this->created_at,
            'atualizadoem' => $this->updated_at,
            'categoria' => new CategoryResource($this->category),
            'usuario' => new UserResource($this->user)

        ];
    }
}
