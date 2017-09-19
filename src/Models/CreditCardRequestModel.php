<?php
/**
 * Created by PhpStorm.
 * User: this
 * Date: 9/17/2017
 * Time: 7:03 PM
 */

namespace RaasLib\Models;


class CreditCardRequestModel
{
    /**
     * Expiration
     * @var string $expiration public property
     */
    public $expiration;
    /**
     * Number
     * @var string $number public property
     */
    public $number;
    /**
     * Verification Number
     * @var string $verificationNumber public property
     */
    public $verificationNumber;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $expiration                 Initialization value for $this->expiration
     * @param string                    $number                     Initialization value for $this->number
     * @param string                    $verificationNumber         Initialization value for $this->verificationNumber
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->expiration                         = func_get_arg(0);
            $this->number                             = func_get_arg(1);
            $this->verificationNumber                 = func_get_arg(2);
        }
    }
}