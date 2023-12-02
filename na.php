<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="nav">
    <div class="container">
        <div class="logo">
        <a href="index.php"><img src="image/téléchargement.jpg" alt="">
        </div>
        <div class="main_list" id="mainListDiv">
            <ul>
                <li><a href="production.php">Production</a></li>
                <li><a href="transform.php">Transfor</a></li>
                <!-- <li><a href="cv.php">produit</a></li> -->
                <li><a href="cv.php">Produits</a></li>
                <li><a href="add-new.php">s'inscrire</a></li>
            </ul>
        </div>
        <div class="media_button">
            <button class="main_media_button" id="mediaButton">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>
    
<!-- <section class="home"></section> -->

<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    transition: all 0.4s;
    font-family: -apple-system,
    BlinkMacSystemFont,
    "Segoe UI",
    Roboto,
    Helvetica,
    Arial,
    sans-serif,
    "Apple Color Emoji",
    "Segoe UI Emoji",
    "Segoe UI Symbol";
}

.container{
    
    margin-left: 5%;
    margin-right: 5%;
}

/* Navbar section */

.nav{
    width: 100%;
    height: 65px;
    position: fixed;
    line-height: 65px;
    text-align: center;
    background-color: rgba(0,0,255,1.96);
    z-index: 100;
}

.nav div.logo{
    width: 180px;
    height: 10px;
    position: absolute;
}

.nav div.logo a{
    text-decoration: none;
    color: #fff;
    font-size: 1.8em;
    text-transform: uppercase;
}
.nav img{
    width: 50px;
    border-radius: 50%;
}

.nav div.logo a:hover {
    color: #c0c0c0;
}

.nav div.main_list{
    width: 600px;
    height: 65px;
    float: right;
}

.nav div.main_list ul{
    width:100%;
    height: 65px;
    display: flex;
    list-style: none;
}

.nav div.main_list ul li{
    width: 120px;
    height: 65px;
}

.nav div.main_list ul li a{
    text-decoration: none;
    color: #fff;
    line-height: 65px;
    text-transform: uppercase;
}

.nav div.main_list ul li a:hover{
    color: #c0c0c0;
}

.nav div.media_button {
    width: 100px;
    height: 40px;
    background-color: transparent;
    position: absolute;
    right: 205px;
    top: px;
    display: none;
}

.nav div.media_button button.main_media_button {
    width: 100%;
    height: 100%;
    background-color: transparent;
    color: #000;
    outline: 0;
    border: none;
    cursor: pointer;
}

.nav div.media_button button.main_media_button span{
    width: 98%;
    height: 5px;
    display: block;
    background-color: #fff;
    margin-top: 9px;
    margin-left: 200px;
    margin-bottom: 10px;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(1){
    transform: rotateY(180deg);
    transition: all 0.5s;
    background-color: #c0c0c0;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(2){
    transform: rotateY(180deg);
    transition: all 0.4s;
    background-color: #c0c0c0;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(3){
    transform: rotateY(180deg);
    transition: all 0.3s;
    background-color: #c0c0c0;
}

.nav div.media_button button.active span:nth-of-type(1) {
    transform: rotate3d(0, 0, 1, 45deg);
    position: absolute;
    margin: 0;
}

.nav div.media_button button.active span:nth-of-type(2) {
    display: none;
}

.nav div.media_button button.active span:nth-of-type(3) {
    transform: rotate3d(0, 0, 1, -45deg);
    position: absolute;
    margin: 0;
}

.nav div.media_button button.active:hover span:nth-of-type(1) {
    transform: rotate3d(0, 0, 1, 20deg);
}

.nav div.media_button button.active:hover span:nth-of-type(3) {
    transform: rotate3d(0, 0, 1, -20deg);
}

/* Home section */

.home{
    width: 100%;
    height: 100vh;
    background-color: #ddd;
}

/* Medai qurey section */

@media screen and (min-width: 768px) and (max-width: 1024px) {
    
    .container{
        margin: 0;
    }
    
}




@media screen and (max-width:300px) {
    
    .container{
        margin: 0;
        font-size: 30px;
    }
    
    .nav div.logo{
        margin-left: 15px;
    }
    
    .nav div.main_list{
        width: 100%;
        margin-top: 65px;
        height: 0px;
        overflow: hidden;
    }
    
    .nav div.show_list{
        height: 200px;
    }
    
    .nav div.main_list ul{
        flex-direction: column;
        width: 100%;
        height: 200px;
        top: 80px;
        right: 0;
        left: 0;
    }
    
    .nav div.main_list ul li{
        
        width: 100%;
        height: 40px;
        background-color:rgba(0,0,255,0.8);
    }
    
    .nav div.main_list ul li a{
      text-align: center;
        line-height: 40px;
        width: 100%;
       
        display: table;
        
    }
    
    .nav div.media_button{
        display: block;
        font-size: 20px;
    }
    
}
</style>

<script>
    var mainListDiv = document.getElementById("mainListDiv"),
    mediaButton = document.getElementById("mediaButton");

mediaButton.onclick = function () {
    
    "use strict";
    
    mainListDiv.classList.toggle("show_list");
    

    }
</script>
</body>
</html>