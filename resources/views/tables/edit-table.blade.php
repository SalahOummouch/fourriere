<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Editable Table</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="table" class="table-editable">
                            <span class="table-add float-end mb-3 me-2">
                                <button class="btn btn-sm bg-primary"><i class="ri-add-fill"><span class="pl-1">Add
                                            New</span></i>
                                </button>
                            </span>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Company Name</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Sort</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td contenteditable="true">Gio Metric</td>
                                        <td contenteditable="true">25</td>
                                        <td contenteditable="true">Deepends</td>
                                        <td contenteditable="true">Spain</td>
                                        <td contenteditable="true">Madrid</td>
                                        <td>
                                            <span class="table-up"><a href="#!" class="indigo-text"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                        viewBox="0 0 20 20" fill="blue">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg></a></span>
                                            <span class="table-down"><a href="#!" class="indigo-text"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                        viewBox="0 0 20 20" fill="blue">
                                                        <path fill-rule="evenodd"
                                                            d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg></a></span>
                                        </td>
                                        <td>
                                            <span class="table-remove"><button type="button"
                                                    class="btn btn-danger-subtle rounded  btn-sm my-0">Remove</button></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td contenteditable="true">Manny Petty</td>
                                        <td contenteditable="true">45</td>
                                        <td contenteditable="true">Insectus</td>
                                        <td contenteditable="true">France</td>
                                        <td contenteditable="true">San Francisco</td>
                                        <td>
                                            <span class="table-up"><a href="#!" class="indigo-text"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                        viewBox="0 0 20 20" fill="blue">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg></a></span>
                                            <span class="table-down"><a href="#!" class="indigo-text"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                        viewBox="0 0 20 20" fill="blue">
                                                        <path fill-rule="evenodd"
                                                            d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg></a></span>
                                        </td>
                                        <td>
                                            <span class="table-remove"><button type="button"
                                                    class="btn btn-danger-subtle rounded  btn-sm my-0">Remove</button></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td contenteditable="true">Lucy Tania</td>
                                        <td contenteditable="true">26</td>
                                        <td contenteditable="true">Isotronic</td>
                                        <td contenteditable="true">Germany</td>
                                        <td contenteditable="true">Frankfurt am Main</td>
                                        <td>
                                            <span class="table-up"><a href="#!" class="indigo-text"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                        viewBox="0 0 20 20" fill="blue">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg></a></span>
                                            <span class="table-down"><a href="#!" class="indigo-text"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                        viewBox="0 0 20 20" fill="blue">
                                                        <path fill-rule="evenodd"
                                                            d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg></a></span>
                                        </td>
                                        <td>
                                            <span class="table-remove"><button type="button"
                                                    class="btn btn-danger-subtle rounded  btn-sm my-0">Remove</button></span>
                                        </td>
                                    </tr>
                                    <tr class="hide">
                                        <td contenteditable="true">Anna Mull</td>
                                        <td contenteditable="true">35</td>
                                        <td contenteditable="true">Portica</td>
                                        <td contenteditable="true">USA</td>
                                        <td contenteditable="true">Oregon</td>
                                        <td>
                                            <span class="table-up"><a href="#!" class="indigo-text"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20px"
                                                        height="20px" viewBox="0 0 20 20" fill="blue">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg></a></span>
                                            <span class="table-down"><a href="#!" class="indigo-text"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20px"
                                                        height="20px" viewBox="0 0 20 20" fill="blue">
                                                        <path fill-rule="evenodd"
                                                            d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg></a></span>
                                        </td>
                                        <td>
                                            <span class="table-remove"><button type="button"
                                                    class="btn btn-danger-subtle rounded btn-sm my-0">Remove</button></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
