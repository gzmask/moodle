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
 * Header form element
 *
 * Contains a pseudo-element used for adding headers to form
 *
 * @package   core_form
 * @copyright 2007 Jamie Pratt <me@jamiep.org>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once 'HTML/QuickForm/header.php';

/**
 * Header form element
 *
 * A pseudo-element used for adding headers to form
 *
 * @package   core_form
 * @category  form
 * @copyright 2007 Jamie Pratt <me@jamiep.org>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class MoodleQuickForm_header extends HTML_QuickForm_header
{
    /** @var string html for help button, if empty then no help */
    var $_helpbutton='';

    /**
     * constructor
     *
     * @param string $elementName name of the header element
     * @param string $text text displayed in header element
     */
    function MoodleQuickForm_header($elementName = null, $text = null) {
        parent::HTML_QuickForm_header($elementName, $text);
    }

   /**
    * Accepts a renderer
    *
    * @param HTML_QuickForm_Renderer $renderer a HTML_QuickForm_Renderer object
    */
    function accept(&$renderer, $required=false, $error=null)
    {
        $this->_text .= $this->getHelpButton();
        $renderer->renderHeader($this);
    }

    /**
     * set html for help button
     *
     * @param array $helpbuttonargs array of arguments to make a help button
     * @param string $function function name to call to get html
     * @deprecated since Moodle 2.0. Please do not call this function any more.
     * @todo MDL-31047 this api will be removed.
     * @see MoodleQuickForm::setHelpButton()
     */
    function setHelpButton($helpbuttonargs, $function='helpbutton'){
        debugging('component setHelpButton() is not used any more, please use $mform->setHelpButton() instead');
    }

    /**
     * get html for help button
     *
     * @return string html for help button
     */
    function getHelpButton(){
        return $this->_helpbutton;
    }
}