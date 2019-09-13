<?php

namespace Herdl\PayRun\Groups;

class SchemasGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/Schemas/GetSchemas
     *
     * Returns a collection of links to all the available data object schemas
     *
     * @return array
     */
    public function getSchemas(): array
    {
        $response = $this->guzzleClient->get(
            "/Schemas"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Schemas/GetSchema
     *
     * Returns the XSD schema for the specified data type
     *
     * @param string $dtoDataType
     * @return array
     */
    public function getSchema(string $dtoDataType): array
    {
        $response = $this->guzzleClient->get(
            "/Schemas/{$dtoDataType}"
        );

        return $this->getResponseData($response);
    }
}
