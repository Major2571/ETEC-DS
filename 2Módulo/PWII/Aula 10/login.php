<?php include("templates/head.php"); ?>

<section class="login-box">
    <form action="">
        <h2>Login</h2>

        <div class="user-box">
            <input type="text" name="" required>
            <label>Username</label>
        </div>

        <div class="user-box">
            <input type="password" name="" required>
            <label>Password</label>
        </div>


        <div>
            <a href="#">
                <!-- Esses spans são os que vão dar o efeito em cada lado do botão -->
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" placeholder="submit">
            </a>
        </div>


    </form>
    <div class="img_login">
        <img src="./img/login.svg" alt="">
    </div>
</section>


<?php include("templates/footer.php"); ?>