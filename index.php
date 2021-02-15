<?php
// Istruzioni:
// Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. 
// Create alcune istanze della classe. 
// Stampate a schermo gli attributi di ogni istanza.
// Per chi non ha fantasia ecco qualche entitá che potete usare:
// Animale, Persona, Casa, Computer, Hotel, Film, Videogioco, Sport, Bicicletta, Veicolo, Nazione etc.


/** FilmCult
 * @author Andmazza
 * @copyright 2021 Andmazza
 * @var string $title
 * @var string $director
 * @var string $year
 * @var string $oscar
 * @var string $poster
 * @var string $genre
 */

class Filmcult {
    public $title;
    public $director;
    public $year;
    public $oscar;
    public $poster;
    public $genre;
    public function __construct(string $title, string $director, int $year, bool $oscar, string $poster, string $genre){
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->oscar = $oscar;
        $this->poster = $poster;
        $this->genre = $genre;
    }
    public function get(){
        $this->title;
        $this->director;
        $this->year;
        $this->oscar;
        $this->poster;
        $this->genre;
  }
}

$lebowski = new Filmcult('Il Grande Lebowski' ,'Joel Coen', 1998, false, "https://upload.wikimedia.org/wikipedia/en/3/35/Biglebowskiposter.jpg", 'Commedy');
$iene = new Filmcult('Le Iene', 'Quentin tarantino', 1992, false, "https://www.rougeetnoirpalermo.it/site/wp-content/uploads/2019/09/Le_Iene_film.jpg", 'Gangster');
$pulp = new Filmcult('Pulp Fiction', 'Quentin tarantino', 1994, false, "https://upload.wikimedia.org/wikipedia/en/3/3b/Pulp_Fiction_%281994%29_poster.jpg", 'Drama');
$jurassic = new Filmcult('Jurassic Park', 'Steven Spielberg', 1993, false, "https://upload.wikimedia.org/wikipedia/en/e/e7/Jurassic_Park_poster.jpg", 'Sci-fi');
$incantata = new Filmcult('La Città Incantata', 'Hayao Miyazaki', 2001, true, "https://pad.mymovies.it/filmclub/2003/04/021/locandina.jpg", 'Fantasy');

$filmCult = [$lebowski, $iene, $pulp, $jurassic, $incantata];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" /> 
    <title>OOP</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }
        p, img{
            margin-bottom: 10px;
        }
        h1{
            margin: 20px 0;
            color: #242424;
            text-align: center;
        }
        h3{
            font-size: 25px;
            margin-bottom: 30px;
        }
        p{
            font-size: 22px;
            font-weight: 600;
            line-height: 1.5;
        }
        .container{
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            height: 100%;
            padding: 10% 0;
            border: 1px solid #242424;
        }
        .card{
            width: calc(100% / 4);
            min-height: max-content;
            padding: 20px;
        }
        .card .content{
            display: flex;
            width: 100%;
            height: 100%;
            padding: 20px 0;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            background: #242424;
            color: #f7f7f7;
        }
        .card .content .poster{
            width: 80%;
        }
        .card .content .poster img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    
    <h1>Cult Movies</h1>
    <div class="container">
    <?php 
        foreach ($filmCult as $film) { 
    ?>
        <div class="card">
            <div class="content">
                <h3> <?php echo $film->title;?> </h3>
                <div class="poster">
                    <img src="<?php echo $film->poster;?>" alt="poster">
                </div>
                <p> <?php echo $film->author;?> </p>
                <p> <?php echo $film->director;?> </p>
                <p> <?php echo $film->year;?> </p>
                <p> <?php echo ($film->oscar?'<i class="fas fa-award"></i>':'');?> </p>
            </div>
        </div>
    <?php
        }
    ?>
</div>

</body>
</html>