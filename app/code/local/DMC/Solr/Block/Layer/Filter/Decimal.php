<?php
/**
 * Apache Solr Search Engine for Magento
 *
 * @category  DMC
 * @package   DMC_Solr
 * @author    Team Magento <magento@digitalmanufaktur.com>
 * @version   0.1.6
 */
class DMC_Solr_Block_Layer_Filter_Decimal extends Mage_Catalog_Block_Layer_Filter_Decimal
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('dmc_solr/catalog/layer/filter.phtml');
        $this->_filterModelName = 'solr/catalog_layer_filter_decimal';
    }

    public function shouldDisplayProductCount()
    {
        return Mage::helper('solr')->displayFilterItemCount();
    }
}
