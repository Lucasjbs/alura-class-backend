<?php

namespace Class\Bank\Model;

class Address
{
    private $city;
    private $district;
    private $street;
    private $number;

    public function __construct(string $city, string $district, string $street, string $number)
    {
        $this->city = $city;
        $this->district = $district;
        $this->street = $street;
        $this->number = $number;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function __toString(): string
    {
        return "{$this->street}, {$this->number}, {$this->district}, {$this->city}";
    }
}