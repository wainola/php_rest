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


}