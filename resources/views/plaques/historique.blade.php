<x-app-layout>
    <div class="container-fluid timeline-page">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="iq-timeline m-0 d-flex align-items-center justify-content-between position-relative">
                            <ul class="list-inline p-0 m-0 w-100">
                                @php
                                    $lastStatus = null;
                                    $lastArchived = null;  // Variable pour stocker l'état précédent de 'archived'
                                    $searchCountAfterDate = 0;
                                    $specificDate = '2025-01-01';  // Remplace cette date par celle que tu souhaites comparer
                                @endphp
                                @foreach($historiques as $historique)
                                    @if ($historique->date_recherche > $specificDate)  <!-- Comparaison avec la date spécifique -->
                                        @php
                                            $searchCountAfterDate++;  // Incrémentation du compteur
                                        @endphp
                                    @endif

                                    <!-- Affichage des changements de statut -->
                                    @if ($historique->status != $lastStatus || $historique->archived != $lastArchived)

                                        <!-- Affichage pour le statut "libre" -->
                                        @if ($historique->status == "libre")
                                            <li>
                                                <div class="time bg-success"> <span>{{$historique->date_recherche}}</span>
                                                </div>
                                                <div class="content">
                                                    <div class="timeline-dots new-timeline-dots border-success"></div>
                                                    <h6 class="mb-1">Le véhicule n'a pas trouvé dans les fourrières du Paris et France</h6>
                                                </div>
                                            </li>
                                        @endif

                                        <!-- Affichage pour le statut "en_fourrière" -->
                                        @if ($historique->status == "en_fourrière")
                                            <li>
                                                <div class="time"> <span>{{$historique->date_recherche}}</span>
                                                </div>
                                                <div class="content">
                                                    <div class="timeline-dots new-timeline-dots"></div>
                                                    <h6 class="mb-1">En fourrière</h6>
                                                    <div class="d-inline-block w-100">
                                                        <p>Adresse : {{$historique->adresse}}.</p>
                                                        <p>Téléphone : {{$historique->telephone}}.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif

                                        <!-- Affichage pour le statut "en_cours" (Création de plaque) -->
                                        @if ($historique->status == "en_cours")
                                            <li>
                                                <div class="time"> <span>{{$historique->created_at}}</span>
                                                </div>
                                                <div class="content">
                                                    <div class="timeline-dots new-timeline-dots"></div>
                                                    <h6 class="mb-1">Création de plaque</h6>
                                                </div>
                                            </li>
                                        @endif

                                        <!-- Affichage pour le changement d'archivage -->
                                        @if ($historique->archived != $lastArchived)
                                            <li>
                                                <div class="time"> <span>{{$historique->updated_at}}</span>
                                                </div>
                                                <div class="content">
                                                    <div class="timeline-dots new-timeline-dots"></div>
                                                    <h6 class="mb-1">Changement de statut d'archivage</h6>
                                                    <p>Archivé : {{$historique->archived ? 'Oui' : 'Non'}}</p>
                                                </div>
                                            </li>
                                        @endif

                                        @php
                                            // Mise à jour du dernier statut et archivage
                                            $lastStatus = $historique->status;
                                            $lastArchived = $historique->archived;
                                        @endphp
                                    @endif
                                @endforeach
                            </ul>
                            <!-- Affichage du nombre de recherches après la date spécifique -->
                        @if(Auth::user()->user_type == 'admin')

                            <div class="alert alert-info">
                                <p>Nombre de recherches effectuées  <strong>{{$searchCountAfterDate}}</strong></p>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
