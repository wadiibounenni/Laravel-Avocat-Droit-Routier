<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-dashboard-line"></i>
                    <span>Gestion des Domaines d’Intervention </span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="{{route('liste.domaine.intervention')}}">Liste des domaines d'intervention </a>
                    </li>

                    <li>
                        <a href="{{route('ajouter.domaine.intervention')}}">Ajouter un domaine d’intervention</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-dashboard-line"></i>
                    <span>Gestion des Infractions au Code de la Route </span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="{{route('liste.infractions.code')}}">Liste des infractions au code de la route </a>
                    </li>

                    <li>
                        <a href="{{route('ajouter.infraction.code')}}">Ajouter une infraction </a>
                    </li>
                </ul>
            </li>

           
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Gestion des Articles du Blog </span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="{{route('liste.articles')}}">Liste des articles de blog</a>
                    </li>

                    <li>
                        <a href="{{route('ajouter.article')}}">Ajouter un article</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>