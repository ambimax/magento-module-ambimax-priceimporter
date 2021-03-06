<?php

class Ambimax_PriceImport_Model_System_Config_Source_File_ErpLocation
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => Ambimax_PriceImport_Model_Import::TYPE_LOCAL,
                'label'=>Mage::helper('ambimax_priceimport')->__('Local')
            ),
            array(
                'value' => Ambimax_PriceImport_Model_Import::TYPE_SFTP,
                'label'=>Mage::helper('ambimax_priceimport')->__('S/FTP')
            ),

        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            Ambimax_PriceImport_Model_Import::TYPE_LOCAL => Mage::helper('ambimax_priceimport')->__('Local'),
            Ambimax_PriceImport_Model_Import::TYPE_SFTP => Mage::helper('ambimax_priceimport')->__('S/FTP'),
        );
    }

}