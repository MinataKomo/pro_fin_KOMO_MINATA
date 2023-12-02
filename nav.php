<nav>
                <div><a href="index.php"><img src="image/téléchargement.jpg" alt=""></a></div>
                <div class="nav-links" id="navLinks">
                    <i class="fa-solid fa-xmark" style="color: #f316d9;" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">Acueil</a></li>
                        <li><a href="production.php">Production</a></li>
                        <li><a href="transform.php">Transformation</a></li>
                        <li><a href="cv.php">nos produits</a></li>
                        
                        <li><a href="">BLOG</a></li>
                        <li><a href="">CONTACT</a></li>
                    </ul>
    
                </div>
                <i class="fa-solid fa-bars" style="color: #f20ddf;" onclick="showMenu()"></i>
</nav>

            <style>

nav{
     background: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7));
     margin: 0;
     display: flex;
     padding: 1% 4%;
     justify-content: space-between;
     align-items: center;
 }
 nav img{
     width: 100px;
     border-radius: 50%;
 
 }
 .nav-links{
     flex: 1;
     text-align: right;
 }
 .nav-links ul li{
     list-style: none;
     display: inline-block;
     padding: 8px 12px;
     position: relative;
 }
 .nav-links ul li a{
     color: #fff;
     text-decoration: none;
     font-size: 20px;
 }
 .nav-links ul li::after{
     content:'';
     width: 0%;
     height: 2px;
     background: #f44336;
     display: block;
     margin: auto;
 
 }
 .nav-links ul li:hover::after{
     width: 100%;
 }
            </style>