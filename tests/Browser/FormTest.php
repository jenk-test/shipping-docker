<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FormTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testStaticForm()
    {
        $this->browse(function ($browser) {
            $browser->visit('/form')
                ->assertSee('Test Form')
                ->type('name', 'A new competition')
                ->type('description', 'This is a test description')
                ->type('seo_title', 'This is a test seo title')
                ->type('seo_description', 'This is a seo description')
                ->type('alias', 'competition alias')
                ->type('alias_description', 'This is a test alias description')
                ->type('keywords', 'test, competition')
                ->type('remarks', 'This is a test remark')
                ->check('is_active')
                ->check('is_form')
                ->press('Submit')
                ->assertSee('Form successfully submitted');
        });
    }

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testVueForm()
    {
        $this->browse(function ($browser) {
            $browser->visit('/vueform')
                ->assertSee('Test Form')
                ->type('name', 'A new competition')
                ->type('description', 'This is a test description')
                ->type('seo_title', 'This is a test seo title')
                ->type('seo_description', 'This is a seo description')
                ->type('alias', 'competition alias')
                ->type('alias_description', 'This is a test alias description')
                ->type('keywords', 'test, competition')
                ->type('remarks', 'This is a test remark')
                ->type('remarks1', 'This is a test remark 1')
                ->type('remarks2', 'This is a test remark 2')
                ->type('remarks3', 'This is a test remark 3')
                ->check('is_active')
                ->check('is_form')
                ->press('Submit')
                ->assertSee('Form successfully submitted!');
        });
    }
}
