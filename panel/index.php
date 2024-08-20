<?php session_start(); 

    if (!isset($_SESSION['username'])) {
        header('Location: ../index.php?error=nao_logado');
        exit();
    }

    $userID = $_SESSION['user_id'];
    $plan = $_SESSION['plan'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="stylesheet" href="./_next/static/css/2c067d40c9f0fcb0.css" data-precedence="next" />
    <link rel="stylesheet" href="./_next/static/css/84b3655f4ba5acfe.css" data-precedence="next" />
    <link rel="preload" as="script" fetchPriority="low" href="./_next/static/chunks/webpack-681e75102319f09d.js" />
    <title>Panel | Checker</title>
    <meta name="next-size-adjust" />
    <link rel="shortcut icon" href="https://rawcdn.githack.com/OshekharO/Entertainment-Index/17d005915d5e20780a46aef227f08367ca8efb3a/img/favicon.ico" type="image/x-icon" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body class="min-h-screen bg-background antialiased __className_aaf875 __variable_51677f">
    <script>!function(){try{var d=document.documentElement,c=d.classList;c.remove('light','dark');var e=localStorage.getItem('theme');if('system'===e||(!e&&false)){var t='(prefers-color-scheme: dark)',m=window.matchMedia(t);if(m.media!==t||m.matches){d.style.colorScheme = 'dark';c.add('dark')}else{d.style.colorScheme = 'light';c.add('light')}}else if(e){c.add(e|| '')}else{c.add('dark')}if(e==='light'||e==='dark'||!e)d.style.colorScheme=e||'dark'}catch(e){}}()</script>
    
    <?php include('header.php'); ?>
    
    <div class="flex">
        
    <?php include('navegator.php'); ?>

    <div class="md:pl-28 py-2 h-fit md:py-18 grow w-full">
        <main class="container">
        
        <div class="py-8 grid gap-4">
            <div role="alert"
                    class="relative w-full rounded-lg border p-4 [&amp;&gt;svg~*]:pl-7 [&amp;&gt;svg+div]:translate-y-[-3px] [&amp;&gt;svg]:absolute [&amp;&gt;svg]:left-4 [&amp;&gt;svg]:top-4 border-destructive/50 text-destructive dark:border-destructive [&amp;&gt;svg]:text-destructive">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4">
                        <path
                            d="M8.4449 0.608765C8.0183 -0.107015 6.9817 -0.107015 6.55509 0.608766L0.161178 11.3368C-0.275824 12.07 0.252503 13 1.10608 13H13.8939C14.7475 13 15.2758 12.07 14.8388 11.3368L8.4449 0.608765ZM7.4141 1.12073C7.45288 1.05566 7.54712 1.05566 7.5859 1.12073L13.9798 11.8488C14.0196 11.9154 13.9715 12 13.8939 12H1.10608C1.02849 12 0.980454 11.9154 1.02018 11.8488L7.4141 1.12073ZM6.8269 4.48611C6.81221 4.10423 7.11783 3.78663 7.5 3.78663C7.88217 3.78663 8.18778 4.10423 8.1731 4.48612L8.01921 8.48701C8.00848 8.766 7.7792 8.98664 7.5 8.98664C7.2208 8.98664 6.99151 8.766 6.98078 8.48701L6.8269 4.48611ZM8.24989 10.476C8.24989 10.8902 7.9141 11.226 7.49989 11.226C7.08567 11.226 6.74989 10.8902 6.74989 10.476C6.74989 10.0618 7.08567 9.72599 7.49989 9.72599C7.9141 9.72599 8.24989 10.0618 8.24989 10.476Z"
                            fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                    <h5 class="mb-1 font-medium leading-none tracking-tight">Aviso:</h5>
                    <div class="text-sm [&amp;_p]:leading-relaxed">Não se esqueça de selecionar uma gateway</div>
                </div>
        </div>
                
            <form method="post" action="api.php" role="form" id="form">
            
            <input type="hidden" id="selectedGateway" name="gateway" />
            <input type="hidden" id="userID" name="user_id" value="<?php echo htmlspecialchars($userID); ?>" />
            <input type="hidden" id="userPlan" name="plan" value="<?php echo htmlspecialchars($plan); ?>" />

            <div class="box-body">
                <div class="box-content">


                <div>
                <textarea class="form-control" rows="10" id="cc" name="cc" title="53012724539xxxxx|05|2024|653" placeholder="53012724539xxxxx|05|2024|653" required style="height: 117px;"></textarea>
                </div>
                <div class="button text-center mb-3 mt-3">
                    <div class="dropdown">
                        <button type="button" id="gateway" class="dropdown-button">Gateway</button>
                        <div class="dropdown-content">
                            <a href="#" data-value="Braintree">Braintree</a>
                            <a href="#" data-value="Stripe">Stripe</a>
                            <a href="#" data-value="Erede">Erede</a>
                        </div>
                    </div>
                <button type="submit" name="valid" class="btn btn-outline-success text-light" >START</button>
                <button type="button" id="stop" class="btn btn-outline-danger text-light">STOP</button>
                </div>
                </div>
            </div>

            <script src="theme-assets/script.js"></script>
            
            <!-- Info success -->
            <div class="box-title">
                <h3 class="panel-title alert alert-primary font-monospace">Live - <span class="badge bg-success live">0</span></h3>
            </div>
            <div class="box-body">
                <div class="box-content alert alert-success">
                <div class="panel-body success"></div>
                </div>
            </div>
    
            <!-- Info error -->
            <div class="box-title">
                <h3 class="panel-title alert alert-primary font-monospace">Die - <span class="badge bg-danger die">0</span></h3>
            </div>
            <div class="box-body">
                <div class="box-content alert alert-danger">
                <div class="panel-body danger"></div>
                </div>
            </div>
            
                <!-- Info unknown -->
                <div class="box-title">
                <h3 class="panel-title alert alert-primary font-monospace">Unknown - <span class="badge bg-warning unknown">0</span></h3>
                </div>
                <div class="box-body">
                    <div class="box-content alert alert-warning">
                    <div class="panel-body warning"></div>
                    </div>
                </div>
            </form>
            
                    <div class="py-8 grid gap-4">
                        <span>Copyright © 2024 NexuxCenter. All Rights Reserved.</span>
                    </div>
                </main>
            </div> 

            <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

            <script type="text/javascript">
                $(document).ready(function () {
    // Inicializa os botões
    $('button[name="valid"]').attr("disabled", false);
    $('button[id="stop"]').attr("disabled", false);

    var intervalId;

    // Atualiza o campo oculto com o valor selecionado no dropdown
    $('.dropdown-content a').click(function () {
        var value = $(this).data('value');
        $('#selectedGateway').val(value);
        $('#gateway').text(value); // Opcional: Atualiza o texto do botão para mostrar o valor selecionado
    });

    // Manipula o envio do formulário
    $("#form").submit(function (event) {
        event.preventDefault();
        event.stopImmediatePropagation();

        var $form = $(this);
        var lines = $("#cc").val().split("\n");

        if (lines.length > 0) {
            var currentIndex = 0;
            var liveCount = parseInt($(".live").text(), 10);
            var dieCount = parseInt($(".die").text(), 10);
            var unknownCount = parseInt($(".unknown").text(), 10);
            var totalLines = lines.length;

            intervalId = setInterval(function () {
                $.post($form.attr("action"), { 
                    data: lines[currentIndex],
                    gateway: $('#selectedGateway').val(),
                    user_id: $('#userID').val(),
                    plan: $('#userPlan').val()
                }, function (response, status) {
                    console.log("Response:", response); // Para verificar o formato da resposta
                    console.log("Status:", status);

                    if (status === "success") {
                        var result = response; 

                        switch (result.error) {
                            case 1:
                                $(".success").prepend(result.msg);
                                liveCount++;
                                $(".live").text(liveCount);
                                break;
                            case 2:
                                $(".danger").prepend(result.msg);
                                dieCount++;
                                $(".die").text(dieCount);
                                break;
                            case 3:
                                $(".warning").prepend(result.msg);
                                unknownCount++;
                                $(".unknown").text(unknownCount);
                                break;
                            case 4:
                                $(".info").show().prepend(result.msg + "<br>");
                                break;
                            default:
                                console.error("Unexpected error code:", result.error);
                        }
                    } else {
                        console.error("Request failed:", status);
                    }
                });

                currentIndex++;

                if (currentIndex >= totalLines) {
                    clearInterval(intervalId);
                    $("#cc").val("");
                    $("#cc").attr("disabled", false);
                    $('button[name="valid"]').attr("disabled", false);
                    $('button[id="stop"]').attr("disabled", true);
                } else {
                    $("#cc").attr("disabled", true);
                    $('button[id="stop"]').attr("disabled", false);
                    $('button[name="valid"]').attr("disabled", true);
                }
            }, 1500);
        } else {
            $(".info").show().html("<b>Error</b>");
        }

        return false;
    });

    // Manipula o clique no botão STOP
    $("#stop").click(function () {
        clearInterval(intervalId);
        $("#cc").attr("disabled", false);
        $('button[name="valid"]').attr("disabled", false);
        $('button[id="stop"]').attr("disabled", true);
    });
});
            </script>
</body>
</html>