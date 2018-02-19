<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Controller used to manage the application security.
 * See https://symfony.com/doc/current/cookbook/security/form_login_setup.html.
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class DefaultController extends Controller {

    /**
     * @Route("/sidebar_items", name="default_sidebar_items")
     */
    public function sidebar_items(): JsonResponse {

        $menu_items = array();

        $menu_items[0] = array("name" => 'Dashboard', "url" => '/dashboard', "icon" => 'icon-speedometer', "badge" => array("variant" => 'info', "text" => 'NEW'));
        $menu_items[1] = array("title" => true, "name" => 'Stations', "wrapper" => array("element" => '', "attributes" => array()), "class" => "");
        $menu_items[2] = array("name" => 'Stations', "url" =>"/stations",  "icon" => 'icon-star');
      
        $Stations = $this->getDoctrine()->getConnection()->fetchAll("select id, station_name as name, station_name as label, '#' as url, 'fa-home' as icon from station");
        
        $menu_items[2]['children'] = array();
        foreach ($Stations as  $Station) {
           array_push($menu_items[2]['children'], array("name" => $Station['name'], "url" =>"/stations/".$Station['id'],  "icon" => 'icon-puzzle'));
        }
  $menu_items[3] = array("title" => true, "name" => 'Birds', "wrapper" => array("element" => '', "attributes" => array()), "class" => "");
     
      
//        foreach ($Stations as $key => $Station) {
//            $menu_items[count($menu_items)]= array("name" => $Station['name'], "url" => '/', "icon" => 'icon-star');
//        }
    //     $menu_items[count($menu_items)]= array("divider"=> true);
     
        $menu_items[count($menu_items)] = array("name" => 'Birds', "url" =>"/birds", "icon" => 'icon-puzzle', "badge" => array("variant" => 'info', "text" => '123'));
        return new JsonResponse(array("data" => array("menu_items" => $menu_items)));
    }

    /**
     * @Route("/stations", name="default_stations")
     */
    public function stations(): JsonResponse {
        // Retrieves a repository managed by the "default" em
        $Stations = $this->getDoctrine()->getConnection()->fetchAll("select id, station_name as name, station_name as label, '#' as url, 'fa-home' as icon from station");
        //   ->getRepository(App\Entity\Juturna\Cobas\Station::class)
        //  ->findAll();

        return new JsonResponse(array("data" => array("stations" => $Stations)));
    }

}
