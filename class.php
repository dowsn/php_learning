<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    class Book {
      // var is deprecated so use public
      public $title;
      public $author;
      public $pages;

      function __construct($aTitle, $anAuthor, $aPages) {
        $this->title = $aTitle;
        $this->author = $anAuthor;
        $this->pages = $aPages;
        echo $aTitle." was created and written by ";
      }

      function isLongBook() {
        if($this->pages > 200) {
          return " and this is a long book";
        } else {
          return " and this is a short book";
        }
      }
    }

    $book1 = new Book("New Book","me",400);
    echo $book1->author;
    echo $book1->isLongBook();
    // $book1->title = "HP";
    // // $book1->author = "Rowling";
    // // $book1->pages = "400";

    // echo $book1->author
  ?>

<?php
    class Movie {
      public $title;
      private $rating;

      function __construct($title, $rating) {
        $this->title = $title;
        $this->setRating($rating);
      }

      function __destruct() {
        echo "Destructor: I'm done.";
      }

      function getRating() {
        return $this->rating;
      }

      function setRating($rating) {
        if($rating == 'G' || $ratign == 'PG') {
        $this->rating = $rating;`
      } else {
        $this->rating = "?";
      }
    }
    }

    $movie1 = new Movie("Avengers","PG-13");
    // try to change to allowed values
    echo $movie1->setRating("R");
       // if the rating is private I can't access it, only through getRating
    echo $movie1->getRating();

  ?>


</body>
</html>