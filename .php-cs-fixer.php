<?php

use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__ . '/packages',
    ])
;

return (new PhpCsFixer\Config())
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setRules([
        '@PHP83Migration' => true,
        '@PSR12' => true,
        '@Symfony' => true,
        'header_comment' => [
            'header' => <<<'EOF'
            This file is part of Alphpaca Monocle project (https://github.com/alphpaca/monocle).

            (c) Jacob Tobiasz <jacob@alphpaca.io>

            This source file is subject to the MIT license that is bundled
            with this source code in the file LICENSE.
            EOF,
        ],
    ])
    ->setFinder($finder)
;
