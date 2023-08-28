<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('location:login.php');
}
include('src/header.php');
?>
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    Welcome into dashboard
                </div>
            </div>
        </div>
    </div>

    <?php
    include('src/footer.php');
    ?>
        

 