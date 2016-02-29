<?php

namespace ComposerSample;

use Symfony\Component\Yaml\Yaml;

class HelloWorld
{
    public function say()
    {
        echo Yaml::dump([
            "hello" => [
                "world",
                "chen"
            ]
        ]);
    }
}
