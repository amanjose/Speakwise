<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/index.css">
</head>

</style>
<body>
    <header>
        <div class="logo">Speakwise</div>
        <nav>
        <h1 style="margin: 0; padding-right: 20px; display: inline-block;"><?php echo $_SESSION['name']; ?></h1>
        <a href="logout.php" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: #ffffff; text-decoration: none; border-radius: 5px; font-family: Arial, sans-serif; font-size: 16px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#2980b9';" onmouseout="this.style.backgroundColor='#3498db';">Logout</a>
        </nav>
    </header>

    <div class="divider">
        <div class="content">
            <br>
            <br>
            <br>
            <h1>Become fluent in any language</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <ul class="features">
                <h3>Connect with a global community of learners</h3>
                <br>
                <h3>Increase your language proficiency and skills</h3>
                <br>
                <h3>Don't limit your learning</h3>
            </ul>
        </div>
        <div class="image-container">
            <img src="./icons/speakwise.jpg" alt="Language Image">
        </div>
    </div>

    <main>
        <div class="languages">
            <div class="language-box">
                <div class="language">
                    <img src="./icons/india.jpg" alt="Language Emblem">
                    <h3>Hindi</h3>
                </div>
            </div>
            <div class="language-box">
                <div class="language">
                    <img src="./icons/english.jpg" alt="Language Emblem">
                    <h3>English</h3>
                </div>
            </div>
            <div class="language-box">
                <div class="language">
                    <img src="./icons/french.jpg" alt="Language Emblem">
                    <h3>French</h3>
                </div>
            </div>
            <div class="language-box">
                <div class="language">
                    <img src="./icons/india.jpg" alt="Language Emblem">
                    <h3>Malayalam</h3>
                </div>
            </div>
            <div class="language-box">
                <div class="language">
                    <img src="./icons/spanish.jpg" alt="Language Emblem">
                    <h3>Spanish</h3>
                </div>
            </div>
            <div class="language-box">
                <div class="language">
                    <img src="./icons/italian.jpg" alt="Language Emblem">
                    <h3>Italian</h3>
                </div>
            </div>
        </div>
        <br>
        <div class="divider">
            <button onclick="window.location.href='./html/lobby.html'">Click to Connect</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Speakwise. All rights reserved.</p>
    </footer>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
