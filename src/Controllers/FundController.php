<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Controllers;


use RaasLib\APIHelper;
use RaasLib\Configuration;
use RaasLib\Http\HttpContext;
use RaasLib\Http\HttpMethod;
use RaasLib\Http\HttpRequest;
use RaasLib\Http\HttpResponse;
use RaasLib\Models;
use Unirest\Request;

/**
 *
 */
class FundController extends BaseController
{
    /**
     * @var OrdersController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return OrdersController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Gets all credit card under the platform
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAllCredictCard()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/creditCards';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'TangoCardv2NGSDK',
            'Accept'        => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$platformName, Configuration::$platformKey);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'RaasLib\\Models\\CreditCardModel');
    }

    /**
     * Register a new Credit Card
     *
     * @param Models\CreateCreditCardRequestModel $body Request Body
     * @return Models\CreditCardModel|mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function registerNewCredicCard($body){

        //check that all required arguments are provided
        if (!isset($body)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/creditCards';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'TangoCardv2NGSDK',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$platformName, Configuration::$platformKey);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($body));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'RaasLib\\Models\\CreditCardModel');
    }

    /**
     * Register a new Credit Card
     *
     * @param Models\UnregisterCreditCardRequestModel $body Request Body
     * @return Models\UnregisterCreditCardResponseModel|mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function unregisterNewCredicCard($body){

        //check that all required arguments are provided
        if (!isset($body)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/creditCardUnregisters';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'TangoCardv2NGSDK',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$platformName, Configuration::$platformKey);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($body));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'RaasLib\\Models\\UnregisterCreditCardResponseModel');
    }

    /**
     * Fund an account
     *
     * @param Models\FundAccountRequestModel $body Request Body
     * @return Models\DepositModel|mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function fundAnAccount($body){

        //check that all required arguments are provided
        if (!isset($body)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/creditCardDeposits';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'TangoCardv2NGSDK',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$platformName, Configuration::$platformKey);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($body));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'RaasLib\\Models\\DepositModel');
    }
}
