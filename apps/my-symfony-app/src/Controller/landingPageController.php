<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;
use Twig\Environment;

class landingPageController extends AbstractController {

	/**
	 * @Route("/", name="app_landingpage")
	 */

	public function homepage(){
		return $this->render('landingpage/homepage.html.twig');
	}
}