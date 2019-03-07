<?php
// src/Controller/WebsiteHomeController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class WebsiteHomeController
{

    /**
     * @Route("/ ")
     */
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>
                <h1>Symfony Website Skeleton</h1>
                <p>Lucky number: ' . $number . '</p>
            </body></html>'
        );
    }
}