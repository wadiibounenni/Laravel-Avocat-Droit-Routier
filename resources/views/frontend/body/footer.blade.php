@php
    $controller = app()->make('App\Http\Controllers\frontend\InfractionCodeController');
    $infractions = $controller->ListeInfractions()->getData()['infractions'];
@endphp
<footer id="footer_area" class="footer_section relative-position"  itemscope="itemscope" itemtype="https://schema.org/WPFooter">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="footer_content">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="footer_widget headline">
                        <div class="widget_title">
                            <span class="title_shape_left"></span>
                            À propos
                        </div>
                        <div class="widget_footer_text">
                            Infraction routière ? Faites appel à un avocat expérimenté et pratiquant pour vous défendre partout en Belgique...
                        </div>
                        <div class="footer_app_btn">
                            <a href="{{ route('home') }}">Lire la suite</a>
                        </div>
                        <p class="mt-5 text-light"><i class="fa fa-sitemap theme-color" title="Plan de site"></i> <a href="{{ route('plan.de.site') }}">Plan de site</a> </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="footer_widget headline">
                        <div class="widget_title">
                            <span class="title_shape_left"></span>
                            Infractions au code de la route
                        </div>
                        <div class="practice_list ul-li-block clearfix">
                            <ul>
                                @foreach ($infractions as $item)
                                <li><a href="{{ url('/infractions-code-route/' . $item->slug) }}">{{$item->titre}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="footer_widget headline">
                        <div class="widget_title">
                            <span class="title_shape_left"></span>
                            Contactez-nous
                        </div>
                        <div class="latest-blog-widget">
                            <div class="blog-img-content">
                                <div class="blog-text headline">
                                    <span class="blog-meta"><i class="fas fa-map-marker-alt theme-color" title="Adresse: BOULEVARD LÉOPOLD II 241, 1081 BRUXELLES"></i>
                                     <span itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">Boulevard Léopold II</span> <span itemprop="postalCode"> 241,</span> <span itemprop="addressRegion">1081 Bruxelles</span></span>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-img-content">
                                <div class="blog-text headline">
                                    <span class="blog-meta"><i class="fas fa-mobile-alt theme-color" title="Mobile: +32 (0)485 37 40 42"></i> <a href="tel:+32485374042"> +32 (0)485 37 40 42</a></span>
                                </div>
                            </div>
                            <div class="blog-img-content">
                                <div class="blog-text headline">
                                    <span class="blog-meta"><i class="fas fa-phone theme-color" title="Téléphone: +32 (0)2 426 22 02"></i> <a href="tel:+3224262202">+32 (0)2 426 22 02</a></span>
                                </div>
                            </div>
                            <div class="blog-img-content">
                                <div class="blog-text headline">
                                    <span class="blog-meta"><i class="fas fa-fax theme-color" title="Fax: +32 (0)2 420 30 00"></i> +32 (0)2 420 30 00</span>
                                </div>
                            </div>
                            <div class="blog-img-content">
                                <div class="blog-text headline">
                                    <span class="blog-meta"><i class="far fa-envelope theme-color" title="Email: k.el.ouahi@avocat.be"></i> <a href="mailto:k.el.ouahi@avocat.be">k.el.ouahi@avocat.be</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="footer_widget headline">
                        <div class="widget_title">
                            <div class="footer_logo text-center">
                                <a href="index.html"><img src="{{asset('frontend/assets/img/logo/logofooter.png')}}" alt="Cabinet d’avocats EL OUAHI" title="Cabinet d’avocats EL OUAHI"></a>
                            </div>
                        </div>
                        <div class="latest-blog-widget">
                            <div class="blog-img-content">
                                <div class="blog-text headline">
                                    <span class="blog-meta"><i class="far fa-address-card" title="Compte professionnel :"></i> Compte professionnel :</span>
                                    <h4>630-0246286-62<br>
                                        IBAN BE51 6300-24628662<br>
                                        BIC: BBRUBEBB</h4>
                                </div>
                            </div>
                            <div class="blog-img-content">
                                <div class="blog-text headline">
                                    <span class="blog-meta"><i class="far fa-address-card" title="Compte Carpa :"></i> Compte Carpa :</span>
                                    <h4>630-3208288-72<br>
                                        IBAN BE38 6303 2082 8872<br>
                                        BIC: BBRUBEBB</h4>
                                </div>
                            </div>
                            <div class="blog-img-content">
                                <div class="blog-text headline">
                                    <span class="blog-meta"><i class="far fa-building" title="N° TVA 0742.776.807"></i> N° TVA 0742.776.807</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
