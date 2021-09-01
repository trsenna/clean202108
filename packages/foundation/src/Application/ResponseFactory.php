<?php

namespace Clean\Foundation\Application;

class ResponseFactory
{
    public static function asArray(array $data): Response
    {
        return new Response($data);
    }

    public static function asObject(array $data): Response
    {
        return new Response((object)$data);
    }

    public static function none(): Response
    {
        return new Response(null);
    }
}
