<?php
if(!isset($_SESSION))
{
    session_start();
}
;?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/ecup/index.php">E-CUP</a>
        <?php
        if(isset($_SESSION["User_ID"]))
        {?>
        <a class="sectionName" style="padding: 10px 20px; color: #ffc107; border: 1px;font-size: 14px;font-weight: 800;letter-spacing: 1px;
        text-transform: uppercase;"><?php echo "Hi ". $_SESSION["Name"]?></a>
        <?php
        } ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/ecup/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ecup/activity/activity.php">Activity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ecup/pollqn/poll.php">Poll & QN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ecup/webboard/webboard.php">Web-Board</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ecup/contact/contact.php">Contact</a>
                </li>
                <?php
                if(isset($_SESSION["User_ID"])){
                    ?>
                    <li class="nav-item">
                        <a class="btn btn-warning" href="/ecup/logout.php">Logout</a>
                    </li>
                <?php }
                else{
                ?>
                <li class="nav-item">
                    <a class="btn btn-warning" href="/ecup/login.php">Login?</a>
                </li>
                <?php }

                ?>
            </ul>
        </div>
    </div>
</nav>
