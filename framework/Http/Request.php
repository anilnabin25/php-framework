<?php

namespace DivyaShrestha\Framework\Http;

class Request
{
    public function __construct(
        public readonly array $get_params,
        public readonly array $post_params,
        public readonly array $cookies,
        public readonly array $files,
        public readonly array $server

    )
    {

    }

    public static function createFromGlobals(): static
    {
        return new static($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);

    }

}
