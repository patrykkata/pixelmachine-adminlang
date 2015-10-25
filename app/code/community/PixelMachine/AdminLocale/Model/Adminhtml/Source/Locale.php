<?php
/**
 * Magento Custom Admin Interface Language per admin user
 * 
 * PHP version 5
 *
 * LICENSE: GNU
 *
 * @category   PixelMachine
 * @package    PixelMachine_AdminLocale
 * @author     Patryk Kata - Pixel Machine <patrykkata@gmail.com>
 * 
 * @link       https://github.com/patrykkata/pixelmachine-adminlocale
 */

class PixelMachine_AdminLocale_Model_Adminhtml_Source_Locale
{
    /**
     * Get all possible locales options data
     * 
     * @param bool $addEmpty
     * @return array
     */
    public function getAllOptions($addEmpty = true)
    {
        $options = array();
        if($addEmpty) {
            $options[] = array(
                'label' => Mage::helper('pixelmachine_adminlocale')->__('Default - Use Magento Installation Language'),
                'value' => '',
            );
        }
        
        return array_merge($options, $this->_getLocales());
    }
    
    /**
     * Get all Magento locales, translated
     * 
     * @return array
     */
    protected function _getLocales()
    {
        return Mage::app()->getLocale()->getTranslatedOptionLocales();
    }
}