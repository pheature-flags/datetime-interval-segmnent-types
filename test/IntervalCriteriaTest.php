<?php

namespace Pheature\Model\DateTime;

use PHPUnit\Framework\TestCase;

final class IntervalCriteriaTest extends TestCase
{
    public function testThrowsInvalidArgumentExceptionWithInvalidDateTime(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid timezone "foo" given.');

        IntervalCriteria::fromRawCriteria([
            'start_datetime' => '2024-04-11',
            'end_datetime' => '2024-06-11',
            'timezone' => 'foo',
        ]);
    }
}
