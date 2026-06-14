<?php

declare(strict_types=1);

namespace Archilan\BridgeClient\Slots\Response;

final readonly class HintItemOkResponse
{
    public function __construct(
        public int $slot,
        public string $itemName,
        public bool $free,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            slot:     is_int($data['slot'] ?? null) ? $data['slot'] : 0,
            itemName: is_string($data['itemName'] ?? null) ? $data['itemName'] : '',
            free:     (bool) ($data['free'] ?? false),
        );
    }
}
