<?php

namespace Herdl\PayRun\Models;

use Error;
use Exception;
use Herdl\PayRun\Exceptions\ModelException;
use Herdl\PayRun\Helpers\ExceptionHelper;

/**
 * https://developer.payrun.io/docs/reference/nominal-code/index.html#nominal-codes
 */
class NominalCodeModel
{
    /**
     * The nominal code account identifier.
     *
     * @var string
     */
    protected $key;

    /**
     * The nominal code account description.
     *
     * @var string
     */
    protected $description;

    /**
     * NominalCodeModel constructor.
     *
     * @param string|null $key
     * @param string|null $description
     */
    public function __construct(?string $key = null, ?string $description = null)
    {
        if ($key) {
            $this->key = $key;
        }

        if ($description) {
            $this->description = $description;
        }
    }

    /**
     * @param string $key
     * @return NominalCodeModel
     */
    public function setKey(string $key): NominalCodeModel
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param string $description
     * @return NominalCodeModel
     */
    public function setDescription(string $description): NominalCodeModel
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return array
     * @throws ModelException
     */
    public function format(): array
    {
        try {
            return [
                'Key' => $this->key,
                'Description' => $this->description,
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
