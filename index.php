
<?php
class Movie
{
    public $title;
    public $director;
    public $year;

    function __construct($title, $director, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    function get_title()
    {
        return $this->title;
    }
}

$movie1 = new Movie("The Shawshank Redemption", "Frank Darabont", "1994");
$movie2 = new Movie("The Godfather", "Francis Ford Coppola", "1972");

echo "Title: " . $movie1->get_title() . "<br>";
echo "Director: " . $movie1->director . "<br>";
echo "Year: " . $movie1->year . "<br><br>";

echo "Title: " . $movie2->get_title() . "<br>";
echo "Director: " . $movie2->director . "<br>";
echo "Year: " . $movie2->year . "<br>";
?>