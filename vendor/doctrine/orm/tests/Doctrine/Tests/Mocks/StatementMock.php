<?php

declare(strict_types=1);

namespace Doctrine\Tests\Mocks;

use Doctrine\DBAL\Driver\Result;
use Doctrine\DBAL\Driver\Statement;
use EmptyIterator;
use IteratorAggregate;
use PDO;
use Traversable;

/**
 * This class is a mock of the Statement interface.
 */
class StatementMock implements IteratorAggregate, Statement
{
    /**
     * {@inheritDoc}
     */
    public function bindValue($param, $value, $type = null)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function bindParam($column, &$variable, $type = null, $length = null)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function errorCode()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function errorInfo()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function execute($params = null): Result
    {
        return new DriverResultMock();
    }

    public function rowCount(): int
    {
        return 1;
    }

    /**
     * {@inheritDoc}
     */
    public function closeCursor()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function columnCount()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setFetchMode($fetchStyle, $arg2 = null, $arg3 = null)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function fetch($fetchMode = null, $cursorOrientation = PDO::FETCH_ORI_NEXT, $cursorOffset = 0)
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function fetchAll($fetchMode = null, $fetchArgument = null, $ctorArgs = null)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function fetchColumn($columnIndex = 0)
    {
    }

    public function getIterator(): Traversable
    {
        return new EmptyIterator();
    }
}
