<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BookResource extends Resource
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
            'book'        => $this->name,
            'catalogs'    => CatalogResource::collection($this->catalogs),
        ];
    }
}
