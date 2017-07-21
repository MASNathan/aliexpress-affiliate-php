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
        return str_replace('Request', '', lcfirst(pathinfo(get_called_class(), PATHINFO_FILENAME)));
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
