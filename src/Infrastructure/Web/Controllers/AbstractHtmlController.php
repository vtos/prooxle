<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\Web\Controllers;

use League\Plates\Engine as Templating;

abstract class AbstractHtmlController
{
    protected Templating $templating;

    public function __construct(Templating $templating)
    {
        $this->templating = $templating;
    }
}