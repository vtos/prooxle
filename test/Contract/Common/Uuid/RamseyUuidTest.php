<?php

declare(strict_types=1);

namespace Prooxle\Test\Contract\Common\Uuid;

use PHPUnit\Framework\TestCase;
use Prooxle\Common\Infrastructure\Uuid\RamseyUuid;

class RamseyUuidTest extends TestCase
{
    /**
     * @test
     */
    public function it_generates_a_valid_uuid_string(): void
    {
        $uuidGenerator = new RamseyUuid();
        self::assertMatchesRegularExpression('/^[a-f\d]{8}(-[a-f\d]{4}){4}[a-f\d]{8}$/i', $uuidGenerator->generateStringUuid());
    }
}
