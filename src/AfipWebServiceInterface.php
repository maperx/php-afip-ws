<?php

/**
 * Copyright (C) 1997-2020 Reyesoft <info@reyesoft.com>.
 *
 * This file is part of php-afip-ws. php-afip-ws can not be copied and/or
 * distributed without the express permission of Reyesoft
 */

declare(strict_types=1);

namespace Maperx;

use stdClass;

interface AfipWebServiceInterface
{
    public function getAvailablePosNumbers(): array;

    public static function dummy(\SoapClient $client): stdClass;

    /**
     * @internal
     */
    public function codComprobantes(): array;
}
