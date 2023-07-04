<?php

namespace Vcian\LaravelCodeInsights\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
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
     * @throws ReflectionException
     */
    public function getControllers(): Collection
    {
        return $this->getClasses('Illuminate\Routing\Controller');
    }

    /**
     * @return Collection
     * @throws ReflectionException
     */
    public function getModels(): Collection
    {
        return $this->getClasses('Illuminate\Database\Eloquent\Model');
    }

    /**
     * @param string $subClass
     * @return Collection
     * @throws ReflectionException
     */
    public function getClasses(string $subClass): Collection
    {
        $classes = collect();
        // Recursively scan the app directory and its subdirectories
        $files = File::allFiles(app_path());

        foreach ($files as $file) {
            // Get the fully qualified class name
            $class = sprintf('App\\%s', str_replace(
                ['/', '.php'],
                ['\\', ''],
                $file->getRelativePathname()
            ));

            $reflectionClass = new ReflectionClass($class);

            // Check if the class is a controller
            if (is_subclass_of($class, $subClass) && !$reflectionClass->isAbstract()) {
                $classes->push([
                    'name' => $class,
                    'shortName' => $reflectionClass->getShortName()
                ]);
            }
        }

        return $classes;
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
                if ($method->class === $class && !$method->isStatic() && $method->getName() !== '__construct' && !str_contains($method->getFileName(),'vendor')) {
                    $methods->push([
                        'name' => $method->getName()
                    ]);
                }
            }
        }

        return $methods;
    }

    /**
     * @param string $class
     * @param string $method
     * @return string
     * @throws ReflectionException
     */
    public function getMethodCode(string $class, string $method): string
    {
        // Create a ReflectionMethod instance for the specified method
        $method = new ReflectionMethod($class, $method);

        // Get the starting line number of the method definition
        $startLine = $method->getStartLine();

        // Get the ending line number of the method definition
        $endLine = $method->getEndLine();

        // Read the file into an array of lines
        $fileLines = file($method->getFileName());

        // Extract the lines that correspond to the method definition
        $methodLines = array_slice($fileLines, $startLine - 1, $endLine - $startLine + 1);

        return implode('', $methodLines);
    }


    /**
     * Get Repositories function
     *
     * @return Collection
     */
    public function getRepositories(): Collection
    {
        $repositories = collect();
        $files = File::allFiles(app_path());

        foreach ($files as $file) {
            // Get the fully qualified class name
            $class = sprintf('App\\%s', str_replace(
                ['/', '.php'],
                ['\\', ''],
                $file->getRelativePathname()
            ));

            $reflectionClass = new ReflectionClass($class);

            if (str_contains($class, 'Repositories') || str_contains($class, 'repositories') || str_contains($class, 'repository') || str_contains($class, 'Repository')) {
                $repositories->push([
                    'name' => $reflectionClass->getNamespaceName() . '\\' . $reflectionClass->getShortName(),
                    'shortName' => $reflectionClass->getShortName(),
                ]);

            }
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
        $files = File::allFiles(app_path());

        foreach ($files as $file) {
            // Get the fully qualified class name
            $class = sprintf('App\\%s', str_replace(
                ['/', '.php'],
                ['\\', ''],
                $file->getRelativePathname()
            ));
            $reflectionClass = new ReflectionClass($class);
            if (str_contains($class, 'Services') || str_contains($class, 'services') || str_contains($class, 'service')) {
                $services->push([
                    'name' => $reflectionClass->getNamespaceName() . '\\' . $reflectionClass->getShortName(),
                    'shortName' => $reflectionClass->getShortName(),
                ]);

            }
        }

        return $services;
        // return $this->commonCode('Services');

    }

    /**
     * Source code function
     *
     * @param string $className
     * @return mixed
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
        $providerPath = app_path('Providers');

        $files = File::glob($providerPath . '/*.php');
        $providers = collect();

        foreach ($files as $file) {
            $className = basename($file, '.php');
            $providers->push([
                'name' => "App\\Providers\\" . $className,
                'shortName' => $className,
            ]);
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
        $files = File::allFiles(app_path());

        foreach ($files as $file) {
            // Get the fully qualified class name
            $class = sprintf('App\\%s', str_replace(
                ['/', '.php'],
                ['\\', ''],
                $file->getRelativePathname()
            ));
            $reflectionClass = new ReflectionClass($class);
            if (str_contains($class, 'Helpers') || str_contains($class, 'helpers') || str_contains($class, 'helper') || str_contains($class, 'Helper')) {
                $helpers->push([
                    'name' => $reflectionClass->getNamespaceName() . '\\' . $reflectionClass->getShortName(),
                    'shortName' => $reflectionClass->getShortName(),
                ]);

            }
        }

        return $helpers;
    }

    /**
     * Get traits function
     *
     * @return Collection
     */
    public function getTraits(): Collection
    {
        $traits = collect();
        $files = File::allFiles(app_path());

        foreach ($files as $file) {
            // Get the fully qualified class name
            $class = sprintf('App\\%s', str_replace(
                ['/', '.php'],
                ['\\', ''],
                $file->getRelativePathname()
            ));

            $reflectionClass = new ReflectionClass($class);

            if (str_contains($class, 'Traits') || str_contains($class, 'traits') || str_contains($class, 'trait') || str_contains($class, 'Trait')) {
                $traits->push([
                    'name' => $reflectionClass->getNamespaceName() . '\\' . $reflectionClass->getShortName(),
                    'shortName' => $reflectionClass->getShortName(),
                ]);

            }
        }

        return $traits;

        // return $this->commonCode('Traits');
    }


    /**
     * Common code function
     *
     * @param string $folder
     * @return Collection
     */
    public function commonCode(string $folder): Collection
    {
        $traits = collect();
        $files = File::allFiles(app_path());

        foreach ($files as $file) {
            // Get the fully qualified class name
            $class = sprintf('App\\%s', str_replace(
                ['/', '.php'],
                ['\\', ''],
                $file->getRelativePathname()
            ));
            $reflectionClass = new ReflectionClass($class);

            if (str_contains($class, 'Services')) {
                $traits->push([
                    'name' => $reflectionClass->getNamespaceName() . '\\' . $reflectionClass->getShortName(),
                    'shortName' => $reflectionClass->getShortName(),
                ]);

            }

            return $traits;
        }
    }
}
