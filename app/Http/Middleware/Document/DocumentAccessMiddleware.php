<?php

namespace App\Http\Middleware\Document;

use App\Exceptions\Account\NoAccessToOperationException;
use App\Models\Document;
use App\Models\Project;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DocumentAccessMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        /** @var Document $document */
        $document = $request->route('document');
        /** @var Project $project */
        $project = $document->project;

        if (!$project->hasAccess()) {
            throw new NoAccessToOperationException();
        }

        return $next($request);
    }
}
