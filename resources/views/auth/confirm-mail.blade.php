<x-guest-layout>
    <section class="login-content">
        <div class="container h-100">
           <div class="row align-items-center justify-content-center h-100">
              <div class="col-md-12 col-lg-6">
                 <div class="card">
                    <div class="card-body">
                       <div class="row align-items-center">
                          <div class="col-lg-12 text-center">
                             <a href="{{route('index')}}" class="auth-logo">
                                <img src="{{asset('images/logo-dark.png')}}" class="img-fluid rounded-normal "
                                   alt="logo">
                             </a>
                             <h2 class="mt-3 mb-0">Success !</h2>
                             <p class="mb-1">A email has been send to youremail@domain.com. Please check for an
                                email from company and click
                                on the included link to reset your password.</p>
                             <div class="d-inline-block">
                                <a href="{{route('index')}}"
                                   class="btn btn-primary mt-3 d-flex align-items-center justify-content-center gap-1">
                                   <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke="currentColor" class="mb-1">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                   </svg>
                                   <span>Back to Home</span>
                                </a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>

</x-guest-layout>
