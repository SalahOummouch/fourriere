<x-app-layout>
    <div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-lg-12 col-md-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Default</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-1" aria-expanded="false"
                     aria-controls="#input-group-1">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-1">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="default" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon1&#x22;&#x3E;@&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Username&#x22; aria-label=&#x22;Username&#x22;
      aria-describedby=&#x22;basic-addon1&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Recipient&#x27;s username&#x22;
      aria-label=&#x22;Recipient&#x27;s username&#x22; aria-describedby=&#x22;basic-addon2&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon2&#x22;&#x3E;@example.com&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;label for=&#x22;basic-url&#x22;&#x3E;Your URL&#x3C;/label&#x3E;
&#x3C;div class=&#x22;input-group mb-3&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon3&#x22;&#x3E;https://example.com/users/&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; id=&#x22;basic-url&#x22; aria-describedby=&#x22;basic-addon3&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;$&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Amount (to the nearest dollar)&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;.00&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text text-area&#x22;&#x3E;With textarea&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;textarea class=&#x22;form-control&#x22; aria-label=&#x22;With textarea&#x22;&#x3E;&#x3C;/textarea&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                     </kbd></div>
               </div>
               <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                     aria-describedby="basic-addon1">
               </div>
               <div class="input-group mb-4">
                  <input type="text" class="form-control" placeholder="Recipient's username"
                     aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                     <span class="input-group-text" id="basic-addon2">@example.com</span>
                  </div>
               </div>
               <label class="text-dark" for="basic-url">Your URL</label>
               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                  </div>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
               </div>
               <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  <div class="input-group-append">
                     <span class="input-group-text">.00</span>
                  </div>
               </div>
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text text-area">With textarea</span>
                  </div>
                  <textarea class="form-control" aria-label="With textarea"></textarea>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Simple Icon</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-2" aria-expanded="false"
                     aria-controls="#input-group-2">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-2">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="simple-icons" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon4&#x22;&#x3E;&#x3C;i class=&#x22;las la-bell font-size-20&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Notification&#x22; aria-label=&#x22;notification&#x22;
      aria-describedby=&#x22;basic-addon4&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-end&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Notification&#x22; aria-label=&#x22;notification&#x22;
      aria-describedby=&#x22;basic-addon5&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon5&#x22;&#x3E;&#x3C;i class=&#x22;las la-bell font-size-20&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                     </kbd></div>
               </div>
               <p class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                     </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Notification" aria-label="notification"
                     aria-describedby="basic-addon4">
               </div>
               <p class="text-end text-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right
               </p>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Notification" aria-label="notification"
                     aria-describedby="basic-addon5">
                  <div class="input-group-append">
                     <span class="input-group-text" id="basic-addon5"><svg xmlns="http://www.w3.org/2000/svg"
                           width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Spinning Icon</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-3" aria-expanded="false"
                     aria-controls="#input-group-3">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-3">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="spinning-icon" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon6&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-spinner fa-spin&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Spinners&#x22; aria-label=&#x22;spinners&#x22;
      aria-describedby=&#x22;basic-addon6&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Spinners&#x22; aria-label=&#x22;spinners&#x22;
      aria-describedby=&#x22;basic-addon7&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon7&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-spinner fa-spin&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                     </kbd></div>
               </div>
               <p class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon6"><svg width="24" height="24" viewBox="0 0 24 24"
                           fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g id="Loading icon">
                              <g id="Group 33568">
                                 <circle id="Ellipse 125" cx="12" cy="5" r="2" fill="black" />
                                 <circle id="Ellipse 130" cx="17" cy="7" r="2" fill="black" />
                                 <circle id="Ellipse 127" cx="12" cy="19" r="2" fill="black" />
                                 <circle id="Ellipse 132" cx="7" cy="17" r="2" fill="#828282" />
                                 <circle id="Ellipse 131" cx="17" cy="17" r="2" fill="black" />
                                 <circle id="Ellipse 128" cx="19" cy="12" r="2" fill="black" />
                                 <circle id="Ellipse 129" cx="5" cy="12" r="2" fill="#828282" />
                                 <circle id="Ellipse 133" cx="7" cy="7" r="2" fill="#828282" />
                              </g>
                           </g>
                        </svg></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners"
                     aria-describedby="basic-addon6">
               </div>
               <p class="text-end text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right</p>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners"
                     aria-describedby="basic-addon7">
                  <div class="input-group-append">
                     <span class="input-group-text" id="basic-addon7"><svg width="24" height="24" viewBox="0 0 24 24"
                           fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g id="Loading icon">
                              <g id="Group 33568">
                                 <circle id="Ellipse 125" cx="12" cy="5" r="2" fill="black" />
                                 <circle id="Ellipse 130" cx="17" cy="7" r="2" fill="black" />
                                 <circle id="Ellipse 127" cx="12" cy="19" r="2" fill="black" />
                                 <circle id="Ellipse 132" cx="7" cy="17" r="2" fill="#828282" />
                                 <circle id="Ellipse 131" cx="17" cy="17" r="2" fill="black" />
                                 <circle id="Ellipse 128" cx="19" cy="12" r="2" fill="black" />
                                 <circle id="Ellipse 129" cx="5" cy="12" r="2" fill="#828282" />
                                 <circle id="Ellipse 133" cx="7" cy="7" r="2" fill="#828282" />
                              </g>
                           </g>
                        </svg></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Switch</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-4" aria-expanded="false"
                     aria-controls="#input-group-4">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-4">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="switch" class="text-white"><code>
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon6&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-spinner fa-spin&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Spinners&#x22; aria-label=&#x22;spinners&#x22;
      aria-describedby=&#x22;basic-addon6&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-end&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Spinners&#x22; aria-label=&#x22;spinners&#x22;
      aria-describedby=&#x22;basic-addon7&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon7&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-spinner fa-spin&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                     </kbd></div>
               </div>
               <p class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <div class="input-group-text">
                        <div class="custom-control custom-switch custom-switch-color">
                           <input type="checkbox" class="custom-control-input bg-primary" id="customSwitch01"
                              checked="">
                           <label class="custom-control-label" for="customSwitch01"></label>
                        </div>
                     </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
               </div>
               <p class="text-end text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right</p>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <div class="custom-control custom-switch custom-switch-color">
                           <input type="checkbox" class="custom-control-input bg-success" id="customSwitch02"
                              checked="">
                           <label class="custom-control-label" for="customSwitch02"></label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Buttons With Dropdowns</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-5" aria-expanded="false"
                     aria-controls="#input-group-11">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-5">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="buttons-with-dropdown" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-primary dropdown-toggle&#x22; type=&#x22;button&#x22; data-toggle=&#x22;dropdown&#x22;
         aria-haspopup=&#x22;true&#x22; aria-expanded=&#x22;false&#x22;&#x3E;Dropdown &#x3C;/button&#x3E;
      &#x3C;div class=&#x22;dropdown-menu&#x22;&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Another action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Something else here&#x3C;/a&#x3E;
         &#x3C;div role=&#x22;separator&#x22; class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/div&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Separated link&#x3C;/a&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Text input with dropdown button&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                     </kbd></div>
               </div>
               <p class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dropdown </button>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                     </div>
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with dropdown button">
               </div>
               <p class="text-end text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right</p>
               <div class="input-group">
                  <input type="text" class="form-control" aria-label="Text input with dropdown button">
                  <div class="input-group-append">
                     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dropdown </button>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Segmented Buttons</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-6" aria-expanded="false"
                     aria-controls="#input-group-6">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-6">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="segmented-buttons" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Action&#x3C;/button&#x3E;
      &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-primary dropone dropdown-toggle dropdown-toggle-split&#x22;
         data-toggle=&#x22;dropdown&#x22; aria-haspopup=&#x22;true&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
         &#x3C;i class=&#x22;las la-angle-down&#x22;&#x3E;&#x3C;/i&#x3E;
      &#x3C;/button&#x3E;
      &#x3C;div class=&#x22;dropdown-menu&#x22;&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Another action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Something else here&#x3C;/a&#x3E;
         &#x3C;div role=&#x22;separator&#x22; class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/div&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Separated link&#x3C;/a&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Text input with segmented dropdown button&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                     </kbd></div>
               </div>
               <p class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <button type="button" class="btn btn-primary">Action</button>
                     <button type="button" class="btn btn-outline-primary dropone dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd" />
                        </svg>
                     </button>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                     </div>
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
               </div>
               <p class="text-end text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right</p>
               <div class="input-group">
                  <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                  <div class="input-group-append">
                     <button type="button" class="btn btn-primary">Action</button>
                     <button type="button" class="btn btn-outline-primary dropone dropdown-toggle  dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd" />
                        </svg>
                     </button>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Custom Select</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-7" aria-expanded="false"
                     aria-controls="#input-group-7">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-7">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="custom-select" class="text-white"><code>
