<?php

namespace LaravelApi\GitHub;

class GitHubWrapper
{
    public function config()
    {
        return [
            'DUMMY_KEY_1' => [
                'config' => 'services.dummy.key-1',
                'description' => 'Description for config key 1',
            ],
            'DUMMY_KEY_2' => [
                'config' => 'services.dummy.key-2',
                'description' => 'Description for config key 2',
            ],
        ];
    }

    public function __call($name, $attributes)
    {
        dump('API Call to ' . (new \ReflectionClass($this))->getShortName() . ' -> ' . $name);
    }
}
