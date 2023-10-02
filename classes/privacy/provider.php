<?php
/**
 * Privacy Subsystem implementation for auth_demouser.
 *
 * @package    auth_email
 * @copyright  2021 AulaWeb/University of Genoa <staff@aulaweb.unige.it>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace auth_demouser\privacy;
defined('MOODLE_INTERNAL') || die();

/**
 * Privacy Subsystem for auth_demouser implementing null_provider.
 *
 * @copyright  2021 AulaWeb/University of Genoa <staff@aulaweb.unige.it>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\null_provider {
    /**
     * Get the language string identifier with the component's language
     * file to explain why this plugin stores no data.
     *
     * @return  string
     */
    public static function get_reason() : string {
        return 'privacy:metadata';
    }
}