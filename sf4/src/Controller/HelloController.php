<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function world()
    {
        $message = "<html><body>Hello World!</body></html>";
        
        return new Response($message);
    }
}