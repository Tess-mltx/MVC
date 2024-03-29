<?php

declare(strict_types=1);

class Article
{
    public string $title;
    public ?string $description;
    public ?string $publishDate;
    public string $author;

    public function __construct(string $title, ?string $description, ?string $publishDate, string $author)
    {
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
        $this->author = $author;
    }

    public function formatPublishDate($format = 'D-M-Y')
    {
        // DONE : return the date in the required format
        $dateTime = new DateTime($this->publishDate);
        
        return $dateTime->format($format);;
    }
}