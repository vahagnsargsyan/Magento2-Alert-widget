<?php
/**
 * @author    IdeaNative Dev Team
 * @copyright Copyright (c) IdeaNative.io, Inc. (https://ideanative.com/)
 * @package   Notice
 */

namespace IdeaNative\Notice\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

/**
 * Class Notice
 *
 * @package XDEV\Notice\Block\Widget
 */
class Notice extends Template implements BlockInterface
{
    /**
     * @var string
     */
    protected $_template = "widget/notice.phtml";
}
