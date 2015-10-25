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

/** @var Mage_Core_Model_Resource_Setup $this */
$installer = $this;
$installer->startSetup();

/**
 * add the non-compulsory admin language field
 */
$installer->run("
    ALTER TABLE `admin_user`
        ADD `locale` VARCHAR(5) NULL DEFAULT NULL;
");

$installer->endSetup();