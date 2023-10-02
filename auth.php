<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package demouser
 * @author Marco Ferrante, AulaWeb/University of Genoa <staff@aulaweb.unige.it>
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * Parts of the code was original made for another moodle plugin available at
 * https://moodle.org/plugins/auth_saml2
 */
defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/authlib.php');
require_once($CFG->dirroot . '/auth/email/auth.php');

/**
 * Plugin for email authentication using fake data for demo Moodle website
 */
class auth_plugin_demouser extends auth_plugin_email {

    /**
     * The name of the component. Used by the configuration.
     */
    const COMPONENT_NAME = 'demouser';

    /**
     * Config vars
     * @var string
     */
    public $defaults = array(
    );

    /**
     * Constructor
     */
    public function __construct() {
        $this->authtype = self::COMPONENT_NAME;
        $componentName = (array) get_config(self::COMPONENT_NAME);
        $this->config = (object) array_merge($this->defaults, $componentName);
    }

    /**
     * Return a form to capture user details for account creation.
     * This is used in /login/signup.php.
     * @return moodle_form A form which edits a record from the user table.
     */
    function signup_form() {
        global $CFG;
        
        require_once($CFG->dirroot.'/auth/' . self::COMPONENT_NAME . '/signup_form.php');
        return new login_signup_form(null, null, 'post', '', array('autocomplete'=>'on'));
    }


}
