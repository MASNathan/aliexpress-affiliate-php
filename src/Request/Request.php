<?php

namespace MASNathan\AliExpress\Request;

abstract class Request
{
    protected $sectionName;

    protected $arguments = [];

    public function __construct()
    {
        $this->sectionName = $this->discoverSectionName();
    }

    protected function discoverSectionName()
    {
        $classNamespace = get_called_class();
        $classNamespaceParts = explode('\\', $classNamespace);
        $className = end($classNamespaceParts);

        return str_replace('Request', '', lcfirst($className));
    }

    public function getSection()
    {
        return $this->sectionName;
    }

    public function getArguments()
    {
        return $this->arguments;
    }

    protected function setArgument($key, $value)
    {
        $this->arguments[$key] = $value;
    }
}
