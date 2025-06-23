<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase 
{
  public function testTwoNumberAreSame(): void
  {
    $this->assertSame(5, 2 + 3);
    $this->assertEquals(10, 10);
  }
}
