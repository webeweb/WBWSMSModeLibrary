<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model\Response;

use DateTime;
use Exception;
use WBW\Library\SMSMode\Model\Response\CreatingAPIKeyResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Creating API key response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model\Response
 */
class CreatingAPIKeyResponseTest extends AbstractTestCase {

    /**
     * Tests the setAccount() method.
     *
     * @return void
     */
    public function testSetAccount() {

        $obj = new CreatingAPIKeyResponse();

        $obj->setAccount("account");
        $this->assertEquals("account", $obj->getAccount());
    }

    /**
     * Tests the setCreationDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCreationDate() {

        // Set a Date/time mock.
        $creationDate = new DateTime();

        $obj = new CreatingAPIKeyResponse();

        $obj->setCreationDate($creationDate);
        $this->assertSame($creationDate, $obj->getCreationDate());
    }

    /**
     * Tests the setException() method.
     *
     * @return void
     */
    public function testSetException() {

        $obj = new CreatingAPIKeyResponse();

        $obj->setException(["status" => 400]);
        $this->assertEquals(["status" => 400], $obj->getException());
    }

    /**
     * Tests the setExpiration() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetExpiration() {

        // Set a Date/time mock.
        $expiration = new DateTime();

        $obj = new CreatingAPIKeyResponse();

        $obj->setExpiration($expiration);
        $this->assertSame($expiration, $obj->getExpiration());
    }

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId() {

        $obj = new CreatingAPIKeyResponse();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Tests the setState() method.
     *
     * @return void
     */
    public function testSetState() {

        $obj = new CreatingAPIKeyResponse();

        $obj->setState("state");
        $this->assertEquals("state", $obj->getState());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new CreatingAPIKeyResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getAccessToken());
        $this->assertNull($obj->getAccount());
        $this->assertNull($obj->getCreationDate());
        $this->assertNull($obj->getException());
        $this->assertNull($obj->getExpiration());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getState());
    }
}
