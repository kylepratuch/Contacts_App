<?php

/* Declare the Contact class and the properties each object will have. */

class Contact{

    private $name;
    private $phone;
    private $address;

    /* Constructor method builds each Contact object with the properties as arguments. */

    function __construct($name, $phone, $address) {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }

    /* Getter and setter methods get and set values of private properties. */

    function setName($new_name)
    {
        $this->name = (string) $new_name;
    }

    function getName()
    {
        return $this->name;
    }

    function setPhone($new_phone)
    {
        $this->phone = $new_phone;
    }

    function getPhone();
    {
        return $this->phone;
    }

    function setAddress($new_address)
    {
        $this->address = (string) $new_address;
    }

    function getAddress()
    {
        return $this->address;
    }

    /* Method saves objects as $_SESSION variables. */

    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    /* Method directs app to getAll variables stored in 'list_of_contacts' array. */

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    /* Method clears all saved $_SESSION objects from 'list_of_contacts' array. */

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }

}

 ?>
