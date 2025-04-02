<x-app-layout>
    <div class="container-fluid timeline-page">
         <div class="row">
            <div class="col-lg-12">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                     <div class="iq-timeline m-0 d-flex align-items-center justify-content-between position-relative">
                        <ul class="list-inline p-0 m-0 w-100">
                            @foreach($historiques as $historique)
                                @if ($historique->status == "libre")
                                <li>
                                    <div class="time bg-success"> <span>{{$historique->date_recherche}}</span>
                                    </div>
                                    <div class="content">
                                        <div class="timeline-dots new-timeline-dots border-success"></div>
                                        <h6 class="mb-1">le véhicule n'a pas trouvé dans les fourrières du Paris et France</h6>

                                    </div>
                                </li>
                                @endif
                                @if ($historique->status == "en_fourrière")

                                <li>
                                    <div class="time"> <span>{{$historique->date_recherche}}</span>
                                    </div>
                                    <div class="content">
                                        <div class="timeline-dots new-timeline-dots"></div>
                                        <h6 class="mb-1">En fourrière</h6>
                                        <div class="d-inline-block w-100">
                                            <p>Adresse : {{$historique ->adresse}}.</p>
                                            <p>Telephone : {{$historique ->telephone}}.</p>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                {{-- @if ($historique->status == "en_cours")
                                     <div class="time"> <span>{{$historique->created_at}}</span>
                                     <h6 class="mb-1">Creation de plaque</h6>

                                @endif --}}

                            @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
