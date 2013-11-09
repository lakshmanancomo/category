<?php
namespace Sonata\CatalogBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AutoAjaxController extends Controller
{
    /**
     * @Route("/ajaxCustomers", name="ajaxCustomers")
     */
    public function ajaxCustomersAction(Request $request)
    {
//        $value = $request->get('term');
//
//        $em = $this->getDoctrine()->getEntityManager();
//        $members = $em->getRepository('SonataCatalogBundle:Customers')->findAjaxValue($value);
//
        $json = array();
//        foreach ($members as $member) {
//            $json[] = array(
//                'label' => $member->getName(),
//                'value' => $member->getId()
//            );
//        }
//
        $response = new Response();
        $response->setContent(json_encode($json));

        return $response;
    }
}