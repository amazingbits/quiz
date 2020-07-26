<?php

namespace Source\Core;

use League\Plates\Engine;

class View
{
    private $engine;

    public function __construct($path = VIEW_PATH, $ext = VIEW_EXT)
    {
        $this->engine = Engine::create($path, $ext);
    }

    public function render($template, $data = [])
    {
        return $this->engine->render($template, $data);
    }
}