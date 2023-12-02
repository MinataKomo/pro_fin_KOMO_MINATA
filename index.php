<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="stylesheets/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

</head>
<body>
<?php include('na.php') ?>
<?php include('actu.php') ?>
    <header>
      
    </header><br><br>
    <!-- presentation -->
    <h1 class="h">Presentation</h1><br>
    <br><br>
 

    <section class="presentation">
        
    <div>
                    <div class="img"><img src="image/fleur-de-coton-coton-coton-tige-he38cw.jpg" alt=""></div>
                    <div class="p">
                        <p>Le coton est doux, résistant et absorbant. Il met longtemps à sécher et peut moisir. Confortable et hypoallergénique, on l’utilise pour produire des serviettes de bains, des peignoirs ou des t-shirts. Il est très utilisé dans l’industrie textile car son coût de production est faible.</p>
                    </div>
        </div>
        <div>
            <div class="p">
               <p>Le coton est doux, résistant et absorbant. Il met longtemps à sécher et peut moisir. Confortable et hypoallergénique, on l’utilise pour produire des serviettes de bains, des peignoirs ou des t-shirts. Il est très utilisé dans l’industrie textile car son coût de production est faible.</p>
            </div>
             <div class="img"><img src="image/bobines-de-fil-de-coton-colorees-pour-crochet.jpg" alt=""></div>
                   
        </div>
        </section>
   
<!-- les taches -->
    <section class="cc-card py-70" id="card">
        <div class="cc-container">
            <div class="card-wrapper">
                <article>
                    <header>
                        <h4>Production</h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolores eius id iusto, maiores nostrum obcaecati quam sed sint? Aliquam
                        aspernatur distinctio, eius excepturi expedita fugiat id iure sapiente totam.</p>
                    <footer><a href="" class="cc-btn btn-mini btn-outline">Voir plus<i class="fas fa-angle-double-right"></i></a></footer>
                </article>
                <article>
                    <header>
                        <h4>Transformation</h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolores eius id iusto, maiores nostrum obcaecati quam sed sint? Aliquam
                        aspernatur distinctio, eius excepturi expedita fugiat id iure sapiente totam.</p>
                    <footer><a href="" class="cc-btn btn-mini btn-outline">Voir plus<i class="fas fa-angle-double-right"></i></a></footer>
                </article>
                <article>
                    <header>
                        <h4>Ventes de produits</h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolores eius id iusto, maiores nostrum obcaecati quam sed sint? Aliquam
                        aspernatur distinctio, eius excepturi expedita fugiat id iure sapiente totam.</p>
                    <footer><a href="" class="cc-btn btn-mini btn-outline">Voir plus<i class="fas fa-angle-double-right"></i></a></footer>
                </article>
            </div>
        </div>
    </section><!-- End cc-card section -->
    <section><?php include('moi.php') ?> </section>




    <section class="mentors py-70 bg-bw" id="mentors">
        <div class="cc-container">
            <div class="mentors-wrapper">
                <header class="section-header"><!-- Mentors header (Title + Desc) -->
                    <h1 class="main-title">Personnels à votre disposition</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem earum molestiae pariatur suscipit vero. At ea hic illum impedit iste,
                        minus natus nemo nostrum perspiciatis reiciendis repudiandae similique temporibus ullam.</p>
                </header><!-- End mentors header -->

                <div class="mentors-container cc-row"><!-- Mentors cc-container -->
                    <div class="mentor-box px-15">
                        <div class="box">
                            <div class="mentor-img"><img src="image/s.jpg" alt="Mentor" class="img img-rounded"></div>
                            <h4 class="l4-title">Yoda</h4>
                            <p>Producteur</p>
                        </div>
                    </div>
                    <div class="mentor-box px-15">
                        <div class="box">
                            <div class="mentor-img"><img src="image/s2.webp" alt="Mentor" class="img img-rounded"></div>
                            <h4 class="l4-title">Yoda</h4>
                            <p>Transformateur</p>
                        </div>
                    </div>
                    <div class="mentor-box px-15">
                        <div class="box">
                            <div class="mentor-img"><img src="image/s1.jpg" alt="Mentor" class="img img-rounded"></div>
                            <h4 class="l4-title">Yoda</h4>
                            <p>Producteur</p>
                        </div>
                    </div>
                    <div class="mentor-box px-15">
                        <div class="box">
                            <div class="mentor-img"><img src="image/s3.png" alt="Mentor" class="img img-rounded"></div>
                            <h4 class="l4-title">Yoda</h4>
                            <p>Transformateur</p>
                        </div>
                    </div>
                </div><!-- End mentors cc-container -->
            </div>
        </div>
    </section><!-- End mentors section -->



    
    <section><?php include('footer.php') ?> </section>

    <!-- -->
</body>
</html>