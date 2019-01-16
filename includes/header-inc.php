<?php
echo "
<header class='header'>
    <h3 class='dib'><a href='../public/index.php'>Home page</a></h3>
";

if (!isset($_SESSION['userId'])) {
    echo "
    <div class='dib fr pt1'>
             <form method=\"post\" action=\"\">
                <input type=\"text\" name=\"login\" placeholder=\"login\"/>
                <input type=\"password\" name=\"pwd\" placeholder=\"password\"/>
                <input type=\"submit\" />
             </form>
    </div>
        <div class='tr'>
            <a href='registration.php'>(Registration)</a>
        </div>
    </header>
    ";
} else {
    echo '<div class=\'dib fr pt1\'>You are logged in!
    <form action="../includes/doLogout-inc.php" method="post">
    <input type="submit" name="logoutAction" value="logout" />
    </form>
    </div></header>';
};

if(isset($_POST['login']) & isset($_POST['pwd'])) {
    $doLogin($_POST['login'], $_POST['pwd']);
};