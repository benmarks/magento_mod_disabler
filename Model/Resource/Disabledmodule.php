<?php

class BlueAcorn_Disabler_Model_Resource_DisabledModule extends Mage_Core_Model_Resource_Db_Abstract {
    protected function _construct() {
        $this->_init('disabler/disabledmodule', 'disabledmodule_id');
    }
}