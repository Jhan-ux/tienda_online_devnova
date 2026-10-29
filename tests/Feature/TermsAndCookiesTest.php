<?php

namespace Tests\Feature;

use Tests\TestCase;

class TermsAndCookiesTest extends TestCase
{
    /**
     * Test that terms page loads successfully.
     */
    public function test_terms_page_can_be_rendered(): void
    {
        $response = $this->get('/terminos');

        $response->assertStatus(200);
        $response->assertSee('TÉRMINOS Y CONDICIONES');
        $response->assertSee('TERMINOS_Y_CONDICIONES.TXT');
    }

    /**
     * Test that cookies policy page loads successfully.
     */
    public function test_cookies_policy_page_can_be_rendered(): void
    {
        $response = $this->get('/cookies');

        $response->assertStatus(200);
        $response->assertSee('POLÍTICA DE COOKIES');
        $response->assertSee('POLITICA_DE_COOKIES.TXT');
    }

    /**
     * Test that home page includes terms and cookie banner components.
     */
    public function test_home_page_includes_terms_and_cookie_components(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('cookieBanner');
        $response->assertSee('cookiesModal');
        $response->assertSee('termsModal');
        $response->assertSee('Términos y Condiciones');
    }
}
