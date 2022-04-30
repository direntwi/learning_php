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
    
    class book{
        var $title;
        var $author;
        var $pages;

        function __construct($name)//constructor
        {
            echo "New book Created, written by $name!<br>";
        }
    }//class is the bluueprint for objects. will have attributes and methods

    $book1 = new book("Robert"); //object, instance of a class
    $book1 ->title = "The Sigma Protocol";
    $book1 ->author = "Robert Ludlum";
    $book1 ->pages = 6000;

    // echo "$book1->author<br>";
    // echo "Now for the next one<br>";


    $book2 = new book("Daniel"); //object, instance of a class
    $book2->title = "The English Girl";
    $book2->author = "Daniel Silva";
    $book2 ->pages = 5630;

    // echo $book2->author;

    //we'll create a new class and use its constructor to create class objects
    class autoBookGenerator{
        var $newTitle;
        var $newAuthor;
        var $newPages;

        function __construct($aTitle, $aAuthor, $aPages)
        {
            $this->newTitle = $aTitle;
            $this->newAuthor = $aAuthor;
            $this->newPages = $aPages;

            echo "the new book created is called $aTitle, written by $aAuthor.<br>";

        }


    }

    $book3 = new autoBookGenerator("True Blue", "David Baldacci", 7985);
    $book4 = new autoBookGenerator("The Lovers", "John Conolly", 7654);

    echo "the new book created is called $book3->newTitle, written by $book3->newAuthor.<br>"


    ?>
</body>
</html>