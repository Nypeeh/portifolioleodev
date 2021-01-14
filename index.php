<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- SEO -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="author" content="Leonardo A.">
    <meta name="description" content="DevSec - Desenvolvimento profissional de websites e sistemas. " />
    <meta name="keywords" content="desenvolvimento web,seo,marketing digital,programação,web design,front-end,web developer,back-end,php" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta property="og:title" content="DevSec - Desenvolvimento Profissional">
    <meta property="og:site_name" content="DevSec">
    <meta property="og:description" content="DevSec - Programação Web e Marketing Digital.">
    <meta property="og:url" content="https://portifolioleodev.herokuapp.com/">
    <meta property="og:image" content="https://portifolioleodev.herokuapp.com/images/person.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/glide.core.min.css">
    <link rel="stylesheet" href="css/glide.theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="https://portifolioleodev.herokuapp.com/images/og-img.ico" type="image/x-icon" />
    <title>Portifólio - Léo A.</title>
</head>
<body>
    <div id="informations" class="informations"><a target="_blank" href="https://api.whatsapp.com/send?phone=11984576899&text=Olá, quero saber mais sobre seus serviços."><h3><i class="fab fa-whatsapp"></i></a></h3></div>

    <div id="modal-container">
        <div class="modal-background">
            <div class="modal">
                <div class="image-modal">
                    <img style="max-width: 100%;margin-bottom: 40px;" src="images/person.jpg" alt="Leonardo A.">
                </div><!--image-modal-->
                <p>	Primeiramente, o que você acha que um profissional deve ter? Pensou em responsabilidade? Pensou em competência? A verdade é que um profissional deve ser diferenciado. E o que é ser diferenciado? Além de todas as habilidades necessárias, ele deve te passar segurança e confiança a cada projeto e trabalho. Bom, então agora devo me apresentar, me chamo Leonardo, tenho 17 anos e há cerca de 2 anos me interessei por desenvolvimento. Então há pelo menos 1 ano me apaixonei e decidi mergulhar de cabeça nesse mundo no qual eu passei do básico até o avançado com diversas experiências e projetos em que você verá abaixo na página. Não estou aqui para te vender e nem te convencer a nada, mas acho importante você ter a oportunidade de trabalhar com alguém que realmente valoriza o sucesso de seu cliente.</p>
            </div>
        </div>
    </div>

    <header>
        <div class="center">
            <nav class="desktop">
                <ul>
                    <li class="one"><i class="fas fa-user"></i>&nbsp; Sobre Mim &nbsp;<i class="fas fa-user"></i></li>
                    <li onclick="go('#sobre')"><i class="fas fa-rocket"></i>&nbsp; Especializacoes &nbsp;<i class="fas fa-rocket"></i></li>
                    <li onclick="go('#projetos')"><i class="fas fa-award"></i>&nbsp; Projetos Feitos &nbsp;<i class="fas fa-award"></i></li>
                </ul>
            </nav><!--desktop-->

            <div class="chamada-main">
                <h4>Aqui voce encontra</h4>
                <textarea id="input-home"></textarea>
            </div><!--chamada-main-->

            <div class="img-chamada">
                <img style="border-radius: 20%;" src="images/person.jpg" alt="CEO DevSec">
            </div><!--img-chamada-->
        </div><!--center-->
    </header>

    <section id="sobre" data-aos="fade-up" data-aos-duration="1000" class="sobre">
        <h2 class="title"><i class="fas fa-rocket"></i>&nbsp; Especialidades &nbsp;<i class="fas fa-rocket"></i></h2>

        <!-- Slider -->
        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="box-especialidades">
                            <h2><i class="fab fa-sass"></i></h2>
                        </div><!--box-especialidades-->
                    </li>

                    <li class="glide__slide">
                        <div class="box-especialidades">
                            <h2><i class="fab fa-php"></i></h2>
                        </div><!--box-especialidades-->
                    </li>
                    
                    <li class="glide__slide">
                        <div class="box-especialidades">
                            <h2><i class="fab fa-html5"></i></h2>
                        </div><!--box-especialidades-->
                    </li>

                    <li class="glide__slide">
                        <div class="box-especialidades">
                            <h2><i class="fab fa-css3"></i></h2>
                        </div><!--box-especialidades-->
                    </li>

                    <li class="glide__slide">
                        <div class="box-especialidades">
                            <h2><i class="fas fa-database"></i></h2>
                        </div><!--box-especialidades-->
                    </li>

                    <li class="glide__slide">
                        <div class="box-especialidades">
                            <h2><i class="fas fa-server"></i></h2>
                        </div><!--box-especialidades-->
                    </li>
                </ul>
            </div>
        </div>
    <!-- Slider -->
    </section><!--sobre-->

    <div class="divisor-arrow">
        <h3><i class="fas fa-chevron-down"></i></h3>
    </div><!--divisor-arrow-->

    <section id="certificados" class="certificados">
        <div class="center">

            <h2 class="title"><i class="fas fa-award"></i>&nbsp; Certificados &nbsp;<i class="fas fa-award"></i></h2>

            <div class="certificados-wraper">

                <div class="certificados-single">
                    <div class="w50 img-certificado">
                        <img src="images/certificado1.jpg" alt="">
                    </div><!--w50-->

                    <div class="w50 descricao-certificado">
                        <h2>Curso FrontEnd Completo</h2>
                        <p>Especializado em Frond End pela empresa líder de cursos de desenvolvimento web atualmente no Brasil.</p>
                    </div><!--w50-->
                    <div class="clear"></div><!--clear-->
                </div><!--certificados-single-->

                <div class="certificados-single">
                    <div class="w50 img-certificado">
                        <img src="images/certificado2.jpg" alt="">
                    </div><!--w50-->

                    <div class="w50 descricao-certificado">
                        <h2>Curso Desenvolvimento Web</h2>
                        <p>Sólidos conhecimentos em Desenvolvimento de Sistemas Web, com uma enorme vondade de aprender.</p>
                    </div><!--w50-->
                    <div class="clear"></div><!--clear-->
                </div><!--certificados-single-->

                <div class="certificados-single">
                    <div class="w50 img-certificado">
                        <img src="images/certificado3.jpg" alt="">
                    </div><!--w50-->

                    <div class="w50 descricao-certificado">
                        <h2>Curso Infraestrutura</h2>
                        <p>Experiência em gerenciamento de servidor e Infraestrutura, sempre aprendendo cada vez mais.</p>
                    </div><!--w50-->
                    <div class="clear"></div><!--clear-->
                </div><!--certificados-single-->

            </div><!--certificados-wraper-->

        </div><!--center-->
    </section><!--certificados-->


    <section id="projetos" class="projetos">
            <h2 data-aos="fade-up" data-aos-duration="1000" class="title"><i class="fas fa-check"></i>&nbsp; Projetos Concluídos &nbsp;<i class="fas fa-check"></i></h2><!--title-->

                <!-- Slider -->
                <div data-aos="fade-up" data-aos-duration="1000" class="glide2">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            
                            <li class="glide__slide">
                                <div class="box-projeto">
                                    <img src="images/proj1.jpg" alt="Landing Page">
                                </div><!--box-projeto-->
                            </li>
                            
                            <li class="glide__slide">
                                <div class="box-projeto">
                                    <img src="images/proj2.jpg" alt="Landing Page">
                                </div><!--box-projeto-->
                            </li>
                            
                            <li class="glide__slide">
                                <div class="box-projeto">
                                    <img src="images/proj3.jpg" alt="Landing Page">
                                </div><!--box-projeto-->
                            </li>
                            
                            <li class="glide__slide">
                                <div class="box-projeto">
                                    <img src="images/proj4.jpg" alt="Landing Page">
                                </div><!--box-projeto-->
                            </li>
                            
                            <li class="glide__slide">
                                <div class="box-projeto">
                                    <img src="images/proj5.jpg" alt="Landing Page">
                                </div><!--box-projeto-->
                            </li>
                            
                            <li class="glide__slide">
                                <div class="box-projeto">
                                    <img src="images/proj6.jpg" alt="Landing Page">
                                </div><!--box-projeto-->
                            </li>
                            
                            <li class="glide__slide">
                                <div class="box-projeto">
                                    <img src="images/proj7.jpg" alt="Landing Page">
                                </div><!--box-projeto-->
                            </li>
                            
                            <li class="glide__slide">
                                <div class="box-projeto">
                                    <img src="images/proj8.jpg" alt="Landing Page">
                                </div><!--box-projeto-->
                            </li>


                        </ul>
                    </div>
                </div>
                <!-- Slider -->

                <footer>
                    <h2 onclick="go('header')">Voltar para cima</h2>
                </footer>


    </section><!--projetos-->

    

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/animations.js"></script>
<script src="js/glide.min.js"></script>
<script src="js/slide.js"></script>
<script src="js/scripts.js"></script>
<script>AOS.init();</script>
</body>
</html>