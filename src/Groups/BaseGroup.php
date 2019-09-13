<?php

namespace Herdl\PayRun\Groups;

use GuzzleHttp\Client as GuzzleClient;
use Psr\Http\Message\ResponseInterface;

class BaseGroup
{
    /**
     * @var GuzzleClient
     */
    protected $guzzleClient;

    /**
     * BaseGroup constructor.
     *
     * @param GuzzleClient $guzzleClient
     */
    public function __construct(GuzzleClient $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }

    /**
     * Get the response data
     *
     * @param ResponseInterface $response
     * @return array
     */
    protected function getResponseData(ResponseInterface $response): array
    {
        return json_decode(
            $response->getBody()->getContents(),
            true
        );
    }
}
