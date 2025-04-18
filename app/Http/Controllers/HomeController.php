<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Plaque;

class HomeController extends Controller
{
    /*
     * Dashboard Pages Routes
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        dd($users);
    }


    public function index()
    {
        // Nombre de plaques enregistrées
        $platesCount = Plaque::count();
    
        // Vérifier si platesCount est différent de zéro pour éviter la division par zéro
        if ($platesCount > 0) {
            // Nombre de plaques en fourrière
            $platesInTow = Plaque::where('status', 'en_fourrière')->count();
            
            // Pourcentage de plaques en fourrière
            $platesInTowPercentage = ($platesInTow / $platesCount) * 100;
    
            // Nombre de véhicules retrouvés (Plaques libres)
            $platesFree = Plaque::where('status', 'libre')->count();
            
            // Pourcentage de plaques retrouvées
            $platesFreePercentage = ($platesFree / $platesCount) * 100;
    
            // Nombre de plaques en cours de recherche
            $platesInProgress = Plaque::where('status', 'en_cours')->count();
            
            // Pourcentage de plaques en cours de recherche
            $platesInProgressPercentage = ($platesInProgress / $platesCount) * 100;
    
            // Historique des alertes envoyées : Compter les plaques ayant une recherche effectuée
            $alertsSent = Plaque::whereNotNull('date_recherche')->count();
            
            // Pourcentage des alertes envoyées
            $alertsSentPercentage = ($alertsSent / $platesCount) * 100;
    
            // Suppression des plaques inactives : Plaques archivées
            $inactivePlatesRemoved = Plaque::where('archived', true)->count();
            
            // Pourcentage des plaques supprimées
            $inactivePlatesPercentage = ($inactivePlatesRemoved / $platesCount) * 100;
        } else {
            // Si $platesCount est zéro, définir les pourcentages sur zéro
            $platesFree = 0;
            $alertsSent = 0;
            $inactivePlatesRemoved = 0;
            $inactivePlatesRemoved = 0;
            $platesInTowPercentage = 0;
            $platesFreePercentage = 0;
            $platesInProgressPercentage = 0;
            $alertsSentPercentage = 0;
            $inactivePlatesPercentage = 0;
        }
    
        // Données pour le graphique
        $chartData = [
            'labels' => ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
            'datasets' => [
                [
                    'label' => 'Véhicules en fourrière',
                    'data' => [120, 150, 170, 200, 180, 220], // Remplacez avec des données réelles
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'tension' => 0.4
                ],
                [
                    'label' => 'Autres en fourrière',
                    'data' => [60, 90, 70, 110, 95, 130], // Remplacez avec des données réelles
                    'borderColor' => 'rgba(153, 102, 255, 1)',
                    'backgroundColor' => 'rgba(153, 102, 255, 0.2)',
                    'tension' => 0.4
                ]
            ]
        ];
    
        return view('dashboards.index', compact(
            'platesCount', 'platesInTowPercentage', 'platesFreePercentage', 'platesFree',
            'platesInProgressPercentage', 'alertsSentPercentage',
            'inactivePlatesPercentage', 'chartData', 'alertsSent', 'inactivePlatesRemoved'
        ));
    }
    

    // public function index(Request $request)
    // {
    //     return view('dashboards.index');
    // }
    public function customer(Request $request)
    {
        return view('dashboards.customer');
    }
    public function customerAdd(Request $request)
    {
        return view('dashboards.customer-add');
    }
    public function customerEdit(Request $request)
    {
        return view('dashboards.customer-edit');
    }
    public function customerView(Request $request)
    {
        return view('dashboards.customer-view');
    }
    public function product(Request $request)
    {
        return view('dashboards.product');
    }
    public function productAdd(Request $request)
    {
        return view('dashboards.product-add');
    }
    public function order(Request $request)
    {
        return view('dashboards.order');
    }
    public function orderDetails(Request $request)
    {
        return view('dashboards.order-details');
    }
    public function orderAdd(Request $request)
    {
        return view('dashboards.order-add');
    }
    public function orderNew(Request $request)
    {
        return view('dashboards.order-new');
    }
    public function icon(Request $request)
    {
        return view('dashboards.icon-heroicon');
    }
    public function invoice(Request $request)
    {
        return view('dashboards.invoice');
    }
    public function invoiceView(Request $request)
    {
        return view('dashboards.invoice-view');
    }
    public function todo(Request $request)
    {
        return view('dashboards.todo');
    }
    public function calendar(Request $request)
    {
        return view('dashboards.calendar');
    }
    public function chatPage(Request $request)
    {
        return view('dashboards.chat');
    }
    public function userProfile(Request $request)
    {
        return view('dashboards.user-profile');
    }
    public function blankpage(Request $request)
    {
        return view('dashboards.blank-page');
    }
    public function faq(Request $request)
    {
        return view('dashboards.faq');
    }
    public function pricing(Request $request)
    {
        return view('dashboards.pricing');
    }
    public function timeline(Request $request)
    {
        return view('dashboards.timeline');
    }
    public function comingsoon(Request $request)
    {
        return view('dashboards.coming-soon');
    }
    public function maintenance(Request $request)
    {
        return view('dashboards.maintenance');
    }
    public function error404(Request $request)
    {
        return view('dashboards.error-404');
    }
    public function error500(Request $request)
    {
        return view('dashboards.error-500');
    }

    public function userprofileedit(Request $request)
    {
        return view('dashboards.userprofileedit');
    }

    public function useraccountsetting(Request $request)
    {
        return view('dashboards.useraccountsetting');
    }

    public function userprivacysetting(Request $request)
    {
        return view('dashboards.userprivacysetting');
    }



// auth page

    public function login(Request $request)
    {
        return view('auth.login');
    }
    public function registers(Request $request)
    {
        return view('auth.register');
    }
    public function recovers(Request $request)
    {
        return view('auth.recoverpw');
    }
    public function confirmmail(Request $request)
    {
        return view('auth.confirm-mail');
    }
    public function lockscreen(Request $request)
    {
        return view('auth.lockscreen');
    }

    /*
     * UI Elements Pages Routes
     */
     public function alerts(Request $request)
    {
        return view('ui-elements.ui-alerts');
    }
     public function avatars(Request $request)
    {
        return view('ui-elements.ui-avatars');
    }
     public function badges(Request $request)
    {
        return view('ui-elements.ui-badges');
    }
     public function boxShadow(Request $request)
    {
        return view('ui-elements.ui-box-shadow');
    }
     public function breadcrumb(Request $request)
    {
        return view('ui-elements.ui-breadcrumb');
    }
     public function buttonsGroup(Request $request)
    {
        return view('ui-elements.ui-buttons-group');
    }
     public function buttons(Request $request)
    {
        return view('ui-elements.ui-buttons');
    }
     public function cards(Request $request)
    {
        return view('ui-elements.ui-cards');
    }
     public function carousels(Request $request)
    {
        return view('ui-elements.ui-carousel');
    }
     public function color(Request $request)
    {
        return view('ui-elements.ui-color');
    }
     public function embedVideo(Request $request)
    {
        return view('ui-elements.ui-embed-video');
    }
     public function grid(Request $request)
    {
        return view('ui-elements.ui-grid');
    }
     public function image(Request $request)
    {
        return view('ui-elements.ui-images');
    }
     public function listGroup(Request $request)
    {
        return view('ui-elements.ui-list-group');
    }
     public function modal(Request $request)
    {
        return view('ui-elements.ui-modal');
    }
     public function notification(Request $request)
    {
        return view('ui-elements.ui-notifications');
    }
     public function pagination(Request $request)
    {
        return view('ui-elements.ui-pagination');
    }
     public function popovers(Request $request)
    {
        return view('ui-elements.ui-popovers');
    }
     public function progressbars(Request $request)
    {
        return view('ui-elements.ui-progressbars');
    }
    public function tabs(Request $request)
    {
        return view('ui-elements.ui-tabs');
    }
    public function tooltips(Request $request)
    {
        return view('ui-elements.ui-tooltips');
    }
    public function typography(Request $request)
    {
        return view('ui-elements.ui-typography');
    }


