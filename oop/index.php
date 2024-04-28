<?php 

require_once "Book.php";//vklucuvame ja php vaka 
//sega tuka mozeme kolku sakame da pisuvame html kod istoto e dozvoleno



//$book = new Book();//kreirame nov objekt 
$book = new Book("6 prasinja","Martin Ristov");
//var_dump($book);
//$book->readBook();
//echo '"'.$book->title.'"';
//echo "-";
//echo $book->author;
//echo $book->title;
//echo "<br>";
//echo $book->getTitle();
echo "<br>";
//$book->setTitle("Martin");
echo $book->getTitle();
echo $book->getAuthor();


?>