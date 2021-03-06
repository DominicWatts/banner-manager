<?php

/**
 * Abstract controller
 *
 * @author Xigen
 */
class Xigen_Bannermanager_Controller_Abstract extends Mage_Core_Controller_Front_Action {

    protected $_bannerPrefix        = null;
    protected $_sliderPrefix        = null;
    protected $_trashFilter         = null;
    
    /**
     * Init controller default properties
     *
     */
    protected function _construct() {
        $this->_bannerPrefix = Mage::helper('xigen_bannermanager/database')->getBannerPrefix();
        $this->_sliderPrefix = Mage::helper('xigen_bannermanager/database')->getSliderPrefix();
        
    }
    
}
