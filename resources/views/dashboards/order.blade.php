<x-app-layout>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="fw-bold">All Orders</h4>
                    </div>
                    <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex flex-wrap">
                                <form class="me-3 position-relative">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" id="exampleInputText"
                                            placeholder="Search Order">
                                        <a class="search-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="20"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </a>
                                    </div>
                                </form>
                                <a href="{{ route('orderNew') }}"
                                    class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Add Order
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between align-items-center p-3 pb-0">
                                    <h5 class="fw-bold">Orders List</h5>
                                    <button class="btn btn-secondary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="20"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        Export
                                    </button>
                                </div>
                                <div class="table-responsive iq-order-table">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="text-light">
                                                <th scope="col" class="w-01 pe-0">
                                                    <div class="d-flex justify-content-start align-items-end mb-1">
                                                        <div class="form-check ">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault1">
                                                            <label class="form-check-label" for="flexCheckDefault1">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted m-0">ID</label>
                                                </th>
                                                <th scope="col" class="dates">
                                                    <label class="text-muted mb-0">Date</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0">Customer</label>
                                                </th>
                                                <th scope="col" class="text-start">
                                                    <label class="text-muted mb-0">Total</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0">Status</label>
                                                </th>
                                                <th scope="col" class="text-start">
                                                    <span class="text-muted">Action</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="white-space-no-wrap">
                                                <td class="pe-0">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault3">
                                                        <label class="form-check-label" for="flexCheckDefault3">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    OR-325548
                                                </td>
                                                <td>01 Jan 2021</td>
                                                <td>
                                                    Jack Ryan
                                                </td>
                                                <td class="text-start">
                                                    $104.98
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8"
                                                                    fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small>Completed
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View"
                                                            href="{{ route('orderDetails') }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="pe-0">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault4">
                                                        <label class="form-check-label" for="flexCheckDefault4">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    OR-223544
                                                </td>
                                                <td>02 Jan 2021</td>
                                                <td>
                                                    Matt Damon
                                                </td>
                                                <td class="text-start">
                                                    $99.00
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8"
                                                                    fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small>Completed
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View"
                                                            href="{{ route('orderDetails') }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="pe-0">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault5">
                                                        <label class="form-check-label" for="flexCheckDefault5">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    OR-125623
                                                </td>
                                                <td>02 Jan 2021</td>
                                                <td>
                                                    Caitriona Balfe
                                                </td>
                                                <td class="text-start">
                                                    $249.49
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-warning fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8"
                                                                    fill="#db7e06"></circle>
                                                            </svg>
                                                        </small>Pending
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View"
                                                            href="{{ route('orderDetails') }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="pe-0">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault6">
                                                        <label class="form-check-label" for="flexCheckDefault6">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    OR-662210
                                                </td>
                                                <td>02 Jan 2021</td>
                                                <td>
                                                    Josh Lucas
                                                </td>
                                                <td class="text-start">
                                                    $9.99
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8"
                                                                    fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small>Completed
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View"
                                                            href="{{ route('orderDetails') }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="pe-0">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault7">
                                                        <label class="form-check-label" for="flexCheckDefault7">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    OR-901020
                                                </td>
                                                <td>03 Jan 2021</td>
                                                <td>
                                                    Jon Bernthal
                                                </td>
                                                <td class="text-start">
                                                    $90.49
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-danger fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8"
                                                                    fill="#F42B3D"></circle>
                                                            </svg>
                                                        </small>Cancelled
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View"
                                                            href="{{ route('orderDetails') }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="pe-0">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault9">
                                                        <label class="form-check-label" for="flexCheckDefault9">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    OR-902210
                                                </td>
                                                <td>05 Jan 2021</td>
                                                <td>
                                                    Noah Jupe
                                                </td>
                                                <td class="text-start">
                                                    $39.99
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8"
                                                                    fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small>Completed
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View"
                                                            href="{{ route('orderDetails') }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="pe-0">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault10">
                                                        <label class="form-check-label" for="flexCheckDefault10">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    OR-902559
                                                </td>
                                                <td>06 Jan 2021</td>
                                                <td>
                                                    Tracy Letts
                                                </td>
                                                <td class="text-start">
                                                    $19.22
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-warning fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8"
                                                                    fill="#db7e06"></circle>
                                                            </svg>
                                                        </small>Pending
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View"
                                                            href="{{ route('orderDetails') }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="pe-0">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault11">
                                                        <label class="form-check-label" for="flexCheckDefault11">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    OR-253524
                                                </td>
                                                <td>09 Jan 2021</td>
                                                <td>
                                                    Ray McKinnon
                                                </td>
                                                <td class="text-start">
                                                    $102.9
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-danger fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8"
                                                                    fill="#F42B3D"></circle>
                                                            </svg>
                                                        </small>Cancelled
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View"
                                                            href="{{ route('orderDetails') }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="pe-0">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault12">
                                                        <label class="form-check-label" for="flexCheckDefault12">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    OR-902559
                                                </td>
                                                <td>10 Jan 2021</td>
                                                <td>
                                                    Remo Girone
                                                </td>
                                                <td class="text-start">
                                                    $13.99
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8"
                                                                    fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small>Completed
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View"
                                                            href="{{ route('orderDetails') }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="white-space-no-wrap">
                                                <td class="pe-0">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault13">
                                                        <label class="form-check-label" for="flexCheckDefault13">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    OR-302240
                                                </td>
                                                <td>12 Jan 2021</td>
                                                <td>
                                                    Jack McMullen
                                                </td>
                                                <td class="text-start">
                                                    $25.99
                                                </td>
                                                <td>
                                                    <p
                                                        class="mb-0 text-success fw-bold d-flex justify-content-start align-items-center">
                                                        <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                                width="18" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="8"
                                                                    fill="#3cb72c"></circle>
                                                            </svg>
                                                        </small>Completed
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View"
                                                            href="{{ route('orderDetails') }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary me-4" width="20"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <a class="" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="text-secondary" width="20" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
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