&#60;div class="input-group mb-3"&#62;
&#60;label class="input-group-text" for="inputGroupSelect01"&#62;Options&#60;/label&#62;
&#60;select class="form-select" id="inputGroupSelect01"&#62;
&#60;option selected&#62;Choose...&#60;/option&#62;
&#60;option value="1"&#62;One&#60;/option&#62;
&#60;option value="2"&#62;Two&#60;/option&#62;
&#60;option value="3"&#62;Three&#60;/option&#62;
&#60;/select&#62;
&#60;/div&#62;

&#60;div class="input-group mb-3"&#62;
&#60;select class="form-select" id="inputGroupSelect02"&#62;
&#60;option selected&#62;Choose...&#60;/option&#62;
&#60;option value="1"&#62;One&#60;/option&#62;
&#60;option value="2"&#62;Two&#60;/option&#62;
&#60;option value="3"&#62;Three&#60;/option&#62;
&#60;/select&#62;
&#60;label class="input-group-text" for="inputGroupSelect02"&#62;Options&#60;/label&#62;
&#60;/div&#62;

&#60;div class="input-group mb-3"&#62;
&#60;button class="btn btn-outline-secondary" type="button"&#62;Button&#60;/button&#62;
&#60;select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon"&#62;
&#60;option selected&#62;Choose...&#60;/option&#62;
&#60;option value="1"&#62;One&#60;/option&#62;
&#60;option value="2"&#62;Two&#60;/option&#62;
&#60;option value="3"&#62;Three&#60;/option&#62;
&#60;/select&#62;
&#60;/div&#62;

