<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Default</h4>
                        </div>
                    </div>
                    <div class="card-body">

                        <form>
                            <div class="form-group">
                                <label for="customFile1" class="form-label custom-file-input text-dark">Choose File</label>
                                <input class="form-control" type="file" id="customFile1">
                            </div>
                            <p class="text-dark">Default File:</p>
                            <input type="file" id="myFile" name="filename2">
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title"> File Input</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="file-upload-form" class="uploader-file ">
                            <input id="file-upload" type="file" name="fileUpload" accept="image/*" />
                            <label id="file-drag" class="mb-0 bg-body">
                                <img id="file-image" src="#" alt="Preview" class="hidden">
                                <span id="start-one">
                                    <svg width="80" height="80" viewBox="0 0 24 24" fill="black"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M12 13V2" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                    <path d="M8 10L12 14L16 10" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M17 14L21 14C22.1046 14 23 14.8954 23 16V20C23 21.1046 22.1046 22 21 22L3 22C1.89543 22 1 21.1046 1 20V16C1 14.8954 1.89543 14 3 14H7"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" />
                                                    </g>
                                                    <g>
                                                        <ellipse cx="16" cy="18.0115" rx="1"
                                                            ry="1.01149" fill="white" />
                                                        <ellipse cx="20" cy="18.0115" rx="1"
                                                            ry="1.01149" fill="white" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="d-block mt-2">Select a file or drag here</span>
                                    <span id="notimage" class="hidden d-block mb-2">Please select image</span>
                                    <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                                </span>
                                <span id="response" class="hidden">
                                    <span id="messages"></span>
                                    <progress class="progress" id="file-progress" value="0">
                                        <span>0</span>%
                                    </progress>
                                </span>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
