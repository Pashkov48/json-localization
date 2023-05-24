<?php

namespace App\Facades;

use App\Services\Document\DocumentService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Services\Document\DocumentService add(array $documents)
 * @method static \App\Services\Document\DocumentService setProject(\App\Models\Project|int $project)
 *
 * @see DocumentService
 */
class Document extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'documents';
    }
}