&#60;div class="input-group"&#62;
&#60;select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon"&#62;
&#60;option selected&#62;Choose...&#60;/option&#62;
&#60;option value="1"&#62;One&#60;/option&#62;
&#60;option value="2"&#62;Two&#60;/option&#62;
&#60;option value="3"&#62;Three&#60;/option&#62;
&#60;/select&#62;
&#60;button class="btn btn-outline-secondary" type="button"&#62;Button&#60;/button&#62;
&#60;/div&#62;
</code></pre>
                     </kbd></div>
               </div>
               <p class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01">Options</label>
                  <select class="form-select" id="inputGroupSelect01">
                     <option selected>Choose...</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                  </select>
               </div>
               <p class="text-end text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right</p>
               <div class="input-group mb-3">
                  <select class="form-select" id="inputGroupSelect02">
                     <option selected>Choose...</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                  </select>
                  <label class="input-group-text" for="inputGroupSelect02">Options</label>
               </div>
               <p><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-3">
                  <button class="btn btn-outline-secondary" type="button">Button</button>
                  <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                     <option selected>Choose...</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                  </select>
               </div>
               <p class="text-end"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right</p>
               <div class="input-group">
                  <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                     <option selected>Choose...</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                  </select>
                  <button class="btn btn-outline-secondary" type="button">Button</button>
               </div>
            </div>
         </div>

         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Sizing</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-8" aria-expanded="false"
                     aria-controls="#input-group-8">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-8">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="sizing" class="text-white"><code>
