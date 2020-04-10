<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model\Request;

use DateTime;
use Exception;
use WBW\Library\SMSMode\Model\Request\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Retrieving SMS reply request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model\Request
 */
class RetrievingSMSReplyRequestTest extends AbstractTestCase {

    /**
     * Tests the setEndDate() method.
     *
     * @return void
     * @throws Exception Throws an exception.
     */
    public function testSetEndDate() {

        // Set a End date mock.
        $endDate = new DateTime();

        $obj = new RetrievingSMSReplyRequest();

        $obj->setEndDate($endDate);
        $this->assertSame($endDate, $obj->getEndDate());
    }

    /**
     * Tests the setStart() method.
     *
     * @return void
     */
    public function testSetStart() {

        $obj = new RetrievingSMSReplyRequest();

        $obj->setStart(0);
        $this->assertEquals(0, $obj->getStart());
    }

    /**
     * Tests the setStartDate() method.
     *
     * @return void
     * @throws Exception Throws an exception.
     */
    public function testSetStartDate() {

        // Set a Start date mock.
        $startDate = new DateTime();

        $obj = new RetrievingSMSReplyRequest();

        $obj->setStartDate($startDate);
        $this->assertSame($startDate, $obj->getStartDate());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("/http/1.6/responseList.do", RetrievingSMSReplyRequest::RETRIEVING_SMS_REPLY_RESOURCE_PATH);

        $obj = new RetrievingSMSReplyRequest();

        $this->assertNull($obj->getEndDate());
        $this->assertNull($obj->getOffset());
        $this->assertEquals(RetrievingSMSReplyRequest::RETRIEVING_SMS_REPLY_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getStart());
        $this->assertNull($obj->getStartDate());
    }
}
