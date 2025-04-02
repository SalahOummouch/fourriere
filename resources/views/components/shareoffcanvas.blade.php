<div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn" aria-labelledby="shareBottomLabel">
   <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   </div>
   <div class="offcanvas-body small">
      <div class="d-flex flex-wrap align-items-center">
         <div class="text-center me-3 mb-3">
            <img src="{{asset('images/icon/08.png')}}" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>Facebook</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="{{asset('images/icon/09.png')}}" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>Twitter</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="{{asset('images/icon/10.png')}}" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>Instagram</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="{{asset('images/icon/11.png')}}" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>Google Plus</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="{{asset('images/icon/13.png')}}" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>In</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="{{asset('images/icon/12.png')}}" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>YouTube</h6>
         </div>
      </div>
   </div>
</div>


<div class="modal fade sharemodal" id="share-btn2" tabindex="-1" aria-labelledby="share-BottomLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
          <div class="modal-header">
             <h3 class="modal-title" id="share-BottomLabel">Share</h3>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body mt-4">
             <div class="row gy-3">
                <div class="col-lg-2 col-sm-4 col-6 text-center">
                   <a href="javascript:void(0);" class="d-inline-block">
                      <span class="image">
                         <img src="{{asset('images/icon/embed.png')}}" class="img-fluid">
                      </span>
                      <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Embed</h6>
                   </a>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 text-center">
                   <a href="javascript:void(0);" class="d-inline-block">
                      <span class="image">
                         <img src="{{asset('images/icon/whatsapp.png')}}" class="img-fluid">
                      </span>
                      <h6 class="mt-2 mb-0 font-size-14 fw-semibold">WhatsApp</h6>
                   </a>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 text-center">
                   <a href="javascript:void(0);" class="d-inline-block">
                      <span class="image">
                         <img src="{{asset('images/icon/facebook.png')}}" class="img-fluid">
                      </span>
                      <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Facebook</h6>
                   </a>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 text-center">
                   <a href="javascript:void(0);" class="d-inline-block">
                      <span class="image">
                         <img src="{{asset('images/icon/twitter.png')}}" class="img-fluid">
                      </span>
                      <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Twitter</h6>
                   </a>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 text-center">
                   <a href="javascript:void(0);" class="d-inline-block">
                      <span class="image">
                         <img src="{{asset('images/icon/pinterest.png')}}" class="img-fluid">
                      </span>
                      <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Pinterest</h6>
                   </a>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 text-center">
                   <a href="javascript:void(0);" class="d-inline-block">
                      <span class="image">
                         <img src="{{asset('images/icon/linkedin.png')}}" class="img-fluid">
                      </span>
                      <h6 class="mt-2 mb-0 font-size-14 fw-semibold">LinkedIn</h6>
                   </a>
                </div>
             </div>
             <div class="mt-4">
                <div class="share-form">
                   <input type="text" class="form-control" value="https://iqonic.design/">
                   <button class="btn btn-link share-link-btn h6 m-0 fw-semibold">Copy</button>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
