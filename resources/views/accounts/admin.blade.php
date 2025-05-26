<x-app-layout>

    @php
        function format_phone_number($number) {
            if (!$number) return '';
            $number = preg_replace('/\D/', '', $number);
            if (strlen($number) === 10) {
                return preg_replace('/(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/', '$1 $2 $3 $4 $5', $number);
            }
            return $number;
        }
    @endphp

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
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body p-0">
                                
                                {{-- Bouton pour ajouter un administrateur --}}
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <h5 class="mb-0">Liste des administrateurs</h5>
                                    <a href="{{ route('accounts.create') }}" class="btn btn-primary">
                                        <i class="bi bi-plus-circle me-1"></i> Ajouter un administrateur
                                    </a>
                                </div>


                                <div class="table-responsive iq-invoice-table">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="text-light">
                                                <th scope="col" class="pe-0 w-01">
                                                    <div class="d-flex justify-content-start align-items-end mb-1">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Nom d'utilisateur</th>
                                                <th>Entreprise</th>
                                                <th>Email</th>
                                                <th>Téléphone</th>
                                                <th>Type d'utilisateur</th>
                                                <th>Status</th>
                                                <th>Date de création</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($users as $user)
                                                <tr class="white-space-no-wrap">
                                                    <td class="pe-0">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->first_name }} {{ $user->last_name }} <br> ({{ $user->username }})</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ format_phone_number($user->phone_number) }}</td>
                                                    <td>{{ ucfirst($user->user_type) }}</td>
                                                    <td>
                                                        @if($user->status == 'pending')
                                                            <p class="mb-0 text-warning d-flex align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#db7e06"></circle>
                                                                </svg></small>En attente ...
                                                            </p>
                                                        @elseif($user->status == 'active')
                                                            <p class="mb-0 text-success d-flex align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                                </svg></small> Active
                                                            </p>
                                                        @else
                                                            <p class="mb-0 text-danger d-flex align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                                                </svg></small>Désactivé
                                                            </p>
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                                    <td>
                                                        <form action="{{ route('accounts.toggleStatus', $user->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="btn btn-sm {{ $user->status == 'active' ? 'btn-danger' : 'btn-success' }}">
                                                                {{ $user->status == 'active' ? 'Désactiver' : 'Activer' }}
                                                            </button>
                                                        </form>

                                                        <a href="{{ route('companies.edit', $user->company_id) }}" class="btn btn-sm btn-primary">Modifier</a>

                                                        <form action="{{ route('accounts.destroy', $user->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')">Supprimer</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> {{-- /.table-responsive --}}
                            </div> {{-- /.card-body --}}
                        </div> {{-- /.card --}}
                    </div> {{-- /.col-lg-12 --}}
                </div> {{-- /.row --}}
            </div> {{-- /.col-lg-12 --}}
        </div> {{-- /.row --}}
    </div> {{-- /.container-fluid --}}

</x-app-layout>
