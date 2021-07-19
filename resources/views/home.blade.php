@extends('layouts.HeaderFooter')

@section('content')
<link href="{{ asset('css/styleindex.css') }}" rel="stylesheet">
<body class="antialiased">

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <main class="main">
            <div class="contenedor-categorias-noticias">
                <ul>
                    <h2>Categorías</h2>
                    <hr id="hr">
                    <li>
                        <a href="{{ url('contenidoweb/categorias/seleccion-computadora') }}" class="btn-outline-secundary">
                            <span class="iconos-categoria bi bi-laptop"></span><br>
                            <h5>Computadoras</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('contenidoweb/categorias/monitores') }}" class="btn-outline-secundary">
                            <span class="iconos-categoria bi bi-display"></span><br>
                            <h5>Monitores</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('contenidoweb/categorias/televisores') }}" class="btn-outline-secundary">
                            <span class="iconos-categoria bi bi-tv"></span><br>
                            <h5>Televisores</h5>
                        </a>
                    </li>
                    <div class="w-100"></div>
                    <li>
                        <a href="{{ url('contenidoweb/categorias/impresoras') }}" class="btn-outline-secundary">
                            <span class="iconos-categoria bi bi-printer"></span><br>
                            <h5>Impresoras</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('contenidoweb/categorias/camaras-seguridad') }}" class="btn-outline-secundary">
                            <span class="iconos-categoria bi bi-camera"></span><br>
                            <h5>Cámaras de seguridad</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('contenidoweb/categorias/otras-categorias') }}" class="btn-outline-secundary">
                            <span class="iconos-categoria bi bi-grid"></span><br>
                            <h5>Otras categorías</h5>
                        </a>
                    </li>
                </ul>

                <div class="carta-noticas">
                    <h2>Noticias/Ofertas</h2>
                    <hr id="hr">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carta">
                                    <img src="{{asset('img/ContainerNoticias/noticas-ofertas.jpg')}}" class="card-img-top" alt="img-noticias">
                                    <div class="card-body">
                                        <h5 class="card-title">30% de descuento en set gaming</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Eos
                                            quis
                                            laudantium maxime ipsam tenetur eligendi tempore iusto voluptate accusamus
                                            optio
                                            itaque
                                            sunt
                                            recusandae omnis excepturi suscipit laboriosam, dolorum distinctio ad.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carta">
                                    <img src="{{asset('img/ContainerNoticias/noticas-ofertas3.jpg')}}" class="card-img-top" alt="img-noticias">
                                    <div class="card-body">
                                        <h5 class="card-title">30% de descuento en set gaming</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Eos
                                            quis
                                            laudantium maxime ipsam tenetur eligendi tempore iusto voluptate accusamus
                                            optio
                                            itaque
                                            sunt
                                            recusandae omnis excepturi suscipit laboriosam, dolorum distinctio ad.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carta">
                                    <img src="{{asset('img/ContainerNoticias/noticas-ofertas2.jpg')}}" class="card-img-top" alt="img-noticias">
                                    <div class="card-body">
                                        <h5 class="card-title">30% de descuento en set gaming</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Eos
                                            quis
                                            laudantium maxime ipsam tenetur eligendi tempore iusto voluptate accusamus
                                            optio
                                            itaque
                                            sunt
                                            recusandae omnis excepturi suscipit laboriosam, dolorum distinctio ad.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </main>

        <section class="seccion">
            <div class="conteiner-productos">
                <h2>Productos más vendidos</h2>
                <hr id="hr">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-group text-center">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas2.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas3.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas4.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas5.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-group text-center">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas2.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has supporting text below as a
                                            natural
                                            lead-in to
                                            additional
                                            content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas3.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas4.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas5.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon btn btn-outline-secondary" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon btn btn-outline-secondary" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <h2>Productos varios</h2>
                <hr id="hr">
                <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-group text-center">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas2.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas3.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas4.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas5.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-group text-center">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas2.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has supporting text below as a
                                            natural
                                            lead-in to
                                            additional
                                            content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas3.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas4.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/ContainerNoticias/noticas-ofertas5.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below
                                            as
                                            a natural
                                            lead-in to
                                            additional content. This card has even longer content than the
                                            first
                                            to show
                                            that
                                            equal
                                            height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev " href="#carouselExampleControls2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon btn btn-outline-secondary" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon btn btn-outline-secondary" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
@endsection
