<?php
namespace Quadrotech\CMS;

require_once 'Model/Subscription.php';
require_once 'Model/Account.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\Promise;
use Psr\Http\Message\ResponseInterface;

/**
 * A simple client for CMS
 * 
 * @category  Libraries
 * @package   CMS
 * @author    Michel Zehnder <michel.zehnder@quadrotech-it.com>
 * @copyright 2018 Quadrotech Solutions AG
 * @license   https://www.quadrotech-it.com NONE
 * @version   Release: 1.0
 * @link      https://www.quadrotech-it.com
 */
class CMSClient
{
    /**
     * Access Token
     * 
     * @var string $accessToken
     */
    public $accessToken;

    /**
     * CMS Host
     * 
     * @var string
     */
    public $cmsHost;

    /**
     * Initialize
     * 
     * @param string $cmsHost     CMS Host
     * @param string $accessToken Access Token
     */
    public function __construct($cmsHost, $accessToken)
    {
        $this->cmsHost = $cmsHost;
        $this->accessToken = $accessToken;
    }

    /**
     * Retrieve a Subscription
     * 
     * @param string $accountId The account ID to query subscriptions for
     * 
     * @return Subscription[] Subscriptions
     */
    public function getSubscriptions($accountId) : stdClass 
    {
        return $this->_retrieve('accounts/' . $accountId . '/subscriptions', 200);
    }

    /**
     * Add a Subscription
     * 
     * @param Subscription $subscription The subscription to add
     * 
     * @return void
     */
    public function addSubscription($subscription) : void
    {
        $this->_validateState();
        $client = $this->_getClient();

        $client
            ->postAsync('subscriptions', ['json' => $subscription->jsonSerialize()])
            ->then(
                function (ResponseInterface $res) {
                    $statusCode = $res->getStatusCode();

                    if ($statusCode != 201) {
                        throw new Exception("Something went wrong. We got Status Code [".$statusCode."] instead of 201");
                    }
                },
                function (RequestException $e) {
                    // echo $e->getMessage() . "\n";
                    // echo $e->getRequest()->getMethod();
                     echo $e->getResponse()->getBody();
                     throw new Exception("Something went wrong." . $e->getMessage());
                }
            )
            ->wait();
    }

    /**
     * Retrieve account by ID
     * 
     * @param string $accountId The Account ID (GUID)
     * 
     * @return Account[] Accounts
     */
    public function getAccount($accountId) : stdClass
    {
        return $this->_retrieve('accounts/' . $accountId, 200);
    }

    /**
     * Retrieve account by Name
     * 
     * @param string $accountName The Account Name
     * 
     * @return Account[] Accounts
     */
    public function getAccountByName($accountName)
    {
        return $this->_retrieve('accounts/' . $accountName, 200);
    }

    /**
     * Retrieve items from a web api
     * 
     * @param string $url                URL to query
     * @param int    $expectedStatusCode The expected Status Code for success
     * 
     * @return stdClass An object with the result
     */
    private function _retrieve($url, $expectedStatusCode) : stdClass
    {
        $this->_validateState();
        $client = $this->_getClient();

        return $client
            ->getAsync($url)
            ->then(
                function (ResponseInterface $res) use ($expectedStatusCode) {
                    $statusCode = $res->getStatusCode();

                    if ($statusCode != $expectedStatusCode) {
                        throw new Exception("Something went wrong. We got Status Code [".$statusCode."] instead of ". $expectedStatusCode);
                    }

                    $body = $res->getBody();
                    return json_decode($body);
                },
                function (RequestException $e) {
                    // echo $e->getMessage() . "\n";
                    // echo $e->getRequest()->getMethod();
                     echo $e->getResponse()->getBody();
                     throw new Exception("Something went wrong." . $e->getMessage());
                }
            )
            ->wait();
    }

    /**
     * Get a GuzzleHttpClient
     * 
     * @return Client Guzzle HTTP Client
     */
    private function _getClient()
    {
        $headers = [
            'Authorization' => 'Bearer ' . $this->accessToken,        
            'Accept'        => 'application/json',
        ];

        return new \GuzzleHttp\Client(
            [
            'base_uri' => $this->cmsHost . '/api/v1.0/',
            'headers' => $headers
            ]
        );
    }

    /**
     * Validate that all the required variables are set
     *
     * @return -
     */
    private function _validateState()
    {
        if (is_null($this->cmsHost)) {
            throw new Exception("Variable cmsHost must be set");
        }

        if (is_null($this->accessToken)) {
            throw new Exception("Variable accessToken must be set");
        }
    }
}

?>