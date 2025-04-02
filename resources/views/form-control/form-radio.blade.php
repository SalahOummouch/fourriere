<x-app-layout>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="p-4 border-0 d-flex justify-content-between">
                    <div class="card-title">
                        <h4>Default Radio Buttons</h4>
                    </div>
                    <div class="header-action">
                        <i data-bs-toggle="collapse" href="#form-default-radio-1" aria-expanded="false"
                            aria-controls="form-default-radio-1">
                            <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse" id="form-default-radio-1">
                        <div class="card"><kbd class="bg-dark">
                                <pre id="counter" class="text-white"><code>
&#60;div class="form-check form-check-inline"&#62;
&#60;input type="radio" class="form-check-input" name="bsradioq" id="radio1" checked=""&#62;
&#60;label for="radio1" class="form-check-label text-dark pl-2"&#62;Active&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-check-inline"&#62;
&#60;input type="radio" class="form-check-input" name="bsradioq" id="radio2"&#62;
&#60;label for="radio2" class="form-check-label text-dark pl-2"&#62;Inactive&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-check-inline"&#62;
&#60;input type="radio" class="form-check-input" name="bsradio1" id="radio3" disabled="" checked=""&#62;
&#60;label for="radio3" class="form-check-label text-dark pl-2"&#62;Active - Disabled&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-check-inline"&#62;
&#60;input type="radio" class="form-check-input" name="bsradio1" id="radio4" disabled=""&#62;
&#60;label for="radio3" class="form-check-label text-dark pl-2"&#62;Inactive - Disabled&#60;/label&#62;
&#60;/div&#62;
</code></pre>
                            </kbd></div>
                    </div>
                    <div class="d-flex flex-wrap gap-4">

                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="bsradioq" id="radio1"
                                checked="">
                            <label for="radio1" class="form-check-label text-dark pl-2">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="bsradioq" id="radio2">
                            <label for="radio2" class="form-check-label text-dark pl-2">Inactive</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="bsradio1" id="radio3" disabled=""
                                checked="">
                            <label for="radio3" class="form-check-label text-dark pl-2">Active - Disabled</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="bsradio1" id="radio4"
                                disabled="">
                            <label for="radio3" class="form-check-label text-dark pl-2">Inactive - Disabled</label>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="p-4 border-0 d-flex justify-content-between">
                    <div class="card-title">
                        <h4>Custom Colored Radio Buttons</h4>
                    </div>
                    <div class="header-action">
                        <i data-bs-toggle="collapse" href="#form-colored-radio-2" aria-expanded="false"
                            aria-controls="form-colored-radio-2">
                            <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse" id="form-colored-radio-2">
                        <div class="card"><kbd class="bg-dark">
                                <pre id="counter" class="text-white"><code>
&#60;div class="form-check form-check-inline"&#62;
&#60;input type="radio" class="form-check-input bg-primary border-0" name="bsradioo" id="radio111"&#62;
&#60;label for="radio111" class="form-check-label text-dark pl-2"&#62;Primary&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-check-inline"&#62;
&#60;input type="radio" class="form-check-input bg-success border-0" name="bsradioo" id="radio112"&#62;
&#60;label for="radio112" class="form-check-label text-dark pl-2"&#62;Success&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-check-inline"&#62;
&#60;input type="radio" class="form-check-input bg-danger border-0" name="bsradioo" id="radio113"&#62;
&#60;label for="radio113" class="form-check-label text-dark pl-2"&#62;Danger&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-check-inline"&#62;
&#60;input type="radio" class="form-check-input bg-warning border-0" name="bsradioo" id="radio114"&#62;
&#60;label for="radio114" class="form-check-label text-dark pl-2"&#62;Warning&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-check-inline"&#62;
&#60;input type="radio" class="form-check-input bg-gray border-0" name="bsradioo" id="radio115"&#62;
&#60;label for="radio115" class="form-check-label text-dark pl-2"&#62;Dark&#60;/label&#62;
&#60;/div&#62;
&#60;div class="form-check form-check-inline"&#62;
&#60;input type="radio" class="form-check-input bg-info border-0" name="bsradioo" id="radio116"&#62;
&#60;label for="radio116" class="form-check-label text-dark pl-2"&#62;Info&#60;/label&#62;
&#60;/div&#62;

