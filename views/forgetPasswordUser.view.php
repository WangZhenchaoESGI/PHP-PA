<meta name="google-signin-client_id" content="1017629630695-9ev0e7iiln3rqt3aiiomnt4pies0l7nr.apps.googleusercontent.com">

<div id="login">
    <div id="logreg-forms">

        <div class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center;color: #1d2124"> CONNEXION</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" onclick="window.location.href='<?php echo $form['url_facebook'] ?>'" scope="public_profile,email" onlogin="checkLoginState();" type="button"><span><i class="fab fa-facebook-f"></i> &nbsp; Facebook </span> </button>
                <button class="btn google-btn social-btn" id="customBtn" onclick="Google()" type="button" data-onsuccess="onSignIn"><span><i class="fab fa-google-plus-g"></i> &nbsp; Google+ </span> </button>
            </div>
            <?php if (isset($_SESSION['success'])): ?>
            <h3 style="color: red;"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></h3>
            <?php endif; ?>
            <div class="bs-component">
                <form
                        action="/forgetPasswordSend"
                        method="POST">

                    <div class="form-group">
                        <label for="exampleInputFile">Votre Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <input type="submit" class="btn btn-outline-warning btn-block" value="Validez">
                </form>
            </div>

        </div>

        <form action="/reset/password/" class="form-reset">
            <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
            <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
        </form>

    </div>
</div>

<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/script.js"></script>
<script src="../public/js/code.js"></script>

<?php


if (isset($_SESSION['fb']) && $_SESSION['fb']==1){
    echo $_SESSION['fb'];

    echo "<script>logout()</script>";
    unset($_SESSION['fb']);
    header("/connexion");
}
?>