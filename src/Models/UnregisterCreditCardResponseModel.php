<?php
/**
 * Created by PhpStorm.
 * User: this
 * Date: 9/17/2017
 * Time: 10:56 PM
 */

namespace RaasLib\Models;


class UnregisterCreditCardResponseModel
{
    /**
     * Created Date
     * @required
     * @var string $createdDate public property
     */
    public $createdDate;

    /**
     * Message
     * @required
     * @var string $message public property
     */
    public $message;

    /**
     * Token
     * @required
     * @var string $token public property
     */
    public $token;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $createdDate    Initialization value for $this->createdDate
     * @param string                    $message        Initialization value for $this->message
     * @param string                    $token          Initialization value for $this->token
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->createdDate          = func_get_arg(0);
            $this->message              = func_get_arg(1);
            $this->token                = func_get_arg(2);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['createdDate']        = $this->createdDate;
        $json['message']            = $this->message;
        $json['token']              = $this->token;

        return $json;
    }
}