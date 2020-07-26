<?php

namespace wulfheart\BladeRemixicon;

use wulfheart\BladeRemixicon\RemixiconServiceProvider;
use Orchestra\Testbench\TestCase;
use BladeUI\Icons\BladeIconsServiceProvider;

/**
 * Class CompilesIconsTest
 *
 * @package Tests
 */
class CompilesIconsTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            RemixiconServiceProvider::class,
        ];
    }

    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('ri-4k-fill')->toHtml();

        $expected = <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <g>
        <path fill="none" d="M0 0h24v24H0z"/>
        <path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm8.5 10.5V12h-1V9H9v3H7.5V9H6v4.5h3V15h1.5v-1.5h1zM18 15l-2.25-3L18 9h-1.75l-1.75 2.25V9H13v6h1.5v-2.25L16.25 15H18z"/>
    </g>
</svg>
SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('ri-4k-fill', 'text-primary')->toHtml();

        // Note: the double class here seems to be a Blade components / BladeUI Icons bug.
        $expected = <<<SVG
        <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm8.5 10.5V12h-1V9H9v3H7.5V9H6v4.5h3V15h1.5v-1.5h1zM18 15l-2.25-3L18 9h-1.75l-1.75 2.25V9H13v6h1.5v-2.25L16.25 15H18z"/></g></svg>
SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('ri-4k-fill', ['style' => 'color: #555'])->toHtml();

        $expected = <<<SVG
        <svg style="color: #555" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm8.5 10.5V12h-1V9H9v3H7.5V9H6v4.5h3V15h1.5v-1.5h1zM18 15l-2.25-3L18 9h-1.75l-1.75 2.25V9H13v6h1.5v-2.25L16.25 15H18z"/></g></svg>
SVG;

        $this->assertSame($expected, $result);
    }
}
