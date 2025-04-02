<aside class="sidebar sidebar-chat sidebar-base border-end shadow-none" data-sidebar="responsive">
    <div class="chat-search pt-4 px-4">
        <h5 class="fw-500">Chats</h5>
        <div id="user-detail-popup" class="scroller">
            <div class="user-profile">
                <button type="submit" class="close-popup p-3"><i class="material-symbols-outlined md-18">close</i></button>
                <div class="user text-center mb-4">
                <a class="avatar m-0">
                <img src="{{asset('images/user/1.jpg')}}" alt="avatar" loading="lazy">
                </a>
                <div class="user-name mt-4">
                    <h4 class="text-center">Bni Jordan</h4>
                </div>
                <div class="user-desc">
                    <p class="text-center">Web Designer</p>
                </div>
                </div>
                <hr>
                <div class="user-detail text-left mt-4 ps-4 pe-4">
                <h5 class="mt-4 mb-4">About</h5>
                <p>It is long established fact that a reader will be distracted bt the reddable.</p>
                <h5 class="mt-3 mb-3">Status</h5>
                <ul class="user-status p-0">
                    <li class="mb-1 d-flex align-items-center">
                        <i class="material-symbols-outlined filled text-success pe-1 md-14">
                            circle
                        </i>
                        <span>Online</span>
                    </li>
                    <li class="mb-1 d-flex align-items-center">
                        <i class="material-symbols-outlined filled text-warning pe-1 md-14">
                            circle
                        </i>
                        <span>Away</span>
                    </li>
                    <li class="mb-1 d-flex align-items-center">
                        <i class="material-symbols-outlined filled text-danger pe-1 md-14">
                            circle
                        </i>
                        <span>Do Not Disturb</span>
                    </li>
                    <li class="mb-1 d-flex align-items-center">
                        <i class="material-symbols-outlined filled text-light pe-1 md-14">
                            circle
                        </i>
                        <span>Offline</span>
                    </li>
                </ul>
                </div>
            </div>
        </div>
         <div class="sidebar-toggle d-block d-xl-none" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg class="icon-20 icon-rtl" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
        <div class="chat-searchbar mt-3 pt-1 mb-4">
            <div class="form-group chat-search-data m-0">
                <input type="text" class="form-control round" id="chat-search" placeholder="Search for messages or users...">
                <i class="material-symbols-outlined">
                search
                </i>
            </div>
        </div>
        <div class="swiper swiper-general messenger-swiper overflow-hidden mb-4" data-slide="7.3" data-laptop="6.3" data-tab="5.3" data-mobile="4.3"
        data-mobile-sm="4.3" data-autoplay="false" data-loop="false" data-navigation="false" data-pagination="true"
        data-space="12">
        <div class="swiper-wrapper">
            <div class="swiper-slide text-center">
                <div class="messanger-box position-relative d-inline-block">
                    <img src="{{asset('images/chat/avatar/01.png')}}" class="avatar-48 object-cover rounded-circle" alt="messanger-image">
                </div>
                <p class="mt-2 mb-0 font-size-14 custom-ellipsis text-body">Paul Molive</p>
            </div>
            <div class="swiper-slide text-center">
                <div class="messanger-box position-relative d-inline-block">
                    <img src="{{asset('images/chat/avatar/02.png')}}" class="avatar-48 object-cover rounded-circle" alt="messanger-image">
                </div>
                <p class="mt-2 mb-0 font-size-14 custom-ellipsis text-body">John Travolta</p>

            </div>
            <div class="swiper-slide text-center">
                <div class="messanger-box position-relative d-inline-block">
                    <img src="{{asset('images/chat/avatar/03.png')}}" class="avatar-48 object-cover rounded-circle" alt="messanger-image">
                </div>
                <p class="mt-2 mb-0 font-size-14 custom-ellipsis text-body">Barb Ackue</p>
            </div>
            <div class="swiper-slide text-center">

                <div class="messanger-box position-relative d-inline-block">
                    <img src="{{asset('images/chat/avatar/04.png')}}" class="avatar-48 object-cover rounded-circle" alt="messanger-image">
                </div>
                <p class="mt-2 mb-0 font-size-14 custom-ellipsis text-body">Robert Fox</p>


            </div>
            <div class="swiper-slide text-center">

                <div class="messanger-box position-relative d-inline-block">
                    <img src="{{asset('images/chat/avatar/05.png')}}" class="avatar-48 object-cover rounded-circle" alt="messanger-image">
                </div>
                <p class="mt-2 mb-0 font-size-14 custom-ellipsis text-body">Maya Didas</p>

            </div>
            <div class="swiper-slide text-center">

                <div class="messanger-box position-relative d-inline-block">
                    <img src="{{asset('images/chat/avatar/06.png')}}" class="avatar-48 object-cover rounded-circle" alt="messanger-image">
                </div>
                <p class="mt-2 mb-0 font-size-14 custom-ellipsis text-body">Monty Carlo</p>
            </div>
            <div class="swiper-slide text-center">

                <div class="messanger-box position-relative d-inline-block">
                    <img src="{{asset('images/chat/avatar/07.png')}}" class="avatar-48 object-cover rounded-circle" alt="messanger-image">
                </div>
                <p class="mt-2 mb-0 font-size-14 custom-ellipsis text-body">Paige Turner</p>

            </div>
            <div class="swiper-slide text-center">

                <div class="messanger-box position-relative d-inline-block">
                    <img src="{{asset('images/chat/avatar/08.png')}}" class="avatar-48 object-cover rounded-circle" alt="messanger-image">
                </div>
                <p class="mt-2 mb-0 font-size-14 custom-ellipsis text-body">Arnold Schwarzenegger</p>

            </div>
            <div class="swiper-slide text-center">

                <div class="messanger-box position-relative d-inline-block">
                    <img src="{{asset('images/chat/avatar/09.png')}}" class="avatar-48 object-cover rounded-circle" alt="messanger-image">
                </div>
                <p class="mt-2 mb-0 font-size-14 custom-ellipsis text-body">Leonardo DiCaprio</p>

            </div>
        </div>
    </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar mb-5 pb-5 px-4">
      <x-modules.chat.partials.vertical-nav />
    </div>
    <div class="sidebar-footer"></div>
</aside>

