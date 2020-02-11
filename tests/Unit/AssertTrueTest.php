<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * AssertTrueTest
 *
 * @package Tests\Unit
 */
class AssertTrueTest extends TestCase
{
    /**
     * Let's test the obvious
     *
     * @return void
     */
    public function testObviousTrue(): void
    {
        self::assertTrue(true);
    }

    /**
     * Yeah, isn't obvious, a lot of people don't know how to negation works
     *
     * @return void
     */
    public function testMoreOrLessObvious(): void
    {
        self::assertTrue(!false);
    }

    /**
     * Complex, but is sufficient to deploy in friday and move this problem to future
     *
     * @return void
     */
    public function testPleaseINeedDoDeployItInFriday(): void
    {
        self::assertTrue(!!!((1 === 2) !== false));
    }

    /**
     * I need to show to world that I know how to use anonymous classes
     *
     * @return void
     */
    public function testWithAnonymousClass(): void
    {
        $myClass = new class
        {
            /**
             * @return bool
             */
            public function getTrue(): bool
            {
                return true;
            }
        };

        self::assertTrue($myClass->getTrue());
    }

    /**
     * I also know how to use the anonymous function
     *
     * @return void
     */
    public function testWithAnonymousFunction(): void
    {
        /**
         * @return bool
         */
        $fn = function () {
            return true;
        };

        self::assertTrue($fn());
    }

    /**
     * Of course, I want to claim true as many times as I want!
     *
     * @return void
     */
    public function testWithGeneratorFunction(): void
    {
        $generator = function () {
            for ($i = 0; $i <= 20; $i += 2) {
                yield true;
            }
        } ;

        foreach ($generator() as $everTrue) {
            self::assertTrue($everTrue);
        }
    }

     * I invoke you to pass
     *
     * @return void
     */
    public function testWithInvokableCLass(): void
    {
        $invoke = new class
        {
            private const VALUE = true;

            /**
             * @return bool
             */
            public function __invoke()
            {
                return self::VALUE === true;
            }
        };

        self::assertTrue($invoke());
    }
  
}
