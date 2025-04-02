@props(['className','id','userName','userProfileImg','status','lastMessage','userMessage','unreadMessage'])
<li class="nav-item iq-chat-list mb-3 ps-0 {{$className  ?? ''}}">
    <a href="#user-content-{{$id}}" class="nav-link  d-flex gap-3 rounded-2 zoom-in {{$className  ?? ''}}" data-bs-toggle="tab" role="tab" aria-controls="user-content-{{$id}}" aria-selected="true">
        <div class="position-relative">
            <img src="{{asset('images/chat')}}/{{$userProfileImg}}" alt="status-{{$id}}" class="avatar-48 object-cover rounded-circle" loading="lazy">
            <div class="iq-profile-badge {{$status ?? '' == 'online' ?  'bg-success' : 'bg-danger'}}  "></div>
        </div>
        <div class="d-flex align-items-top w-100 iq-userlist-data">
            <div class="d-flex flex-grow-1 flex-column">
                <div class="d-flex align-items-center gap-1">
                    <h6 class="mb-0 iq-userlist-name font-size-14 fw-semibold mb-0 text-ellipsis short-1 flex-grow-1">{{$userName}}</h6>
                    <span class="mb-0 font-size-12">{{$lastMessage  ?? ''}}</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <p class="text-ellipsis short-1 flex-grow-1 font-size-14 mb-0">{{$userMessage}}</p>
                    <div class="btn-group dropdown-user">
                    <button  class="bg-transparent dropdown-toggle border-0 text-white" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                        <li><button class="dropdown-item font-size-14 text-dark px-2" type="button"><span class="material-symbols-outlined mx-1 font-size-20 align-middle text-body">share</span>Share Contact</button></li>
                        <li><button class="dropdown-item font-size-14 text-dark px-2" type="button"><span class="material-symbols-outlined mx-1 font-size-20 align-middle text-body">content_copy</span>Copy Contact</button></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </a>
</li>
