<?php

namespace B3none\PayRun\Models;

class AddressModel
{
    /**
     * @var string
     */
    protected $address1;

    /**
     * @var string
     */
    protected $address2;

    /**
     * @var string
     */
    protected $address3;

    /**
     * @var string
     */
    protected $address4;

    /**
     * @var string
     */
    protected $postCode;

    /**
     * @var string
     */
    protected $country;

    /**
     * @param string $address1
     * @return AddressModel
     */
    public function setAddress1(string $address1): AddressModel
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @param string $address2
     * @return AddressModel
     */
    public function setAddress2(string $address2): AddressModel
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @param string $address3
     * @return AddressModel
     */
    public function setAddress3(string $address3): AddressModel
    {
        $this->address3 = $address3;
        return $this;
    }

    /**
     * @param string $address4
     * @return AddressModel
     */
    public function setAddress4(string $address4): AddressModel
    {
        $this->address4 = $address4;
        return $this;
    }

    /**
     * @param string $postCode
     * @return AddressModel
     */
    public function setPostCode(string $postCode): AddressModel
    {
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * @param string $country
     * @return AddressModel
     */
    public function setCountry(string $country): AddressModel
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->address1;
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return $this->address2;
    }

    /**
     * @return string
     */
    public function getAddress3(): string
    {
        return $this->address3;
    }

    /**
     * @return string
     */
    public function getAddress4(): string
    {
        return $this->address4;
    }

    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
}