&#x3C;div class=&#x22;input-group input-group-sm mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;inputGroup-sizing-sm&#x22;&#x3E;Small&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Small&#x22; aria-describedby=&#x22;inputGroup-sizing-sm&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;inputGroup-sizing-default&#x22;&#x3E;Default&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Default&#x22;
      aria-describedby=&#x22;inputGroup-sizing-default&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group input-group-lg&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;inputGroup-sizing-lg&#x22;&#x3E;Large&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Large&#x22; aria-describedby=&#x22;inputGroup-sizing-sm&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                     </kbd></div>
               </div>
               <div class="input-group  mb-4">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
               </div>
               <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Default"
                     aria-describedby="inputGroup-sizing-default">
               </div>
               <div class="input-group ">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Dropdown Icon</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-9" aria-expanded="false"
                     aria-controls="#input-group-9">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-9">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="dropdown-icon" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;

   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-primary  dropone dropdown-toggle&#x22; type=&#x22;button&#x22; data-toggle=&#x22;dropdown&#x22;
         aria-haspopup=&#x22;true&#x22; aria-expanded=&#x22;false&#x22;&#x3E;&#x3C;i class=&#x22;las la-cog font-size-20&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/button&#x3E;
      &#x3C;div class=&#x22;dropdown-menu&#x22;&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Another action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Something else here&#x3C;/a&#x3E;
         &#x3C;div role=&#x22;separator&#x22; class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/div&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Separated link&#x3C;/a&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Dropdown&#x22; aria-label=&#x22;dropdown&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                     </kbd></div>
               </div>
               <p class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-4">

                  <div class="input-group-prepend">
                     <button class="btn btn-primary  dropone dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20px"
                           fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg></button>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                     </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Dropdown" aria-label="dropdown">
               </div>
               <p class="text-end text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right </p>
               <div class="input-group">
                  <input type="text" class="form-control" aria-label="Text input with dropdown button">
                  <div class="input-group-append">
                     <button class="btn btn-success dropone dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20px"
                           fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg></button>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Checkboxes</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-10" aria-expanded="false"
                     aria-controls="#input-group-11">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-10">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="checkbox" class="text-white"><code>
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;div class=&#x22;input-group-text&#x22;&#x3E;
         &#x3C;input type=&#x22;checkbox&#x22; aria-label=&#x22;Text input with checkbox&#x22;&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Checkbox&#x22; aria-label=&#x22;checkbox&#x22;
      aria-describedby=&#x22;basic-addon1&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-end&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Checkbox&#x22; aria-label=&#x22;checkbox&#x22;
      aria-describedby=&#x22;basic-addon5&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;div class=&#x22;input-group-text&#x22;&#x3E;
         &#x3C;input type=&#x22;checkbox&#x22; aria-label=&#x22;Text input with checkbox&#x22; checked&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                     </kbd></div>
               </div>
               <p class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-3">
                  <div class="input-group-text">
                     <input class="form-check-input mt-0" type="checkbox" value=""
                        aria-label="Checkbox for following text input">
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with checkbox">
               </div>
               <p class="text-end text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right</p>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox" checked>
                  <div class="input-group-text">
                     <input class="form-check-input mt-0" type="checkbox" value=""
                        aria-label="Checkbox for following text input">
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Radios</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-11" aria-expanded="false"
                     aria-controls="#input-group-11">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-11">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="radios" class="text-white"><code>
&#60;div class="input-group"&#62;
&#60;div class="input-group-text"&#62;
&#60;input class="form-check-input mt-0" type="radio" value=""
aria-label="Radio button for following text input"&#62;
&#60;/div&#62;
&#60;input type="text" class="form-control" aria-label="Text input with radio button"&#62;
&#60;/div&#62;

&#60;div class="input-group"&#62;
&#60;input type="text" class="form-control" aria-label="Text input with radio button"&#62;
&#60;div class="input-group-text"&#62;
&#60;input class="form-check-input mt-0" type="radio" value=""
aria-label="Radio button for following text input"&#62;
&#60;/div&#62;
&#60;/div&#62;
</code></pre>
                     </kbd></div>
               </div>
               <p class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group">
                  <div class="input-group-text">
                     <input class="form-check-input mt-0" type="radio" value=""
                        aria-label="Radio button for following text input">
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with radio button">
               </div>
               <p class="text-end mt-2 text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right</p>
               <div class="input-group">
                  <input type="text" class="form-control" aria-label="Text input with radio button">
                  <div class="input-group-text">
                     <input class="form-check-input mt-0" type="radio" value=""
                        aria-label="Radio button for following text input">
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Multiple Inputs</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-12" aria-expanded="false"
                     aria-controls="#input-group-12">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-12">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="multiple-inputs" class="text-white"><code>
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group&#x22;&#x3E;
      &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
         &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;first&#x22;&#x3E;First and last name&#x3C;/span&#x3E;
      &#x3C;/div&#x3E;
      &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22;&#x3E;
      &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22;&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                     </kbd></div>
               </div>
               <div class="input-group">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="first">First and last name</span>
                     </div>
                     <input type="text" class="form-control">
                     <input type="text" class="form-control">
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Multiple Addons</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-13" aria-expanded="false"
                     aria-controls="#input-group-13">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-13">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="multiple-addons" class="text-white"><code>
