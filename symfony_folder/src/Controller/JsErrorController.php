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
Sentry.init({ dsn: \'http://43ff480386c74acfa67f146e58a15298@localhost:880/2\' });
myUndefinedFunction'.$info.'();
</script>


<body>js error sent</body></html>'
        );
    }
}
