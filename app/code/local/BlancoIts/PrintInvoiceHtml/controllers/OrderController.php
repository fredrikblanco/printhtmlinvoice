<?php
class BlancoIts_PrintInvoiceHtml_OrderController extends Mage_Adminhtml_Controller_Action
{ 
  
public function printInvoiceAction()
    {

//Mage_Sales_Controller_Abstract

// Security check
   Mage::getSingleton('core/session', array('name'=>'adminhtml'));

//verify if the user is logged in to the backend
if(Mage::getSingleton('admin/session')->isLoggedIn()){


            $invoiceId = (int) $this->getRequest()->getParam('invoice_id');
            
            if ($invoiceId) {
            $invoice = Mage::getModel('sales/order_invoice')->load($invoiceId);
            $order = $invoice->getOrder();
            } 
            else {
            $orderId = (int) $this->getRequest()->getParam('order_id');
            $order = Mage::getModel('sales/order')->load($orderId);
            }

        
            Mage::register('current_order', $order);
            if (isset($invoice)) {
                Mage::register('current_invoice', $invoice);
            }

            
           
           $this->loadLayout('print');
           
           $this->renderLayout();
            
          
}
else
{
      var_dump($this->getLayout()->getUpdate()->getHandles());
$invoiceId = (int) $this->getRequest()->getParam('invoice_id');
            
            if ($invoiceId) {
            $invoice = Mage::getModel('sales/order_invoice')->load($invoiceId);
            $order = $invoice->getOrder();
            } 
            else {
            $orderId = (int) $this->getRequest()->getParam('order_id');
            $order = Mage::getModel('sales/order')->load($orderId);
            }

        
            Mage::register('current_order', $order);
            if (isset($invoice)) {
                Mage::register('current_invoice', $invoice);
            }
            $this->loadLayout('print');
            $this->renderLayout();
}




        

    }
}