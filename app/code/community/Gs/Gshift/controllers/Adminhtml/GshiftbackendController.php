<?php
class Gs_Gshift_Adminhtml_GshiftbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("gshift"));
	   $this->renderLayout();
    }
}