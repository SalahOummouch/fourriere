<x-guest-layout>
    {{-- new --}}
    <section class="login-content">
        <div class="container h-100">
           <div class="row align-items-center justify-content-center h-100">
              <div class="col-md-12 col-lg-6">
                 <div class="card p-3">
                    <div class="card-body">
                       <a href="{{route("index")}}" class="auth-logo">
                          <img src="{{asset('images/logo-dark.png')}}" class="img-fluid rounded-normal " alt="logo">
                       </a>
                       <h3 class="mb-3 fw-bold text-center">Créer un compte</h3>
                       <p class="text-center text-secondary mb-4">Choisissez un moyen pour créer votre compte</p>
                       <div class="social-btn d-flex justify-content-around align-items-center mb-4">
                          <button class="btn btn-outline-light">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="88.428 12.828 107.543 207.085">
                                <path d="M158.232 219.912v-94.461h31.707l4.747-36.813h-36.454V65.134c0-10.658 2.96-17.922 18.245-17.922l19.494-.009V14.278c-3.373-.447-14.944-1.449-28.406-1.449-28.106 0-47.348 17.155-47.348 48.661v27.149H88.428v36.813h31.788v94.461l38.016-.001z" fill="#3c5a9a" />
                             </svg>
                          </button>
                          <button class="btn btn-outline-light">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 262" preserveAspectRatio="xMidYMid">
                                <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4" />
                                <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853" />
                                <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05" />
                                <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335" />
                             </svg>
                          </button>
                       </div>
                       <div class="mb-5">
                          <p class="line-around text-secondary mb-0"><span class="line-around-1">ou inscrivez-vous avec l'email</span></p>
                       </div>
                       <x-auth-session-status class="mb-4" :status="session('status')" />

                       <!-- Erreurs de validation -->
                       @if (Session::has('error'))
                           <div class="alert alert-danger" role="alert">
                               {{Session::get("error")}}
                           </div>
                       @endif
                       <x-auth-validation-errors class="mb-4" :errors="$errors" />
                       <form method="POST" action="{{route('register')}}" data-toggle="validator">
                           {{csrf_field()}}
                          <div class="row">
                             <div class="col-lg-12">
                                <div class="form-group mb-3">
                                   <label class="text-secondary mb-2 form-label text-dark">Nom</label>
                                   <input class="form-control" type="text" placeholder="Entrez votre nom" id="nom" name="nom" value="{{old('nom')}}" required>
                                </div>
                             </div>
                             <div class="col-lg-12">
                                <div class="form-group mb-3">
                                   <label class="text-secondary mb-2 form-label text-dark">Prénom</label>
                                   <input class="form-control" type="text" placeholder="Entrez votre prénom" id="prenom" name="prenom" value="{{old('prenom')}}" required>
                                </div>
                             </div>
                             <div class="col-lg-12">
                                <div class="form-group mb-3">
                                   <label class="text-secondary mb-2 form-label text-dark">Email</label>
                                   <input class="form-control" type="email" placeholder="Entrez votre email" id="email" name="email" value="{{old('email')}}" required>
                                </div>
                             </div>
                             <div class="col-lg-12 mt-2">
                                <div class="form-group">
                                   <label class="text-secondary mb-2 form-label text-dark">Mot de passe</label>
                                   <input class="form-control" type="password" placeholder="Entrez votre mot de passe" id="password" name="password" required autocomplete="new-password">
                                </div>
                             </div>
                             <div class="col-lg-12 mt-2">
                                <div class="form-group">
                                   <label class="text-secondary mb-2 form-label text-dark">Confirmer le mot de passe</label>
                                   <input class="form-control" type="password" placeholder="Confirmez votre mot de passe" id="password_confirmation" name="password_confirmation" required>
                                </div>
                             </div>
                             <div class="col-lg-12 mt-2">
                                <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                   <label class="form-check-label ps-2" for="flexCheckDefault1">
                                      J'accepte les <a href="{{route('termsofservice')}}" class="text-primary">Conditions d'utilisation</a> et la <a href="{{route('privacypolicy')}}" class="text-primary">Politique de confidentialité</a>
                                   </label>
                                </div>
                             </div>
                          </div>
                          <button type="submit" class="btn btn-primary w-100 d-block mt-2">Créer un compte</button>
                          <div class="col-lg-12 mt-3">
                             <p class="mb-0 text-center">Vous avez déjà un compte ? <a href="{{route('logins')}}" class="text-primary">Se connecter</a></p>
                          </div>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
</x-guest-layout>
