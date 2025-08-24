<nav class="layout-navbar shadow-none py-0 position-relative">
    <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
            <!-- Menu logo wrapper: Start -->
            <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8 ms-0">
                <!-- Mobile menu toggle: Start-->
                <button class="navbar-toggler border-0 px-0 me-4" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="icon-base ti tabler-menu-2 icon-lg align-middle text-heading fw-medium">☰</i>
                </button>
                <!-- Mobile menu toggle: End-->
                <a href="{{route('homepage.index')}}" class="app-brand-link text-decoration-none">
                    <span class="app-brand-text demo menu-text text-primary fw-bold ms-2 ps-0">G & E</span>
                </a>
            </div>
            <!-- Menu logo wrapper: End -->

            <!-- Menu wrapper: Start -->
            <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="icon-base ti tabler-x icon-lg">×</i>
                </button>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Seções
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('story.index')}}">Nossa História</a></li>
                            <li><a class="dropdown-item" href="#">Fotos</a></li>
                            <li><a class="dropdown-item" href="{{ route('homepage.index') }}#comments">Mensagens</a></li>                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >Lista de Presentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >Confirmar Presença</a>
                    </li>
                </ul>
            </div>
            <div class="landing-menu-overlay d-lg-none"></div>
            <!-- Menu wrapper: End -->
        </div>
    </div>
</nav>
