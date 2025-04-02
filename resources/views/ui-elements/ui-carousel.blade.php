<x-app-layout>
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-lg-6">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Slides Only</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and
                  <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
               <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="07">
                     </div>
                     <div class="carousel-item">
                        <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="06">
                     </div>
                     <div class="carousel-item">
                        <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="05">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-lg-6">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Slides With Controls</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and
                  <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
               <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="#">
                     </div>
                     <div class="carousel-item">
                        <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="#">
                     </div>
                     <div class="carousel-item">
                        <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="#">
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-lg-6">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Slides With Indicators</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and
                  <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>

               <div id="carouselExampleDark" class="carousel carousel-dark slide">
                  <div class="carousel-indicators">
                     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                     <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="01">
                     </div>
                     <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="02">
                     </div>
                     <div class="carousel-item">
                        <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="03">
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                     data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                     data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                  </button>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-lg-6">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Slides With Captions</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and
                  <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
               <div class="bd-example">
                  <div id="carouselExampleDark1" class="carousel carousel-dark slide">
                     <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="0" class="active"
                           aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="1"
                           aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="2"
                           aria-label="Slide 3"></button>
                     </div>
                     <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                           <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="01">
                           <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                           </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                           <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="02">
                           <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="03">
                           <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                           </div>
                        </div>
                     </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark1"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark1"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
    <div class="col-sm-12 col-lg-6">
        <div class="card">
           <div class="card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Slides With Crossfade</h4>
              </div>
           </div>
           <div class="card-body">
              <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and
                 <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
              <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                       <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="#">
                       <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                       </div>
                    </div>
                    <div class="carousel-item">
                       <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="#">
                       <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                       </div>
                    </div>
                    <div class="carousel-item">
                       <img src="{{asset('images/small/img-1.jpg')}}" class="d-block w-100" alt="#">
                       <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                       </div>
                    </div>
                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
              </div>

           </div>
        </div>
     </div>
   </div>

</div>
</x-app-layout>
