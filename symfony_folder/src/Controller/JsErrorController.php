<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JsErrorController
{
    /**
     * @Route("/js/{info}", name="app_js")
     */
    public function js($info)
    {

        return new Response(
            '<html>
<script src="https://browser.sentry-cdn.com/5.5.0/bundle.min.js" crossorigin="anonymous">
</script>

<script >
Sentry.init({ dsn: \'http://529a56257e794670afa3904e58a58dc3@symfony.localhost:880/2\' });
myUndefinedFunction'.$info.'();
</script>


<body>js error sent</body></html>'
        );
    }
}
