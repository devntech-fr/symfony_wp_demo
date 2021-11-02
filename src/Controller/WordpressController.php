<?php
namespace App\Controller;

use App\Service\Context;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WordpressController extends AbstractController
{
  public function index(Context $context)
  {
      $context->addPagination();
      return $this->render('home.html.twig', $context->toArray());
  }
}
