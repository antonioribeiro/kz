@extends('layouts.onepage')

@section('content')
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
            <!-- begin container -->
            <div class="container">
                <!-- begin navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#home" class="navbar-brand scroll-to-target">
                        <img src="{{url('/')}}/assets/images/logo-30px.png" class="brand-logo-img" alt="">
                        <span class="brand-text">
                            <span class="text-theme">Kall Zenter</span>
                        </span>
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('auth.login') }}"><span class="text-theme">LOGIN</span></a></li>
                        {{--<li><a href="#about" data-click="scroll-to-target">SOBRE</a></li>--}}
                        <li><a href="#team" data-click="scroll-to-target">EQUIPE</a></li>
                        <li><a href="#service" data-click="scroll-to-target">SERVIÇOS</a></li>
                        <li><a href="#work" data-click="scroll-to-target">TRABALHO</a></li>
                        <li><a href="#client" data-click="scroll-to-target">CLIENTES</a></li>
                        <li><a href="#pricing" data-click="scroll-to-target">PREÇOS</a></li>
                        <li><a href="#contact" data-click="scroll-to-target">CONTATO</a></li>
                    </ul>
                </div>
                <!-- end navbar-collapse -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #header -->

        <!-- begin #home -->
        <div id="home" class="content has-bg home">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/home-bg.jpg" alt="Home" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container home-content">
                <h1>Bem-vindo ao Kall Zenter</h1>
                <h3>A rede de de atendimento multicanal do seu Call Center</h3>
                <p>
                    Nós criamos uma plataforma de atendimento multicanal, que permite que você disponibilize, <br>
                    para os seus clientes, chat, WhatsApp e Telegram, tudo integrado numa única interface de atendimento.
                </p>
                <a href="#team" data-click="scroll-to-target" class="btn btn-theme" >Explorar Mais</a>
                <a href="#pricing" data-click="scroll-to-target"class="btn btn-outline">Assinar Agora</a><br />
                <br />
                ou <a href="#">assinne</a> a nossa newsletter
            </div>
            <!-- end container -->
        </div>
        <!-- end #home -->

        <!-- begin #team -->
        <div id="team" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Nossa Equipe</h2>
                <p class="content-desc">
                    Nossa equipe é formada pelos melhores desenvolvedores e webdesigners do mercado.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- begin team -->
                        <div class="team">
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/user-1.jpg" alt="Ryan Teller" />
                            </div>
                            <div class="info">
                                <h3 class="name">Ryan Teller</h3>
                                <div class="title text-theme">FOUNDER</div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- begin team -->
                        <div class="team">
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/user-2.jpg" alt="Jonny Cash" />
                            </div>
                            <div class="info">
                                <h3 class="name">Johnny Cash</h3>
                                <div class="title text-theme">WEB DEVELOPER</div>
                                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- begin team -->
                        <div class="team">
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/user-3.jpg" alt="Mia Donovan" />
                            </div>
                            <div class="info">
                                <h3 class="name">Mia Donovan</h3>
                                <div class="title text-theme">WEB DESIGNER</div>
                                <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. </p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #team -->

        <!-- begin #quote -->
        <div id="quote" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/quote-bg.jpg" alt="Quote" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInLeft">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12 quote">
                        <i class="fa fa-quote-left"></i> Paixão levao ao design, design leva à performance e performance leva ao <span class="text-theme">sucesso</span>!
                        <i class="fa fa-quote-right"></i>
                        <small>Antonio Carlos Ribeiro, CEO - Brasil</small>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #quote -->

        <!-- beign #service -->
        <div id="service" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Nossos Serviços</h2>
                <p class="content-desc">
                    O Kall Zenter é uma plataforma de atendimento textual, desenvolvida para melhor atender serviços de Call Center.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-code"></i></div>
                            <div class="info">
                                <h4 class="title">WhatsApp</h4>
                                <p class="desc">Esta é a primeira plataforma multicanal de atendimento que suporta o WhatsApp, permitindo que limitados operadores atendam ao mesmo tempo um único número de telefone no WhatsApp.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-paint-brush"></i></div>
                            <div class="info">
                                <h4 class="title">Telegram</h4>
                                <p class="desc">Nossa plataforma também está integrada ao Telegram, exatamente como acontece com o WhatsApp. Com ela você poderá desfrutar de todas as vantages do atendimento Telegram dentro de uma plataforma única, sem que seja necessário fazer seus operadores trocar de sistema para atender outro canal.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-file"></i></div>
                            <div class="info">
                                <h4 class="title">Fácil de Customizar</h4>
                                <p class="desc">Nós oferecemos um serviço individual de customização da plataforma de chat, de forma que ela se integre perfeitamente às necessidades de design da sua plataforma de atendimento ou a do seu cliente.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-cog"></i></div>
                            <div class="info">
                                <h4 class="title">Salas de Chat</h4>
                                <p class="desc">Você poderá criar quantas salas de chat necessitar, para o atendimento direto a clientes, clientes de clientes ou mesmo aos grupos de trabalho internos da sua empresa.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-shopping-cart"></i></div>
                            <div class="info">
                                <h4 class="title">Design simples e cuidadoso</h4>
                                <p class="desc">Nossos designers seguem as mais recentes tendência do mercado, e assim criaram cuidadosamente uma plataforma de chat multicanal simples, bonita e arrojada.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-heart"></i></div>
                            <div class="info">
                                <h4 class="title">Suporte Gratuito</h4>
                                <p class="desc">Para garantir o seu e o nosso sucesso, colocamos à sua disposição 24/7 uma equipe de atendimento altamente qualificada para solucionar qualquer problema.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->

        <!-- beign #action-box -->
        <div id="action-box" class="content has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/action-bg.jpg" alt="Action" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInRight">
                <!-- begin row -->
                <div class="row action-box">
                    <!-- begin col-9 -->
                    <div class="col-md-9 col-sm-9">
                        <div class="icon-large text-theme">
                            <i class="fa fa-binoculars"></i>
                        </div>
                        <h3>VEJA O KALL ZENTER EM AÇÃO!</h3>
                        <p>
                            Você pode entrar em uma das nossas salas e conversar agora mesmo para ver como tudo funciona.
                        </p>
                    </div>
                    <!-- end col-9 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3">
                        <a href="#" class="btn btn-outline btn-block">Faça Um teste</a>
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #action-box -->

        <!-- begin #work -->
        <div id="work" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">Algumas Imagens</h2>
                <p class="content-desc">
                    Estas são imagens reais de atendimentos feitos pelo Kall Zenter.
                </p>
                <!-- begin row -->
                <div class="row row-space-10">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/work-1.jpg" alt="Work 1" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Aliquam molestie</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/work-3.jpg" alt="Work 3" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Quisque at pulvinar lacus</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/work-5.jpg" alt="Work 5" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Vestibulum et erat ornare</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/work-7.jpg" alt="Work 7" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Sed vitae mollis magna</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row row-space-10">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/work-2.jpg" alt="Work 2" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Suspendisse at mattis odio</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/work-4.jpg" alt="Work 4" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Aliquam vitae commodo diam</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/work-6.jpg" alt="Work 6" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Phasellus eu vehicula lorem</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/work-8.jpg" alt="Work 8" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Morbi bibendum pellentesque</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #work -->

        <!-- begin #client -->
        <div id="client" class="content has-bg bg-green" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{url('/')}}/templates/seantheme.com/color-admin-v1.9/one-page-parallax/assets/img/client-bg.jpg" alt="Client" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInUp">
                <h2 class="content-title">Testemunhos de Clientes</h2>
                <!-- begin carousel -->
                <div class="carousel testimonials slide" data-ride="carousel" id="testimonials">
                    <!-- begin carousel-inner -->
                    <div class="carousel-inner text-center">
                        <!-- begin item -->
                        <div class="item active">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                O serviço é incrível! A qualidade do atendimento melhorou 1000% depois <br>
                                que resolvemos adotar o Kall Zenter para atender nossos clientes corporativos.
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name"> — <span class="text-theme">Aline Amorim</span>, Instituto Gestalt em Figura</div>
                        </div>
                        <!-- end item -->
                        <!-- begin item -->
                        <div class="item">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                Estávamos há tempos procurando um serviço que, além do chat padrão, incluísse também WhatsApp e Telegram, <br>
                                para concentrar o atendimento numa única ferramenta. O Kall Zenter faz isso e muito mais.
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name"> — <span class="text-theme">Lilian Aparecida Ribeiro</span>, Vevey</div>
                        </div>
                        <!-- end item -->
                        <!-- begin item -->
                        <div class="item">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                Estávamos muito descontentes com a performance da ferramenta que usávamos anteriormente, <br>
                                o Kall Zenter resolveu isso e muito mais. Agora podemos administrar toda a equipe de atendimento <br>
                                remotamente e ver como está a performance está em cada um dos nossos clientes, tudo online.
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name"> — <span class="text-theme">Anselmo Dominguez</span>, CyS</div>
                        </div>
                        <!-- end item -->
                    </div>
                    <!-- end carousel-inner -->
                    <!-- begin carousel-indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonials" data-slide-to="1" class=""></li>
                        <li data-target="#testimonials" data-slide-to="2" class=""></li>
                    </ol>
                    <!-- end carousel-indicators -->
                </div>
                <!-- end carousel -->
            </div>
            <!-- end containter -->
        </div>
        <!-- end #client -->

        <!-- begin #pricing -->
        <div id="pricing" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Nossos Preços</h2>
                <p class="content-desc">
                    Nossos serviços são cobrados por operadores de Call Center, veja abaixo nossa tabela de preços
                </p>
                <!-- begin pricing-table -->
                <ul class="pricing-table col-4">
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>Starter</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">GRATUITO</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>Chats: ilimitado</li>
                                <li>1 Número WhatsApp</li>
                                <li>1 Número Telegram</li>
                                <li>1 Cliente</li>
                                <li>2 Operadores</li>
                                <li>Supervisores: ilimitados</li>
                                <li>Administradores: ilimitados</li>
                                <li>Suporte por e-mail 24/7</li>
                            </ul>
                            <div class="footer">
                                <a href="{{ route('register') }}" class="btn btn-inverse btn-block">Experimente</a>
                            </div>
                        </div>
                    </li>
                    <li class="highlight" data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>Premium</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">R$ 19,99</span>
                                    <span class="price-tenure">por operador/mês</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>Chats: ilimitado</li>
                                <li>Números WhatsApp: ilimitado</li>
                                <li>Números Telegram: ilimitado</li>
                                <li>Clientes: ilimitado</li>
                                <li>Supervisores: ilimitados</li>
                                <li>Administradores: ilimitados</li>
                                <li>Suporte telefônico: 24/7</li>
                            </ul>
                            <div class="footer">
                                <a href="{{ route('register') }}" class="btn btn-theme btn-block">Assine Agora</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>Platinum</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">R$ 1.999,99</span>
                                    <span class="price-tenure">por mês</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>Chats: ilimitado</li>
                                <li>1 Número WhatsApp</li>
                                <li>1 Número Telegram</li>
                                <li>1 Cliente</li>
                                <li>150 Operadores</li>
                                <li>Supervisores: ilimitados</li>
                                <li>Administradores: ilimitados</li>
                                <li>Suporte por e-mail 24/7</li>
                            </ul>
                            <div class="footer">
                                <a href="{{ route('register') }}" class="btn btn-theme btn-block">Assine Agora</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>Diamond</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">R$ 4.999,99</span>
                                    <span class="price-tenure">por mês</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>Chats: ilimitado</li>
                                <li>Números WhatsApp: ilimitado</li>
                                <li>Números Telegram: ilimitado</li>
                                <li>Clientes: ilimitado</li>
                                <li>Operadores: ilimitados</li>
                                <li>Supervisores: ilimitados</li>
                                <li>Administradores: ilimitados</li>
                                <li>Suporte telefônico: 24/7</li>
                            </ul>
                            <div class="footer">
                                <a href="{{ route('register') }}" class="btn btn-theme btn-block">Assine Agora</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end container -->
        </div>
        <!-- end #pricing -->

        <!-- begin #contact -->
        <div id="contact" class="content bg-silver-lighter" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Entre Em Contato</h2>
                <p class="content-desc">
                    Estamos à sua inteira disposição
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-md-6" data-animation="true" data-animation-type="fadeInLeft">
                        <h3>Quer saber mais?</h3>
                        <p>
                            Caso queira mais informações ou deseje que a gente entre em contato com você por telefone, por favor envie-nos seus dados.
                        </p>
                        <p>
                            <strong>PragmaRX Ltda.</strong><br />
                            Rua Professor Quintino do Vale<br />
                            Estácio, Rio de Janeiro<br />
                            20.250-030<br />
                        </p>
                        <p>
                            <span class="phone">(21) 9-8088-2233</span><br />
                            <a href="mailto:atendimento@kallzenter.com">atendimento@kallzenter.com</a>
                        </p>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 form-col" data-animation="true" data-animation-type="fadeInRight">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-3">Nome <span class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email <span class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Mensagem <span class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3"></label>
                                <div class="col-md-9 text-left">
                                    <button type="submit" class="btn btn-theme btn-block">Enviar Mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #contact -->

        <!-- begin #footer -->
        <div id="footer" class="footer">
            <div class="container">
                <div class="footer-brand">
                    <img src="{{url('/')}}/assets/images/logo-40px.png" alt=""> <br>
                    Kall Zenter
                </div>
                <p>
                    &copy; Copyright Color PragmaRX 2015 <br />
                </p>
                <p class="social-list">
                    <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-fw"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                    <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                </p>
            </div>
        </div>
        <!-- end #footer -->

    </div>
    <!-- end #page-container -->
@stop
