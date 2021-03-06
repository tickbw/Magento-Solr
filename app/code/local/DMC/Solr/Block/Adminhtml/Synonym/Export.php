<?php
/**
 * Apache Solr Search Engine for Magento
 *
 * @category  DMC
 * @package   DMC_Solr
 * @author    Team Magento <magento@digitalmanufaktur.com>
 * @version   0.1.6
 */


class DMC_Solr_Block_Adminhtml_Synonym_Export extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct ()
    {
        parent::__construct();

        $this->_objectId   = 'stopword_id';
        $this->_blockGroup = 'solr';
        $this->_mode       = 'export';
        $this->_controller = 'adminhtml_synonym';

        $this->_addButton('save', array(
                'label'     => Mage::helper('solr')->__('Export Dictionary'),
                'onclick'   => 'editForm.submit();',
                'class'     => 'save',
        ), 1);

        return $this;
    }

    public function getHeaderText ()
    {
        return Mage::helper('solr')->__('Export Dictionary');
    }
}
