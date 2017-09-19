<?php
/**
 * Created by PhpStorm.
 * User: this
 * Date: 9/17/2017
 * Time: 6:56 PM
 */

namespace RaasLib\Models;


class CreateCreditCardRequestModel
{
    /**
     * Account Identifier
     * @required
     * @var string $accountIdentifier public property
     */
    public $accountIdentifier;

    /**
     * Billing Address
     * @var BillingAddressModel|null $billingAddress public property
     */
    public $billingAddress;
    /**
     * Credit Card
     * @var CrediCardRequestModel|null $creditCard public property
     */
    public $creditCard;
    /**
     * Customer Identifier
     * @required
     * @var string $customerIdentifier public property
     */
    public $customerIdentifier;
    /**
     * Ip Address
     * @required
     * @var string $ipAddress public property
     */
    public $ipAddress;
    /**
     * Label
     * @required
     * @var string $label public property
     */
    public $label;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $accountIdentifier  Initialization value for $this->accountIdentifier
     * @param BillingAddressModel       $billingAddress     Initialization value for $this->billingAddress
     * @param CrediCardRequestModel            $creditCard         Initialization value for $this->creditCard
     * @param string                    $customerIdentifier Initialization value for $this->customerIdentifier
     * @param string                    $ipAddress          Initialization value for $this->ipAddress
     * @param string                    $label              Initialization value for $this->label
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->accountIdentifier  = func_get_arg(0);
            $this->billingAddress     = func_get_arg(1);
            $this->creditCard         = func_get_arg(2);
            $this->customerIdentifier = func_get_arg(3);
            $this->ipAddress          = func_get_arg(4);
            $this->label              = func_get_arg(5);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accountIdentifier']  = $this->accountIdentifier;
        $json['billingAddress']     = $this->billingAddress;
        $json['creditCard']         = $this->creditCard;
        $json['customerIdentifier'] = $this->customerIdentifier;
        $json['ipAddress']          = $this->ipAddress;
        $json['label']              = $this->label;

        return $json;
    }

}
