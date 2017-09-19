<?php
/**
 * Created by PhpStorm.
 * User: this
 * Date: 9/18/2017
 * Time: 9:19 AM
 */

namespace RaasLib\Models;


class DepositModel
{
    /**
     * Amount
     * @required
     * @var float $amount public property
     */
    public $amount;
    /**
     * Amount Charged
     * @required
     * @var string $amountCharged public property
     */
    public $amountCharged;
    /**
     * Created Date
     * @var string $createdDate public property
     */
    public $createdDate;
    /**
     * Fee Percent
     * @var string feePercent public property
     */
    public $feePercent;
    /**
     * Reference Deposit ID
     * @var string $referenceDepositID public property
     */
    public $referenceDepositID;

    /**
     * Status
     * @var string $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $amount                             Initialization value for $this->amount
     * @param string                    $amountCharged                      Initialization value for $this->amountCharged
     * @param string                    $createdDate                        Initialization value for $this->createdDate
     * @param string                    $feePercent                         Initialization value for $this->feePercent
     * @param string                    $referenceDepositID                 Initialization value for $this->referenceDepositID
     * @param string                    $status                             Initialization value for $this->status
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->amount                           = func_get_arg(0);
            $this->amountCharged                    = func_get_arg(1);
            $this->createdDate                      = func_get_arg(2);
            $this->feePercent                       = func_get_arg(3);
            $this->referenceDepositID               = func_get_arg(4);
            $this->status                           = func_get_arg(5);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['amount']                             = $this->amount;
        $json['amountCharged']                      = $this->amountCharged;
        $json['createdDate']                        = $this->createdDate;
        $json['feePercent']                         = $this->feePercent;
        $json['referenceDepositID']                 = $this->referenceDepositID;
        $json['status']                             = $this->status;

        return $json;
    }
}