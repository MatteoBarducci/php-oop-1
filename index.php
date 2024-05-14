<?php
class Movie {
    public $title;
    public $language;
    public $release_date;
    public $genre;

    public function __construct($_title, $_language, $_release_date, $_genre) {
        $this->title = $_title;
        $this->language = $_language;
        $this->release_date = $_release_date;
        $this->genre = $_genre;
    }

    public function getMovieInfo() {
        return 'Title: ' . $this->title . ' ' . 'Language: ' . $this->language . ' ' . 'Release Date: ' . $this->release_date . ' ' . 'Genre: ' . $this->genre;
    }

}

$Back_to_the_Future = new Movie ('Back to the Future', 'en', '1985-07-03', 'Science fiction');
$Titanic = new Movie ('Titanic', 'en', '1997-11-18', 'Epic romantic, dramatic');

$movies = [
    $Back_to_the_Future,
    $Titanic
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($movies as $movie) { ?>
        <div>
            <div>Movie info: <?php echo $movie->getMovieInfo(); ?></div>
        </div>
    <?php } ?>
</body>
</html>