<x-app-layout >
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="fw-bold">Customer</h4>
                </div>
                <div class="create-workform">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="modal-product-search d-flex flex-wrap">
                            <form class="me-3 position-relative">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" id="exampleInputText"
                                        placeholder="Search Customer">
                                    <a class="search-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </a>
                                </div>
                            </form>
                            <a href="{{route('customerAdd')}}"
                                class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Add Customer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card car card-stretch">
                        <div class="card-body p-0">
                            <div class="d-flex justify-content-between align-items-center p-3 pb-md-0">
                                <h5 class="fw-bold">Customer List</h5>
                                <button class="btn btn-secondary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="20" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                    Export
                                </button>
                            </div>
                            <div class="table-responsive iq-customer-table">
                                <table class="table data-table mb-0">
                                    <thead class="table-color-heading">
                                        <tr class="">
                                            <th scope="col" class="pe-0 w-01">
                                                <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault2">
                                                        <label class="form-check-label" for="flexCheckDefault2">
                                                        </label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                Name
                                            </th>
                                            <th scope="col">
                                                Email
                                            </th>
                                            <th scope="col">
                                                Location
                                            </th>
                                            <th scope="col">
                                                Phone
                                            </th>
                                            <th scope="col" class="text-right">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="white-space-no-wrap">
                                            <td class="pe-0 ">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault3">
                                                    <label class="form-check-label" for="flexCheckDefault3">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                    <div class="h-avatar is-medium">
                                                        <img class="avatar rounded-circle" alt="user-icon"
                                                            src="{{asset('images/user/1.jpg')}}">
                                                    </div>
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold">Christian Bale</span>
                                                        </div>
                                                        <p class="m-0 text-secondary small">
                                                            Vari tech
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>christian.Bale@blueberrye.com</td>
                                            <td>
                                                Ohio, USA
                                            </td>
                                            <td>
                                                +1 (021) 145-2256
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View" href="{{route('customerView')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                            width="20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit" href="{{route('customerEdit')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="text-secondary mx-4" width="20" fill="none"
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
                                            <td class="pe-0 ">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault4">
                                                    <label class="form-check-label" for="flexCheckDefault2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                    <div class="h-avatar is-medium">
                                                        <img class="avatar rounded-circle" alt="user-icon"
                                                            src="{{asset('images/user/2.jpg')}}">
                                                    </div>
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold">Matt Damon</span>
                                                        </div>
                                                        <p class="m-0 text-secondary small">
                                                            Galaxy Man
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>mattdamon@blueberry.com</td>
                                            <td>
                                                Briston
                                            </td>
                                            <td>
                                                +25 (100) 1254-662
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View" href="{{route('customerView')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                            width="20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit" href="{{route('customerEdit')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="text-secondary mx-4" width="20" fill="none"
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
                                            <td class="pe-0 ">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault5">
                                                    <label class="form-check-label" for="flexCheckDefault5">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                    <div class="h-avatar is-medium">
                                                        <img class="avatar rounded-circle" alt="user-icon"
                                                            src="{{asset('images/user/3.jpg')}}">
                                                    </div>
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold">Caitriona Balfe</span>
                                                        </div>
                                                        <p class="m-0 text-secondary small">
                                                            Manager
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>caitrionabalfe204@blueberry.com</td>
                                            <td>
                                                Nevada, USA
                                            </td>
                                            <td>
                                                +251 966 522 456
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View" href="{{route('customerView')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                            width="20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit" href="{{route('customerEdit')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="text-secondary mx-4" width="20" fill="none"
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
                                            <td class="pe-0 ">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault7">
                                                    <label class="form-check-label" for="flexCheckDefault7">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                    <div class="h-avatar is-medium">
                                                        <img class="avatar rounded-circle" alt="user-icon"
                                                            src="{{asset('images/user/4.jpg')}}">
                                                    </div>
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold">Josh Lucas</span>
                                                        </div>
                                                        <p class="m-0 text-secondary small">
                                                            Father and Son
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>joshlucas007@blueberry.com</td>
                                            <td>
                                                Georgia
                                            </td>
                                            <td>
                                                +5 20154-65755
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View" href="{{route('customerView')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                            width="20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit" href="{{route('customerEdit')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="text-secondary mx-4" width="20" fill="none"
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
                                            <td class="pe-0 ">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault9">
                                                    <label class="form-check-label" for="flexCheckDefault9">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                    <div class="h-avatar is-medium">
                                                        <img class="avatar rounded-circle" alt="user-icon"
                                                            src="{{asset('images/user/5.jpg')}}">
                                                    </div>
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold">Jon Bernthal</span>
                                                        </div>
                                                        <p class="m-0 text-secondary small">
                                                            Morris Cafe
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>jon.Bernthal@blueberry.com</td>
                                            <td>
                                                West Virginia, USA
                                            </td>
                                            <td>
                                                +200 51145 65523
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View" href="{{route('customerView')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                            width="20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit" href="{{route('customerEdit')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="text-secondary mx-4" width="20" fill="none"
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
                                            <td class="pe-0 ">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault10">
                                                    <label class="form-check-label" for="flexCheckDefault10">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                    <div class="h-avatar is-medium">
                                                        <img class="avatar rounded-circle" alt="user-icon"
                                                            src="{{asset('images/user/6.jpg')}}">
                                                    </div>
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold">Noah Jupe</span>
                                                        </div>
                                                        <p class="m-0 text-secondary small">
                                                            Grossman's
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>nnoahjupe@blueberry.com</td>
                                            <td>
                                                Ohio, USA
                                            </td>
                                            <td>
                                                +251 5225-98554
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View" href="{{route('customerView')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                            width="20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit" href="{{route('customerEdit')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="text-secondary mx-4" width="20" fill="none"
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
                                            <td class="pe-0 ">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault11">
                                                    <label class="form-check-label" for="flexCheckDefault11">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                    <div class="h-avatar is-medium">
                                                        <img class="avatar rounded-circle" alt="user-icon"
                                                            src="{{asset('images/user/3.jpg')}}">
                                                    </div>
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold">Tracy Letts</span>
                                                        </div>
                                                        <p class="m-0 text-secondary small">
                                                            Jeans Unlimited
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>tracyetts@blueberry.com</td>
                                            <td>
                                                Texas, USA
                                            </td>
                                            <td>
                                                +22 562 4587 55
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View" href="{{route('customerView')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                            width="20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit" href="{{route('customerEdit')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="text-secondary mx-4" width="20" fill="none"
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
                                            <td class="pe-0 ">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault12">
                                                    <label class="form-check-label" for="flexCheckDefault12">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                    <div class="h-avatar is-medium">
                                                        <img class="avatar rounded-circle" alt="user-icon"
                                                            src="{{asset('images/user/2.jpg')}}">
                                                    </div>
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold">Ray McKinnon</span>
                                                        </div>
                                                        <p class="m-0 text-secondary small">
                                                            Gene Man
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>raymcKinnon@blueberry.com</td>
                                            <td>
                                                Nevada, USA
                                            </td>
                                            <td>
                                                +66 4515585632
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View" href="{{route('customerView')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                            width="20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit" href="{{route('customerEdit')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="text-secondary mx-4" width="20" fill="none"
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
                                            <td class="pe-0 ">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault13">
                                                    <label class="form-check-label" for="flexCheckDefault13">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                    <div class="h-avatar is-medium">
                                                        <img class="avatar rounded-circle" alt="user-icon"
                                                            src="{{asset('images/user/6.jpg')}}">
                                                    </div>
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold">Remo Girone</span>
                                                        </div>
                                                        <p class="m-0 text-secondary small">
                                                            Apple Walter
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>remo.girone420@blueberry.com</td>
                                            <td>
                                                Bristow
                                            </td>
                                            <td>
                                                +6 14552-15771
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View" href="{{route('customerView')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                            width="20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit" href="{{route('customerEdit')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="text-secondary mx-4" width="20" fill="none"
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
                                            <td class="pe-0 ">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefaul142">
                                                    <label class="form-check-label" for="flexCheckDefault14">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                    <div class="h-avatar is-medium">
                                                        <img class="avatar rounded-circle" alt="user-icon"
                                                            src="{{asset('images/user/3.jpg')}}">
                                                    </div>
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold">Jack McMullen</span>
                                                        </div>
                                                        <p class="m-0 text-secondary small">
                                                            Noor Cafeteria
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>jackmullen@blueberry.com</td>
                                            <td>
                                                California, USA
                                            </td>
                                            <td>
                                                +25 4415-21445
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="View" href="{{route('customerView')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                            width="20" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Edit" href="{{route('customerEdit')}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="text-secondary mx-4" width="20" fill="none"
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