&#60;div class="input-group mb-3"&#62;
&#60;span class="input-group-text"&#62;$&#60;/span&#62;
&#60;span class="input-group-text"&#62;0.00&#60;/span&#62;
&#60;input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"&#62;
&#60;/div&#62;
&#60;div class="input-group"&#62;
&#60;input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"&#62;
&#60;span class="input-group-text"&#62;$&#60;/span&#62;
&#60;span class="input-group-text"&#62;0.00&#60;/span&#62;
&#60;/div&#62;
</code></pre>
                     </kbd></div>
               </div>
               <p><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-3">
                  <span class="input-group-text">$</span>
                  <span class="input-group-text">0.00</span>
                  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
               </div>
               <p class="text-end"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right</p>
               <div class="input-group">
                  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                  <span class="input-group-text">$</span>
                  <span class="input-group-text">0.00</span>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Custom Select</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-14" aria-expanded="false"
                     aria-controls="#input-group-14">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-14">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="custom-select-1" class="text-white"><code>
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;&#x22; aria-label=&#x22;&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-end&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Recipient&#x27;s username&#x22;
      aria-label=&#x22;Recipient&#x27;s username&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-outline-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
      &#x3C;button class=&#x22;btn btn-outline-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;&#x22; aria-label=&#x22;&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-end&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Recipient&#x27;s username&#x22;
      aria-label=&#x22;Recipient&#x27;s username&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-outline-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
      &#x3C;button class=&#x22;btn btn-outline-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                     </kbd></div>
               </div>
               <p><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <button class="btn btn-primary" type="button">Button</button>
                  </div>
                  <input type="text" class="form-control" placeholder="" aria-label="">
               </div>
               <p class="text-end"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right</p>
               <div class="input-group mb-4">
                  <input type="text" class="form-control" placeholder="Recipient's username"
                     aria-label="Recipient's username">
                  <div class="input-group-append">
                     <button class="btn btn-primary" type="button">Button</button>
                  </div>
               </div>
               <p><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                  </svg> Left </p>
               <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <button class="btn btn-outline-primary" type="button">Button</button>
                     <button class="btn btn-outline-primary" type="button">Button</button>
                  </div>
                  <input type="text" class="form-control" placeholder="" aria-label="">
               </div>
               <p class="text-end"><svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>Right</p>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Recipient's username"
                     aria-label="Recipient's username">
                  <div class="input-group-append">
                     <button class="btn btn-outline-primary" type="button">Button</button>
                     <button class="btn btn-outline-primary" type="button">Button</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Custom File Input</h4>
               </div>
               <div class="header-action">
                  <i data-bs-toggle="collapse" href="#input-group-15" aria-expanded="false"
                     aria-controls="#input-group-15">
                     <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                     </svg>
                  </i>
               </div>
            </div>
            <div class="card-body">
               <div class="collapse" id="input-group-15">
                  <div class="card"><kbd class="bg-dark">
                        <pre id="custom-file-input" class="text-white"><code>
&#60;div class="input-group mb-3"&#62;
&#60;label class="input-group-text" for="inputGroupFile01"&#62;Upload&#60;/label&#62;
&#60;input type="file" class="form-control" id="inputGroupFile01"&#62;
&#60;/div&#62;

&#60;div class="input-group mb-3"&#62;
&#60;input type="file" class="form-control" id="inputGroupFile02"&#62;
&#60;label class="input-group-text" for="inputGroupFile02"&#62;Upload&#60;/label&#62;
&#60;/div&#62;

&#60;div class="input-group mb-3"&#62;
&#60;button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03"&#62;Button&#60;/button&#62;
&#60;input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03"
aria-label="Upload"&#62;
&#60;/div&#62;

&#60;div class="input-group"&#62;
&#60;input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
aria-label="Upload"&#62;
&#60;button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04"&#62;Button&#60;/button&#62;
&#60;/div&#62;
</code></pre>
                     </kbd></div>
               </div>
               <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupFile01">Upload</label>
                  <input type="file" class="form-control" id="inputGroupFile01">
               </div>

               <div class="input-group mb-3">
                  <input type="file" class="form-control" id="inputGroupFile02">
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
               </div>

               <div class="input-group mb-3">
                  <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
                  <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03"
                     aria-label="Upload">
               </div>

               <div class="input-group">
                  <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                     aria-label="Upload">
                  <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
