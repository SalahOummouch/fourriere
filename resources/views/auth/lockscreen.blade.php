<x-guest-layout>



    {{-- new --}}
    <section class="login-content">
        <div class="container h-100">
           <div class="row align-items-center justify-content-center h-100">
              <div class="col-md-12 col-lg-6">
                 <div class="card">
                    <div class="card-body">
                       <div class="row align-items-center">
                          <div class="col-lg-12">
                             <a href="{{route('index')}}" class="auth-logo">
                                <img src="{{asset('images/logo-dark.png')}}" alt="user-icon"
                                   class="img-fluid rounded-normal ">
                             </a>
                             <div class="text-center">
                                <h2 class="mb-2">Hi ! Barry Tech</h2>
                                <p>Enter your password to access the admin.</p>
                             </div>
                             <x-auth-validation-errors class="mb-4" :errors="$errors" />
                             <form>
                                <div class="row">
                                   <div class="col-lg-12">
                                      <div class="form-group">
                                         <label class="form-label text-dark">Password</label>
                                         <input class="form-control" type="password" placeholder="********">
                                      </div>
                                   </div>
                                </div>
                                <button type="submit" class="btn btn-primary d-block w-100">Login</button>
                             </form>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>

</x-guest-layout>
