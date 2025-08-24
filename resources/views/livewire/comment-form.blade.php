<section id="landingTeam" class="section-py landing-team">
    <div class="container">
        {{-- <div class="text-center mb-4">
          <span class="badge bg-label-primary">Our Great Team</span>
        </div> --}}
        <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1">Caixinha de mensagem
                <img src="../../assets/img/front-pages/icons/section-title-icon.png" alt="laptop charging"
                    class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
        </h4>
        <p class="text-center  pb-0">Deixe uma mensagem para os noivos!</p>
        <form wire:submit.prevent="sendForm">
            <div class="row d-flex justify-content-center">
                <div class="col-md-3">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" class="form-control" id="name" wire:model="name"
                        placeholder="José da Silva" aria-describedby="defaultFormControlHelp"
                        data-listener-added_245bfc1c="true">
                </div>
                <div class="col-md-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" wire:model="email"
                        placeholder="jose@gmail.com" aria-describedby="defaultFormControlHelp"
                        data-listener-added_245bfc1c="true">
                </div>
            </div>
            <div class="row d-flex justify-content-center text-center mt-4">
                <div class="col-md-6">
                    <div class="d-flex justify-content-start">
                        <label for="message" class="form-label">Mensagem *</label>
                    </div>
                    <textarea class="form-control" id="message" wire:model="message" rows="3" data-listener-added_f2879cf3="true"
                        placeholder="Mensagem para os noivos"></textarea>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="d-flex justify-content-end col-md-6 mt-4">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Enviar</button>
                </div>
            </div>

        </form>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-4">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
</section>
