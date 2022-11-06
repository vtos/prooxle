<?php

declare(strict_types=1);

namespace Prooxle\Common\Domain\Model;

trait AggregateId
{
    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function asString(): string
    {
        return $this->id;
    }

    public static function fromString(string $id): self
    {
        return new self($id);
    }
}
