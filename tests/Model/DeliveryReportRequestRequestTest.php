<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use Exception;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\Model\DeliveryReportRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Delivery report request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class DeliveryReportRequestRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DeliveryReportRequest();

        $this->assertNull($obj->getSmsID());
    }
}