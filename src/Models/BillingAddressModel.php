<?php
/**
 * Created by PhpStorm.
 * User: this
 * Date: 9/17/2017
 * Time: 7:02 PM
 */

namespace RaasLib\Models;


class BillingAddressModel
{
    /**
     * Address Line 1
     * @required
     * @var string $addressLine1 public property
     */
    public $addressLine1;
    /**
     * Address Line 2
     * @var string $addressLine2 public property
     */
    public $addressLine2;
    /**
     * City
     * @var string $city public property
     */
    public $city;
    /**
     * Country
     * @var string $country public property
     */
    public $country;
    /**
     * Email Address
     * @var string $emailAddress public property
     */
    public $emailAddress;
    /**
     * FirstName
     * @var string $firstName public property
     */
    public $firstName;
    /**
     * Lastname
     * @var string $lastName public property
     */
    public $lastName;
    /**
     * Postal Code
     * @var string $postalCode public property
     */
    public $postalCode;
    /**
     * State
     * @var string $state public property
     */
    public $state;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $addressLine1       Initialization value for $this->addressLine1
     * @param string                    $addressLine2       Initialization value for $this->addressLine2
     * @param string                    $city               Initialization value for $this->city
     * @param string                    $country            Initialization value for $this->country
     * @param string                    $emailAddress       Initialization value for $this->emailAddress
     * @param string                    $firstName          Initialization value for $this->firstName
     * @param string                    $lastName           Initialization value for $this->lastName
     * @param string                    $postalCode         Initialization value for $this->postalCode
     * @param string                    $state              Initialization value for $this->state
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->addressLine1         = func_get_arg(0);
            $this->addressLine2         = func_get_arg(1);
            $this->city                 = func_get_arg(2);
            $this->country              = func_get_arg(3);
            $this->emailAddress         = func_get_arg(4);
            $this->firstName            = func_get_arg(5);
            $this->lastName             = func_get_arg(6);
            $this->postalCode           = func_get_arg(7);
            $this->state                = func_get_arg(8);
        }
    }
    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['addressLine1']       = $this->addressLine1;
        $json['addressLine2']       = $this->addressLine2;
        $json['city']               = $this->city;
        $json['country']            = $this->country;
        $json['emailAddress']       = $this->emailAddress;
        $json['firstName']          = $this->firstName;
        $json['lastName']           = $this->lastName;
        $json['postalCode']         = $this->postalCode;
        $json['state']              = $this->state;

        return $json;
    }
}