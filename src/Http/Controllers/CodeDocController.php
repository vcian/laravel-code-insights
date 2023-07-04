<?php

namespace Vcian\LaravelCodeInsights\Http\Controllers;

use Vcian\LaravelCodeInsights\Services\CodeDocService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CodeDocController
{
    /**
     * @param CodeDocService $codeDocService
     */
    public function __construct(private CodeDocService $codeDocService)
    {}

    /**
     * @param Request $request
     * @return View
     * @throws \ReflectionException
     */
    public function index(Request $request): View
    {
        $segments = explode("\\", $request->class);
        $lastTwoSegments = array_slice($segments, -2);

        return view(config('code-insights.public.folder').'::doc', [
            'controllers' => $this->codeDocService->getControllers(),
            'models' => $this->codeDocService->getModels(),
            'methods' => $this->codeDocService->getMethods($request->class),
            'repositories' => $this->codeDocService->getRepositories(),
            'services' => $this->codeDocService->getServices(),
            'sourceCode' => $this->codeDocService->sourceCode($request->class),
            'providers' => $this->codeDocService->getProviders(),
            'helpers' => $this->codeDocService->getHelpers(),
            'traits' => $this->codeDocService->getTraits(),
            'activeClass' => $request->class,
            'breadcrumb' => (isset($lastTwoSegments[1]) && isset($lastTwoSegments[0])) ? $lastTwoSegments[0].'/'. $lastTwoSegments[1] :'',  //base
        ]);
    }

}
