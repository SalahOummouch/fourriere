 <div class="iq-message-body iq-other-user">
    <div class="chat-profile text-center">
        <img src="{{asset('images/chat')}}/{{$userImg}}" alt="chat-user" class="avatar-40 rounded-pill" loading="lazy">
        <small class="iq-chating p-0 mb-0 d-block">{{$messageTime}}</small>
    </div>
    <div class="iq-chat-text">
        <div class="d-flex align-items-center justify-content-start gap-md-2">
            <div class="iq-chating-content d-flex align-items-center {{ isset($Image) && $Image ? 'iq-image' : '' }} ">
                <p class="mr-2 mb-0">{{$message  ?? ''}}</p>
                @if(isset($singleImage) && $singleImage == 'true')
                <div class="">
                    <a data-fslightbox="gallery" href="{{ asset('images/chat/05.png') }}">
                        <img src="{{ asset('images/chat/05.png') }}" class="rounded iq-single-image" alt="chat-user" loading="lazy">
                    </a>
                </div>
            @endif
            </div>
            <a href="#" class="material-symbols-outlined font-size-20 text-dark reply" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Reply">reply</a>
            <div class="dropdown cursor-pointer more" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="More">
                <div class="lh-1" id="post-option" data-bs-toggle="dropdown">
                    <span class="material-symbols-outlined text-dark">
                        more_vert
                    </span>
                </div>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                        data-bs-target="#post-modal"><span class="material-symbols-outlined align-middle font-size-20 me-1">content_copy</span>Copy message text</a>
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">
                        <span class="material-symbols-outlined align-middle font-size-20 me-1">edit</span>Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>




