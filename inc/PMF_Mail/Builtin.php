<?php
/**
 * MUA (Mail User Agent) implementation using the PHP built-in mail() function.
 *
 * @package   phpMyFAQ
 * @author    Matteo Scaramuccia <matteo@phpmyfaq.de>
 * @since     2009-09-11
 * @version   SVN: $Id$
 * @copyright 2009 phpMyFAQ Team
 *
 * The contents of this file are subject to the Mozilla Public License
 * Version 1.1 (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Software distributed under the License is distributed on an "AS IS"
 * basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 * License for the specific language governing rights and limitations
 * under the License.
 */
 
/**
 * PHP 6 script encoding
 *
 */
declare(encoding='latin1');

 /**
  * MUA (Mail User Agent) implementation using the PHP built-in mail() function.
  *
  * @package phpMyFAQ 
  */ 
class PMF_Mail_Builtin implements PMF_Mail_IMUA
{
    /**
     * Send the message using an e-mail through the PHP bult-in mail() function.
     *
     * @param  string $recipients Recipients of the e-mail as a comma-separated list
     *                            of RFC 2822 compliant items
     * @param  array  $headers    Headers of the e-mail
     * @param  string $body       Body of the e-mail
     * @return bool   True if successful, false otherwise.     
     */
    public function send($recipients, $headers, $body)
    {
        // Get the subject of the e-mail, RFC 2047 compliant
        $subject            = $headers['Subject'];
        $headers['Subject'] = null;
        unset($headers['Subject']);

        $sender = '';
        if (('WIN' !== strtoupper(substr(PHP_OS, 0, 3))) && !ini_get('safe_mode')) {
            $sender = str_replace(
                array('<', '>'),
                '',
                $headers['Return-Path']
            );
            unset($headers['Return-Path']);
        }

        // Prepare the headers for the e-mail
        $mailHeaders = '';
        foreach ($headers as $key => $value) {
            $mailHeaders .= $key.': '.$value."\r\n";
        }

        // Send the e-mail
        if (empty($sender)) {
            return mail(
                $recipients,
                $subject,
                $body,
                $mailHeaders
            );
        } else {
            return mail(
                $recipients,
                $subject,
                $body,
                $mailHeaders,
                '-f'.$sender
            );
        }
    }
}
