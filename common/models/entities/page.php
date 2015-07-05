<?php

class PageEntity extends Entity {
    private $id;
    private $title;
    private $content;

    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = (int)$id;
        return $this;
    }
    
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = strip_tags($title);
        return $this;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = strip_tags($content);
        return $this;
    }
}