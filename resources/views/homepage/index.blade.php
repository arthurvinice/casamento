@extends('app')

@section('title', 'G & E')

@section('content')
    <!-- Sections:Start -->

    <div data-bs-spy="scroll" class="scrollspy-example">
        <!-- Hero: Start -->
        <section style="height: 100vh;" id="hero-animation">
            <div id="landingHero" class="section-py landing-hero position-relative">
                <img src="../../assets/img/img-teste.jpg" alt="background"
                    class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100" data-speed="1"
                    style="height: 100vh;" />
                <div class="position-absolute top-30 start-50 translate-middle-x mt-5">
                    <img src="../../assets/img/logo.png" alt="Logo G&E" class="img-fluid mb-1 pb-0"
                        style="max-width: 250px;">
                    <h1 class="hero-sub-title text-primary h1 pb-0 mb-6"> 12 | 09 | 26
                    </h1>
                </div>

                <div class="container">
                    <div class="hero-text-box text-center position-relative">
                        <!-- <h1 class="hero-sub-title h1 mb-6"> 12 | 09 | 26 -->

                    </div>
                </div>
        </section>
        <!-- Hero: End -->

        <!-- Useful features: Start -->
        <section id="landingFeatures" class="pt-6 pb-5 landing-features" data-aos="fade-up">
            <div class="container">
                <div class="features-icon-wrapper row gx-0 gt-6 g-sm-12">
                    <h2 class="text-center h2 pb-3" id="contagem" style="color: #526760; font-weight: bold">
                        CONTAGEM REGRESSIVA</h2>
                    <div class="contador">
                        <div class="box" id="dias"><span class="number">0</span><span class="label">dias</span>
                        </div>
                        <div class="box" id="horas"><span class="number">0</span><span class="label">horas</span>
                        </div>
                        <div class="box" id="minutos"><span class="number">0</span><span class="label">minutos</span>
                        </div>
                        <div class="box" id="segundos"><span class="number">0</span><span class="label">segundos</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Useful features: End -->

        <!-- Website Description Section -->
        <section id="landingDescription" class="section-py landing-description" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="description-text">
                            <span class="position-relative fw-extrabold z-1 my-4">
                                <h2 class="ms-6 text-center" style="color: #526760; text-transform: uppercase;"
                                    id="bem-vindos">
                                    Bem-vindos ao nosso site
                                </h2>
                            </span>
                            <p class="mt-6 text-justify" style="color: #526760; text-transform: uppercase; "
                                id="paragrafo">
                                Aqui, queremos
                                compartilhar com vocês, nossos queridos amigos
                                e
                                familiares, os capítulos mais especiais da nossa história. Cada momento vivido até aqui
                                nos trouxe a certeza de que fomos feitos um para o outro, e agora, a contagem regressiva
                                para o nosso grande dia começou!
                            </p>

                            <p class="mb-4 text-justify" style="color: #526760; text-transform: uppercase; "
                                id="paragrafo">
                                Estamos cheios de
                                emoção, com o coração batendo mais forte e
                                a expectativa de viver um
                                dos dias mais lindos das nossas vidas. É uma alegria imensa ter vocês ao nosso lado
                                nesse sonho, que celebra a união das nossas almas, corações e destinos.
                            </p>

                            <p class="mb-4 text-justify" style="color: #526760; text-transform: uppercase;"
                                id="paragrafo">
                                Preparem-se para fazer parte dessa história tão importante para nós. Vamos juntos, com
                                amor e gratidão, rumo ao nosso "sim".
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Website Description Section -->


        <!-- Livewire Comment Section -->
        <div id="comments">
            @livewire('comment-section')
        </div>
        <!-- End Livewire Comment Section -->

        <!-- Livewire Comment Form Section -->
        <div id="commetForm">
            @livewire('comment-form')
        </div>
        <!-- End Livewire Comment Form Section -->

        <!-- Back to top -->
        <div class="row mb-6">
            <div class="col-md-12 d-flex justify-content-center mb-6">
                <button id="back-to-top" type="button" class="btn btn-outline-primary waves-effect"><span
                        class="icon-xs icon-base ti tabler-arrow-up me-2"></span>Voltar ao topo</button>
            </div>
        </div>
        <!-- End Back to top -->
    </div>

    <!-- / Sections:End -->
@endsection
@push('scripts')
    <script>
        document.getElementById('back-to-top').addEventListener('click', function() {
            scrollTo(0, 0);
        });
    </script>
@endpush
