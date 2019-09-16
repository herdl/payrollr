<?php

namespace Herdl\PayRun\Models;

use Error;
use Exception;
use Herdl\PayRun\Exceptions\ModelException;
use Herdl\PayRun\Helpers\ExceptionHelper;

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

    /**
     * @return array
     * @throws ModelException
     */
    public function format(): array
    {
        try {
            return [
                'Version' => $this->version,
                'Info' => $this->info
            ];
        } catch (ModelException $modelException) {
            throw $modelException;
        } catch (Exception $exception) {
            ExceptionHelper::handle($this);
        } catch (Error $error) {
            ExceptionHelper::handle($this);
        }
    }
}
