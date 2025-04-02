<x-guest-layout>




    {{-- new --}}
    <section class="login-content">
        <div class="container h-100">
           <div class="row align-items-center justify-content-center h-100">
              <div class="col-md-12 col-lg-6">
                 <div class="card p-5">
                    <div class="card-body">
                       <a href="{{route('index')}}" class="auth-logo">

                          <img src="{{asset('images/logo-dark.png')}}" class="img-fluid rounded-normal "
                             alt="logo">
                       </a>
                       <h3 class="mb-3 text-center">Reset Password</h3>
                       <p class="text-center small text-secondary mb-3">You can reset your password here</p>
                       <x-auth-validation-errors class="mb-4" :errors="$errors" />
                       <form>
                          <div class="row">
                             <div class="col-lg-12">
                                <div class="form-group">
                                   <label class="text-secondary form-label text-dark">Email</label>
                                   <input class="form-control" type="email"  id="email" aria-describedby="email" placeholder="Enter Email">
                                </div>
                             </div>
                          </div>
                          <button type="submit" class="btn btn-primary d-block w-100">Reset Password</button>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>

</x-guest-layout>
