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

class PixelMachine_AdminLocale_Model_AdminObserver
{
    /**
     * Switch the admin's language, if he has a specific locale set
     * This method is called in response to the "admin_user_authenticate_after" event
     * 
     */
    public function updateAdminLanguage($observer)
    {
        $event = $observer->getEvent();
        if(!($result = $event->getResult())) {
            return;
        }
        
        if(!($user = $event->getUser())) {
            return;
        }
        
        //try to update the admin language, if it's set to anything custom
        if($userLocale = $user->getLocale()) {
            Mage::getSingleton('adminhtml/session')->setLocale($userLocale);
        }
    }
}