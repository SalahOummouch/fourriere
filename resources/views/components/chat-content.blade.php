<div class="chat-content animate__animated animate__fadeIn {{ $activeClass }}" data-toggle-extra="tab-content"
    id="user-content-{{$id}}">
    <div class="card">
        <div class="right-sidenav p-2" id="first-sidenav-{{$id}}">
            <div class="d-flex">
                <button type="button" class="btn btn-sm" data-extra-dismiss="right-sidenav">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="20" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="chat-profile mx-auto">
                <div class="avatar avatar-70 avatar-borderd avatar-rounded mx-auto" data-toggel-extra="right-sidenav"
                    data-target="#first-sidenav-{{$id}}">
                    <img src="{{ asset('images/' . $img) }}" alt="users" class="img-fluid">
                </div>
                <h4 class="mb-2">{{ $name }}</h4>
                <h6 class="mb-2">{{ $about }}</h6>
            </div>
            <div class="chat-detail">
                <div class="row">
                    <div class="col-6 col-md-6 title">Nick Name:</div>
                    <div class="col-6 col-md-6 text-end">{{ $nickName }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6 col-md-6 title">Tel:</div>
                    <div class="col-6 col-md-6 text-end">{{ $contact }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6 col-md-6 title">Date Of Birth:</div>
                    <div class="col-6 col-md-6 text-end">{{ $dob }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6 col-md-6 title">Gender:</div>
                    <div class="col-6 col-md-6 text-end">{{ $gender }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6 col-md-6 title">Language:</div>
                    <div class="col-6 col-md-6 text-end">{{ $lang }}</div>
                </div>
            </div>
        </div>
        <div class="card-header chat-content-header align-items-center">
            <div class="d-flex align-items-center">
                <button class="btn btn-primary btn-sm d-block d-lg-none me-2" data-toggel-extra="side-nav"
                    data-expand-extra=".chat-left-wrapper">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.75 11.7256L4.75 11.7256" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13.7002 5.70124L19.7502 11.7252L13.7002 17.7502" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <div class="avatar-50 avatar-borderd avatar-rounded" data-toggel-extra="right-sidenav"
                    data-target="#first-sidenav-{{$id}}">
                    <img src="{{ asset('images/' . $img) }}" alt="users" class="img-fluid">
                </div>
                <div class="chat-title">
                    <h6>{{ $name }}</h6>
                    <small>{{ $status }}</small>
                </div>
            </div>
            <div class="chat-action">
                <div class="nav" id="user-{{$id}}-action" role="tablist">
                    <button class="btn  btn-primary btn-sm" id="user-{{$id}}-video-call-tab">
                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                    <button class="btn  btn-primary btn-sm ms-2" id="user-{{$id}}-call-tab">
                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body msg-content" id="user-{{$id}}-chat-content">
            <div class="msg-list">
                <div class="single-msg">
                    <div class="triangle-topleft single-msg-shap">
                    </div>
                    <div class="single-msg-content">
                        <div class="msg-detail">
                            <span>Nos vemos mañana sollicitudin molestie malesuada. Proin eget tortor.</span>
                        </div>
                        <div class="msg-action">
                            <span>04:15</span>
                        </div>
                    </div>
                </div>
                <div class="single-msg user">
                    <div class="triangle-topright single-msg-shap">
                    </div>
                    <div class="single-msg-content user">
                        <div class="msg-detail">
                            <span>Gracias De nada No hay de qué Disculpe Lo siento Me encanta café. ¿Quieres ir a tomar
                                una taza? .</span>
                        </div>
                        <div class="msg-action">
                            <span>04:15</span>
                        </div>
                    </div>
                </div>
                <div class="single-msg">
                    <div class="triangle-topleft single-msg-shap">
                    </div>
                    <div class="single-msg-content">
                        <div class="msg-detail">
                            <span>Alemania ha registrado este jueves 22.657 cifra de enero, según el Instituto Robert
                                Koch.</span>
                        </div>
                        <div class="msg-action">
                            <span>04:15</span>
                        </div>
                    </div>
                </div>
                <div class="single-msg">
                    <div class="triangle-topleft single-msg-shap">
                    </div>
                    <div class="single-msg-content">
                        <div class="msg-detail">
                            <span>La canciller Angela y ha pedido que la Unión Europea aumente la capacidad de
                                producción de vacunas.</span>
                        </div>
                        <div class="msg-action">
                            <span>04:15</span>
                        </div>
                    </div>
                </div>
                <div class="single-msg">
                    <div class="triangle-topleft single-msg-shap">
                    </div>
                    <div class="single-msg-content">
                        <div class="msg-detail">
                            <span>Este miércoles y el jueves, los materia de vacunación.</span>
                        </div>
                        <div class="msg-action">
                            <span>04:15</span>
                        </div>
                    </div>
                </div>
                <div class="single-msg user">
                    <div class="triangle-topright single-msg-shap">
                    </div>
                    <div class="single-msg-content user">
                        <div class="msg-detail">
                            <span>En el Reino Unido, el primer no haya “un bloqueo” en la exportación de vacunas.</span>
                        </div>
                        <div class="msg-action">
                            <span>04:15</span>
                        </div>
                    </div>
                </div>
                <div class="single-msg user">
                    <div class="triangle-topright single-msg-shap">
                    </div>
                    <div class="single-msg-content user">
                        <div class="msg-detail">
                            <span>La farmacéutica AstraZeneca ha actualizado los datos de eficacia de su Reino
                                Unido.</span>
                        </div>
                        <div class="msg-action">
                            <span>04:15</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer px-3 py-3">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" id="chat-input-{{$id}}" placeholder="Enter here..."
                        aria-label="Recipient's username" aria-describedby="basic-addon2-{{$id}}">
                    <div class="input-group-append">
                        <button type="button" class="input-group-text chat-icon rounded-end-0" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="20" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                        <div class="dropdown-menu p-0 border-0">
                            <emoji-picker data-target-input="#chat-input-{{$id}}"></emoji-picker>
                        </div>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text chat-icon rounded-start-0" id="basic-addon2-{{$id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="20" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
