<?php


namespace App\Http\Controllers;
//const UNDEFINED_STRING = 'undefined';

class Post
{


    private string $slug;
    private string $head;
    private string $text;

    public function __construct(string $slug, string $head, string $text){
        $this->slug = $slug;
        $this->head = $head;
        $this->text = $text;
    }

    public function setSlug(string $slug){
        $this->slug = $slug;
    }
    public function getSlug (): string {
        return $this->slug;
    }

    public function setHead(string $head){
        $this->head = $head;
    }
    public function getHead (): string {
        return $this->head;
    }

    public function setText(string $text){
        $this->text = $text;
    }
    public function getText (): string {
        return $this->text;
    }
}
