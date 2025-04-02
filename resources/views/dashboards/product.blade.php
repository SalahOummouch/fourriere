<x-app-layout>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="fw-bold">Product</h4>
                    </div>
                    <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex flex-wrap">
                                <form class="me-3 position-relative">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" id="exampleInputText"
                                            placeholder="Search Product">
                                        <a class="search-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </a>
                                    </div>
                                </form>
                                <a href="{{route('orderAdd')}}"
                                    class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Add Product
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between align-items-center p-3 pb-md-0">
                                    <h5 class="fw-bold">Products List</h5>
                                    <button class="btn btn-secondary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="20" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        Export
                                    </button>
                                </div>
                                <div class="table-responsive iq-product-table">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="text-light">
                                                <th scope="col" class="iq-arrow">
                                                    <label class="text-muted m-0">Product Name</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0">Category</label>
                                                </th>
                                                <th scope="col" class="">
                                                    <label class="text-muted mb-0">Price</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0">Quantity</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0">Inventory</label>
                                                </th>
                                                <th scope="col" class="text-start">
                                                    <span class="text-muted">Action</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded" alt="user-icon"
                                                                src="{{asset('images/products/1.jpg')}}">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="fw-bold">Bassheads 220 Wired Headset</span>
                                                            </div>
                                                            <p class="m-0 mt-1">
                                                                Molten Orange, In the Ear
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Headset </td>
                                                <td class="">
                                                    $74.98
                                                </td>
                                                <td>
                                                    45
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small>In Stock
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded" alt="user-icon"
                                                                src="{{asset('images/products/15.jpg')}}">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="fw-bold">SDDDC2-256G-I35 256 GB OTG </span>
                                                            </div>
                                                            <p class="m-0 mt-1">
                                                                Black, Type A to Type C
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>OTG Pendrive</td>
                                                <td class="">
                                                    $109.00
                                                </td>
                                                <td>
                                                    25
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small>In Stock
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded" alt="user-icon"
                                                                src="{{asset('images/products/2.jpg')}}">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="fw-bold">360 Deg 1080p Security Camera</span>
                                                            </div>
                                                            <p class="m-0 mt-1">
                                                                Wifi Smart
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Camera</td>
                                                <td class="">
                                                    $749.49
                                                </td>
                                                <td>
                                                    02
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-warning fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8" fill="#db7e06"></circle>
                                                            </svg>
                                                        </small>Limited
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded" alt="user-icon"
                                                                src="{{asset('images/products/4.jpg')}}">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="fw-bold">Ryzen 5 Quad Core 3500U Thin
                                                                    Laptop</span>
                                                            </div>
                                                            <p class="m-0 mt-1">
                                                                8 GB/512 GB SSD/Windows 10 Home
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Laptop</td>
                                                <td class="">
                                                    $2,499.99
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                    width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                                </svg>
                                                            </small></small>In Stock
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded" alt="user-icon"
                                                                src="{{asset('images/products/8.jpg')}}">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="fw-bold">M10 FHD Plus with Active Pen
                                                                    Tablet</span>
                                                            </div>
                                                            <p class="m-0 mt-1">
                                                                (2nd Gen) 10.3 inches
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Tablet</td>
                                                <td class="">
                                                    $962.49
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-danger fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                                            </svg>
                                                        </small>Out Of Stock
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded" alt="user-icon"
                                                                src="{{asset('images/products/5.jpg')}}">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="fw-bold">Stone Portable Bluetooth
                                                                    Speaker</span>
                                                            </div>
                                                            <p class="m-0 mt-1">
                                                                Black, Stereo Channel
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Speaker</td>
                                                <td class="">
                                                    $599.99
                                                </td>
                                                <td>
                                                    80
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small>In Stock
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded" alt="user-icon"
                                                                src="{{asset('images/products/7.jpg')}}">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="fw-bold">EO Wooden Card Pen Drive </span>
                                                            </div>
                                                            <p class="m-0 mt-1">
                                                                16 GB, White
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Pendrive</td>
                                                <td class="">
                                                    $89.22
                                                </td>
                                                <td>
                                                    05
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-warning fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8" fill="#db7e06"></circle>
                                                            </svg>
                                                        </small>Limited
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded" alt="user-icon"
                                                                src="{{asset('images/products/16.jpg')}}">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="fw-bold">Airpods With Wireless Charging
                                                                    Case</span>
                                                            </div>
                                                            <p class="m-0 mt-1">
                                                                Noise Cancellation, True Wireless
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Headset</td>
                                                <td class="">
                                                    $229.9
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-danger fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                                            </svg>
                                                        </small>Out Of Stock
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded" alt="user-icon"
                                                                src="{{asset('images/products/6.jpg')}}">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="fw-bold">HP v150W PENDRIVE</span>
                                                            </div>
                                                            <p class="m-0 mt-1">
                                                                64 GB (Blue, Black)
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Pendrive</td>
                                                <td class="">
                                                    $39.99
                                                </td>
                                                <td>
                                                    30
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small>In Stock
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded" alt="user-icon"
                                                                src="{{asset('images/products/12.jpg')}}">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                                <span class="fw-bold">FivePlus Nord 5G</span>
                                                            </div>
                                                            <p class="m-0 mt-1">
                                                                (12GB RAM, 256GB Storage)
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Mobile</td>
                                                <td class="">
                                                    $2,399.99
                                                </td>
                                                <td>
                                                    80
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small>In Stock
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                        <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
