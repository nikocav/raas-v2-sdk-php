<?php
/**
 * Created by PhpStorm.
 * User: this
 * Date: 9/18/2017
 * Time: 9:19 AM
 */

namespace RaasLib\Models;


class FundAccountRequestModel
{
    /**
     * Account Identifier
     * @required
     * @var string $accountIdentifier public property
     */
    public $accountIdentifier;
    /**
     * Amount
     * @required
     * @var float $amount public property
     */
    public $amount;
    /**
     * Credit Card Token
     * @required
     * @var string $creditCardToken public property
     */
    public $creditCardToken;
    /**
     * Customer Identifier
     * @var string $customerIdentifier public property
     */
    public $customerIdentifier;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $accountIdentifier                  Initialization value for $this->accountIdentifier
     * @param string                    $amount                             Initialization value for $this->amount
     * @param string                    $creditCardToken                    Initialization value for $this->creditCardToken
     * @param string                    $customerIdentifier                 Initialization value for $this->customerIdentifier
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->accountIdentifier                = func_get_arg(0);
            $this->amount                           = func_get_arg(1);
            $this->creditCardToken                  = func_get_arg(2);
            $this->customerIdentifier               = func_get_arg(3);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accountIdentifier']                              = $this->amount;
        $json['amount']                                         = $this->amountCharged;
        $json['creditCardToken']                                = $this->createdDate;
        $json['customerIdentifier']                             = $this->feePercent;

        return $json;
    }
}