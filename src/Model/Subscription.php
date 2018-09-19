<?php
namespace Quadrotech\CMS\Model;

/**
 * A subscription
 * 
 * @category  Libraries
 * @package   CMS
 * @author    Michel Zehnder <michel.zehnder@quadrotech-it.com>
 * @copyright 2018 Quadrotech Solutions AG
 * @license   https://www.quadrotech-it.com NONE
 * @version   Release: 1.0
 * @link      https://www.quadrotech-it.com
 */
class Subscription implements JsonSerializable
{
    private $_billingType;
    private $_startDate;
    private $_accountId;
    private $_subscriptionTypeId;
    private $_productId;
    private $_endDate;
    private $_transactionType;
    private $_comments;
    private $_navServiceContractId;
    private $_navServiceContractLine;
    private $_licensedUsers;
    private $_dataDeletedDateUtc;
    private $_licensedTb;

    /**
     * Get the Billing Type
     * 
     * @return int
     */
    public function getBillingType() : int
    {
        return $this->_billingType;
    }

    /**
     * Set the Billing Type
     * 
     * @param int $billingType The billing type to set
     * 
     * @return void
     */
    public function setBillingType($billingType) : void
    {
        $this->_billingType = $billingType;
    }

    /**
     * Get the Start Date
     * 
     * @return DateTime
     */
    public function getStartDate() : DateTime
    {
        return $this->_startDate;
    }

    /**
     * Set the Start Date
     * 
     * @param DateTime $startDate The start date to set
     * 
     * @return void
     */
    public function setStartDate($startDate) : void
    {
        $this->_startDate = $startDate;
    }

    /**
     * Get the Account Id
     * 
     * @return int
     */
    public function getAccountId() : string
    {
        return $this->_accountId;
    }

    /**
     * Set the Account Id
     * 
     * @param string $accountId The account id to set
     * 
     * @return void
     */
    public function setAccountId($accountId) : void
    {
        $this->_accountId = $accountId;
    }

    /**
     * Get the Subscription Type
     * 
     * @return int
     */
    public function getSubscriptionTypeId() : int
    {
        return $this->_subscriptionTypeId;
    }

    /**
     * Set the Subscription Type
     * 
     * @param int $subscriptionTypeId The subscription type to set
     * 
     * @return void
     */
    public function setSubscriptionTypeId($subscriptionTypeId) : void
    {
        $this->_subscriptionTypeId = $subscriptionTypeId;
    }

    /**
     * Get the Product Id
     * 
     * @return int
     */
    public function getProductId() : int
    {
        return $this->_productId;
    }

    /**
     * Set the Product Id
     * 
     * @param int $productId The product id to set
     * 
     * @return void
     */
    public function setProductId($productId) : void
    {
        $this->_productId = $productId;
    }

    /**
     * Get the Subscription End Date
     * 
     * @return DateTime
     */
    public function getEndDate() : DateTime
    {
        return $this->_endDate;
    }

    /**
     * Set the Subscription End Date
     * 
     * @param DateTime $endDate The billing type to set
     * 
     * @return void
     */
    public function setEndDate($endDate) : void
    {
        $this->_endDate = $endDate;
    }

    /**
     * Get the Transaction Type
     * 
     * @return int
     */
    public function getTransactionType() : int
    {
        return $this->_transactionType;
    }

    /**
     * Set the Transaction Type
     * 
     * @param int $transactionType The transaction type to set
     * 
     * @return void
     */
    public function setTransactionType($transactionType) : void
    {
        $this->_transactionType = $transactionType;
    }

    /**
     * Get the Comments
     * 
     * @return int
     */
    public function getComments() : int
    {
        return $this->_comments;
    }

    /**
     * Set the Comments
     * 
     * @param int $comments The comments to set
     * 
     * @return void
     */
    public function setComments($comments) : void
    {
        $this->_comments = $comments;
    }

