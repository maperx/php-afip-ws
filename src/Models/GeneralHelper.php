<?php

/**
 * Copyright (C) 1997-2020 Reyesoft <info@reyesoft.com>.
 *
 * This file is part of php-afip-ws. php-afip-ws can not be copied and/or
 * distributed without the express permission of Reyesoft
 */

declare(strict_types=1);

namespace Maperx\Models;

class GeneralHelper
{
    public function getAliasWsName(string $ws): string
    {
        switch ($ws) {
            case 'padron-puc-ws-consulta-nivel3':
                $alias = 'wspn3';

                break;
            default:
                $alias = $ws;
        }

        return $alias;
    }

    public static function getOriginalWsName(string $ws): string
    {
        switch ($ws) {
            case 'wspn3':
                $original = 'padron-puc-ws-consulta-nivel3';

                break;
            default:
                $original = $ws;
        }

        return $original;
    }
}
