<?php

namespace Mindme\MarkdownBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;

class MarkdownController extends Controller
{
    /**
     * @EXT\Route("/index", name="mindme_markdown_index")
     * @EXT\Template
     *
     * @return Response
     */
    public function indexAction()
    {
        throw new \Exception('hello');
    }
}
