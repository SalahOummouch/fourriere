<x-app-layout>
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12">
              <div class="card">
                 <div class="card-body p-0">
                    <div class="iq-edit-list usr-edit">
                       <ul class="iq-edit-profile d-flex nav nav-tabs mb-0">
                          <li class="col-md-3 p-0">
                             <a class="nav-link active text-primary" data-bs-toggle="pill" href="#personal-information">
                                Informations personnelles
                             </a>
                          </li>
                          <li class="col-md-3 p-0">
                             <a class="nav-link text-primary" data-bs-toggle="pill" href="#chang-pwd">
                                Modifier le mot de passe
                             </a>
                          </li>
                          <li class="col-md-3 p-0">
                             <a class="nav-link text-primary" data-bs-toggle="pill" href="#emailandsms">
                                Email et SMS
                             </a>
                          </li>
                          <li class="col-md-3 p-0">
                             <a class="nav-link text-primary" data-bs-toggle="pill" href="#manage-contact">
                                Gérer les contacts
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
                                <h4 class="card-title text-primary">Informations personnelles</h4>
                             </div>
                          </div>
                          <div class="card-body">
                             <form>
                                <div class="form-group row align-items-center">
                                   <div class="col-md-12">
                                      <div class="profile-img-edit">
                                         <div class="crm-profile-img-edit">
                                            <img class="crm-profile-pic rounded-circle avatar-100"
                                               src="{{asset('images/user/1.jpg')}}" alt="photo-profil">
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
                                      <label class="form-label text-primary" for="fname">Prénom :</label>
                                      <input type="text" class="form-control" id="fname" value="Barry">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label text-primary" for="lname">Nom :</label>
                                      <input type="text" class="form-control" id="lname" value="Tech">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label text-primary" for="uname">Nom d'utilisateur :</label>
                                      <input type="text" class="form-control" id="uname" value="Barry@01">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label text-primary" for="cname">Ville :</label>
                                      <input type="text" class="form-control" id="cname" value="Atlanta">
                                   </div>
                                   <div class="col-sm-6">
                                      <label class="form-label text-primary" for="gender">Sexe :</label><br>
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
                                      <label class="form-label text-primary" for="dob">Date de naissance :</label>
                                      <input class="form-control" id="dob" value="1984-01-24">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label text-primary">Statut marital :</label>
                                      <select class="form-select" id="exampleFormControlSelect1">
                                         <option selected="">Célibataire</option>
                                         <option>Marrié(e)</option>
                                         <option>Veuf(ve)</option>
                                         <option>Divorcé(e)</option>
                                         <option>Séparé(e)</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label text-primary">Âge :</label>
                                      <select class="form-select" id="exampleFormControlSelect2">
                                         <option>12-18</option>
                                         <option>19-32</option>
                                         <option selected="">33-45</option>
                                         <option>46-62</option>
                                         <option>63 > </option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label text-primary">Pays :</label>
                                      <select class="form-select" id="exampleFormControlSelect3">
                                         <option>Canada</option>
                                         <option>Noida</option>
                                         <option selected="">États-Unis</option>
                                         <option>Inde</option>
                                         <option>Afrique</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label text-primary">État :</label>
                                      <select class="form-select" id="exampleFormControlSelect4">
                                         <option>Californie</option>
                                         <option>Floride</option>
                                         <option selected="">Géorgie</option>
                                         <option>Connecticut</option>
                                         <option>Louisiane</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-12">
                                      <label class="form-label text-primary">Adresse :</label>
                                      <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
37 Cardinal Lane
Petersburg, VA 23803
États-Unis d'Amérique
Code postal : 85001</textarea>
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
                                <h4 class="card-title text-primary">Modifier le mot de passe</h4>
                             </div>
                          </div>
                          <div class="card-body">
                             <form>
                                <div class="form-group">
                                   <label class="form-label text-primary" for="cpass">Mot de passe actuel :</label>
                                   <a href="{{route('recovers')}}" class="float-end text-primary">Mot de passe oublié ?</a>
                                   <input type="Password" class="form-control" id="cpass" value="">
                                </div>
                                <div class="form-group">
                                   <label class="form-label text-primary" for="npass">Nouveau mot de passe :</label>
                                   <input type="Password" class="form-control" id="npass" value="">
                                </div>
                                <div class="form-group">
                                   <label class="form-label text-primary" for="vpass">Vérifier le mot de passe :</label>
                                   <input type="Password" class="form-control" id="vpass" value="">
                                </div>
                                <button type="reset" class="btn btn-outline-primary me-2">Annuler</button>
                                <button type="submit" class="btn btn-primary">Valider</button>
                             </form>
                          </div>
                       </div>
                    </div>

                    <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <div class="header-title">
                                <h4 class="card-title text-primary">Email et SMS</h4>
                             </div>
                          </div>
                          <div class="card-body">
                             <form>
                                <div class="form-group row align-items-center">
                                   <label class="col-md-3 form-label text-primary" for="emailnotification">Notification par email :</label>
                                   <div class="col-md-9">
                                      <div class="form-check form-check-inline form-switch">
                                         <input class="form-check-input" type="checkbox" role="switch" id="inlineCheckbox1" value="option1" checked>
                                      </div>
                                   </div>
                                </div>
                                <div class="form-group row align-items-center">
                                   <label class="col-md-3 form-label text-primary" for="smsnotification">Notification par SMS :</label>
                                   <div class="col-md-9">
                                      <div class="form-check form-check-inline form-switch">
                                         <input class="form-check-input" type="checkbox" role="switch" id="inlineCheckbox2" value="option1" checked>
                                      </div>
                                   </div>
                                </div>
                                <div class="form-group row align-items-center">
                                   <label class="col-md-3 text-primary" for="npass">Quand envoyer un email :</label>
                                   <div class="col-md-9">
                                      <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="defaultCheck11">
                                         <label class="form-check-label" for="defaultCheck11">
                                            Vous avez de nouvelles notifications.
                                         </label>
                                      </div>
                                      <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="defaultCheck12">
                                         <label class="form-check-label" for="defaultCheck12">
                                            ...
                                         </label>
                                      </div>
                                   </div>
                                </div>
                             </form>
                          </div>
                       </div>
                    </div>

                    <!-- Gérer les contacts peut être ajouté ici -->
                    
                 </div>
              </div>
           </div>
        </div>
    </div>
</x-app-layout>
