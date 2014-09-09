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
                        <li><a href="movies.php">Movies</a></li>
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
                <br/><br/>
                <form method="post" action="update.php?userid=<?php echo $UppdateId; ?>&submited=true">
                    <input type="text" value="<?php echo $user->getUsername();?>" placeholder="username" name="username"/>
                    <input type="text" value="<?php echo $user->getPassword(); ?>" placeholder="password" name="password"/>
                    <input type="email" value="<?php echo $user->getEmail(); ?>" placeholder="example@mail.com" name="email"/>
                    <input type="submit" value="submit"/>
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



