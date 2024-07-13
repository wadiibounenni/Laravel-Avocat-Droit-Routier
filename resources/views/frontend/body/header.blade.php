@php
 $infractions = App\Models\InfractionCode::latest()->get();
 $domaines = App\Models\DomaineIntervention::latest()->get();
@endphp


<header id="header_id" class="main_header header_style_one" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
    <div class="header_top">
        <div class="row">
            <div class="col-md-8">
                <div class="header_contact_info float-left ul-li">
                    <ul>
                        <li><i class="far fa-envelope" title="Email : k.el.ouahi@avocat.be"></i> <a href="mailto:k.el.ouahi@avocat.be">k.el.ouahi@avocat.be</a></li>
                        <li><div class="about_btn"><a href="tel:+32485374042" class="btn-header"><i class="fa fa-mobile-alt" title="Appeler : +32 (0)485 37 40 42"></i> Appeler : +32 (0)485 37 40 42</a></div></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="m_social_area float-right ul-li pt-2">
                    <ul>
                        <li style="width: 100px;box-shadow: none;"><a href="https://wa.me/+32485374042" target="_blank" title="Whatsapp" class="text-grey"><i class="fab fa-whatsapp icon-color-2" style="font-size: 30px" title="Rejoignez-nous sur Whatsapp"></i>  WhatsApp </a></li>

                        <li><a href="https://www.facebook.com/AvocatKarimElOuahi/" target="_blank" title="Facebook"><i class="fab fa-facebook-f icon-color-3" title="Rejoignez-nous sur Facebook"></i></a></li>
                        <li><a href="https://twitter.com/karimelouahi?lang=fr" target="_blank" title="Twitter"><i class="fab fa-twitter icon-color-4" title="Rejoignez-nous sur Twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /header_top -->
    <div class="header_main_menu">
        <div class="site_logo">
            <a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/logo/logo-1.png')}}" alt="Avocat droit routier Bruxelles, Cabinet d’avocats EL OUAHI" title="Avocat droit routier Bruxelles, Cabinet d’avocats EL OUAHI"></a>
        </div>
        <nav class="navbar-expand-lg mainmenu" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li><a href="{{route('home')}}" itemprop="url">Accueil</a></li>
                <li class="dropdown text-dark">
                    <a href="#">Domaines d'Intervention </a>
                    <ul class="dropdown-menu clearfix">
                    <li  class="dropdown"><a href="#"  class="dropdown-toggle" itemprop="url"> Infractions au code de la route</a>
                            <ul class="dropdown-menu">
                            @foreach($infractions as $item)       
                                <li><a href="{{ route('infraction.code.details',($item->slug)) }}" itemprop="url">{{ $item->titre }}</a></li>
                            @endforeach  
                            </ul>
                    </li>
                        @foreach($domaines as $item)
                        <li><a href="{{ route('domaine.intervention.details',($item->slug)) }}" class="dropdown-item" itemprop="url">{{ $item->titre }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('avocat.automobile') }}" itemprop="url">Avocat Automobile </a></li>
                <li><a href="{{ route('paginate.articles') }}" itemprop="url">Blog</a></li>
                <li class="text-dark"><a href="{{ route('contact') }}" itemprop="url">Contact</a></li>
            </ul>
            </div>
        </nav>
    </div>
    <!-- /desktop version -->
    <div class="mobile_menu">
        <div class="mobile_menu_button open_mobile_menu">
            <i class="fas fa-bars" title="Menu"></i>
        </div>
        <div class="mobile_menu_wrap">
            <div class="mobile_menu_overlay open_mobile_menu"></div>
            <div class="mobile_menu_content">
                <div class="mobile_menu_close open_mobile_menu">
                    <i class="fas fa-window-close" title="Fermer"></i>
                </div>
                <div class="m-brand-logo text-center">
                 <a href="index.html"><img src="{{asset('frontend/assets/img/logo/logo-1.png')}}" alt="Cabinet d’avocats Karim EL OUAHI" title="Cabinet d’avocats Karim EL OUAHI"></a>
                </div>
                <nav class="main-navigation  clearfix ul-li" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                    <ul id="main-nav" class="navbar-nav clearfix">
                        <li class="theme-color"><a href="index.html" itemprop="url">Accueil</a></li>
                        <li class="dropdown text-dark">
                            <a href="#" itemprop="url">Domaines d'Intervention </a>
                            <ul class="dropdown-menu clearfix">
                            <li  class="dropdown"><a href="#"  class="dropdown-toggle" itemprop="url"> Infractions au code de la route</a>
                                    <ul class="dropdown-menu">
                                      @foreach($infractions as $item)       
                                       <li><a href="{{ route('infraction.code.details',($item->slug)) }}" itemprop="url">{{ $item->titre }}</a></li>
                                      @endforeach  
                                    </ul>
                            </li>
                            @foreach($domaines as $item)
                            <li><a href="{{ route('domaine.intervention.details',($item->slug)) }}" class="dropdown-item" itemprop="url">{{ $item->titre }}</a></li>
                            @endforeach
                            </ul>
                        </li>
                        <li><a href="index.html" itemprop="url">Avocat en droit routier </a></li>
                        <li><a href="index.html" itemprop="url">Blog</a></li>
                        <li class="text-dark"><a href="contact.html" itemprop="url">Contact</a></li>
                    </ul>
                </nav>
                <div class="free_call_nm">
                    <div class="m_call_icon text-center">
                        <i class="flaticon-smartphone" title="Mobile : +32 (0)485 37 40 42"></i>
                    </div>
                    <div class="m_call_text">
                        <span>APPELEZ-NOUS</span>
                        <strong><a href="tel:+32485374042">+32 (0)485 37 40 42</a></strong>
                    </div>
                </div>
                <div class="m_social_area text-center ul-li mb-3">
                    <div> <b>Rejoignez-nous sur:</b></div>
                    <ul>
                        <li><a href="https://wa.me/+32485374042" target="_blank" title="Whatsapp" class="text-grey"><i class="fab fa-whatsapp icon-color-2" style="font-size: 18px" title="Rejoignez-nous sur Whatsapp"></i></a></li>
                        <li class="m_fb"><a href="https://www.facebook.com/karim.elouahi.5" target="_blank" title="Facebook"><i class="fab fa-facebook-f icon-color-3" title="Rejoignez-nous sur Facebook"></i></a></li>
                        <li class="m_tw"><a href="https://twitter.com/karimelouahi?lang=fr" target="_blank" title="Twitter"><i class="fab fa-twitter icon-color-4" title="Rejoignez-nous sur Twitter"></i></a></li>
                    </ul>
                </div>
                <div class="m_get_quote">
                    <a href="index.html">Consultation gratuite</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /mobile menu -->
</header>