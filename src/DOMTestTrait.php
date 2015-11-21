<?php
/*
 * This file is part of PHPUnit DOM Assertions.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @package    PHPUnit_Framework_DOMTestCase
 * @author     Sebastian Bergmann <sebastian@phpunit.de>
 * @author     Jeff Welch <whatthejeff@gmail.com>
 * @copyright  Sebastian Bergmann <sebastian@phpunit.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       http://github.com/phpunit/phpunit-dom-assertions
 * @since      Class available since Release 1.0.0
 */
trait PHPUnit_Framework_DOMTestTrait
{

    /**
     * Assert the presence, absence, or count of elements in a document matching
     * the CSS $selector, regardless of the contents of those elements.
     *
     * The first argument, $selector, is the CSS selector used to match
     * the elements in the $actual document.
     *
     * The second argument, $count, can be either boolean or numeric.
     * When boolean, it asserts for presence of elements matching the selector
     * (true) or absence of elements (false).
     * When numeric, it asserts the count of elements.
     *
     * assertSelectCount("#binder", true, $xml);  // any?
     * assertSelectCount(".binder", 3, $xml);     // exactly 3?
     *
     * @param array $selector
     * @param integer|boolean|array $count
     * @param mixed $actual
     * @param string $message
     * @param boolean $isHtml
     * @since Method available since Release 1.0.0
     */
    public static function assertSelectCount($selector, $count, $actual, $message = '', $isHtml = true)
    {
        PHPUnit_Framework_DOMTestCase::assertSelectCount($selector, $count, $actual, $message, $isHtml);
    }

    /**
     * assertSelectRegExp("#binder .name", "/Mike|Derek/", true, $xml); // any?
     * assertSelectRegExp("#binder .name", "/Mike|Derek/", 3, $xml);    // 3?
     *
     * @param array                 $selector
     * @param string                $pattern
     * @param integer|boolean|array $count
     * @param mixed                 $actual
     * @param string                $message
     * @param boolean               $isHtml
     * @since Method available since Release 1.0.0
     */
    public static function assertSelectRegExp($selector, $pattern, $count, $actual, $message = '', $isHtml = true)
    {
        PHPUnit_Framework_DOMTestCase::assertSelectRegExp($selector, $pattern, $count, $actual, $message);
    }

    /**
     * assertSelectEquals("#binder .name", "Chuck", true,  $xml);  // any?
     * assertSelectEquals("#binder .name", "Chuck", false, $xml);  // none?
     *
     * @param array                 $selector
     * @param string                $content
     * @param integer|boolean|array $count
     * @param mixed                 $actual
     * @param string                $message
     * @param boolean               $isHtml
     * @since Method available since Release 1.0.0
     *
     * @throws PHPUnit_Framework_Exception
     */
    public static function assertSelectEquals($selector, $content, $count, $actual, $message = '', $isHtml = true)
    {
        PHPUnit_Framework_DOMTestCase::assertSelectEquals($selector, $content, $count, $actual, $message, $isHtml);
    }

    /**
     * @see PHPUnit_Framework_DOMTestCase::assertXPathCount
     *
     * @param $selector
     * @param $count
     * @param $actual
     * @param string $message
     * @param bool $isHtml
     */
    public static function assertXPathCount($selector, $count, $actual, $message = '', $isHtml = true)
    {
        PHPUnit_Framework_DOMTestCase::assertXPathCount($selector, $count, $actual, $message, $isHtml);
    }

    /**
     * @see PHPUnit_Framework_DOMTestCase::assertXPathRegExp
     *
     * @param $selector
     * @param $pattern
     * @param $count
     * @param $actual
     * @param $message
     * @param $isHtml
     */
    public static function assertXPathRegExp($selector, $pattern, $count, $actual, $message = '', $isHtml = true)
    {
        PHPUnit_Framework_DOMTestCase::assertXPathRegExp($selector, $pattern, $count, $actual, $message, $isHtml);
    }

    /**
     * @see PHPUnit_Framework_DOMTestCase::assertXPathEquals
     *
     * @param $selector
     * @param $content
     * @param $count
     * @param $actual
     * @param $message
     * @param $isHtml
     */
    public static function assertXPathEquals($selector, $content, $count, $actual, $message = '', $isHtml = true)
    {
        PHPUnit_Framework_DOMTestCase::assertXPathEquals($selector, $content, $count, $actual, $message, $isHtml);
    }
}
