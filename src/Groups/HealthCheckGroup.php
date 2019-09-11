<?php

namespace B3none\PayRun\Groups;

class HealthCheckGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/Employer/GetHealthCheck
     *
     * Returns the health status of the application
     *
     * @return array
     */
    public function getHealthCheck(): array
    {
        $response = $this->guzzleClient->get(
            "/Healthcheck"
        );

        return $this->getResponseData($response);
    }
}
