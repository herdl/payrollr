<?php

namespace B3none\PayRun\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class GuzzleHelper
{
    const BASE_URL = 'https://api.payrun.io';
    const TEST_URL = 'https://api.test.payrun.io';

    /**
     * RequestHelper constructor.
     *
     * @param string $consumerKey
     * @param string $consumerSecret
     * @param bool $isTest
     * @return Client
     */
    public static function create(string $consumerKey, string $consumerSecret, bool $isTest)
    {
        $stack = HandlerStack::create();

        $middleware = new Oauth1([
            'consumer_key' => $consumerKey,
            'consumer_secret' => $consumerSecret,
        ]);
        $stack->push($middleware);

        return new Client([
            'base_uri' => $isTest ? self::TEST_URL : self::BASE_URL,
            'handler' => $stack,
            'auth' => 'oauth',
            'headers' => [
                'Accept' => 'application/json'
            ],
        ]);
    }
}
