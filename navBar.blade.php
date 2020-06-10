<div class="navigation" id="nav">
    <a class="title" href="<?php route('home')?>"><span>TelepathyBean</span></a>
    <a href="<?php route('projects')?>">Projects</a>
    <a href="<?php route('contact')?>">Contact Us</a>
    <a href="<?php route('about')?>">About Us</a>

    <?php if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
    <a href="logoutOther.php" class="login_reg">Logout</a>
    <?php else: ?>
    <a href="<?php route('login')?>" class="login_reg">Login</a>
    <?php endif; ?>

    <?php if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
    <a href="<?php route('myProfile')?>" class="login_reg">My Profile</a>
    <a href="<?php route('users')?>" class="login_reg">Users</a>
    <?php else: ?>
    <a href="<?php route('register')?>" class="login_reg">Registration</a>
    <?php endif; ?>

    <a href="javascript:void(0);" class="icon" onclick="navigationDropdown()">
        <i class="fa fa-bars"></i>
    </a>
</div>
