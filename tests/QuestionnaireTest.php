<?php

namespace Tests;

use Liior\SymfonyTestHelpers\WebTestCase;

class QuestionnaireTest extends WebTestCase
{
    /** @test */
    public function home_page_should_show_form()
    {
        $this->get('/');

        $this->assertSelectorExists('form');
    }
}
