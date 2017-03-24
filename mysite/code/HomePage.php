<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 24/03/17
 * Time: 3:53 PM
 */
class HomePage extends Page
{

    private static $singular_name        = "Home Page";
    private static $plural_name          = "Home Pages";
    private static $db = array();
    
    static $defaults = array (
	    'ShowInMenus' => false,
	    'ShowInSearch' => false
    );
    
    private static $has_one = array();

    private static $has_many = array();

    private static $many_many = array();

    private static $belongs_many_many = array();

    private static $many_many_extraFields = array();

    private static $casting = array();

    private static $default_sort = '';

    private static $field_labels = array();

    private static $summary_fields = array();

    private static $required_fields = array(); //enforced through the "validate" method

    private static $searchable_fields = array();

    private static $default_child = "";

    private static $can_be_root = true;

    private static $hide_ancestor = null;
    
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        
        return $fields;
    }
    
}
class HomePage_Controller extends Page_Controller
{

    /**
     * array (
     *     'action', // anyone can access this action
     *     'action' => true, // same as above
     *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
     *     'action' => '->checkAction' // you can only access this action if >checkAction() returns true
     * );
     * @var array
     */
    private static $allowed_actions = array();

    public function init()
    {
        parent::init();
    }
}


