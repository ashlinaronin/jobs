<?php
class Contact
{
    private $info = array(
        "phone" ==> 0,
        "address" ==> "",
        "hairColor" ==> "",
        "email" ==> "",
        "ssn" ==> int,
        "bdayMonth" ==> 0,
        "bdayDay" ==> 0,
        "bdayYear" ==> 0,
    );


    // setters
    function setPhone($new_phone) {
        $this->info["phone"] = (int) $new_phone;
    }

    function setAddress($new_address) {
        $this->info["address"] = (string) $new_address;
    }

    function setEmail($new_email) {
        $this->info["email"] = (string) $new_email;
    }

    // getters
    function getName() {
        return $this->info["name"];
    }

    function getPhone() {
        return $this->info["phone"];
    }

    function getAddress() {
        return $this->info["address"];
    }

    function getHairColor() {
        return $this->info["hairColor"];
    }

    function getEmail() {
        return $this->info["email"];
    }

    function getSSN() {
        return $this->info["ssn"];
    }

    function getBdayMonth() {
        return $this->info["bdayMonth"];
    }

    function getBdayDay() {
        return $this->info["bdayDay"];
    }

    function getBdayYear() {
        return $this->info["bdayYear"];
    }
}
?>
