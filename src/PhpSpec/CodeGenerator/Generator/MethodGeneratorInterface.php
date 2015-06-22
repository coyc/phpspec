<?php

/*
 * This file is part of PhpSpec, A php toolset to drive emergent
 * design by specification.
 *
 * (c) Marcello Duarte <marcello.duarte@gmail.com>
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpSpec\CodeGenerator\Generator;

interface MethodGeneratorInterface
{
    const METHOD_PLACEMENT = '/}[ \n]*$/';
    const CONSTRUCTOR_PLACEMENT = '/\n(?=\s*(private|protected|public|static|final|abstract|\s)*function)/';
}
