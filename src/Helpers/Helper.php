<?php


if (!function_exists('getMethodCode')) {
    /**
     * @param $className
     * @param $methodName
     * @return string
     * @throws ReflectionException
     */
    function getMethodCode($className, $methodName): string
    {

        $reflectionClass = new ReflectionClass($className);
        $reflectionMethod = $reflectionClass->getMethod($methodName);

        $startLine = $reflectionMethod->getStartLine();
        $endLine = $reflectionMethod->getEndLine();
        $filename = $reflectionMethod->getFileName();

        if ($filename !== false) {
            $lines = file($filename);
            $methodCode = implode("", array_slice($lines, $startLine - 1, $endLine - $startLine + 1));
            return '<pre>' . $methodCode . '</pre>';

        } else {
            return "Unable to retrieve the source code of the method.";
        }
    }
}
