<x-guest-layout>

    {{-- ///new --}}
    <section class="login-content">
        <div class="container h-100">
           <div class="row align-items-center justify-content-center h-100">
              <div class="col-md-12 col-lg-6">
                 <div class="card">
                    <div class="card-body">
                       <!-- <a href="{{ route('index') }}" class="auth-logo">
                          <img src="{{ asset('images/logo-dark.png') }}" class="img-fluid rounded-normal" alt="logo">
                       </a> -->
                       <h3 class="mb-3 font-weight-bold text-center">Connexion</h3>
                       <p class="text-center text-secondary mb-4">Entrez votre adresse e-mail et votre mot de passe</p>

                       <x-auth-session-status class="mb-4" :status="session('status')" />

                       <!-- Erreurs de validation -->
                       <x-auth-validation-errors class="mb-4" :errors="$errors" />

                       <form method="POST" class="mt-5" action="{{ route('login') }}" data-toggle="validator">
                          {{ csrf_field() }}
                          <div class="row">
                             <div class="col-lg-12">
                                <div class="form-group">
                                   <label class="text-secondary form-label text-dark">Adresse e-mail</label>
                                   <input id="email" type="email" name="email" value="{{ env('IS_DEMO') ? 'admin@example.com' : old('email') }}" class="form-control mb-0" placeholder="admin@example.com" required autofocus>
                                </div>
                             </div>
                             <div class="col-lg-12 mt-2">
                                <div class="form-group">
                                   <div class="d-flex justify-content-between align-items-center">
                                      <label class="text-secondary form-label text-dark">Mot de passe</label>
                                      <!-- <label class="form-label"><a href="{{ route('recovers') }}" class="text-primary">Mot de passe oublié ?</a></label> -->
                                   </div>
                                   <input class="form-control mb-0" type="password" placeholder="********" name="password" value="{{ env('IS_DEMO') ? 'password' : '' }}" required autocomplete="current-password">
                                </div>
                             </div>
                          </div>
                          <button type="submit" class="btn btn-primary w-100 d-block mt-2">Se connecter</button>
                          <!-- <div class="col-lg-12 mt-3">
                             <p class="mb-0 text-center text-dark">Vous êtes nouveau ? <a href="{{ route('registers') }}" class="text-primary">Inscrivez-vous</a></p>
                          </div> -->
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>

</x-guest-layout>
