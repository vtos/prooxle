<?php

namespace Prooxle\Domain\Model\Common;

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
