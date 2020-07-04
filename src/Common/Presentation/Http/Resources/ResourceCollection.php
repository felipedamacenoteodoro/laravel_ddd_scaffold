<?php

namespace Common\Presentation\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection as JsonResourceCollection;

class ResourceCollection extends JsonResourceCollection
{
    private $class;
    private $key;
    private $meta;
    private $links;

    public function __construct($resource, $key, $class)
    {
        if ($resource instanceof \Illuminate\Pagination\LengthAwarePaginator) {
            $this->links = [
                'first' => $resource->url(1),
                'last'  => $resource->url($resource->lastPage()),
                'prev'  => $resource->previousPageUrl(),
                'next'  => $resource->nextPageUrl(),
            ];

            $this->meta = [
                'total'        => $resource->total(),
                'per_page'     => $resource->perPage(),
                'current_page' => $resource->currentPage(),
                'last_page'    => $resource->lastPage(),
                'count'        => $resource->count(),
                'total_pages'  => $resource->lastPage()
            ];

            $resource = $resource->getCollection();
        }

        $this->class = $class;
        $this->key = $key;

        parent::__construct($resource);
    }

    public function toArray($request)
    {
        return [
            $this->key => $this->class::collection($this),
            'links'    => $this->links,
            'meta'     => $this->meta
        ];
    }
}