<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use WBW\Library\SMSMode\Model\DeliveryReport;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Delivery report test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class DeliveryReportTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DeliveryReport();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getNumero());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new DeliveryReport();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }
}