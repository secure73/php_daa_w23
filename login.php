<?php
include('src/header.php');
?>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1>Login to website</h1>
                <form method="post">
                    <label>username:</label> <input type="email" name="input_user_login" placeholder="something@dummy.com" required />
                    <br />
                    <br />
                    <label>password:</label><input type="password" name="input_user_password" placeholder="your password" required />
                    <br />
                    <br />
                    <button class="btn btn-primary" type="submit">login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('src/footer.php');
?>