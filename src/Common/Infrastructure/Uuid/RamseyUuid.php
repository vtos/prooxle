<?php

declare(strict_types=1);

namespace Prooxle\Common\Infrastructure\Uuid;

use Prooxle\Common\Domain\Model\AggregateId\UuidProvider;
use Ramsey\Uuid\Uuid;

final class RamseyUuid implements UuidProvider
{
    public function generateStringUuid(): string
    {
        return Uuid::uuid4()->toString();
    }
}
