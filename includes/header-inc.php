<?php
//include "doLogin-inc.php";
//include "doLogout-inc.php";
echo "
<nav  class='navbar navbar-dark bg-dark'>
    <h3 class='dib'><a href='index.php'>Home page</a></h3>
";

if(isset($_SESSION['userId'])) {
    echo '<div class=\'dib fr pt1\'>You are logged in!
    <form action="" method="post">
    <input type="submit" name="logoutAction" value="logout" />
    </form>
    </div></nav>';
} else
{
    echo "
         <div class='dib fr pt1'>
             <form method=\"post\" action=\"\">
                <input type=\"text\" name=\"login\" placeholder=\"login\"/>
                <input type=\"password\" name=\"pwd\" placeholder=\"password\"/>
                <input name=\"loginAction\" type=\"submit\" />
                <div class='tr'>
                    <a href='registration.php'>(Registration)</a>
                </div>
             </form>
    </div>
    </nav>
    ";
}


if(isset($_POST['login']) & isset($_POST['pwd']) & isset($_POST['loginAction'])) {
    echo $_POST['login'].' '.$_POST['pwd'];
    include "doLogin-inc.php";
    $doLogin($_POST['login'], $_POST['pwd']);
};

if(isset($_POST['logoutAction'])) {
    include "doLogout-inc.php";
}

echo "</nav>";