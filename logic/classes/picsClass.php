<?php

require_once "../config.php";//breaker

class Pics{

    private string $title;
    private string $text;
    private array $grid;

    public function __construct($title, $text, $grid) {
        $this->title = $title;
        $this->text = $text;
        $this->grid = preg_grep(Config::HEX_REGEX, $grid);
    }

    public function getTitle(){
        return $this->email;
    }
    public function getText(){
        return $this->password;
    }
    public function getGrid(){
        return $this->name;
    }
}