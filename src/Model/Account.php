<?php

/**
 * An Account
 * 
 * @category  Libraries
 * @package   CMS
 * @author    Michel Zehnder <michel.zehnder@quadrotech-it.com>
 * @copyright 2018 Quadrotech Solutions AG
 * @license   https://www.quadrotech-it.com NONE
 * @version   Release: 1.0
 * @link      https://www.quadrotech-it.com
 */
class Account implements JsonSerializable
{
    private $_id;
    private $_name;
    private $_createdOnUtc;
    private $_updatedOnUtc;
    private $_azureAdTenantId;
    private $_parentAccount;
    private $_qtSalesOwner;
    private $_navCustomerId;
    private $_accountType;
    private $_numberOfMailboxes;
    private $_actualO365Licences;
    private $_hasActiveSubscriptions;
    private $_isDeleted;

    /**
     * Get the ID
     * 
     * @return string
     */
    public function getId() : string
    {
        return $this->_id;
    }

    /**
     * Set the ID
     * 
     * @param string $id The ID to set
     * 
     * @return void
     */
    public function setId($id) : void
    {
        $this->_id = $id;
    }

    /**
     * Get the Name
     * 
     * @return string
     */
    public function getName() : string
    {
        return $this->_name;
    }

    /**
     * Set the Name
     * 
     * @param string $name The Name to set
     * 
     * @return void
     */
    public function setName($name) : void
    {
        $this->_name = $name;
    }

    /**
     * Get the CreatedOnUtc Date
     * 
     * @return DateTime
     */
    public function getCreatedOnUtc() : DateTime
    {
        return $this->_createdOnUtc;
    }

    /**
     * Set CreatedOnUtc Date
     * 
     * @param DateTime $createdOnUtc The start date to set
     * 
     * @return void
     */
    public function setCreatedOnUtc($createdOnUtc) : void
    {
        $this->_createdOnUtc = $createdOnUtc;
    }

    /**
     * Get the UpdatedOnUtc Date
     * 
     * @return DateTime
     */
    public function getUpdatedOnUtc() : DateTime
    {
        return $this->_updatedOnUtc;
    }

    /**
     * Set UpdatedOnUtc Date
     * 
     * @param DateTime $updatedOnUtc The update date to set
     * 
     * @return void
     */
    public function setUpdatedOnUtc($updatedOnUtc) : void
    {
        $this->_updatedOnUtc = $updatedOnUtc;
    }

    /**
     * Get the AzureAdTenantId
     * 
     * @return string
     */
    public function getAzureAdTenantId() : string
    {
        return $this->_azureAdTenantId;
    }

    /**
     * Set AzureAdTenantId 
     * 
     * @param string $azureAdTenantId The Azure AD Tenant Id to set
     * 
     * @return void
     */
    public function setAzureAdTenantId($azureAdTenantId) : void
    {
        $this->_azureAdTenantId = $azureAdTenantId;
    }

    /**
     * Get the Parent Account
     * 
     * @return string
     */
    public function getParentAccount() : string
    {
        return $this->_parentAccount;
    }

    /**
     * Set the Parent Account 
     * 
     * @param string $parentAccount The Parent Account toset
     * 
     * @return void
     */
    public function setParentAccount($parentAccount) : void
    {
        $this->_parentAccount = $parentAccount;
    }

    /**
     * Get the QT Sales Owner
     *
     * @return string
     */
    public function getQtSalesOwner() : string
    {
        return $this->_qtSalesOwner;
    }

    /**
     * Set the QT Sales Owner
     *
     * @param string $qtSalesOwner The QT Sales Owner to set
     *
     * @return void
     */
    public function setQtSalesOwner($qtSalesOwner) : void
    {
        $this->_qtSalesOwner = $qtSalesOwner;
    }

    /**
     * Get the NAV customer ID
     *
     * @return string
     */
    public function getNavCustomerId() : string
    {
        return $this->_navCustomerId;
    }

    /**
     * Set the NAV customer ID
     *
     * @param string $navCustomerId The NAV customer ID
     *
     * @return void
     */
    public function setNavCustomerId($navCustomerId) : void
    {
        $this->_navCustomerId = $navCustomerId;
    }

    /**
     * Get the Account Type
     *
     * @return int
     */
    public function getAccountType() : int
    {
        return $this->_accountType;
    }

    /**
     * Set the Account Type
     *
     * @param int $accountType The Account Type to set
     *
     * @return void
     */
    public function setAccountType($accountType) : void
    {
        $this->_accountType = $accountType;
    }

    /**
     * Get the Number of Mailboxes
     *
     * @return int
     */
    public function getNumberOfMailboxes() : int
    {
        return $this->_numberOfMailboxes;
    }

    /**
     * Set the Number of Mailboxes
     *
     * @param int $numberOfMailboxes The Number of Mailboxes to set
     *
     * @return void
     */
    public function setNumberOfMailboxes($numberOfMailboxes) : void
    {
        $this->_numberOfMailboxes = $numberOfMailboxes;
    }

    /**
     * Get the Number of Licenses
     *
     * @return int
     */
    public function getActualO365Licences() : int
    {
        return $this->_actualO365Licences;
    }

    /**
     * Set the Number of Licenses
     *
     * @param int $actualO365Licences The Actual Number of O365 Licenses to set
     *
     * @return void
     */
    public function setActualO365Licences($actualO365Licences) : void
    {
        $this->_actualO365Licences = $actualO365Licences;
    }

    /**
     * Get if the Account has Active Subscriptions
     *
     * @return bool
     */
    public function getHasActiveSubscriptions() : bool
    {
        return $this->_hasActiveSubscriptions;
    }

    /**
     * Set the HasActiveSubscriptions
     *
     * @param bool $hasActiveSubscriptions Has active subscriptions to set
     *
     * @return void
     */
    public function setHasActiveSubscriptions($hasActiveSubscriptions) : void
    {
        $this->_hasActiveSubscriptions = $hasActiveSubscriptions;
    }

    /**
     * Get if the Account is Deleted
     *
     * @return bool
     */
    public function getIsDeleted() : bool
    {
        return $this->_isDeleted;
    }

    /**
     * Set if the Account is Deleted
     *
     * @param bool $isDeleted Set IsDeleted
     *
     * @return void
     */
    public function setIsDeleted($isDeleted) : void
    {
        $this->_isDeleted = $isDeleted;
    }

    /**
     * Get JSON Serializable version
     * 
     * @return array JSON Serializable array
     */
    public function jsonSerialize() 
    {
        return [
            'id' => $this->_id,
            'name' => $this->_name,
            'createdOnUtc' =>  $this->_createdOnUtc->format(DateTime::ISO8601),
            'updatedOnUtc' =>  $this->_updatedOnUtc->format(DateTime::ISO8601),
            'azureAdTenantId' =>  $this->_azureAdTenantId,
            'parentAccount' =>  $this->_parentAccount,
            'qtSalesOwner' =>  $this->_qtSalesOwner,
            'navCustomerId' =>  $this->_navCustomerId,
            'accountType' =>  $this->_accountType,
            'numberOfMailboxes' =>  $this->_numberOfMailboxes,
            'actualO365Licences' =>  $this->_actualO365Licences,
            'hasActiveSubscriptions' =>  $this->_hasActiveSubscriptions,
            'isDeleted' =>  $this->_isDeleted
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