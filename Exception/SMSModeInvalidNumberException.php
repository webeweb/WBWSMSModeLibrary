<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Exception;

/**
 * sMsmode invalid number exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 * @final
 */
final class SMSModeInvalidNumberException extends AbstractSMSModeException {

    /**
     * Constructor.
     *
     * @param string $number The number.
     */
    public function __construct($number) {
        parent::__construct("The number \"" . $number . "\" is invalid");
    }

}
