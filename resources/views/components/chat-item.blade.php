<li class="simple-item hover" data-toggle-extra="tab" data-target-extra="#user-content-{{ $id }}">
    <div class="img-container">
        <div class="avatar avatar-60">
            <img src="{{ asset('images/' . $img) }}" alt="users" class="img-fluid avatar-borderd avatar-rounded">
            <span class="avatar-status">
                <i class="ri-checkbox-blank-circle-fill text-success">
                    <small>
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                        </svg>
                    </small>
                </i>
            </span>
        </div>
    </div>
    <div class="simple-item-body">
        <div class="simple-item-title">
            @if (empty($slot))
                {{ $slot }}
            @else
                <h5 class="title-text">{{ $name }}</h5>
                <div class="simple-item-time"> <span>{{ $dateTime }}</span> </div>
            @endif
        </div>
        <div class="simple-item-content">
            <span class="simple-item-text short">{{ $msg }}</span>
            <div class="dropdown">
                <button class="btn btn-link" type="button" id="chat-dropdown-{{ $id }}" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </button>
                <div class="dropdown-menu" aria-labelledby="chat-dropdown-{{ $id }}">
                    <a class="dropdown-item custom-dropdown-item" href="#">
                        <svg class="icon line text-primary" width="20" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M21,13v7a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V13H8a4,4,0,0,0,8,0Zm0,0L18,4M3,13,6,4"
                                style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                            </path>
                            <path d="M12,11V3m3,3L12,3,9,6"
                                style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                            </path>
                        </svg>
                        Move Archive
                    </a>
                    <a class="dropdown-item custom-dropdown-item" href="#">
                        <svg class="icon line text-primary" width="20" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M19.57,5.44a4.91,4.91,0,0,1,0,6.93L12,20,4.43,12.37A4.91,4.91,0,0,1,7.87,4a4.9,4.9,0,0,1,3.44,1.44,4.46,4.46,0,0,1,.69.88,4.46,4.46,0,0,1,.69-.88,4.83,4.83,0,0,1,6.88,0Z"
                                style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                            </path>
                        </svg>
                        Favourite
                    </a>
                    <a class="dropdown-item custom-dropdown-item" href="#">
                        <svg class="svg-icon text-primary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
</li>
