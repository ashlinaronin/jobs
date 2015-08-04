<?php
class Contact
{
    private $info = array(
        "phone" => 0,
        "address" => "",
        "hair_color" => "",
        "email" => "",
        "ssn" => 0,
        "bday_month" => 0,
        "bday_day" => 0,
        "bday_year" => 0,
    );

    function __construct($contact_phone, $contact_address, $contact_hair_color, $contact_email, $contact_ssn, $contact_bday_month, $contact_bday_day, $contact_bday_year)
    {
        $this->info["phone"] = (int) $contact_phone;
        $this->info["address"] = (string) $contact_address;
        $this->info["email"] = (string) $contact_email;
        $this->info["ssn"] = (int) $contact_ssn;
        $this->info["bday_month"] = (int) $contact_bday_month;
        $this->info["bday_day"] = (int) $contact_bday_day;
        $this->info["bday_year"] = (int) $contact_bday_year;
    }


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
        return $this->info["hair_color"];
    }

    function getEmail() {
        return $this->info["email"];
    }

    function getSSN() {
        return $this->info["ssn"];
    }

    function getBdayMonth() {
        return $this->info["bday_month"];
    }

    function getBdayDay() {
        return $this->info["bday_day"];
    }

    function getBdayYear() {
        return $this->info["bday_year"];
    }
}
?>
