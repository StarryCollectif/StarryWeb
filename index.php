<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Starry</title>
</head>
<body>
	<?php include 'menu.php'; ?>
 <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h1>Une bonne équipe (Mettre truc sympa team)</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h1>Avec des projet innovant (Mettre site awesome)</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h1>Écris dans le plus beaux des language ! (Mettre photo code web) <a href="http://startbootstrap.com">http://startbootstrap.com</a>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>

    <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-check-circle"></i> Un collectif de pasioné</h3>
                  <article>
                  	Toute l'équipe de Starry , est avant tout passioné par le web et les nouvelle techno !
                  </article>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-pencil"></i> Un code écris avec amoure !</h3>
                   <article>L'amour fait que nos code sont unique ! Comme dirrais une certaine série "Friend ship is magic". C'est pour ça que notre code est si exceptionel il est fait avec amour.</article>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-folder-open"></i> Déjà plusieur projet</h3>
                    <article>Nos somme fort d'experience par les qu'elle que projet que nous avons pue faire chaqu'in dans notre coin ou même avec Starry.</article>
                </div>
            </div>
            <!-- /.row -->

        </div>
	<?php include 'footer.php'; ?>
</body>
</html>