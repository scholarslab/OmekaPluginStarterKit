<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4; */

/**
 * A model class that represents an individual custom record of type
 * Record that is introduced by your plugin. This class should include
 * methods that provide information about any given instance of this
 * model type. For example, if you fetch a record of type Record from
 * the database and need to acccess its "id" attribute in a view, you
 * might use $record->id;. Methods on this class should make it possible
 * to easily access more complex types of data - but data that is always
 * dependent on the identity of the Record object in question. So,
 * things like $record->getParentItem(), or $record->findAssociatedText,
 * and so on and so forth.
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

class ThePluginRecord extends Omeka_record
{

    // public $database_column;

    // Define other publicly accessible parameters here. If this class
    // is defined, these parameters must be explicitly declared as
    // public in this location in order for them to be accessible in
    // views, etc.

    /**
     * Assuming that Record has a parent item, an example function that
     * fetches that Item record.
     *
     * @return Omeka_record The item.
     */
    // public function getItem()
    // {

        // return $this->getTable('Item')->findBySql('id = ?', $this->item_id);

    // }

}


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */

?>
