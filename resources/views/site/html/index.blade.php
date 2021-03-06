<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Deraj Inventory</title>
        <meta name="description" content="HTML5 Landing Page Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Filip Greksa">

        <!-- FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dosis:300,400,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('assets/css/entypo.css')}}">

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/jquery.mb.YTPlayer.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">


        <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo asset('assets/js/vendor/jquery-1.11.3.min.js') ?>"><\/script>')</script>


        <!--nicedit-->
        @yield('adminstack')     
        <!--nicedit-->

        <script src="{{asset('assets/js/vendor/modernizr.js')}}"></script>



    </head>
    <body class="video-bg">


        <!--nic panel floating buttons-->
        @yield('adminbar')        
        <!--nic panel floating buttons-->


        <!-- Preloader -->
        <div class="preloader flex flex-middle flex-center">
            <div class="wrapper">
                <div class="loader"></div>
            </div>
        </div>


        <!-- Navbar -->
        <nav class="navbar navbar-burger navbar-fixed-top is-transparent">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed icon icon-menu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    </button>
                    <a class="navbar-brand" href="#">DerajInventory</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                    <ul class="nav navbar-nav" >
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">This</a></li>
                                <li><a href="#">IS</a></li>
                                <li><a href="#">Something Added Later</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


        <div style="position: fixed; top: 0; width: 100%; height: 100%; z-index: 0;">
            <video id="videobgn" autoplay loop muted>                
                <source src="{{asset('assets/yourmovie.webm')}}" type="video/webm">
                <source src="{{asset('assets/yourmovie.mp4')}}" type="video/mp4">
            </video>
        </div>


        <!-- Header -->
        <header class="header hero flex flex-middle flex-center" role="banner">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12" >
                        <hgroup class="title-group" data-editable data-name="jumbotron">
                            {!!App\Models\Block::findByName('jumbotron')->block_html!!}
                        </hgroup>
                        <div class="btn-duo" style="z-index: 2" data-editable data-name="jumbotron-buttons">
                            {!!App\Models\Block::findByName('jumbotron-buttons')->block_html!!}
                        </div>                        
                    </div>
                </div>
            </div>
        </header>

        <!-- Content -->
        <main class="main" role="main">

            <!-- Clients -->
            <section class="section clients no-padding text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <ul class="slider clients-logo">
                                <li><img src="{{asset('assets/img/clients/logo01.png')}}" alt="client" /></li>
                                <li><img src="{{asset('assets/img/clients/logo02.png')}}" alt="client" /></li>
                                <li><img src="{{asset('assets/img/clients/logo03.png')}}" alt="client" /></li>
                                <li><img src="{{asset('assets/img/clients/logo04.png')}}" alt="client" /></li>
                                <li><img src="{{asset('assets/img/clients/logo05.png')}}" alt="client" /></li>
                                <li><img src="{{asset('assets/img/clients/logo06.png')}}" alt="client" /></li>
                                <li><img src="{{asset('assets/img/clients/logo07.png')}}" alt="client" /></li>
                                <li><img src="{{asset('assets/img/clients/logo08.png')}}" alt="client" /></li>
                                <li><img src="{{asset('assets/img/clients/logo09.png')}}" alt="client" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features -->
            <section class="section text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" >
                            <hgroup class="title-group block2"  data-editable data-name="mainfeatures">
                                {!!App\Models\Block::findByName('mainfeatures')->block_html!!}
                            </hgroup>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature block3" data-editable data-name="feature1">
                                {!!App\Models\Block::findByName('feature1')->block_html!!}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature block4" data-editable data-name="feature3">
                                {!!App\Models\Block::findByName('feature3')->block_html!!}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature block5" data-editable data-name="feature2">
                                {!!App\Models\Block::findByName('feature2')->block_html!!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features -->
            <section class="section text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 block6" data-editable data-name="subfeature">
                            {!!App\Models\Block::findByName('subfeature')->block_html!!}
                        </div>
                        <div class="col-xs-12">
                            <div  class="figure">
                                <img src="{{asset('assets/img/landscpiphone.png')}}" alt="iphone" />                                
                            </div>                            
                        </div>
                    </div>
                </div>
            </section>

            <!-- Fun Facts / Counters -->
            <section class="section counters">
                <div class="container">
                    <div class="row" id="">
                        <div class="col-sm-4 col-md-4">
                            <div class="numbers">
                                <span class="number" data-from="0" data-to="987" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="number-info">Creative Ideas</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="numbers">
                                <span class="number" data-from="0" data-to="218" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="number-info">Projects Designed</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="numbers">
                                <span class="number" data-from="0" data-to="1356" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="number-info">Happy Customers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features / Left Image -->
            <section class="section features">
                <div class="container">
                    <div class="row flex flex-middle">
                        <div class="col-xs-12 col-md-6">
                            <figure class="figure">
                                <img src="{{asset('assets/img/iphone6right.png')}}" alt="iphone" />
                            </figure>
                        </div>
                        <div class="col-md-5">
                            <div class="feature"  data-editable data-name="focus1">
                                {!!App\Models\Block::findByName('focus1')->block_html!!}                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features / Right Image -->
            <section class="section features">
                <div class="container">
                    <div class="row flex flex-middle">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="feature text-right" data-editable data-name="focus2">
                                {!!App\Models\Block::findByName('focus2')->block_html!!}                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <figure class="figure">
                                <img src="{{asset('assets/img/iphone6left.png')}}" alt="iphone" />
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call To Action -->
            <section class="section get-started">
                <div class="container">
                    <div class="row">
                        <article class="call-to flex flex-middle" id="nic_block_7">
                            <div class="col-md-6 col-md-offset-2"  data-editable data-name="calltoaction">
                                {!!App\Models\Block::findByName('calltoaction')->block_html!!}          
                            </div>
                            <div class="col-md-4"  data-editable data-name="calltoaction-buttons">
                                {!!App\Models\Block::findByName('calltoaction-buttons')->block_html!!}                                         
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Features / Mockup -->
            <section class="section text-center">
                <div class="container">
                    <div class="row" id="nic_block_8">
                        <div class="col-md-12" data-editable data-name="morefeatures">
                            {!!App\Models\Block::findByName('morefeatures')->block_html!!}                                         
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <!-- Left Box -->
                            <ul class="boxes-list mirror">
                                <li>
                                    <div class="iconbox">
                                        <i class="icon icon-fingerprint"></i>
                                        <div class="box" data-editable data-name="morefeature1">
                                            {!!App\Models\Block::findByName('morefeature1')->block_html!!}  

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="iconbox">
                                        <i class="icon icon-shield"></i>
                                        <div class="box" data-editable data-name="morefeature2">
                                            {!!App\Models\Block::findByName('morefeature2')->block_html!!}  
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="iconbox">
                                        <i class="icon icon-network"></i>
                                        <div class="box" data-editable data-name="morefeature3">
                                            {!!App\Models\Block::findByName('morefeature3')->block_html!!}  
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 hidden-xs hidden-sm">
                            <figure>
                                <img src="{{asset('assets/img/iphone6right.png')}}" class="centered" alt="iphone" />
                            </figure>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <!-- Right Box -->
                            <ul class="boxes-list">
                                <li>
                                    <div class="iconbox">
                                        <i class="icon icon-layers"></i>
                                        <div class="box" data-editable data-name="morefeature4">
                                            {!!App\Models\Block::findByName('morefeature4')->block_html!!}  
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="iconbox">
                                        <i class="icon icon-sound-mix"></i>
                                        <div class="box" data-editable data-name="morefeature5">
                                            {!!App\Models\Block::findByName('morefeature5')->block_html!!}  
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="iconbox">
                                        <i class="icon icon-colours"></i>
                                        <div class="box" data-editable data-name="morefeature6">
                                            {!!App\Models\Block::findByName('morefeature6')->block_html!!}  
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Video -->
            <section class="section video-section flex flex-middle text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <h3 class="title inverse">View our app demo</h3>
                                <a href="https://www.youtube.com/watch?v=S6whDdO6oAY" class="watch-video">
                                    <i class="icon icon-controller-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery / Parallax Scene -->
            <section class="section text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-group" data-editable data-name="preview">
                                {!!App\Models\Block::findByName('preview')->block_html!!}  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Parallax Scene -->
                            <article class="scene-container">
                                <ul id="scene" class="scene">
                                    <li class="layer" data-depth="0.50">
                                        <img src="{{asset('assets/img/parallax/scr01.png')}}" alt="screen" />
                                    </li>
                                    <li class="layer" data-depth="0.40">
                                        <img src="{{asset('assets/img/parallax/scr02.png')}}" alt="screen" />
                                    </li>
                                    <li class="layer" data-depth="0.30">
                                        <img src="{{asset('assets/img/parallax/scr03.png')}}" alt="screen" />
                                    </li>
                                    <li class="layer" data-depth="0.40">
                                        <img src="{{asset('assets/img/parallax/scr04.png')}}" alt="screen" />
                                    </li>
                                    <li class="layer" data-depth="0.50">
                                        <img src="{{asset('assets/img/parallax/scr05.png')}}" alt="screen" />
                                    </li>
                                    <li class="layer" data-depth="0.40">
                                        <img src="{{asset('assets/img/parallax/scr06.png')}}" alt="screen" />
                                    </li>
                                    <li class="layer" data-depth="0.60">
                                        <img src="{{asset('assets/img/parallax/scr07.png')}}" alt="screen" />
                                    </li>
                                    <li class="layer" data-depth="0.50">
                                        <img src="{{asset('assets/img/parallax/scr08.png')}}" alt="screen" />
                                    </li>
                                    <li class="layer" data-depth="0.60">
                                        <img src="{{asset('assets/img/parallax/scr09.png')}}" alt="screen" />
                                    </li>
                                </ul>
                            </article>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <article class="call-to text-center" >
                                <div data-editable data-name="preview-end">
                                    {!!App\Models\Block::findByName('preview-end')->block_html!!}  
                                </div>
                                <button id="gallery" class="btn btn-danger rounded">Open Gallery</button>
                                <!-- Gallery / hidden in DOM / open with Button #gallery-->
                                <ul id="gallery" class="gallery mfp-hide">
                                    <li><a href="{{asset('assets/img/screens/placeholder3.jpg')}}"></a></li>
                                    <li><a href="{{asset('assets/img/screens/placeholder3a.jpg')}}"></a></li>
                                    <li><a href="{{asset('assets/img/screens/placeholder3b.jpg')}}"></a></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pricing Tables -->
            <section class="section pricing text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hgroup class="title-group">
                                <h3 class="section-title">Best Price</h3>
                                <h5 class="subtitle">Choose from offer of best plans and enjoy</h5>
                            </hgroup>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <ul class="pricing-table list-unstyled">
                                <li class="title">
                                    Beginner
                                    <i class="icon icon-leaf"></i>
                                </li>
                                <li class="description">1 Database</li>
                                <li class="description">Awesome description</li>
                                <li class="description">Something interesting</li>
                                <li class="price">19.99<sup>$</sup></li>
                                <li class="cta-button"><a class="btn btn-info rounded" href="#">Buy Now</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <ul class="pricing-table list-unstyled">
                                <li class="title">
                                    Standard
                                    <i class="icon icon-attachment"></i>
                                </li>
                                <li class="description">1 Database</li>
                                <li class="description">Awesome description</li>
                                <li class="description">Something interesting</li>
                                <li class="price">39.99<sup>$</sup></li>
                                <li class="cta-button"><a class="btn btn-info rounded" href="#">Buy Now</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <ul class="pricing-table recommended list-unstyled">
                                <li class="title">
                                    Premium
                                    <i class="icon icon-rocket"></i>
                                </li>
                                <li class="description">1 Database</li>
                                <li class="description">Awesome description</li>
                                <li class="description">Something interesting</li>
                                <li class="price">69.99<sup>$</sup></li>
                                <li class="cta-button"><a class="btn btn-danger rounded" href="#">Buy Now</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <ul class="pricing-table list-unstyled">
                                <li class="title">
                                    Custom
                                    <i class="icon icon-tools"></i>
                                </li>
                                <li class="description">1 Database</li>
                                <li class="description">Awesome description</li>
                                <li class="description">Something interesting</li>
                                <li class="price">169.99<sup>$</sup></li>
                                <li class="cta-button"><a class="btn btn-info rounded" href="#">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Faq -->
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hgroup class="title-group text-center">
                                <h3 class="section-title">Frequently Asked Questions</h3>
                                <h5 class="subtitle">Start with us is totally easy for everyone</h5>
                            </hgroup>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="title">Good to Know</h4>
                            <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">First Tab</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Second Tab</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Third Tab</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        The lysine contingency - it's intended to prevent the spread of the animals is case they ever got off the island. Dr. Wu inserted a gene that makes a single faulty enzyme in protein metabolism.<br> The animals can't manufacture the amino acid lysine. Unless they're continually supplied with lysine by us, they'll slip into a coma and die.<br> Your bones don't break, mine do. That's clear.
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="title">Questions and Answers</h4>
                            <!-- Collapse -->
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                First Question
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Second Question
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Third Question
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                            </div><!-- / Collapse end -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call To Action -->
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <article class="call-to flex flex-middle">
                                <div class="col-md-6 col-md-offset-2">
                                    <h3 class="title">Would you like to find out more?</h3>
                                    <p>Instruction to the audience to provoke an immediate response</p>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="btn btn-danger rounded">Contact Us</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials -->
            <section class="section testimonials text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hgroup class="title-group">
                                <h3 class="section-title">Customer is always right</h3>
                                <h5 class="subtitle">What say our best clients about us</h5>
                            </hgroup>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="slider quotes">
                                <li>
                                    <blockquote class="quote">
                                        Perfection is achieved not when there is nothing more to add, but when there is nothing left to take away
                                        <cite>Antoine de Saint-Exupery | <a href="#">The Insider Company</a></cite>
                                    </blockquote>
                                    <div class="dot-trigger">
                                        <figure class="avatar">
                                            <img src="{{asset('assets/img/thumbs/placeholder.jpg')}}" alt="customer" class="avatar"/>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <blockquote class="quote">
                                        Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations
                                        <cite>Steve Jobs | <a href="#">The Insider Company</a></cite>
                                    </blockquote>
                                    <div class="dot-trigger">
                                        <figure class="avatar">
                                            <img src="{{asset('assets/img/thumbs/placeholder.jpg')}}" alt="customer" class="avatar"/>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <blockquote class="quote">
                                        The work you do while you procrastinate is probably the work you should be doing for the rest of your life
                                        <cite>Jessica Hische | <a href="#">The Insider Company</a></cite>
                                    </blockquote>
                                    <div class="dot-trigger">
                                        <figure class="avatar">
                                            <img src="{{asset('assets/img/thumbs/placeholder.jpg')}}" alt="customer" class="avatar"/>
                                        </figure>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call To Action / Download -->
            <section class="section download-app">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <article class="call-to text-center">
                                <h3 class="title">Are you ready?</h3>
                                <p>Choose your platform and join the best</p>
                                <div class="badge-buttons">
                                    <a href="#" class="btn btn-black btn-badge">
                                        <i class="icon icon-app-store"></i>
                                        Download on the
                                        <span>App Store</span>
                                    </a>
                                    <a href="#" class="btn btn-black btn-badge">
                                        <i class="icon icon-google-play"></i>
                                        Get it on
                                        <span>Google play</span>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!-- Footer -->
        <footer class="footer" role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="social-list">
                            <li><a href="#" class="icon icon-facebook"></a></li>
                            <li><a href="#" class="icon icon-twitter"></a></li>
                            <li><a href="#" class="icon icon-pinterest"></a></li>
                            <li><a href="#" class="icon icon-flickr"></a></li>
                            <li><a href="#" class="icon icon-dribbble"></a></li>
                            <li><a href="#" class="icon icon-behance"></a></li>
                        </ul>
                        <nav class="foter-navbar" role="navigation">
                            <ul class="footer-nav" role="menubar">
                                <li role="menuitem"><a href="#">About</a></li>
                                <li role="menuitem"><a href="#">Jobs</a></li>
                                <li role="menuitem"><a href="#">Press</a></li>
                                <li role="menuitem"><a href="#">Contact</a></li>
                                <li role="menuitem"><a href="#">Terms</a></li>
                                <li role="menuitem"><a href="#">Privacy</a></li>
                            </ul>
                        </nav>
                        <p class="copyright">&copy; <time datetime="2015">2015</time> Hansen Theme, All Rights Reserved, Made with <i class="icon icon-tools"></i> by <a href="http://filipgreksa.com/" target="_blank">Filip</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('assets/js/vendor/jquery.appear.js')}}"></script>
        <script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery.countTo.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery.parallax.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
        <!-- Background video -->
        <script src="{{asset('assets/js/vendor/jquery.mb.YTPlayer.min.js')}}"></script>


        <script src="{{asset('assets/js/main.js')}}"></script>


    </body>
</html>