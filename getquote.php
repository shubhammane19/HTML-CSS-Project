<?php
// $con = mysqli_connect('localhost', 'root', 'root','mini_project');
if(isset($_POST['submit'])){
    $txtName = $_POST['txtName'];
    $txtEmail = $_POST['txtEmail'];
    $txtPhone = $_POST['txtPhone'];
    $txtMessage = $_POST['txtdesc'];

    $host = 'locahost';
    $user = 'root';
    $pass = '';
    $dbname = 'mini_project';
    
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql = "INSERT INTO get_quote(Name, Number, Email, Description) values('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
    mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Vitthal Textiles Pvt. Ltd.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ultra&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+13px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="MINI-PROJECT.css">
</head>

<body style="height: max-content;">
    <div class="overlay"></div>
    <div class="get-quote">
        <span onclick="hideModal()">&times;</span>
        <form action="getquote.php">
            <div>
                <!-- <label for="">Name</label> -->
                <input type="text" placeholder="Name" name="txtName">
            </div>
            <div>
                <!-- <label for="">Number</label> -->
                <input type="text" placeholder="Number" name="txtPhone">
            </div>
            <div>
                <!-- <label for="">Email</label> -->
                <input type="email" placeholder="Email" name="txtEmail">
            </div>
            <div>
                <!-- <label for="">How can we help you</label> -->
                <textarea name="txtdesc" id="" cols="30" rows="10" placeholder="How can we help you"></textarea>
            </div>
            <button name="submit">GET QUOTE</button>
        </form>
    </div>
    <div class="head">
        <div class="left-menu">
            <div id="Close">
                <i id="cross" class="fa-solid fa-bars" style="color:#88b06a"></i>
            </div>
            <div>
                <button id="top-heading">
                    Vitthal Textile Pvt. Ltd
                </button>
            </div>
        </div>
        <div class="links">
            <button class="top-buttons" onclick="window.location.href = 'login-page.html';">Login</button>
            <span style="color: #88b06a;">|</span>
            <button class="top-buttons" onclick="window.location.href = 'sign-up.html';">Sign up</button>
            <span style="color: #88b06a;">|</span>
            <button class="top-buttons" onclick="window.location.href = 'photos.html'">Gallery</button>
            <span style="color: #88b06a;">|</span>
            <button class="top-buttons"
                onclick="window.location.href = 'https://www.google.com/maps/place/Vitthal+Textile+Pvt.+Ltd./@21.32799,74.95592,17z/data=!4m6!3m5!1s0x3bdf2d3075fed54b:0x44b62f34d145ad90!8m2!3d21.3279896!4d74.95592!16s%2Fg%2F11df7q7gk9?hl=en'">Get
                Directions</button>
        </div>
    </div>
    <div class="main">
        <p id="title">Vitthal Textile Pvt. Ltd.</p>
        <div>
            <p class="sub-text">Textile Mill in Tande</p>
            <p class="sub-text">Tande, Maharashtra</p>
        </div>
        <button for="" id="main-button" style=" font-size: large;" onclick="showModal()">
            GET QUOTE
        </button>
        <img src="cover-image.jpg" alt="">
    </div>
    <div class="testimonials">
        <p id="test"><span id="underscore">__________</span> TESTIMONIALS</p>
        <div class="reviews">
            <div class="reviwe-gap">
                <p> <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> 4 years ago <strong> &#8942;</strong>
                </p>
                <p class="comment">"Good"</p>
                <p class="name">- Rupali R</p>
            </div>
            <div class="reviwe-gap">
                <p> <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> 4 years ago <strong> &#8942;</strong>
                </p>
                <!-- <p class="comment">"Good"</p> -->
                <p class="name">- Himmat K</p>
            </div>
            <div class="reviwe-gap">
                <p> <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> 4 years ago <strong>&#8942;</strong>
                </p>
                <!-- <p class="comment">"Good"</p> -->
                <p class="name">- Surender D</p>
            </div>
        </div>
        <div class="write-a-review">
            <button class="sample" style="cursor: pointer;" onclick="window.location.href = 'write-a-review.html';">
                WRITE A REVIEW</button>
            <button class="sample" style="cursor: pointer;" onclick="window.location.href= 'about-us.html'"> ABOUT
                US</button>
        </div>
        <div class="contact">
            <p id="us">
                <span id="underscore-a" style="padding-left: 39px">_________</span> CONTACT US
            </p>
        </div>
    </div>
    <div id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3716.5702835447055!2d74.95591999999999!3d21.3279896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdf2d3075fed54b%3A0x44b62f34d145ad90!2sVitthal%20Textile%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1680869707713!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div id="footer">
        <div class="contact">
            <p class="bottom-heading">Contact</p>
            <button class="buttons">
                CALL NOW
            </button>
            <p>1234567890</p>
        </div>
        <div class="contact">
            <p class="bottom-heading">Address</p>
            <button class="buttons">GET DIRECTIONS</button>
            <p>Tande, Maharashtra, <br>India</p>
        </div>
    </div>
    <div class="dummy">
        <input type="checkbox" name="" id="show" style="display: none;">
    </div>
</body>
<script src="https://kit.fontawesome.com/1b442dac0b.js" crossorigin="anonymous"></script>
<script>
    var x = document.getElementById("cross")
    function myFunction() {
        x.classList.toggle("fa-bars")
        x.classList.toggle("fa-xmark")
    }
    function showModal() {
        document.querySelector('.overlay').classList.add('showoverlay')
        document.querySelector('.get-quote').classList.add('showget-quote')
    }
    function hideModal() {
        document.querySelector('.overlay').classList.remove('showoverlay')
        document.querySelector('.get-quote').classList.remove('showget-quote')
    }
</script>

</html>