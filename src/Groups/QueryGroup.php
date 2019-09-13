<?php

namespace Herdl\PayRun\Groups;

class QueryGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/Query/GetQueryResponse
     *
     * Deletes the specified pension revision for the matching revision number
     *
     * @param array $query
     * @return array
     */
    public function getQueryResponse(array $query): array
    {
        $response = $this->guzzleClient->post(
            "/Query",
            [
                'body' => [
                    'Query' => $query
                ]
            ]
        );

        return $this->getResponseData($response);
    }
}
