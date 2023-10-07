<?php

require_once "../logic/utils.php";//breaker

class Picture{

    private string $title;
    private string $text;
    private array $grid;
    private string $userEmail;

    public function __construct($title, $text, $grid, $userEmail) {
        $this->title = $title;
        $this->text = $text;
        if (Utils::checkHexCodes($grid)) {
            $this->grid = $grid;
        }
        $this->userEmail = $userEmail;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getText(){
        return $this->text;
    }
    public function getGrid(){
        return $this->grid;
    }
    public function getUserEmail(){
        return $this->userEmail;
    }
}