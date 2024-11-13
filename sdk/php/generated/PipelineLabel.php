<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * Key value object that represents a pipeline label.
 */
class PipelineLabel extends Client\AbstractInputObject
{
    public function __construct(
        public string $name,
        public string $value,
    ) {
    }
}
