<?php

namespace Data\DataJSON;

class data {
    private $id;
    private $index;
    private $guid;
    private $isActive;
    private $balance;
    private $picture;
    private $age;
    private $eyeColor;
    private $name;
    private $gender;
    private $company;
    private $email;
    private $phone;
    private $address;
    private $about;
    private $registered;
    private $latitude;
    private $longitude;

    public function __construct(
        string $id,
        int $index,
        string $guid,
        string $isActive,
        string $balance,
        string $picture,
        int $age,
        string $eyeColor,
        string $name,
        string $gender,
        string $company,
        string $email,
        string $phone,
        string $address,
        string $about,
        string $registered,
        float $lat,
        float $lng ){
        
        $this->id = $id;
        $this->index= $index;
        $this->guid = $guid;
        $this->isActive = $isActive;
        $this->balance = $balance;
        $this->picture = $picture;
        $this->age = $age;
        $this->eyeColor = $eyeColor;
        $this->name = $name;
        $this->gender = $gender;
        $this->company = $company;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->about = $about;
        $this->registered = $registered;
        $this->latitude = $lat;
        $this->longitude = $lng;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "$this->id, $this->index, $this->guid, $this->isActive, $this->balance, $this->picture, $this->picture, $this->age, $this->eyeColor, $this->name, $this->name, $this->gender, $this->company, $this->email, $this->email, $this->phone, $this->address, $this->about, $this->registered, { $this->latitude, $this->longitude}";
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * @param int $index
     */
    public function setIndex(int $index)
    {
        $this->index = $index;
    }

    /**
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
    }

    /**
     * @param string $guid
     */
    public function setGuid(string $guid)
    {
        $this->guid = $guid;
    }

    /**
     * @return string
     */
    public function getisActive(): string
    {
        return $this->isActive;
    }

    /**
     * @param string $isActive
     */
    public function setIsActive(string $isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return string
     */
    public function getBalance(): string
    {
        return $this->balance;
    }

    /**
     * @param string $balance
     */
    public function setBalance(string $balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return string
     */
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture(string $picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getEyeColor(): string
    {
        return $this->eyeColor;
    }

    /**
     * @param string $eyeColor
     */
    public function setEyeColor(string $eyeColor)
    {
        $this->eyeColor = $eyeColor;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany(string $company)
    {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAbout(): string
    {
        return $this->about;
    }

    /**
     * @param string $about
     */
    public function setAbout(string $about)
    {
        $this->about = $about;
    }

    /**
     * @return string
     */
    public function getRegistered(): string
    {
        return $this->registered;
    }

    /**
     * @param string $registered
     */
    public function setRegistered(string $registered)
    {
        $this->registered = $registered;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude)
    {
        $this->longitude = $longitude;
    }




}