<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/article')) {
            // article_index
            if ('/article' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_article_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'article_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article_index',);
            }
            not_article_index:

            // article_new
            if ('/article/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_article_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
            }
            not_article_new:

            // article_show
            if (preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_article_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::showAction',));
            }
            not_article_show:

            // article_edit
            if (preg_match('#^/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_article_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::editAction',));
            }
            not_article_edit:

            // article_delete
            if (preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_article_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::deleteAction',));
            }
            not_article_delete:

        }

        elseif (0 === strpos($pathinfo, '/compagnie')) {
            // compagnie_index
            if ('/compagnie' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_compagnie_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'compagnie_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CompagnieController::indexAction',  '_route' => 'compagnie_index',);
            }
            not_compagnie_index:

            // compagnie_new
            if ('/compagnie/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_compagnie_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CompagnieController::newAction',  '_route' => 'compagnie_new',);
            }
            not_compagnie_new:

            // compagnie_show
            if (preg_match('#^/compagnie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_compagnie_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compagnie_show')), array (  '_controller' => 'AppBundle\\Controller\\CompagnieController::showAction',));
            }
            not_compagnie_show:

            // compagnie_edit
            if (preg_match('#^/compagnie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_compagnie_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compagnie_edit')), array (  '_controller' => 'AppBundle\\Controller\\CompagnieController::editAction',));
            }
            not_compagnie_edit:

            // compagnie_delete
            if (preg_match('#^/compagnie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_compagnie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compagnie_delete')), array (  '_controller' => 'AppBundle\\Controller\\CompagnieController::deleteAction',));
            }
            not_compagnie_delete:

        }

        elseif (0 === strpos($pathinfo, '/croisiere')) {
            // croisiere_index
            if ('/croisiere' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_croisiere_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'croisiere_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CroisiereController::indexAction',  '_route' => 'croisiere_index',);
            }
            not_croisiere_index:

            // croisiere_new
            if ('/croisiere/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_croisiere_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CroisiereController::newAction',  '_route' => 'croisiere_new',);
            }
            not_croisiere_new:

            // croisiere_show
            if (preg_match('#^/croisiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_croisiere_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'croisiere_show')), array (  '_controller' => 'AppBundle\\Controller\\CroisiereController::showAction',));
            }
            not_croisiere_show:

            // croisiere_edit
            if (preg_match('#^/croisiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_croisiere_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'croisiere_edit')), array (  '_controller' => 'AppBundle\\Controller\\CroisiereController::editAction',));
            }
            not_croisiere_edit:

            // croisiere_delete
            if (preg_match('#^/croisiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_croisiere_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'croisiere_delete')), array (  '_controller' => 'AppBundle\\Controller\\CroisiereController::deleteAction',));
            }
            not_croisiere_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/experience')) {
            // experience_index
            if ('/experience' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_experience_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'experience_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ExperienceController::indexAction',  '_route' => 'experience_index',);
            }
            not_experience_index:

            // experience_new
            if ('/experience/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_experience_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ExperienceController::newAction',  '_route' => 'experience_new',);
            }
            not_experience_new:

            // experience_show
            if (preg_match('#^/experience/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_experience_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_show')), array (  '_controller' => 'AppBundle\\Controller\\ExperienceController::showAction',));
            }
            not_experience_show:

            // experience_edit
            if (preg_match('#^/experience/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_experience_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_edit')), array (  '_controller' => 'AppBundle\\Controller\\ExperienceController::editAction',));
            }
            not_experience_edit:

            // experience_delete
            if (preg_match('#^/experience/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_experience_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'experience_delete')), array (  '_controller' => 'AppBundle\\Controller\\ExperienceController::deleteAction',));
            }
            not_experience_delete:

        }

        elseif (0 === strpos($pathinfo, '/favoris')) {
            // favoris_index
            if ('/favoris' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_favoris_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'favoris_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FavorisController::indexAction',  '_route' => 'favoris_index',);
            }
            not_favoris_index:

            // favoris_new
            if ('/favoris/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_favoris_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FavorisController::newAction',  '_route' => 'favoris_new',);
            }
            not_favoris_new:

            // favoris_show
            if (preg_match('#^/favoris/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_favoris_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_show')), array (  '_controller' => 'AppBundle\\Controller\\FavorisController::showAction',));
            }
            not_favoris_show:

            // favoris_edit
            if (preg_match('#^/favoris/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_favoris_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_edit')), array (  '_controller' => 'AppBundle\\Controller\\FavorisController::editAction',));
            }
            not_favoris_edit:

            // favoris_delete
            if (preg_match('#^/favoris/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_favoris_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_delete')), array (  '_controller' => 'AppBundle\\Controller\\FavorisController::deleteAction',));
            }
            not_favoris_delete:

        }

        elseif (0 === strpos($pathinfo, '/guide')) {
            // guide_index
            if ('/guide' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_guide_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'guide_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\GuideController::indexAction',  '_route' => 'guide_index',);
            }
            not_guide_index:

            // guide_new
            if ('/guide/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_guide_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\GuideController::newAction',  '_route' => 'guide_new',);
            }
            not_guide_new:

            // guide_show
            if (preg_match('#^/guide/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_guide_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'guide_show')), array (  '_controller' => 'AppBundle\\Controller\\GuideController::showAction',));
            }
            not_guide_show:

            // guide_edit
            if (preg_match('#^/guide/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_guide_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'guide_edit')), array (  '_controller' => 'AppBundle\\Controller\\GuideController::editAction',));
            }
            not_guide_edit:

            // guide_delete
            if (preg_match('#^/guide/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_guide_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'guide_delete')), array (  '_controller' => 'AppBundle\\Controller\\GuideController::deleteAction',));
            }
            not_guide_delete:

        }

        elseif (0 === strpos($pathinfo, '/hotel')) {
            // hotel_index
            if ('/hotel' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_hotel_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'hotel_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\HotelController::indexAction',  '_route' => 'hotel_index',);
            }
            not_hotel_index:

            // hotel_new
            if ('/hotel/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_hotel_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\HotelController::newAction',  '_route' => 'hotel_new',);
            }
            not_hotel_new:

            // hotel_show
            if (preg_match('#^/hotel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_hotel_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_show')), array (  '_controller' => 'AppBundle\\Controller\\HotelController::showAction',));
            }
            not_hotel_show:

            // hotel_edit
            if (preg_match('#^/hotel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_hotel_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_edit')), array (  '_controller' => 'AppBundle\\Controller\\HotelController::editAction',));
            }
            not_hotel_edit:

            // hotel_delete
            if (preg_match('#^/hotel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_hotel_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_delete')), array (  '_controller' => 'AppBundle\\Controller\\HotelController::deleteAction',));
            }
            not_hotel_delete:

        }

        elseif (0 === strpos($pathinfo, '/pays')) {
            // pays_index
            if ('/pays' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pays_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'pays_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PaysController::indexAction',  '_route' => 'pays_index',);
            }
            not_pays_index:

            // pays_new
            if ('/pays/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_pays_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PaysController::newAction',  '_route' => 'pays_new',);
            }
            not_pays_new:

            // pays_show
            if (preg_match('#^/pays/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pays_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_show')), array (  '_controller' => 'AppBundle\\Controller\\PaysController::showAction',));
            }
            not_pays_show:

            // pays_edit
            if (preg_match('#^/pays/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_pays_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_edit')), array (  '_controller' => 'AppBundle\\Controller\\PaysController::editAction',));
            }
            not_pays_edit:

            // pays_delete
            if (preg_match('#^/pays/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_pays_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_delete')), array (  '_controller' => 'AppBundle\\Controller\\PaysController::deleteAction',));
            }
            not_pays_delete:

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/recommendation')) {
                // recommendation_index
                if ('/recommendation' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_recommendation_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'recommendation_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RecommendationController::indexAction',  '_route' => 'recommendation_index',);
                }
                not_recommendation_index:

                // recommendation_new
                if ('/recommendation/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_recommendation_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RecommendationController::newAction',  '_route' => 'recommendation_new',);
                }
                not_recommendation_new:

                // recommendation_show
                if (preg_match('#^/recommendation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_recommendation_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recommendation_show')), array (  '_controller' => 'AppBundle\\Controller\\RecommendationController::showAction',));
                }
                not_recommendation_show:

                // recommendation_edit
                if (preg_match('#^/recommendation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_recommendation_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recommendation_edit')), array (  '_controller' => 'AppBundle\\Controller\\RecommendationController::editAction',));
                }
                not_recommendation_edit:

                // recommendation_delete
                if (preg_match('#^/recommendation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_recommendation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recommendation_delete')), array (  '_controller' => 'AppBundle\\Controller\\RecommendationController::deleteAction',));
                }
                not_recommendation_delete:

            }

            elseif (0 === strpos($pathinfo, '/restaurant')) {
                // restaurant_index
                if ('/restaurant' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_restaurant_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'restaurant_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::indexAction',  '_route' => 'restaurant_index',);
                }
                not_restaurant_index:

                // restaurant_new
                if ('/restaurant/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_restaurant_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::newAction',  '_route' => 'restaurant_new',);
                }
                not_restaurant_new:

                // restaurant_show
                if (preg_match('#^/restaurant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_restaurant_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_show')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::showAction',));
                }
                not_restaurant_show:

                // restaurant_edit
                if (preg_match('#^/restaurant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_restaurant_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_edit')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::editAction',));
                }
                not_restaurant_edit:

                // restaurant_delete
                if (preg_match('#^/restaurant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_restaurant_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'restaurant_delete')), array (  '_controller' => 'AppBundle\\Controller\\RestaurantController::deleteAction',));
                }
                not_restaurant_delete:

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/service')) {
            // service_index
            if ('/service' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_service_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'service_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ServiceController::indexAction',  '_route' => 'service_index',);
            }
            not_service_index:

            // service_new
            if ('/service/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_service_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ServiceController::newAction',  '_route' => 'service_new',);
            }
            not_service_new:

            // service_show
            if (preg_match('#^/service/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_service_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_show')), array (  '_controller' => 'AppBundle\\Controller\\ServiceController::showAction',));
            }
            not_service_show:

            // service_edit
            if (preg_match('#^/service/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_service_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_edit')), array (  '_controller' => 'AppBundle\\Controller\\ServiceController::editAction',));
            }
            not_service_edit:

            // service_delete
            if (preg_match('#^/service/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_service_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_delete')), array (  '_controller' => 'AppBundle\\Controller\\ServiceController::deleteAction',));
            }
            not_service_delete:

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            // user_index
            if ('/user' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ('/user/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        elseif (0 === strpos($pathinfo, '/v')) {
            if (0 === strpos($pathinfo, '/ville')) {
                // ville_index
                if ('/ville' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_ville_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'ville_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\VilleController::indexAction',  '_route' => 'ville_index',);
                }
                not_ville_index:

                // ville_new
                if ('/ville/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_ville_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\VilleController::newAction',  '_route' => 'ville_new',);
                }
                not_ville_new:

                // ville_show
                if (preg_match('#^/ville/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_ville_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_show')), array (  '_controller' => 'AppBundle\\Controller\\VilleController::showAction',));
                }
                not_ville_show:

                // ville_edit
                if (preg_match('#^/ville/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_ville_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_edit')), array (  '_controller' => 'AppBundle\\Controller\\VilleController::editAction',));
                }
                not_ville_edit:

                // ville_delete
                if (preg_match('#^/ville/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_ville_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_delete')), array (  '_controller' => 'AppBundle\\Controller\\VilleController::deleteAction',));
                }
                not_ville_delete:

            }

            elseif (0 === strpos($pathinfo, '/vol')) {
                // vol_index
                if ('/vol' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_vol_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'vol_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\VolController::indexAction',  '_route' => 'vol_index',);
                }
                not_vol_index:

                // vol_new
                if ('/vol/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_vol_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\VolController::newAction',  '_route' => 'vol_new',);
                }
                not_vol_new:

                // vol_show
                if (preg_match('#^/vol/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_vol_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vol_show')), array (  '_controller' => 'AppBundle\\Controller\\VolController::showAction',));
                }
                not_vol_show:

                // vol_edit
                if (preg_match('#^/vol/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_vol_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vol_edit')), array (  '_controller' => 'AppBundle\\Controller\\VolController::editAction',));
                }
                not_vol_edit:

                // vol_delete
                if (preg_match('#^/vol/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_vol_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vol_delete')), array (  '_controller' => 'AppBundle\\Controller\\VolController::deleteAction',));
                }
                not_vol_delete:

            }

            elseif (0 === strpos($pathinfo, '/voyage')) {
                // voyage_index
                if ('/voyage' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_voyage_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'voyage_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\VoyageController::indexAction',  '_route' => 'voyage_index',);
                }
                not_voyage_index:

                // voyage_new
                if ('/voyage/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_voyage_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\VoyageController::newAction',  '_route' => 'voyage_new',);
                }
                not_voyage_new:

                // voyage_show
                if (preg_match('#^/voyage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_voyage_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'voyage_show')), array (  '_controller' => 'AppBundle\\Controller\\VoyageController::showAction',));
                }
                not_voyage_show:

                // voyage_edit
                if (preg_match('#^/voyage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_voyage_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'voyage_edit')), array (  '_controller' => 'AppBundle\\Controller\\VoyageController::editAction',));
                }
                not_voyage_edit:

                // voyage_delete
                if (preg_match('#^/voyage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_voyage_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'voyage_delete')), array (  '_controller' => 'AppBundle\\Controller\\VoyageController::deleteAction',));
                }
                not_voyage_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
