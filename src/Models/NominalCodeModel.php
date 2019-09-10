<?php

namespace B3none\PayRun\Models;

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
}
