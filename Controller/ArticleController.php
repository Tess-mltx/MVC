<?php

declare(strict_types = 1);

class ArticleController
{
    public function index()
    {
        // Load all required data
        $articles = $this->getArticles();

        // Load the view
        require 'View/articles/index.php';
    }

    // Note: this function can also be used in a repository - the choice is yours
    private function getArticles(){
        // DONE : prepare the database connection
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root','');
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        // DONE : fetch all articles as $rawArticles (as a simple array)
        $rawArticles = [];
        $statement = $bdd->prepare('SELECT title, description, publish_date, author FROM articles');
        $statement->execute(); // Corrected line
        $rawArticles = $statement->fetchAll();
            
        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date'], $rawArticle['author']);
        }

        return $articles;
    }

    public function show(){
        // DONE: this can be used for a detail page
        $title = $_GET['title'] ?? null; // récupèrer le titre dans l'url
        $articles = $this->getArticles();
        $selectedArticle = array_search($title,  array_column($articles, 'title'));
        $article = $articles[$selectedArticle];

        $prevIndex = ($selectedArticle > 0) ? $selectedArticle - 1 : 0;
        $prevArticle = $articles[$prevIndex];
        $nextIndex = ($selectedArticle < count($articles) - 1) ? $selectedArticle + 1 : 0;
        $nextArticle = $articles[$nextIndex];
        require 'View/articles/show.php';
    }
}
