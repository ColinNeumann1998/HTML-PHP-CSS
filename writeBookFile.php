<html>
<head>

<title> User's Book's </title>
<link rel = "stylesheet" type = "text/css" href = "readBookFile.css"/>

</head>

<body>

<?php
$book = $_POST["book_name"];
$author = $_POST["author_name"];
$isbn = $_POST["isbn_name"];
$genre = $_POST["genre_name"];
$file_name = "book.txt";

$myfile = fopen("/afs/umbc.edu/users/c/n/cneuman1/pub/text-files/book.txt", "a") or die ("Error - could not open file");

// Add new data
fwrite ($myfile, $book.", ");
fwrite ($myfile, $author. ", ");
fwrite ($myfile, $isbn. ", ");
fwrite ($myfile, $genre. ", ");
fclose ($myfile);
?>

<p> 
The book you selected was <?php echo $book ?>. The author of the book was <?php echo $author ?>. 
The designated International Standard Book Number for the book was <?php echo $isbn?>. Finally, the genre of the book was <?php echo $genre ?>. <br />
</p>

<?php 
echo "Thank you". "<br>";
echo '<a href = "book.html"> Go back to enter more book details. </a>';
?>
</body>
</html>
