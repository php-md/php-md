<?php

namespace PHPMarkdown\Tests;

use PHPMarkdown\PHPMarkdown;
use PHPUnit\Framework\TestCase;

class PHPMarkdownTest extends TestCase
{
    /**
     * @group markdown
     */
    public function test_constructor()
    {
        $this->assertInstanceOf(PHPMarkdown::class, (new PHPMarkdown));
    }
}
