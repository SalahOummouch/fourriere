@props(['classname','userContent','ariaSelected','userimg','userTitle','userDetail','usermgscount','userTiming','right','groupChats','muted'])
 <div class="d-flex last-chats-body nav-link align-items-center {{$classname}}" role="tab" id={{$userContent}} data-bs-toggle="pill" data-bs-target={{$userContent}} aria-controls={{$userContent}} ariaSelected={{$ariaSelected}} data-toggle-extra="tab">
    @if ($userimg ?? '')
        <img src="{{asset('images/chat')}}/{{$userimg ?? ''}}" alt="status-1" class="avatar-50 rounded-circle">
    @endif
    @if ($groupChats ?? '')
    <div class="p-2 rounded-circle iq-user-bg">
        <span class="text-primary">
            <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.8877 10.8967C19.2827 10.7007 20.3567 9.50473 20.3597 8.05573C20.3597 6.62773 19.3187 5.44373 17.9537 5.21973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M19.7285 14.2505C21.0795 14.4525 22.0225 14.9255 22.0225 15.9005C22.0225 16.5715 21.5785 17.0075 20.8605 17.2815" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8867 14.6638C8.67273 14.6638 5.92773 15.1508 5.92773 17.0958C5.92773 19.0398 8.65573 19.5408 11.8867 19.5408C15.1007 19.5408 17.8447 19.0588 17.8447 17.1128C17.8447 15.1668 15.1177 14.6638 11.8867 14.6638Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8869 11.888C13.9959 11.888 15.7059 10.179 15.7059 8.069C15.7059 5.96 13.9959 4.25 11.8869 4.25C9.7779 4.25 8.0679 5.96 8.0679 8.069C8.0599 10.171 9.7569 11.881 11.8589 11.888H11.8869Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5.88509 10.8967C4.48909 10.7007 3.41609 9.50473 3.41309 8.05573C3.41309 6.62773 4.45409 5.44373 5.81909 5.21973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M4.044 14.2505C2.693 14.4525 1.75 14.9255 1.75 15.9005C1.75 16.5715 2.194 17.0075 2.912 17.2815" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </span>
    </div>
    @endif
    <div class="d-flex w-100 justify-content-between align-items-center">
        <div class="ms-2">
            <h6>{{$userTitle}}</h6>
            <small class="chat-para-ellipsis-1">
                @if ($right ?? '')
                <small>
                        <svg width="20"  viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38689 13.3287C3.79682 12.7192 3.79682 11.731 4.38689 11.1215C4.97696 10.512 5.93365 10.512 6.52371 11.1215L8.44686 13.108C8.56487 13.2299 8.75621 13.2299 8.87422 13.108L15.071 6.70712C15.6611 6.09763 16.6178 6.09763 17.2078 6.70712C17.7979 7.31662 17.7979 8.30481 17.2078 8.91431L8.87422 17.5223C8.75621 17.6442 8.56487 17.6442 8.44686 17.5223L4.38689 13.3287Z" fill="#3BAE5C"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.73616 14.465C8.14609 13.8555 8.84562 13.5634 9.43569 12.9539C10.0258 12.3444 10.2829 11.6483 10.873 12.2578L12.7961 14.2443C12.9141 14.3662 13.1055 14.3662 13.2235 14.2443L19.4203 7.84342C20.0104 7.23392 20.9671 7.23392 21.5571 7.84342C22.1472 8.45291 22.1472 9.44111 21.5571 10.0506L13.2235 18.6586C13.1055 18.7805 12.9141 18.7805 12.7961 18.6586L8.73616 14.465Z" fill="#3BAE5C"/>
                        </svg>
                    </small>
                @endif
                {{$userDetail}}
            </small>
        </div>
        <div>
            <div class="d-flex justify-content-end">
                @if ($userMgscount ?? '')
                <span class="badge bg-primary">{{$userMgscount ?? ''}}</span>
                @endif
                @if ($muted ?? '')
                    <svg width="15"  viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.61069 5.88917L3.92792 11.5724C3.78022 11.4868 3.64029 11.4324 3.5159 11.4246C2.43532 11.3469 2.01553 11.4713 1.42471 10.9659C0.787246 10.4217 0.83389 8.96789 0.83389 7.90278C0.83389 6.83767 0.787246 5.38383 1.42471 4.83961C2.01553 4.33427 2.43532 4.46643 3.5159 4.38091C4.59648 4.29539 6.88203 0.998989 8.64672 2.04078C9.36192 2.62387 9.55627 3.7123 9.61069 5.88917Z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.61069 9.59758C9.57959 11.9921 9.39302 13.1583 8.64672 13.7647C7.83045 14.2468 6.90535 13.8036 6.03467 13.1739" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M0.834351 14.6666L3.92838 11.5724L9.61115 5.88917L14.1667 1.33329" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                @endif
            </div>
            <small>{{$userTiming}}</small>
        </div>
    </div>
</div>
