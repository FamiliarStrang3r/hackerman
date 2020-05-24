<?php

class User
{
    public $name;
    public $score;
    public $avatarLink;
    
    function __construct($name, $score, $avatarLink)
    {
        $this->name = $name;
        $this->score = $score;
        $this->avatarLink = $avatarLink;
    }
}


$users = array();
$users[] = new User("sasha", 100, "link1");
$users[] = new User("dima", 200, "link2");

echo json_encode($users);

?>