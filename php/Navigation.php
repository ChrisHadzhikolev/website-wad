<div class="navigation">
    <nav>
        <ul>
            <li><a href="../index.php"><span>TelepathyBean</span></a></li>
            <li class="home"><a href="#" onclick="alert('Coming Soon')">News</a></li>
            <li class="home"><a href="ProjectsPage.php">Projects</a></li>
            <li class="home"><a href="ContactUsPage.php">Contact Us</a></li>
            <li class="home"><a href="AboutUsPage.php">About Us</a></li>
            <?php if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
                <li class="login_reg"><a href="logoutOther.php">Logout</a></li>
            <?php else: ?>
                <li class="login_reg"><a href="LoginPage.php">Login</a></li>
            <?php endif; ?>

            <?php if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
                <li class="login_reg"><a href="MyProfilePage.php">My Profile</a></li>
            <?php else: ?>
                <li class="login_reg"><a href="RegistrationPage.php">Registration</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>