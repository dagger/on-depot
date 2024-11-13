<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * An interactive terminal that clients can connect to.
 */
class Terminal extends Client\AbstractObject implements Client\IdAble
{
    /**
     * A unique identifier for this Terminal.
     */
    public function id(): TerminalId
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('id');
        return new \Dagger\TerminalId((string)$this->queryLeaf($leafQueryBuilder, 'id'));
    }

    /**
     * Forces evaluation of the pipeline in the engine.
     *
     * It doesn't run the default command if no exec has been set.
     */
    public function sync(): TerminalId
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('sync');
        return new \Dagger\TerminalId((string)$this->queryLeaf($leafQueryBuilder, 'sync'));
    }
}
