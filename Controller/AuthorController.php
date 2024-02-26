<?php
declare(strict_types=1);

class AuthorController
{
    public function index()
    {
        $authors=$this->getAuthors();
        require 'View/authors/index.php';
    }

    public function show()
    {
        $name = $_GET['name'] ?? null;
        $authors=$this->getAuthors();
        $selectedAuthor = array_search($name,  array_column($authors, 'name'));
        $author = $authors[$selectedAuthor];
        $selectedArticles = (new ArticleController())->showFromAuthor();
        require 'View/authors/show.php';
    }

    private function getAuthors()
    {
        require("./Connect/mvcDB.php");
        $rawAuthors=[];
        $statement = $bdd->prepare('SELECT name, description FROM authors');
        $statement->execute();
        $rawAuthors=$statement->fetchAll();

        $authors=[];

        foreach ($rawAuthors as $rawAuthor) 
        {
            $authors[]=new Author($rawAuthor['name'], $rawAuthor['description']);
        }

        return $authors;
    }
}