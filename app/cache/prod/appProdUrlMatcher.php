<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // tunisia_mall_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tunisia_mall_user_homepage')), array (  '_controller' => 'TunisiaMall\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/client_index')) {
            // client_index
            if ($pathinfo === '/client_index') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CIndexController::indexAction',  '_route' => 'client_index',);
            }

            // client_index_modif
            if ($pathinfo === '/client_index_modif') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CIndexController::indexModifAction',  '_route' => 'client_index_modif',);
            }

        }

        // admin_user_search
        if ($pathinfo === '/admin_user_searc') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CIndexController::handlerAction',  '_route' => 'admin_user_search',);
        }

        // ville
        if (0 === strpos($pathinfo, '/villes') && preg_match('#^/villes/(?P<cp>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CIndexController::villesAction',));
        }

        // demands
        if ($pathinfo === '/demands') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CIndexController::demandsAction',  '_route' => 'demands',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/client_')) {
                if (0 === strpos($pathinfo, '/client_produit')) {
                    // client_produit
                    if ($pathinfo === '/client_produit') {
                        return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CProduitController::indexAction',  '_route' => 'client_produit',);
                    }

                    // client_produitByBout
                    if (preg_match('#^/client_produit(?P<idBoutique>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_produitByBout')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CProduitController::indexByBoutAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/client_boutique')) {
                    // client_boutique
                    if ($pathinfo === '/client_boutique') {
                        return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CBoutiqueController::indexAction',  '_route' => 'client_boutique',);
                    }

                    // client_boutiqueByEns
                    if (0 === strpos($pathinfo, '/client_boutiqueByEns') && preg_match('#^/client_boutiqueByEns/(?P<nomEnseigne>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_boutiqueByEns')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CBoutiqueController::indexByEnsAction',));
                    }

                }

                // client_enseigne
                if ($pathinfo === '/client_enseigne') {
                    return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CEnseigneController::indexAction',  '_route' => 'client_enseigne',);
                }

                // client_panier
                if ($pathinfo === '/client_panier') {
                    return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CPanierController::panierAction',  '_route' => 'client_panier',);
                }

                // client_ajoutPanier
                if (0 === strpos($pathinfo, '/client_ajoutPanier') && preg_match('#^/client_ajoutPanier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_ajoutPanier')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CPanierController::ajoutPanierAction',));
                }

                // client_modifPanier
                if (0 === strpos($pathinfo, '/client_modifPanier') && preg_match('#^/client_modifPanier/(?P<id>[^/]++)/(?P<taille>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_modifPanier')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CPanierController::modifPanierAction',));
                }

                // client_supprimerPanier
                if (0 === strpos($pathinfo, '/client_supprimerPanier') && preg_match('#^/client_supprimerPanier/(?P<id>[^/]++)/(?P<taille>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_supprimerPanier')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CPanierController::supprimerPanierAction',));
                }

            }

            if (0 === strpos($pathinfo, '/catalogue')) {
                // client_catalogue
                if ($pathinfo === '/catalogue') {
                    return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CCatalogueController::indexAction',  '_route' => 'client_catalogue',);
                }

                // client_catalogue_produits
                if (0 === strpos($pathinfo, '/catalogues') && preg_match('#^/catalogues/(?P<idCatalogue>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_catalogue_produits')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CCatalogueController::afficherAction',));
                }

            }

        }

        // client_livraison
        if (0 === strpos($pathinfo, '/livraison') && preg_match('#^/livraison/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_livraison')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CLivraisonController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/enseigne_')) {
            // enseigne_index
            if ($pathinfo === '/enseigne_index') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\EIndexController::indexAction',  '_route' => 'enseigne_index',);
            }

            // enseigne_produit
            if ($pathinfo === '/enseigne_produit') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\EProduitController::indexAction',  '_route' => 'enseigne_produit',);
            }

        }

        if (0 === strpos($pathinfo, '/boutique_')) {
            // boutique_index
            if ($pathinfo === '/boutique_index') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resBoutController\\BIndexController::indexAction',  '_route' => 'boutique_index',);
            }

            // boutique_produit
            if ($pathinfo === '/boutique_produit') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resBoutController\\BProduitController::indexAction',  '_route' => 'boutique_produit',);
            }

        }

        if (0 === strpos($pathinfo, '/admin_')) {
            // admin_index
            if ($pathinfo === '/admin_index') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\AIndexController::indexAction',  '_route' => 'admin_index',);
            }

            // admin_produit
            if ($pathinfo === '/admin_produit') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\AProduitController::indexAction',  '_route' => 'admin_produit',);
            }

        }

        // tunisia_mall_tm_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tunisia_mall_tm_homepage')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\DefaultController::indexAction',));
        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'TunisiaMallTMBundle:Controller:clientController:CLivraison:index',  '_route' => 'index',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/auth') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
            }

            return array (  '_controller' => 'TunisiaMall\\UserBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // hwi_oauth_connect_service
            if (0 === strpos($pathinfo, '/login/service') && preg_match('#^/login/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_service')), array (  '_controller' => 'TunisiaMall\\UserBundle\\Controller\\ConnectController::connectServiceAction',));
            }

            // hwi_oauth_connect_registration
            if (0 === strpos($pathinfo, '/login/registration') && preg_match('#^/login/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_registration')), array (  '_controller' => 'TunisiaMall\\UserBundle\\Controller\\ConnectController::registrationAction',));
            }

            // hwi_oauth_service_redirect
            if (0 === strpos($pathinfo, '/loginredirect') && preg_match('#^/loginredirect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'TunisiaMall\\UserBundle\\Controller\\ConnectController::redirectToServiceAction',));
            }

            if (0 === strpos($pathinfo, '/login/check-')) {
                // facebook_login
                if ($pathinfo === '/login/check-facebook') {
                    return array('_route' => 'facebook_login');
                }

                // google_login
                if ($pathinfo === '/login/check-google') {
                    return array('_route' => 'google_login');
                }

                // instagram_login
                if ($pathinfo === '/login/check-instagram') {
                    return array('_route' => 'instagram_login');
                }

                // twitter_login
                if ($pathinfo === '/login/check-twitter') {
                    return array('_route' => 'twitter_login');
                }

                // windows_live
                if ($pathinfo === '/login/check-windows_live') {
                    return array('_route' => 'windows_live');
                }

                // github_login
                if ($pathinfo === '/login/check-github') {
                    return array('_route' => 'github_login');
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
