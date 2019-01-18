<?php
echo "
<nav  class='container-fluid navbar navbar-dark bg-dark'>
    <h3 class='col-8'><a href='index.php'>Home page</a></h3>
";

if(isset($_SESSION['userId'])) {
    echo '<div class="col-4 text-right mt-2">
<div class="d-inline-block text-white pr-2 align-middle">Welcome, '.$_SESSION["userName"]." ".$_SESSION["userSurname"].'!</div>
<div class="d-inline-block">
    <form action="" method="post">
    <input class="btn btn-primary" type="submit" name="logoutAction" value="logout" />
    </form>
</div>

    </div>';
} else
{
    echo "
         <div class='col-4 text-right mt-3'>
             <form method=\"post\" action=\"\">
                <input class='p-1 pb-2' id='loginInput' type=\"text\" name=\"login\" placeholder=\"login\"/>
                <input class='p-1 pb-2' id='passwordInput' type=\"password\" name=\"pwd\" placeholder=\"password\"/>
                <input class='btn btn-primary pb-2' name=\"loginAction\" type=\"submit\" value='Log in' />
                
             </form>
    </div>
    ";
}


if(isset($_POST['login']) & isset($_POST['pwd']) & isset($_POST['loginAction'])) {
    include "doLogin-inc.php";
    $doLogin($_POST['login'], $_POST['pwd']);
};

if(isset($_POST['logoutAction'])) {
    include "doLogout-inc.php";
}

echo "</nav>";