<?php
/**
 * User: zoelabz
 * Date: 21/04/2021
 * Time: 10:54
 */

namespace Zoelabz\Agora;

use Hanson\Foundation\Foundation;
use Zoelabz\Agora\Auth\SimpleTokenBuilder;

/**
 * Class Agora
 *
 * @property Project            $project
 * @property Usage              $usage
 * @property KickingRule        $kicking_rule
 * @property SimpleTokenBuilder $token
 *
 * @package Zoelabz\Agora
 */
class Agora extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];
}