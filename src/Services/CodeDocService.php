<?php

namespace Vcian\LaravelCodeInsights\Services;

use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;

/**
 * CodeDoc Service
 */
class CodeDocService
{
    /**
     * @return Collection
     */
    public function getControllers(): Collection
    {
        $controllers = collect();

        try {
            $controllerPath = app_path('Http/Controllers');
            $files = File::allFiles($controllerPath);

            foreach ($files as $file) {
                $namespace = 'App\\Http\\Controllers\\';
                $class = $namespace . str_replace(
                        ['/', '.php'],
                        ['\\', ''],
                        $file->getRelativePathname()
                    );

                if (class_exists($class)) {
                    $reflectionClass = new ReflectionClass($class);
                    $controllers->push([
                        'name' => $class,
                        'shortName' => $reflectionClass->getShortName()
                    ]);
                }
            }
        } catch (Exception $ex) {
            Log::error($ex);
        }

        return $controllers;
    }

    /**
     * @return Collection
     */
    public function getModels(): Collection
    {
        $models = collect();

        try {
            $modelPath = app_path('Models');
            $files = File::allFiles($modelPath);

            foreach ($files as $file) {
                $namespace = 'App\\Models\\';
                $class = $namespace . str_replace(
                        ['/', '.php'],
                        ['\\', ''],
                        $file->getRelativePathname()
                    );

                if (class_exists($class)) {
                    $reflectionClass = new ReflectionClass($class);
                    // Check if the class is a controller
                    if (!$reflectionClass->isAbstract()) {
                        $models->push([
                            'name' => $class,
                            'shortName' => $reflectionClass->getShortName()
                        ]);
                    }
                }
            }
        } catch (Exception $ex) {
            Log::error($ex);
        }

        return $models;
    }

    /**
     * @param string|null $class
     * @return Collection
     */
    public function getMethods(?string $class): Collection
    {
        $methods = collect();
        if (class_exists($class) || trait_exists($class)) {
            $reflectionClass = new ReflectionClass($class);
            foreach ($reflectionClass->getMethods() as $method) {
                // Check if the method belongs to the class itself, and not to a parent class
                if ($method->class === $class && !$method->isStatic() && $method->getName() !== '__construct' && !str_contains($method->getFileName(), 'vendor')) {
                    $methods->push([
                        'name' => $method->getName()
                    ]);
                }
            }
        }

        return $methods;
    }

    /**
     * @return Collection
     */
    public function getRepositories(): Collection
    {
        $repositories = collect();

        try {
            $repositoryPath = app_path('Repositories');
            $files = File::allFiles($repositoryPath);

            foreach ($files as $file) {
                $filePath = $file->getRealPath();
                $namespace = 'App\\Repositories\\';
                $class = $namespace . str_replace(
                        ['/', '.php'],
                        ['\\', ''],
                        $file->getRelativePathname()
                    );

                if (class_exists($class)) {
                    $reflectionClass = new ReflectionClass($class);

                    // Check if the class is a controller
                    if (!$reflectionClass->isAbstract()) {
                        $repositories->push([
                            'name' => $class,
                            'shortName' => $reflectionClass->getShortName()
                        ]);
                    }
                }
            }
        } catch (Exception $ex) {

        }

        return $repositories;
    }

    /**
     * Get Services function
     *
     * @return Collection
     */
    public function getServices(): Collection
    {
        $services = collect();

        try {
            $servicePath = app_path('Services');
            $files = File::allFiles($servicePath);

            foreach ($files as $file) {
                $namespace = 'App\\Services\\';
                $class = $namespace . str_replace(
                        ['/', '.php'],
                        ['\\', ''],
                        $file->getRelativePathname()
                    );

                if (class_exists($class)) {
                    $reflectionClass = new ReflectionClass($class);

                    // Check if the class is a controller
                    if (!$reflectionClass->isAbstract()) {
                        $services->push([
                            'name' => $class,
                            'shortName' => $reflectionClass->getShortName()
                        ]);
                    }
                }
            }
        } catch (Exception $ex) {
            Log::error($ex);
        }

        return $services;
    }

    /**
     * @param $className
     * @return mixed
     * @throws ReflectionException
     */
    public function sourceCode($className)
    {
        if ($className) {
            $reflectionClass = new ReflectionClass($className);
            return file_get_contents($reflectionClass->getFileName());
        }

        return null;
    }

    /**
     * get providers function
     *
     * @return Collection
     */
    public function getProviders(): Collection
    {
        $providers = collect();

        try {
            $providerPath = app_path('Providers');
            $files = File::glob($providerPath . '/*.php');

            foreach ($files as $file) {
                $className = basename($file, '.php');
                $providers->push([
                    'name' => "App\\Providers\\" . $className,
                    'shortName' => $className,
                ]);
            }
        } catch (Exception $ex) {
            Log::error($ex);
        }

        return $providers;
    }

    /**
     * Get helpers function
     *
     * @return Collection
     */
    public function getHelpers(): Collection
    {
        $helpers = collect();

        try {
            $helperPath = app_path('Helpers');
            $files = File::allFiles($helperPath);

            foreach ($files as $file) {
                $namespace = 'App\\Helpers\\';
                $class = $namespace . str_replace(
                        ['/', '.php'],
                        ['\\', ''],
                        $file->getRelativePathname()
                    );

                if (class_exists($class)) {
                    $reflectionClass = new ReflectionClass($class);
                    // Check if the class is a controller
                    if (!$reflectionClass->isAbstract()) {
                        $helpers->push([
                            'name' => $class,
                            'shortName' => $reflectionClass->getShortName()
                        ]);
                    }
                }
            }

        } catch (Exception $ex) {
            Log::error($ex);
        }

        return $helpers;
    }
}
