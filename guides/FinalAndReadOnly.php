<?php

// Instead of extending a class, it's better to just do composition, always default to final class 
final class FinalClass
{
    public function __construct() {}

    final public function cannotBeOverridden(): string
    {
        return 'This method cannot be overridden.';
    }
}

// A final class cannot be extended.
// class ChildClass extends FinalClass {}

class ParentClass
{
    final public function fixedBehavior(): string
    {
        return 'This method cannot be overridden.';
    }
}

class ChildClass extends ParentClass
{
    public function additionalBehavior(): string
    {
        return 'This method can be defined by the child.';
    }
}

final class User
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {}
}

readonly class Configuration
{
    public function __construct(
        public string $environment,
        public int $timeout,
    ) {}
}
