<x-app-layout>
    <div class="container-fluid">
   <div class="row">
      <div class="col-lg-4">
         <div class="card card-block p-card">
            <div class="profile-box">
               <div class="profile-card rounded">
                  <img src="{{asset('images/user/1.jpg')}}" alt="profile-bg"
                     class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                  <h3 class="font-600 text-white text-center mb-0">John Doe</h3>
                  <p class="text-white text-center mb-5">Web Developer</p>
               </div>
               <div class="pro-content rounded">
                  <div class="d-flex align-items-center mb-3">
                     <div class="p-icon me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                        </svg>
                     </div>
                     <p class="mb-0 eml">johndoe989@gmail.com</p>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                     <div class="p-icon me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                        </svg>
                     </div>
                     <p class="mb-0">(123) 123 1234</p>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                     <div class="p-icon me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                     </div>
                     <p class="mb-0">USA</p>
                  </div>
                  <div class="d-flex justify-content-center">
                     <div class="social-ic d-inline-flex rounded">
                        <a href="#">
                           <svg width="24" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0)">
                                 <path
                                    d="M341.269 85.0133H388.011V3.60533C379.947 2.496 352.213 0 319.915 0C252.523 0 206.357 42.3893 206.357 120.299V192H131.989V283.008H206.357V512H297.536V283.029H368.896L380.224 192.021H297.515V129.323C297.536 103.019 304.619 85.0133 341.269 85.0133V85.0133Z"
                                    fill=" #0165E1" />
                              </g>
                              <defs>
                                 <clipPath>
                                    <rect width="512" height="512" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </a>
                        <a href="#">
                           <svg width="24" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g>
                                 <path
                                    d="M459.392 151.744C480.213 136.96 497.728 118.507 512 97.2587V97.2373C492.949 105.579 472.683 111.125 451.52 113.813C473.28 100.821 489.899 80.4053 497.707 55.808C477.419 67.904 455.019 76.4373 431.147 81.216C411.883 60.6933 384.427 48 354.475 48C296.363 48 249.579 95.168 249.579 152.981C249.579 161.301 250.283 169.301 252.011 176.917C164.757 172.651 87.5307 130.837 35.648 67.1147C26.6027 82.8373 21.2693 100.821 21.2693 120.171C21.2693 156.523 39.9787 188.736 67.904 207.403C51.0293 207.083 34.496 202.176 20.48 194.475V195.627C20.48 246.635 56.8533 289.003 104.576 298.773C96.0213 301.12 86.72 302.229 77.056 302.229C70.336 302.229 63.552 301.845 57.1947 300.437C70.784 341.995 109.397 372.565 155.264 373.568C119.552 401.493 74.1973 418.325 25.1093 418.325C16.512 418.325 8.256 417.941 0 416.896C46.5067 446.869 101.589 464 161.024 464C346.261 464 466.987 309.461 459.392 151.744V151.744Z"
                                    fill="#1D9BF0" />
                              </g>
                           </svg>
                        </a>
                        <a href="#">
                           <svg width="24" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0)">
                                 <path
                                    d="M500.672 126.485L501.312 130.666C495.125 108.714 478.421 91.7756 457.195 85.6103L456.747 85.5036C416.832 74.6663 256.213 74.6663 256.213 74.6663C256.213 74.6663 95.9999 74.453 55.6799 85.5036C34.0479 91.7756 17.3226 108.714 11.2426 130.218L11.1359 130.666C-3.77607 208.554 -3.88274 302.144 11.7973 385.536L11.1359 381.312C17.3226 403.264 34.0266 420.202 55.2533 426.368L55.7013 426.474C95.5733 437.333 256.235 437.333 256.235 437.333C256.235 437.333 416.427 437.333 456.768 426.474C478.421 420.202 495.147 403.264 501.227 381.76L501.333 381.312C508.117 345.088 512 303.402 512 260.821C512 259.264 512 257.685 511.979 256.106C512 254.656 512 252.928 512 251.2C512 208.597 508.117 166.912 500.672 126.485V126.485ZM204.971 333.888V178.304L338.645 256.213L204.971 333.888Z"
                                    fill="#c4302b" />
                              </g>
                              <defs>
                                 <clipPath>
                                    <rect width="512" height="512" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </a>
                        <a href="#">
                           <svg width="24" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0)">
                                 <path
                                    d="M262.955 0C122.603 0.0213333 48 89.9413 48 187.989C48 233.451 73.408 290.176 114.091 308.16C125.696 313.387 124.16 307.008 134.144 268.821C134.933 265.643 134.528 262.891 131.968 259.925C73.8133 192.661 120.619 54.3787 254.656 54.3787C448.64 54.3787 412.395 322.795 288.405 322.795C256.448 322.795 232.64 297.707 240.171 266.667C249.301 229.696 267.179 189.952 267.179 163.307C267.179 96.1493 167.125 106.112 167.125 195.093C167.125 222.592 176.853 241.152 176.853 241.152C176.853 241.152 144.661 371.2 138.688 395.499C128.576 436.629 140.053 503.211 141.056 508.949C141.675 512.107 145.216 513.109 147.2 510.507C150.379 506.347 189.291 450.837 200.192 410.709C204.16 396.096 220.437 336.789 220.437 336.789C231.168 356.16 262.101 372.373 295.061 372.373C393.109 372.373 463.979 286.187 463.979 179.243C463.637 76.7147 375.893 0 262.955 0V0Z"
                                    fill="#E60023" />
                              </g>
                              <defs>
                                 <clipPath>
                                    <rect width="512" height="512" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-4 col-lg-12">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body text-center">
                     <svg width="36" height="48" viewBox="0 0 36 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M9.10495 33.9964C8.29026 33.1817 8.71495 33.4114 6.74995 32.8855C5.85838 32.6464 5.07463 32.1871 4.36588 31.6367L0.112441 42.0655C-0.299122 43.0752 0.469629 44.1721 1.559 44.1308L6.4987 43.9424L9.8962 47.5311C10.6462 48.3224 11.9624 48.0758 12.374 47.0661L17.2537 35.1017C16.2375 35.668 15.1096 35.9999 13.9434 35.9999C12.1153 35.9999 10.3978 35.2883 9.10495 33.9964V33.9964ZM35.8875 42.0655L31.634 31.6367C30.9253 32.188 30.1415 32.6464 29.25 32.8855C27.2746 33.4142 27.7078 33.1836 26.895 33.9964C25.6021 35.2883 23.8837 35.9999 22.0556 35.9999C20.8893 35.9999 19.7615 35.6671 18.7453 35.1017L23.625 47.0661C24.0365 48.0758 25.3537 48.3224 26.1028 47.5311L29.5012 43.9424L34.4409 44.1308C35.5303 44.1721 36.299 43.0742 35.8875 42.0655V42.0655ZM24.6562 31.8749C26.0887 30.4171 26.2528 30.5427 28.2928 29.9867C29.595 29.6314 30.6131 28.5955 30.9618 27.2699C31.6631 24.6074 31.4812 24.9289 33.3946 22.9808C34.3481 22.0105 34.7203 20.5958 34.3715 19.2702C33.6712 16.6096 33.6703 16.9808 34.3715 14.3174C34.7203 12.9917 34.3481 11.5771 33.3946 10.6067C31.4812 8.65862 31.6631 8.97925 30.9618 6.31768C30.6131 4.99206 29.595 3.95612 28.2928 3.60081C25.679 2.88737 25.994 3.07393 24.0787 1.12487C23.1253 0.154558 21.735 -0.225129 20.4328 0.130183C17.82 0.842683 18.1846 0.843621 15.5671 0.130183C14.2649 -0.225129 12.8746 0.153621 11.9212 1.12487C10.0078 3.073 10.3228 2.88737 7.70807 3.60081C6.40588 3.95612 5.38776 4.99206 5.03901 6.31768C4.33869 8.97925 4.51963 8.65862 2.60619 10.6067C1.65275 11.5771 1.27963 12.9917 1.62932 14.3174C2.32963 16.9761 2.33057 16.6049 1.62932 19.2692C1.28057 20.5949 1.65275 22.0096 2.60619 22.9808C4.51963 24.9289 4.33776 24.6074 5.03901 27.2699C5.38776 28.5955 6.40588 29.6314 7.70807 29.9867C9.8062 30.5586 9.96276 30.4686 11.3437 31.8749C12.584 33.1377 14.5162 33.3636 16.0068 32.4205C16.6029 32.0421 17.2944 31.8411 18.0004 31.8411C18.7065 31.8411 19.3979 32.0421 19.994 32.4205C21.4837 33.3636 23.4159 33.1377 24.6562 31.8749ZM9.15557 16.4961C9.15557 11.5246 13.1156 7.49425 18 7.49425C22.8843 7.49425 26.8443 11.5246 26.8443 16.4961C26.8443 21.4677 22.8843 25.498 18 25.498C13.1156 25.498 9.15557 21.4677 9.15557 16.4961V16.4961Z"
                           fill="#3378FF" />
                     </svg>
                     <h3 class="mb-2 mt-3 text-primary">42+</h3>
                     <h5>Awards</h5>
                  </div>
               </div>
            </div>
            <div class="col-sm-4 col-lg-12">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body text-center">
                     <svg width="60" height="48" viewBox="0 0 60 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M23.9091 24.5297C24.495 25.1156 25.4447 25.1156 26.0306 24.5297L27.0909 23.4694C27.6769 22.8834 27.6769 21.9338 27.0909 21.3478L23.7422 18L27.09 14.6512C27.6759 14.0653 27.6759 13.1156 27.09 12.5297L26.0297 11.4694C25.4437 10.8834 24.4941 10.8834 23.9081 11.4694L18.4387 16.9387C17.8528 17.5247 17.8528 18.4744 18.4387 19.0603L23.9091 24.5297V24.5297ZM32.91 23.4703L33.9703 24.5306C34.5563 25.1166 35.5059 25.1166 36.0919 24.5306L41.5613 19.0613C42.1472 18.4753 42.1472 17.5256 41.5613 16.9397L36.0919 11.4703C35.5059 10.8844 34.5563 10.8844 33.9703 11.4703L32.91 12.5306C32.3241 13.1166 32.3241 14.0662 32.91 14.6522L36.2578 18L32.91 21.3488C32.3241 21.9347 32.3241 22.8844 32.91 23.4703V23.4703ZM58.5 39H35.7694C35.7 40.8572 34.3903 42 32.7 42H27C25.2478 42 23.9044 40.3622 23.9278 39H1.5C0.675 39 0 39.675 0 40.5V42C0 45.3 2.7 48 6 48H54C57.3 48 60 45.3 60 42V40.5C60 39.675 59.325 39 58.5 39ZM54 4.5C54 2.025 51.975 0 49.5 0H10.5C8.025 0 6 2.025 6 4.5V36H54V4.5ZM48 30H12V6H48V30Z"
                           fill="#3cb72c" />
                     </svg>
                     <h3 class="mb-2 mt-3 text-success">3+ years </h3>
                     <h5>Experience</h5>
                  </div>
               </div>
            </div>
            <div class="col-sm-4 col-lg-12">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body text-center">
                     <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M35.3676 11.2517C34.8398 11.2372 34.3256 11.3198 33.8438 11.4898V7.03125C33.8438 4.70503 31.9512 2.8125 29.625 2.8125C29.0759 2.8125 28.5517 2.91909 28.0701 3.11072C27.5821 1.32047 25.9428 0 24 0C22.0572 0 20.4179 1.32047 19.9299 3.11072C19.4483 2.91909 18.9241 2.8125 18.375 2.8125C16.0488 2.8125 14.1562 4.70503 14.1562 7.03125V11.4895C13.6747 11.3198 13.1607 11.2372 12.6324 11.2517C10.3711 11.3136 8.53125 13.2316 8.53125 15.5272V48H36.6562V41.2395L38.5637 36.4704C39.1643 34.9689 39.4688 33.3877 39.4688 31.7705V15.5272C39.4688 13.2316 37.6289 11.3136 35.3676 11.2517V11.2517ZM11.3438 45.1875V42.375H33.8438V45.1875H11.3438ZM36.6562 31.7705C36.6562 33.0283 36.4194 34.2581 35.9523 35.4261L34.2979 39.5625H11.3438V15.5272C11.3438 14.7405 11.9564 14.0837 12.7095 14.0631C13.0926 14.0504 13.4561 14.1937 13.7305 14.4607C14.0051 14.7278 14.1563 15.0858 14.1563 15.4687V21.9843H16.9688V7.03125C16.9688 6.25584 17.5997 5.625 18.3751 5.625C19.1505 5.625 19.7813 6.25584 19.7813 7.03125V21.9844H22.5938V4.21875C22.5938 3.44334 23.2247 2.8125 24.0001 2.8125C24.7755 2.8125 25.4063 3.44334 25.4063 4.21875V21.9844H28.2188V7.03125C28.2188 6.25584 28.8497 5.625 29.6251 5.625C30.4005 5.625 31.0313 6.25584 31.0313 7.03125V24.1714C24.712 24.8732 19.7812 30.2467 19.7812 36.75H22.5938C22.5938 31.3222 27.0097 26.9062 32.4375 26.9062H33.8438V15.4688C33.8438 15.0859 33.995 14.7278 34.2696 14.4608C34.544 14.1938 34.9067 14.0508 35.2906 14.0632C36.0436 14.0838 36.6562 14.7406 36.6562 15.5273V31.7705Z"
                           fill="#db7e06" />
                     </svg>
                     <h3 class="mb-2 mt-3 text-warning">424+</h3>
                     <h5>Participated</h5>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-8">
         <div class="card card-block">
            <div class="card-header d-flex justify-content-between ">
               <div class="header-title">
                  <h4 class="card-title mb-0">About Me</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard
                  dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                  make a type specimen
                  book. It has survived not only five centuries, but also the leap into electronic typesetting,
                  remaining essentially
                  unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                  passages, and more
                  recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
               </p>
               <h5 class="mb-2 mt-4">Personal Skills</h5>
               <ul class="list-unstyled mb-0">
                  <li class="mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-2" width="20" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                     Lorem ipsum dolor sit amet,
                     consectetur adipiscing elit.
                  </li>
                  <li class="mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-2" width="20" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                     Aliquam ultrices tellus in
                     auctor blandit.
                  </li>
                  <li class="mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-2" width="20" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                     Etiam tincidunt erat non
                     ante sagittis bibendum.
                  </li>
                  <li class="mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-2" width="20" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                     Nunc malesuada massa ut
                     nisl sollicitudin semper.
                  </li>
                  <li>
                     <svg xmlns="http://www.w3.org/2000/svg" class="text-primary me-2" width="20" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                     Fusce et arcu in dui feugiat finibus.
                  </li>
               </ul>
               <h5 class="mb-2 mt-4">Professional Skills</h5>
               <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                  <span>PHP</span>
                  <span class="float-end">90%</span>
                  <div class="iq-progress-bar pro-skill mt-2">
                     <span data-percent="90"></span>
                  </div>
               </div>
               <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                  <span>MySQL</span>
                  <span class="float-end">85%</span>
                  <div class="iq-progress-bar pro-skill mt-2">
                     <span data-percent="85" class="bg1"></span>
                  </div>
               </div>
               <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                  <span>React</span>
                  <span class="float-end">65%</span>
                  <div class="iq-progress-bar pro-skill mt-2">
                     <span data-percent="65" class="bg-success"></span>
                  </div>
               </div>
               <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                  <span>Node Js</span>
                  <span class="float-end">70%</span>
                  <div class="iq-progress-bar pro-skill mt-2">
                     <span data-percent="70" class="bg2"></span>
                  </div>
               </div>
               <div class="iq-progress-bar-linear d-inline-block w-100">
                  <span>Angular Js</span>
                  <span class="float-end">55%</span>
                  <div class="iq-progress-bar pro-skill mt-2">
                     <span data-percent="55" class="bg3"></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="card card-block">
            <div class="card-header">
               <div class="header-title">
                  <h4 class="card-title">Education Traning</h4>
               </div>
            </div>
            <div class="card-body">
               <ul class="list-inline p-0 m-0">
                  <li class="d-flex align-items-center mb-3">
                     <div class="profile-icon iq-icon-box rounded-small bg-danger-subtle text-center">
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0)">
                              <path
                                 d="M23.3379 5.745L12.8777 2.53125C12.3077 2.35612 11.6927 2.35612 11.1231 2.53125L0.662429 5.745C-0.220321 6.01612 -0.220321 7.18349 0.662429 7.45462L2.48605 8.01487C2.08593 8.50949 1.83993 9.11287 1.81555 9.77362C1.45443 9.98062 1.20018 10.3541 1.20018 10.8C1.20018 11.2042 1.41318 11.5444 1.71993 11.7619L0.762554 16.0699C0.679304 16.4445 0.964304 16.8 1.34793 16.8H3.45205C3.83605 16.8 4.12105 16.4445 4.0378 16.0699L3.08043 11.7619C3.38718 11.5444 3.60018 11.2042 3.60018 10.8C3.60018 10.3661 3.35755 10.0031 3.01293 9.79237C3.04143 9.22912 3.32943 8.73112 3.7888 8.41537L11.1227 10.6687C11.4624 10.773 12.1142 10.9031 12.8773 10.6687L23.3379 7.45499C24.2211 7.1835 24.2211 6.0165 23.3379 5.745V5.745ZM13.2298 11.8159C12.1599 12.1444 11.2483 11.9629 10.7702 11.8159L5.33193 10.1452L4.80018 14.4C4.80018 15.7256 8.02368 16.8 12.0002 16.8C15.9767 16.8 19.2002 15.7256 19.2002 14.4L18.6684 10.1449L13.2298 11.8159V11.8159Z"
                                 fill="currentColor" />
                           </g>
                           <defs>
                              <clipPath>
                                 <rect width="24" height="19.2" fill="white" />
                              </clipPath>
                           </defs>
                        </svg>
                     </div>
                     <div class="ms-3">
                        <h5>South Kellergrove Junior</h5>
                        <p class="mb-0">Junior High School | Class of 2008</p>
                     </div>
                  </li>
                  <li class="d-flex align-items-center mb-3">
                     <div class="profile-icon iq-icon-box rounded-small bg-primary-subtle text-center">
                        <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M17.1107 17.1746L12 22.2853L6.88929 17.1746C3.05893 17.3406 0 20.4746 0 24.3424V24.8567C0 26.2764 1.15179 27.4281 2.57143 27.4281H21.4286C22.8482 27.4281 24 26.2764 24 24.8567V24.3424C24 20.4746 20.9411 17.3406 17.1107 17.1746ZM0.728571 4.27457L1.07143 4.35493V7.4835C0.696429 7.7085 0.428571 8.09957 0.428571 8.571C0.428571 9.021 0.675 9.396 1.02321 9.62636L0.1875 12.9639C0.0964286 13.3335 0.3 13.7139 0.594643 13.7139H2.83393C3.12857 13.7139 3.33214 13.3335 3.24107 12.9639L2.40536 9.62636C2.75357 9.396 3 9.021 3 8.571C3 8.09957 2.73214 7.7085 2.35714 7.4835V4.66564L5.89286 5.51743C5.43214 6.43886 5.14286 7.46743 5.14286 8.571C5.14286 12.3585 8.2125 15.4281 12 15.4281C15.7875 15.4281 18.8571 12.3585 18.8571 8.571C18.8571 7.46743 18.5732 6.43886 18.1071 5.51743L23.2661 4.27457C24.2411 4.03886 24.2411 2.82278 23.2661 2.58707L13.0661 0.122784C12.3696 -0.0432879 11.6357 -0.0432879 10.9393 0.122784L0.728571 2.58171C-0.241071 2.81743 -0.241071 4.03886 0.728571 4.27457Z"
                              fill="currentColor" />
                        </svg>
                     </div>
                     <div class="ms-3">
                        <h5>Milchuer College</h5>
                        <p class="mb-0">Master of Science in Computer Science | 2015</p>
                     </div>
                  </li>
                  <li class="d-flex align-items-center mb-3">
                     <div class="profile-icon iq-icon-box rounded-small bg-warning-subtle text-center">
                        <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M23.25 6.46152V7.26922C23.25 7.37632 23.2105 7.47904 23.1402 7.55478C23.0698 7.63051 22.9745 7.67306 22.875 7.67306H21.75V8.27883C21.75 8.61337 21.4981 8.8846 21.1875 8.8846H2.8125C2.50186 8.8846 2.25 8.61337 2.25 8.27883V7.67306H1.125C1.02554 7.67306 0.930161 7.63051 0.859835 7.55478C0.789509 7.47904 0.75 7.37632 0.75 7.26922V6.46152C0.750001 6.38163 0.772007 6.30353 0.813234 6.2371C0.854462 6.17068 0.913058 6.11892 0.981609 6.08837L11.8566 1.64606C11.9484 1.60512 12.0516 1.60512 12.1434 1.64606L23.0184 6.08837C23.0869 6.11892 23.1455 6.17068 23.1868 6.2371C23.228 6.30353 23.25 6.38163 23.25 6.46152V6.46152ZM22.125 21.8077H1.875C1.25367 21.8077 0.75 22.3501 0.75 23.0192V23.8269C0.75 23.934 0.789509 24.0367 0.859835 24.1125C0.930161 24.1882 1.02554 24.2308 1.125 24.2308H22.875C22.9745 24.2308 23.0698 24.1882 23.1402 24.1125C23.2105 24.0367 23.25 23.934 23.25 23.8269V23.0192C23.25 22.3501 22.7463 21.8077 22.125 21.8077ZM4.5 9.69229V19.3846H2.8125C2.50186 19.3846 2.25 19.6558 2.25 19.9904V21H21.75V19.9904C21.75 19.6558 21.4981 19.3846 21.1875 19.3846H19.5V9.69229H16.5V19.3846H13.5V9.69229H10.5V19.3846H7.5V9.69229H4.5Z"
                              fill="currentColor" />
                        </svg>
                     </div>
                     <div class="ms-3">
                        <h5>Beechtown University</h5>
                        <p class="mb-0">Bachelor of Science in Computer Science | 2013</p>
                     </div>
                  </li>
                  <li class="d-flex align-items-center mb-3">
                     <div class="profile-icon iq-icon-box rounded-small bg-success-subtle text-center">
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0)">
                              <path
                                 d="M0 8.39995V18.5999C0 18.9314 0.2685 19.1999 0.6 19.1999H3.6V7.19994H1.2C0.537375 7.19994 0 7.73732 0 8.39995ZM13.5 6.59994H12.6V5.09994C12.6 4.93419 12.4658 4.79994 12.3 4.79994H11.7C11.5343 4.79994 11.4 4.93419 11.4 5.09994V7.49994C11.4 7.66569 11.5343 7.79995 11.7 7.79995H13.5C13.6658 7.79995 13.8 7.66569 13.8 7.49994V6.89994C13.8 6.73419 13.6658 6.59994 13.5 6.59994ZM18.6656 4.20144L12.6656 0.201317C12.4685 0.0700041 12.2369 -6.10352e-05 12 -6.10352e-05C11.7631 -6.10352e-05 11.5315 0.0700041 11.3344 0.201317L5.33438 4.20144C5.17003 4.31101 5.03527 4.45945 4.94206 4.63358C4.84884 4.80772 4.80004 5.00218 4.8 5.19969V19.1999H9.6V13.7999C9.6 13.4684 9.8685 13.1999 10.2 13.1999H13.8C14.1315 13.1999 14.4 13.4684 14.4 13.7999V19.1999H19.2V5.20007C19.2 4.79882 18.9994 4.42382 18.6656 4.20144ZM12 9.59995C10.3433 9.59995 9 8.2567 9 6.59994C9 4.94319 10.3433 3.59994 12 3.59994C13.6568 3.59994 15 4.94319 15 6.59994C15 8.2567 13.6568 9.59995 12 9.59995ZM22.8 7.19994H20.4V19.1999H23.4C23.7315 19.1999 24 18.9314 24 18.5999V8.39995C24 7.73732 23.4626 7.19994 22.8 7.19994Z"
                                 fill="currentColor" />
                           </g>
                           <defs>
                              <clipPath id="clip1">
                                 <rect width="24" height="19.2" fill="white" />
                              </clipPath>
                           </defs>
                        </svg>
                     </div>
                     <div class="ms-3">
                        <h5>South Kellergrove High</h5>
                        <p class="mb-0">Senior High School | 2010</p>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <div class="profile-icon iq-icon-box rounded-small bg-info-subtle text-center">
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0)">
                              <path
                                 d="M0 8.39995V18.5999C0 18.9314 0.2685 19.1999 0.6 19.1999H3.6V7.19994H1.2C0.537375 7.19994 0 7.73732 0 8.39995ZM13.5 6.59994H12.6V5.09994C12.6 4.93419 12.4658 4.79994 12.3 4.79994H11.7C11.5343 4.79994 11.4 4.93419 11.4 5.09994V7.49994C11.4 7.66569 11.5343 7.79995 11.7 7.79995H13.5C13.6658 7.79995 13.8 7.66569 13.8 7.49994V6.89994C13.8 6.73419 13.6658 6.59994 13.5 6.59994ZM18.6656 4.20144L12.6656 0.201317C12.4685 0.0700041 12.2369 -6.10352e-05 12 -6.10352e-05C11.7631 -6.10352e-05 11.5315 0.0700041 11.3344 0.201317L5.33438 4.20144C5.17003 4.31101 5.03527 4.45945 4.94206 4.63358C4.84884 4.80772 4.80004 5.00218 4.8 5.19969V19.1999H9.6V13.7999C9.6 13.4684 9.8685 13.1999 10.2 13.1999H13.8C14.1315 13.1999 14.4 13.4684 14.4 13.7999V19.1999H19.2V5.20007C19.2 4.79882 18.9994 4.42382 18.6656 4.20144ZM12 9.59995C10.3433 9.59995 9 8.2567 9 6.59994C9 4.94319 10.3433 3.59994 12 3.59994C13.6568 3.59994 15 4.94319 15 6.59994C15 8.2567 13.6568 9.59995 12 9.59995ZM22.8 7.19994H20.4V19.1999H23.4C23.7315 19.1999 24 18.9314 24 18.5999V8.39995C24 7.73732 23.4626 7.19994 22.8 7.19994Z"
                                 fill="currentColor" />
                           </g>
                           <defs>
                              <clipPath id="clip2">
                                 <rect width="24" height="19.2" fill="white" />
                              </clipPath>
                           </defs>
                        </svg>
                     </div>
                     <div class="ms-3">
                        <h5>South Kellergrove Junior</h5>
                        <p class="mb-0">Junior High School | Class of 2008</p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>