<?php
/**
 * 
 *
 * DISCLAIMER
 * This file is intended to only be used for educational purposes only,
 * It's free to be used at your own risk.
 */

/**
 *
 * @author     Fredrik Blanco
 */
class BlancoIts_PrintInvoiceHtml_Block_Adminhtml_Sales_Order_Invoice_View extends Mage_Adminhtml_Block_Sales_Order_Invoice_View
{
   
  

    public function __construct()
    {   
    parent::__construct();
   /*
    * We are going the rewrite the orginal function located in the parent class with this one.
    */
         if ($this->getInvoice()->getId()) {
            $this->_addButton('print', array(
                'label'     => Mage::helper('sales')->__('Print'),
                'class'     => 'save',
                'onclick'   => 'window.open(\''.$this->getPrintInvoiceUrl().'\')'
                )
            );
        }
    }

   /*
    * This one is new, from we create the url that will call our module
    */

     public function getPrintInvoiceUrl()
    {
        return $this->getUrl('PrintInvoiceHtml/order/printinvoice', array(
            'invoice_id' => $this->getInvoice()->getId()
        ));
    } 

 




}
