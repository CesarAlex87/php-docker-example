<?php
// autor: Ayovi Villafuerte Camillie Thais

class SupportRequest{

    private $requestId, $userId, $requestDate, $language, $subject, $description, $priority, $requestStatus, $status;

    function __construct(){
    }

    public function __get($property){
        return $this->$property;
    }

    public function __set($property, $value){
        $this->$property = $value;
    }
}