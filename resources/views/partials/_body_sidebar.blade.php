<div class="iq-sidebar sidebar-default">
    <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
        <a href="{{ route('index') }}" class="header-logo">
            <span>Alertes Fourrière</span>
        </a>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="side-menu">
                <li class="{{ request()->routeIs('index') ? 'active' : '' }} sidebar-layout">
                    <a href="{{ route('index') }}" class="svg-icon">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"/>
                            </svg>
                        </i>
                        <span class="ms-2">Tableau de bord</span>
                    </a>
                </li>

                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small fw-bold">Gestion des plaques</span>
                </li>
                <li class="sidebar-layout">
                    <a href="/plaques" class="svg-icon">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h18M5 6h14m-2 8H7m2 4h6"/>
                            </svg>
                        </i>
                        <span class="ms-2">Plaques actives</span>
                    </a>
                </li>
                <li class="sidebar-layout">
                    <a href="{{ route('plaques.archives') }}" class="svg-icon">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4h16v4H4V4zm1 6h14v10H5V10zm3 2v6m8-6v6"/>
                            </svg>
                        </i>
                        <span class="ms-2">Plaques archivées</span>
                    </a>
                </li>
                <li class="sidebar-layout">
                    <a href="/plaques/create" class="svg-icon">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"/>
                            </svg>
                        </i>
                        <span class="ms-2">Ajouter une plaque</span>
                    </a>
                </li>

                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small fw-bold">Alertes & Notifications</span>
                </li>
                <li class="sidebar-layout">
                    <a href="/alerte" class="svg-icon">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A7.97 7.97 0 0016 9V7a4 4 0 10-8 0v2a7.97 7.97 0 00-2.595 6.595L3 17h5m4 3a2 2 0 002-2"/>
                            </svg>
                        </i>
                        <span class="ms-2">Historique des alertes</span>
                    </a>
                </li>

                @if(auth()->check() && auth()->user()->user_type == 'admin')
                    <li class="px-3 pt-3 pb-2">
                        <span class="text-uppercase small fw-bold">Gestion des utilisateurs</span>
                    </li>

                    <li class="sidebar-layout">
                        <a href="/companies" class="svg-icon">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M3 21h18M9 8h1m-1 4h1m-1 4h1m4-8h1m-1 4h1m-1 4h1M6 3h12a1 1 0 011 1v17H5V4a1 1 0 011-1z"/>
                                </svg>
                            </i>
                            <span class="ms-2">Entreprises clientes</span>
                        </a>
                    </li>

                    <li class="sidebar-layout">
                        <a href="/accounts" class="svg-icon">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 21v-2a4 4 0 00-3-3.87M4 21v-2a4 4 0 013-3.87M16 3.13a4 4 0 110 7.75m-8 0a4 4 0 110-7.75"/>
                                </svg>
                            </i>
                            <span class="ms-2">Utilisateurs</span>
                        </a>
                    </li>

                    <li class="sidebar-layout">
                        <a href="{{ route('accounts.admin') }}" class="svg-icon">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </i>
                            <span class="ms-2">Gestion des admins</span>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
    </div>
</div>
