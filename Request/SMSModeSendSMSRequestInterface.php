<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

/**
 * sMsmode send SMS request interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class SMSModeSendSMSRequestInterface {

	/**
	 * Message class "SMS Pro".
	 */
	const MESSAGE_CLASS_SMS_PRO = 2;

	/**
	 * Message class "SMS with authorized response".
	 */
	const MESSAGE_CLASS_SMS_RESPONSE = 4;

	/**
	 * Message length.
	 */
	const MESSAGE_LENGTH = 160;

	/**
	 * STOP always.
	 */
	const STOP_ALWAYS = 2;

	/**
	 * STOP only.
	 */
	const STOP_ONLY = 1;

}