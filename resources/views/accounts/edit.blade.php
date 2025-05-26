<x-app-layout>
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12">
              <div class="card">
                 <div class="card-body p-0">
                    <div class="iq-edit-list usr-edit">
                       <ul class="iq-edit-profile d-flex nav nav-tabs mb-0">
                          <li class="col-md-3 p-0">
                             <a class="nav-link active" data-bs-toggle="pill" href="#personal-information">
                                Informations Personnelles
                             </a>
                          </li>
                          <li class="col-md-3 p-0">
                             <a class="nav-link" data-bs-toggle="pill" href="#chang-pwd">
                                Changer le Mot de Passe
                             </a>
                          </li>
                          <li class="col-md-3 p-0">
                             <a class="nav-link" data-bs-toggle="pill" href="#company-info">
                                Informations d'entreprises
                             </a>
                          </li>
                          <li class="col-md-3 p-0">
                             <a class="nav-link" data-bs-toggle="pill" href="#manage-contact">
                                Gérer les Contacts
                             </a>
                          </li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-12">
              <div class="iq-edit-list-data">
                 <div class="tab-content">
                    <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <div class="header-title">
                                <h4 class="card-title">Informations Personnelles</h4>
                             </div>
                          </div>
                          <div class="card-body">
                             <form>
                                
                                
                                <!-- Nom, Prénom, Username -->
                                <div class="row align-items-center">
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="lname">Nom :</label>
                                      <input type="text" class="form-control" id="lname" value="Tech">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="fname">Prénom :</label>
                                      <input type="text" class="form-control" id="fname" value="Barry">
                                   </div>
                                </div>
                                <div class="row align-items-center">
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="uname">Nom d'utilisateur :</label>
                                      <input type="text" class="form-control" id="uname" value="Barry@01">
                                   </div>
                                  
                                </div>

                               
                                <!-- Adresse sur toute la largeur -->
                               

                                <button type="reset" class="btn btn-outline-primary me-2">Annuler</button>
                                <button type="submit" class="btn btn-primary">Valider</button>
                             </form>
                          </div>
                       </div>
                    </div>

                    <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <div class="header-title">
                                <h4 class="card-title">Changer le Mot de Passe</h4>
                             </div>
                          </div>
                          <div class="card-body">
                             <form>
                                <div class="form-group">
                                   <label class="form-label" for="cpass">Mot de Passe Actuel :</label>
                                   <a href="{{route('recovers')}}" class="float-end">Mot de passe oublié</a>
                                   <input type="password" class="form-control" id="cpass" value="">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="npass">Nouveau Mot de Passe :</label>
                                   <input type="password" class="form-control" id="npass" value="">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="vpass">Vérifier le Mot de Passe :</label>
                                   <input type="password" class="form-control" id="vpass" value="">
                                </div>
                                <button type="reset" class="btn btn-outline-primary me-2">Annuler</button>
                                <button type="submit" class="btn btn-primary">Valider</button>
                             </form>
                          </div>
                       </div>
                    </div>

                    <div class="tab-pane fade" id="company-info" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <div class="header-title">
                                <h4 class="card-title">Informations d'entreprises</h4>
                             </div>
                          </div>
                          <div class="card-body">
                             <form>
                                <!-- Nom de l'entreprise et Adresse email -->
                                <div class="row">
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="company_name">Nom de l'entreprise :</label>
                                      <input type="text" class="form-control" id="company_name" placeholder="Entrez le nom de l'entreprise">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="company_email">Adresse email :</label>
                                      <input type="email" class="form-control" id="company_email" placeholder="Entrez l'adresse email">
                                   </div>
                                </div>

                                <!-- Téléphone et Statut -->
                                <div class="row">
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="company_phone">Téléphone :</label>
                                      <input type="text" class="form-control" id="company_phone" placeholder="Entrez le numéro de téléphone">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="company_status">Statut :</label>
                                      <select class="form-select" id="company_status">
                                         <option value="" selected disabled>Choisir le statut</option>
                                         <option value="actif">Actif</option>
                                         <option value="inactif">Inactif</option>
                                         <option value="suspendu">Suspendu</option>
                                      </select>
                                   </div>
                                </div>

                               
                                <button type="reset" class="btn btn-outline-primary me-2">Annuler</button>
                                <button type="submit" class="btn btn-primary">Valider</button>
                             </form>
                          </div>
                       </div>
                    </div>

                    <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <div class="header-title">
                                <h4 class="card-title">Gérer les Contacts</h4>
                             </div>
                          </div>
                          <div class="card-body">
                             <form>
                                <!-- Téléphone et Email -->
                                <div class="row">
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="cphone">Téléphone :</label>
                                      <input type="text" class="form-control" id="cphone" value="+1 987 654 3210">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="cemail">Email :</label>
                                      <input type="email" class="form-control" id="cemail" value="barrytech@example.com">
                                   </div>
                                </div>

                                <!-- Email entreprise et Téléphone entreprise -->
                                <div class="row">
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="company_email_contact">Email entreprise :</label>
                                      <input type="email" class="form-control" id="company_email_contact" placeholder="Email professionnel">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="company_phone_contact">Téléphone entreprise :</label>
                                      <input type="text" class="form-control" id="company_phone_contact" placeholder="Téléphone professionnel">
                                   </div>
                                </div>

                              
                                <button type="reset" class="btn btn-outline-primary me-2">Annuler</button>
                                <button type="submit" class="btn btn-primary">Valider</button>
                             </form>
                          </div>
                       </div>
                    </div>

                 </div>
              </div>
           </div>
        </div>
     </div>
</x-app-layout>