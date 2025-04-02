<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-header d-flex justify-content-between border-0">
                        <div class="header-title">
                            <h4 class="card-title">Basic Checkbox</h4>
                        </div>
                        <div class="header-action">
                            <i data-bs-toggle="collapse" href="#form-basic-checkbox-1" aria-expanded="false"
                                aria-controls="form-basic-checkbox-1">
                                <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="collapse" id="form-basic-checkbox-1">
                            <div class="card"><kbd class="bg-dark">
                                    <pre id="counter" class="text-white"><code>
&#60;div class="form-check form-check-inline me-2"&#62;
&#60;input type="checkbox" class="form-check-input" id="checkbox1"&#62;
&#60;label for="checkbox1"&#62;Primary / Inactive&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-check-inline me-2"&#62;
&#60;input type="checkbox" class="form-check-input" value="" id="checkbox2" checked=""&#62;
&#60;label for="checkbox2"&#62;Primary / Active&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-check-inline me-2"&#62;
&#60;input type="checkbox" class="form-check-input" value="" id="checkbox3" disabled=""&#62;
&#60;label for="checkbox3"&#62;Disable / Inactive&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-check-inline me-2"&#62;
&#60;input type="checkbox" class="form-check-input" value="" id="checkbox4" checked="" disabled=""&#62;
&#60;label for="checkbox4"&#62;Active / Disable&#60;/label&#62;
&#60;/div&#62;
</code></pre>
                                </kbd></div>
                        </div>
                        <div class="form-check form-check-inline me-2">
                            <input type="checkbox" class="form-check-input" id="checkbox1">
                            <label class="text-dark" for="checkbox1">Primary / Inactive</label>
                        </div>
                        <div class="form-check form-check-inline me-2">
                            <input type="checkbox" class="form-check-input" value="" id="checkbox2"
                                checked="">
                            <label class="text-dark" for="checkbox2">Primary / Active</label>
                        </div>
                        <div class="form-check form-check-inline me-2">
                            <input type="checkbox" class="form-check-input" value="" id="checkbox3"
                                disabled="">
                            <label class="text-dark" for="checkbox3">Disable / Inactive</label>
                        </div>
                        <div class="form-check form-check-inline me-2">
                            <input type="checkbox" class="form-check-input" value="" id="checkbox4" checked=""
                                disabled="">
                            <label class="text-dark" for="checkbox4">Active / Disable</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between border-0">
                        <div class="header-title">
                            <h4 class="card-title">Custom Checkbox</h4>
                        </div>
                        <div class="header-action">
                            <i data-bs-toggle="collapse" href="#form-custom-checkbox-2" aria-expanded="false"
                                aria-controls="form-custom-checkbox-2">
                                <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="collapse" id="form-custom-checkbox-2">
                            <div class="card"><kbd class="bg-dark">
                                    <pre id="counter" class="text-white"><code>
&#60;div class="form-check form-checkbox form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input" id="customCheck5"&#62;
&#60;label class="form-check-label" for="customCheck5"&#62;Primary / Inactive&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-checkbox form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input" id="customCheck6" Checked=""&#62;
&#60;label class="form-check-label" for="customCheck6"&#62;Primary - active&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-checkbox form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input" id="customCheck7" disabled=""&#62;
&#60;label class="form-check-label" for="customCheck7"&#62;Primary - inactive - disabled&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check custom-checkbox form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input" id="customCheck8" checked="" disabled=""&#62;
&#60;label class="form-check-label" for="customCheck8"&#62;Primary - active - disabled&#60;/label&#62;
&#60;/div&#62;
</code></pre>
                                </kbd></div>
                        </div>
                        <div class="form-check form-checkbox form-check-inline">
                            <input type="checkbox" class="form-check-input" id="customCheck5">
                            <label class="form-check-label text-dark" for="customCheck5">Primary / Inactive</label>
                        </div>
                        <div class="form-check form-checkbox form-check-inline">
                            <input type="checkbox" class="form-check-input" id="customCheck6" Checked="">
                            <label class="form-check-label text-dark" for="customCheck6">Primary - active</label>
                        </div>
                        <div class="form-check form-checkbox form-check-inline">
                            <input type="checkbox" class="form-check-input" id="customCheck7" disabled="">
                            <label class="form-check-label text-dark" for="customCheck7">Primary - inactive - disabled</label>
                        </div>
                        <div class="form-check custom-checkbox form-check-inline">
                            <input type="checkbox" class="form-check-input" id="customCheck8" checked=""
                                disabled="">
                            <label class="form-check-label text-dark" for="customCheck8">Primary - active - disabled</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between border-0">
                        <div class="header-title">
                            <h4 class="card-title">Color</h4>
                        </div>
                        <div class="header-action">
                            <i data-bs-toggle="collapse" href="#form-color-checkbox-3" aria-expanded="false"
                                aria-controls="form-color-checkbox-3">
                                <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="collapse" id="form-color-checkbox-3">
                            <div class="card"><kbd class="bg-dark">
                                    <pre id="counter" class="text-white"><code>
