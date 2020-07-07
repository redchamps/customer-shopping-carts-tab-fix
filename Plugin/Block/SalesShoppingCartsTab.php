<?php
namespace RedChamps\CustomerCartTabFix\Plugin\Block;

use Magento\Sales\Block\Adminhtml\ShoppingCartsTab;

class SalesShoppingCartsTab
{
    public function afterGetTabUrl(ShoppingCartsTab $subject, $result)
    {
        return $subject->getUrl('customer/*/carts', ['_current' => true]);
    }
}
