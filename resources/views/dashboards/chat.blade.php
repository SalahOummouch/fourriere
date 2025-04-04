<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 chat-left-wrapper">
                <div class="chat-list">
                    <div class="card">
                        <div class="card-header border-bottom-0">
                            <div class="d-flex justify-content-between align-items-center mb-md-2 mb-3">
                                <h4 class="card-title mb-0 mb-md-3 fw-bold">Messages</h4>
                                <button class="btn btn-primary btn-sm d-block d-lg-none"
                                    data-toggel-extra="side-nav-close" data-expand-extra=".chat-left-wrapper">
                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="form-group mb-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text chat-icon rounded-end-0">
                                            <svg class="svg-icon text-primary chat-icon" id="search" width="16"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter name"
                                        aria-label="Username">
                                    <div class="input-group-append d-none">
                                        <span class="input-group-text">
                                            <div class="spinner-border spinner-border-sm" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav class="tab-bottom-bordered mb-3">
                            <ul class="nav nav-tabs justify-content-around mb-0" id="nav-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home"
                                        role="tab" aria-selected="true">Recent</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile"
                                        role="tab" aria-selected="false">Archive</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact"
                                        role="tab" aria-selected="false">New</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="card-body item-list">
                            <ul id="chat-list">
                                <x-chat-item id="1" img="user/1.jpg" name="Joan Duo" dateTime='Today'
                                    msg="I
                          have share some media you can enjoy."></x-chat-item>
                                <x-chat-item id="2" img="user/2.jpg" name="Jenifer Markus" dateTime='Yesterday'
                                    msg="What are you doing?"></x-chat-item>
                                <x-chat-item id="3" img="user/3.jpg" name="Maria Daf" dateTime='2 Days Ago'
                                    msg="You have time for my task?"></x-chat-item>
                                <x-chat-item id="4" img="user/4.jpg" name="Joasaf Zurk" dateTime='10/01/2021'
                                    msg="How are you?"></x-chat-item>
                                <x-chat-item id="5" img="user/5.jpg" name="Rock Musta" dateTime='11/05/2020'
                                    msg="I want some teachnic for fast code can you help?"></x-chat-item>
                                <x-chat-item id="6" img="user/6.jpg" name="Joan Duo" dateTime='Today'
                                    msg="I
                          have share some media you can enjoy."></x-chat-item>
                                <x-chat-item id="7" img="user/4.jpg" name="Jenifer Markus"
                                    dateTime='Yesterday' msg="What are you doing?"></x-chat-item>
                                <x-chat-item id="8" img="user/1.jpg" name="Maria Daf" dateTime='2 Days Ago'
                                    msg="You have time for for my task?"></x-chat-item>
                                <x-chat-item id="9" img="user/2.jpg" name="Joasaf Zurk"
                                    dateTime='10/01/2021' msg="How are you?"></x-chat-item>
                                <x-chat-item id="10" img="user/3.jpg" name="Rock Musta" dateTime='11/05/2020'
                                    msg="I want some teachnic for fast code can you help?"></x-chat-item>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 chat-right-wrapper">
                <x-chat-content id="1" img="user/1.jpg" name="Joan Duo" nickName="Joan" about="Developer"
                    gender="Male" dob="1 June 1997" lang="English" contact="0123456789" status="Online"
                    activeClass="active"></x-chat-content>
                <x-chat-content id="2" img="user/2.jpg" name="Jenifer Markus" nickName="Jenifer"
                    about="Designer" gender="Female" dob="8 July 1997" lang="English" contact="0678912345"
                    status="Offline"></x-chat-content>
                <x-chat-content id="3" img="user/3.jpg" name="Maria Daf" nickName="Maria" about="Planner"
                    gender="Female" dob="16 August 1997" lang="English" contact="0345671289"
                    status="Online"></x-chat-content>
                <x-chat-content id="4" img="user/4.jpg" name="Joasaf Zurk" nickName="Joasaf"
                    about="Content Writer" gender="Male" dob="22 December 1997" lang="English"
                    contact="0678945123" status="Online"></x-chat-content>
                <x-chat-content id="5" img="user/5.jpg" name="Rock Musta" nickName="Rock" about="Developer"
                    gender="Male" dob="26 June 1997" lang="English" contact="0893456712"
                    status="Online"></x-chat-content>
                <x-chat-content id="6" img="user/6.jpg" name="Joan Duo" nickName="Joan" about="Developer"
                    gender="Male" dob="1 June 1997" lang="English" contact="0123456789"
                    status="Online"></x-chat-content>
                <x-chat-content id="7" img="user/4.jpg" name="Jenifer Markus" nickName="Jenifer"
                    about="Designer" gender="Female" dob="8 July 1997" lang="English" contact="0678912345"
                    status="Online"></x-chat-content>
                <x-chat-content id="8" img="user/1.jpg" name="Maria Daf" nickName="Maria" about="Planner"
                    gender="Female" dob="16 August 1997" lang="English" contact="0345671289"
                    status="Online"></x-chat-content>
                <x-chat-content id="9" img="user/2.jpg" name="Joasaf Zurk" nickName="Joasaf"
                    about="Content Writer" gender="Male" dob="22 December 1997" lang="English"
                    contact="0678945123" status="Online"></x-chat-content>
                <x-chat-content id="10" img="user/3.jpg" name="Rock Musta" nickName="Rock" about="Developer"
                    gender="Male" dob="26 June 1997" lang="English" contact="0893456712"
                    status="Online"></x-chat-content>
            </div>
        </div>
    </div>
</x-app-layout>
