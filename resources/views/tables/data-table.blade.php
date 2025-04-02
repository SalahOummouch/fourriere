<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Bootstrap Datatables</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">Images in Bootstrap are made responsive with <code>.img-fluid</code>.
                            <code>max-width: 100%;</code>
                            and <code>height: auto;</code> are applied to the image so that it scales with the parent
                            element.
                        </p>
                        <div class="table-responsive iq-tabel-data">
                            <table id="datatable" class="table data-table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th class="text-right">Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck">
                                                    <label class="custom-control-label" for="customCheck"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td class="text-right">$320,800</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td class="text-right">$170,750</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td class="text-right">$137,500</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck4">
                                                    <label class="custom-control-label" for="customCheck4"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td class="text-right">$327,900</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck5">
                                                    <label class="custom-control-label" for="customCheck5"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td class="text-right">$205,500</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td class="text-right">$103,600</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck11">
                                                    <label class="custom-control-label" for="customCheck11"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td class="text-right">$90,560</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck7">
                                                    <label class="custom-control-label" for="customCheck7"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td class="text-right">$342,000</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck8">
                                                    <label class="custom-control-label" for="customCheck8"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td class="text-right">$470,600</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck9">
                                                    <label class="custom-control-label" for="customCheck9"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td class="text-right">$313,500</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck10">
                                                    <label class="custom-control-label" for="customCheck10"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td class="text-right">$385,750</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="pr-0">
                                            <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0"
                                                        id="customCheck100">
                                                    <label class="custom-control-label" for="customCheck100"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th class="text-right">Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
