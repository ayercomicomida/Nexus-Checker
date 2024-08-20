<?php session_start(); 

    if (!isset($_SESSION['username'])) {
        header('Location: ../index.php?error=nao_logado');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="stylesheet" href="./_next/static/css/2c067d40c9f0fcb0.css" data-precedence="next" />
    <link rel="stylesheet" href="./_next/static/css/84b3655f4ba5acfe.css" data-precedence="next" />
    <link rel="preload" as="script" fetchPriority="low" href="./_next/static/chunks/webpack-681e75102319f09d.js" />
    <script src="./_next/static/chunks/d15e61b5-f57e7c46ea5af685.js"></script>
    <script src="./_next/static/chunks/1475-52655121c17dfae2.js"></script>
    <script src="./_next/static/chunks/main-app-5fe7e308cb50a3eb.js" async type="3aadaa4892c1aa073f95aeec-text/javascript"></script> 
    <script src="./_next/static/chunks/f923c8e2-1a1acd9c65be1f77.js"></script>
    <script src="./_next/static/chunks/4236-10daa3b28dd526a8.js"></script>
    <script src="./_next/static/chunks/3669-c250208cdf17303f.js"></script>
    <script src="./_next/static/chunks/3316-6e922262168b85c3.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/7503-59a2be5afcf28d3c.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/9138-0dd6dc84efb248d5.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/558-042b2a13163f9450.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/5367-cfa3b55d0e87d1c0.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/1326-1da9cb39c035e2e8.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/256-8ba93f8e7fc8acae.js"></script>
    <script src="./_next/static/chunks/2046-c6980f3f6a30a8bb.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/5115-c646ea6092905f04.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/4545-6a1de506c0a6e444.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/5799-917c6085830dd5b1.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/6124-db85cbb0f64a6e72.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/9741-5904ab2cd55f4742.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/app/layout-e74bf2b45c198233.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/app/(landing)/layout-5208964ecbb3e219.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/b27dc69b-34eb5481042c3771.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/9656-4cbcf0e7c29c125e.js" async
        type="3aadaa4892c1aa073f95aeec-text/javascript"></script>
    <script src="./_next/static/chunks/382-94586c696163581c.js"></script>
    <script src="./_next/static/chunks/app/profile/(user-profile)/page-e9c140ebacb52315.js"></script>
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="white" />
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black" />
    <title>Profile</title>
    <meta name="description"
        content="VacStresser — On this website, users can engage in activities such as acquiring stresser or booter services, which are designed to simulate DDoS attacks on target websites or servers." />
    <meta property="og:title" content="VacStresser" />
    <meta property="og:description"
        content="VacStresser — On this website, users can engage in activities such as acquiring stresser or booter services, which are designed to simulate DDoS attacks on target websites or servers." />
    <meta property="og:url" content="https://vacstresser.org" />
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:description"
        content="VacStresser — On this website, users can engage in activities such as acquiring stresser or booter services, which are designed to simulate DDoS attacks on target websites or servers." />
    <meta name="twitter:image" content="https://vacstresser.org/static/logo.png" />
    <link rel="shortcut icon" href="https://rawcdn.githack.com/OshekharO/Entertainment-Index/17d005915d5e20780a46aef227f08367ca8efb3a/img/favicon.ico" type="image/x-icon" />
    <meta name="next-size-adjust" />
    <script src="./_next/static/chunks/polyfills-78c92fac7aa8fdd8.js"></script>
</head>

<body class="min-h-screen bg-background antialiased __className_aaf875 __variable_51677f">
    <style>
        #nprogress {
            pointer-events: none
        }

        #nprogress .bar {
            background: #508dff;
            position: fixed;
            z-index: 1600;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px
        }

        #nprogress .peg {
            display: block;
            position: absolute;
            right: 0;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px #508dff, 0 0 5px #508dff;
            opacity: 1;
            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px)
        }

        #nprogress .spinner {
            display: block;
            position: fixed;
            z-index: 1600;
            top: 15px;
            right: 15px
        }

        #nprogress .spinner-icon {
            width: 18px;
            height: 18px;
            box-sizing: border-box;
            border: 2px solid transparent;
            border-top-color: #508dff;
            border-left-color: #508dff;
            border-radius: 50%;
            -webkit-animation: nprogress-spinner 400ms linear infinite;
            animation: nprogress-spinner 400ms linear infinite
        }

        .nprogress-custom-parent {
            overflow: hidden;
            position: relative
        }

        .nprogress-custom-parent #nprogress .bar,
        .nprogress-custom-parent #nprogress .spinner {
            position: absolute
        }

        @-webkit-keyframes nprogress-spinner {
            0% {
                -webkit-transform: rotate(0deg)
            }

            100% {
                -webkit-transform: rotate(360deg)
            }
        }

        @keyframes nprogress-spinner {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }
    </style>
    <script>!function(){try{var d=document.documentElement,c=d.classList;c.remove('light','dark');var e=localStorage.getItem('theme');if('system'===e||(!e&&false)){var t='(prefers-color-scheme: dark)',m=window.matchMedia(t);if(m.media!==t||m.matches){d.style.colorScheme = 'dark';c.add('dark')}else{d.style.colorScheme = 'light';c.add('light')}}else if(e){c.add(e|| '')}else{c.add('dark')}if(e==='light'||e==='dark'||!e)d.style.colorScheme=e||'dark'}catch(e){}}()</script>
    
    <?php include('./header.php'); ?>
    
    <div class="flex">
        
    <?php include('./navegator.php'); ?>

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
                        <h5 class="mb-1 font-medium leading-none tracking-tight">Aviso de Segurança:</h5>
                        <div class="text-sm [&amp;_p]:leading-relaxed">Lembre-se de que sua conta é pessoal e intransferível. Compartilhar suas credenciais de login com outras pessoas viola nossos termos de uso. Mantenha suas informações seguras e não compartilhe sua conta com ninguém.</div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h2 class="text-2xl font-semibold leading-none tracking-tight flex justify-between"><span
                                    class="text-foreground w-full max-w-sm break-words text-2xl md:max-w-none"><?php echo $_SESSION['username']; ?></span>
                                    
                                    <form action="logout.php" method="post">
                                        <button aria-disabled="false"
                                        class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2 text-red-500 hover:bg-destructive hover:cursor-pointer hover:text-white border border-red-500" type="submit" >Sign out</button></h2>
                                    </form>
                        </div>
                        <div class="p-6 pt-0 -mt-2 leading-loose">
                            <p class="text-sm text-muted-foreground flex flex-col gap-2"><span
                                    class="text-monochrome/60">ID: <span
                                        class="font-medium sm:font-bold"><?php echo $_SESSION['user_id']; ?></span></span><span
                                    class="text-monochrome/60">Plan:<!-- --> <span
                                        class="font-medium sm:font-bold"><?php echo $_SESSION['plan']; ?></span></span><span
                                    class="text-monochrome/60">Expire date:<!-- --> <span
                                        class="font-medium sm:font-bold"><?php echo $_SESSION['expiration_date']; ?></span></span>
                                        
                                        <spanclass="text-monochrome/60">Account status:<!-- --> <span
                                        class="font-medium sm:font-bold"><span
                                            class="text-green-500">Good</span></span></span></p>

                    </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    </div>
                    <span>Copyright © 2024 NexuxCenter. All Rights Reserved.</span>
                </div>
            </main>
        </div>
    </div>
    <div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events:none">
        <ol tabindex="-1"
            class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:bottom-0 sm:right-0 sm:top-auto sm:flex-col md:max-w-[420px]">
        </ol>
    </div>
    <script src="./_next/static/chunks/webpack-681e75102319f09d.js"></script>
    <script
        type="3aadaa4892c1aa073f95aeec-text/javascript">(self.__next_f=self.__next_f||[]).push([0]);self.__next_f.push([2,null])</script>
    <script
        type="3aadaa4892c1aa073f95aeec-text/javascript">self.__next_f.push([1,"1:HL[\"./_next/static/media/08410f27a0a34b38-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n2:HL[\"./_next/static/media/c9a5bc6a7c948fb0-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n3:HL[\"./_next/static/css/2c067d40c9f0fcb0.css\",\"style\"]\n4:HL[\"./_next/static/css/84b3655f4ba5acfe.css\",\"style\"]\n"])</script>
    <script
        type="3aadaa4892c1aa073f95aeec-text/javascript">self.__next_f.push([1,"5:I[86281,[],\"\"]\n8:I[29464,[],\"\"]\n9:I[8499,[],\"\"]\nc:I[3086,[],\"\"]\nd:[]\n0:[[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"./_next/static/css/2c067d40c9f0fcb0.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"link\",\"1\",{\"rel\":\"stylesheet\",\"href\":\"./_next/static/css/84b3655f4ba5acfe.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}]],[\"$\",\"$L5\",null,{\"buildId\":\"IYLx04p5HRzvCubKl3MB5\",\"assetPrefix\":\"\",\"initialCanonicalUrl\":\"/profile\",\"initialTree\":[\"\",{\"children\":[\"profile\",{\"children\":[\"(user-profile)\",{\"children\":[\"__PAGE__\",{}]}]}]},\"$undefined\",\"$undefined\",true],\"initialSeedData\":[\"\",{\"children\":[\"profile\",{\"children\":[\"(user-profile)\",{\"children\":[\"__PAGE__\",{},[[\"$L6\",\"$L7\"],null],null]},[\"$\",\"$L8\",null,{\"parallelRouterKey\":\"children\",\"segmentPath\":[\"children\",\"profile\",\"children\",\"(user-profile)\",\"children\"],\"error\":\"$undefined\",\"errorStyles\":\"$undefined\",\"errorScripts\":\"$undefined\",\"template\":[\"$\",\"$L9\",null,{}],\"templateStyles\":\"$undefined\",\"templateScripts\":\"$undefined\",\"notFound\":\"$undefined\",\"notFoundStyles\":\"$undefined\",\"styles\":null}],null]},[\"$\",\"$L8\",null,{\"parallelRouterKey\":\"children\",\"segmentPath\":[\"children\",\"profile\",\"children\"],\"error\":\"$undefined\",\"errorStyles\":\"$undefined\",\"errorScripts\":\"$undefined\",\"template\":[\"$\",\"$L9\",null,{}],\"templateStyles\":\"$undefined\",\"templateScripts\":\"$undefined\",\"notFound\":\"$undefined\",\"notFoundStyles\":\"$undefined\",\"styles\":null}],null]},[\"$La\",null],null],\"couldBeIntercepted\":false,\"initialHead\":[false,\"$Lb\"],\"globalErrorComponent\":\"$c\",\"missingSlots\":\"$Wd\"}]]\n"])</script>
    <script
        type="3aadaa4892c1aa073f95aeec-text/javascript">self.__next_f.push([1,"b:[[\"$\",\"meta\",\"0\",{\"name\":\"viewport\",\"content\":\"width=width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover\"}],[\"$\",\"meta\",\"1\",{\"name\":\"theme-color\",\"media\":\"(prefers-color-scheme: light)\",\"content\":\"white\"}],[\"$\",\"meta\",\"2\",{\"name\":\"theme-color\",\"media\":\"(prefers-color-scheme: dark)\",\"content\":\"black\"}],[\"$\",\"meta\",\"3\",{\"charSet\":\"utf-8\"}],[\"$\",\"title\",\"4\",{\"children\":\"Profile / VacStresser\"}],[\"$\",\"meta\",\"5\",{\"name\":\"description\",\"content\":\"VacStresser — On this website, users can engage in activities such as acquiring stresser or booter services, which are designed to simulate DDoS attacks on target websites or servers.\"}],[\"$\",\"meta\",\"6\",{\"property\":\"og:title\",\"content\":\"VacStresser\"}],[\"$\",\"meta\",\"7\",{\"property\":\"og:description\",\"content\":\"VacStresser — On this website, users can engage in activities such as acquiring stresser or booter services, which are designed to simulate DDoS attacks on target websites or servers.\"}],[\"$\",\"meta\",\"8\",{\"property\":\"og:url\",\"content\":\"https://vacstresser.org\"}],[\"$\",\"meta\",\"9\",{\"property\":\"og:locale\",\"content\":\"en_US\"}],[\"$\",\"meta\",\"10\",{\"property\":\"og:image\",\"content\":\"https://vacstresser.org/static/logo.png\"}],[\"$\",\"meta\",\"11\",{\"property\":\"og:type\",\"content\":\"website\"}],[\"$\",\"meta\",\"12\",{\"name\":\"twitter:card\",\"content\":\"summary_large_image\"}],[\"$\",\"meta\",\"13\",{\"name\":\"twitter:title\",\"content\":\"VacStresser\"}],[\"$\",\"meta\",\"14\",{\"name\":\"twitter:description\",\"content\":\"VacStresser — On this website, users can engage in activities such as acquiring stresser or booter services, which are designed to simulate DDoS attacks on target websites or servers.\"}],[\"$\",\"meta\",\"15\",{\"name\":\"twitter:image\",\"content\":\"https://vacstresser.org/static/logo.png\"}],[\"$\",\"link\",\"16\",{\"rel\":\"icon\",\"href\":\"/favicon.ico\",\"type\":\"image/x-icon\",\"sizes\":\"842x861\"}],[\"$\",\"meta\",\"17\",{\"name\":\"next-size-adjust\"}]]\n6:null\n"])</script>
    <script
        type="3aadaa4892c1aa073f95aeec-text/javascript">self.__next_f.push([1,"e:I[57071,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"4236\",\"static/chunks/4236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"3316\",\"static/chunks/3316-6e922262168b85c3.js\",\"7503\",\"static/chunks/7503-59a2be5afcf28d3c.js\",\"9138\",\"static/chunks/9138-0dd6dc84efb248d5.js\",\"558\",\"static/chunks/558-042b2a13163f9450.js\",\"5367\",\"static/chunks/5367-cfa3b55d0e87d1c0.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"256\",\"static/chunks/256-8ba93f8e7fc8acae.js\",\"2046\",\"static/chunks/2046-c6980f3f6a30a8bb.js\",\"5115\",\"static/chunks/5115-c646ea6092905f04.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"5799\",\"static/chunks/5799-917c6085830dd5b1.js\",\"6124\",\"static/chunks/6124-db85cbb0f64a6e72.js\",\"9741\",\"static/chunks/9741-5904ab2cd55f4742.js\",\"3185\",\"static/chunks/app/layout-e74bf2b45c198233.js\"],\"\"]\nf:I[1265,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"4236\",\"static/chunks/4236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"3316\",\"static/chunks/3316-6e922262168b85c3.js\",\"7503\",\"static/chunks/7503-59a2be5afcf28d3c.js\",\"9138\",\"static/chunks/9138-0dd6dc84efb248d5.js\",\"558\",\"static/chunks/558-042b2a13163f9450.js\",\"5367\",\"static/chunks/5367-cfa3b55d0e87d1c0.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"256\",\"static/chunks/256-8ba93f8e7fc8acae.js\",\"2046\",\"static/chunks/2046-c6980f3f6a30a8bb.js\",\"5115\",\"static/chunks/5115-c646ea6092905f04.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"5799\",\"static/chunks/5799-917c6085830dd5b1.js\",\"6124\",\"static/chunks/6124-db85cbb0f64a6e72.js\",\"9741\",\"static/chunks/9741-5904ab2cd55f4742.js\",\"3185\",\"static/chunks/app/layout-e74bf2b45c198233.js\"],\"ContextProvider\"]\n10:I[80882,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"4236\",\"static/chunks/4236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"3316\",\"static/chunks/3316-6e922262168b85c3.js\",\"7503\",\"static/chunks/7503-59a2be5afcf28d3c.js\",\"9138\",\"static/chunks/9138-0dd6dc84efb248d5.js\",\"558\",\"static/chunks/558-042b2a13163f9450.js\",\"5367\",\""])</script>
    <script
        type="3aadaa4892c1aa073f95aeec-text/javascript">self.__next_f.push([1,"static/chunks/5367-cfa3b55d0e87d1c0.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"256\",\"static/chunks/256-8ba93f8e7fc8acae.js\",\"2046\",\"static/chunks/2046-c6980f3f6a30a8bb.js\",\"5115\",\"static/chunks/5115-c646ea6092905f04.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"5799\",\"static/chunks/5799-917c6085830dd5b1.js\",\"6124\",\"static/chunks/6124-db85cbb0f64a6e72.js\",\"9741\",\"static/chunks/9741-5904ab2cd55f4742.js\",\"3185\",\"static/chunks/app/layout-e74bf2b45c198233.js\"],\"ThemeProvider\"]\n11:I[94586,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"4236\",\"static/chunks/4236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"3316\",\"static/chunks/3316-6e922262168b85c3.js\",\"7503\",\"static/chunks/7503-59a2be5afcf28d3c.js\",\"9138\",\"static/chunks/9138-0dd6dc84efb248d5.js\",\"558\",\"static/chunks/558-042b2a13163f9450.js\",\"5367\",\"static/chunks/5367-cfa3b55d0e87d1c0.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"256\",\"static/chunks/256-8ba93f8e7fc8acae.js\",\"2046\",\"static/chunks/2046-c6980f3f6a30a8bb.js\",\"5115\",\"static/chunks/5115-c646ea6092905f04.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"5799\",\"static/chunks/5799-917c6085830dd5b1.js\",\"6124\",\"static/chunks/6124-db85cbb0f64a6e72.js\",\"9741\",\"static/chunks/9741-5904ab2cd55f4742.js\",\"3185\",\"static/chunks/app/layout-e74bf2b45c198233.js\"],\"MobileNav\"]\n12:I[63083,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"4236\",\"static/chunks/4236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"3316\",\"static/chunks/3316-6e922262168b85c3.js\",\"7503\",\"static/chunks/7503-59a2be5afcf28d3c.js\",\"9138\",\"static/chunks/9138-0dd6dc84efb248d5.js\",\"558\",\"static/chunks/558-042b2a13163f9450.js\",\"5367\",\"static/chunks/5367-cfa3b55d0e87d1c0.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"256\",\"static/chunks/256-8ba93f8e7fc8acae.js\",\"2046\",\"static/chunks/2046-c6980f3f6a30a8bb.js\",\"5115\",\"static/chunks/5115-c646ea6092905f04.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"5799\",\"static/chunks/5799-917c6085830dd5b1.js\",\"6124\",\"static/chunks/"])</script>
    <script
        type="3aadaa4892c1aa073f95aeec-text/javascript">self.__next_f.push([1,"6124-db85cbb0f64a6e72.js\",\"9741\",\"static/chunks/9741-5904ab2cd55f4742.js\",\"3185\",\"static/chunks/app/layout-e74bf2b45c198233.js\"],\"Image\"]\n13:I[97503,[\"7503\",\"static/chunks/7503-59a2be5afcf28d3c.js\",\"262\",\"static/chunks/app/(landing)/layout-5208964ecbb3e219.js\"],\"\"]\n14:I[25253,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"4236\",\"static/chunks/4236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"3316\",\"static/chunks/3316-6e922262168b85c3.js\",\"7503\",\"static/chunks/7503-59a2be5afcf28d3c.js\",\"9138\",\"static/chunks/9138-0dd6dc84efb248d5.js\",\"558\",\"static/chunks/558-042b2a13163f9450.js\",\"5367\",\"static/chunks/5367-cfa3b55d0e87d1c0.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"256\",\"static/chunks/256-8ba93f8e7fc8acae.js\",\"2046\",\"static/chunks/2046-c6980f3f6a30a8bb.js\",\"5115\",\"static/chunks/5115-c646ea6092905f04.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"5799\",\"static/chunks/5799-917c6085830dd5b1.js\",\"6124\",\"static/chunks/6124-db85cbb0f64a6e72.js\",\"9741\",\"static/chunks/9741-5904ab2cd55f4742.js\",\"3185\",\"static/chunks/app/layout-e74bf2b45c198233.js\"],\"ModeToggle\"]\n15:I[45367,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"4236\",\"static/chunks/4236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"3316\",\"static/chunks/3316-6e922262168b85c3.js\",\"7503\",\"static/chunks/7503-59a2be5afcf28d3c.js\",\"9138\",\"static/chunks/9138-0dd6dc84efb248d5.js\",\"558\",\"static/chunks/558-042b2a13163f9450.js\",\"5367\",\"static/chunks/5367-cfa3b55d0e87d1c0.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"256\",\"static/chunks/256-8ba93f8e7fc8acae.js\",\"2046\",\"static/chunks/2046-c6980f3f6a30a8bb.js\",\"5115\",\"static/chunks/5115-c646ea6092905f04.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"5799\",\"static/chunks/5799-917c6085830dd5b1.js\",\"6124\",\"static/chunks/6124-db85cbb0f64a6e72.js\",\"9741\",\"static/chunks/9741-5904ab2cd55f4742.js\",\"3185\",\"static/chunks/app/layout-e74bf2b45c198233.js\"],\"default\"]\n16:I[85531,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"4236\",\"static/chunks/4"])</script>
    <script
        type="3aadaa4892c1aa073f95aeec-text/javascript">self.__next_f.push([1,"236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"3316\",\"static/chunks/3316-6e922262168b85c3.js\",\"7503\",\"static/chunks/7503-59a2be5afcf28d3c.js\",\"9138\",\"static/chunks/9138-0dd6dc84efb248d5.js\",\"558\",\"static/chunks/558-042b2a13163f9450.js\",\"5367\",\"static/chunks/5367-cfa3b55d0e87d1c0.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"256\",\"static/chunks/256-8ba93f8e7fc8acae.js\",\"2046\",\"static/chunks/2046-c6980f3f6a30a8bb.js\",\"5115\",\"static/chunks/5115-c646ea6092905f04.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"5799\",\"static/chunks/5799-917c6085830dd5b1.js\",\"6124\",\"static/chunks/6124-db85cbb0f64a6e72.js\",\"9741\",\"static/chunks/9741-5904ab2cd55f4742.js\",\"3185\",\"static/chunks/app/layout-e74bf2b45c198233.js\"],\"Toaster\"]\n17:I[34024,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"4236\",\"static/chunks/4236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"3316\",\"static/chunks/3316-6e922262168b85c3.js\",\"7503\",\"static/chunks/7503-59a2be5afcf28d3c.js\",\"9138\",\"static/chunks/9138-0dd6dc84efb248d5.js\",\"558\",\"static/chunks/558-042b2a13163f9450.js\",\"5367\",\"static/chunks/5367-cfa3b55d0e87d1c0.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"256\",\"static/chunks/256-8ba93f8e7fc8acae.js\",\"2046\",\"static/chunks/2046-c6980f3f6a30a8bb.js\",\"5115\",\"static/chunks/5115-c646ea6092905f04.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"5799\",\"static/chunks/5799-917c6085830dd5b1.js\",\"6124\",\"static/chunks/6124-db85cbb0f64a6e72.js\",\"9741\",\"static/chunks/9741-5904ab2cd55f4742.js\",\"3185\",\"static/chunks/app/layout-e74bf2b45c198233.js\"],\"Toaster\"]\n"])</script>
    <script
        type="3aadaa4892c1aa073f95aeec-text/javascript">self.__next_f.push([1,"a:[\"$\",\"html\",null,{\"lang\":\"en\",\"suppressHydrationWarning\":true,\"children\":[\"$\",\"body\",null,{\"className\":\"min-h-screen bg-background antialiased __className_aaf875 __variable_51677f\",\"children\":[[\"$\",\"$Le\",null,{\"showSpinner\":false,\"color\":\"#508dff\"}],[\"$\",\"$Lf\",null,{\"children\":[\"$\",\"$L10\",null,{\"attribute\":\"class\",\"defaultTheme\":\"dark\",\"disableTransitionOnChange\":true,\"children\":[[\"$\",\"header\",null,{\"className\":\"sticky top-0 z-40 flex w-full dark:shadow-black shadow-slate-300 dark:bg-opacity-50 bg-background/10 dark:bg-[#202b40] border-b border-slate-150 dark:border-[#26334d] backdrop-blur-md\",\"children\":[\"$\",\"div\",null,{\"className\":\"items-center w-full px-4 space-x-4 h-14 justify-between flex flex-row sm:space-x-0\",\"children\":[[\"$\",\"$L11\",null,{\"isLoggedIn\":true,\"isAdmin\":false}],[\"$\",\"$L12\",null,{\"src\":\"/logo.png\",\"width\":\"50\",\"height\":\"50\",\"alt\":\"vacstresser logo\"}],[\"$\",\"$L13\",null,{\"href\":\"/\",\"className\":\"pl-14 font-bold font-special text-3xl text-primary hidden md:flex justify-self-center\",\"children\":\"VacStresser\"}],[\"$\",\"$L14\",null,{}]]}]}],[\"$\",\"div\",null,{\"className\":\"flex\",\"children\":[[\"$\",\"$L15\",null,{\"items\":[{\"title\":\"Dashboard\",\"href\":\"/dashboard\",\"icon\":\"dashboard\"},{\"title\":\"Panel\",\"href\":\"/panel\",\"icon\":\"zap\"},{\"title\":\"Minecraft Hub\",\"href\":\"/mchub\",\"icon\":\"minecraft\"},{\"title\":\"API\",\"href\":\"/userapi\",\"icon\":\"code\"},{\"title\":\"Store\",\"href\":\"/store\",\"icon\":\"buy\"},{\"title\":\"Help\",\"href\":\"https://t.me/vac_stresser\",\"icon\":\"help\",\"external\":true}],\"user\":{\"name\":\"Sirkeira\",\"email\":\"leonudozowpi@gmail.com\",\"image\":\"$undefined\",\"id\":\"clz7qn0e10007ra24pg29u60x\",\"role\":\"USER\"}}],[\"$\",\"div\",null,{\"className\":\"md:pl-28 py-2 h-fit md:py-18 grow w-full\",\"children\":[\"$\",\"$L8\",null,{\"parallelRouterKey\":\"children\",\"segmentPath\":[\"children\"],\"error\":\"$undefined\",\"errorStyles\":\"$undefined\",\"errorScripts\":\"$undefined\",\"template\":[\"$\",\"$L9\",null,{}],\"templateStyles\":\"$undefined\",\"templateScripts\":\"$undefined\",\"notFound\":[[\"$\",\"title\",null,{\"children\":\"404: This page could not be found.\"}],[\"$\",\"div\",null,{\"style\":{\"fontFamily\":\"system-ui,\\\"Segoe UI\\\",Roboto,Helvetica,Arial,sans-serif,\\\"Apple Color Emoji\\\",\\\"Segoe UI Emoji\\\"\",\"height\":\"100vh\",\"textAlign\":\"center\",\"display\":\"flex\",\"flexDirection\":\"column\",\"alignItems\":\"center\",\"justifyContent\":\"center\"},\"children\":[\"$\",\"div\",null,{\"children\":[[\"$\",\"style\",null,{\"dangerouslySetInnerHTML\":{\"__html\":\"body{color:#000;background:#fff;margin:0}.next-error-h1{border-right:1px solid rgba(0,0,0,.3)}@media (prefers-color-scheme:dark){body{color:#fff;background:#000}.next-error-h1{border-right:1px solid rgba(255,255,255,.3)}}\"}}],[\"$\",\"h1\",null,{\"className\":\"next-error-h1\",\"style\":{\"display\":\"inline-block\",\"margin\":\"0 20px 0 0\",\"padding\":\"0 23px 0 0\",\"fontSize\":24,\"fontWeight\":500,\"verticalAlign\":\"top\",\"lineHeight\":\"49px\"},\"children\":\"404\"}],[\"$\",\"div\",null,{\"style\":{\"display\":\"inline-block\"},\"children\":[\"$\",\"h2\",null,{\"style\":{\"fontSize\":14,\"fontWeight\":400,\"lineHeight\":\"49px\",\"margin\":0},\"children\":\"This page could not be found.\"}]}]]}]}]],\"notFoundStyles\":[],\"styles\":null}]}]]}],[\"$\",\"$L16\",null,{}],[\"$\",\"$L17\",null,{\"richColors\":true}],null]}]}]]}]}]\n"])</script>
    <script
        type="3aadaa4892c1aa073f95aeec-text/javascript">self.__next_f.push([1,"18:I[17618,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"748\",\"static/chunks/b27dc69b-34eb5481042c3771.js\",\"4236\",\"static/chunks/4236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"9656\",\"static/chunks/9656-4cbcf0e7c29c125e.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"382\",\"static/chunks/382-94586c696163581c.js\",\"2324\",\"static/chunks/app/profile/(user-profile)/page-e9c140ebacb52315.js\"],\"default\"]\n19:I[40096,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"748\",\"static/chunks/b27dc69b-34eb5481042c3771.js\",\"4236\",\"static/chunks/4236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"9656\",\"static/chunks/9656-4cbcf0e7c29c125e.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"382\",\"static/chunks/382-94586c696163581c.js\",\"2324\",\"static/chunks/app/profile/(user-profile)/page-e9c140ebacb52315.js\"],\"default\"]\n1a:I[19230,[\"6545\",\"static/chunks/f923c8e2-1a1acd9c65be1f77.js\",\"748\",\"static/chunks/b27dc69b-34eb5481042c3771.js\",\"4236\",\"static/chunks/4236-10daa3b28dd526a8.js\",\"3669\",\"static/chunks/3669-c250208cdf17303f.js\",\"1326\",\"static/chunks/1326-1da9cb39c035e2e8.js\",\"9656\",\"static/chunks/9656-4cbcf0e7c29c125e.js\",\"4545\",\"static/chunks/4545-6a1de506c0a6e444.js\",\"382\",\"static/chunks/382-94586c696163581c.js\",\"2324\",\"static/chunks/app/profile/(user-profile)/page-e9c140ebacb52315.js\"],\"default\"]\n"])</script>
    <script
        type="3aadaa4892c1aa073f95aeec-text/javascript">self.__next_f.push([1,"7:[\"$\",\"main\",null,{\"className\":\"container\",\"children\":[\"$\",\"div\",null,{\"className\":\"py-8 grid gap-4\",\"children\":[[\"$\",\"div\",null,{\"role\":\"alert\",\"className\":\"relative w-full rounded-lg border p-4 [\u0026\u003esvg~*]:pl-7 [\u0026\u003esvg+div]:translate-y-[-3px] [\u0026\u003esvg]:absolute [\u0026\u003esvg]:left-4 [\u0026\u003esvg]:top-4 border-destructive/50 text-destructive dark:border-destructive [\u0026\u003esvg]:text-destructive\",\"children\":[[\"$\",\"svg\",null,{\"width\":\"15\",\"height\":\"15\",\"viewBox\":\"0 0 15 15\",\"fill\":\"none\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"className\":\"h-4 w-4\",\"children\":[\"$\",\"path\",null,{\"d\":\"M8.4449 0.608765C8.0183 -0.107015 6.9817 -0.107015 6.55509 0.608766L0.161178 11.3368C-0.275824 12.07 0.252503 13 1.10608 13H13.8939C14.7475 13 15.2758 12.07 14.8388 11.3368L8.4449 0.608765ZM7.4141 1.12073C7.45288 1.05566 7.54712 1.05566 7.5859 1.12073L13.9798 11.8488C14.0196 11.9154 13.9715 12 13.8939 12H1.10608C1.02849 12 0.980454 11.9154 1.02018 11.8488L7.4141 1.12073ZM6.8269 4.48611C6.81221 4.10423 7.11783 3.78663 7.5 3.78663C7.88217 3.78663 8.18778 4.10423 8.1731 4.48612L8.01921 8.48701C8.00848 8.766 7.7792 8.98664 7.5 8.98664C7.2208 8.98664 6.99151 8.766 6.98078 8.48701L6.8269 4.48611ZM8.24989 10.476C8.24989 10.8902 7.9141 11.226 7.49989 11.226C7.08567 11.226 6.74989 10.8902 6.74989 10.476C6.74989 10.0618 7.08567 9.72599 7.49989 9.72599C7.9141 9.72599 8.24989 10.0618 8.24989 10.476Z\",\"fill\":\"currentColor\",\"fillRule\":\"evenodd\",\"clipRule\":\"evenodd\"}]}],[\"$\",\"h5\",null,{\"className\":\"mb-1 font-medium leading-none tracking-tight\",\"children\":\"Warning\"}],[\"$\",\"div\",null,{\"className\":\"text-sm [\u0026_p]:leading-relaxed\",\"children\":\"VacStresser staff may only ask you for your user id, please don't share your information.\"}]]}],[\"$\",\"$L18\",null,{\"userData\":{\"username\":\"Sirkeira\",\"plan\":null,\"mcPlan\":null,\"mcExpire\":\"$D2024-07-30T01:27:14.618Z\",\"email\":\"leonudozowpi@gmail.com\",\"id\":\"clz7qn0e10007ra24pg29u60x\",\"expire\":\"$D2024-07-30T01:27:14.618Z\",\"accountStatus\":\"GOOD\"}}],[\"$\",\"div\",null,{\"className\":\"rounded-lg border bg-card text-card-foreground shadow-sm\",\"children\":[[\"$\",\"div\",null,{\"className\":\"space-y-1.5 p-6 flex flex-row justify-between\",\"children\":[[\"$\",\"h3\",null,{\"className\":\"text-2xl font-semibold leading-none tracking-tight\",\"children\":\"Attacks per day\"}],[\"$\",\"$L19\",null,{}]]}],[\"$\",\"div\",null,{\"className\":\"p-6 pt-0 pl-2\",\"children\":[\"$\",\"$L1a\",null,{\"data\":[{\"name\":\"2024-08-12\",\"count\":0},{\"name\":\"2024-08-13\",\"count\":0},{\"name\":\"2024-08-14\",\"count\":0},{\"name\":\"2024-08-15\",\"count\":0},{\"name\":\"2024-08-16\",\"count\":0},{\"name\":\"2024-08-17\",\"count\":0},{\"name\":\"2024-08-18\",\"count\":0}]}]}]]}]]}]}]\n"])</script>
    <script src=".../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"></script>

    <script>
    </script>
</body>

</html>