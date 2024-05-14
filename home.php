<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJ_Shopping_Center</title>
    <style>img{border-radius: 20px;}</style>
    <link rel="stylesheet" href="style.css">
    
</head>
<body vlink = "white">
    <header class="header">
        <a href="home.php" class="logo" ><img src="AJ Shopping Center/NEW Logo.jpg" alt="Logo" ></a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="Catigoris.html">Catigoris</a>
                <a href="ShoppingCart.html" >Shopping Cart</a>
                <a href="about.html">About</a>
            </nav>
            <button class="btn" onclick="logOut()">Log Out</button>
            <script src="test.js"></script>
    </header>
    
    <div><p1 style="font-size: x-large;" ><center>Hello customers ! Welcome to AJ Shopping Center.</center></p1></div>
    
    <main>
    <div class="products">
            
            <img src="AJ Shopping Center/airpods/1.jpg" alt="AirpodsPro2">
            <img src="AJ Shopping Center/airpods/53.jpg" alt="GalaxyBuds2Pro">
            <img src="AJ Shopping Center/airpods/2.jpg" alt="Airpods3">
            <img src="AJ Shopping Center/airpods/3.jpg" alt="Airpods2">
            <img src="AJ Shopping Center/airpods/19.jpg" alt="airpods">
            <img src="AJ Shopping Center/airpods/4.jpg" alt="airpods">
            <img src="AJ Shopping Center/airpods/5.jpg" alt="airpods">
            <img src="AJ Shopping Center/airpods/6.jpg" alt="airpods">


            <img src="AJ Shopping Center/smartwatches/13.jpg " alt="smartwatches">
            <img src="AJ Shopping Center/smartwatches/10.jpg" alt="smartwatches">





            <img src="AJ Shopping Center/smartwatches/11.jpg" alt="smartwatches">
            <img src="AJ Shopping Center/smartwatches/12.jpg" alt="smartwatches">
            <img src="AJ Shopping Center/smartwatches/8.jpg" alt="smartwatches">
            <img src="AJ Shopping Center/smartwatches/9.jpg" alt="smartwatches">
            


            <img src="AJ Shopping Center/powerbanks/37.jpg" alt="powerbanks">
            <img src="AJ Shopping Center/powerbanks/38.jpg" alt="powerbanks">
            <img src="AJ Shopping Center/powerbanks/39.jpg" alt="powerbanks"> 
            <img src="AJ Shopping Center/powerbanks/40.jpg" alt="powerbanks">
            <img src="AJ Shopping Center/powerbanks/41.jpg" alt="powerbanks">
            <img src="AJ Shopping Center/powerbanks/42.jpg" alt="powerbanks">
            <img src="AJ Shopping Center/powerbanks/43.jpg" alt="powerbanks">
            <img src="AJ Shopping Center/powerbanks/45.jpg" alt="powerbanks">
            <img src="AJ Shopping Center/powerbanks/46.jpg" alt="powerbanks">
            <img src="AJ Shopping Center/powerbanks/47.jpg" alt="powerbanks">

            <img src="AJ Shopping Center/mouses/26.jpg" alt="mouses">
            <img src="AJ Shopping Center/mouses/27.jpg" alt="mouses">
            <img src="AJ Shopping Center/mouses/28.jpg" alt="mouses">
            <img src="AJ Shopping Center/mouses/29.jpg" alt="mouses">
            

            <img src="AJ Shopping Center/headsets/14.jpg" alt="headsets">
            <img src="AJ Shopping Center/headsets/15.jpg" alt="headsets">
            <img src="AJ Shopping Center/headsets/16.jpg" alt="headsets">
            <img src="AJ Shopping Center/headsets/17.jpg" alt="headsets">
            <img src="AJ Shopping Center/headsets/18.jpg" alt="headsets">
            

            <img src="AJ Shopping Center/distinct items/2 in 1 lamp.jpg" alt="DistinctItems">
            <img src="AJ Shopping Center/distinct items/green lion pouch.jpg" alt="DistinctItems">
            <img src="AJ Shopping Center/distinct items/ps4_controller.jpg" alt="">
            <img src="AJ Shopping Center/distinct items/salem pouch.jpg" alt="DistinctItems">
            <img src="AJ Shopping Center/distinct items/shaver.jpg" alt="DistinctItems">
            <img src="AJ Shopping Center/distinct items/shaver2.jpg" alt="DistinctItems">
            <img src="AJ Shopping Center/distinct items/xo shaver.jpg" alt="DistinctItems">




            </div>
</main>
<script>
    function logOut() {
            // Send an AJAX request to the server to destroy the session
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "logout.php", true);
            xhr.send();

            // Redirect the user to the login page
            window.location.href = "login.php";
        }
</script>

</body>
</html>
