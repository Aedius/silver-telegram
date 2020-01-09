<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class SentryController
{
    /**
     * @Route("/Send", name="app_sentry")
     */
    public function send()
    {

        \Sentry\init(['dsn' => 'http://529a56257e794670afa3904e58a58dc3@symfony.localhost:880/2' ]);

        throw new \Exception("My first Sentry error!");

    }
}
