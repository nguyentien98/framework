<?php

$header = <<<EOF
This file is part of the Sericode Framework.

(c) Sericode

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->notPath('tests/bootstrap.php')
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setFinder($finder)
    ->setRules([
        // '@PSR2' => true,
        'declare_strict_types' => true,
        'header_comment' => ['header' => $header],
    ])
;