    /**
     * Get the Nav Service Contract Id
     * 
     * @return string
     */
    public function getNavServiceContractId() : string
    {
        return $this->_navServiceContractId;
    }

    /**
     * Set the Nav Service Contract Id
     * 
     * @param string $navServiceContractId The nav service contract id to set
     * 
     * @return void
     */
    public function setNavServiceContractId($navServiceContractId) : void
    {
        $this->_navServiceContractId = $navServiceContractId;
    }
    
    /** 
     * Get the Nav Service Contract Line Item
     * 
     * @return int
     */
    public function getNavServiceContractLine() : int
    {
        return $this->_navServiceContractLine;
    }

    /**
     * Set the Nav Service Contract Line Item
     * 
     * @param int $navServiceContractLine The nav service contract line item to set
     * 
     * @return void
     */
    public function setNavServiceContractLine($navServiceContractLine) : void
    {
        $this->_navServiceContractLine = $navServiceContractLine;
    }

    /**
     * Get the Licensed Users
     * 
     * @return int
     */
    public function getLicensedUsers() : int
    {
        return $this->_licensedUsers;
    }

    /**
     * Set the Licensed Users
     * 
     * @param int $licensedUsers The licensed users to set
     * 
     * @return void
     */
    public function setLicensedUsers($licensedUsers) : void
    {
        $this->_licensedUsers = $licensedUsers;
    }

    /**
     * Get the Data Deleted Date
     * 
     * @return int
     */
    public function getDataDeletedDateUtc() : DateTime
    {
        return $this->_dataDeletedDateUtc;
    }

    /**
     * Set the Data Deleted Date
     * 
     * @param DateTime $dataDeletedDateUtc The date the data was deleted
     * 
     * @return void
     */
    public function setDataDeletedDateUtc($dataDeletedDateUtc) : void
    {
        $this->_dataDeletedDateUtc = $dataDeletedDateUtc;
    }

    /**
     * Get the Licensed TB
     * 
     * @return int
     */
    public function getLicensedTb() : int
    {
        return $this->_licensedTb;
    }

    /**
     * Set the Licensed TB
     * 
     * @param int $licensedTb The licensed TB to set
     * 
     * @return void
     */
    public function setLicensedTb($licensedTb) : void
    {
        $this->_licensedTb = $licensedTb;
    }

    /**
     * Get JSON Serializable version
     * 
     * @return array JSON Serializable array
     */
    public function jsonSerialize() 
    {
        return [
            'billingType' => $this->_billingType,
            'startDate' => !is_null($this->_startDate) ? $this->_startDate->format(DateTime::ISO8601) : null,
            'accountId' => $this->_accountId,
            'subscriptionTypeId' => $this->_subscriptionTypeId,
            'productId' => $this->_productId,
            'endDate' => !is_null($this->_endDate) ? $this->_endDate->format(DateTime::ISO8601) : null,
            'transactionType' => $this->_transactionType,
            'comments' => $this->_comments,
            'navServiceContractId' => $this->_navServiceContractId,
            'navServiceContractLine' => $this->_navServiceContractLine,
            'licensedUsers' => $this->_licensedUsers,
            'dataDeletedDateUtc' => !is_null($this->_dataDeletedDateUtc) ? $this->_dataDeletedDateUtc->format(DateTime::ISO8601) : null,
            'licensedTb' => $this->_licensedTb,
        ];
    }

    /**
     * Constructor, can be used to set data using JSON
     * 
     * @param string $json JSON data
     */
    public function __construct($json = false) 
    {
        if ($json) {
            $this->_set(json_decode($json, true));
        }
    }

    /**
     * Helper function to set values from array
     * 
     * @param string $data JSON data
     * 
     * @return void
     */
    private function _set($data) : void
    {
        foreach ($data AS $key => $value) {
            if (is_array($value)) {
                $sub = new JSONObject;
                $sub->set($value);
                $value = $sub;
            }

            $this->{"_" . $key} = $value;
        }
    }
}

?>