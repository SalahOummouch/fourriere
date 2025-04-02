@props(['userProfileImg','userName','status','statusidentify'])
<div class="chat-head">
    <header class="d-flex justify-content-between align-items-center pt-3  ps-3 pe-3 pb-3">
        <div class="d-flex align-items-center gap-3">
            <div class="d-block d-xl-none">
                <button class="btn btn-sm btn-primary rounded btn-icon" data-toggle="sidebar" data-active="true">
                    <span class="btn-inner">
                        <svg width="20px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="avatar chat-user-profile m-0 ">
                <img src="{{asset('images/chat')}}/{{$userProfileImg}}" alt="avatar" class="avatar-50 rounded-pill " loading="lazy">
                <div class="iq-profile-badge {{$statusidentify && $statusidentify =='online' ? 'bg-success' : 'bg-danger'}}"></div>

            </div>

            <div>
                <h5 class="mb-0">{{$userName}}</h5>
                <small class="text-capitalize fw-500">{{$status}}</small>
            </div>

        </div>
        <div class="chat-user-detail-popup scroller" >
            <div class="user-profile">
        <button type="submit" class="close-popup p-3"><i class="material-symbols-outlined md-18">close</i></button>
                <div class="user mb-4 text-center">
                    <a class="avatar m-0">
                    <img src="{{asset('images/chat/01.png')}}/{{$userProfileImg}}" alt="avatar" class="avatar-50 rounded" loading="lazy">
                    </a>
                    <div class="user-name mt-4">
                    <h4>{{$userName}}</h4>
                    </div>
                    <div class="user-desc">
                    <p>Atlanta, USA</p>
                    </div>
                </div>
                <hr>
                <div class="chatuser-detail text-left mt-4">
                    <div class="row">
                    <div class="col-6 col-md-6 title">Bni Name:</div>
                    <div class="col-6 col-md-6 text-right">Mark</div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-6 col-md-6 title">Tel:</div>
                    <div class="col-6 col-md-6 text-right">072 143 9920</div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-6 col-md-6 title">Date Of Birth:</div>
                    <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-6 col-md-6 title">Gender:</div>
                    <div class="col-6 col-md-6 text-right">Female</div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-6 col-md-6 title">Language:</div>
                    <div class="col-6 col-md-6 text-right">Engliah</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-header-icons d-inline-flex ms-auto">
            <a href="#" class="chat-icon-phone bg-primary-subtle d-flex align-items-center justify-content-center">
                <i class="material-symbols-outlined md-18">phone</i>
            </a>
            <a href="#" class="chat-icon-video bg-primary-subtle d-flex align-items-center justify-content-center">
                <i class="material-symbols-outlined md-18">videocam</i>
            </a>
            <a href="#" class="chat-icon-delete bg-primary-subtle d-flex align-items-center justify-content-center">
                <i class="material-symbols-outlined md-18">delete</i>
            </a>
            <span class="dropdown bg-primary-subtle  d-flex align-items-center justify-content-center">
                <svg class="icon-20 nav-hide-arrow cursor-pointer pe-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 20.6788C10 21.9595 11.0378 23 12.3113 23C13.5868 23 14.6265 21.9595 14.6265 20.6788C14.6265 19.3981 13.5868 18.3576 12.3113 18.3576C11.0378 18.3576 10 19.3981 10 20.6788ZM10 12.0005C10 13.2812 11.0378 14.3217 12.3113 14.3217C13.5868 14.3217 14.6265 13.2812 14.6265 12.0005C14.6265 10.7198 13.5868 9.67929 12.3113 9.67929C11.0378 9.67929 10 10.7198 10 12.0005ZM12.3113 5.64239C11.0378 5.64239 10 4.60192 10 3.3212C10 2.04047 11.0378 1 12.3113 1C13.5868 1 14.6265 2.04047 14.6265 3.3212C14.6265 4.60192 13.5868 5.64239 12.3113 5.64239Z" fill="currentColor"></path>
                </svg>
                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item d-flex align-items-center" href="#"><i class="material-symbols-outlined md-18 me-1">push_pin</i>Pin to top</a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i class="material-symbols-outlined md-18 me-1">delete_outline</i>Delete chat</a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i class="material-symbols-outlined md-18 me-1">watch_later</i>Block</a>
                </span>
            </span>
        </div>
    </header>
</div>