&#60;div class="form-check form-checkbox form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input bg-success border-0" id="customCheck-2" checked=""&#62;
&#60;label class="form-check-label" for="customCheck-2"&#62;Success&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-checkbox form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input bg-danger border-0" id="customCheck-3" checked=""&#62;
&#60;label class="form-check-label" for="customCheck-3"&#62;Danger&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-checkbox form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input bg-warning border-0" id="customCheck-4" checked=""&#62;
&#60;label class="form-check-label" for="customCheck-4"&#62;Warning&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-checkbox form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input bg-dark border-0" id="customCheck-5" checked=""&#62;
&#60;label class="form-check-label" for="customCheck-5"&#62;Dark&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-checkbox form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input bg-info border-0" id="customCheck-6" checked=""&#62;
&#60;label class="form-check-label" for="customCheck-6"&#62;Info&#60;/label&#62;
&#60;/div&#62;
</code></pre>
                                </kbd></div>
                        </div>
                        <div class="form-check form-checkbox form-check-inline">
                            <input type="checkbox" class="form-check-input bg-primary border-0" id="customCheck-1"
                                checked="">
                            <label class="form-check-label text-dark" for="customCheck-1"> Primary</label>
                        </div>
                        <div class="form-check form-checkbox form-check-inline">
                            <input type="checkbox" class="form-check-input bg-success border-0" id="customCheck-2"
                                checked="">
                            <label class="form-check-label text-dark" for="customCheck-2">Success</label>
                        </div>
                        <div class="form-check form-checkbox form-check-inline">
                            <input type="checkbox" class="form-check-input bg-danger border-0" id="customCheck-3"
                                checked="">
                            <label class="form-check-label text-dark" for="customCheck-3">Danger</label>
                        </div>
                        <div class="form-check form-checkbox form-check-inline">
                            <input type="checkbox" class="form-check-input bg-warning border-0" id="customCheck-4"
                                checked="">
                            <label class="form-check-label text-dark" for="customCheck-4">Warning</label>
                        </div>
                        <div class="form-check form-checkbox form-check-inline">
                            <input type="checkbox" class="form-check-input bg-dark border-0" id="customCheck-5"
                                checked="">
                            <label class="form-check-label text-dark" for="customCheck-5">Dark</label>
                        </div>
                        <div class="form-check form-checkbox form-check-inline">
                            <input type="checkbox" class="form-check-input bg-info border-0" id="customCheck-6"
                                checked="">
                            <label class="form-check-label text-dark" for="customCheck-6">Info</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between border-0">
                        <div class="header-title">
                            <h4 class="card-title">Custom Color</h4>
                        </div>
                        <div class="header-action">
                            <i data-bs-toggle="collapse" href="#form-customcolor-checkbox-4" aria-expanded="false"
                                aria-controls="form-customcolor-checkbox-4">
                                <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="collapse" id="form-customcolor-checkbox-4">
                            <div class="card"><kbd class="bg-dark">
                                    <pre id="counter" class="text-white"><code>
