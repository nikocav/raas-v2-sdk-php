<?php
/**
 * Created by PhpStorm.
 * User: this
 * Date: 9/18/2017
 * Time: 9:19 AM
 */

namespace RaasLib\Models;


class FundDetailsRequestModel
{
    /**
     * Deposit ID
     * @required
     * @var string $depositId public property
     */
    public $depositId;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $depositId                  Initialization value for $this->depositId
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->depositId                = func_get_arg(0);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['depositId']                              = $this->depositId;

        return $json;
    }
}