<?php session_start();

    if (isset($_SESSION['username'])) {
        header('Location: ../profile?redirect=sessao_live');
        exit();
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://rawcdn.githack.com/OshekharO/Entertainment-Index/17d005915d5e20780a46aef227f08367ca8efb3a/img/favicon.ico" type="image/x-icon" />
    <link href="../assets/css/stylelogin.css" rel="stylesheet" />
    <script>!function(){try{var d=document.documentElement,c=d.classList;c.remove('light','dark');var e=localStorage.getItem('theme');if('system'===e||(!e&&false)){var t='(prefers-color-scheme: dark)',m=window.matchMedia(t);if(m.media!==t||m.matches){d.style.colorScheme = 'dark';c.add('dark')}else{d.style.colorScheme = 'light';c.add('light')}}else if(e){c.add(e|| '')}else{c.add('dark')}if(e==='light'||e==='dark'||!e)d.style.colorScheme=e||'dark'}catch(e){}}()</script>
    <title>Login</title>
</head>
<body>
    <?php

        $erro='';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $data = array(
                'username' => $username,
                'password' => $password
            );

            $json_data = json_encode($data);
            $url = 'http://localhost:5511/login';
            $ch = curl_init($url);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

            $response = curl_exec($ch);

            if ($response === false) {
                echo 'Erro: ' . curl_error($ch);
            } else {
                $response_data = json_decode($response, true);

                if (isset($response_data['message']) && $response_data['message'] == 'Login realizado com sucesso!') {
                    $_SESSION['username'] = $response_data['username'];
                    $_SESSION['user_id'] = $response_data['user_id'];
                    $_SESSION['plan'] = $response_data['plan'];
                    $_SESSION['expiration_date'] = $response_data['expiration_date'];

                    header('Location: ../panel');
                } else {
                    $erro = $response_data['message'];
                }
            }

            curl_close($ch);
        }
    ?>


    <form method="post" class="login-form">
        <img alt="logo" loading="lazy" width="50" height="50" decoding="async" data-nimg="1" srcSet="../assets/logo/logo.png, ../assets/logo/logo.png" src="../assets/logo/logo.png" />
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="REQUEST_METHOD" value="Logar">

        <?php if ($erro != ''): ?>
            <div class="error-message"><?php echo $erro; ?></div>
        <?php endif; ?>
    </form>

</body>
</html>
