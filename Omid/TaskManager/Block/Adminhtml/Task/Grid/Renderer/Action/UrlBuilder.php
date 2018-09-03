<?php
/**
 * Copyright © 2018 [COMPANY]. All rights reserved.
 * 
 * Omid_TaskManager tasks grid
 * 
 * @category    Omid_TaskManager
 * @author      Omid
 */

namespace Omid\TaskManager\Block\Adminhtml\Task\Grid\Renderer\Action;

class UrlBuilder
{
    /**
     * @var \Magento\Framework\UrlInterface
     */
    protected $frontendUrlBuilder;
    
    /**
     * @param \Magento\Framework\UrlInterface $frontendUrlBuilder
     */
    public function __construct(\Magento\Framework\UrlInterface $frontendUrlBuilder)
    {
        $this->frontendUrlBuilder = $frontendUrlBuilder;
    }
    /**
     * Get action url for rows action column in grid
     *
     * @param string $routePath
     * @param string $scope
     * @param string $store
     * @return string
     */
    public function getUrl($routePath, $scope, $store)
    {
        $this->frontendUrlBuilder->setScope($scope);
        $href = $this->frontendUrlBuilder->getUrl(
            $routePath,
            ['_current' => false, '_query' => '___store=' . $store]
        );
        return $href;
    }
}
