<?php

namespace models;

class Advertisement
{
    private $id;
    private $userid;
    private $title;
    private $userName;

    public function __construct($id, $userid, $title){
        $this->id = $id;
        $this->userid = $userid;
        $this->title = $title;
    }

    public function getId(){
        return $this->id;
    }
    public function getUserid(){
        return $this->userid;
    }
    public function getTitle(){
        return $this->title;
    }

    public function getUserName(){
        return $this->userName;
    }
    public function setUserName($userName){
        $this->userName = $userName;
    }
}