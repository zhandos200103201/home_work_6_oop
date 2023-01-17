<?php

class Engine
{
    private $_power;
    private $_company;

    public function __construct($_company, $_power){
        $this->_company = $_company;
        $this->_power = $_power;
    }

    public function getCompany()
    {
        return $this->_company;
    }
    public function getPower()
    {
        return $this->_power;
    }

    public function __toString(){
        return "Company name is ".$this->getCompany()." and it has ".$this->getPower()." power!";
    }
}