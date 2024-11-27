<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/home-whats-footer.css">
    <link rel="stylesheet" href="/css/pesquisa-navbar.css">
    <title>Elegance Moda</title>
</head>
<body>
    <!-- Hearder fixo no topo -->
    <div class="promo-container">
        <span id="promo-text"></span>
        <i class="material-icons copy-icon" onclick="copyPromoCode()">content_copy</i>
        <i class="material-icons check-icon">check_circle</i>
        <span id="copy-message">Copiado!</span>
    </div>

    <!-- Logo -->
    <div id="logo-container" class="logo-container">
        <img src="/assets/home/logo.png" alt="Logo da empresa">
    </div>

    <!-- Navbar -->
    <div class="navbar">
        <div class="container">
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="index.html" class="active">HOME</a></li>
                    <li><a href="novidades.html">NOVIDADES</a></li>
                    <li><a href="feminino.html">FEMININO</a></li>
                    <li><a href="masculino.html">MASCULINO</a></li>
                    <li class="nav-icon"><a href="pagina-de-pesquisa.html" id="search-link"><i class="fas fa-search"></i></a></li>
                    <li class="nav-icon"><a href="pagina-de-login.html" id="login"><i class="fas fa-user"></i></a></li>
                    <li class="nav-icon"><a href="carrinho-de-compras.html" id="cart"><i class="fas fa-shopping-bag"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Contêiner de pesquisa -->
    <div id="search-container">
        <input type="text" id="search-input" placeholder="Digite sua pesquisa">
        <button id="search-button"><i class="fas fa-search"></i></button>
    </div>

    <!-- Contêiner do video -->
    <div class="video-container">
        <video autoplay muted loop>
            <source src="/assets/home/banner-principal.mp4" type="video/mp4">
            Seu navegador não suporta vídeo HTML5.
        </video>
    </div>   
    
    <!-- Buttons da pagina -->
    <div class="gender-buttons">
        <a href="feminino.html" class="btn female">Feminino</a>
        <a href="masculino.html" class="btn male">Masculino</a>
    </div>
    
    <!-- Carousel itens-->
    <div class="carousel-container">
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <div class="carousel">
            <div class="carousel-item">
                <a href="vestidos.html" onclick="openPage('vestidos')">
                    <img src="/assets/vestidos/vestido-principal.png" alt="Vestidos">
                </a>
            </div>
            <div class="carousel-item">
                <a href="calcas.html" onclick="openPage('calca')">
                    <img src="/assets/calças/calca-principal.jpg" alt="Calça">
                </a>
            </div>
            <div class="carousel-item">
                <a href="casacos.html" onclick="openPage('casaco')">
                    <img src="/assets/casacos/casaco-principal.jpg" alt="Casaco">
                </a>
            </div>
            <div class="carousel-item">
                <a href="saias.html" onclick="openPage('saia')">
                    <img src="/assets/saias/saia-principal.jpg" alt="Saia">
                </a>
            </div>
            <div class="carousel-item">
                <a href="blazers.html" onclick="openPage('blazer')">
                    <img src="/assets/blazers/blazer-principal.jpg" alt="Blazer">
                </a>
            </div>
        </div>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>

    <!-- carousel de produtos mais vistos -->
    <div class="slider-wrapper">
        <h2 class="slider-title">VISTOS RECENTEMENTE</h2>
        <div id="customSliderExampleIndicators" class="slider slide" data-ride="slider">
            <div class="slider-inner">
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-1.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-1/banner-1.jpg" alt="Casaco Jeans Com Cinto">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-1/banner-2.jpg" alt="Casaco Jeans Com Cinto">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Casaco Jeans Com Cinto</h4>
                        <div class="product-sizes">
                            <span class="size-square">PP</span>
                            <span class="size-square">P</span>
                            <span class="size-square">M</span>
                            <span class="size-square">G</span>
                        </div>
                        <p class="product-price">R$ 1.223,04</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-2.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-2/banner-1.jpg" alt="Casaco De Lã Batida Xadrez">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-2/banner-2.jpg" alt="Casaco De Lã Batida Xadrez">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Casaco De Lã Batida Xadrez</h4>
                        <div class="product-sizes">
                            <span class="size-square">PP</span>
                            <span class="size-square">P</span>
                            <span class="size-square">M</span>
                            <span class="size-square">G</span>
                        </div>
                        <p class="product-price">R$ 1.541,44</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-3.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-3/banner-1.jpg" alt="Casaco Alfaiataria Xadrez">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-3/banner-2.jpg" alt="Casaco Alfaiataria Xadrez">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Casaco Alfaiataria Xadrez</h4>
                        <div class="product-sizes">
                            <span class="size-square">PP</span>
                            <span class="size-square">P</span>
                            <span class="size-square">M</span>
                            <span class="size-square">G</span>
                        </div>
                        <p class="product-price">R$ 2.095,24</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-4.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-4/banner-1.jpg" alt="Casaco Alfaiataria Peluciado">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-4/banner-2.jpg" alt="Casaco Alfaiataria Peluciado">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Casaco Alfaiataria Peluciado</h4>
                        <div class="product-sizes">
                            <span class="size-square">PP</span>
                            <span class="size-square">P</span>
                            <span class="size-square">M</span>
                            <span class="size-square">G</span>
                        </div>
                        <p class="product-price">R$ 2.379,44</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-5.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-5/banner-1.jpg" alt="Casaco Alfaiataria Loose Xadrez">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-5/banner-2.jpg" alt="Casaco Alfaiataria Loose Xadrez">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Casaco Alfaiataria Loose Xadrez</h4>
                        <div class="product-sizes">
                            <span class="size-square">PP</span>
                            <span class="size-square">P</span>
                            <span class="size-square">M</span>
                            <span class="size-square">G</span>
                        </div>
                        <p class="product-price">R$ 1.145,62</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-6.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-6/banner-1.jpg" alt="Calça Jeans Bia">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-6/banner-2.jpg" alt="Calça Jeans Bia">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Calça Jeans Bia</h4>
                        <div class="product-sizes">
                            <span class="size-square">34</span>
                            <span class="size-square">36</span>
                            <span class="size-square">38</span>
                            <span class="size-square">40</span>
                            <span class="size-square">42</span>
                            <span class="size-square">44</span>
                        </div>
                        <p class="product-price">R$ 830,06</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-7.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-7/banner-1.jpg" alt="Calça De Sarja Juliette">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-7/banner-2.jpg" alt="Calça De Sarja Juliette">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Calça De Sarja Juliette</h4>
                        <div class="product-sizes">
                            <span class="size-square">34</span>
                            <span class="size-square">36</span>
                            <span class="size-square">38</span>
                            <span class="size-square">40</span>
                            <span class="size-square">42</span>
                            <span class="size-square">44</span>
                        </div>
                        <p class="product-price">R$ 428,26</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-8.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-8/banner-1.jpg" alt="Calça De Sarja Joana">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-8/banner-2.jpg" alt="Calça De Sarja Joana">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Calça De Sarja Joana</h4>
                        <div class="product-sizes">
                            <span class="size-square">34</span>
                            <span class="size-square">36</span>
                            <span class="size-square">38</span>
                            <span class="size-square">40</span>
                            <span class="size-square">42</span>
                            <span class="size-square">44</span>
                        </div>
                        <p class="product-price">R$ 565,46</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-9.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-9/banner-1.jpg" alt="Calça Comfort Canelada">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-9/banner-2.jpg" alt="Calça Comfort Canelada">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Calça Comfort Canelada</h4>
                        <div class="product-sizes">
                            <span class="size-square">34</span>
                            <span class="size-square">36</span>
                            <span class="size-square">38</span>
                            <span class="size-square">40</span>
                            <span class="size-square">42</span>
                            <span class="size-square">44</span>
                        </div>
                        <p class="product-price">R$ 370,44</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-10.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-10/banner-1.jpg" alt="Calça De Nylon Joana">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-10/banner-2.jpg" alt="Calça De Nylon Joana">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Calça De Nylon Joana</h4>
                        <div class="product-sizes">
                            <span class="size-square">34</span>
                            <span class="size-square">36</span>
                            <span class="size-square">38</span>
                            <span class="size-square">40</span>
                            <span class="size-square">42</span>
                            <span class="size-square">44</span>
                        </div>
                        <p class="product-price">R$ 684,04</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-11.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-11/banner-1.jpg" alt="Calça Cargo De Sarja Jade">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-11/banner-2.jpg" alt="Calça Cargo De Sarja Jade">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Calça Cargo De Sarja Jade</h4>
                        <div class="product-sizes">
                            <span class="size-square">34</span>
                            <span class="size-square">36</span>
                            <span class="size-square">38</span>
                            <span class="size-square">40</span>
                            <span class="size-square">42</span>
                            <span class="size-square">44</span>
                        </div>
                        <p class="product-price">R$ 861,42</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-12.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-12/banner-1.jpg" alt="Calça Alfaiataria Jade Com Linho">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-12/banner-2.jpg" alt="Calça Alfaiataria Jade Com Linho">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Calça Alfaiataria Jade Com Linho</h4>
                        <div class="product-sizes">
                            <span class="size-square">34</span>
                            <span class="size-square">36</span>
                            <span class="size-square">38</span>
                            <span class="size-square">40</span>
                            <span class="size-square">42</span>
                            <span class="size-square">44</span>
                        </div>
                        <p class="product-price">R$ 447,86</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-13.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-13/banner-1.jpg" alt="Calça Alfaiataria Com Linho Preto">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-13/banner-2.jpg" alt="Calça Alfaiataria Com Linho Preto">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Calça Alfaiataria Com Linho Preto</h4>
                        <div class="product-sizes">
                            <span class="size-square">34</span>
                            <span class="size-square">36</span>
                            <span class="size-square">38</span>
                            <span class="size-square">40</span>
                            <span class="size-square">42</span>
                            <span class="size-square">44</span>
                        </div>
                        <p class="product-price">R$ 488,04</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-14.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-14/banner-1.jpg" alt="Calça Alfaiataria Jade Com Bolso">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-14/banner-2.jpg" alt="Calça Alfaiataria Jade Com Bolso">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Calça Alfaiataria Jade Com Bolso</h4>
                        <div class="product-sizes">
                            <span class="size-square">34</span>
                            <span class="size-square">36</span>
                            <span class="size-square">38</span>
                            <span class="size-square">40</span>
                            <span class="size-square">42</span>
                            <span class="size-square">44</span>
                        </div>
                        <p class="product-price">R$ 577,22</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-15.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-15/banner-1.jpg" alt="Calça Alfaiataria Com Prega">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-15/banner-2.jpg" alt="Calça Alfaiataria Com Prega">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Calça Alfaiataria Com Prega</h4>
                        <div class="product-sizes">
                            <span class="size-square">34</span>
                            <span class="size-square">36</span>
                            <span class="size-square">38</span>
                            <span class="size-square">40</span>
                            <span class="size-square">42</span>
                            <span class="size-square">44</span>
                        </div>
                        <p class="product-price">R$ 517,44</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-16.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-16/banner-1.jpg" alt="Calca Cropped Com Elástico Laise">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-16/banner-2.jpg" alt="Calca Cropped Com Elástico Laise">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Calca Cropped Com Elástico Laise</h4>
                        <div class="product-sizes">
                            <span class="size-square">34</span>
                            <span class="size-square">36</span>
                            <span class="size-square">38</span>
                            <span class="size-square">40</span>
                            <span class="size-square">42</span>
                            <span class="size-square">44</span>
                        </div>
                        <p class="product-price">R$ 293,02</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-17.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-17/banner-1.jpg" alt="Vestido Comfort Com Fenda">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-17/banner-2.jpg" alt="Vestido Comfort Com Fenda">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Vestido Comfort Com Fenda</h4>
                        <div class="product-sizes">
                            <span class="size-square">PP</span>
                            <span class="size-square">P</span>
                            <span class="size-square">M</span>
                            <span class="size-square">G</span>
                        </div>
                        <p class="product-price">R$ 282,24</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-18.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-18/banner-1.jpg" alt="Vestido Com Botões Canelado">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-18/banner-2.jpg" alt="Vestido Com Botões Canelado">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Vestido Com Botões Canelado</h4>
                        <div class="product-sizes">
                            <span class="size-square">PP</span>
                            <span class="size-square">P</span>
                            <span class="size-square">M</span>
                            <span class="size-square">G</span>
                        </div>
                        <p class="product-price">R$ 391,02</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-19.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-19/banner-1.jpg" alt="Vestido Com Botões Canelado">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-19/banner-2.jpg" alt="Vestido Com Botões Canelado">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Vestido Reto Com Torção</h4>
                        <div class="product-sizes">
                            <span class="size-square">PP</span>
                            <span class="size-square">P</span>
                            <span class="size-square">M</span>
                            <span class="size-square">G</span>
                        </div>
                        <p class="product-price">R$ 391,02</p>
                    </div>
                </div>
                <div class="custom-slider-item slider-item">
                    <a href="link-para-produto-20.html" class="slider-link">
                    <img src="/assets/home/carousel de produtos/banner-20/banner-1.jpg" alt="Vestido Com Botões Canelado">
                    <img class="hover-image" src="/assets/home/carousel de produtos/banner-20/banner-2.jpg" alt="Vestido Com Botões Canelado">
                    <div class="custom-slider-caption slider-caption d-none d-md-block product-details">
                        <h4>Vestido Com Botões Canelado</h4>
                        <div class="product-sizes">
                            <span class="size-square">PP</span>
                            <span class="size-square">P</span>
                            <span class="size-square">M</span>
                            <span class="size-square">G</span>
                        </div>
                        <p class="product-price">R$ 391,02</p>
                    </div>
                </div>


            </div>
            <a class="custom-slider-prev slider-control-prev" role="button">
                <i class="fas fa-chevron-left"></i>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="custom-slider-next slider-control-next" role="button">
                <i class="fas fa-chevron-right"></i>
                <span class="sr-only">Próximo</span>
            </a>
            
        </div>
    </div>

    <div class="container-franqueado">
        <img src="/assets/home/banner-franqueado.png" alt="Descrição da Imagem" class="background-image-franqueado">
        <div class="text-overlay-franqueado">
            <p id="text-franqueado">SEJA UM FRANQUEADO DE <br>UMA DAS MAIORES MARCAS<br>DE MODA DO PAÍS</p>
            <div class="controls-franqueado">
                <button class="button-franqueado" onclick="changeFontSize(-2, 'text-franqueado')">-</button>
                <button class="button-franqueado" onclick="changeFontSize(2, 'text-franqueado')">+</button>
            </div>
        </div>
    </div>

    <!-- opcoes -->
    <div class="opcoes-container">
        <div class="opcoes-row">
            <div class="opcoes-item">
                <img src="/assets/frete.png" alt="Frete Grátis">
                <div>
                    <strong>Frete grátis</strong><br>
                    acima de R$ 699,00 em produtos COLCCI
                </div>
            </div>
            <div class="opcoes-item">
                <img src="/assets/devolucao.png" alt="Devolução Grátis">
                <div>
                    <strong>Devolução grátis</strong><br>
                    em até 7 dias
                </div>
            </div>
            <div class="opcoes-item">
                <img src="/assets/cartao.png" alt="Parcelamento">
                <div>
                    <strong>Até 6x sem juros</strong><br>
                    em qualquer cartão de crédito
                </div>
            </div>
            <div class="opcoes-item">
                <img src="/assets/desconto.png" alt="Desconto">
                <div>
                    <strong>10% off primeira compra</strong><br>
                    utilizando o cupom <strong id="coupon-code" onclick="copyToClipboard('ELEGANCE10')">ELEGANCE10</strong>
                    <svg id="check-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="green" style="display: none; font-weight: bold;">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 16.2l-4.2-4.2L4 13l5 5 10-10-1.4-1.4L9 16.2z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Ícone do WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=5551995987877" target="_blank" class="whatsapp">
        <img src="/assets/whatsapp.png" alt="Ícone do WhatsApp" class="whatsapp-icon">
    </a>
    
    <!-- Footer -->
    <div class="footer">
        <p class="newsletter-title">Fique por dentro das nossas novidades</p>
        <form action="#" method="POST">
            <div class="form-group">
                <input type="text" name="nome" id="nome" placeholder="Seu nome" required>
                <div class="input-line"></div> 
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Insira seu e-mail..." required>
                <div class="input-line"></div> 
            </div>
            <button type="submit">ENVIAR</button>
        </form>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://open.spotify.com/" target="_blank"><i class="fab fa-spotify"></i></a>
        </div>
        <div class="our-brands">
            <h3>Nossas Marcas</h3>
            <div class="brand-list">
                <div class="brand">
                    <p>Colcci</p>
                    <p>Gucci</p>
                    <p>Prada</p>
                    <p>Chanel</p>
                </div>
            </div>
        </div>
        <div class="contact-info">
            <p class="help"><i class="fas fa-question-circle"></i> Precisa de ajuda?</p>
            <p class="phone"><i class="fas fa-phone"></i> xxxx xxx xxxx</p>
            <p class="email"><i class="far fa-envelope"></i> <a href="mailto:atendimento@elegancemoda.com.br">atendimento@elegancemoda.com.br</a></p>
            <p class="mobile"><i class="fas fa-mobile-alt"></i> xx xxxxx-xxxx</p>
        </div>
        <div class="direitos">
            <p>© 2024 Elegance Moda. Todos os direitos reservados.</p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/cupom-home.js"></script>
    <script src="/js/pesquisa-navbar.js"></script>
    <script src="/js/login-navbar.js"></script>
    <script src="/js/carousel-home.js"></script>
    <script src="/js/footer.js"></script>
    <script src="/js/menu-sanduiche-home.js"></script>
    <script src="/js/carousel-produtos-home.js"></script>
    <script src="/js/franqueado-home.js"></script>
    <script src="/js/logo-navbar.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>