</code></pre>
                            </kbd></div>
                    </div>
                    <div class="d-flex flex-wrap   gap-4">
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input bg-primary border-0" name="bsradioo"
                                id="radio111">
                            <label for="radio111" class="form-check-label text-dark pl-2">Primary</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input bg-success border-0" name="bsradioo"
                                id="radio112">
                            <label for="radio112" class="form-check-label text-dark pl-2">Success</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input bg-danger border-0" name="bsradioo"
                                id="radio113">
                            <label for="radio113" class="form-check-label text-dark pl-2">Danger</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input bg-warning border-0" name="bsradioo"
                                id="radio114">
                            <label for="radio114" class="form-check-label text-dark pl-2">Warning</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input bg-gray border-0" name="bsradioo"
                                id="radio115">
                            <label for="radio115" class="form-check-label text-dark pl-2">Dark</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input bg-info border-0" name="bsradioo"
                                id="radio116">
                            <label for="radio116" class="form-check-label text-dark pl-2">Info</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="p-4 border-0 d-flex justify-content-between">
                    <div class="card-title">
                        <h4>Custom Radio Buttons</h4>
                    </div>
                    <div class="header-action">
                        <i data-bs-toggle="collapse" href="#form-custom-radio-3" aria-expanded="false"
                            aria-controls="form-custom-radio-3">
                            <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse" id="form-custom-radio-3">
                        <div class="card"><kbd class="bg-dark">
                                <pre id="counter" class="text-white"><code>
                &#60;div class="form-check form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input " name="bsradioyy" id="radio122"&#62;
                &#60;label for="radio122" class="form-check-label text-dark "&#62;One&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input " name="bsradioyy" id="radio1222"&#62;
                &#60;label for="radio1222" class="form-check-label text-dark "&#62;Two&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input " name="bsradioyy" id="radio12222" checked=""&#62;
                &#60;label for="radio12222" class="form-check-label text-dark "&#62;Three&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input " name="" id="radio1" checked=""&#62;
                &#60;label for="radio1" class="form-check-label text-dark "&#62;Four Checked&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input " name="" id="radio1" disabled=""&#62;
                &#60;label for="radio1" class="form-check-label text-dark "&#62;Five disabled&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check select form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input " name="" id="radio1" disabled&#62;
                &#60;label for="radio1" class=""&#62;Six Selected and disabled&#60;/label&#62;
                &#60;/div&#62;
                </code></pre>
                            </kbd></div>
                    </div>
                    <div class="d-flex flex-wrap   gap-4">

                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input " name="bsradioyy" id="radio122">
                            <label for="radio122" class="form-check-label text-dark ">One</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input " name="bsradioyy" id="radio1222">
                            <label for="radio1222" class="form-check-label text-dark ">Two</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input " name="bsradioyy" id="radio12222"
                                checked="">
                            <label for="radio12222" class="form-check-label text-dark ">Three</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input " name="" id="radio1"
                                checked="">
                            <label for="radio1" class="form-check-label text-dark ">Four Checked</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input " name="" id="radio1"
                                disabled="">
                            <label for="radio1" class="form-check-label text-dark ">Five disabled</label>
                        </div>
                        <div class="form-check select form-check-inline">
                            <input type="radio" class="form-check-input " name="" id="radio1" disabled>
                            <label for="radio1" class="">Six Selected and disabled</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="p-4 border-0 d-flex justify-content-between">
                    <div class="card-title">
                        <h4>Colored Radio Buttons</h4>
                    </div>
                    <div class="header-action">
                        <i data-bs-toggle="collapse" href="#form-colored-radio-4" aria-expanded="false"
                            aria-controls="form-colored-radio-4">
                            <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse" id="form-colored-radio-4">
                        <div class="card"><kbd class="bg-dark">
                                <pre id="counter" class="text-white"><code>
                &#60;div class="form-check form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input text-primary" name="bsradio" id="radio12"&#62;
                &#60;label for="radio12" class="form-check-label text-dark "&#62;Primary&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input text-success" name="bsradio" id="radio13"&#62;
                &#60;label for="radio13" class="form-check-label text-dark "&#62;Success&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input text-danger" name="bsradio" id="radio14"&#62;
                &#60;label for="radio14" class="form-check-label text-dark "&#62;Danger&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input text-warning" name="bsradio" id="radio15"&#62;
                &#60;label for="radio15" class="form-check-label text-dark "&#62;Warning&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input text-gray" name="bsradio" id="radio16"&#62;
                &#60;label for="radio16" class="form-check-label text-dark "&#62;Dark&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-check-inline"&#62;
                &#60;input type="radio" class="form-check-input text-info" name="bsradio" id="radio17"&#62;
                &#60;label for="radio17" class="form-check-label text-dark "&#62;Info&#60;/label&#62;
                &#60;/div&#62;
                </code></pre>
                            </kbd></div>
                    </div>
                    <div class="d-flex flex-wrap   gap-4">

                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input text-primary" name="bsradio"
                                id="radio12">
                            <label for="radio12" class="form-check-label text-dark ">Primary</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input  text-success" name="bsradio"
                                id="radio13">
                            <label for="radio13" class="form-check-label text-dark ">Success</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input text-danger" name="bsradio"
                                id="radio14">
                            <label for="radio14" class="form-check-label text-dark ">Danger</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input text-warning" name="bsradio"
                                id="radio15">
                            <label for="radio15" class="form-check-label text-dark ">Warning</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input text-gray" name="bsradio" id="radio16">
                            <label for="radio16" class="form-check-label text-dark ">Dark</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input text-info" name="bsradio" id="radio17">
                            <label for="radio17" class="form-check-label text-dark ">Info</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
