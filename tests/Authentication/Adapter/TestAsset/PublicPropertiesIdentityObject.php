<?php

declare(strict_types=1);

namespace DoctrineModuleTest\Authentication\Adapter\TestAsset;

/**
 * Simple mock object for authentication adapter test with direct property access
 */
class PublicPropertiesIdentityObject
{
    public ?string $username = null;

    public ?string $password = null;
}
