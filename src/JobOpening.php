<?php

class JobOpening {
    private $title;
    private $descript;
    private $pay;
    private $contact;

    function setPay($new_pay)
    {
        $this->pay = (float) $new_pay;
    }

/*    function setContact($new_contact) {
        $this->contact =
    }
*/

    function getTitle()
    {
        return $this->title;
    }

    function getDescript()
    {
        return $this->descript;
    }

    function getPay()
    {
        return $this->pay;
    }

    function getContact()
    {
        return $this->contact;
    }
    function __construct($job_title, $job_descript, $job_pay, $job_contact)
    {
        // $contact parameter must be instance of Contact class
        $this->title = $job_title;
        $this->descript = $job_descript;
        $this->pay = $job_pay;
        $this->contact = $job_contact;
    }
}


?>
