<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        }

        // google_map
        if ($pathinfo === '/map') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\MapController::indexAction',  '_route' => 'google_map',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/client_')) {
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
        if ($pathinfo === '/livraison') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\clientController\\CLivraisonController::indexAction',  '_route' => 'client_livraison',);
        }

        if (0 === strpos($pathinfo, '/enseigne_')) {
            // enseigne_index
            if ($pathinfo === '/enseigne_index') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\EIndexController::indexAction',  '_route' => 'enseigne_index',);
            }

            // enseigne_visite
            if ($pathinfo === '/enseigne_visite') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\VisitevirtuelleController::indexAction',  '_route' => 'enseigne_visite',);
            }

        }

        // redirection_mail
        if ($pathinfo === '/mail') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\TestMailController::redirectionAction',  '_route' => 'redirection_mail',);
        }

        // redirection_send
        if ($pathinfo === '/sendmail') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\TestMailController::sendmailAction',  '_route' => 'redirection_send',);
        }

        // produit_produit
        if ($pathinfo === '/produit_produit') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\ProduitController::indexAction',  '_route' => 'produit_produit',);
        }

        // produit_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_show')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\ProduitController::showAction',));
        }

        // produit_new
        if ($pathinfo === '/newP') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\ProduitController::newAction',  '_route' => 'produit_new',);
        }

        // produit_create
        if ($pathinfo === '/createP') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\ProduitController::createAction',  '_route' => 'produit_create',);
        }

        // produit_edit
        if (preg_match('#^/(?P<id>[^/]++)/editP$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_edit')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\ProduitController::editAction',));
        }

        // produit_update
        if (preg_match('#^/(?P<id>[^/]++)/updateP$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_update')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\ProduitController::updateAction',));
        }

        // produit_delete
        if (preg_match('#^/(?P<id>[^/]++)/deleteP$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\ProduitController::deleteAction',));
        }

        // supp
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\EEnseigneController::SupprimerAction',));
        }

        // modif
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modif')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\EEnseigneController::modifierAction',));
        }

        // affichage_page
        if ($pathinfo === '/enseigne') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\EEnseigneController::AjouterAction',  '_route' => 'affichage_page',);
        }

        // affichage_pageC
        if ($pathinfo === '/compte') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\ECompteController::AffichageAction',  '_route' => 'affichage_pageC',);
        }

        // suppC
        if (0 === strpos($pathinfo, '/deleteC') && preg_match('#^/deleteC/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppC')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\ECompteController::SupprimerAction',));
        }

        // validerC
        if (0 === strpos($pathinfo, '/validerC') && preg_match('#^/validerC/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'validerC')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\ECompteController::ValiderAction',));
        }

        // affichage_pageP
        if ($pathinfo === '/pub') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\EPacksController::AffichageAction',  '_route' => 'affichage_pageP',);
        }

        // validerP
        if (0 === strpos($pathinfo, '/validerP') && preg_match('#^/validerP/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'validerP')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\EPacksController::ValiderAction',));
        }

        // stats
        if ($pathinfo === '/stats') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\StatsController::chartAction',  '_route' => 'stats',);
        }

        // boutique_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutique_show')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\BoutiqueController::showAction',));
        }

        // boutique_new
        if ($pathinfo === '/newB') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\BoutiqueController::newAction',  '_route' => 'boutique_new',);
        }

        // boutique_create
        if ($pathinfo === '/createB') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\BoutiqueController::createAction',  '_route' => 'boutique_create',);
        }

        // boutique_edit
        if (preg_match('#^/(?P<id>[^/]++)/editB$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutique_edit')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\BoutiqueController::editAction',));
        }

        // boutique_update
        if (preg_match('#^/(?P<id>[^/]++)/updateB$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutique_update')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\BoutiqueController::updateAction',));
        }

        // boutique_delete
        if (preg_match('#^/(?P<id>[^/]++)/deleteB$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutique_delete')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\BoutiqueController::deleteAction',));
        }

        // enseigne_catalogue
        if ($pathinfo === '/catalogueq') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\CatalogueController::indexAction',  '_route' => 'enseigne_catalogue',);
        }

        // supp_catalogue
        if (0 === strpos($pathinfo, '/supp') && preg_match('#^/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_catalogue')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\CatalogueController::SupprimerAction',));
        }

        // ajout_catalogue
        if (0 === strpos($pathinfo, '/ajoutCatalogue') && preg_match('#^/ajoutCatalogue/(?P<id>[^/]++)/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout_catalogue')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\CatalogueController::AjoutAction',));
        }

        // voir_cata
        if ($pathinfo === '/voirCata') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\CatalogueController::voirCataAction',  '_route' => 'voir_cata',);
        }

        // enseigne_enseigne
        if ($pathinfo === '/enseigne_enseigne') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\EEnseigneController::indexAction',  '_route' => 'enseigne_enseigne',);
        }

        // enseigne_boutique
        if ($pathinfo === '/boutique') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\BoutiqueController::indexAction',  '_route' => 'enseigne_boutique',);
        }

        if (0 === strpos($pathinfo, '/fidelite')) {
            // enseigne_fid
            if ($pathinfo === '/fidelite') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\FideliteController::indexAction',  '_route' => 'enseigne_fid',);
            }

            // carte_edit
            if (0 === strpos($pathinfo, '/fideliteE') && preg_match('#^/fideliteE/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'carte_edit')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\FideliteController::editAction',));
            }

            // carte_update
            if (0 === strpos($pathinfo, '/fideliteU') && preg_match('#^/fideliteU/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'carte_update')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\FideliteController::updateAction',));
            }

            // carte_delete
            if (0 === strpos($pathinfo, '/fideliteD') && preg_match('#^/fideliteD/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'carte_delete')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\FideliteController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/fideliteA')) {
                // carte_ajout
                if ($pathinfo === '/fideliteAj') {
                    return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\FideliteController::newAction',  '_route' => 'carte_ajout',);
                }

                // carte_add
                if ($pathinfo === '/fideliteAd') {
                    return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\resEnsController\\FideliteController::createAction',  '_route' => 'carte_add',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // admin_index
            if ($pathinfo === '/admin_index') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\AIndexController::indexAction',  '_route' => 'admin_index',);
            }

            // Gestion
            if ($pathinfo === '/affich') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\UserController::listeAction',  '_route' => 'Gestion',);
            }

            if (0 === strpos($pathinfo, '/admin_')) {
                // admin_modif
                if (0 === strpos($pathinfo, '/admin_modif') && preg_match('#^/admin_modif/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_modif')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\UserController::modifierAction',));
                }

                // admin_activate
                if (0 === strpos($pathinfo, '/admin_activate') && preg_match('#^/admin_activate/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_activate')), array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\UserController::DebloquerUtilisateurAction',));
                }

            }

        }

        // _GraphicPie
        if ($pathinfo === '/pie') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\StatistiqueController::chartPieAction',  '_route' => '_GraphicPie',);
        }

        // _Demande
        if ($pathinfo === '/demande') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\UserController::demandeAction',  '_route' => '_Demande',);
        }

        // _creepack
        if ($pathinfo === '/creerpack') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\PackController::creerpackAction',  '_route' => '_creepack',);
        }

        if (0 === strpos($pathinfo, '/Affic')) {
            // ListePack
            if ($pathinfo === '/Afficher') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\PackController::listePAction',  '_route' => 'ListePack',);
            }

            // ListeComs
            if ($pathinfo === '/AfficComs') {
                return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\AindexController::commentaireAction',  '_route' => 'ListeComs',);
            }

        }

        // GraphicPie2
        if ($pathinfo === '/pie2') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\StatistiqueController::chartPie2Action',  '_route' => 'GraphicPie2',);
        }

        // Somme
        if ($pathinfo === '/somme') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\AindexController::SumPAction',  '_route' => 'Somme',);
        }

        // admin_produit
        if ($pathinfo === '/admin_produit') {
            return array (  '_controller' => 'TunisiaMall\\TMBundle\\Controller\\adminController\\AProduitController::indexAction',  '_route' => 'admin_produit',);
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