&#60;div class="form-check custom-checkbox custom-checkbox-color form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input bg-primary border-0" id="customCheck-11"&#62;
&#60;label class="form-check-label" for="customCheck-11"&#62;Primary &#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check custom-checkbox custom-checkbox-color form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input bg-success border-0" id="customCheck-22"&#62;
&#60;label class="form-check-label" for="customCheck-22"&#62;Success&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check custom-checkbox custom-checkbox-color form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input bg-danger border-0" id="customCheck-33"&#62;
&#60;label class="form-check-label" for="customCheck-33"&#62;Danger&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check custom-checkbox custom-checkbox-color form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input bg-warning border-0" id="customCheck-44"&#62;
&#60;label class="form-check-label" for="customCheck-44"&#62;Warning&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check custom-checkbox custom-checkbox-color form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input bg-dark border-0" id="customCheck-55"&#62;
&#60;label class="form-check-label" for="customCheck-55"&#62;Dark&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check custom-checkbox custom-checkbox-color form-check-inline"&#62;
&#60;input type="checkbox" class="form-check-input bg-info border-0" id="customCheck-66"&#62;
&#60;label class="form-check-label" for="customCheck-66"&#62; Info&#60;/label&#62;
&#60;/div&#62;
</code></pre>
                                </kbd></div>
                        </div>
                        <div class="form-check custom-checkbox custom-checkbox-color form-check-inline">
                            <input type="checkbox" class="form-check-input bg-primary border-0" id="customCheck-11">
                            <label class="form-check-label text-dark" for="customCheck-11">Primary </label>
                        </div>
                        <div class="form-check custom-checkbox custom-checkbox-color form-check-inline">
                            <input type="checkbox" class="form-check-input bg-success border-0" id="customCheck-22">
                            <label class="form-check-label text-dark" for="customCheck-22">Success</label>
                        </div>
                        <div class="form-check custom-checkbox custom-checkbox-color form-check-inline">
                            <input type="checkbox" class="form-check-input bg-danger border-0" id="customCheck-33">
                            <label class="form-check-label text-dark" for="customCheck-33">Danger</label>
                        </div>
                        <div class="form-check custom-checkbox custom-checkbox-color form-check-inline">
                            <input type="checkbox" class="form-check-input bg-warning border-0" id="customCheck-44">
                            <label class="form-check-label text-dark" for="customCheck-44">Warning</label>
                        </div>
                        <div class="form-check custom-checkbox custom-checkbox-color form-check-inline">
                            <input type="checkbox" class="form-check-input bg-dark border-0" id="customCheck-55">
                            <label class="form-check-label text-dark" for="customCheck-55">Dark</label>
                        </div>
                        <div class="form-check custom-checkbox custom-checkbox-color form-check-inline">
                            <input type="checkbox" class="form-check-input bg-info border-0" id="customCheck-66">
                            <label class="form-check-label text-dark" for="customCheck-66"> Info</label>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex justify-content-between border-0">
                        <div class="header-title">
                            <h4 class="card-title">Change Icon</h4>
                        </div>
                        <div class="header-action">
                            <i data-bs-toggle="collapse" href="#form-changeicon-checkbox-5" aria-expanded="false"
                                aria-controls="form-changeicon-checkbox-5">
                                <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="collapse" id="form-changeicon-checkbox-5">
                            <div class="card"><kbd class="bg-dark">
                                    <pre id="counter" class="text-white"><code>
                  &#60;div class="form-check custom-checkbox checkbox-icon form-check-inline"&#62;
                  &#60;input type="checkbox" class="form-check-input" id="customCheck-20" checked=""&#62;
                  &#60;label class="form-check-label" for="customCheck-20"&#62;&#60;i
                  class="fa fa-commenting-o me-2"&#62;&#60;/i&#62;SMS&#60;/label&#62;
                  &#60;/div&#62;
                  &#60;div class="form-check custom-checkbox checkbox-icon form-check-inline"&#62;
                  &#60;input type="checkbox" class="form-check-input" id="customCheck-30" checked=""&#62;
                  &#60;label class="form-check-label" for="customCheck-30"&#62;&#60;i class="fa fa-times
                  me-2"&#62;&#60;/i&#62;Cancel&#60;/label&#62;
                  &#60;/div&#62;
                  &#60;div class="form-check custom-checkbox checkbox-icon form-check-inline"&#62;
                  &#60;input type="checkbox" class="form-check-input" id="customCheck-40" checked=""&#62;
                  &#60;label class="form-check-label" for="customCheck-40"&#62;&#60;i class="fa fa-file
                  me-2"&#62;&#60;/i&#62;File&#60;/label&#62;
                  &#60;/div&#62;
                  &#60;div class="form-check custom-checkbox checkbox-icon form-check-inline"&#62;
                  &#60;input type="checkbox" class="form-check-input" id="customCheck-50" checked=""&#62;
                  &#60;label class="form-check-label" for="customCheck-50"&#62;&#60;i class="fa fa-bold
                  me-2"&#62;&#60;/i&#62;Bold&#60;/label&#62;
                  &#60;/div&#62;
                  &#60;div class="form-check custom-checkbox checkbox-icon form-check-inline"&#62;
                  &#60;input type="checkbox" class="form-check-input" id="customCheck-60" checked=""&#62;
                  &#60;label class="form-check-label" for="customCheck-60"&#62;&#60;i
                  class="fa fa-map-marker me-2"&#62;&#60;/i&#62;Location&#60;/label&#62;
                  &#60;/div&#62;
                  &#60;div class="form-check custom-checkbox checkbox-icon form-check-inline"&#62;
                  &#60;input type="checkbox" class="form-check-input" id="customCheck-70" checked=""&#62;
                  &#60;label class="form-check-label" for="customCheck-70"&#62;&#60;i class="fa fa-camera
                  me-2"&#62;&#60;/i&#62;Camera&#60;/label&#62;
                  &#60;/div&#62;
               </code></pre>
                                </kbd></div>
                        </div>
                        <div class="form-check custom-checkbox checkbox-icon form-check-inline">
                            <input type="checkbox" class="form-check-input" id="customCheck-10" checked="">
                            <label class="form-check-label text-dark" for="customCheck-10"><i
                                    class="fa fa-music me-3"></i>Music</label>
                        </div>
                        <div class="form-check custom-checkbox checkbox-icon form-check-inline">
                            <input type="checkbox" class="form-check-input" id="customCheck-20" checked="">
                            <label class="form-check-label text-dark" for="customCheck-20"><i
                                    class="fa fa-commenting-o me-2"></i>SMS</label>
                        </div>
                        <div class="form-check custom-checkbox checkbox-icon form-check-inline">
                            <input type="checkbox" class="form-check-input" id="customCheck-30" checked="">
                            <label class="form-check-label text-dark" for="customCheck-30"><i
                                    class="fa fa-times me-2"></i>Cancel</label>
                        </div>
                        <div class="form-check custom-checkbox checkbox-icon form-check-inline">
                            <input type="checkbox" class="form-check-input" id="customCheck-40" checked="">
                            <label class="form-check-label text-dark" for="customCheck-40"><i
                                    class="fa fa-file me-2"></i>File</label>
                        </div>
                        <div class="form-check custom-checkbox checkbox-icon form-check-inline">
                            <input type="checkbox" class="form-check-input" id="customCheck-50" checked="">
                            <label class="form-check-label text-dark" for="customCheck-50"><i
                                    class="fa fa-bold me-2"></i>Bold</label>
                        </div>
                        <div class="form-check custom-checkbox checkbox-icon form-check-inline">
                            <input type="checkbox" class="form-check-input" id="customCheck-60" checked="">
                            <label class="form-check-label text-dark" for="customCheck-60"><i
                                    class="fa fa-map-marker me-2"></i>Location</label>
                        </div>
                        <div class="form-check custom-checkbox checkbox-icon form-check-inline">
                            <input type="checkbox" class="form-check-input" id="customCheck-70" checked="">
                            <label class="form-check-label text-dark" for="customCheck-70"><i
                                    class="fa fa-camera me-2"></i>Camera</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between border-0">
                        <div class="header-title ">
                            <h4 class="card-title">Boolean Checkbox</h4>
                        </div>
                        <div class="header-action">
                            <i data-bs-toggle="collapse" href="#form-boolen-checkbox-6" aria-expanded="false"
                                aria-controls="form-boolen-checkbox-6">
                                <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="collapse" id="form-boolen-checkbox-6">
                            <div class="card"><kbd class="bg-dark">
                                    <pre id="counter" class="text-white"><code>
               &#60;div class="form-check form-check-inline me-2"&#62;
               &#60;input type="checkbox" class="form-check-input" id="customCheck-t" checked=""&#62;
               &#60;label class="form-check-label" for="customCheck-t"&#62;True&#60;/label&#62;
               &#60;/div&#62;
               &#60;div class="form-check form-check-inline me-2"&#62;
               &#60;input type="checkbox" class="form-check-input" id="customCheck-f"&#62;
               &#60;label class="form-check-label" for="customCheck-f"&#62;False&#60;/label&#62;
               &#60;/div&#62;
               </code></pre>
                                </kbd></div>
                        </div>
                        <div class="form-check form-check-inline me-2">
                            <input type="checkbox" class="form-check-input" id="customCheck-t" checked="">
                            <label class="form-check-label text-dark" for="customCheck-t">True</label>
                        </div>
                        <div class="form-check form-check-inline me-2">
                            <input type="checkbox" class="form-check-input" id="customCheck-f">
                            <label class="form-check-label text-dark" for="customCheck-f">False</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
