<?php
  class Contact
  {
    private $name;
    private $StreetAddress;
    private $PhoneNumber;
    private $EmailAddress;
    function __construct($name = 'unknown', $StreetAddress = 'unknown', $PhoneNumber = 'unknown', $EmailAddress = 'unknown')
    {
      $this->name = $name;
      
      $this->StreetAddress = $StreetAddress;
      
      $this->PhoneNumber = $PhoneNumber;
      
      $this->EmailAddress = $EmailAddress;
    }
    function getname()
    {
      return $this->name;
    }
    function setname($new_name)
    {
      $this->name = $new_name;
    }
    function getStreetAddress()
    {
      return $this->StreetAddress;
    }
    function setStreetAddress($new_StreetAddress)
    {
      $this->StreetAddress = $new_StreetAddress;
    }
    function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }
    function setPhoneNumber($new_PhoneNumber)
    {
      $this->PhoneNumber = $new_PhoneNumber;
    }
    function getEmailAddress()
    {
      return $this->EmailAddress;
    }
    function setEmailAddress($new_EmailAddress)
    {
      $this->EmailAddress = $new_EmailAddress;
    }
    static function clear()
    {
      $_SESSION['contacts'] = array();
    }
  }
?>
