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
                                <div class="form-group row align-items-center">
                                   <div class="col-md-12">
                                      <div class="profile-img-edit">
                                         <div class="crm-profile-img-edit">
                                            <img class="crm-profile-pic rounded-circle avatar-100"
                                               src="{{asset('images/user/1.jpg')}}" alt="photo de profil">
                                            <div class="crm-p-image bg-primary">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                                  viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                               </svg>
                                               <input class="file-upload" type="file" accept="image/*">
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class=" row align-items-center">
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="fname">Prénom :</label>
                                      <input type="text" class="form-control" id="fname" value="Barry">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="lname">Nom :</label>
                                      <input type="text" class="form-control" id="lname" value="Tech">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="uname">Nom d'utilisateur :</label>
                                      <input type="text" class="form-control" id="uname" value="Barry@01">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="cname">Ville :</label>
                                      <input type="text" class="form-control" id="cname" value="Atlanta">
                                   </div>
                                   <div class="col-sm-6">
                                      <label class="form-label" for="gender">Genre :</label><br>
                                      <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>
                                         <label class="form-check-label" for="exampleRadios1">
                                            Homme
                                         </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios2" value="option1">
                                         <label class="form-check-label" for="exampleRadios2">
                                            Femme
                                         </label>
                                      </div>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="dob">Date de Naissance :</label>
                                      <input class="form-control" id="dob" value="1984-01-24">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label">État Civil :</label>
                                      <select class="form-select" id="exampleFormControlSelect1">
                                         <option selected="">Célibataire</option>
                                         <option>Marié(e)</option>
                                         <option>Veuf(ve)</option>
                                         <option>Divorcé(e)</option>
                                         <option>Séparé(e)</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label">Âge :</label>
                                      <select class="form-select" id="exampleFormControlSelect2">
                                         <option>12-18</option>
                                         <option>19-32</option>
                                         <option selected="">33-45</option>
                                         <option>46-62</option>
                                         <option>63 et plus</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label">Pays :</label>
                                      <select class="form-select" id="exampleFormControlSelect3">
                                         <option>Canada</option>
                                         <option>Noida</option>
                                         <option selected="">États-Unis</option>
                                         <option>Inde</option>
                                         <option>Afrique</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label">État / Région :</label>
                                      <select class="form-select" id="exampleFormControlSelect4">
                                         <option>Californie</option>
                                         <option>Floride</option>
                                         <option selected="">Géorgie</option>
                                         <option>Connecticut</option>
                                         <option>Louisiane</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-12">
                                      <label class="form-label">Adresse :</label>
                                      <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">37 Cardinal Lane
Petersburg, VA 23803
États-Unis d'Amérique
Code Postal : 85001</textarea>
                                   </div>
                                </div>
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
                                <div class="form-group">
                                   <label class="form-label" for="company_name">Nom de l'entreprise :</label>
                                   <input type="text" class="form-control" id="company_name" placeholder="Entrez le nom de l'entreprise">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="company_email">Adresse email :</label>
                                   <input type="email" class="form-control" id="company_email" placeholder="Entrez l'adresse email">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="company_phone">Téléphone :</label>
                                   <input type="text" class="form-control" id="company_phone" placeholder="Entrez le numéro de téléphone">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="company_status">Statut :</label>
                                   <select class="form-select" id="company_status">
                                      <option value="" selected disabled>Choisir le statut</option>
                                      <option value="actif">Actif</option>
                                      <option value="inactif">Inactif</option>
                                      <option value="suspendu">Suspendu</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="vehicles_count">Nombre de véhicules gérés :</label>
                                   <input type="number" class="form-control" id="vehicles_count" min="0" placeholder="Entrez le nombre de véhicules">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="fleet_type">Type de flotte :</label>
                                   <select class="form-select" id="fleet_type">
                                      <option value="" selected disabled>Choisir le type de flotte</option>
                                      <option value="légère">Légère</option>
                                      <option value="lourde">Lourde</option>
                                      <option value="mixte">Mixte</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="demo_type">Type de démo souhaitée :</label>
                                   <select class="form-select" id="demo_type">
                                      <option value="" selected disabled>Choisir le type de démo</option>
                                      <option value="en ligne">En ligne</option>
                                      <option value="sur site">Sur site</option>
                                      <option value="autre">Autre</option>
                                   </select>
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
                                <div class="form-group">
                                   <label class="form-label" for="cemail">Email :</label>
                                   <input type="email" class="form-control" id="cemail" value="barrytech@example.com">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="cphone">Numéro de Téléphone :</label>
                                   <input type="text" class="form-control" id="cphone" value="+1 987 654 3210">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="cwebsite">Site Web :</label>
                                   <input type="text" class="form-control" id="cwebsite" value="https://www.barrytech.com">
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