    /*
     * Forms Pages Routes
     */
    public function elements(Request $request)
    {
        return view('form-control.form-elements');
    }
    public function input(Request $request)
    {
        return view('form-control.form-input');
    }
    public function validation(Request $request)
    {
        return view('form-control.form-validation');
    }
    public function switch(Request $request)
    {
        return view('form-control.form-switch');
    }
    public function checkbox(Request $request)
    {
        return view('form-control.form-checkbox');
    }
    public function radio(Request $request)
    {
        return view('form-control.form-radio');
    }

    public function datepicker(Request $request)
    {
        return view('form-widget.form-datepicker');
    }
    public function select2(Request $request)
    {
        return view('form-widget.form-select2');
    }
    public function fileuploader(Request $request)
    {
        return view('form-widget.form-fileuploader');
    }
    public function quill(Request $request)
    {
        return view('form-widget.form-quill');
    }

    public function chart(Request $request)
    {
        return view('charts.chart');
    }

    public function textarea(Request $request)
    {
        return view('form-control.form-textarea');
    }

    /*
     * Table Pages Routes
     */

    public function basictable(Request $request)
    {
        return view('tables.table-basic');
    }
    public function datatable(Request $request)
    {
        return view('tables.data-table');
    }
    public function edittable(Request $request)
    {
        return view('tables.edit-table');
    }



