<?php

namespace Tests\Feature;

use Liior\SymfonyTestHelpers\WebTestCase;

class DefiscalisationTest extends WebTestCase
{
    /** @test */
    public function it_should_show_the_first_question()
    {
        $this->get("/defiscalisation");

        $this->assertSelectorExists('form');
    }
}
