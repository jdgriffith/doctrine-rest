<?php

namespace Oodle\KrumoBundle\Controller;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class KrumoController
{
    /**
     * @Route("/krumo/{url}",
     * requirements={"url" = ".*"},
     * name="_krumo");
     */
    public function krumoAction($url)
    {
        $response = new Response();

        if (true) // permissions
        {
            // Still saftey strip out '..'
            $url = str_replace(array('/..', '..'), '', $url);
            $file = SERVICE_HOME . "../../../../krumo/" . $url;
            if (file_exists($file))
            {
                $extPos = strrchr($file, '.');
                if ($extPos && strlen($file) > $extPos + 2)
                {
                    $contentType = null;
                    switch ($extPos)
                    {
                        case '.jpg':
                        case '.jpeg':
                            $contentType = 'image/jpeg';
                            break;
                        case '.png':
                            $contentType = 'image/png';
                            break;
                        case '.js':
                            $contentType = 'application/x-javascript';
                            break;
                        case '.css':
                            $contentType = 'text/css';
                            break;
                        case '.gif':
                            $contentType = 'image/gif';
                            break;
                        case '.html':
                            $contentType = 'text/html';
                            break;
                        default:
                            $response->setStatusCode(404);
                            $response->setContent('Not Possible: ' . $url);
                            return $response;
                    }
                    $content = file_get_contents($file);
                    $response->setStatusCode(200);
                    $response->headers->set('Content-Type', $contentType);
                    $response->setContent($content);
                    return $response;
                }
                else
                {
                    $response->setContent('Not Found (1): ' . $url);
                }
            }
            else
            {
                $response->setContent('Not Found (2): ' . $url);
            }
        }
        else
            $response->setContent('Not Found (3): ' . $url);

        $response->setStatusCode(404);
        return $response;
    }
}