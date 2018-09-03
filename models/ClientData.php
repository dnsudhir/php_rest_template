<?php

require_once 'include/Constants.php';

class ClientData implements JsonSerializable
{

    protected $id;
    
    protected $firstName;

    protected $middleName;

    protected $lastName;

    protected $email;

    protected $mobileNo;

    protected $panNo;

    protected $aadharCard;

    protected $bankAcc;

    protected $ifscCode;

    protected $bankName;

    protected $addressLine1;

    protected $addressLine2;

    protected $district;

    protected $city;

    protected $state;

    protected $pincode;

    protected $created_date;

    protected $updated_date;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     *
     * @return mixed
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     *
     * @return mixed
     */
    public function getMobileNo()
    {
        return $this->mobileNo;
    }

    /**
     *
     * @return mixed
     */
    public function getPanNo()
    {
        return $this->panNo;
    }

    /**
     *
     * @return mixed
     */
    public function getAadharCard()
    {
        return $this->aadharCard;
    }

    /**
     *
     * @return mixed
     */
    public function getBankAcc()
    {
        return $this->bankAcc;
    }

    /**
     *
     * @return mixed
     */
    public function getIfscCode()
    {
        return $this->ifscCode;
    }

    /**
     *
     * @return mixed
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     *
     * @return mixed
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     *
     * @return mixed
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     *
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     *
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     *
     * @return mixed
     */
    public function getPincode()
    {
        return $this->pincode;
    }

    /**
     *
     * @return mixed
     */
    public function getCreated_date()
    {
        return $this->created_date;
    }

    /**
     *
     * @return mixed
     */
    public function getUpdated_date()
    {
        return $this->updated_date;
    }

    /**
     *
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     *
     * @param mixed $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     *
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     *
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     *
     * @param mixed $mobileNo
     */
    public function setMobileNo($mobileNo)
    {
        $this->mobileNo = $mobileNo;
    }

    /**
     *
     * @param mixed $panNo
     */
    public function setPanNo($panNo)
    {
        $this->panNo = $panNo;
    }

    /**
     *
     * @param mixed $aadharCard
     */
    public function setAadharCard($aadharCard)
    {
        $this->aadharCard = $aadharCard;
    }

    /**
     *
     * @param mixed $bankAcc
     */
    public function setBankAcc($bankAcc)
    {
        $this->bankAcc = $bankAcc;
    }

    /**
     *
     * @param mixed $ifscCode
     */
    public function setIfscCode($ifscCode)
    {
        $this->ifscCode = $ifscCode;
    }

    /**
     *
     * @param mixed $bankName
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
    }

    /**
     *
     * @param mixed $addressLine1
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     *
     * @param mixed $addressLine2
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     *
     * @param mixed $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     *
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     *
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     *
     * @param mixed $pincode
     */
    public function setPincode($pincode)
    {
        $this->pincode = $pincode;
    }

    /**
     *
     * @param mixed $created_date
     */
    public function setCreated_date($created_date)
    {
        $this->created_date = $created_date;
    }

    /**
     *
     * @param mixed $updated_date
     */
    public function setUpdated_date($updated_date)
    {
        $this->updated_date = $updated_date;
    }

    public function jsonSerialize()
    {
        return [
            COL_ID => $this->id,
            COL_FIRST_NAME => $this->firstName,
            COL_MIDDLE_NAME => $this->middleName,
            COL_LAST_NAME => $this->lastName,
            COL_EMAIL => $this->email,
            COL_MOBILE_NO => $this->mobileNo,
            COL_PAN_NO => $this->panNo,
            COL_AADHAR_CARD => $this->aadharCard,
            COL_BANK_ACC => $this->bankAcc,
            COL_IFSC_CODE => $this->ifscCode,
            COL_BANK_NAME => $this->bankName,
            COL_ADDRESS_LINE1 => $this->addressLine1,
            COL_ADDRESS_LINE2 => $this->addressLine2,
            COL_DISTRICT => $this->district,
            COL_CITY => $this->city,
            COL_STATE => $this->state,
            COL_PINCODE => $this->pincode,
            COL_CREATED_DATE => $this->created_date,
            COL_UPDATED_DATE => $this->updated_date
        ];
    }
}



















