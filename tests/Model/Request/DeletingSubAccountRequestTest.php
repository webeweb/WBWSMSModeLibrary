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

use WBW\Library\SMSMode\Model\Request\DeletingSubAccountRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * sMsmode delete subaccount request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model\Request
 */
class DeletingSubAccountRequestTest extends AbstractTestCase {

    /**
     * Tests the setPseudoToDelete() method.
     *
     * @return void
     */
    public function testSetPseudoToDelete() {

        $obj = new DeletingSubAccountRequest();

        $obj->setPseudoToDelete("pseudoToDelete");
        $this->assertEquals("pseudoToDelete", $obj->getPseudoToDelete());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("/http/1.6/deleteSubAccount.do", DeletingSubAccountRequest::DELETING_SUB_ACCOUNT_RESOURCE_PATH);

        $obj = new DeletingSubAccountRequest();

        $this->assertNull($obj->getPseudoToDelete());
        $this->assertEquals(DeletingSubAccountRequest::DELETING_SUB_ACCOUNT_RESOURCE_PATH, $obj->getResourcePath());
    }
}