    /*CRUD*/
    public function userlist()
    {
        $users = User::all();
        return view('user.user_list', compact('users'));
    }

    public function create()
    {
        return view('user.add');
    }

    public function store(UserRequest $request)
    {
        dd('user');
        $request['password'] = bcrypt($request->password);

        $request['username'] = $request->username ?? stristr($request->email, "@", true) . rand(100, 1000);

        $user = User::create($request->all());


        //storeMediaFile($user,$request->profile_image, 'profile_image');

        // $user->assignRole('user');

        // Save user Profile data...
        $user->userProfile()->create($request->userProfile);

        return redirect()->route('users.index')->withSuccess(__('message.msg_added', ['name' => __('users.store')]));
    }

    public function show($id)
    {
        $data = User::with('userProfile')->findOrFail($id);

        $profileImage = getSingleMedia($data, 'profile_image');

        return view('users.profile', compact('data', 'profileImage'));
    }



    public function update(UserRequest $request, $id)
    {
        // dd($request->all());
        $user = User::with('userProfile')->findOrFail($id);
        dd($user);
        // $role = Role::find($request->user_role);
        // if(env('IS_DEMO')) {
        //     if($role->name === 'admin') {
        //         return redirect()->back()->with('errors', 'Permission denied.');
        //     }
        // }
        // $user->assignRole($role->name);

        $request['password'] = $request->password != '' ? bcrypt($request->password) : $user->password;

        // User user data...
        $user->fill($request->all())->update();

        // Save user image...
        if (isset($request->profile_image) && $request->profile_image != null) {
            $user->clearMediaCollection('profile_image');
            $user->addMediaFromRequest('profile_image')->toMediaCollection('profile_image');
        }

        // user profile data....
        $user->userProfile->fill($request->userProfile)->update();

        if (auth()->check()) {
            return redirect()->route('dashboards.index')->withSuccess(__('message.msg_updated', ['name' => __('message.user')]));
        }
        return redirect()->back()->withSuccess(__('message.msg_updated', ['name' => 'My Profile']));
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        // $status = 'errors';
        //$message= __('global-message.delete_form', ['form' => __('users.title')]);

        if ($user != '') {
            $user->delete();
            $status = 'success';
            //$message= __('global-message.delete_form', ['form' => __('users.title')]);
        }

        if (request()->ajax()) {
            return response()->json(['status' => true,  'datatable_reload' => 'dataTable_wrapper']);
        }

        return redirect()->back()->with($status);
    }

    /*footer pages */
    public function privacypolicy()
    {
        return view('dashboards.privacy-policy');
    }

    public function termsofservice()
    {
        return view('dashboards.terms-of-service');
    }
}
