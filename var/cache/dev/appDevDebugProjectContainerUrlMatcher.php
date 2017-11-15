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

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/css')) {
                if (0 === strpos($pathinfo, '/css/f')) {
                    // _assetic_f78bbf2
                    if ('/css/f78bbf2.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f78bbf2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f78bbf2',);
                    }

                    if (0 === strpos($pathinfo, '/css/f78bbf2_')) {
                        // _assetic_f78bbf2_0
                        if ('/css/f78bbf2_bootstrap.min_1.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f78bbf2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f78bbf2_0',);
                        }

                        // _assetic_f78bbf2_1
                        if ('/css/f78bbf2_jquery-ui_2.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f78bbf2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_f78bbf2_1',);
                        }

                        // _assetic_f78bbf2_2
                        if ('/css/f78bbf2_contact_3.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f78bbf2',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_f78bbf2_2',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/css/ff8fa9a')) {
                        // _assetic_ff8fa9a
                        if ('/css/ff8fa9a.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ff8fa9a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ff8fa9a',);
                        }

                        // _assetic_ff8fa9a_0
                        if ('/css/ff8fa9a_profile_1.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ff8fa9a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ff8fa9a_0',);
                        }

                        // _assetic_ff8fa9a_1
                        if ('/css/ff8fa9a_jquery.bsPhotoGallery_2.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ff8fa9a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_ff8fa9a_1',);
                        }

                    }

                }

                // _assetic_7f23e6e
                if ('/css/7f23e6e.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7f23e6e',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7f23e6e',);
                }

                // _assetic_7f23e6e_0
                if ('/css/7f23e6e_register_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7f23e6e',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7f23e6e_0',);
                }

                if (0 === strpos($pathinfo, '/css/63')) {
                    // _assetic_63b1450
                    if ('/css/63b1450.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '63b1450',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_63b1450',);
                    }

                    // _assetic_63b1450_0
                    if ('/css/63b1450_login_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '63b1450',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_63b1450_0',);
                    }

                    // _assetic_637d470
                    if ('/css/637d470.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '637d470',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_637d470',);
                    }

                    // _assetic_637d470_0
                    if ('/css/637d470_admin_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '637d470',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_637d470_0',);
                    }

                }

                // _assetic_8197b1e
                if ('/css/8197b1e.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8197b1e',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8197b1e',);
                }

                // _assetic_8197b1e_0
                if ('/css/8197b1e_contact_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8197b1e',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8197b1e_0',);
                }

                if (0 === strpos($pathinfo, '/css/1')) {
                    // _assetic_16c42ac
                    if ('/css/16c42ac.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '16c42ac',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_16c42ac',);
                    }

                    // _assetic_16c42ac_0
                    if ('/css/16c42ac_fiche-bird_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '16c42ac',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_16c42ac_0',);
                    }

                    // _assetic_1e9a299
                    if ('/css/1e9a299.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1e9a299',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1e9a299',);
                    }

                    if (0 === strpos($pathinfo, '/css/1e9a299_')) {
                        // _assetic_1e9a299_0
                        if ('/css/1e9a299_bootstrap.min_1.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1e9a299',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1e9a299_0',);
                        }

                        // _assetic_1e9a299_1
                        if ('/css/1e9a299_jquery-ui_2.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1e9a299',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_1e9a299_1',);
                        }

                        // _assetic_1e9a299_2
                        if ('/css/1e9a299_main_3.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1e9a299',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_1e9a299_2',);
                        }

                        // _assetic_1e9a299_3
                        if ('/css/1e9a299_second-menu_4.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1e9a299',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_1e9a299_3',);
                        }

                        // _assetic_1e9a299_4
                        if ('/css/1e9a299_header_5.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1e9a299',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_1e9a299_4',);
                        }

                        // _assetic_1e9a299_5
                        if ('/css/1e9a299_footer_6.css' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1e9a299',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_1e9a299_5',);
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/css/b')) {
                    // _assetic_b487b39
                    if ('/css/b487b39.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b487b39',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b487b39',);
                    }

                    // _assetic_b487b39_0
                    if ('/css/b487b39_home_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b487b39',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b487b39_0',);
                    }

                    // _assetic_b1723ba
                    if ('/css/b1723ba.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b1723ba',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b1723ba',);
                    }

                    // _assetic_b1723ba_0
                    if ('/css/b1723ba_observation_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b1723ba',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b1723ba_0',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/css/a86de9d')) {
                    // _assetic_a86de9d
                    if ('/css/a86de9d.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a86de9d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a86de9d',);
                    }

                    // _assetic_a86de9d_0
                    if ('/css/a86de9d_search_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a86de9d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a86de9d_0',);
                    }

                    // _assetic_a86de9d_1
                    if ('/css/a86de9d_jcarousel.responsive_2.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a86de9d',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_a86de9d_1',);
                    }

                }

            }

            // app_contact
            if ('/contact' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_app_contact;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CoreController::contactAction',  '_route' => 'app_contact',);
            }
            not_app_contact:

            // fos_user_security_login
            if ('/connexion' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

        }

        elseif (0 === strpos($pathinfo, '/images')) {
            // _assetic_c41fd8c
            if ('/images/c41fd8c.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c41fd8c',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_c41fd8c',);
            }

            // _assetic_c41fd8c_0
            if ('/images/c41fd8c_logo_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c41fd8c',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_c41fd8c_0',);
            }

            if (0 === strpos($pathinfo, '/images/4')) {
                // _assetic_436d7cf
                if ('/images/436d7cf.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '436d7cf',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_436d7cf',);
                }

                // _assetic_436d7cf_0
                if ('/images/436d7cf_register_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '436d7cf',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_436d7cf_0',);
                }

                // _assetic_4005668
                if ('/images/4005668.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 4005668,  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_4005668',);
                }

                // _assetic_4005668_0
                if ('/images/4005668_profile-green-owl_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 4005668,  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_4005668_0',);
                }

                // _assetic_494d23b
                if ('/images/494d23b.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '494d23b',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_494d23b',);
                }

                // _assetic_494d23b_0
                if ('/images/494d23b_profile-blue-owl_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '494d23b',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_494d23b_0',);
                }

                // _assetic_44a4ae9
                if ('/images/44a4ae9.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '44a4ae9',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_44a4ae9',);
                }

                // _assetic_44a4ae9_0
                if ('/images/44a4ae9_observation_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '44a4ae9',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_44a4ae9_0',);
                }

            }

            elseif (0 === strpos($pathinfo, '/images/9')) {
                // _assetic_9938540
                if ('/images/9938540.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 9938540,  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_9938540',);
                }

                // _assetic_9938540_0
                if ('/images/9938540_login_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 9938540,  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_9938540_0',);
                }

                // _assetic_958c526
                if ('/images/958c526.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '958c526',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_958c526',);
                }

                // _assetic_958c526_0
                if ('/images/958c526_slide-observation_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '958c526',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_958c526_0',);
                }

                // _assetic_9c49391
                if ('/images/9c49391.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9c49391',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_9c49391',);
                }

                // _assetic_9c49391_0
                if ('/images/9c49391_header-middle-text_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9c49391',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_9c49391_0',);
                }

            }

            elseif (0 === strpos($pathinfo, '/images/f')) {
                // _assetic_f4de464
                if ('/images/f4de464.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4de464',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_f4de464',);
                }

                // _assetic_f4de464_0
                if ('/images/f4de464_profile-edit_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4de464',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_f4de464_0',);
                }

                // _assetic_fc0c9bf
                if ('/images/fc0c9bf.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc0c9bf',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_fc0c9bf',);
                }

                // _assetic_fc0c9bf_0
                if ('/images/fc0c9bf_slide-search_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc0c9bf',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_fc0c9bf_0',);
                }

            }

            // _assetic_7ff1063
            if ('/images/7ff1063.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ff1063',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_7ff1063',);
            }

            // _assetic_7ff1063_0
            if ('/images/7ff1063_separator-angle_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ff1063',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_7ff1063_0',);
            }

            // _assetic_abfb105
            if ('/images/abfb105.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'abfb105',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_abfb105',);
            }

            // _assetic_abfb105_0
            if ('/images/abfb105_profile-red-owl_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'abfb105',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_abfb105_0',);
            }

            // _assetic_b761f5e
            if ('/images/b761f5e.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b761f5e',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_b761f5e',);
            }

            // _assetic_b761f5e_0
            if ('/images/b761f5e_profile_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b761f5e',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_b761f5e_0',);
            }

            if (0 === strpos($pathinfo, '/images/8')) {
                // _assetic_8189e75
                if ('/images/8189e75.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8189e75',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_8189e75',);
                }

                // _assetic_8189e75_0
                if ('/images/8189e75_profile-photo-icon_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8189e75',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_8189e75_0',);
                }

                // _assetic_8540466
                if ('/images/8540466.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 8540466,  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_8540466',);
                }

                // _assetic_8540466_0
                if ('/images/8540466_project_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 8540466,  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_8540466_0',);
                }

                // _assetic_8cb0e91
                if ('/images/8cb0e91.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8cb0e91',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_8cb0e91',);
                }

                // _assetic_8cb0e91_0
                if ('/images/8cb0e91_header-birds-text_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8cb0e91',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_8cb0e91_0',);
                }

            }

            // _assetic_58749e8
            if ('/images/58749e8.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '58749e8',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_58749e8',);
            }

            // _assetic_58749e8_0
            if ('/images/58749e8_slide-project_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '58749e8',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_58749e8_0',);
            }

            // _assetic_36110ac
            if ('/images/36110ac.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '36110ac',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_36110ac',);
            }

            // _assetic_36110ac_0
            if ('/images/36110ac_search_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '36110ac',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_36110ac_0',);
            }

            // _assetic_e9aa0c0
            if ('/images/e9aa0c0.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e9aa0c0',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_e9aa0c0',);
            }

            // _assetic_e9aa0c0_0
            if ('/images/e9aa0c0_contact_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e9aa0c0',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_e9aa0c0_0',);
            }

            // _assetic_d0ea0cc
            if ('/images/d0ea0cc.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0ea0cc',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_d0ea0cc',);
            }

            // _assetic_d0ea0cc_0
            if ('/images/d0ea0cc_logout_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0ea0cc',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_d0ea0cc_0',);
            }

        }

        elseif (0 === strpos($pathinfo, '/inscription')) {
            // fos_user_registration_register
            if ('/inscription' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/inscription/verification-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/inscription/confirmation')) {
                // fos_user_registration_confirm
                if (preg_match('#^/inscription/confirmation/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/inscription/confirmation-faite' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/73')) {
                // _assetic_73a2b32
                if ('/js/73a2b32.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '73a2b32',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_73a2b32',);
                }

                // _assetic_73a2b32_0
                if ('/js/73a2b32_register_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '73a2b32',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_73a2b32_0',);
                }

                if (0 === strpos($pathinfo, '/js/73b1c88')) {
                    // _assetic_73b1c88
                    if ('/js/73b1c88.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '73b1c88',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_73b1c88',);
                    }

                    // _assetic_73b1c88_0
                    if ('/js/73b1c88_jquery.jcarousel.min_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '73b1c88',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_73b1c88_0',);
                    }

                    // _assetic_73b1c88_1
                    if ('/js/73b1c88_jcarousel.responsive_2.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '73b1c88',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_73b1c88_1',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/js/a')) {
                // _assetic_a7b7d14
                if ('/js/a7b7d14.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7b7d14',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a7b7d14',);
                }

                // _assetic_a7b7d14_0
                if ('/js/a7b7d14_login_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7b7d14',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a7b7d14_0',);
                }

                // _assetic_a16b12d
                if ('/js/a16b12d.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a16b12d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a16b12d',);
                }

                // _assetic_a16b12d_0
                if ('/js/a16b12d_parsley.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a16b12d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a16b12d_0',);
                }

            }

            elseif (0 === strpos($pathinfo, '/js/5e31e4c')) {
                // _assetic_5e31e4c
                if ('/js/5e31e4c.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5e31e4c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5e31e4c',);
                }

                // _assetic_5e31e4c_0
                if ('/js/5e31e4c_profile_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5e31e4c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5e31e4c_0',);
                }

                // _assetic_5e31e4c_1
                if ('/js/5e31e4c_jquery.bsPhotoGallery_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5e31e4c',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5e31e4c_1',);
                }

            }

            // _assetic_2f5ea75
            if ('/js/2f5ea75.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2f5ea75',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2f5ea75',);
            }

            if (0 === strpos($pathinfo, '/js/2f5ea75_')) {
                // _assetic_2f5ea75_0
                if ('/js/2f5ea75_jquery-3.2.1.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2f5ea75',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2f5ea75_0',);
                }

                // _assetic_2f5ea75_1
                if ('/js/2f5ea75_jquery-ui_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2f5ea75',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_2f5ea75_1',);
                }

                // _assetic_2f5ea75_2
                if ('/js/2f5ea75_bootstrap.min_3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2f5ea75',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_2f5ea75_2',);
                }

            }

            // _assetic_32fdf20
            if ('/js/32fdf20.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '32fdf20',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_32fdf20',);
            }

            // _assetic_32fdf20_0
            if ('/js/32fdf20_admin_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '32fdf20',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_32fdf20_0',);
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
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

        // search
        if ('/search' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'search');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AjaxController::searchAction',  '_route' => 'search',);
        }

        // core_home
        if ('' === $trimmedPathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_core_home;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'core_home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\CoreController::indexAction',  '_route' => 'core_home',);
        }
        not_core_home:

        // find
        if ('/find' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'find');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\CoreController::findAction',  '_route' => 'find',);
        }

        // bird
        if (0 === strpos($pathinfo, '/bird') && preg_match('#^/bird/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bird')), array (  '_controller' => 'AppBundle\\Controller\\CoreController::birdAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_home
            if ('/admin' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_admin_home;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_home');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_home',);
            }
            not_admin_home:

            if (0 === strpos($pathinfo, '/admin/obs')) {
                // app_observation
                if ('/admin/obs/observation' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_app_observation;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ObservationController::formAction',  '_route' => 'app_observation',);
                }
                not_app_observation:

                // admin_obs_validate
                if (0 === strpos($pathinfo, '/admin/obs/validate') && preg_match('#^/admin/obs/validate/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_obs_validate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_obs_validate')), array (  '_controller' => 'AppBundle\\Controller\\ObservationController::obsValidateAction',));
                }
                not_admin_obs_validate:

                // admin_obs_await
                if (0 === strpos($pathinfo, '/admin/obs/await') && preg_match('#^/admin/obs/await/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_obs_await;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_obs_await')), array (  '_controller' => 'AppBundle\\Controller\\ObservationController::obsAwaitAction',));
                }
                not_admin_obs_await:

                // admin_obs_refuse
                if (0 === strpos($pathinfo, '/admin/obs/refuse') && preg_match('#^/admin/obs/refuse/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_obs_refuse;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_obs_refuse')), array (  '_controller' => 'AppBundle\\Controller\\ObservationController::obsRefuseAction',));
                }
                not_admin_obs_refuse:

            }

            // admin_user_delete
            if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_admin_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'UserBundle\\Controller\\UserController::userDeleteAction',));
            }
            not_admin_user_delete:

            // admin_user_edit
            if (0 === strpos($pathinfo, '/admin/user/edit') && preg_match('#^/admin/user/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'UserBundle\\Controller\\UserController::userEditAction',));
            }
            not_admin_user_edit:

        }

        // fos_user_security_check
        if ('/verification_connexion' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if ('/deconnexion' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profil')) {
            // fos_user_profile_show
            if ('/profil' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profil/modifier' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profil/changer-mot-de-passe' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/reinitialisation')) {
            // fos_user_resetting_request
            if ('/reinitialisation/requete' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/reinitialisation/reinitialiser') && preg_match('#^/reinitialisation/reinitialiser/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/reinitialisation/envoi-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/reinitialisation/verification-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
