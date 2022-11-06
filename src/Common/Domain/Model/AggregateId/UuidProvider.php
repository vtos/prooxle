<?php

declare(strict_types=1);

namespace Prooxle\Common\Domain\Model\AggregateId;

interface UuidProvider
{
    public function generateStringUuid(): string;
}
