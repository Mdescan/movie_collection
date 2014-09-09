<!DOCTYPE HTML>
<html>
    <head class="head_alg">
        <title class="head_title">HomePage</title>
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
                            echo '<li><a href="Myinfo.php">My Info</a></li>';
                            
                        }
                        ?>
                    </ul>
                </nav>
            </header>
            <section class="main_section">
                <?php
                    if(isset($_SESSION["aangemeld"]) && $_SESSION["aangemeld"]){
                ?>
                <a href="Home.php?logout=true"><input type="button" value="logout"/></a>
                <?php   
                           echo '<br/>','Uw info','<br/><br/>';
                           echo 'username |',' password |',' email |','<br/>';
                           echo $user->getUsername(),' | ',$user->getPassword(),' | ',$user->getEmail(),' | ';
                           ?>
                <a href="update.php?userid=<?php echo $user->getId();?>"><input type="button" value="update"/></a>
                           <?php
                    }else{
                ?>
                <form method="post" action="Home.php?submited=true">
                    <input type="text" value="" placeholder="username" name="username"/>
                    <input type="password" value="" placeholder="password" name="password"/>
                    <input type="submit" value="enter"/>
                    <a href="register.php"><input type="button" value="register"/></a>
                </form>
                <?php
                        }
                ?>
                <br/>
                <br/>
            </section>
            <footer class="main_footer">
                
            </footer>
        </div>
    </body>
</html>

