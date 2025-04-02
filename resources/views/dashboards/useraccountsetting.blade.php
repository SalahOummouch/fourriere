<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Account Setting</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="acc-edit">
                            <form>
                                <div class="form-group">
                                    <label class="form-check-label" for="uname">User Name:</label>
                                    <input type="text" class="form-control" id="uname" value="Barry@01">
                                </div>
                                <div class="form-group">
                                    <label class="form-check-label" for="email">Email Id:</label>
                                    <input type="email" class="form-control" id="email" value="Barryjohn@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="form-check-label" for="altemail">Alternate Email:</label>
                                    <input type="email" class="form-control" id="altemail" value="designtemplate@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="d-block mb-1">Language Known:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck14"
                                            checked>
                                        <label class="form-check-label" for="defaultCheck14">
                                            English
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck15"
                                            checked>
                                        <label class="form-check-label" for="defaultCheck15">
                                            French
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck16">
                                        <label class="form-check-label" for="defaultCheck16">
                                            Hindi
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck17"
                                            checked>
                                        <label class="form-check-label" for="defaultCheck17">
                                            Spenish
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck19">
                                        <label class="form-check-label" for="defaultCheck19">
                                            Italian
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Social Media</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="acc-edit">
                            <form>
                                <div class="form-group">
                                    <label class="form-label" for="facebook">Facebook:</label>
                                    <input type="text" class="form-control" id="facebook" value="www.facebook.com">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="twitter">Twitter:</label>
                                    <input type="text" class="form-control" id="twitter" value="www.twitter.com">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="google">Google:</label>
                                    <input type="text" class="form-control" id="google" value="www.google.com">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="instagram">Instagram:</label>
                                    <input type="text" class="form-control" id="instagram" value="www.instagram.com">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="youtube">You Tube:</label>
                                    <input type="text" class="form-control" id="youtube" value="www.youtube.com">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
