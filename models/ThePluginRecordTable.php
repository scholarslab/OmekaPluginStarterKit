<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4; */

/**
 * A model class that represents the behavior of an entire collection of
 * records of type Record. Put methods here that operate on the whole
 * group of records contained in the table, not just an individual
 * record.
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

class ThePluginRecordTable extends Omeka_Db_Table
{

    /**
     * For example, perform a difficult or convoluted select on the
     * table in a method in this class, instead of doing it in the view
     * action.
     *
     * @param string $parameter A query attribute.
     *
     * @return array of Omeka_record objects The records.
     */
    // public function getRecordsWithSomeGnarlyCombinationOfAttributes()
    // {

            // $select = $this->select()->
            // return $this->fetchObjects($select);

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
