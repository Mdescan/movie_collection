<!DOCTYPE HTML>
<html>
    <head class="head_alg">
        <title class="head_title">Register</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main_css.css">
    </head>
    <body class="body_container cf">
        <div class="wrapper">
            <header class="main_header">
                <nav class="main_nav">
                    <ul class="nav_list">
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="Home.php">Movies</a></li>
                        <?php
                        if(isset($_SESSION["aangemeld"]) && $_SESSION["aangemeld"]){
                            echo '<li><a href="Home.php">My Info</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            </header>
            <section class="main_section">
                <form method="post" action="Register.php?submited=true">
                    <label>username</label><br/>
                    <input type="text" value="" placeholder="username" name="username" required="1"/><br/>
                    <label>password</label><br/>
                    <input type="password" value="" placeholder="password" name="password" required="1"/><br/>
                    <label>repeat password</label><br/>
                    <input type="password" value="" placeholder="repeat" name="repassword" required="1"/><br/>
                    <label>email</label><br/>
                    <input type="text" value="" placeholder="email" name="email" required="1"/><br/>
                    <input type="submit" value="enter"/>
                </form>
                <br/>
                <br/>
                <?php
                    $_SESSION["nouvelle"]="wehave a new";
                    echo $_SESSION["nouvelle"];
                ?>
            </section>
            <footer class="main_footer">
                footer
            </footer>
        </div>
    </body>
</html>

