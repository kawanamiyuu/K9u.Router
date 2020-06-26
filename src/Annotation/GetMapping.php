<?php

declare(strict_types=1);

namespace K9u\RequestMapper\Annotation;

/**
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 */
final class GetMapping extends AbstractMapping
{
    /**
     * @param array<string, string> $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data['value'], 'GET');
    }
}
