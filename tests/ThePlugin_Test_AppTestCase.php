<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4; */

/**
 * Set up each test, define helpers to mock data.
 *
 * PHP version 5
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at http://www.apache.org/licenses/LICENSE-2.0 Unless required by
 * applicable law or agreed to in writing, software distributed under the
 * License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS
 * OF ANY KIND, either express or implied. See the License for the specific
 * language governing permissions and limitations under the License.
 *
 * @package     omeka
 * @subpackage  theplugin
 * @author      Organization <>
 * @author      Author McAuthor <author.mcauthor@virginia.edu>
 * @copyright   2010 The Board and Visitors of the University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html Apache 2 License
 * @version     $Id$
 * @link        http://omeka.org/add-ons/plugins/FedoraConnector/
 * @tutorial    tutorials/omeka/FedoraConnector.pkg
 */
?>

<?php

require_once '../ThePlugin.php';

/**
 * This class sets up the system for testing this plugin.
 *
 * This borrows from the SimplePages plugin rather extensively.
 */
class ThePlugin_Test_AppTestCase extends Omeka_Test_AppTestCase
{
    const PLUGIN_NAME = 'ThePlugin';

    public function setUp() {

        parent::setUp();

        // Authenticate and set the current user.
        $this->user = $this->db->getTable('User')->find(1);
        $this->_authenticateUser($this->user);

        // Add the plugin hooks and filters (including the install hook).
        $pluginBroker = get_plugin_broker();
        $this->_addPluginHooksAndFilters($pluginBroker, self::PLUGIN_NAME);

        $pluginHelper = new Omeka_Test_Helper_Plugin();
        $pluginHelper->setUp(self::PLUGIN_NAME);

    }

    public function _addPluginHooksAndFilters($pluginBroker, $pluginName) {

        $pluginBroker->setCurrentPluginDirName($pluginName);

        new ThePlugin;

    }

}


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */

?>
