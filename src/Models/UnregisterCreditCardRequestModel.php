<?php
/**
 * Created by PhpStorm.
 * User: this
 * Date: 9/17/2017
 * Time: 10:56 PM
 */

namespace RaasLib\Models;


class UnregisterCreditCardRequestModel
{
    /**
     * Account Identifier
     * @required
     * @var string $accountIdentifier public property
     */
    public $accountIdentifier;

    /**
     * Credit Card Token
     * @required
     * @var string $creditCardToken public property
     */
    public $creditCardToken;

    /**
     * Customer Identifier
     * @required
     * @var string $customerIdentifier public property
     */
    public $customerIdentifier;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $accountIdentifier  Initialization value for $this->accountIdentifier
     * @param string                    $creditCardToken    Initialization value for $this->creditCardToken
     * @param string                    $customerIdentifier Initialization value for $this->customerIdentifier
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->accountIdentifier        = func_get_arg(0);
            $this->creditCardToken          = func_get_arg(1);
            $this->customerIdentifier       = func_get_arg(2);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accountIdentifier']  = $this->accountIdentifier;
        $json['creditCardToken']     = $this->billingAddress;
        $json['customerIdentifier'] = $this->customerIdentifier;

        return $json;
    }
}