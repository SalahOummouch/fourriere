<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="p-4 border-0 d-flex justify-content-between border-bottom pb-3">
                    <div class="card-title">
                        <h4>Basic Switch</h4>
                    </div>
                    <div class="header-action">
                        <i data-bs-toggle="collapse" href="#form-basci-switch-1" aria-expanded="false"
                            aria-controls="form-basci-switch-1">
                            <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse" id="form-basci-switch-1">
                        <div class="card"><kbd class="bg-dark">
                                <pre id="counter" class="text-white"><code>
                &#60;div class="form-check form-switch"&#62;
                &#60;input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                checked&#62;
                &#60;label class="form-check-label" for="flexSwitchCheckChecked"&#62;Active Switch&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-switch"&#62;
                &#60;input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"&#62;
                &#60;label class="form-check-label" for="flexSwitchCheckDefault"&#62;Inactive Switch&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-switch"&#62;
                &#60;input class="form-check-input bg-info" type="checkbox" role="switch"
                id="flexSwitchCheckCheckedDisabled" checked disabled&#62;
                &#60;label class="form-check-label" for="flexSwitchCheckCheckedDisabled"&#62;Disable Active
                Switch&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-switch"&#62;
                &#60;input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled"
                disabled&#62;
                &#60;label class="form-check-label" for="flexSwitchCheckDisabled"&#62;Disable Inactive Switch&#60;/label&#62;
                &#60;/div&#62;
                </code></pre>
                            </kbd></div>
                    </div>
                    <div class="d-flex flex-wrap gap-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                checked>
                            <label class="form-check-label text-dark" for="flexSwitchCheckChecked">Active Switch</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-dark" for="flexSwitchCheckDefault">Inactive Switch</label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input bg-info" type="checkbox" role="switch"
                                id="flexSwitchCheckCheckedDisabled" checked disabled>
                            <label class="form-check-label text-dark" for="flexSwitchCheckCheckedDisabled">Disable Active
                                Switch</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled"
                                disabled>
                            <label class="form-check-label text-dark" for="flexSwitchCheckDisabled">Disable Inactive Switch</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="p-4 border-0 d-flex justify-content-between border-bottom pb-3">
                    <div class="card-title">
                        <h4>Text</h4>
                    </div>
                    <div class="header-action">
                        <i data-bs-toggle="collapse" href="#form-text-switch-2" aria-expanded="false"
                            aria-controls="form-text-switch-2">
                            <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse" id="form-text-switch-2">
                        <div class="card"><kbd class="bg-dark">
                                <pre id="counter" class="text-white"><code>
                &#60;div class="d-flex flex-column align-items-center gap-1"&#62;
                &#60;p class="m-0"&#62;Primary&#60;/p&#62;
                &#60;div&#62;
                &#60;input type="checkbox" id="switch" class="checkboxs " checked /&#62;
                &#60;label for="switch" class="toggles text-white bg-primary border-primary"&#62;
                &#60;p class="texts ps-1"&#62;
                On &#38;nbsp;&#38;nbsp;Off
                &#60;/p&#62;
                &#60;/label&#62;
                &#60;/div&#62;
                &#60;/div&#62;
                &#60;div class="d-flex flex-column align-items-center gap-1"&#62;
                &#60;p class="m-0"&#62;Secondary&#60;/p&#62;
                &#60;div&#62;
                &#60;input type="checkbox" id="tr_fal_switch" class="checkboxs " checked /&#62;
                &#60;label for="tr_fal_switch" class="toggles text-white bg-success border-success"&#62;
                &#60;p class="texts ps-1"&#62;
                Tr &#38;nbsp;&#38;nbsp;&#38;nbsp;&#38;nbsp;fal
                &#60;/p&#62;
                &#60;/label&#62;
                &#60;/div&#62;
                &#60;/div&#62;
                &#60;div class="d-flex flex-column align-items-center gap-1"&#62;
                &#60;p class="m-0"&#62;Danger&#60;/p&#62;
                &#60;div&#62;
                &#60;input type="checkbox" id="y_n_switch" class="checkboxs" checked /&#62;
                &#60;label for="y_n_switch" class="toggles text-white bg-danger border-danger"&#62;
                &#60;p class="texts ps-1"&#62;
                Yes&#38;nbsp;&#38;nbsp;No
                &#60;/p&#62;
                &#60;/label&#62;
                &#60;/div&#62;
                &#60;/div&#62;
                </code></pre>
                            </kbd></div>
                    </div>
                    <div class="d-flex flex-wrap gap-4">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <p class="m-0 text-dark">Primary</p>
                            <div>
                                <input type="checkbox" id="switch" class="checkboxs " checked />
                                <label for="switch" class="toggles text-white bg-primary border-primary">
                                    <p class="texts ps-1">
                                        On &nbsp;&nbsp;Off
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center gap-1">
                            <p class="m-0 text-dark">Secondary</p>
                            <div>
                                <input type="checkbox" id="tr_fal_switch" class="checkboxs " checked />
                                <label for="tr_fal_switch" class="toggles text-white bg-success border-success">
                                    <p class="texts ps-1">
                                        Tr &nbsp;&nbsp;&nbsp;&nbsp;fal
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center gap-1">
                            <p class="m-0 text-dark">Danger</p>
                            <div>
                                <input type="checkbox" id="y_n_switch" class="checkboxs" checked />
                                <label for="y_n_switch" class="toggles text-white bg-danger border-danger">
                                    <p class="texts ps-1">
                                        Yes&nbsp;&nbsp;No
                                    </p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-4 border-0 d-flex justify-content-between border-bottom pb-3">
                <div class="card-title">
                    <h4>Color</h4>
                </div>
                <div class="header-action">
                    <i data-bs-toggle="collapse" href="#form-color-switch-3" aria-expanded="false"
                        aria-controls="form-color-switch-3">
                        <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </i>
                </div>
            </div>
            <div class="card-body">
                <div class="collapse" id="form-color-switch-3">
                    <div class="card"><kbd class="bg-dark">
                            <pre id="counter" class="text-white"><code>
                &#60;div class="form-check form-switch"&#62;
                &#60;input class="form-check-input bg-primary border-0 text-primary" type="checkbox" role="switch"
                id="flexSwitchCheckChecked" checked&#62;
                &#60;label class="form-check-label" for="flexSwitchCheckChecked"&#62;Primary&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-switch"&#62;
                &#60;input class="form-check-input bg-success border-0 text-success" type="checkbox" role="switch"
                id="flexSwitchCheckChecked" checked&#62;
                &#60;label class="form-check-label" for="flexSwitchCheckChecked"&#62;Success&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-switch"&#62;
                &#60;input class="form-check-input bg-danger border-0 text-danger" type="checkbox" role="switch"
                id="flexSwitchCheckChecked" checked&#62;
                &#60;label class="form-check-label" for="flexSwitchCheckChecked"&#62;Danger&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-switch"&#62;
                &#60;input class="form-check-input bg-warning border-0 text-warning" type="checkbox" role="switch"
                id="flexSwitchCheckChecked" checked&#62;
                &#60;label class="form-check-label" for="flexSwitchCheckChecked"&#62;Warning&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-switch"&#62;
                &#60;input class="form-check-input bg-gray border-0 text-gray" type="checkbox" role="switch"
                id="flexSwitchCheckChecked" checked&#62;
                &#60;label class="form-check-label" for="flexSwitchCheckChecked"&#62;Dark&#60;/label&#62;
                &#60;/div&#62;
                &#60;div class="form-check form-switch"&#62;
                &#60;input class="form-check-input text-info" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                checked&#62;
                &#60;label class="form-check-label" for="flexSwitchCheckChecked"&#62;Info&#60;/label&#62;
                &#60;/div&#62;
            </code></pre>
                        </kbd></div>
                </div>
                <div class="d-flex flex-wrap gap-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input bg-primary border-0 text-primary" type="checkbox" role="switch"
                            id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label text-dark" for="flexSwitchCheckChecked">Primary</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input bg-success border-0 text-success" type="checkbox" role="switch"
                            id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label text-dark" for="flexSwitchCheckChecked">Success</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input bg-danger border-0 text-danger" type="checkbox" role="switch"
                            id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label text-dark" for="flexSwitchCheckChecked">Danger</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input bg-warning border-0 text-warning" type="checkbox" role="switch"
                            id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label text-dark" for="flexSwitchCheckChecked">Warning</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input bg-gray border-0 text-gray" type="checkbox" role="switch"
                            id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label text-dark" for="flexSwitchCheckChecked">Dark</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input text-info" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                            checked>
                        <label class="form-check-label text-dark" for="flexSwitchCheckChecked">Info</label>
                    </div>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-4 border-0 d-flex justify-content-between border-bottom pb-3">
                <div class="card-title">
                    <h4>Icon</h4>
                </div>
                <div class="header-action">
                    <i data-bs-toggle="collapse" href="#form-icon-switch-4" aria-expanded="false"
                        aria-controls="form-icon-switch-4">
                        <svg width=" 20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </i>
                </div>
            </div>
            <div class="card-body">
                <div class="collapse" id="form-icon-switch-4">
                    <div class="card"><kbd class="bg-dark">
                            <pre id="counter" class="text-white"><code>
            &#60;div class="d-flex flex-column align-items-center gap-1"&#62;
            &#60;p class="m-0"&#62;Primary&#60;/p&#62;
            &#60;div&#62;
            &#60;input type="checkbox" id="switchs" class="checkboxs " checked /&#62;
            &#60;label for="switchs" class="toggles text-white bg-primary border-primary"&#62;
            &#60;p class="texts ps-1"&#62;
            &#60;i class="fa fa-check custom-switch-size"&#62;&#60;/i&#62; &#38;nbsp;&#38;nbsp;&#38;nbsp;&#38;nbsp;&#60;i
            class="fa fa-check custom-switch-size"&#62;&#60;/i&#62;
            &#60;/p&#62;
            &#60;/label&#62;
            &#60;/div&#62;
            &#60;/div&#62;
            &#60;div class="d-flex flex-column align-items-center gap-1"&#62;
            &#60;p class="m-0"&#62;Success&#60;/p&#62;
            &#60;div&#62;
            &#60;input type="checkbox" id="succ-switch" class="checkboxs " checked /&#62;
            &#60;label for="succ-switch" class="toggles text-white bg-success border-success"&#62;
            &#60;p class="texts ps-1"&#62;
            &#60;i class="fa fa-check custom-switch-size"&#62;&#60;/i&#62; &#38;nbsp;&#38;nbsp;&#38;nbsp;&#38;nbsp;&#60;i
            class="fa fa-check custom-switch-size"&#62;&#60;/i&#62;
            &#60;/p&#62;
            &#60;/label&#62;
            &#60;/div&#62;
            &#60;/div&#62;
            &#60;div class="d-flex flex-column align-items-center gap-1"&#62;
            &#60;p class="m-0"&#62;Danger&#60;/p&#62;
            &#60;div&#62;
            &#60;input type="checkbox" id="dan-switch" class="checkboxs " checked /&#62;
            &#60;label for="dan-switch" class="toggles text-white bg-danger border-danger"&#62;
            &#60;p class="texts ps-1"&#62;
            &#60;i class="fa fa-times custom-switch-size"&#62;&#60;/i&#62; &#38;nbsp;&#38;nbsp;&#38;nbsp;&#38;nbsp;&#38;nbsp;&#60;i
            class="fa fa-times custom-switch-size"&#62;&#60;/i&#62;
            &#60;/p&#62;
            &#60;/label&#62;
            &#60;/div&#62;
            &#60;/div&#62;
            &#60;div class="d-flex flex-column align-items-center gap-1"&#62;
            &#60;p class="m-0"&#62;Warning&#60;/p&#62;
            &#60;div&#62;
            &#60;input type="checkbox" id="war-switch" class="checkboxs " checked /&#62;
            &#60;label for="war-switch" class="toggles text-white bg-warning border-warning"&#62;
            &#60;p class="texts ps-1"&#62;
            &#60;i class="fa fa-exclamation-triangle custom-switch-size"&#62;&#60;/i&#62;
            &#38;nbsp;&#38;nbsp;&#38;nbsp;&#38;nbsp;&#60;i
            class="fa fa-exclamation-triangle custom-switch-size"&#62;&#60;/i&#62;
            &#60;/p&#62;
            &#60;/label&#62;
            &#60;/div&#62;
            &#60;/div&#62;
            &#60;div class="d-flex flex-column align-items-center gap-1"&#62;
            &#60;p class="m-0"&#62;Dark&#60;/p&#62;
            &#60;div&#62;
            &#60;input type="checkbox" id="dark-switch" class="checkboxs " checked /&#62;
            &#60;label for="dark-switch" class="toggles text-white bg-dark border-dark"&#62;
            &#60;p class="texts ps-2"&#62;
            &#60;i class="fa fa-thumb-tack custom-switch-size"&#62;&#60;/i&#62;
            &#38;nbsp;&#38;nbsp;&#38;nbsp;&#38;nbsp;&#38;nbsp;&#60;i
            class="fa fa-thumb-tack custom-switch-size"&#62;&#60;/i&#62;
            &#60;/p&#62;
            &#60;/label&#62;
            &#60;/div&#62;
            &#60;/div&#62;
            &#60;div class="d-flex flex-column align-items-center gap-1"&#62;
            &#60;p class="m-0"&#62;info&#60;/p&#62;
            &#60;div&#62;
            &#60;input type="checkbox" id="info-switch" class="checkboxs " checked /&#62;
            &#60;label for="info-switch" class="toggles text-white bg-info border-info"&#62;
            &#60;p class="texts ps-2"&#62;
            &#60;i class="fa fa-info custom-switch-size"&#62;&#60;/i&#62; &#38;nbsp;&#38;nbsp;&#38;nbsp;&#38;nbsp;&#38;nbsp;&#60;i
            class="fa fa-info custom-switch-size"&#62;&#60;/i&#62;
            &#60;/p&#62;
            &#60;/label&#62;
            &#60;/div&#62;
            &#60;/div&#62;
            </code></pre>
                        </kbd></div>
                </div>
                <div class="d-flex flex-wrap gap-4">
                    <div class="d-flex flex-column align-items-center gap-1">
                        <p class="m-0 text-dark">Primary</p>
                        <div>
                            <input type="checkbox" id="switchs" class="checkboxs " checked />
                            <label for="switchs" class="toggles text-white bg-primary border-primary">
                                <p class="texts ps-1">
                                    <i class="fa fa-check custom-switch-size"></i> &nbsp;&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-check custom-switch-size"></i>
                                </p>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center gap-1">
                        <p class="m-0 text-dark">Success</p>
                        <div>
                            <input type="checkbox" id="succ-switch" class="checkboxs " checked />
                            <label for="succ-switch" class="toggles text-white bg-success border-success">
                                <p class="texts ps-1">
                                    <i class="fa fa-check custom-switch-size"></i> &nbsp;&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-check custom-switch-size"></i>
                                </p>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center gap-1">
                        <p class="m-0 text-dark">Danger</p>
                        <div>
                            <input type="checkbox" id="dan-switch" class="checkboxs " checked />
                            <label for="dan-switch" class="toggles text-white bg-danger border-danger">
                                <p class="texts ps-1">
                                    <i class="fa fa-times custom-switch-size"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-times custom-switch-size"></i>
                                </p>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center gap-1">
                        <p class="m-0 text-dark">Warning</p>
                        <div>
                            <input type="checkbox" id="war-switch" class="checkboxs " checked />
                            <label for="war-switch" class="toggles text-white bg-warning border-warning">
                                <p class="texts ps-1">
                                    <i class="fa fa-exclamation-triangle custom-switch-size"></i> &nbsp;&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-exclamation-triangle custom-switch-size"></i>
                                </p>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center gap-1">
                        <p class="m-0 text-dark">Dark</p>
                        <div>
                            <input type="checkbox" id="dark-switch" class="checkboxs " checked />
                            <label for="dark-switch" class="toggles text-white bg-dark border-dark">
                                <p class="texts ps-2">
                                    <i class="fa fa-thumb-tack custom-switch-size"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-thumb-tack custom-switch-size"></i>
                                </p>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center gap-1">
                        <p class="m-0 text-dark">info</p>
                        <div>
                            <input type="checkbox" id="info-switch" class="checkboxs " checked />
                            <label for="info-switch" class="toggles text-white bg-info border-info">
                                <p class="texts ps-2">
                                    <i class="fa fa-info custom-switch-size"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-info custom-switch-size"></i>
                                </p>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
