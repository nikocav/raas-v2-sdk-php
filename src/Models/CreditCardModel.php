<?php
/**
 * Created by PhpStorm.
 * User: this
 * Date: 9/17/2017
 * Time: 7:03 PM
 */

namespace RaasLib\Models;


class CreditCardModel
{
    /**
     * Account Identifier
     * @required
     * @var string $accountIdentifier public property
     */
    public $accountIdentifier;

    /**
     * Activation Date
     * @var string $createdDate public property
     */
    public $activationDate;
    /**
     * Created Date
     * @var string $createdDate public property
     */
    public $createdDate;
    /**
     * Customer Identifier
     * @var string $customerIdentifier public property
     */
    public $customerIdentifier;
    /**
     * Expiration Date
     * @var string $expirationDate public property
     */
    public $expirationDate;
    /**
     * Label
     * @var string $label public property
     */
    public $label;
    /**
     * Last Four Digits
     * @var string $lastFourDigits public property
     */
    public $lastFourDigits;
    /**
     * Status
     * @var string $status public property
     */
    public $status;
    /**
     * Token
     * @var string $token public property
     */
    public $token;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $accountIdentifier                  Initialization value for $this->accountIdentifier
     * @param string                    $activationDate                     Initialization value for $this->activationDate
     * @param string                    $createdDate                        Initialization value for $this->createdDate
     * @param string                    $customerIdentifier                 Initialization value for $this->customerIdentifier
     * @param string                    $expirationDate                     Initialization value for $this->expirationDate
     * @param string                    $label                              Initialization value for $this->label
     * @param string                    $lastFourDigits                     Initialization value for $this->lastFourDigits
     * @param string                    $status                             Initialization value for $this->status
     * @param string                    $token                              Initialization value for $this->token
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->accountIdentifier                = func_get_arg(0);
            $this->activationDate                   = func_get_arg(1);
            $this->createdDate                      = func_get_arg(2);
            $this->customerIdentifier               = func_get_arg(3);
            $this->expirationDate                   = func_get_arg(4);
            $this->label                            = func_get_arg(5);
            $this->lastFourDigits                   = func_get_arg(6);
            $this->status                           = func_get_arg(7);
            $this->token                            = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accountIdentifier']              = $this->accountIdentifier;
        $json['activationDate']                 = $this->activationDate;
        $json['createdDate']                    = $this->createdDate;
        $json['customerIdentifier']             = $this->customerIdentifier;
        $json['expirationDate']                 = $this->expirationDate;
        $json['label']                          = $this->label;
        $json['lastFourDigits']                 = $this->lastFourDigits;
        $json['status']                         = $this->status;
        $json['token']                          = $this->token;

        return $json;
    }
}