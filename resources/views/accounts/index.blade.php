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
                        <h4 class="fw-bold">Liste des utilisateurs</h4>
                    </div>
                    <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex flex-wrap">
                                <form class="me-3 position-relative" method="GET" action="">
                                    <div class="form-group mb-0 d-flex">
                                        <input type="text" class="form-control me-2" name="search" placeholder="Chercher un utilisateur">
                                        <select class="form-select me-2" name="status">
                                            <option value="">Tous les statuts</option>
                                            <option value="pending">En attente</option>
                                            <option value="active">Actif</option>
                                            <option value="inactive">Désactivé</option>
                                        </select>
                                        <select class="form-select" name="user_type">
                                            <option value="">Tous les types</option>
                                            <option value="admin">Admin</option>
                                            <option value="editor">Éditeur</option>
                                            <option value="user">Utilisateur</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary ms-2">Rechercher</button>
                                    </div>
                                </form>
                                <a href="/users/create" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Ajouter un utilisateur
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
                                                    <label class="text-muted m-0">Nom d'utilisateur</label>
                                                </th>
                                                <th scope="col" class="dates">
                                                    <label class="text-muted mb-0">Email</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0">Téléphone</label>
                                                </th>
                                                <th scope="col" class="text-start">
                                                    <label class="text-muted mb-0">Type d'utilisateur</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0">Status</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0">Date de création</label>
                                                </th>
                                                <th scope="col" class="text-start">
                                                    <span class="text-muted">Action</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($users as $user)
                                                <tr class="white-space-no-wrap">
                                                    <td class="pe-0">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                            <label class="form-check-label" for="flexCheckDefault2"></label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->first_name }} {{ $user->first_name }} <br> ({{ $user->username }})</td>
                                                    <td>{{ $user->email }} </td>
                                                    <td>{{ $user->phone_number }} </td>
                                                    <td>{{ ucfirst($user->user_type) }}</td>
                                                    <td>
                                                        @if($user->status == 'pending')
                                                            <p class="mb-0 text-warning d-flex justify-content-start align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#db7e06"></circle>
                                                                </svg></small>En attente ...
                                                            </p>
                                                        @elseif($user->status == 'active')
                                                            <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                                </svg></small> Active
                                                            </p>
                                                        @else
                                                            <p class="mb-0 text-danger d-flex justify-content-start align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                                                </svg></small>Désactivé
                                                            </p>
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                                     <td>
                                                        <form action="" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="btn btn-sm {{ $user->status == 'active' ? 'btn-danger' : 'btn-success' }}">
                                                                {{ $user->status == 'active' ? 'Désactiver' : 'Activer' }}
                                                            </button>
                                                        </form>

                                                        <a href="{" class="btn btn-sm btn-primary">Modifier</a>

                                                        <form action="" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')">Supprimer</button>
                                                        </form>
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
