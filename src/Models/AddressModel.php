<?php

namespace Herdl\PayRun\Models;

use Error;
use Exception;
use Herdl\PayRun\Exceptions\ModelException;
use Herdl\PayRun\Helpers\ExceptionHelper;

/**
 * https://developer.payrun.io/docs/reference/address.html#address
 */
class AddressModel
{
    /**
     * The first line of the address
     *
     * @var string
     */
    protected $address1;

    /**
     * The second line of the address
     *
     * @var string
     */
    protected $address2;

    /**
     * The third line of the address
     *
     * @var string
     */
    protected $address3;

    /**
     * The forth line of the address
     *
     * @var string
     */
    protected $address4;

    /**
     * The UK postcode, required if the country is United Kingdom
     *
     * @var string
     */
    protected $postCode;

    /**
     * The address country, e.g. United Kingdom
     *
     * @var string
     */
    protected $country;

    /**
     * AddressModel constructor.
     *
     * @param string|null $address1
     * @param string|null $address2
     * @param string|null $address3
     * @param string|null $address4
     * @param string|null $postCode
     * @param string|null $country
     */
    public function __construct(
        ?string $address1 = null,
        ?string $address2 = null,
        ?string $address3 = null,
        ?string $address4 = null,
        ?string $postCode = null,
        ?string $country = null
    ) {
        if ($address1) {
            $this->address1 = $address1;
        }

        if ($address2) {
            $this->address2 = $address2;
        }

        if ($address3) {
            $this->address3 = $address3;
        }

        if ($address4) {
            $this->address4 = $address4;
        }

        if ($postCode) {
            $this->postCode = $postCode;
        }

        if ($country) {
            $this->country = $country;
        }
    }

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

    /**
     * @return array
     * @throws ModelException
     */
    public function format(): array
    {
        try {
            return [
                'Address1' => $this->address1,
                'Address2' => $this->address2,
                'Address3' => $this->address3,
                'Address4' => $this->address4,
                'Postcode' => $this->postCode,
                'Country' => $this->country,
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
