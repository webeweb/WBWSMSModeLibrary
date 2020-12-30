<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Attribute;

use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestStringMobileTrait;

/**
 * String mobile trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class StringMobileTraitTest extends AbstractTestCase {

    /**
     * Tests the setMobile() method.
     *
     * @return void
     */
    public function testSetMobile(): void {

        $obj = new TestStringMobileTrait();

        $obj->setMobile("mobile");
        $this->assertEquals("mobile", $obj->getMobile());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestStringMobileTrait();

        $this->assertNull($obj->getMobile());
    }
}
