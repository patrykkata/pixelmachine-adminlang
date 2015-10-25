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

class PixelMachine_AdminLocale_Block_Adminhtml_Permissions_User_Edit_Tab_Locale extends Mage_Adminhtml_Block_Widget_Form
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
    /**
     * Prepare label for tab
     *
     * @return string
     */
    public function getTabLabel()
    {
        return $this->__('Admin Locale');
    }

    /**
     * Prepare title for tab
     *
     * @return string
     */
    public function getTabTitle()
    {
        return $this->__('Admin Locale');
    }

    /**
     * Returns status flag about this tab can be shown or not
     *
     * @return true
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * Returns status flag about this tab hidden or not
     *
     * @return false
     */
    public function isHidden()
    {
        return false;
    }
    
    protected function _prepareForm()
    {
        $model = Mage::registry('permissions_user');

        $form = new Varien_Data_Form();
        $form->setHtmlIdPrefix('user_');

        $fieldset = $form->addFieldset('locale_fieldset', 
                array(
                    'legend' => Mage::helper('pixelmachine_adminlocale')->__('Account Language Information')
                )
            );

        $fieldset->addField('locale', 'select', array(
            'name'          => 'locale',
            'label'         => Mage::helper('pixelmachine_adminlocale')->__('Locale'),
            'id'            => 'locale',
            'title'         => Mage::helper('pixelmachine_adminlocale')->__('Locale'),
            'required'      => false,
            'values'        => Mage::getModel('pixelmachine_adminlocale/adminhtml_source_locale')->getAllOptions(),
            'note'          => Mage::helper('pixelmachine_adminlocale')->__('The preferred language used by this admin user. Will be set for this user on every login to the admin section.'),
        ));

        $data = $model->getData();
        $form->setValues($data);

        $this->setForm($form);
        return parent::_prepareForm();
    }
}