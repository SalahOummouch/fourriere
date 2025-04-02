<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Basic Select Boxes</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <select class="form-control choicesjs" id="sel1" name="sellist1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Mutiple Select</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <select multiple class="form-control choicesjs" id="sel2" name="sellist2">
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Basic Select With Input Group</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            </div>
                            <select class="form-control custom-select" id="inputGroupSelect01">
                                <option selected="">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select class="form-control custom-select" id="inputGroupSelect02">
                                <option selected="">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text" for="inputGroupSelect02">Options</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Single Select2</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-0">
                            <select class="form-control choicesjs">
                                <option>Java</option>
                                <option>Javascript</option>
                                <option>PHP</option>
                                <option>Visual Basic</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Multiple Select2</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <select id="multiple" class="js-states form-control" multiple>
                            <option>Red</option>
                            <option>Green</option>
                            <option>Blue</option>
                            <option>Yellow</option>
                        </select>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Custom Select</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <select class="custom-select form-control choicesjs" multiple>
                            <option selected="">Open this menu</option>
                            <option value="IT">IT</option>
                            <option value="Blade Runner">Blade Runner</option>
                            <option value="Thor Ragnarok">Thor Ragnarok</option>
                        </select>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Disabled Select</h4>
                        </div>

                    </div>
                    <div class="card-body">
                        <select disabled="disabled" id="disabledSelect" class="form-control choicesjs">
                            <option>Disabled select</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
