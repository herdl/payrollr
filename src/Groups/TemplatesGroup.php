<?php

namespace B3none\PayRun\Groups;

class TemplatesGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/Templates/GetTemplate
     *
     * Returns a template instance of the specified data type
     *
     * @param string $dtoDataType
     * @return array
     */
    public function getTemplate(string $dtoDataType): array
    {
        $response = $this->guzzleClient->get(
            "/Template/{$dtoDataType}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Templates/GetTemplates
     *
     * Returns a collection of links to all the available data object templates
     *
     * @return array
     */
    public function getTemplates(): array
    {
        $response = $this->guzzleClient->get(
            "/Templates"
        );

        return $this->getResponseData($response);
    }
}
