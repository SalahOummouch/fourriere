<x-app-layout>
    <div class="container-fluid iq-textarea">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Default</h4>
                        </div>
                        <div class="header-action">
                            <i data-bs-toggle="collapse" href="#form-textarea-1" aria-expanded="false"
                                aria-controls="form-textarea-1">
                                <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="collapse" id="form-textarea-1">
                            <div class="card"><kbd class="bg-dark">
                                    <pre id="Default" class="text-white"><code>
&lt;div class="form-group"&gt;
   &lt;label for="exampleFormControlTextarea1"&gt;textarea&lt;/label&gt;
   &lt;textarea class="form-control" id="exampleFormControlTextarea1" rows="3"&gt;&lt;/textarea&gt;
&lt;/div&gt;
</code></pre>
                                </kbd></div>
                        </div>
                        <div class="form-group mb-0">
                            <label class="text-dark" for="exampleFormControlTextarea1">textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Horizontal Input</h4>
                        </div>
                        <div class="header-action">
                            <i data-bs-toggle="collapse" href="#form-textarea-2" aria-expanded="false"
                                aria-controls="form-textarea-2">
                                <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="collapse" id="form-textarea-2">
                            <div class="card"><kbd class="bg-dark">
                                    <pre id="horizontal-input" class="text-white"><code>
&lt;div class="form-group row align-items-center"&gt;
   &lt;div class="col-sm-3 col-4"&gt;
      &lt;label class="col-form-label"&gt;Description&lt;/label&gt;
   &lt;/div&gt;
   &lt;div class="col-sm-9 col-8"&gt;
      &lt;textarea class="form-control" id="horizontalTextarea" rows="3" placeholder="Textarea"&gt;&lt;/textarea&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                                </kbd></div>
                        </div>

                            <div class="col-sm-3 col-4">
                                <label class="col-form-label text-dark">Description</label>
                            </div>
                            <div class="col-sm-9 col-8">
                                <textarea class="form-control" id="horizontalTextarea" rows="3" placeholder="Textarea"></textarea>
                            </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Floating Label</h4>
                        </div>
                        <div class="header-action">
                            <i data-bs-toggle="collapse" href="#form-textarea-3" aria-expanded="false"
                                aria-controls="form-textarea-3">
                                <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="collapse" id="form-textarea-3">
                            <div class="card"><kbd class="bg-dark">
                                    <pre id="floating-label" class="text-white"><code>
&lt;div class="form-label-group"&gt;
   &lt;textarea class="form-control" id="exampleFormControlTextarea2" rows="4"
      placeholder="Label in Textarea"&gt;&lt;/textarea&gt;
   &lt;label&gt;Textarea&lt;/label&gt;
&lt;/div&gt;
</code></pre>
                                </kbd></div>
                        </div>
                        <div class="form-label-group mb-0">
                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="4" placeholder="Label in Textarea"></textarea>
                            <label class="text-dark">Textarea</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Counter</h4>
                        </div>
                        <div class="header-action">
                            <i data-bs-toggle="collapse" href="#form-textarea-4" aria-expanded="false"
                                aria-controls="form-textarea-4">
                                <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="collapse" id="form-textarea-4">
                            <div class="card"><kbd class="bg-dark">
                                    <pre id="counter" class="text-white"><code>
&lt;div class="form-label-group mb-0"&gt;
   &lt;textarea data-length="20" class="form-control" id="exampleFormControlTextarea3" rows="3"
      placeholder="Counter"&gt;&lt;/textarea&gt;
   &lt;label&gt;Counter&lt;/label&gt;
&lt;/div&gt;
</code></pre>
                                </kbd></div>
                        </div>
                        <div class="form-label-group mb-0">
                            <textarea data-length="20" class="form-control" id="exampleFormControlTextarea3" rows="3"
                                placeholder="Counter"></textarea>
                            <label class="text-dark">Counter</label>
                        </div>
                        <small class="counter-value-text float-right"><span class="char-count">0</span> / 20 </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
