<?php namespace Cheycron\Menus\Presenters;

use Cheycron\Menus\MenuItem;

interface PresenterInterface
{
    /**
     * Get child menu items.
     *
     * @param \Cheycron\Menus\MenuItem $item
     *
     * @return string
     */
    public function getChildMenuItems(MenuItem $item);
    
    /**
     * Get close tag wrapper.
     *
     * @return string
     */
    public function getCloseTagWrapper();
    
    /**
     * Get divider tag wrapper.
     *
     * @return string
     */
    public function getDividerWrapper();
    
    /**
     * Get divider tag wrapper.
     *
     * @param \Cheycron\Menus\MenuItem $item
     *
     * @return mixed
     */
    public function getHeaderWrapper($item);
    
    /**
     * Get menu tag with dropdown wrapper.
     *
     * @param \Cheycron\Menus\MenuItem $item
     *
     * @return string
     */
    public function getMenuWithDropDownWrapper($item);
    
    /**
     * Get menu tag without dropdown wrapper.
     *
     * @param \Cheycron\Menus\MenuItem $item
     *
     * @return string
     */
    public function getMenuWithoutDropdownWrapper($item);
    
    /**
     * Get open tag wrapper.
     *
     * @return string
     */
    public function getOpenTagWrapper();
}
