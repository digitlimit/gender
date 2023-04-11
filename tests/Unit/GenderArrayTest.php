<?php

namespace Digitlimit\Gender\Tests\Unit;

use Digitlimit\Gender\Tests\TestCase;

class GenderArrayTest extends TestCase
{
    /**
     * @test
     * @test_valid_file
     */
    public function it_contains_valid_array_file(): void
    {
        $genders = include $this->packagePath('files/genders.php');

        $this->assertIsArray($genders);
        $this->assertCount(107, $genders);
    }
}