<?php

namespace Herdl\PayRun\Models;

/**
 * https://developer.payrun.io/docs/reference/healthcheck.html
 */
class HealthCheckModel
{
    /**
     * The current version number of the API.
     *
     * @var string
     */
    protected $version;

    /**
     * Further detailed information about the health of the API.
     *
     * @var string
     */
    protected $info;

    /**
     * HealthCheckModel constructor.
     *
     * @param string|null $version
     * @param string|null $info
     */
    public function __construct(?string $version = null, ?string $info = null)
    {
        if ($version) {
            $this->version = $version;
        }

        if ($info) {
            $this->info = $info;
        }
    }

    /**
     * @param string $version
     * @return HealthCheckModel
     */
    public function setVersion(string $version): HealthCheckModel
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @param string $info
     * @return HealthCheckModel
     */
    public function setInfo(string $info): HealthCheckModel
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }
}
