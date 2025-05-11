<x-app-layout>
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('info'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="fw-bold">Listes des plaques</h4>
                </div>
                <div class="create-workform">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="modal-product-search d-flex flex-wrap">
                            <form class="me-3 position-relative">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" id="exampleInputText" placeholder="chercher une plaque">
                                    <a class="search-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </a>
                                </div>
                            </form>
                            <a href="/plaques/create" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Ajouter des plaques
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-block card-stretch">
                        <div class="card-body p-0">
                            <div class="table-responsive iq-invoice-table">
                                <table class="table data-table mb-0">
                                    <thead class="table-color-heading">
                                        <tr class="text-light">
                                            <th scope="col" class="pe-0 w-01">
                                                <div class="d-flex justify-content-start align-items-end mb-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                                        <label class="form-check-label" for="flexCheckDefault1"></label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <label class="text-muted m-0">Numero de plaque</label>
                                            </th>
                                            @if(Auth::user()->user_type == 'admin')
                                            <th scope="col" class="dates">
                                                <label class="text-muted mb-0">Date</label>
                                            </th>
                                            <th scope="col">
                                                <label class="text-muted mb-0">Ajouter par</label>
                                            </th>
                                            <th scope="col" class="text-start">
                                                <label class="text-muted mb-0">Date d'archivée'</label>
                                            </th>
                                            @endif

                                            <th scope="col" class="text-start">
                                                <span class="text-muted">Action</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($plaques as $plaque)
                                        <tr class="white-space-no-wrap">
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                    <label class="form-check-label" for="flexCheckDefault2"></label>
                                                </div>
                                            </td>
                                            <td>{{ $plaque->numero_plaque }}</td>
                                            @if(Auth::user()->user_type == 'admin')
                                            <td>{{ \Carbon\Carbon::parse($plaque->date_recherche)->format('d M Y') }}</td>
                                            <td>
                                                <div class="active-project-1 d-flex align-items-center mt-0">
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold">{{ $plaque->user->first_name }} {{ $plaque->user->last_name }} ( {{ $plaque->user->username }} ) </span>
                                                        </div>
                                                        <p class="m-0 text-secondary small">{{ $plaque->user->email }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $plaque->date_recherche != null ? \Carbon\Carbon::parse($plaque->date_recherche)->format('d M Y (H:i:s)') : "" }}</td>
                                            @endif
                                            
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <!-- Icône Afficher -->
                                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Afficher" href="/historiques/{{ $plaque->id}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary me-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <!-- Icône Relancer -->
                                                    <a href="{{ route('plaques.relance', $plaque->id) }}" class="relancer" data-id="{{ $plaque->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Relancer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success me-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v6h6M20 20v-6h-6M4.93 19.07A10 10 0 104.93 4.93" />
                                                        </svg>
                                                    </a>



                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
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
