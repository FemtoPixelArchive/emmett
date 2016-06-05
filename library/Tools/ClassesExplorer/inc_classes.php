<?php $data = array (
  'Marcel_Acl' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Acl',
      1 => 'Zend_Acl_Role_Interface',
      2 => 'Zend_Acl_Resource_Interface',
      3 => 'Zend_Acl_Exception',
      4 => 'Zend_Acl_Assert_Interface',
      5 => 'Zend_Acl_Role_Registry',
    ),
  ),
  'Marcel_Backoffice_Acl' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Marcel_Acl',
      1 => 'Zend_Auth_Adapter_Interface',
      2 => 'Zend_Acl_Role_Interface',
      3 => 'Zend_Acl',
      4 => 'Zend_Acl_Resource_Interface',
      5 => 'Zend_Acl_Exception',
      6 => 'Zend_Acl_Assert_Interface',
      7 => 'Zend_Acl_Role_Registry',
    ),
  ),
  'Marcel_Backoffice_Config' => 
  array (
    'instantiable' => false,
  ),
  'Marcel_Backoffice_Db_Table_Autodiscover' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Marcel_Db_Table_Abstract',
      1 => 'Zend_Db_Table_Rowset',
      2 => 'Zend_Db_Table_Abstract',
      3 => 'Zend_Db_Table_Definition',
      4 => 'Zend_Db_Table_Exception',
      5 => 'Zend_Db_Adapter_Abstract',
      6 => 'Zend_Cache_Core',
      7 => 'Zend_Db_Table_Select',
      8 => 'Zend_Db_Table_Rowset_Abstract',
      9 => 'Zend_Db_Table_Row_Abstract',
    ),
  ),
  'Marcel_Backoffice_Db_Table_Row_Autodiscover' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Marcel_Db_Table_Row_Abstract',
      1 => 'Marcel_Form_Abstract',
      2 => 'Zend_Db_Table_Row_Exception',
      3 => 'Zend_Db_Table_Row_Abstract',
      4 => 'Zend_Db_Table_Abstract',
      5 => 'Zend_Db_Table_Select',
      6 => 'Zend_Db_Table_Rowset_Abstract',
    ),
  ),
  'Marcel_Backoffice_Form_Autodiscover' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Marcel_Form_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Exception',
      3 => 'Zend_Form',
      4 => 'Zend_Config',
      5 => 'Zend_Loader_PluginLoader_Interface',
      6 => 'Zend_Form_Exception',
      7 => 'Zend_Form_Element',
      8 => 'Zend_Form_DisplayGroup',
      9 => 'Zend_View_Interface',
      10 => 'Zend_Form_Decorator_Interface',
      11 => 'Zend_Form_Decorator_Abstract',
      12 => 'Zend_Translate',
      13 => 'Zend_Translate_Adapter',
    ),
  ),
  'Marcel_Backoffice_Form_Element_CustomSelect' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Select',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Form_Element_Multi',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Exception',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Loader_PluginLoader_Interface',
      9 => 'Zend_Loader_PluginLoader',
      10 => 'Zend_Loader_Exception',
      11 => 'Zend_Filter_Interface',
      12 => 'Zend_View_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Marcel_Backoffice_Model' => 
  array (
    'instantiable' => false,
  ),
  'Marcel_Backoffice_Plugin_Auth' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Marcel_Db_Table_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Abstract',
      1 => 'Zend_Db_Table_Definition',
      2 => 'Zend_Db_Table_Exception',
      3 => 'Zend_Db_Adapter_Abstract',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Db_Table_Select',
      6 => 'Zend_Db_Table_Rowset_Abstract',
      7 => 'Zend_Db_Table_Row_Abstract',
    ),
  ),
  'Marcel_Db_Table_Row' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Marcel_Db_Table_Row_Abstract',
      1 => 'Marcel_Form_Abstract',
      2 => 'Zend_Db_Table_Row_Exception',
      3 => 'Zend_Db_Table_Row_Abstract',
      4 => 'Zend_Db_Table_Abstract',
      5 => 'Zend_Db_Table_Select',
      6 => 'Zend_Db_Table_Rowset_Abstract',
    ),
  ),
  'Marcel_Db_Table_Row_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Row',
      1 => 'Marcel_Form_Abstract',
      2 => 'Zend_Db_Table_Row_Exception',
      3 => 'Zend_Db_Table_Row_Abstract',
      4 => 'Zend_Db_Table_Abstract',
      5 => 'Zend_Db_Table_Select',
      6 => 'Zend_Db_Table_Rowset_Abstract',
    ),
  ),
  'Marcel_Form_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Form',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Loader_PluginLoader_Interface',
      5 => 'Zend_Form_Exception',
      6 => 'Zend_Form_Element',
      7 => 'Zend_Form_DisplayGroup',
      8 => 'Zend_View_Interface',
      9 => 'Zend_Form_Decorator_Interface',
      10 => 'Zend_Form_Decorator_Abstract',
      11 => 'Zend_Translate',
      12 => 'Zend_Translate_Adapter',
    ),
  ),
  'Marcel_Form_Decorator_FilePreview' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_File',
      1 => 'Zend_Form_Decorator_Marker_File_Interface',
      2 => 'Zend_Form_Decorator_Interface',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Decorator_Abstract',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Form',
      7 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Marcel_Form_Element_FilePreview' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_File',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Loader_PluginLoader_Interface',
      3 => 'Zend_File_Transfer_Adapter_Abstract',
      4 => 'Zend_Filter_Interface',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_View_Interface',
      8 => 'Zend_Config',
      9 => 'Zend_Form_Exception',
      10 => 'Zend_Form_Element',
      11 => 'Zend_Form_Decorator_Interface',
      12 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Marcel_Plugin_Ajax' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Marcel_Plugin_Auth' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Marcel_Plugin_Encoding' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Marcel_Plugin_Expire' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Config_Ini',
      2 => 'Zend_Controller_Request_Abstract',
      3 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Marcel_Plugin_Layout' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Marcel_Plugin_Locale' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Marcel_Plugin_Mock' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Marcel_Plugin_Staticfier' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Marcel_Translate' => 
  array (
    'instantiable' => true,
  ),
  'Marcel_View_Helper_ClickableUrl' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Marcel_View_Helper_FormFilePreview' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormFile',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Helper_FormElement',
      4 => 'Zend_View_Interface',
      5 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Marcel_View_Helper_ResourceVersion' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Marcel_View_Helper_TruncateString' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_Application_Resource_Jquery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'ZendX_JQuery_View_Helper_JQuery_Container',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'ZendX_Console_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_Exception',
    ),
  ),
  'ZendX_Console_Process_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_Console_Exception',
    ),
  ),
  'ZendX_Console_Process_Unix' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'ZendX_Console_Process_Exception',
    ),
  ),
  'ZendX_Db_Adapter_Firebird' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Abstract',
      1 => 'ZendX_Db_Adapter_Firebird_Exception',
      2 => 'ZendX_Db_Statement_Firebird',
      3 => 'Zend_Db_Adapter_Exception',
      4 => 'Zend_Db_Expr',
      5 => 'Zend_Config',
      6 => 'Zend_Db_Profiler',
      7 => 'Zend_Db_Profiler_Exception',
      8 => 'Zend_Db_Statement_Interface',
      9 => 'Zend_Db_Select',
    ),
  ),
  'ZendX_Db_Adapter_Firebird_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Exception',
    ),
  ),
  'ZendX_Db_Statement_Firebird' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement',
      1 => 'Zend_Db_Statement_Interface',
      2 => 'ZendX_Db_Statement_Firebird_Exception',
      3 => 'Zend_Db_Statement_Exception',
      4 => 'Zend_Db_Adapter_Abstract',
    ),
  ),
  'ZendX_Db_Statement_Firebird_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement_Exception',
    ),
  ),
  'ZendX_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'ZendX_JQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Interface',
      1 => 'Zend_Form',
    ),
  ),
  'ZendX_JQuery_Controller_Action_Helper_AutoComplete' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_AutoComplete_Abstract',
      1 => 'Zend_Controller_Action_Exception',
      2 => 'Zend_Controller_Action',
      3 => 'Zend_Controller_Front',
      4 => 'Zend_Controller_Request_Abstract',
      5 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'ZendX_JQuery_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'ZendX_JQuery_Form' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Loader_PluginLoader_Interface',
      5 => 'Zend_Form_Exception',
      6 => 'Zend_Form_Element',
      7 => 'Zend_Form_DisplayGroup',
      8 => 'Zend_Form_Decorator_Interface',
      9 => 'Zend_Form_Decorator_Abstract',
      10 => 'Zend_Translate',
      11 => 'Zend_Translate_Adapter',
    ),
  ),
  'ZendX_JQuery_Form_Decorator_AccordionContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Form_Decorator_UiWidgetContainer',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Decorator_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Decorator_Abstract',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Form',
    ),
  ),
  'ZendX_JQuery_Form_Decorator_AccordionPane' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Form_Decorator_UiWidgetPane',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Decorator_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Decorator_Abstract',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Form',
    ),
  ),
  'ZendX_JQuery_Form_Decorator_DialogContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Form_Decorator_UiWidgetContainer',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Decorator_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Decorator_Abstract',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Form',
    ),
  ),
  'ZendX_JQuery_Form_Decorator_TabContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Form_Decorator_UiWidgetContainer',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Decorator_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Decorator_Abstract',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Form',
    ),
  ),
  'ZendX_JQuery_Form_Decorator_TabPane' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Form_Decorator_UiWidgetPane',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Decorator_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Decorator_Abstract',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Form',
    ),
  ),
  'ZendX_JQuery_Form_Decorator_UiWidgetContainer' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Decorator_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
    ),
  ),
  'ZendX_JQuery_Form_Decorator_UiWidgetElement' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_ViewHelper',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'ZendX_JQuery_Form_Decorator_UiWidgetElementMarker',
      3 => 'Zend_Form_Decorator_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Config',
      6 => 'Zend_Form_Decorator_Abstract',
      7 => 'Zend_Form',
    ),
  ),
  'ZendX_JQuery_Form_Decorator_UiWidgetElementMarker' => 
  array (
    'instantiable' => false,
  ),
  'ZendX_JQuery_Form_Decorator_UiWidgetPane' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Decorator_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
    ),
  ),
  'ZendX_JQuery_Form_Element_AutoComplete' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Form_Element_UiWidget',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_View_Interface',
      3 => 'ZendX_JQuery_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Config',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Form_Exception',
      9 => 'Zend_Loader_PluginLoader_Interface',
      10 => 'Zend_Loader_PluginLoader',
      11 => 'Zend_Loader_Exception',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'ZendX_JQuery_Form_Element_ColorPicker' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Form_Element_UiWidget',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_View_Interface',
      3 => 'ZendX_JQuery_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Config',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Form_Exception',
      9 => 'Zend_Loader_PluginLoader_Interface',
      10 => 'Zend_Loader_PluginLoader',
      11 => 'Zend_Loader_Exception',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'ZendX_JQuery_Form_Element_DatePicker' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Form_Element_UiWidget',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_View_Interface',
      3 => 'ZendX_JQuery_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Config',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Form_Exception',
      9 => 'Zend_Loader_PluginLoader_Interface',
      10 => 'Zend_Loader_PluginLoader',
      11 => 'Zend_Loader_Exception',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'ZendX_JQuery_Form_Element_Slider' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Form_Element_UiWidget',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_View_Interface',
      3 => 'ZendX_JQuery_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Config',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Form_Exception',
      9 => 'Zend_Loader_PluginLoader_Interface',
      10 => 'Zend_Loader_PluginLoader',
      11 => 'Zend_Loader_Exception',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'ZendX_JQuery_Form_Element_Spinner' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Form_Element_UiWidget',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_View_Interface',
      3 => 'ZendX_JQuery_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Config',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Form_Exception',
      9 => 'Zend_Loader_PluginLoader_Interface',
      10 => 'Zend_Loader_PluginLoader',
      11 => 'Zend_Loader_Exception',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'ZendX_JQuery_Form_Element_UiWidget' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_View_Interface',
      3 => 'ZendX_JQuery_Form_Exception',
      4 => 'Zend_Config',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Form_Exception',
      8 => 'Zend_Loader_PluginLoader_Interface',
      9 => 'Zend_Loader_PluginLoader',
      10 => 'Zend_Loader_Exception',
      11 => 'Zend_Filter_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'ZendX_JQuery_Form_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Exception',
    ),
  ),
  'ZendX_JQuery_View_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_Exception',
    ),
  ),
  'ZendX_JQuery_View_Helper_AccordionContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_View_Helper_UiWidget',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_AccordionPane' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_View_Helper_UiWidgetPane',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_AjaxLink' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HtmlElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'ZendX_JQuery_View_Helper_AutoComplete' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_View_Helper_UiWidget',
      1 => 'Zend_View_Helper_Interface',
      2 => 'ZendX_JQuery_Exception',
      3 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_ColorPicker' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_View_Helper_UiWidget',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_DatePicker' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_View_Helper_UiWidget',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_DialogContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_View_Helper_UiWidget',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_JQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'ZendX_JQuery_View_Helper_JQuery_Container',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Exception',
    ),
  ),
  'ZendX_JQuery_View_Helper_JQuery_Container' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_Slider' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_View_Helper_UiWidget',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_Spinner' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_View_Helper_UiWidget',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_TabContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_View_Helper_UiWidget',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_TabPane' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_View_Helper_UiWidgetPane',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_UiWidget' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HtmlElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'ZendX_JQuery_View_Helper_UiWidgetPane' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'ZendX_JQuery_View_Helper_UiWidget',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Acl' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Acl_Role_Interface',
      1 => 'Zend_Acl_Resource_Interface',
      2 => 'Zend_Acl_Exception',
      3 => 'Zend_Acl_Assert_Interface',
      4 => 'Zend_Acl_Role_Registry',
    ),
  ),
  'Zend_Acl_Assert_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Acl',
      1 => 'Zend_Acl_Role_Interface',
      2 => 'Zend_Acl_Resource_Interface',
    ),
  ),
  'Zend_Acl_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Acl_Resource' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Acl_Resource_Interface',
    ),
  ),
  'Zend_Acl_Resource_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Acl_Role' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Acl_Role_Interface',
    ),
  ),
  'Zend_Acl_Role_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Acl_Role_Registry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Acl_Role_Interface',
      1 => 'Zend_Acl_Role_Registry_Exception',
    ),
  ),
  'Zend_Acl_Role_Registry_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Acl_Exception',
    ),
  ),
  'Zend_Amf_Adobe_Auth' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Auth_Abstract',
      1 => 'Zend_Auth_Adapter_Interface',
      2 => 'Zend_Acl',
      3 => 'Zend_Auth_Adapter_Exception',
      4 => 'Zend_Auth_Result',
    ),
  ),
  'Zend_Amf_Adobe_DbInspector' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Abstract',
    ),
  ),
  'Zend_Amf_Adobe_Introspector' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Acl',
      1 => 'Zend_Server_Reflection_Class',
      2 => 'Zend_Reflection_Property',
    ),
  ),
  'Zend_Amf_Auth_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Adapter_Interface',
      1 => 'Zend_Auth_Adapter_Exception',
      2 => 'Zend_Auth_Result',
    ),
  ),
  'Zend_Amf_Constants' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Amf_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Amf_Parse_Amf0_Deserializer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Parse_Deserializer',
      1 => 'Zend_Amf_Exception',
      2 => 'Zend_Date',
      3 => 'Zend_Amf_Parse_InputStream',
    ),
  ),
  'Zend_Amf_Parse_Amf0_Serializer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Parse_Serializer',
      1 => 'Zend_Amf_Exception',
      2 => 'Zend_Date',
      3 => 'Zend_Amf_Parse_OutputStream',
    ),
  ),
  'Zend_Amf_Parse_Amf3_Deserializer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Parse_Deserializer',
      1 => 'Zend_Amf_Exception',
      2 => 'Zend_Date',
      3 => 'Zend_Amf_Parse_InputStream',
    ),
  ),
  'Zend_Amf_Parse_Amf3_Serializer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Parse_Serializer',
      1 => 'Zend_Amf_Value_ByteArray',
      2 => 'Zend_Date',
      3 => 'Zend_Amf_Parse_OutputStream',
    ),
  ),
  'Zend_Amf_Parse_Deserializer' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Parse_InputStream',
    ),
  ),
  'Zend_Amf_Parse_InputStream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Util_BinaryStream',
      1 => 'Zend_Amf_Exception',
    ),
  ),
  'Zend_Amf_Parse_OutputStream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Util_BinaryStream',
      1 => 'Zend_Amf_Exception',
    ),
  ),
  'Zend_Amf_Parse_Resource_MysqlResult' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Amf_Parse_Resource_MysqliResult' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Amf_Parse_Resource_Stream' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Amf_Parse_Serializer' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Parse_OutputStream',
    ),
  ),
  'Zend_Amf_Parse_TypeLoader' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_PluginLoader_Interface',
    ),
  ),
  'Zend_Amf_Request' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Parse_InputStream',
      1 => 'Zend_Amf_Value_MessageHeader',
      2 => 'Zend_Amf_Value_MessageBody',
    ),
  ),
  'Zend_Amf_Request_Http' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Request',
      1 => 'Zend_Amf_Parse_InputStream',
      2 => 'Zend_Amf_Value_MessageHeader',
      3 => 'Zend_Amf_Value_MessageBody',
    ),
  ),
  'Zend_Amf_Response' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Parse_OutputStream',
      1 => 'Zend_Amf_Value_MessageBody',
      2 => 'Zend_Amf_Value_MessageHeader',
    ),
  ),
  'Zend_Amf_Response_Http' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Response',
      1 => 'Zend_Amf_Parse_OutputStream',
      2 => 'Zend_Amf_Value_MessageBody',
      3 => 'Zend_Amf_Value_MessageHeader',
    ),
  ),
  'Zend_Amf_Server' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Interface',
      1 => 'Zend_Amf_Auth_Abstract',
      2 => 'Zend_Acl',
      3 => 'Zend_Loader_PluginLoader',
      4 => 'Zend_Amf_Server_Exception',
      5 => 'Zend_Amf_Value_Messaging_CommandMessage',
      6 => 'Zend_Amf_Value_Messaging_AcknowledgeMessage',
      7 => 'Zend_Amf_Value_Messaging_ErrorMessage',
      8 => 'Zend_Amf_Request',
      9 => 'Zend_Amf_Response',
    ),
  ),
  'Zend_Amf_Server_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Exception',
    ),
  ),
  'Zend_Amf_Util_BinaryStream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Exception',
    ),
  ),
  'Zend_Amf_Value_ByteArray' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Amf_Value_MessageBody' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Amf_Value_MessageHeader' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Amf_Value_Messaging_AbstractMessage' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Amf_Value_Messaging_AcknowledgeMessage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Value_Messaging_AsyncMessage',
    ),
  ),
  'Zend_Amf_Value_Messaging_ArrayCollection' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Amf_Value_Messaging_AsyncMessage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Value_Messaging_AbstractMessage',
    ),
  ),
  'Zend_Amf_Value_Messaging_CommandMessage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Value_Messaging_AsyncMessage',
    ),
  ),
  'Zend_Amf_Value_Messaging_ErrorMessage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Value_Messaging_AcknowledgeMessage',
    ),
  ),
  'Zend_Amf_Value_Messaging_RemotingMessage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Amf_Value_Messaging_AbstractMessage',
    ),
  ),
  'Zend_Amf_Value_TraitsInfo' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Application' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Application_Exception',
      2 => 'Zend_Loader_Autoloader',
      3 => 'Zend_Application_Bootstrap_BootstrapAbstract',
    ),
  ),
  'Zend_Application_Bootstrap_Bootstrap' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Bootstrap_BootstrapAbstract',
      1 => 'Zend_Application_Bootstrap_ResourceBootstrapper',
      2 => 'Zend_Application_Bootstrap_Bootstrapper',
      3 => 'Zend_Application',
      4 => 'Zend_Application_Bootstrap_Exception',
      5 => 'Zend_Loader_Autoloader_Resource',
      6 => 'Zend_Application_Module_Bootstrap',
      7 => 'Zend_Application_Resource_Resource',
      8 => 'Zend_Loader_PluginLoader_Interface',
    ),
  ),
  'Zend_Application_Bootstrap_BootstrapAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Bootstrap_Bootstrapper',
      1 => 'Zend_Application_Bootstrap_ResourceBootstrapper',
      2 => 'Zend_Application',
      3 => 'Zend_Application_Bootstrap_Exception',
      4 => 'Zend_Application_Resource_Resource',
      5 => 'Zend_Loader_PluginLoader_Interface',
    ),
  ),
  'Zend_Application_Bootstrap_Bootstrapper' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Application',
    ),
  ),
  'Zend_Application_Bootstrap_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Exception',
    ),
  ),
  'Zend_Application_Bootstrap_ResourceBootstrapper' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_Resource',
      1 => 'Zend_Config',
      2 => 'Zend_Loader_PluginLoader_Interface',
      3 => 'Zend_Loader_PluginLoader',
    ),
  ),
  'Zend_Application_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Application_Module_Autoloader' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_Autoloader_Resource',
      1 => 'Zend_Loader_Autoloader_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Loader_Exception',
    ),
  ),
  'Zend_Application_Module_Bootstrap' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Bootstrap_Bootstrap',
      1 => 'Zend_Application_Bootstrap_Bootstrapper',
      2 => 'Zend_Application_Bootstrap_ResourceBootstrapper',
      3 => 'Zend_Application',
      4 => 'Zend_Application_Bootstrap_Exception',
      5 => 'Zend_Loader_Autoloader_Resource',
      6 => 'Zend_Application_Bootstrap_BootstrapAbstract',
      7 => 'Zend_Application_Resource_Resource',
      8 => 'Zend_Loader_PluginLoader_Interface',
    ),
  ),
  'Zend_Application_Resource_Cachemanager' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Cache_Manager',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Db' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Db_Adapter_Abstract',
      3 => 'Zend_Cache_Core',
      4 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Dojo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Dojo_View_Helper_Dojo_Container',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Exception',
    ),
  ),
  'Zend_Application_Resource_Frontcontroller' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Controller_Front',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Layout' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Layout',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Locale' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Locale',
      3 => 'Zend_Cache_Core',
      4 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Log' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Log',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Mail' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Mail_Transport_Abstract',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Modules' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Application_Resource_Exception',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Multidb' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Db_Adapter_Abstract',
      3 => 'Zend_Application_Resource_Exception',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Navigation' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Navigation',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Resource' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_ResourceAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_Resource',
      1 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Router' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Controller_Router_Rewrite',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Session' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Session_SaveHandler_Interface',
      3 => 'Zend_Application_Resource_Exception',
      4 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Translate' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Translate',
      3 => 'Zend_Application_Resource_Exception',
      4 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_Useragent' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_Http_UserAgent',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Application_Resource_View' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Application_Resource_ResourceAbstract',
      1 => 'Zend_Application_Resource_Resource',
      2 => 'Zend_View',
      3 => 'Zend_Application_Bootstrap_Bootstrapper',
    ),
  ),
  'Zend_Auth' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Storage_Interface',
      1 => 'Zend_Auth_Adapter_Interface',
      2 => 'Zend_Auth_Result',
    ),
  ),
  'Zend_Auth_Adapter_DbTable' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Adapter_Interface',
      1 => 'Zend_Db_Adapter_Abstract',
      2 => 'Zend_Auth_Adapter_Exception',
      3 => 'Zend_Db_Select',
      4 => 'Zend_Auth_Result',
    ),
  ),
  'Zend_Auth_Adapter_Digest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Adapter_Interface',
      1 => 'Zend_Auth_Adapter_Exception',
      2 => 'Zend_Auth_Result',
    ),
  ),
  'Zend_Auth_Adapter_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Exception',
    ),
  ),
  'Zend_Auth_Adapter_Http' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Adapter_Interface',
      1 => 'Zend_Auth_Adapter_Exception',
      2 => 'Zend_Auth_Adapter_Http_Resolver_Interface',
      3 => 'Zend_Controller_Request_Http',
      4 => 'Zend_Controller_Response_Http',
      5 => 'Zend_Auth_Result',
    ),
  ),
  'Zend_Auth_Adapter_Http_Resolver_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Exception',
    ),
  ),
  'Zend_Auth_Adapter_Http_Resolver_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Adapter_Http_Resolver_Interface',
      1 => 'Zend_Auth_Adapter_Http_Resolver_Exception',
    ),
  ),
  'Zend_Auth_Adapter_Http_Resolver_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Auth_Adapter_InfoCard' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Adapter_Interface',
      1 => 'Zend_InfoCard_Adapter_Interface',
      2 => 'Zend_InfoCard_Cipher_Pki_Interface',
      3 => 'Zend_InfoCard_Cipher_Symmetric_Interface',
      4 => 'Zend_InfoCard_Exception',
      5 => 'Zend_Auth_Result',
    ),
  ),
  'Zend_Auth_Adapter_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Adapter_Exception',
      1 => 'Zend_Auth_Result',
    ),
  ),
  'Zend_Auth_Adapter_Ldap' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Adapter_Interface',
      1 => 'Zend_Ldap',
      2 => 'Zend_Auth_Adapter_Exception',
      3 => 'Zend_Auth_Result',
    ),
  ),
  'Zend_Auth_Adapter_OpenId' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Adapter_Interface',
      1 => 'Zend_OpenId_Consumer_Storage',
      2 => 'Zend_Controller_Response_Abstract',
      3 => 'Zend_Http_Client',
      4 => 'Zend_Auth_Adapter_Exception',
      5 => 'Zend_Auth_Result',
    ),
  ),
  'Zend_Auth_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Auth_Result' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Auth_Storage_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Exception',
    ),
  ),
  'Zend_Auth_Storage_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Storage_Exception',
    ),
  ),
  'Zend_Auth_Storage_NonPersistent' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Storage_Interface',
      1 => 'Zend_Auth_Storage_Exception',
    ),
  ),
  'Zend_Auth_Storage_Session' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Auth_Storage_Interface',
    ),
  ),
  'Zend_Barcode' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Exception',
    ),
  ),
  'Zend_Barcode_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Barcode_Object_Code128' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_ObjectAbstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Code25' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_ObjectAbstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Code25interleaved' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_Code25',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Code39' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_ObjectAbstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Ean13' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_ObjectAbstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Ean2' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_Ean5',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Ean5' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_Ean13',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Ean8' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_Ean13',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Error' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_ObjectAbstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Exception',
    ),
  ),
  'Zend_Barcode_Object_Identcode' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_Code25interleaved',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Itf14' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_Code25interleaved',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Leitcode' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_Identcode',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_ObjectAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Planet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_Postnet',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Postnet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_ObjectAbstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Royalmail' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_ObjectAbstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Upca' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_Ean13',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Object_Upce' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Object_Ean13',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Renderer_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Exception',
    ),
  ),
  'Zend_Barcode_Renderer_Image' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Renderer_RendererAbstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Renderer_Pdf' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Renderer_RendererAbstract',
      1 => 'Zend_Pdf_Font',
      2 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Renderer_RendererAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
    ),
  ),
  'Zend_Barcode_Renderer_Svg' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Barcode_Renderer_RendererAbstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Cache' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Exception',
      1 => 'Zend_Cache_Core',
      2 => 'Zend_Cache_Backend',
    ),
  ),
  'Zend_Cache_Backend' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_Apc' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_ExtendedInterface',
      2 => 'Zend_Cache_Backend_Interface',
      3 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_BlackHole' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_ExtendedInterface',
      2 => 'Zend_Cache_Backend_Interface',
      3 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_ExtendedInterface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend_Interface',
    ),
  ),
  'Zend_Cache_Backend_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_ExtendedInterface',
      2 => 'Zend_Cache_Backend_Interface',
      3 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Cache_Backend_Libmemcached' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_ExtendedInterface',
      2 => 'Zend_Cache_Backend_Interface',
      3 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_Memcached' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_ExtendedInterface',
      2 => 'Zend_Cache_Backend_Interface',
      3 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_Sqlite' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_ExtendedInterface',
      2 => 'Zend_Cache_Backend_Interface',
      3 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_Static' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_Interface',
      2 => 'Zend_Cache_Core',
      3 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_Test' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_ExtendedInterface',
      2 => 'Zend_Cache_Backend_Interface',
      3 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_TwoLevels' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_ExtendedInterface',
      2 => 'Zend_Cache_Backend_Interface',
      3 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_WinCache' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_ExtendedInterface',
      2 => 'Zend_Cache_Backend_Interface',
      3 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_Xcache' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_Interface',
      2 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_ZendPlatform' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_Interface',
      2 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_ZendServer' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Cache_Backend_Interface',
      2 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_ZendServer_Disk' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend_ZendServer',
      1 => 'Zend_Cache_Backend_Interface',
      2 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Backend_ZendServer_ShMem' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend_ZendServer',
      1 => 'Zend_Cache_Backend_Interface',
      2 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Core' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Cache_Exception',
      2 => 'Zend_Cache_Backend',
    ),
  ),
  'Zend_Cache_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Cache_Frontend_Capture' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Core',
      1 => 'Zend_Config',
      2 => 'Zend_Cache_Exception',
      3 => 'Zend_Cache_Backend',
    ),
  ),
  'Zend_Cache_Frontend_Class' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Core',
      1 => 'Zend_Cache_Exception',
      2 => 'Zend_Config',
      3 => 'Zend_Cache_Backend',
    ),
  ),
  'Zend_Cache_Frontend_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Core',
      1 => 'Zend_Cache_Exception',
      2 => 'Zend_Config',
      3 => 'Zend_Cache_Backend',
    ),
  ),
  'Zend_Cache_Frontend_Function' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Core',
      1 => 'Zend_Cache_Exception',
      2 => 'Zend_Config',
      3 => 'Zend_Cache_Backend',
    ),
  ),
  'Zend_Cache_Frontend_Output' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Core',
      1 => 'Zend_Config',
      2 => 'Zend_Cache_Backend',
      3 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Cache_Frontend_Page' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Core',
      1 => 'Zend_Cache_Exception',
      2 => 'Zend_Config',
      3 => 'Zend_Cache_Backend',
    ),
  ),
  'Zend_Cache_Manager' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Core',
      1 => 'Zend_Cache_Exception',
    ),
  ),
  'Zend_Captcha_Adapter' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Interface',
      1 => 'Zend_View_Interface',
      2 => 'Zend_Form_Decorator_Interface',
      3 => 'Zend_Validate_Exception',
    ),
  ),
  'Zend_Captcha_Base' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Captcha_Adapter',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Validate_Exception',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Captcha_Dumb' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Captcha_Word',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Captcha_Adapter',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Session_Namespace',
      5 => 'Zend_Config',
      6 => 'Zend_Form_Element',
      7 => 'Zend_Captcha_Base',
      8 => 'Zend_Validate_Abstract',
      9 => 'Zend_Validate_Exception',
      10 => 'Zend_Translate',
      11 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Captcha_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Captcha_Figlet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Captcha_Word',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Captcha_Adapter',
      3 => 'Zend_Config',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Session_Namespace',
      6 => 'Zend_Form_Element',
      7 => 'Zend_Captcha_Base',
      8 => 'Zend_Validate_Abstract',
      9 => 'Zend_Validate_Exception',
      10 => 'Zend_Translate',
      11 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Captcha_Image' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Captcha_Word',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Captcha_Adapter',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Session_Namespace',
      5 => 'Zend_Config',
      6 => 'Zend_Form_Element',
      7 => 'Zend_Captcha_Base',
      8 => 'Zend_Validate_Abstract',
      9 => 'Zend_Validate_Exception',
      10 => 'Zend_Translate',
      11 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Captcha_ReCaptcha' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Captcha_Base',
      1 => 'Zend_Captcha_Adapter',
      2 => 'Zend_Validate_Interface',
      3 => 'Zend_Config',
      4 => 'Zend_Service_ReCaptcha',
      5 => 'Zend_View_Interface',
      6 => 'Zend_Form_Element',
      7 => 'Zend_Validate_Abstract',
      8 => 'Zend_Validate_Exception',
      9 => 'Zend_Translate',
      10 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Captcha_Word' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Captcha_Base',
      1 => 'Zend_Captcha_Adapter',
      2 => 'Zend_Validate_Interface',
      3 => 'Zend_Session_Namespace',
      4 => 'Zend_Config',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Validate_Abstract',
      7 => 'Zend_Validate_Exception',
      8 => 'Zend_Translate',
      9 => 'Zend_Translate_Adapter',
      10 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Cloud_AbstractFactory' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Cloud_DocumentService_Adapter',
      2 => 'Zend_Cloud_QueueService_Adapter',
      3 => 'Zend_Cloud_StorageService_Adapter',
    ),
  ),
  'Zend_Cloud_DocumentService_Adapter' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_DocumentService_DocumentSet',
      1 => 'Zend_Cloud_DocumentService_Document',
      2 => 'Zend_Cloud_DocumentService_Query',
    ),
  ),
  'Zend_Cloud_DocumentService_Adapter_AbstractAdapter' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_DocumentService_Adapter',
      1 => 'Zend_Cloud_DocumentService_DocumentSet',
      2 => 'Zend_Cloud_DocumentService_Document',
      3 => 'Zend_Cloud_DocumentService_Query',
    ),
  ),
  'Zend_Cloud_DocumentService_Adapter_SimpleDb' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_DocumentService_Adapter_AbstractAdapter',
      1 => 'Zend_Cloud_DocumentService_Adapter',
      2 => 'Zend_Config',
      3 => 'Zend_Cloud_DocumentService_DocumentSet',
      4 => 'Zend_Cloud_DocumentService_Document',
      5 => 'Zend_Cloud_DocumentService_Adapter_SimpleDb_Query',
      6 => 'Zend_Service_Amazon_SimpleDb',
      7 => 'Zend_Service_Amazon_SimpleDb_Page',
    ),
  ),
  'Zend_Cloud_DocumentService_Adapter_SimpleDb_Query' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_DocumentService_Query',
      1 => 'Zend_Cloud_DocumentService_QueryAdapter',
      2 => 'Zend_Cloud_DocumentService_Adapter_SimpleDb',
    ),
  ),
  'Zend_Cloud_DocumentService_Adapter_WindowsAzure' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_DocumentService_Adapter_AbstractAdapter',
      1 => 'Zend_Cloud_DocumentService_Adapter',
      2 => 'Zend_Cloud_DocumentService_Document',
      3 => 'Zend_Cloud_DocumentService_DocumentSet',
      4 => 'Zend_Cloud_DocumentService_Adapter_WindowsAzure_Query',
      5 => 'Zend_Cloud_DocumentService_Query',
      6 => 'Zend_Service_WindowsAzure_Storage_Table',
      7 => 'Zend_Service_WindowsAzure_Storage_TableEntity',
      8 => 'Zend_Cloud_DocumentService_Exception',
    ),
  ),
  'Zend_Cloud_DocumentService_Adapter_WindowsAzure_Query' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_DocumentService_QueryAdapter',
      1 => 'Zend_Service_WindowsAzure_Storage_TableEntityQuery',
      2 => 'Zend_Cloud_OperationNotAvailableException',
    ),
  ),
  'Zend_Cloud_DocumentService_Document' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Cloud_DocumentService_DocumentSet' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Cloud_DocumentService_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_Exception',
    ),
  ),
  'Zend_Cloud_DocumentService_Factory' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_AbstractFactory',
      1 => 'Zend_Config',
      2 => 'Zend_Cloud_DocumentService_Adapter',
      3 => 'Zend_Cloud_QueueService_Adapter',
      4 => 'Zend_Cloud_StorageService_Adapter',
    ),
  ),
  'Zend_Cloud_DocumentService_Query' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_DocumentService_QueryAdapter',
    ),
  ),
  'Zend_Cloud_DocumentService_QueryAdapter' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Cloud_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Cloud_OperationNotAvailableException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Cloud_QueueService_Adapter' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_QueueService_Message',
    ),
  ),
  'Zend_Cloud_QueueService_Adapter_AbstractAdapter' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_QueueService_Adapter',
      1 => 'Zend_Cloud_QueueService_Message',
    ),
  ),
  'Zend_Cloud_QueueService_Adapter_Sqs' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_QueueService_Adapter_AbstractAdapter',
      1 => 'Zend_Cloud_QueueService_Adapter',
      2 => 'Zend_Config',
      3 => 'Zend_Cloud_QueueService_Message',
      4 => 'Zend_Service_Amazon_Sqs',
    ),
  ),
  'Zend_Cloud_QueueService_Adapter_WindowsAzure' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_QueueService_Adapter_AbstractAdapter',
      1 => 'Zend_Cloud_QueueService_Adapter',
      2 => 'Zend_Config',
      3 => 'Zend_Cloud_QueueService_Message',
    ),
  ),
  'Zend_Cloud_QueueService_Adapter_ZendQueue' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_QueueService_Adapter_AbstractAdapter',
      1 => 'Zend_Cloud_QueueService_Adapter',
      2 => 'Zend_Config',
      3 => 'Zend_Cloud_QueueService_Message',
      4 => 'Zend_Queue',
    ),
  ),
  'Zend_Cloud_QueueService_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_Exception',
    ),
  ),
  'Zend_Cloud_QueueService_Factory' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_AbstractFactory',
      1 => 'Zend_Config',
      2 => 'Zend_Cloud_DocumentService_Adapter',
      3 => 'Zend_Cloud_QueueService_Adapter',
      4 => 'Zend_Cloud_StorageService_Adapter',
    ),
  ),
  'Zend_Cloud_QueueService_Message' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Cloud_QueueService_MessageSet' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Cloud_StorageService_Adapter' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Cloud_StorageService_Adapter_FileSystem' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_StorageService_Adapter',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Cloud_StorageService_Adapter_Nirvanix' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_StorageService_Adapter',
      1 => 'Zend_Config',
      2 => 'Zend_Service_Nirvanix',
    ),
  ),
  'Zend_Cloud_StorageService_Adapter_S3' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_StorageService_Adapter',
      1 => 'Zend_Config',
      2 => 'Zend_Service_Amazon_S3',
    ),
  ),
  'Zend_Cloud_StorageService_Adapter_WindowsAzure' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_StorageService_Adapter',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Cloud_StorageService_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_Exception',
    ),
  ),
  'Zend_Cloud_StorageService_Factory' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Cloud_AbstractFactory',
      1 => 'Zend_Config',
      2 => 'Zend_Cloud_DocumentService_Adapter',
      3 => 'Zend_Cloud_QueueService_Adapter',
      4 => 'Zend_Cloud_StorageService_Adapter',
    ),
  ),
  'Zend_CodeGenerator_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
    ),
  ),
  'Zend_CodeGenerator_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_CodeGenerator_Php_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Abstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_CodeGenerator_Php_Body' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Abstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_CodeGenerator_Php_Class' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Abstract',
      1 => 'Zend_Reflection_Class',
      2 => 'Zend_CodeGenerator_Php_Docblock',
      3 => 'Zend_CodeGenerator_Php_File',
      4 => 'Zend_CodeGenerator_Php_Property',
      5 => 'Zend_CodeGenerator_Php_Method',
      6 => 'Zend_Config',
      7 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_CodeGenerator_Php_Docblock' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Abstract',
      1 => 'Zend_Reflection_Docblock',
      2 => 'Zend_CodeGenerator_Php_Docblock_Tag',
      3 => 'Zend_Config',
      4 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_CodeGenerator_Php_Docblock_Tag' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Abstract',
      1 => 'Zend_Reflection_Docblock_Tag',
      2 => 'Zend_Loader_PluginLoader',
      3 => 'Zend_Config',
      4 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_CodeGenerator_Php_Docblock_Tag_License' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Docblock_Tag',
      1 => 'Zend_Reflection_Docblock_Tag',
      2 => 'Zend_Loader_PluginLoader',
      3 => 'Zend_CodeGenerator_Php_Abstract',
      4 => 'Zend_Config',
      5 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_CodeGenerator_Php_Docblock_Tag_Param' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Docblock_Tag',
      1 => 'Zend_Reflection_Docblock_Tag',
      2 => 'Zend_Loader_PluginLoader',
      3 => 'Zend_CodeGenerator_Php_Abstract',
      4 => 'Zend_Config',
      5 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_CodeGenerator_Php_Docblock_Tag_Return' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Docblock_Tag',
      1 => 'Zend_Reflection_Docblock_Tag',
      2 => 'Zend_Loader_PluginLoader',
      3 => 'Zend_CodeGenerator_Php_Abstract',
      4 => 'Zend_Config',
      5 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_CodeGenerator_Php_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Exception',
    ),
  ),
  'Zend_CodeGenerator_Php_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Abstract',
      1 => 'Zend_Reflection_File',
      2 => 'Zend_CodeGenerator_Php_Docblock',
      3 => 'Zend_CodeGenerator_Php_Class',
      4 => 'Zend_Config',
      5 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_CodeGenerator_Php_Member_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Abstract',
      1 => 'Zend_CodeGenerator_Php_Docblock',
      2 => 'Zend_CodeGenerator_Php_File',
      3 => 'Zend_Config',
      4 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_CodeGenerator_Php_Member_Container' => 
  array (
    'instantiable' => true,
  ),
  'Zend_CodeGenerator_Php_Method' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Member_Abstract',
      1 => 'Zend_Reflection_Method',
      2 => 'Zend_CodeGenerator_Php_Parameter',
      3 => 'Zend_CodeGenerator_Php_Docblock',
      4 => 'Zend_CodeGenerator_Php_File',
      5 => 'Zend_CodeGenerator_Php_Abstract',
      6 => 'Zend_Config',
      7 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_CodeGenerator_Php_Parameter' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Abstract',
      1 => 'Zend_Reflection_Parameter',
      2 => 'Zend_CodeGenerator_Php_Parameter_DefaultValue',
      3 => 'Zend_Config',
      4 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_CodeGenerator_Php_Parameter_DefaultValue' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Exception',
    ),
  ),
  'Zend_CodeGenerator_Php_Property' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Member_Abstract',
      1 => 'Zend_Reflection_Property',
      2 => 'Zend_CodeGenerator_Php_Property_DefaultValue',
      3 => 'Zend_CodeGenerator_Php_Docblock',
      4 => 'Zend_CodeGenerator_Php_File',
      5 => 'Zend_CodeGenerator_Php_Abstract',
      6 => 'Zend_Config',
      7 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_CodeGenerator_Php_Property_DefaultValue' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_CodeGenerator_Php_Abstract',
      1 => 'Zend_Config',
      2 => 'Zend_CodeGenerator_Abstract',
    ),
  ),
  'Zend_Config' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config_Exception',
    ),
  ),
  'Zend_Config_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Config_Ini' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Config_Exception',
    ),
  ),
  'Zend_Config_Json' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Config_Exception',
    ),
  ),
  'Zend_Config_Writer' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
    ),
  ),
  'Zend_Config_Writer_Array' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config_Writer_FileAbstract',
      1 => 'Zend_Config',
      2 => 'Zend_Config_Writer',
    ),
  ),
  'Zend_Config_Writer_FileAbstract' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config_Writer',
      1 => 'Zend_Config_Writer_Array',
      2 => 'Zend_Config',
    ),
  ),
  'Zend_Config_Writer_Ini' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config_Writer_FileAbstract',
      1 => 'Zend_Config',
      2 => 'Zend_Config_Writer_Array',
      3 => 'Zend_Config_Writer',
    ),
  ),
  'Zend_Config_Writer_Json' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config_Writer_FileAbstract',
      1 => 'Zend_Config_Writer_Array',
      2 => 'Zend_Config',
      3 => 'Zend_Config_Writer',
    ),
  ),
  'Zend_Config_Writer_Xml' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config_Writer_FileAbstract',
      1 => 'Zend_Config',
      2 => 'Zend_Config_Writer_Array',
      3 => 'Zend_Config_Writer',
    ),
  ),
  'Zend_Config_Writer_Yaml' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config_Writer_FileAbstract',
      1 => 'Zend_Config_Yaml',
      2 => 'Zend_Config_Writer_Array',
      3 => 'Zend_Config',
      4 => 'Zend_Config_Writer',
    ),
  ),
  'Zend_Config_Xml' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Config_Exception',
    ),
  ),
  'Zend_Config_Yaml' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Config_Exception',
    ),
  ),
  'Zend_Console_Getopt' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Console_Getopt_Exception',
    ),
  ),
  'Zend_Console_Getopt_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Controller_Action' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Interface',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Controller_Exception',
      5 => 'Zend_Controller_Action_Helper_Abstract',
      6 => 'Zend_Controller_Front',
      7 => 'Zend_Controller_Action_Exception',
    ),
  ),
  'Zend_Controller_Action_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Exception',
    ),
  ),
  'Zend_Controller_Action_HelperBroker' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_PluginLoader_Interface',
      1 => 'Zend_Loader_PluginLoader',
      2 => 'Zend_Controller_Action_Helper_Abstract',
      3 => 'Zend_Controller_Action_Exception',
      4 => 'Zend_Controller_Action_HelperBroker_PriorityStack',
      5 => 'Zend_Controller_Action',
    ),
  ),
  'Zend_Controller_Action_HelperBroker_PriorityStack' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action',
      1 => 'Zend_Controller_Front',
      2 => 'Zend_Controller_Request_Abstract',
      3 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_ActionStack' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Action_Exception',
      3 => 'Zend_Controller_Action',
      4 => 'Zend_Controller_Front',
      5 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_AjaxContext' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_ContextSwitch',
      1 => 'Zend_Config',
      2 => 'Zend_Controller_Action_Exception',
      3 => 'Zend_Controller_Action_Helper_ViewRenderer',
      4 => 'Zend_Controller_Action',
      5 => 'Zend_Controller_Front',
      6 => 'Zend_Controller_Request_Abstract',
      7 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_AutoCompleteDojo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_AutoComplete_Abstract',
      1 => 'Zend_Controller_Action_Exception',
      2 => 'Zend_Controller_Action',
      3 => 'Zend_Controller_Front',
      4 => 'Zend_Controller_Request_Abstract',
      5 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_AutoCompleteScriptaculous' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_AutoComplete_Abstract',
      1 => 'Zend_Controller_Action_Exception',
      2 => 'Zend_Controller_Action',
      3 => 'Zend_Controller_Front',
      4 => 'Zend_Controller_Request_Abstract',
      5 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_AutoComplete_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_Abstract',
      1 => 'Zend_Controller_Action_Exception',
      2 => 'Zend_Controller_Action',
      3 => 'Zend_Controller_Front',
      4 => 'Zend_Controller_Request_Abstract',
      5 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_Cache' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_Abstract',
      1 => 'Zend_Cache_Manager',
      2 => 'Zend_Controller_Action',
      3 => 'Zend_Controller_Front',
      4 => 'Zend_Controller_Request_Abstract',
      5 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_ContextSwitch' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_Abstract',
      1 => 'Zend_Config',
      2 => 'Zend_Controller_Action_Exception',
      3 => 'Zend_Controller_Action_Helper_ViewRenderer',
      4 => 'Zend_Controller_Action',
      5 => 'Zend_Controller_Front',
      6 => 'Zend_Controller_Request_Abstract',
      7 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_FlashMessenger' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_Abstract',
      1 => 'Zend_Controller_Action',
      2 => 'Zend_Controller_Front',
      3 => 'Zend_Controller_Request_Abstract',
      4 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_Json' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_Abstract',
      1 => 'Zend_Controller_Action',
      2 => 'Zend_Controller_Front',
      3 => 'Zend_Controller_Request_Abstract',
      4 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_Redirector' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_Abstract',
      1 => 'Zend_Controller_Action_Exception',
      2 => 'Zend_Controller_Action',
      3 => 'Zend_Controller_Front',
      4 => 'Zend_Controller_Request_Abstract',
      5 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_Url' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_Abstract',
      1 => 'Zend_Controller_Action',
      2 => 'Zend_Controller_Front',
      3 => 'Zend_Controller_Request_Abstract',
      4 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Helper_ViewRenderer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_Abstract',
      1 => 'Zend_View_Interface',
      2 => 'Zend_Controller_Action_Exception',
      3 => 'Zend_Filter_Inflector',
      4 => 'Zend_Controller_Action',
      5 => 'Zend_Controller_Front',
      6 => 'Zend_Controller_Request_Abstract',
      7 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Action_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Request_Abstract',
      1 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Dispatcher_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Dispatcher_Interface',
      1 => 'Zend_Controller_Dispatcher_Exception',
      2 => 'Zend_Controller_Front',
      3 => 'Zend_Controller_Response_Abstract',
      4 => 'Zend_Controller_Request_Abstract',
    ),
  ),
  'Zend_Controller_Dispatcher_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Exception',
    ),
  ),
  'Zend_Controller_Dispatcher_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Request_Abstract',
      1 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Dispatcher_Standard' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Dispatcher_Abstract',
      1 => 'Zend_Controller_Dispatcher_Interface',
      2 => 'Zend_Controller_Request_Abstract',
      3 => 'Zend_Controller_Response_Abstract',
      4 => 'Zend_Controller_Dispatcher_Exception',
      5 => 'Zend_Controller_Front',
    ),
  ),
  'Zend_Controller_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Controller_Front' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Exception',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Router_Interface',
      3 => 'Zend_Controller_Dispatcher_Interface',
      4 => 'Zend_Controller_Response_Abstract',
      5 => 'Zend_Controller_Plugin_Abstract',
    ),
  ),
  'Zend_Controller_Plugin_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Request_Abstract',
      1 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Plugin_ActionStack' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Registry',
      2 => 'Zend_Controller_Request_Abstract',
      3 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Plugin_Broker' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Plugin_ErrorHandler' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Plugin_PutHandler' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Controller_Request_Abstract',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Request_Abstract' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Controller_Request_Apache404' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Request_Http',
      1 => 'Zend_Uri',
      2 => 'Zend_Controller_Request_Exception',
      3 => 'Zend_Controller_Request_Abstract',
    ),
  ),
  'Zend_Controller_Request_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Exception',
    ),
  ),
  'Zend_Controller_Request_Http' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Request_Abstract',
      1 => 'Zend_Uri',
      2 => 'Zend_Controller_Request_Exception',
    ),
  ),
  'Zend_Controller_Request_HttpTestCase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Request_Http',
      1 => 'Zend_Uri',
      2 => 'Zend_Controller_Request_Exception',
      3 => 'Zend_Controller_Request_Abstract',
    ),
  ),
  'Zend_Controller_Request_Simple' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Request_Abstract',
    ),
  ),
  'Zend_Controller_Response_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Response_Exception',
    ),
  ),
  'Zend_Controller_Response_Cli' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Response_Abstract',
      1 => 'Zend_Controller_Response_Exception',
    ),
  ),
  'Zend_Controller_Response_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Exception',
    ),
  ),
  'Zend_Controller_Response_Http' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Response_Abstract',
      1 => 'Zend_Controller_Response_Exception',
    ),
  ),
  'Zend_Controller_Response_HttpTestCase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Response_Http',
      1 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Controller_Router_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Router_Interface',
      1 => 'Zend_Controller_Front',
      2 => 'Zend_Controller_Request_Abstract',
      3 => 'Zend_Controller_Router_Exception',
    ),
  ),
  'Zend_Controller_Router_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Exception',
    ),
  ),
  'Zend_Controller_Router_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Request_Abstract',
      1 => 'Zend_Controller_Router_Exception',
      2 => 'Zend_Controller_Front',
    ),
  ),
  'Zend_Controller_Router_Rewrite' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Router_Abstract',
      1 => 'Zend_Controller_Router_Interface',
      2 => 'Zend_Controller_Router_Route_Interface',
      3 => 'Zend_Config',
      4 => 'Zend_Controller_Router_Exception',
      5 => 'Zend_Controller_Request_Abstract',
      6 => 'Zend_Controller_Front',
    ),
  ),
  'Zend_Controller_Router_Route' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Router_Route_Abstract',
      1 => 'Zend_Controller_Router_Route_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Translate',
      4 => 'Zend_Controller_Router_Exception',
      5 => 'Zend_Controller_Router_Route_Chain',
    ),
  ),
  'Zend_Controller_Router_Route_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Router_Route_Interface',
      1 => 'Zend_Controller_Router_Route_Chain',
    ),
  ),
  'Zend_Controller_Router_Route_Chain' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Router_Route_Abstract',
      1 => 'Zend_Controller_Router_Route_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Controller_Request_Http',
      4 => 'Zend_Controller_Request_Abstract',
    ),
  ),
  'Zend_Controller_Router_Route_Hostname' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Router_Route_Abstract',
      1 => 'Zend_Controller_Router_Route_Interface',
      2 => 'Zend_Controller_Request_Abstract',
      3 => 'Zend_Config',
      4 => 'Zend_Controller_Request_Http',
      5 => 'Zend_Controller_Router_Route_Chain',
    ),
  ),
  'Zend_Controller_Router_Route_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Controller_Router_Route_Module' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Router_Route_Abstract',
      1 => 'Zend_Controller_Router_Route_Interface',
      2 => 'Zend_Controller_Dispatcher_Interface',
      3 => 'Zend_Controller_Request_Abstract',
      4 => 'Zend_Controller_Router_Route_Chain',
    ),
  ),
  'Zend_Controller_Router_Route_Regex' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Router_Route_Abstract',
      1 => 'Zend_Controller_Router_Route_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Controller_Router_Route_Chain',
    ),
  ),
  'Zend_Controller_Router_Route_Static' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Router_Route_Abstract',
      1 => 'Zend_Controller_Router_Route_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Controller_Router_Route_Chain',
    ),
  ),
  'Zend_Crypt' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Exception',
    ),
  ),
  'Zend_Crypt_DiffieHellman' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Crypt_DiffieHellman_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Exception',
    ),
  ),
  'Zend_Crypt_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Crypt_Hmac' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt',
      1 => 'Zend_Crypt_Exception',
    ),
  ),
  'Zend_Crypt_Hmac_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Exception',
    ),
  ),
  'Zend_Crypt_Math' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Math_BigInteger',
      1 => 'Zend_Crypt_Math_BigInteger_Exception',
    ),
  ),
  'Zend_Crypt_Math_BigInteger' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Math_BigInteger_Exception',
    ),
  ),
  'Zend_Crypt_Math_BigInteger_Bcmath' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Math_BigInteger_Interface',
    ),
  ),
  'Zend_Crypt_Math_BigInteger_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Math_Exception',
    ),
  ),
  'Zend_Crypt_Math_BigInteger_Gmp' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Math_BigInteger_Interface',
    ),
  ),
  'Zend_Crypt_Math_BigInteger_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Crypt_Math_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Exception',
    ),
  ),
  'Zend_Crypt_Rsa' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Rsa_Exception',
      1 => 'Zend_Crypt_Rsa_Key_Private',
      2 => 'Zend_Crypt_Rsa_Key',
    ),
  ),
  'Zend_Crypt_Rsa_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Exception',
    ),
  ),
  'Zend_Crypt_Rsa_Key' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Exception',
    ),
  ),
  'Zend_Crypt_Rsa_Key_Private' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Rsa_Key',
      1 => 'Zend_Crypt_Exception',
    ),
  ),
  'Zend_Crypt_Rsa_Key_Public' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Crypt_Rsa_Key',
      1 => 'Zend_Crypt_Exception',
    ),
  ),
  'Zend_Currency' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Locale',
      1 => 'Zend_Currency_Exception',
      2 => 'Zend_Cache_Core',
      3 => 'Zend_Currency_CurrencyInterface',
    ),
  ),
  'Zend_Currency_CurrencyInterface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Currency_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Date' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Date_DateObject',
      1 => 'Zend_Locale',
      2 => 'Zend_Date_Exception',
      3 => 'Zend_Cache',
    ),
  ),
  'Zend_Date_Cities' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Date_Exception',
    ),
  ),
  'Zend_Date_DateObject' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Date_Exception',
      1 => 'Zend_Cache',
    ),
  ),
  'Zend_Date_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Db' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Abstract',
      1 => 'Zend_Db_Exception',
    ),
  ),
  'Zend_Db_Adapter_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Db_Adapter_Exception',
      2 => 'Zend_Db_Profiler',
      3 => 'Zend_Db_Profiler_Exception',
      4 => 'Zend_Db_Statement_Interface',
      5 => 'Zend_Db_Select',
      6 => 'Zend_Db_Expr',
      7 => 'Zend_Db_Statement',
    ),
  ),
  'Zend_Db_Adapter_Db2' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Abstract',
      1 => 'Zend_Db_Statement_Db2',
      2 => 'Zend_Db_Adapter_Db2_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Db_Adapter_Exception',
      5 => 'Zend_Db_Profiler',
      6 => 'Zend_Db_Profiler_Exception',
      7 => 'Zend_Db_Statement_Interface',
      8 => 'Zend_Db_Select',
      9 => 'Zend_Db_Expr',
    ),
  ),
  'Zend_Db_Adapter_Db2_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Exception',
    ),
  ),
  'Zend_Db_Adapter_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Exception',
    ),
  ),
  'Zend_Db_Adapter_Mysqli' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Abstract',
      1 => 'Zend_Db_Adapter_Mysqli_Exception',
      2 => 'Zend_Db_Statement_Mysqli',
      3 => 'Zend_Config',
      4 => 'Zend_Db_Adapter_Exception',
      5 => 'Zend_Db_Profiler',
      6 => 'Zend_Db_Profiler_Exception',
      7 => 'Zend_Db_Statement_Interface',
      8 => 'Zend_Db_Select',
      9 => 'Zend_Db_Expr',
    ),
  ),
  'Zend_Db_Adapter_Mysqli_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Exception',
    ),
  ),
  'Zend_Db_Adapter_Oracle' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Abstract',
      1 => 'Zend_Db_Adapter_Oracle_Exception',
      2 => 'Zend_Db_Statement_Oracle',
      3 => 'Zend_Db_Expr',
      4 => 'Zend_Config',
      5 => 'Zend_Db_Adapter_Exception',
      6 => 'Zend_Db_Profiler',
      7 => 'Zend_Db_Profiler_Exception',
      8 => 'Zend_Db_Statement_Interface',
      9 => 'Zend_Db_Select',
    ),
  ),
  'Zend_Db_Adapter_Oracle_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Exception',
    ),
  ),
  'Zend_Db_Adapter_Pdo_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Abstract',
      1 => 'Zend_Db_Adapter_Exception',
      2 => 'Zend_Db_Select',
      3 => 'Zend_Db_Statement_Pdo',
      4 => 'Zend_Config',
      5 => 'Zend_Db_Profiler',
      6 => 'Zend_Db_Profiler_Exception',
      7 => 'Zend_Db_Expr',
    ),
  ),
  'Zend_Db_Adapter_Pdo_Ibm' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Pdo_Abstract',
      1 => 'Zend_Db_Adapter_Exception',
      2 => 'Zend_Db_Select',
      3 => 'Zend_Db_Statement_Pdo',
      4 => 'Zend_Config',
      5 => 'Zend_Db_Profiler',
      6 => 'Zend_Db_Adapter_Abstract',
      7 => 'Zend_Db_Profiler_Exception',
      8 => 'Zend_Db_Expr',
    ),
  ),
  'Zend_Db_Adapter_Pdo_Ibm_Db2' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Abstract',
      1 => 'Zend_Db_Adapter_Exception',
    ),
  ),
  'Zend_Db_Adapter_Pdo_Ibm_Ids' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Abstract',
      1 => 'Zend_Db_Adapter_Exception',
    ),
  ),
  'Zend_Db_Adapter_Pdo_Mssql' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Pdo_Abstract',
      1 => 'Zend_Db_Adapter_Exception',
      2 => 'Zend_Db_Select',
      3 => 'Zend_Db_Statement_Pdo',
      4 => 'Zend_Config',
      5 => 'Zend_Db_Profiler',
      6 => 'Zend_Db_Adapter_Abstract',
      7 => 'Zend_Db_Profiler_Exception',
      8 => 'Zend_Db_Expr',
    ),
  ),
  'Zend_Db_Adapter_Pdo_Mysql' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Pdo_Abstract',
      1 => 'Zend_Db_Adapter_Exception',
      2 => 'Zend_Db_Select',
      3 => 'Zend_Db_Statement_Pdo',
      4 => 'Zend_Config',
      5 => 'Zend_Db_Profiler',
      6 => 'Zend_Db_Adapter_Abstract',
      7 => 'Zend_Db_Profiler_Exception',
      8 => 'Zend_Db_Expr',
    ),
  ),
  'Zend_Db_Adapter_Pdo_Oci' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Pdo_Abstract',
      1 => 'Zend_Db_Expr',
      2 => 'Zend_Db_Adapter_Oracle_Exception',
      3 => 'Zend_Db_Adapter_Exception',
      4 => 'Zend_Db_Select',
      5 => 'Zend_Db_Statement_Pdo',
      6 => 'Zend_Config',
      7 => 'Zend_Db_Profiler',
      8 => 'Zend_Db_Adapter_Abstract',
      9 => 'Zend_Db_Profiler_Exception',
    ),
  ),
  'Zend_Db_Adapter_Pdo_Pgsql' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Pdo_Abstract',
      1 => 'Zend_Db_Adapter_Exception',
      2 => 'Zend_Db_Select',
      3 => 'Zend_Db_Statement_Pdo',
      4 => 'Zend_Config',
      5 => 'Zend_Db_Profiler',
      6 => 'Zend_Db_Adapter_Abstract',
      7 => 'Zend_Db_Profiler_Exception',
      8 => 'Zend_Db_Expr',
    ),
  ),
  'Zend_Db_Adapter_Pdo_Sqlite' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Pdo_Abstract',
      1 => 'Zend_Db_Adapter_Exception',
      2 => 'Zend_Db_Select',
      3 => 'Zend_Db_Statement_Pdo',
      4 => 'Zend_Db_Profiler',
      5 => 'Zend_Config',
      6 => 'Zend_Db_Adapter_Abstract',
      7 => 'Zend_Db_Profiler_Exception',
      8 => 'Zend_Db_Expr',
    ),
  ),
  'Zend_Db_Adapter_Sqlsrv' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Abstract',
      1 => 'Zend_Db_Adapter_Sqlsrv_Exception',
      2 => 'Zend_Db_Adapter_Exception',
      3 => 'Zend_Db_Statement_Sqlsrv',
      4 => 'Zend_Config',
      5 => 'Zend_Db_Profiler',
      6 => 'Zend_Db_Profiler_Exception',
      7 => 'Zend_Db_Statement_Interface',
      8 => 'Zend_Db_Select',
      9 => 'Zend_Db_Expr',
    ),
  ),
  'Zend_Db_Adapter_Sqlsrv_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Exception',
    ),
  ),
  'Zend_Db_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Db_Expr' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Db_Profiler' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Profiler_Exception',
      1 => 'Zend_Db_Profiler_Query',
    ),
  ),
  'Zend_Db_Profiler_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Exception',
    ),
  ),
  'Zend_Db_Profiler_Firebug' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Profiler',
      1 => 'Zend_Db_Profiler_Exception',
      2 => 'Zend_Db_Profiler_Query',
    ),
  ),
  'Zend_Db_Profiler_Query' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Db_Select' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Adapter_Abstract',
      1 => 'Zend_Db_Expr',
      2 => 'Zend_Db_Select_Exception',
      3 => 'Zend_Db_Statement',
    ),
  ),
  'Zend_Db_Select_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Exception',
    ),
  ),
  'Zend_Db_Statement' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement_Interface',
      1 => 'Zend_Db_Adapter_Abstract',
      2 => 'Zend_Db_Statement_Exception',
    ),
  ),
  'Zend_Db_Statement_Db2' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement',
      1 => 'Zend_Db_Statement_Interface',
      2 => 'Zend_Db_Statement_Db2_Exception',
      3 => 'Zend_Db_Adapter_Abstract',
      4 => 'Zend_Db_Statement_Exception',
    ),
  ),
  'Zend_Db_Statement_Db2_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement_Exception',
    ),
  ),
  'Zend_Db_Statement_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Exception',
    ),
  ),
  'Zend_Db_Statement_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement_Exception',
    ),
  ),
  'Zend_Db_Statement_Mysqli' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement',
      1 => 'Zend_Db_Statement_Interface',
      2 => 'Zend_Db_Statement_Mysqli_Exception',
      3 => 'Zend_Db_Adapter_Abstract',
      4 => 'Zend_Db_Statement_Exception',
    ),
  ),
  'Zend_Db_Statement_Mysqli_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement_Exception',
    ),
  ),
  'Zend_Db_Statement_Oracle' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement',
      1 => 'Zend_Db_Statement_Interface',
      2 => 'Zend_Db_Statement_Oracle_Exception',
      3 => 'Zend_Db_Statement_Exception',
      4 => 'Zend_Db_Adapter_Abstract',
    ),
  ),
  'Zend_Db_Statement_Oracle_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement_Exception',
    ),
  ),
  'Zend_Db_Statement_Pdo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement',
      1 => 'Zend_Db_Statement_Interface',
      2 => 'Zend_Db_Statement_Exception',
      3 => 'Zend_Db_Adapter_Abstract',
    ),
  ),
  'Zend_Db_Statement_Pdo_Ibm' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement_Pdo',
      1 => 'Zend_Db_Statement_Interface',
      2 => 'Zend_Db_Statement_Exception',
      3 => 'Zend_Db_Adapter_Abstract',
    ),
  ),
  'Zend_Db_Statement_Pdo_Oci' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement_Pdo',
      1 => 'Zend_Db_Statement_Interface',
      2 => 'Zend_Db_Statement_Exception',
      3 => 'Zend_Db_Adapter_Abstract',
    ),
  ),
  'Zend_Db_Statement_Sqlsrv' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement',
      1 => 'Zend_Db_Statement_Interface',
      2 => 'Zend_Db_Statement_Sqlsrv_Exception',
      3 => 'Zend_Db_Statement_Exception',
      4 => 'Zend_Db_Adapter_Abstract',
    ),
  ),
  'Zend_Db_Statement_Sqlsrv_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Statement_Exception',
    ),
  ),
  'Zend_Db_Table' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Abstract',
      1 => 'Zend_Db_Table_Definition',
      2 => 'Zend_Db_Table_Exception',
      3 => 'Zend_Db_Adapter_Abstract',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Db_Table_Select',
      6 => 'Zend_Db_Table_Rowset_Abstract',
      7 => 'Zend_Db_Table_Row_Abstract',
    ),
  ),
  'Zend_Db_Table_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Definition',
      1 => 'Zend_Db_Table_Exception',
      2 => 'Zend_Db_Adapter_Abstract',
      3 => 'Zend_Cache_Core',
      4 => 'Zend_Db_Table_Select',
      5 => 'Zend_Db_Table_Rowset_Abstract',
      6 => 'Zend_Db_Table_Row_Abstract',
    ),
  ),
  'Zend_Db_Table_Definition' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
    ),
  ),
  'Zend_Db_Table_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Exception',
    ),
  ),
  'Zend_Db_Table_Row' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Row_Abstract',
      1 => 'Zend_Db_Table_Row_Exception',
      2 => 'Zend_Db_Table_Abstract',
      3 => 'Zend_Db_Table_Select',
      4 => 'Zend_Db_Table_Rowset_Abstract',
    ),
  ),
  'Zend_Db_Table_Row_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Row_Exception',
      1 => 'Zend_Db_Table_Abstract',
      2 => 'Zend_Db_Table_Select',
      3 => 'Zend_Db_Table_Rowset_Abstract',
    ),
  ),
  'Zend_Db_Table_Row_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Exception',
    ),
  ),
  'Zend_Db_Table_Rowset' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Rowset_Abstract',
      1 => 'Zend_Db_Table_Abstract',
      2 => 'Zend_Db_Table_Row_Exception',
      3 => 'Zend_Db_Table_Row_Abstract',
      4 => 'Zend_Db_Table_Rowset_Exception',
      5 => 'Zend_Db_Table_Row',
    ),
  ),
  'Zend_Db_Table_Rowset_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Abstract',
      1 => 'Zend_Db_Table_Row_Exception',
      2 => 'Zend_Db_Table_Row_Abstract',
      3 => 'Zend_Db_Table_Rowset_Exception',
      4 => 'Zend_Db_Table_Row',
    ),
  ),
  'Zend_Db_Table_Rowset_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Exception',
    ),
  ),
  'Zend_Db_Table_Select' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Select',
      1 => 'Zend_Db_Table_Abstract',
      2 => 'Zend_Db_Expr',
      3 => 'Zend_Db_Select_Exception',
      4 => 'Zend_Db_Statement',
      5 => 'Zend_Db_Adapter_Abstract',
    ),
  ),
  'Zend_Db_Table_Select_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Select_Exception',
    ),
  ),
  'Zend_Debug' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Dojo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form',
      1 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_BuildLayer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Dojo_Exception',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dojo_Container',
    ),
  ),
  'Zend_Dojo_Data' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Dojo_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Dojo_Form' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Dojo_Form_Element_Dijit',
      5 => 'Zend_Loader_PluginLoader_Interface',
      6 => 'Zend_Form_Exception',
      7 => 'Zend_Form_Element',
      8 => 'Zend_Form_DisplayGroup',
      9 => 'Zend_Form_Decorator_Interface',
      10 => 'Zend_Form_Decorator_Abstract',
      11 => 'Zend_Translate',
      12 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Dojo_Form_Decorator_AccordionContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Decorator_DijitContainer',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Decorator_Abstract',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Dojo_Form_Decorator_AccordionPane' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Decorator_DijitContainer',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Decorator_Abstract',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Dojo_Form_Decorator_BorderContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Decorator_DijitContainer',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Decorator_Abstract',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Dojo_Form_Decorator_ContentPane' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Decorator_DijitContainer',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Decorator_Abstract',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Dojo_Form_Decorator_DijitContainer' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Dojo_Form_Decorator_DijitElement' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_ViewHelper',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Dojo_Form_Decorator_DijitContainer',
      3 => 'Zend_Form_Decorator_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Config',
      6 => 'Zend_Form_Decorator_Abstract',
      7 => 'Zend_Form',
    ),
  ),
  'Zend_Dojo_Form_Decorator_DijitForm' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Decorator_DijitContainer',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Decorator_Abstract',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Dojo_Form_Decorator_SplitContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Decorator_DijitContainer',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Decorator_Abstract',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Dojo_Form_Decorator_StackContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Decorator_DijitContainer',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Decorator_Abstract',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Dojo_Form_Decorator_TabContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Decorator_DijitContainer',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Decorator_Abstract',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Dojo_Form_DisplayGroup' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_DisplayGroup',
      1 => 'Zend_Loader_PluginLoader',
      2 => 'Zend_Config',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Dojo_Form_Element_Dijit',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Element',
      7 => 'Zend_Form_Exception',
      8 => 'Zend_Form_Decorator_Interface',
      9 => 'Zend_Form_Decorator_Abstract',
      10 => 'Zend_Translate',
      11 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Dojo_Form_Element_Button' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_Dijit',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Form_Exception',
      8 => 'Zend_Loader_PluginLoader_Interface',
      9 => 'Zend_Loader_PluginLoader',
      10 => 'Zend_Loader_Exception',
      11 => 'Zend_Filter_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_CheckBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_Dijit',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Form_Element_Checkbox',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Config',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Form_Exception',
      9 => 'Zend_Loader_PluginLoader_Interface',
      10 => 'Zend_Loader_PluginLoader',
      11 => 'Zend_Loader_Exception',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_ComboBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_DijitMulti',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Form_Element_Multi',
      3 => 'Zend_Dojo_Form_Element_Dijit',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Config',
      7 => 'Zend_Translate',
      8 => 'Zend_Translate_Adapter',
      9 => 'Zend_Form_Exception',
      10 => 'Zend_Loader_PluginLoader_Interface',
      11 => 'Zend_Loader_PluginLoader',
      12 => 'Zend_Loader_Exception',
      13 => 'Zend_Filter_Interface',
      14 => 'Zend_Form_Decorator_Interface',
      15 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_CurrencyTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_NumberTextBox',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Dojo_Form_Element_ValidationTextBox',
      3 => 'Zend_Dojo_Form_Element_TextBox',
      4 => 'Zend_Dojo_Form_Element_Dijit',
      5 => 'Zend_View_Interface',
      6 => 'Zend_Form_Element',
      7 => 'Zend_Config',
      8 => 'Zend_Translate',
      9 => 'Zend_Translate_Adapter',
      10 => 'Zend_Form_Exception',
      11 => 'Zend_Loader_PluginLoader_Interface',
      12 => 'Zend_Loader_PluginLoader',
      13 => 'Zend_Loader_Exception',
      14 => 'Zend_Filter_Interface',
      15 => 'Zend_Form_Decorator_Interface',
      16 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_DateTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_ValidationTextBox',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Dojo_Form_Element_NumberTextBox',
      3 => 'Zend_Dojo_Form_Element_TextBox',
      4 => 'Zend_Dojo_Form_Element_Dijit',
      5 => 'Zend_View_Interface',
      6 => 'Zend_Form_Element',
      7 => 'Zend_Config',
      8 => 'Zend_Translate',
      9 => 'Zend_Translate_Adapter',
      10 => 'Zend_Form_Exception',
      11 => 'Zend_Loader_PluginLoader_Interface',
      12 => 'Zend_Loader_PluginLoader',
      13 => 'Zend_Loader_Exception',
      14 => 'Zend_Filter_Interface',
      15 => 'Zend_Form_Decorator_Interface',
      16 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_Dijit' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Config',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
      6 => 'Zend_Form_Exception',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_Form_Decorator_Interface',
      12 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_DijitMulti' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_Dijit',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Form_Element_Multi',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Config',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Form_Exception',
      9 => 'Zend_Loader_PluginLoader_Interface',
      10 => 'Zend_Loader_PluginLoader',
      11 => 'Zend_Loader_Exception',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_Editor' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_Dijit',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Config',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Form_Exception',
      8 => 'Zend_Loader_PluginLoader_Interface',
      9 => 'Zend_Loader_PluginLoader',
      10 => 'Zend_Loader_Exception',
      11 => 'Zend_Filter_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_FilteringSelect' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_ComboBox',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Form_Element_Multi',
      3 => 'Zend_Dojo_Form_Element_Dijit',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Config',
      7 => 'Zend_Translate',
      8 => 'Zend_Translate_Adapter',
      9 => 'Zend_Form_Exception',
      10 => 'Zend_Loader_PluginLoader_Interface',
      11 => 'Zend_Loader_PluginLoader',
      12 => 'Zend_Loader_Exception',
      13 => 'Zend_Filter_Interface',
      14 => 'Zend_Form_Decorator_Interface',
      15 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_HorizontalSlider' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_Slider',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Dojo_Form_Element_TextBox',
      3 => 'Zend_Dojo_Form_Element_Dijit',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Config',
      7 => 'Zend_Translate',
      8 => 'Zend_Translate_Adapter',
      9 => 'Zend_Form_Exception',
      10 => 'Zend_Loader_PluginLoader_Interface',
      11 => 'Zend_Loader_PluginLoader',
      12 => 'Zend_Loader_Exception',
      13 => 'Zend_Filter_Interface',
      14 => 'Zend_Form_Decorator_Interface',
      15 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_NumberSpinner' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_ValidationTextBox',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Dojo_Form_Element_TextBox',
      3 => 'Zend_Dojo_Form_Element_Dijit',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Config',
      7 => 'Zend_Translate',
      8 => 'Zend_Translate_Adapter',
      9 => 'Zend_Form_Exception',
      10 => 'Zend_Loader_PluginLoader_Interface',
      11 => 'Zend_Loader_PluginLoader',
      12 => 'Zend_Loader_Exception',
      13 => 'Zend_Filter_Interface',
      14 => 'Zend_Form_Decorator_Interface',
      15 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_NumberTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_ValidationTextBox',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Dojo_Form_Element_TextBox',
      3 => 'Zend_Dojo_Form_Element_Dijit',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Config',
      7 => 'Zend_Translate',
      8 => 'Zend_Translate_Adapter',
      9 => 'Zend_Form_Exception',
      10 => 'Zend_Loader_PluginLoader_Interface',
      11 => 'Zend_Loader_PluginLoader',
      12 => 'Zend_Loader_Exception',
      13 => 'Zend_Filter_Interface',
      14 => 'Zend_Form_Decorator_Interface',
      15 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_PasswordTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_ValidationTextBox',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Dojo_Form_Element_TextBox',
      3 => 'Zend_Dojo_Form_Element_Dijit',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Config',
      7 => 'Zend_Translate',
      8 => 'Zend_Translate_Adapter',
      9 => 'Zend_Form_Exception',
      10 => 'Zend_Loader_PluginLoader_Interface',
      11 => 'Zend_Loader_PluginLoader',
      12 => 'Zend_Loader_Exception',
      13 => 'Zend_Filter_Interface',
      14 => 'Zend_Form_Decorator_Interface',
      15 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_RadioButton' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_DijitMulti',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Form_Element_Multi',
      3 => 'Zend_Dojo_Form_Element_Dijit',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Config',
      7 => 'Zend_Translate',
      8 => 'Zend_Translate_Adapter',
      9 => 'Zend_Form_Exception',
      10 => 'Zend_Loader_PluginLoader_Interface',
      11 => 'Zend_Loader_PluginLoader',
      12 => 'Zend_Loader_Exception',
      13 => 'Zend_Filter_Interface',
      14 => 'Zend_Form_Decorator_Interface',
      15 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_SimpleTextarea' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_Dijit',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Config',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Form_Exception',
      8 => 'Zend_Loader_PluginLoader_Interface',
      9 => 'Zend_Loader_PluginLoader',
      10 => 'Zend_Loader_Exception',
      11 => 'Zend_Filter_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_Slider' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_Dijit',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Dojo_Form_Element_TextBox',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Config',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Form_Exception',
      9 => 'Zend_Loader_PluginLoader_Interface',
      10 => 'Zend_Loader_PluginLoader',
      11 => 'Zend_Loader_Exception',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_SubmitButton' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_Button',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Dojo_Form_Element_Dijit',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Form_Exception',
      9 => 'Zend_Loader_PluginLoader_Interface',
      10 => 'Zend_Loader_PluginLoader',
      11 => 'Zend_Loader_Exception',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_TextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_Dijit',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Config',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Form_Exception',
      8 => 'Zend_Loader_PluginLoader_Interface',
      9 => 'Zend_Loader_PluginLoader',
      10 => 'Zend_Loader_Exception',
      11 => 'Zend_Filter_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_Textarea' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_Dijit',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Config',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Form_Exception',
      8 => 'Zend_Loader_PluginLoader_Interface',
      9 => 'Zend_Loader_PluginLoader',
      10 => 'Zend_Loader_Exception',
      11 => 'Zend_Filter_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_TimeTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_DateTextBox',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Form_Element_Exception',
      3 => 'Zend_Dojo_Form_Element_NumberTextBox',
      4 => 'Zend_Dojo_Form_Element_ValidationTextBox',
      5 => 'Zend_Dojo_Form_Element_TextBox',
      6 => 'Zend_Dojo_Form_Element_Dijit',
      7 => 'Zend_View_Interface',
      8 => 'Zend_Form_Element',
      9 => 'Zend_Config',
      10 => 'Zend_Translate',
      11 => 'Zend_Translate_Adapter',
      12 => 'Zend_Form_Exception',
      13 => 'Zend_Loader_PluginLoader_Interface',
      14 => 'Zend_Loader_PluginLoader',
      15 => 'Zend_Loader_Exception',
      16 => 'Zend_Filter_Interface',
      17 => 'Zend_Form_Decorator_Interface',
      18 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_ValidationTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_TextBox',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Dojo_Form_Element_Dijit',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Config',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Form_Exception',
      9 => 'Zend_Loader_PluginLoader_Interface',
      10 => 'Zend_Loader_PluginLoader',
      11 => 'Zend_Loader_Exception',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_Element_VerticalSlider' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Form_Element_Slider',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Dojo_Form_Element_HorizontalSlider',
      3 => 'Zend_Dojo_Form_Element_TextBox',
      4 => 'Zend_Dojo_Form_Element_Dijit',
      5 => 'Zend_View_Interface',
      6 => 'Zend_Form_Element',
      7 => 'Zend_Config',
      8 => 'Zend_Translate',
      9 => 'Zend_Translate_Adapter',
      10 => 'Zend_Form_Exception',
      11 => 'Zend_Loader_PluginLoader_Interface',
      12 => 'Zend_Loader_PluginLoader',
      13 => 'Zend_Loader_Exception',
      14 => 'Zend_Filter_Interface',
      15 => 'Zend_Form_Decorator_Interface',
      16 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Dojo_Form_SubForm' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_SubForm',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Form',
      5 => 'Zend_Loader_PluginLoader_Interface',
      6 => 'Zend_Form_Exception',
      7 => 'Zend_Form_Element',
      8 => 'Zend_Form_DisplayGroup',
      9 => 'Zend_Form_Decorator_Interface',
      10 => 'Zend_Form_Decorator_Abstract',
      11 => 'Zend_Translate',
      12 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Dojo_View_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_Exception',
    ),
  ),
  'Zend_Dojo_View_Helper_AccordionContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_DijitContainer',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_AccordionPane' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_DijitContainer',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_BorderContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_DijitContainer',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_Button' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_CheckBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_ComboBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_ContentPane' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_DijitContainer',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_CurrencyTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_CustomDijit' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_DijitContainer',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_DateTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_Dijit' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HtmlElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_DijitContainer' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_Dojo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dojo_Container',
      1 => 'Zend_Dojo_View_Exception',
    ),
  ),
  'Zend_Dojo_View_Helper_Dojo_Container' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
    ),
  ),
  'Zend_Dojo_View_Helper_Editor' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_FilteringSelect' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_ComboBox',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_Form' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Helper_Form',
      3 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_HorizontalSlider' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Slider',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_NumberSpinner' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_NumberTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_PasswordTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_ValidationTextBox',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_RadioButton' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_SimpleTextarea' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_Slider' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_SplitContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_DijitContainer',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_StackContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_DijitContainer',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_SubmitButton' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Button',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_TabContainer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_DijitContainer',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dojo_View_Helper_TextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_Textarea' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_TimeTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_ValidationTextBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Dijit',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_Dojo_View_Helper_VerticalSlider' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dojo_View_Helper_Slider',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Dojo_View_Helper_Dijit',
    ),
  ),
  'Zend_Dom_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Dom_Query' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Dom_Query_Result',
    ),
  ),
  'Zend_Dom_Query_Css2Xpath' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Dom_Query_Result' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Exception' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client',
      1 => 'Zend_Feed_Exception',
      2 => 'Zend_Feed_Abstract',
      3 => 'Zend_Feed_Builder_Interface',
    ),
  ),
  'Zend_Feed_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Element',
      1 => 'Zend_Feed_Builder_Interface',
      2 => 'Zend_Feed_Exception',
    ),
  ),
  'Zend_Feed_Atom' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Abstract',
      1 => 'Zend_Feed_Exception',
      2 => 'Zend_Feed_Builder_Interface',
      3 => 'Zend_Feed_Element',
    ),
  ),
  'Zend_Feed_Builder' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Builder_Interface',
      1 => 'Zend_Feed_Builder_Header',
      2 => 'Zend_Feed_Builder_Exception',
    ),
  ),
  'Zend_Feed_Builder_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Builder_Exception',
    ),
  ),
  'Zend_Feed_Builder_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Exception',
    ),
  ),
  'Zend_Feed_Builder_Header' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Builder_Exception',
      1 => 'Zend_Uri_Http',
      2 => 'Zend_Feed_Builder_Header_Itunes',
    ),
  ),
  'Zend_Feed_Builder_Header_Itunes' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Builder_Exception',
    ),
  ),
  'Zend_Feed_Builder_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Builder_Header',
    ),
  ),
  'Zend_Feed_Element' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Exception',
    ),
  ),
  'Zend_Feed_Entry_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Element',
      1 => 'Zend_Feed_Exception',
    ),
  ),
  'Zend_Feed_Entry_Atom' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Entry_Abstract',
      1 => 'Zend_Feed_Exception',
      2 => 'Zend_Feed_Element',
    ),
  ),
  'Zend_Feed_Entry_Rss' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Entry_Abstract',
      1 => 'Zend_Feed_Exception',
      2 => 'Zend_Feed_Element',
    ),
  ),
  'Zend_Feed_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Feed_Pubsubhubbub' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_FeedAbstract',
      1 => 'Zend_Feed_Abstract',
      2 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Feed_Pubsubhubbub_CallbackAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Pubsubhubbub_CallbackInterface',
      1 => 'Zend_Config',
      2 => 'Zend_Feed_Pubsubhubbub_Model_SubscriptionInterface',
      3 => 'Zend_Feed_Pubsubhubbub_HttpResponse',
      4 => 'Zend_Controller_Response_Http',
    ),
  ),
  'Zend_Feed_Pubsubhubbub_CallbackInterface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Pubsubhubbub_HttpResponse',
      1 => 'Zend_Controller_Response_Http',
    ),
  ),
  'Zend_Feed_Pubsubhubbub_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Feed_Pubsubhubbub_HttpResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Pubsubhubbub_Exception',
    ),
  ),
  'Zend_Feed_Pubsubhubbub_Model_ModelAbstract' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Abstract',
    ),
  ),
  'Zend_Feed_Pubsubhubbub_Model_Subscription' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Pubsubhubbub_Model_ModelAbstract',
      1 => 'Zend_Feed_Pubsubhubbub_Model_SubscriptionInterface',
      2 => 'Zend_Db_Table_Abstract',
    ),
  ),
  'Zend_Feed_Pubsubhubbub_Model_SubscriptionInterface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Feed_Pubsubhubbub_Publisher' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Feed_Pubsubhubbub_Exception',
      2 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Feed_Pubsubhubbub_Subscriber' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Feed_Pubsubhubbub_Model_SubscriptionInterface',
      2 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Feed_Pubsubhubbub_Subscriber_Callback' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Pubsubhubbub_CallbackAbstract',
      1 => 'Zend_Feed_Pubsubhubbub_CallbackInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Feed_Pubsubhubbub_Model_SubscriptionInterface',
      4 => 'Zend_Feed_Pubsubhubbub_HttpResponse',
      5 => 'Zend_Controller_Response_Http',
    ),
  ),
  'Zend_Feed_Reader' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Core',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Feed_Reader_FeedInterface',
      3 => 'Zend_Feed_Abstract',
      4 => 'Zend_Feed_Exception',
      5 => 'Zend_Loader_PluginLoader_Interface',
    ),
  ),
  'Zend_Feed_Reader_Collection' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Feed_Reader_Collection_Author' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Collection_CollectionAbstract',
    ),
  ),
  'Zend_Feed_Reader_Collection_Category' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Collection_CollectionAbstract',
    ),
  ),
  'Zend_Feed_Reader_Collection_CollectionAbstract' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Feed_Reader_EntryAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      1 => 'Zend_Feed_Exception',
    ),
  ),
  'Zend_Feed_Reader_EntryInterface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Collection_Category',
    ),
  ),
  'Zend_Feed_Reader_Entry_Atom' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_EntryAbstract',
      1 => 'Zend_Feed_Reader_EntryInterface',
      2 => 'Zend_Feed_Reader_Collection_Category',
      3 => 'Zend_Feed_Reader_Feed_Atom_Source',
      4 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      5 => 'Zend_Feed_Exception',
    ),
  ),
  'Zend_Feed_Reader_Entry_Rss' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_EntryAbstract',
      1 => 'Zend_Feed_Reader_EntryInterface',
      2 => 'Zend_Feed_Entry_Abstract',
      3 => 'Zend_Feed_Reader_Collection_Category',
      4 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      5 => 'Zend_Feed_Exception',
    ),
  ),
  'Zend_Feed_Reader_Extension_Atom_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      1 => 'Zend_Feed_Reader_Collection_Category',
      2 => 'Zend_Feed_Reader_Feed_Atom_Source',
      3 => 'Zend_Feed_Entry_Abstract',
    ),
  ),
  'Zend_Feed_Reader_Extension_Atom_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_FeedAbstract',
      1 => 'Zend_Date',
      2 => 'Zend_Feed_Reader_Collection_Category',
      3 => 'Zend_Feed_Abstract',
      4 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      5 => 'Zend_Feed_Reader_Feed_Atom',
    ),
  ),
  'Zend_Feed_Reader_Extension_Content_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      1 => 'Zend_Feed_Entry_Abstract',
    ),
  ),
  'Zend_Feed_Reader_Extension_CreativeCommons_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      1 => 'Zend_Feed_Entry_Abstract',
    ),
  ),
  'Zend_Feed_Reader_Extension_CreativeCommons_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_FeedAbstract',
      1 => 'Zend_Feed_Abstract',
      2 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      3 => 'Zend_Feed_Reader_Feed_Atom',
    ),
  ),
  'Zend_Feed_Reader_Extension_DublinCore_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      1 => 'Zend_Feed_Reader_Collection_Category',
      2 => 'Zend_Date',
      3 => 'Zend_Feed_Entry_Abstract',
    ),
  ),
  'Zend_Feed_Reader_Extension_DublinCore_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_FeedAbstract',
      1 => 'Zend_Date',
      2 => 'Zend_Feed_Reader_Collection_Category',
      3 => 'Zend_Feed_Abstract',
      4 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      5 => 'Zend_Feed_Reader_Feed_Atom',
    ),
  ),
  'Zend_Feed_Reader_Extension_EntryAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Entry_Abstract',
    ),
  ),
  'Zend_Feed_Reader_Extension_FeedAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Abstract',
      1 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      2 => 'Zend_Feed_Reader_Feed_Atom',
    ),
  ),
  'Zend_Feed_Reader_Extension_Podcast_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      1 => 'Zend_Feed_Entry_Abstract',
    ),
  ),
  'Zend_Feed_Reader_Extension_Podcast_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_FeedAbstract',
      1 => 'Zend_Feed_Abstract',
      2 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      3 => 'Zend_Feed_Reader_Feed_Atom',
    ),
  ),
  'Zend_Feed_Reader_Extension_Slash_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      1 => 'Zend_Feed_Entry_Abstract',
    ),
  ),
  'Zend_Feed_Reader_Extension_Syndication_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_FeedAbstract',
      1 => 'Zend_Date',
      2 => 'Zend_Feed_Abstract',
      3 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      4 => 'Zend_Feed_Reader_Feed_Atom',
    ),
  ),
  'Zend_Feed_Reader_Extension_Thread_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      1 => 'Zend_Feed_Entry_Abstract',
    ),
  ),
  'Zend_Feed_Reader_Extension_WellFormedWeb_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Extension_EntryAbstract',
      1 => 'Zend_Feed_Entry_Abstract',
    ),
  ),
  'Zend_Feed_Reader_FeedAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_FeedInterface',
      1 => 'Zend_Feed_Reader_EntryInterface',
      2 => 'Zend_Feed_Reader_Extension_FeedAbstract',
      3 => 'Zend_Feed_Reader_Collection_Category',
    ),
  ),
  'Zend_Feed_Reader_FeedInterface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Collection_Category',
    ),
  ),
  'Zend_Feed_Reader_FeedSet' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Feed_Reader_Feed_Atom' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_FeedAbstract',
      1 => 'Zend_Feed_Reader_FeedInterface',
      2 => 'Zend_Feed_Reader_Collection_Category',
      3 => 'Zend_Feed_Reader_EntryInterface',
      4 => 'Zend_Feed_Reader_Extension_FeedAbstract',
    ),
  ),
  'Zend_Feed_Reader_Feed_Atom_Source' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_Feed_Atom',
      1 => 'Zend_Feed_Reader_FeedInterface',
      2 => 'Zend_Feed_Reader_Collection_Category',
      3 => 'Zend_Feed_Reader_Extension_FeedAbstract',
    ),
  ),
  'Zend_Feed_Reader_Feed_Rss' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Reader_FeedAbstract',
      1 => 'Zend_Feed_Reader_FeedInterface',
      2 => 'Zend_Date',
      3 => 'Zend_Feed_Reader_Collection_Category',
      4 => 'Zend_Feed_Reader_EntryInterface',
      5 => 'Zend_Feed_Reader_Extension_FeedAbstract',
    ),
  ),
  'Zend_Feed_Rss' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Abstract',
      1 => 'Zend_Feed_Exception',
      2 => 'Zend_Feed_Builder_Interface',
      3 => 'Zend_Feed_Element',
    ),
  ),
  'Zend_Feed_Writer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_PluginLoader_Interface',
      1 => 'Zend_Feed_Exception',
    ),
  ),
  'Zend_Feed_Writer_Deleted' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Feed_Writer_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Exception',
      1 => 'Zend_Feed_Writer_Source',
    ),
  ),
  'Zend_Feed_Writer_Exception_InvalidMethodException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Feed_Writer_Extension_Atom_Renderer_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Extension_RendererAbstract',
      1 => 'Zend_Feed_Writer_Extension_RendererInterface',
    ),
  ),
  'Zend_Feed_Writer_Extension_Content_Renderer_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Extension_RendererAbstract',
      1 => 'Zend_Feed_Writer_Extension_RendererInterface',
    ),
  ),
  'Zend_Feed_Writer_Extension_DublinCore_Renderer_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Extension_RendererAbstract',
      1 => 'Zend_Feed_Writer_Extension_RendererInterface',
    ),
  ),
  'Zend_Feed_Writer_Extension_DublinCore_Renderer_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Extension_RendererAbstract',
      1 => 'Zend_Feed_Writer_Extension_RendererInterface',
    ),
  ),
  'Zend_Feed_Writer_Extension_ITunes_Entry' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Feed_Writer_Extension_ITunes_Feed' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Feed_Writer_Extension_ITunes_Renderer_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Extension_RendererAbstract',
      1 => 'Zend_Feed_Writer_Extension_RendererInterface',
    ),
  ),
  'Zend_Feed_Writer_Extension_ITunes_Renderer_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Extension_RendererAbstract',
      1 => 'Zend_Feed_Writer_Extension_RendererInterface',
    ),
  ),
  'Zend_Feed_Writer_Extension_RendererAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Extension_RendererInterface',
    ),
  ),
  'Zend_Feed_Writer_Extension_RendererInterface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Feed_Writer_Extension_Slash_Renderer_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Extension_RendererAbstract',
      1 => 'Zend_Feed_Writer_Extension_RendererInterface',
    ),
  ),
  'Zend_Feed_Writer_Extension_Threading_Renderer_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Extension_RendererAbstract',
      1 => 'Zend_Feed_Writer_Extension_RendererInterface',
    ),
  ),
  'Zend_Feed_Writer_Extension_WellFormedWeb_Renderer_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Extension_RendererAbstract',
      1 => 'Zend_Feed_Writer_Extension_RendererInterface',
    ),
  ),
  'Zend_Feed_Writer_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Feed_FeedAbstract',
      1 => 'Zend_Feed_Writer_Entry',
      2 => 'Zend_Feed_Writer_Deleted',
      3 => 'Zend_Date',
      4 => 'Zend_Feed_Exception',
    ),
  ),
  'Zend_Feed_Writer_Feed_FeedAbstract' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Date',
      1 => 'Zend_Feed_Exception',
    ),
  ),
  'Zend_Feed_Writer_Renderer_Entry_Atom' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Renderer_RendererAbstract',
      1 => 'Zend_Feed_Writer_Renderer_RendererInterface',
      2 => 'Zend_Feed_Writer_Entry',
    ),
  ),
  'Zend_Feed_Writer_Renderer_Entry_Atom_Deleted' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Renderer_RendererAbstract',
      1 => 'Zend_Feed_Writer_Renderer_RendererInterface',
      2 => 'Zend_Feed_Writer_Deleted',
      3 => 'Zend_Feed_Writer_Renderer_Entry_Atom',
    ),
  ),
  'Zend_Feed_Writer_Renderer_Entry_Rss' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Renderer_RendererAbstract',
      1 => 'Zend_Feed_Writer_Renderer_RendererInterface',
      2 => 'Zend_Feed_Writer_Entry',
    ),
  ),
  'Zend_Feed_Writer_Renderer_Feed_Atom' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Renderer_Feed_Atom_AtomAbstract',
      1 => 'Zend_Feed_Writer_Renderer_RendererInterface',
      2 => 'Zend_Feed_Writer_Feed',
      3 => 'Zend_Feed_Writer_Renderer_RendererAbstract',
    ),
  ),
  'Zend_Feed_Writer_Renderer_Feed_Atom_AtomAbstract' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Renderer_RendererAbstract',
      1 => 'Zend_Feed_Writer_Feed',
    ),
  ),
  'Zend_Feed_Writer_Renderer_Feed_Atom_Source' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Renderer_Feed_Atom_AtomAbstract',
      1 => 'Zend_Feed_Writer_Renderer_RendererInterface',
      2 => 'Zend_Feed_Writer_Renderer_Feed_Atom',
      3 => 'Zend_Feed_Writer_Renderer_RendererAbstract',
    ),
  ),
  'Zend_Feed_Writer_Renderer_Feed_Rss' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Renderer_RendererAbstract',
      1 => 'Zend_Feed_Writer_Renderer_RendererInterface',
      2 => 'Zend_Feed_Writer_Feed',
    ),
  ),
  'Zend_Feed_Writer_Renderer_RendererAbstract' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Feed_Writer_Renderer_RendererInterface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Feed_Writer_Source' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Feed_Writer_Feed_FeedAbstract',
      1 => 'Zend_Date',
      2 => 'Zend_Feed_Exception',
    ),
  ),
  'Zend_File_Transfer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_File_Transfer_Exception',
    ),
  ),
  'Zend_File_Transfer_Adapter_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_PluginLoader_Interface',
      1 => 'Zend_File_Transfer_Exception',
      2 => 'Zend_Loader_PluginLoader',
      3 => 'Zend_Validate_Interface',
      4 => 'Zend_Filter_Interface',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_File_Transfer_Adapter_Http' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_File_Transfer_Adapter_Abstract',
      1 => 'Zend_File_Transfer_Exception',
      2 => 'Zend_Loader_PluginLoader_Interface',
      3 => 'Zend_Loader_PluginLoader',
      4 => 'Zend_Validate_Interface',
      5 => 'Zend_Filter_Interface',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_File_Transfer_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Filter' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Filter_Exception',
    ),
  ),
  'Zend_Filter_Alnum' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_Alpha' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_BaseName' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_Boolean' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Config',
      2 => 'Zend_Filter_Exception',
      3 => 'Zend_Locale',
    ),
  ),
  'Zend_Filter_Callback' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_Compress' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Filter_Compress_CompressInterface',
    ),
  ),
  'Zend_Filter_Compress_Bz2' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Compress_CompressAbstract',
      1 => 'Zend_Filter_Compress_CompressInterface',
      2 => 'Zend_Config',
    ),
  ),
  'Zend_Filter_Compress_CompressAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Compress_CompressInterface',
      1 => 'Zend_Config',
      2 => 'Zend_Filter_Compress_Bz2',
    ),
  ),
  'Zend_Filter_Compress_CompressInterface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Filter_Compress_Gz' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Compress_CompressAbstract',
      1 => 'Zend_Filter_Compress_CompressInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Filter_Compress_Bz2',
    ),
  ),
  'Zend_Filter_Compress_Lzf' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Compress_CompressInterface',
    ),
  ),
  'Zend_Filter_Compress_Rar' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Compress_CompressAbstract',
      1 => 'Zend_Filter_Compress_CompressInterface',
      2 => 'Zend_Filter_Compress_Bz2',
    ),
  ),
  'Zend_Filter_Compress_Tar' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Compress_CompressAbstract',
      1 => 'Zend_Filter_Compress_CompressInterface',
      2 => 'Zend_Filter_Compress_Bz2',
    ),
  ),
  'Zend_Filter_Compress_Zip' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Compress_CompressAbstract',
      1 => 'Zend_Filter_Compress_CompressInterface',
      2 => 'Zend_Filter_Compress_Rar',
      3 => 'Zend_Filter_Compress_Bz2',
    ),
  ),
  'Zend_Filter_Decompress' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Compress',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_Compress_CompressInterface',
    ),
  ),
  'Zend_Filter_Decrypt' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Encrypt',
      1 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_Digits' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_Dir' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_Encrypt' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_Encrypt_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Filter_Encrypt_Mcrypt' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Encrypt_Interface',
      1 => 'Zend_Config',
      2 => 'Zend_Filter_Exception',
    ),
  ),
  'Zend_Filter_Encrypt_Openssl' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Encrypt_Interface',
      1 => 'Zend_Filter_Exception',
    ),
  ),
  'Zend_Filter_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Filter_File_Decrypt' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Decrypt',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_Encrypt',
    ),
  ),
  'Zend_Filter_File_Encrypt' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Encrypt',
      1 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_File_LowerCase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_StringToLower',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_Exception',
    ),
  ),
  'Zend_Filter_File_Rename' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Filter_Exception',
    ),
  ),
  'Zend_Filter_File_UpperCase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_StringToUpper',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_Exception',
    ),
  ),
  'Zend_Filter_HtmlEntities' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_Inflector' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Loader_PluginLoader_Interface',
      2 => 'Zend_Config',
    ),
  ),
  'Zend_Filter_Input' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_PluginLoader_Interface',
      1 => 'Zend_Filter_Exception',
      2 => 'Zend_Filter_Interface',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
      5 => 'Zend_Validate_Interface',
    ),
  ),
  'Zend_Filter_Int' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Exception',
    ),
  ),
  'Zend_Filter_LocalizedToNormalized' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Locale',
    ),
  ),
  'Zend_Filter_NormalizedToLocalized' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Locale',
      2 => 'Zend_Filter_LocalizedToNormalized',
    ),
  ),
  'Zend_Filter_Null' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Config',
      2 => 'Zend_Filter_Exception',
    ),
  ),
  'Zend_Filter_PregReplace' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_RealPath' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Filter_StringToLower' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Config',
      2 => 'Zend_Filter_Exception',
    ),
  ),
  'Zend_Filter_StringToUpper' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Filter_Exception',
    ),
  ),
  'Zend_Filter_StringTrim' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Filter_StripNewlines' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_StripTags' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Interface',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Filter_Word_CamelCaseToDash' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Word_CamelCaseToSeparator',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_PregReplace',
    ),
  ),
  'Zend_Filter_Word_CamelCaseToSeparator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Word_Separator_Abstract',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_PregReplace',
    ),
  ),
  'Zend_Filter_Word_CamelCaseToUnderscore' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Word_CamelCaseToSeparator',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_PregReplace',
    ),
  ),
  'Zend_Filter_Word_DashToCamelCase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Word_SeparatorToCamelCase',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_PregReplace',
    ),
  ),
  'Zend_Filter_Word_DashToSeparator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Word_Separator_Abstract',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_PregReplace',
    ),
  ),
  'Zend_Filter_Word_DashToUnderscore' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Word_SeparatorToSeparator',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_PregReplace',
    ),
  ),
  'Zend_Filter_Word_SeparatorToCamelCase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Word_Separator_Abstract',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_PregReplace',
    ),
  ),
  'Zend_Filter_Word_SeparatorToDash' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Word_SeparatorToSeparator',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_PregReplace',
    ),
  ),
  'Zend_Filter_Word_SeparatorToSeparator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_PregReplace',
      1 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_Word_Separator_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_PregReplace',
      1 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Filter_Word_UnderscoreToCamelCase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Word_SeparatorToCamelCase',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_PregReplace',
    ),
  ),
  'Zend_Filter_Word_UnderscoreToDash' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Word_SeparatorToSeparator',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_PregReplace',
    ),
  ),
  'Zend_Filter_Word_UnderscoreToSeparator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Filter_Word_SeparatorToSeparator',
      1 => 'Zend_Filter_Interface',
      2 => 'Zend_Filter_PregReplace',
    ),
  ),
  'Zend_Form' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Interface',
      1 => 'Zend_Config',
      2 => 'Zend_Loader_PluginLoader_Interface',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form_DisplayGroup',
      6 => 'Zend_View_Interface',
      7 => 'Zend_Form_Decorator_Interface',
      8 => 'Zend_Form_Decorator_Abstract',
      9 => 'Zend_Translate',
      10 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Form_Decorator_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Interface',
      1 => 'Zend_Config',
      2 => 'Zend_Form_Element',
      3 => 'Zend_Form',
      4 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Callback' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Captcha' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Captcha_ReCaptcha' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Captcha_Word' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Description' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_DtDdWrapper' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Errors' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Exception',
    ),
  ),
  'Zend_Form_Decorator_Fieldset' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Decorator_Marker_File_Interface',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Form' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_FormElements' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_FormErrors' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Element',
      3 => 'Zend_View_Interface',
      4 => 'Zend_Form',
      5 => 'Zend_Config',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_HtmlTag' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Image' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
    ),
  ),
  'Zend_Form_Decorator_Label' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Marker_File_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Form_Decorator_PrepareElements' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_FormElements',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Decorator_Abstract',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Form',
      6 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_Tooltip' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_Decorator_ViewHelper' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Form_Element',
      3 => 'Zend_Form_Decorator_Exception',
      4 => 'Zend_Config',
      5 => 'Zend_Form',
    ),
  ),
  'Zend_Form_Decorator_ViewScript' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Decorator_Abstract',
      1 => 'Zend_Form_Decorator_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form',
      5 => 'Zend_Form_Decorator_Exception',
    ),
  ),
  'Zend_Form_DisplayGroup' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_PluginLoader',
      1 => 'Zend_Config',
      2 => 'Zend_Form',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Form_Exception',
      5 => 'Zend_Form_Decorator_Interface',
      6 => 'Zend_Form_Decorator_Abstract',
      7 => 'Zend_View_Interface',
      8 => 'Zend_Translate',
      9 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Form_Element' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Interface',
      1 => 'Zend_Config',
      2 => 'Zend_Form_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
      5 => 'Zend_Loader_PluginLoader_Interface',
      6 => 'Zend_Loader_PluginLoader',
      7 => 'Zend_Loader_Exception',
      8 => 'Zend_Filter_Interface',
      9 => 'Zend_View_Interface',
      10 => 'Zend_Form_Decorator_Interface',
      11 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Button' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Submit',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
      6 => 'Zend_Form_Exception',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Captcha' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Xhtml',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Captcha_Adapter',
      3 => 'Zend_Config',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Loader_PluginLoader',
      6 => 'Zend_Loader_Exception',
      7 => 'Zend_Form_Element',
      8 => 'Zend_Translate',
      9 => 'Zend_Translate_Adapter',
      10 => 'Zend_Form_Exception',
      11 => 'Zend_Loader_PluginLoader_Interface',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Checkbox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Xhtml',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Exception',
    ),
  ),
  'Zend_Form_Element_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Xhtml',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Loader_PluginLoader_Interface',
      3 => 'Zend_File_Transfer_Adapter_Abstract',
      4 => 'Zend_Filter_Interface',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_View_Interface',
      8 => 'Zend_Config',
      9 => 'Zend_Form_Exception',
      10 => 'Zend_Form_Element',
      11 => 'Zend_Form_Decorator_Interface',
      12 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Hash' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Xhtml',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Session_Namespace',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Form_Exception',
      9 => 'Zend_Loader_PluginLoader_Interface',
      10 => 'Zend_Loader_PluginLoader',
      11 => 'Zend_Loader_Exception',
      12 => 'Zend_Filter_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Hidden' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Xhtml',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Image' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Xhtml',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Multi' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Xhtml',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_MultiCheckbox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Multi',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Multiselect' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Select',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Form_Element_Multi',
      3 => 'Zend_Config',
      4 => 'Zend_Form_Exception',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Loader_PluginLoader_Interface',
      9 => 'Zend_Loader_PluginLoader',
      10 => 'Zend_Loader_Exception',
      11 => 'Zend_Filter_Interface',
      12 => 'Zend_View_Interface',
      13 => 'Zend_Form_Decorator_Interface',
      14 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Password' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Xhtml',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Radio' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Multi',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Reset' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Submit',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
      6 => 'Zend_Form_Exception',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Select' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Multi',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Submit' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Xhtml',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Element',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
      6 => 'Zend_Form_Exception',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Text' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Xhtml',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Textarea' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element_Xhtml',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Form_Element',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
      7 => 'Zend_Loader_PluginLoader_Interface',
      8 => 'Zend_Loader_PluginLoader',
      9 => 'Zend_Loader_Exception',
      10 => 'Zend_Filter_Interface',
      11 => 'Zend_View_Interface',
      12 => 'Zend_Form_Decorator_Interface',
      13 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Element_Xhtml' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Form_Element',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Form_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
      6 => 'Zend_Loader_PluginLoader_Interface',
      7 => 'Zend_Loader_PluginLoader',
      8 => 'Zend_Loader_Exception',
      9 => 'Zend_Filter_Interface',
      10 => 'Zend_View_Interface',
      11 => 'Zend_Form_Decorator_Interface',
      12 => 'Zend_Form_Decorator_Abstract',
    ),
  ),
  'Zend_Form_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Form_SubForm' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Form',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Loader_PluginLoader_Interface',
      4 => 'Zend_Form_Exception',
      5 => 'Zend_Form_Element',
      6 => 'Zend_Form_DisplayGroup',
      7 => 'Zend_View_Interface',
      8 => 'Zend_Form_Decorator_Interface',
      9 => 'Zend_Form_Decorator_Abstract',
      10 => 'Zend_Translate',
      11 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Gdata' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_App_Exception',
      3 => 'Zend_Gdata_App_Feed',
      4 => 'Zend_Gdata_App_InvalidArgumentException',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Http_Response',
      7 => 'Zend_Gdata_App_HttpException',
    ),
  ),
  'Zend_Gdata_App' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client',
      1 => 'Zend_Gdata_App_Feed',
      2 => 'Zend_Gdata_App_Entry',
      3 => 'Zend_Gdata_App_HttpException',
      4 => 'Zend_Gdata_App_InvalidArgumentException',
      5 => 'Zend_Http_Response',
      6 => 'Zend_Gdata_App_Exception',
    ),
  ),
  'Zend_Gdata_App_AuthException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Exception',
    ),
  ),
  'Zend_Gdata_App_BadMethodCallException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Exception',
    ),
  ),
  'Zend_Gdata_App_Base' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Gdata_App_BaseMediaSource' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_MediaSource',
      1 => 'Zend_Gdata_App_MediaFileSource',
    ),
  ),
  'Zend_Gdata_App_CaptchaRequiredException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_AuthException',
    ),
  ),
  'Zend_Gdata_App_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_FeedEntryParent',
      1 => 'Zend_Gdata_App_Exception',
      2 => 'Zend_Gdata_App_Extension_Content',
      3 => 'Zend_Gdata_App_Extension_Published',
      4 => 'Zend_Gdata_App_Extension_Source',
      5 => 'Zend_Gdata_App_Extension_Summary',
      6 => 'Zend_Gdata_App_Extension_Control',
      7 => 'Zend_Http_Client',
      8 => 'Zend_Gdata_App',
      9 => 'Zend_Gdata_App_Extension_Author',
      10 => 'Zend_Gdata_App_Extension_Id',
      11 => 'Zend_Gdata_App_Extension_Link',
      12 => 'Zend_Gdata_App_Extension_Rights',
      13 => 'Zend_Gdata_App_Extension_Title',
      14 => 'Zend_Gdata_App_Extension_Updated',
      15 => 'Zend_Gdata_App_InvalidArgumentException',
      16 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Gdata_App_Extension' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Author' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Person',
      1 => 'Zend_Gdata_App_Extension_Name',
      2 => 'Zend_Gdata_App_Entry',
      3 => 'Zend_Gdata_App_Extension_Email',
      4 => 'Zend_Gdata_App_Extension_Uri',
      5 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Category' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Content' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Text',
      1 => 'Zend_Gdata_App_Entry',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Contributor' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Person',
      1 => 'Zend_Gdata_App_Extension_Name',
      2 => 'Zend_Gdata_App_Entry',
      3 => 'Zend_Gdata_App_Extension_Email',
      4 => 'Zend_Gdata_App_Extension_Uri',
      5 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Control' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Extension_Draft',
      2 => 'Zend_Gdata_App_Entry',
      3 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Draft' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Edited' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Element' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Email' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Generator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Extension_Uri',
      2 => 'Zend_Gdata_App_Entry',
      3 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Icon' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Id' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Link' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Entry',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Logo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Name' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Person' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Extension_Name',
      2 => 'Zend_Gdata_App_Entry',
      3 => 'Zend_Gdata_App_Extension_Email',
      4 => 'Zend_Gdata_App_Extension_Uri',
      5 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Published' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Rights' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Text',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Source' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_FeedSourceParent',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_App',
      3 => 'Zend_Gdata_App_FeedEntryParent',
      4 => 'Zend_Gdata_App_Extension_Generator',
      5 => 'Zend_Gdata_App_Extension_Icon',
      6 => 'Zend_Gdata_App_Extension_Logo',
      7 => 'Zend_Gdata_App_Extension_Subtitle',
      8 => 'Zend_Gdata_App_Extension_Author',
      9 => 'Zend_Gdata_App_Extension_Id',
      10 => 'Zend_Gdata_App_Extension_Link',
      11 => 'Zend_Gdata_App_Extension_Rights',
      12 => 'Zend_Gdata_App_Extension_Title',
      13 => 'Zend_Gdata_App_Extension_Updated',
      14 => 'Zend_Gdata_App_Entry',
      15 => 'Zend_Gdata_App_InvalidArgumentException',
      16 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Subtitle' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Text',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Summary' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Text',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Text' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Title' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Text',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Updated' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Extension_Uri' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_FeedSourceParent',
      1 => 'Zend_Gdata_App_Entry',
      2 => 'Zend_Gdata_App_Exception',
      3 => 'Zend_Gdata_App_InvalidArgumentException',
      4 => 'Zend_Http_Client',
      5 => 'Zend_Gdata_App',
      6 => 'Zend_Gdata_App_FeedEntryParent',
      7 => 'Zend_Gdata_App_Extension_Generator',
      8 => 'Zend_Gdata_App_Extension_Icon',
      9 => 'Zend_Gdata_App_Extension_Logo',
      10 => 'Zend_Gdata_App_Extension_Subtitle',
      11 => 'Zend_Gdata_App_Extension_Author',
      12 => 'Zend_Gdata_App_Extension_Id',
      13 => 'Zend_Gdata_App_Extension_Link',
      14 => 'Zend_Gdata_App_Extension_Rights',
      15 => 'Zend_Gdata_App_Extension_Title',
      16 => 'Zend_Gdata_App_Extension_Updated',
      17 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_FeedEntryParent' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Base',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_App',
      3 => 'Zend_Gdata_App_Extension_Author',
      4 => 'Zend_Gdata_App_Extension_Id',
      5 => 'Zend_Gdata_App_Extension_Link',
      6 => 'Zend_Gdata_App_Extension_Rights',
      7 => 'Zend_Gdata_App_Extension_Title',
      8 => 'Zend_Gdata_App_Extension_Updated',
      9 => 'Zend_Gdata_App_Entry',
      10 => 'Zend_Gdata_App_InvalidArgumentException',
    ),
  ),
  'Zend_Gdata_App_FeedSourceParent' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_FeedEntryParent',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_App',
      3 => 'Zend_Gdata_App_Extension_Generator',
      4 => 'Zend_Gdata_App_Extension_Icon',
      5 => 'Zend_Gdata_App_Extension_Logo',
      6 => 'Zend_Gdata_App_Extension_Subtitle',
      7 => 'Zend_Gdata_App_Extension_Author',
      8 => 'Zend_Gdata_App_Extension_Id',
      9 => 'Zend_Gdata_App_Extension_Link',
      10 => 'Zend_Gdata_App_Extension_Rights',
      11 => 'Zend_Gdata_App_Extension_Title',
      12 => 'Zend_Gdata_App_Extension_Updated',
      13 => 'Zend_Gdata_App_Entry',
      14 => 'Zend_Gdata_App_InvalidArgumentException',
      15 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_HttpException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Exception',
      1 => 'Zend_Http_Client_Exception',
      2 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Gdata_App_IOException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Exception',
    ),
  ),
  'Zend_Gdata_App_InvalidArgumentException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Exception',
    ),
  ),
  'Zend_Gdata_App_LoggingHttpClientAdapterSocket' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client_Adapter_Socket',
      1 => 'Zend_Http_Client_Adapter_Stream',
      2 => 'Zend_Http_Client_Adapter_Interface',
      3 => 'Zend_Uri_Http',
      4 => 'Zend_Config',
      5 => 'Zend_Http_Client_Adapter_Exception',
    ),
  ),
  'Zend_Gdata_App_MediaEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Entry',
      1 => 'Zend_Gdata_MediaMimeStream',
      2 => 'Zend_Gdata_App_MediaSource',
      3 => 'Zend_Gdata_App_Exception',
      4 => 'Zend_Gdata_App_Extension_Content',
      5 => 'Zend_Gdata_App_Extension_Published',
      6 => 'Zend_Gdata_App_Extension_Source',
      7 => 'Zend_Gdata_App_Extension_Summary',
      8 => 'Zend_Gdata_App_Extension_Control',
      9 => 'Zend_Http_Client',
      10 => 'Zend_Gdata_App_FeedEntryParent',
      11 => 'Zend_Gdata_App',
      12 => 'Zend_Gdata_App_Extension_Author',
      13 => 'Zend_Gdata_App_Extension_Id',
      14 => 'Zend_Gdata_App_Extension_Link',
      15 => 'Zend_Gdata_App_Extension_Rights',
      16 => 'Zend_Gdata_App_Extension_Title',
      17 => 'Zend_Gdata_App_Extension_Updated',
      18 => 'Zend_Gdata_App_InvalidArgumentException',
      19 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_App_MediaFileSource' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_BaseMediaSource',
      1 => 'Zend_Gdata_App_MediaSource',
      2 => 'Zend_Gdata_App_IOException',
    ),
  ),
  'Zend_Gdata_App_MediaSource' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_MediaFileSource',
    ),
  ),
  'Zend_Gdata_App_Util' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_InvalidArgumentException',
      1 => 'Zend_Gdata_App_Exception',
    ),
  ),
  'Zend_Gdata_App_VersionException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Exception',
    ),
  ),
  'Zend_Gdata_AuthSub' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client',
      1 => 'Zend_Gdata_App_AuthException',
      2 => 'Zend_Gdata_App_HttpException',
      3 => 'Zend_Gdata_HttpClient',
    ),
  ),
  'Zend_Gdata_Books' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_Query',
      3 => 'Zend_Gdata_Books_VolumeFeed',
      4 => 'Zend_Gdata_Books_VolumeEntry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Feed',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Gdata_App_Entry',
      9 => 'Zend_Http_Response',
      10 => 'Zend_Gdata_App_HttpException',
      11 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_Books_CollectionEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_MediaMimeStream',
      2 => 'Zend_Gdata_App_MediaSource',
      3 => 'Zend_Gdata_App_MediaEntry',
      4 => 'Zend_Gdata_App_Entry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Extension_Content',
      7 => 'Zend_Gdata_App_Extension_Published',
      8 => 'Zend_Gdata_App_Extension_Source',
      9 => 'Zend_Gdata_App_Extension_Summary',
      10 => 'Zend_Gdata_App_Extension_Control',
      11 => 'Zend_Http_Client',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App',
      14 => 'Zend_Gdata_App_Extension_Author',
      15 => 'Zend_Gdata_App_Extension_Id',
      16 => 'Zend_Gdata_App_Extension_Link',
      17 => 'Zend_Gdata_App_Extension_Rights',
      18 => 'Zend_Gdata_App_Extension_Title',
      19 => 'Zend_Gdata_App_Extension_Updated',
      20 => 'Zend_Gdata_App_InvalidArgumentException',
      21 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_CollectionFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_Extension_AnnotationLink' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Books_Extension_BooksLink',
      1 => 'Zend_Gdata_App_Entry',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_Extension_BooksCategory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Category',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_Extension_BooksLink' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Link',
      1 => 'Zend_Gdata_App_Entry',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_Extension_Embeddability' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_Extension_InfoLink' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Books_Extension_BooksLink',
      1 => 'Zend_Gdata_App_Entry',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_Extension_PreviewLink' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Books_Extension_BooksLink',
      1 => 'Zend_Gdata_App_Entry',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_Extension_Review' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_Extension_ThumbnailLink' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Books_Extension_BooksLink',
      1 => 'Zend_Gdata_App_Entry',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_Extension_Viewability' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_VolumeEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Extension_Comments',
      2 => 'Zend_Gdata_Books_Extension_Embeddability',
      3 => 'Zend_Gdata_Extension_Rating',
      4 => 'Zend_Gdata_Books_Extension_Review',
      5 => 'Zend_Gdata_Books_Extension_Viewability',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Link',
      8 => 'Zend_Gdata_MediaMimeStream',
      9 => 'Zend_Gdata_App_MediaSource',
      10 => 'Zend_Gdata_App_MediaEntry',
      11 => 'Zend_Gdata_App_Entry',
      12 => 'Zend_Gdata_App_Extension_Content',
      13 => 'Zend_Gdata_App_Extension_Published',
      14 => 'Zend_Gdata_App_Extension_Source',
      15 => 'Zend_Gdata_App_Extension_Summary',
      16 => 'Zend_Gdata_App_Extension_Control',
      17 => 'Zend_Http_Client',
      18 => 'Zend_Gdata_App_FeedEntryParent',
      19 => 'Zend_Gdata_App',
      20 => 'Zend_Gdata_App_Extension_Author',
      21 => 'Zend_Gdata_App_Extension_Id',
      22 => 'Zend_Gdata_App_Extension_Rights',
      23 => 'Zend_Gdata_App_Extension_Title',
      24 => 'Zend_Gdata_App_Extension_Updated',
      25 => 'Zend_Gdata_App_InvalidArgumentException',
      26 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_VolumeFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Books_VolumeQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Calendar' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_Calendar_EventFeed',
      3 => 'Zend_Gdata_Calendar_EventEntry',
      4 => 'Zend_Gdata_Calendar_ListFeed',
      5 => 'Zend_Gdata_Calendar_ListEntry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Feed',
      8 => 'Zend_Gdata_App_InvalidArgumentException',
      9 => 'Zend_Gdata_App_Entry',
      10 => 'Zend_Http_Response',
      11 => 'Zend_Gdata_App_HttpException',
      12 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_Calendar_EventEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Kind_EventEntry',
      1 => 'Zend_Gdata_Calendar_Extension_Timezone',
      2 => 'Zend_Gdata_Calendar_Extension_QuickAdd',
      3 => 'Zend_Gdata_Extension_OriginalEvent',
      4 => 'Zend_Gdata_Extension_EntryLink',
      5 => 'Zend_Gdata_Extension_Who',
      6 => 'Zend_Gdata_MediaMimeStream',
      7 => 'Zend_Gdata_App_MediaSource',
      8 => 'Zend_Gdata_App_MediaEntry',
      9 => 'Zend_Gdata_App_Entry',
      10 => 'Zend_Gdata_App_Exception',
      11 => 'Zend_Gdata_App_Extension_Content',
      12 => 'Zend_Gdata_App_Extension_Published',
      13 => 'Zend_Gdata_App_Extension_Source',
      14 => 'Zend_Gdata_App_Extension_Summary',
      15 => 'Zend_Gdata_App_Extension_Control',
      16 => 'Zend_Http_Client',
      17 => 'Zend_Gdata_App_FeedEntryParent',
      18 => 'Zend_Gdata_App',
      19 => 'Zend_Gdata_App_Extension_Author',
      20 => 'Zend_Gdata_App_Extension_Id',
      21 => 'Zend_Gdata_App_Extension_Link',
      22 => 'Zend_Gdata_App_Extension_Rights',
      23 => 'Zend_Gdata_App_Extension_Title',
      24 => 'Zend_Gdata_App_Extension_Updated',
      25 => 'Zend_Gdata_App_InvalidArgumentException',
      26 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_EventFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_EventQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Calendar_Extension_AccessLevel' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Calendar_Extension_Selected',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_Extension_Color' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_Extension_Hidden' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_Extension_Link' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Link',
      1 => 'Zend_Gdata_Calendar_Extension_WebContent',
      2 => 'Zend_Gdata_App_Entry',
      3 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_Extension_QuickAdd' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_Extension_Selected' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_Extension_SendEventNotifications' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_Extension_Timezone' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_Extension_WebContent' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_ListEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Calendar_Extension_AccessLevel',
      2 => 'Zend_Gdata_Calendar_Extension_Color',
      3 => 'Zend_Gdata_Calendar_Extension_Hidden',
      4 => 'Zend_Gdata_Calendar_Extension_Selected',
      5 => 'Zend_Gdata_Calendar_Extension_Timezone',
      6 => 'Zend_Gdata_Extension_Where',
      7 => 'Zend_Gdata_MediaMimeStream',
      8 => 'Zend_Gdata_App_MediaSource',
      9 => 'Zend_Gdata_App_MediaEntry',
      10 => 'Zend_Gdata_App_Entry',
      11 => 'Zend_Gdata_App_Exception',
      12 => 'Zend_Gdata_App_Extension_Content',
      13 => 'Zend_Gdata_App_Extension_Published',
      14 => 'Zend_Gdata_App_Extension_Source',
      15 => 'Zend_Gdata_App_Extension_Summary',
      16 => 'Zend_Gdata_App_Extension_Control',
      17 => 'Zend_Http_Client',
      18 => 'Zend_Gdata_App_FeedEntryParent',
      19 => 'Zend_Gdata_App',
      20 => 'Zend_Gdata_App_Extension_Author',
      21 => 'Zend_Gdata_App_Extension_Id',
      22 => 'Zend_Gdata_App_Extension_Link',
      23 => 'Zend_Gdata_App_Extension_Rights',
      24 => 'Zend_Gdata_App_Extension_Title',
      25 => 'Zend_Gdata_App_Extension_Updated',
      26 => 'Zend_Gdata_App_InvalidArgumentException',
      27 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Calendar_ListFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Calendar_Extension_Timezone',
      2 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      3 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      4 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      5 => 'Zend_Gdata_App_Feed',
      6 => 'Zend_Gdata_App_Entry',
      7 => 'Zend_Gdata_App_Exception',
      8 => 'Zend_Gdata_App_InvalidArgumentException',
      9 => 'Zend_Http_Client',
      10 => 'Zend_Gdata_App_FeedSourceParent',
      11 => 'Zend_Gdata_App',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App_Extension_Generator',
      14 => 'Zend_Gdata_App_Extension_Icon',
      15 => 'Zend_Gdata_App_Extension_Logo',
      16 => 'Zend_Gdata_App_Extension_Subtitle',
      17 => 'Zend_Gdata_App_Extension_Author',
      18 => 'Zend_Gdata_App_Extension_Id',
      19 => 'Zend_Gdata_App_Extension_Link',
      20 => 'Zend_Gdata_App_Extension_Rights',
      21 => 'Zend_Gdata_App_Extension_Title',
      22 => 'Zend_Gdata_App_Extension_Updated',
      23 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_ClientLogin' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_HttpClient',
      1 => 'Zend_Gdata_App_AuthException',
      2 => 'Zend_Gdata_App_HttpException',
      3 => 'Zend_Gdata_App_CaptchaRequiredException',
    ),
  ),
  'Zend_Gdata_Docs' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_Docs_DocumentListFeed',
      3 => 'Zend_Gdata_Docs_DocumentListEntry',
      4 => 'Zend_Gdata_Entry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Feed',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Gdata_App_Entry',
      9 => 'Zend_Http_Response',
      10 => 'Zend_Gdata_App_HttpException',
      11 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_Docs_DocumentListEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_MediaMimeStream',
      2 => 'Zend_Gdata_App_MediaSource',
      3 => 'Zend_Gdata_App_MediaEntry',
      4 => 'Zend_Gdata_App_Entry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Extension_Content',
      7 => 'Zend_Gdata_App_Extension_Published',
      8 => 'Zend_Gdata_App_Extension_Source',
      9 => 'Zend_Gdata_App_Extension_Summary',
      10 => 'Zend_Gdata_App_Extension_Control',
      11 => 'Zend_Http_Client',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App',
      14 => 'Zend_Gdata_App_Extension_Author',
      15 => 'Zend_Gdata_App_Extension_Id',
      16 => 'Zend_Gdata_App_Extension_Link',
      17 => 'Zend_Gdata_App_Extension_Rights',
      18 => 'Zend_Gdata_App_Extension_Title',
      19 => 'Zend_Gdata_App_Extension_Updated',
      20 => 'Zend_Gdata_App_InvalidArgumentException',
      21 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Docs_DocumentListFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Docs_Query' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_DublinCore' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_App_Exception',
      3 => 'Zend_Gdata_App_Feed',
      4 => 'Zend_Gdata_App_InvalidArgumentException',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Http_Response',
      7 => 'Zend_Gdata_App_HttpException',
      8 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_DublinCore_Extension_Creator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_DublinCore_Extension_Date' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_DublinCore_Extension_Description' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_DublinCore_Extension_Format' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_DublinCore_Extension_Identifier' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_DublinCore_Extension_Language' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_DublinCore_Extension_Publisher' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_DublinCore_Extension_Rights' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_DublinCore_Extension_Subject' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_DublinCore_Extension_Title' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_MediaEntry',
      1 => 'Zend_Gdata_MediaMimeStream',
      2 => 'Zend_Gdata_App_MediaSource',
      3 => 'Zend_Gdata_App_Entry',
      4 => 'Zend_Gdata_App_Exception',
      5 => 'Zend_Gdata_App_Extension_Content',
      6 => 'Zend_Gdata_App_Extension_Published',
      7 => 'Zend_Gdata_App_Extension_Source',
      8 => 'Zend_Gdata_App_Extension_Summary',
      9 => 'Zend_Gdata_App_Extension_Control',
      10 => 'Zend_Http_Client',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App',
      13 => 'Zend_Gdata_App_Extension_Author',
      14 => 'Zend_Gdata_App_Extension_Id',
      15 => 'Zend_Gdata_App_Extension_Link',
      16 => 'Zend_Gdata_App_Extension_Rights',
      17 => 'Zend_Gdata_App_Extension_Title',
      18 => 'Zend_Gdata_App_Extension_Updated',
      19 => 'Zend_Gdata_App_InvalidArgumentException',
      20 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_App_Exception',
      3 => 'Zend_Gdata_App_Feed',
      4 => 'Zend_Gdata_App_InvalidArgumentException',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Http_Response',
      7 => 'Zend_Gdata_App_HttpException',
      8 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_Exif_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Exif_Extension_Tags',
      2 => 'Zend_Gdata_MediaMimeStream',
      3 => 'Zend_Gdata_App_MediaSource',
      4 => 'Zend_Gdata_App_MediaEntry',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Extension_Distance' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Extension_Exposure' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Extension_FStop' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Extension_Flash' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Extension_FocalLength' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Extension_ImageUniqueId' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Extension_Iso' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Extension_Make' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Extension_Model' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Extension_Tags' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Exif_Extension_Distance',
      2 => 'Zend_Gdata_Exif_Extension_Exposure',
      3 => 'Zend_Gdata_Exif_Extension_Flash',
      4 => 'Zend_Gdata_Exif_Extension_FStop',
      5 => 'Zend_Gdata_Exif_Extension_ImageUniqueId',
      6 => 'Zend_Gdata_Exif_Extension_Iso',
      7 => 'Zend_Gdata_Exif_Extension_Make',
      8 => 'Zend_Gdata_Exif_Extension_Model',
      9 => 'Zend_Gdata_Exif_Extension_Time',
      10 => 'Zend_Gdata_Exif_Extension_FocalLength',
      11 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Extension_Time' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Exif_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_AttendeeStatus' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Extension_Visibility',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_AttendeeType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Extension_Visibility',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_Comments' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_EntryLink' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_EventStatus' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Extension_Visibility',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_ExtendedProperty' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_FeedLink' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_OpenSearchItemsPerPage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_OpenSearchStartIndex' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_OpenSearchTotalResults' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_OriginalEvent' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_Rating' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_Recurrence' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_RecurrenceException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Extension_EntryLink',
      2 => 'Zend_Gdata_Extension_OriginalEvent',
      3 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_Reminder' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_Transparency' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_Visibility' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_When' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_Where' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Extension_Who' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Extension_AttendeeStatus',
      2 => 'Zend_Gdata_Extension_AttendeeType',
      3 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Entry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_InvalidArgumentException',
      7 => 'Zend_Http_Client',
      8 => 'Zend_Gdata_App_FeedSourceParent',
      9 => 'Zend_Gdata_App',
      10 => 'Zend_Gdata_App_FeedEntryParent',
      11 => 'Zend_Gdata_App_Extension_Generator',
      12 => 'Zend_Gdata_App_Extension_Icon',
      13 => 'Zend_Gdata_App_Extension_Logo',
      14 => 'Zend_Gdata_App_Extension_Subtitle',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_Gapps_ServiceException',
      3 => 'Zend_Gdata_App_Exception',
      4 => 'Zend_Gdata_App_HttpException',
      5 => 'Zend_Gdata_App_Feed',
      6 => 'Zend_Http_Response',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Gdata_Gapps_UserFeed',
      9 => 'Zend_Gdata_Gapps_NicknameFeed',
      10 => 'Zend_Gdata_Gapps_GroupFeed',
      11 => 'Zend_Gdata_Gapps_MemberFeed',
      12 => 'Zend_Gdata_Gapps_OwnerFeed',
      13 => 'Zend_Gdata_Gapps_EmailListFeed',
      14 => 'Zend_Gdata_Gapps_EmailListRecipientFeed',
      15 => 'Zend_Gdata_Gapps_UserEntry',
      16 => 'Zend_Gdata_Gapps_NicknameEntry',
      17 => 'Zend_Gdata_Gapps_GroupEntry',
      18 => 'Zend_Gdata_Gapps_MemberEntry',
      19 => 'Zend_Gdata_Gapps_OwnerEntry',
      20 => 'Zend_Gdata_Gapps_EmailListEntry',
      21 => 'Zend_Gdata_Gapps_EmailListRecipientEntry',
      22 => 'Zend_Gdata_App_Entry',
      23 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_Gapps_EmailListEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Gapps_Extension_EmailList',
      2 => 'Zend_Gdata_MediaMimeStream',
      3 => 'Zend_Gdata_App_MediaSource',
      4 => 'Zend_Gdata_App_MediaEntry',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_EmailListFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_EmailListQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Gapps_Query',
      1 => 'Zend_Gdata_App_InvalidArgumentException',
      2 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Gapps_EmailListRecipientEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Extension_Who',
      2 => 'Zend_Gdata_MediaMimeStream',
      3 => 'Zend_Gdata_App_MediaSource',
      4 => 'Zend_Gdata_App_MediaEntry',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_EmailListRecipientFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_EmailListRecipientQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Gapps_Query',
      1 => 'Zend_Gdata_App_InvalidArgumentException',
      2 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Gapps_Error' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_Extension_EmailList' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_Extension_Login' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_InvalidArgumentException',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_Extension_Name' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_Extension_Nickname' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_Extension_Property' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_Extension_Quota' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_GroupEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_MediaMimeStream',
      2 => 'Zend_Gdata_App_MediaSource',
      3 => 'Zend_Gdata_App_MediaEntry',
      4 => 'Zend_Gdata_App_Entry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Extension_Content',
      7 => 'Zend_Gdata_App_Extension_Published',
      8 => 'Zend_Gdata_App_Extension_Source',
      9 => 'Zend_Gdata_App_Extension_Summary',
      10 => 'Zend_Gdata_App_Extension_Control',
      11 => 'Zend_Http_Client',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App',
      14 => 'Zend_Gdata_App_Extension_Author',
      15 => 'Zend_Gdata_App_Extension_Id',
      16 => 'Zend_Gdata_App_Extension_Link',
      17 => 'Zend_Gdata_App_Extension_Rights',
      18 => 'Zend_Gdata_App_Extension_Title',
      19 => 'Zend_Gdata_App_Extension_Updated',
      20 => 'Zend_Gdata_App_InvalidArgumentException',
      21 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_GroupFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_GroupQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Gapps_Query',
      1 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Gapps_MemberEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_MediaMimeStream',
      2 => 'Zend_Gdata_App_MediaSource',
      3 => 'Zend_Gdata_App_MediaEntry',
      4 => 'Zend_Gdata_App_Entry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Extension_Content',
      7 => 'Zend_Gdata_App_Extension_Published',
      8 => 'Zend_Gdata_App_Extension_Source',
      9 => 'Zend_Gdata_App_Extension_Summary',
      10 => 'Zend_Gdata_App_Extension_Control',
      11 => 'Zend_Http_Client',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App',
      14 => 'Zend_Gdata_App_Extension_Author',
      15 => 'Zend_Gdata_App_Extension_Id',
      16 => 'Zend_Gdata_App_Extension_Link',
      17 => 'Zend_Gdata_App_Extension_Rights',
      18 => 'Zend_Gdata_App_Extension_Title',
      19 => 'Zend_Gdata_App_Extension_Updated',
      20 => 'Zend_Gdata_App_InvalidArgumentException',
      21 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_MemberFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_MemberQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Gapps_Query',
      1 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Gapps_NicknameEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Gapps_Extension_Login',
      2 => 'Zend_Gdata_Gapps_Extension_Nickname',
      3 => 'Zend_Gdata_MediaMimeStream',
      4 => 'Zend_Gdata_App_MediaSource',
      5 => 'Zend_Gdata_App_MediaEntry',
      6 => 'Zend_Gdata_App_Entry',
      7 => 'Zend_Gdata_App_Exception',
      8 => 'Zend_Gdata_App_Extension_Content',
      9 => 'Zend_Gdata_App_Extension_Published',
      10 => 'Zend_Gdata_App_Extension_Source',
      11 => 'Zend_Gdata_App_Extension_Summary',
      12 => 'Zend_Gdata_App_Extension_Control',
      13 => 'Zend_Http_Client',
      14 => 'Zend_Gdata_App_FeedEntryParent',
      15 => 'Zend_Gdata_App',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_InvalidArgumentException',
      23 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_NicknameFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_NicknameQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Gapps_Query',
      1 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Gapps_OwnerEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_MediaMimeStream',
      2 => 'Zend_Gdata_App_MediaSource',
      3 => 'Zend_Gdata_App_MediaEntry',
      4 => 'Zend_Gdata_App_Entry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Extension_Content',
      7 => 'Zend_Gdata_App_Extension_Published',
      8 => 'Zend_Gdata_App_Extension_Source',
      9 => 'Zend_Gdata_App_Extension_Summary',
      10 => 'Zend_Gdata_App_Extension_Control',
      11 => 'Zend_Http_Client',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App',
      14 => 'Zend_Gdata_App_Extension_Author',
      15 => 'Zend_Gdata_App_Extension_Id',
      16 => 'Zend_Gdata_App_Extension_Link',
      17 => 'Zend_Gdata_App_Extension_Rights',
      18 => 'Zend_Gdata_App_Extension_Title',
      19 => 'Zend_Gdata_App_Extension_Updated',
      20 => 'Zend_Gdata_App_InvalidArgumentException',
      21 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_OwnerFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_OwnerQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Gapps_Query',
      1 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Gapps_Query' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Gapps_ServiceException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
      1 => 'Zend_Gdata_Gapps_Error',
      2 => 'Zend_Gdata_App_Exception',
    ),
  ),
  'Zend_Gdata_Gapps_UserEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Gapps_Extension_Login',
      2 => 'Zend_Gdata_Gapps_Extension_Name',
      3 => 'Zend_Gdata_Gapps_Extension_Quota',
      4 => 'Zend_Gdata_MediaMimeStream',
      5 => 'Zend_Gdata_App_MediaSource',
      6 => 'Zend_Gdata_App_MediaEntry',
      7 => 'Zend_Gdata_App_Entry',
      8 => 'Zend_Gdata_App_Exception',
      9 => 'Zend_Gdata_App_Extension_Content',
      10 => 'Zend_Gdata_App_Extension_Published',
      11 => 'Zend_Gdata_App_Extension_Source',
      12 => 'Zend_Gdata_App_Extension_Summary',
      13 => 'Zend_Gdata_App_Extension_Control',
      14 => 'Zend_Http_Client',
      15 => 'Zend_Gdata_App_FeedEntryParent',
      16 => 'Zend_Gdata_App',
      17 => 'Zend_Gdata_App_Extension_Author',
      18 => 'Zend_Gdata_App_Extension_Id',
      19 => 'Zend_Gdata_App_Extension_Link',
      20 => 'Zend_Gdata_App_Extension_Rights',
      21 => 'Zend_Gdata_App_Extension_Title',
      22 => 'Zend_Gdata_App_Extension_Updated',
      23 => 'Zend_Gdata_App_InvalidArgumentException',
      24 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_UserFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gapps_UserQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Gapps_Query',
      1 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Gbase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_Gbase_ItemFeed',
      3 => 'Zend_Gdata_Gbase_ItemEntry',
      4 => 'Zend_Gdata_Gbase_SnippetFeed',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Feed',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Gdata_App_Entry',
      9 => 'Zend_Http_Response',
      10 => 'Zend_Gdata_App_HttpException',
      11 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_Gbase_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Gbase_Extension_BaseAttribute',
      2 => 'Zend_Gdata_MediaMimeStream',
      3 => 'Zend_Gdata_App_MediaSource',
      4 => 'Zend_Gdata_App_MediaEntry',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gbase_Extension_BaseAttribute' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Element',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gbase_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gbase_ItemEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Gbase_Entry',
      1 => 'Zend_Gdata_Gbase_Extension_BaseAttribute',
      2 => 'Zend_Gdata_App_Entry',
      3 => 'Zend_Gdata_App_Exception',
      4 => 'Zend_Gdata_MediaMimeStream',
      5 => 'Zend_Gdata_App_MediaSource',
      6 => 'Zend_Gdata_App_MediaEntry',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gbase_ItemFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gbase_ItemQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Gbase_Query',
      1 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Gbase_Query' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Query',
      1 => 'Zend_Gdata_Gbase_ItemQuery',
    ),
  ),
  'Zend_Gdata_Gbase_SnippetEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Gbase_Entry',
      1 => 'Zend_Gdata_Gbase_Extension_BaseAttribute',
      2 => 'Zend_Gdata_MediaMimeStream',
      3 => 'Zend_Gdata_App_MediaSource',
      4 => 'Zend_Gdata_App_MediaEntry',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gbase_SnippetFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Gbase_SnippetQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Gbase_Query',
      1 => 'Zend_Gdata_Gbase_ItemQuery',
      2 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Geo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_App_Exception',
      3 => 'Zend_Gdata_App_Feed',
      4 => 'Zend_Gdata_App_InvalidArgumentException',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Http_Response',
      7 => 'Zend_Gdata_App_HttpException',
      8 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_Geo_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_MediaMimeStream',
      2 => 'Zend_Gdata_App_MediaSource',
      3 => 'Zend_Gdata_App_MediaEntry',
      4 => 'Zend_Gdata_App_Entry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Extension_Content',
      7 => 'Zend_Gdata_App_Extension_Published',
      8 => 'Zend_Gdata_App_Extension_Source',
      9 => 'Zend_Gdata_App_Extension_Summary',
      10 => 'Zend_Gdata_App_Extension_Control',
      11 => 'Zend_Http_Client',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App',
      14 => 'Zend_Gdata_App_Extension_Author',
      15 => 'Zend_Gdata_App_Extension_Id',
      16 => 'Zend_Gdata_App_Extension_Link',
      17 => 'Zend_Gdata_App_Extension_Rights',
      18 => 'Zend_Gdata_App_Extension_Title',
      19 => 'Zend_Gdata_App_Extension_Updated',
      20 => 'Zend_Gdata_App_InvalidArgumentException',
      21 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Geo_Extension_GeoRssWhere' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Geo_Extension_GmlPoint',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Geo_Extension_GmlPoint' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Geo_Extension_GmlPos',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Geo_Extension_GmlPos' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Geo_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Health' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_Feed',
      3 => 'Zend_Gdata_Health_ProfileFeed',
      4 => 'Zend_Gdata_Health_ProfileEntry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Feed',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Gdata_App_Entry',
      9 => 'Zend_Http_Response',
      10 => 'Zend_Gdata_App_HttpException',
      11 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_Health_Extension_Ccr' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Element',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Health_ProfileEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Health_Extension_Ccr',
      2 => 'Zend_Gdata_MediaMimeStream',
      3 => 'Zend_Gdata_App_MediaSource',
      4 => 'Zend_Gdata_App_MediaEntry',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Health_ProfileFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Health_ProfileListEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_MediaMimeStream',
      2 => 'Zend_Gdata_App_MediaSource',
      3 => 'Zend_Gdata_App_MediaEntry',
      4 => 'Zend_Gdata_App_Entry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Extension_Content',
      7 => 'Zend_Gdata_App_Extension_Published',
      8 => 'Zend_Gdata_App_Extension_Source',
      9 => 'Zend_Gdata_App_Extension_Summary',
      10 => 'Zend_Gdata_App_Extension_Control',
      11 => 'Zend_Http_Client',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App',
      14 => 'Zend_Gdata_App_Extension_Author',
      15 => 'Zend_Gdata_App_Extension_Id',
      16 => 'Zend_Gdata_App_Extension_Link',
      17 => 'Zend_Gdata_App_Extension_Rights',
      18 => 'Zend_Gdata_App_Extension_Title',
      19 => 'Zend_Gdata_App_Extension_Updated',
      20 => 'Zend_Gdata_App_InvalidArgumentException',
      21 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Health_ProfileListFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Health_Query' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_HttpAdapterStreamingProxy' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client_Adapter_Proxy',
      1 => 'Zend_Http_Client_Adapter_Interface',
      2 => 'Zend_Http_Client_Adapter_Stream',
      3 => 'Zend_Uri_Http',
      4 => 'Zend_Config',
      5 => 'Zend_Http_Client_Adapter_Socket',
      6 => 'Zend_Http_Client_Adapter_Exception',
    ),
  ),
  'Zend_Gdata_HttpAdapterStreamingSocket' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client_Adapter_Socket',
      1 => 'Zend_Http_Client_Adapter_Stream',
      2 => 'Zend_Http_Client_Adapter_Interface',
      3 => 'Zend_Uri_Http',
      4 => 'Zend_Config',
      5 => 'Zend_Http_Client_Adapter_Exception',
    ),
  ),
  'Zend_Gdata_HttpClient' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client',
      1 => 'Zend_Gdata_App_InvalidArgumentException',
      2 => 'Zend_Gdata_App_Exception',
      3 => 'Zend_Http_Response',
      4 => 'Zend_Http_Client_Adapter_Interface',
      5 => 'Zend_Http_Client_Exception',
      6 => 'Zend_Uri_Http',
      7 => 'Zend_Config',
      8 => 'Zend_Http_CookieJar',
      9 => 'Zend_Http_Cookie',
    ),
  ),
  'Zend_Gdata_Kind_EventEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Extension_OriginalEvent',
      2 => 'Zend_Gdata_Extension_EntryLink',
      3 => 'Zend_Gdata_Extension_Who',
      4 => 'Zend_Gdata_MediaMimeStream',
      5 => 'Zend_Gdata_App_MediaSource',
      6 => 'Zend_Gdata_App_MediaEntry',
      7 => 'Zend_Gdata_App_Entry',
      8 => 'Zend_Gdata_App_Exception',
      9 => 'Zend_Gdata_App_Extension_Content',
      10 => 'Zend_Gdata_App_Extension_Published',
      11 => 'Zend_Gdata_App_Extension_Source',
      12 => 'Zend_Gdata_App_Extension_Summary',
      13 => 'Zend_Gdata_App_Extension_Control',
      14 => 'Zend_Http_Client',
      15 => 'Zend_Gdata_App_FeedEntryParent',
      16 => 'Zend_Gdata_App',
      17 => 'Zend_Gdata_App_Extension_Author',
      18 => 'Zend_Gdata_App_Extension_Id',
      19 => 'Zend_Gdata_App_Extension_Link',
      20 => 'Zend_Gdata_App_Extension_Rights',
      21 => 'Zend_Gdata_App_Extension_Title',
      22 => 'Zend_Gdata_App_Extension_Updated',
      23 => 'Zend_Gdata_App_InvalidArgumentException',
      24 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_App_Exception',
      3 => 'Zend_Gdata_App_Feed',
      4 => 'Zend_Gdata_App_InvalidArgumentException',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Http_Response',
      7 => 'Zend_Gdata_App_HttpException',
      8 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_MediaMimeStream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_IOException',
    ),
  ),
  'Zend_Gdata_Media_Entry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Media_Extension_MediaGroup',
      2 => 'Zend_Gdata_MediaMimeStream',
      3 => 'Zend_Gdata_App_MediaSource',
      4 => 'Zend_Gdata_App_MediaEntry',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaCategory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaContent' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaCopyright' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaCredit' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaDescription' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaGroup' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Media_Extension_MediaCopyright',
      2 => 'Zend_Gdata_Media_Extension_MediaTitle',
      3 => 'Zend_Gdata_Media_Extension_MediaDescription',
      4 => 'Zend_Gdata_Media_Extension_MediaKeywords',
      5 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaHash' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_InvalidArgumentException',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaKeywords' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaPlayer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaRating' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaRestriction' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaText' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaThumbnail' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Extension_MediaTitle' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Media_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_MimeBodyString' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Gdata_MimeFile' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Gdata_Photos' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_Photos_UserFeed',
      3 => 'Zend_Gdata_App_Exception',
      4 => 'Zend_Gdata_App_HttpException',
      5 => 'Zend_Gdata_Photos_AlbumFeed',
      6 => 'Zend_Gdata_Photos_PhotoFeed',
      7 => 'Zend_Gdata_Photos_UserEntry',
      8 => 'Zend_Gdata_Photos_AlbumEntry',
      9 => 'Zend_Gdata_Photos_PhotoEntry',
      10 => 'Zend_Gdata_Photos_TagEntry',
      11 => 'Zend_Gdata_Photos_CommentEntry',
      12 => 'Zend_Gdata_App_Feed',
      13 => 'Zend_Gdata_App_InvalidArgumentException',
      14 => 'Zend_Gdata_App_Entry',
      15 => 'Zend_Http_Response',
      16 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_Photos_AlbumEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Photos_Extension_Access',
      2 => 'Zend_Gdata_Photos_Extension_Location',
      3 => 'Zend_Gdata_Photos_Extension_Name',
      4 => 'Zend_Gdata_Photos_Extension_NumPhotos',
      5 => 'Zend_Gdata_Photos_Extension_CommentCount',
      6 => 'Zend_Gdata_Photos_Extension_CommentingEnabled',
      7 => 'Zend_Gdata_Photos_Extension_Id',
      8 => 'Zend_Gdata_Geo_Extension_GeoRssWhere',
      9 => 'Zend_Gdata_Media_Extension_MediaGroup',
      10 => 'Zend_Gdata_Photos_Extension_User',
      11 => 'Zend_Gdata_Photos_Extension_Nickname',
      12 => 'Zend_Gdata_Photos_Extension_Timestamp',
      13 => 'Zend_Gdata_MediaMimeStream',
      14 => 'Zend_Gdata_App_MediaSource',
      15 => 'Zend_Gdata_App_MediaEntry',
      16 => 'Zend_Gdata_App_Entry',
      17 => 'Zend_Gdata_App_Exception',
      18 => 'Zend_Gdata_App_Extension_Content',
      19 => 'Zend_Gdata_App_Extension_Published',
      20 => 'Zend_Gdata_App_Extension_Source',
      21 => 'Zend_Gdata_App_Extension_Summary',
      22 => 'Zend_Gdata_App_Extension_Control',
      23 => 'Zend_Http_Client',
      24 => 'Zend_Gdata_App_FeedEntryParent',
      25 => 'Zend_Gdata_App',
      26 => 'Zend_Gdata_App_Extension_Author',
      27 => 'Zend_Gdata_App_Extension_Id',
      28 => 'Zend_Gdata_App_Extension_Link',
      29 => 'Zend_Gdata_App_Extension_Rights',
      30 => 'Zend_Gdata_App_Extension_Title',
      31 => 'Zend_Gdata_App_Extension_Updated',
      32 => 'Zend_Gdata_App_InvalidArgumentException',
      33 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_AlbumFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Photos_Extension_User',
      2 => 'Zend_Gdata_Photos_Extension_Access',
      3 => 'Zend_Gdata_Photos_Extension_Location',
      4 => 'Zend_Gdata_Photos_Extension_Name',
      5 => 'Zend_Gdata_Photos_Extension_NumPhotos',
      6 => 'Zend_Gdata_Photos_Extension_CommentCount',
      7 => 'Zend_Gdata_Photos_Extension_CommentingEnabled',
      8 => 'Zend_Gdata_Photos_Extension_Id',
      9 => 'Zend_Gdata_Geo_Extension_GeoRssWhere',
      10 => 'Zend_Gdata_Photos_Extension_Nickname',
      11 => 'Zend_Gdata_Photos_Extension_Timestamp',
      12 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      13 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      14 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      15 => 'Zend_Gdata_App_Feed',
      16 => 'Zend_Gdata_App_Entry',
      17 => 'Zend_Gdata_App_Exception',
      18 => 'Zend_Gdata_App_InvalidArgumentException',
      19 => 'Zend_Http_Client',
      20 => 'Zend_Gdata_App_FeedSourceParent',
      21 => 'Zend_Gdata_App',
      22 => 'Zend_Gdata_App_FeedEntryParent',
      23 => 'Zend_Gdata_App_Extension_Generator',
      24 => 'Zend_Gdata_App_Extension_Icon',
      25 => 'Zend_Gdata_App_Extension_Logo',
      26 => 'Zend_Gdata_App_Extension_Subtitle',
      27 => 'Zend_Gdata_App_Extension_Author',
      28 => 'Zend_Gdata_App_Extension_Id',
      29 => 'Zend_Gdata_App_Extension_Link',
      30 => 'Zend_Gdata_App_Extension_Rights',
      31 => 'Zend_Gdata_App_Extension_Title',
      32 => 'Zend_Gdata_App_Extension_Updated',
      33 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_AlbumQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Photos_UserQuery',
      1 => 'Zend_Gdata_App_InvalidArgumentException',
      2 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Photos_CommentEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Photos_Extension_PhotoId',
      2 => 'Zend_Gdata_Photos_Extension_Id',
      3 => 'Zend_Gdata_MediaMimeStream',
      4 => 'Zend_Gdata_App_MediaSource',
      5 => 'Zend_Gdata_App_MediaEntry',
      6 => 'Zend_Gdata_App_Entry',
      7 => 'Zend_Gdata_App_Exception',
      8 => 'Zend_Gdata_App_Extension_Content',
      9 => 'Zend_Gdata_App_Extension_Published',
      10 => 'Zend_Gdata_App_Extension_Source',
      11 => 'Zend_Gdata_App_Extension_Summary',
      12 => 'Zend_Gdata_App_Extension_Control',
      13 => 'Zend_Http_Client',
      14 => 'Zend_Gdata_App_FeedEntryParent',
      15 => 'Zend_Gdata_App',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_InvalidArgumentException',
      23 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Access' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_AlbumId' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_BytesUsed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Checksum' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Client' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_CommentCount' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_CommentingEnabled' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Height' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Id' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Location' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_MaxPhotosPerAlbum' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Name' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Nickname' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_NumPhotos' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_NumPhotosRemaining' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_PhotoId' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Position' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_QuotaCurrent' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_QuotaLimit' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Rotation' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Size' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Thumbnail' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Timestamp' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_User' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Version' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Weight' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_Extension_Width' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_PhotoEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media_Entry',
      1 => 'Zend_Gdata_Photos_Extension_AlbumId',
      2 => 'Zend_Gdata_Photos_Extension_Id',
      3 => 'Zend_Gdata_Photos_Extension_Version',
      4 => 'Zend_Gdata_Photos_Extension_Width',
      5 => 'Zend_Gdata_Photos_Extension_Height',
      6 => 'Zend_Gdata_Photos_Extension_Size',
      7 => 'Zend_Gdata_Photos_Extension_Client',
      8 => 'Zend_Gdata_Photos_Extension_Checksum',
      9 => 'Zend_Gdata_Photos_Extension_Timestamp',
      10 => 'Zend_Gdata_Photos_Extension_CommentCount',
      11 => 'Zend_Gdata_Photos_Extension_CommentingEnabled',
      12 => 'Zend_Gdata_Exif_Extension_Tags',
      13 => 'Zend_Gdata_Geo_Extension_GeoRssWhere',
      14 => 'Zend_Gdata_Media_Extension_MediaGroup',
      15 => 'Zend_Gdata_MediaMimeStream',
      16 => 'Zend_Gdata_App_MediaSource',
      17 => 'Zend_Gdata_App_MediaEntry',
      18 => 'Zend_Gdata_App_Entry',
      19 => 'Zend_Gdata_App_Exception',
      20 => 'Zend_Gdata_App_Extension_Content',
      21 => 'Zend_Gdata_App_Extension_Published',
      22 => 'Zend_Gdata_App_Extension_Source',
      23 => 'Zend_Gdata_App_Extension_Summary',
      24 => 'Zend_Gdata_App_Extension_Control',
      25 => 'Zend_Http_Client',
      26 => 'Zend_Gdata_App_FeedEntryParent',
      27 => 'Zend_Gdata_App',
      28 => 'Zend_Gdata_App_Extension_Author',
      29 => 'Zend_Gdata_App_Extension_Id',
      30 => 'Zend_Gdata_App_Extension_Link',
      31 => 'Zend_Gdata_App_Extension_Rights',
      32 => 'Zend_Gdata_App_Extension_Title',
      33 => 'Zend_Gdata_App_Extension_Updated',
      34 => 'Zend_Gdata_App_InvalidArgumentException',
      35 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_PhotoFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Photos_Extension_Id',
      2 => 'Zend_Gdata_Photos_Extension_Version',
      3 => 'Zend_Gdata_Photos_Extension_AlbumId',
      4 => 'Zend_Gdata_Photos_Extension_Width',
      5 => 'Zend_Gdata_Photos_Extension_Height',
      6 => 'Zend_Gdata_Photos_Extension_Size',
      7 => 'Zend_Gdata_Photos_Extension_Client',
      8 => 'Zend_Gdata_Photos_Extension_Checksum',
      9 => 'Zend_Gdata_Photos_Extension_Timestamp',
      10 => 'Zend_Gdata_Photos_Extension_CommentCount',
      11 => 'Zend_Gdata_Photos_Extension_CommentingEnabled',
      12 => 'Zend_Gdata_Media_Extension_MediaGroup',
      13 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      14 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      15 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      16 => 'Zend_Gdata_App_Feed',
      17 => 'Zend_Gdata_App_Entry',
      18 => 'Zend_Gdata_App_Exception',
      19 => 'Zend_Gdata_App_InvalidArgumentException',
      20 => 'Zend_Http_Client',
      21 => 'Zend_Gdata_App_FeedSourceParent',
      22 => 'Zend_Gdata_App',
      23 => 'Zend_Gdata_App_FeedEntryParent',
      24 => 'Zend_Gdata_App_Extension_Generator',
      25 => 'Zend_Gdata_App_Extension_Icon',
      26 => 'Zend_Gdata_App_Extension_Logo',
      27 => 'Zend_Gdata_App_Extension_Subtitle',
      28 => 'Zend_Gdata_App_Extension_Author',
      29 => 'Zend_Gdata_App_Extension_Id',
      30 => 'Zend_Gdata_App_Extension_Link',
      31 => 'Zend_Gdata_App_Extension_Rights',
      32 => 'Zend_Gdata_App_Extension_Title',
      33 => 'Zend_Gdata_App_Extension_Updated',
      34 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_PhotoQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Photos_AlbumQuery',
      1 => 'Zend_Gdata_App_InvalidArgumentException',
      2 => 'Zend_Gdata_Photos_UserQuery',
      3 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Photos_TagEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Photos_Extension_Weight',
      2 => 'Zend_Gdata_MediaMimeStream',
      3 => 'Zend_Gdata_App_MediaSource',
      4 => 'Zend_Gdata_App_MediaEntry',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_UserEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Photos_Extension_Nickname',
      2 => 'Zend_Gdata_Photos_Extension_Thumbnail',
      3 => 'Zend_Gdata_Photos_Extension_QuotaCurrent',
      4 => 'Zend_Gdata_Photos_Extension_QuotaLimit',
      5 => 'Zend_Gdata_Photos_Extension_MaxPhotosPerAlbum',
      6 => 'Zend_Gdata_Photos_Extension_User',
      7 => 'Zend_Gdata_MediaMimeStream',
      8 => 'Zend_Gdata_App_MediaSource',
      9 => 'Zend_Gdata_App_MediaEntry',
      10 => 'Zend_Gdata_App_Entry',
      11 => 'Zend_Gdata_App_Exception',
      12 => 'Zend_Gdata_App_Extension_Content',
      13 => 'Zend_Gdata_App_Extension_Published',
      14 => 'Zend_Gdata_App_Extension_Source',
      15 => 'Zend_Gdata_App_Extension_Summary',
      16 => 'Zend_Gdata_App_Extension_Control',
      17 => 'Zend_Http_Client',
      18 => 'Zend_Gdata_App_FeedEntryParent',
      19 => 'Zend_Gdata_App',
      20 => 'Zend_Gdata_App_Extension_Author',
      21 => 'Zend_Gdata_App_Extension_Id',
      22 => 'Zend_Gdata_App_Extension_Link',
      23 => 'Zend_Gdata_App_Extension_Rights',
      24 => 'Zend_Gdata_App_Extension_Title',
      25 => 'Zend_Gdata_App_Extension_Updated',
      26 => 'Zend_Gdata_App_InvalidArgumentException',
      27 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_UserFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Photos_Extension_User',
      2 => 'Zend_Gdata_Photos_Extension_Nickname',
      3 => 'Zend_Gdata_Photos_Extension_Thumbnail',
      4 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      5 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      6 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      7 => 'Zend_Gdata_App_Feed',
      8 => 'Zend_Gdata_App_Entry',
      9 => 'Zend_Gdata_App_Exception',
      10 => 'Zend_Gdata_App_InvalidArgumentException',
      11 => 'Zend_Http_Client',
      12 => 'Zend_Gdata_App_FeedSourceParent',
      13 => 'Zend_Gdata_App',
      14 => 'Zend_Gdata_App_FeedEntryParent',
      15 => 'Zend_Gdata_App_Extension_Generator',
      16 => 'Zend_Gdata_App_Extension_Icon',
      17 => 'Zend_Gdata_App_Extension_Logo',
      18 => 'Zend_Gdata_App_Extension_Subtitle',
      19 => 'Zend_Gdata_App_Extension_Author',
      20 => 'Zend_Gdata_App_Extension_Id',
      21 => 'Zend_Gdata_App_Extension_Link',
      22 => 'Zend_Gdata_App_Extension_Rights',
      23 => 'Zend_Gdata_App_Extension_Title',
      24 => 'Zend_Gdata_App_Extension_Updated',
      25 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Photos_UserQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Query',
      1 => 'Zend_Gdata_App_InvalidArgumentException',
    ),
  ),
  'Zend_Gdata_Query' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Gdata_Spreadsheets' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_Spreadsheets_SpreadsheetFeed',
      3 => 'Zend_Gdata_Spreadsheets_WorksheetFeed',
      4 => 'Zend_Gdata_App_Exception',
      5 => 'Zend_Gdata_App_Feed',
      6 => 'Zend_Gdata_App_InvalidArgumentException',
      7 => 'Zend_Gdata_App_Entry',
      8 => 'Zend_Http_Response',
      9 => 'Zend_Gdata_App_HttpException',
      10 => 'Zend_Gdata_App',
    ),
  ),
  'Zend_Gdata_Spreadsheets_CellEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Spreadsheets_Extension_Cell',
      2 => 'Zend_Gdata_MediaMimeStream',
      3 => 'Zend_Gdata_App_MediaSource',
      4 => 'Zend_Gdata_App_MediaEntry',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Spreadsheets_CellFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Spreadsheets_CellQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Query',
    ),
  ),
  'Zend_Gdata_Spreadsheets_DocumentQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Query',
      1 => 'Zend_Gdata_Spreadsheets_CellQuery',
    ),
  ),
  'Zend_Gdata_Spreadsheets_Extension_Cell' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Spreadsheets_Extension_ColCount' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Spreadsheets_Extension_Custom' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Spreadsheets_Extension_RowCount' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Spreadsheets_ListEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Spreadsheets_Extension_Custom',
      2 => 'Zend_Gdata_App_InvalidArgumentException',
      3 => 'Zend_Gdata_MediaMimeStream',
      4 => 'Zend_Gdata_App_MediaSource',
      5 => 'Zend_Gdata_App_MediaEntry',
      6 => 'Zend_Gdata_App_Entry',
      7 => 'Zend_Gdata_App_Exception',
      8 => 'Zend_Gdata_App_Extension_Content',
      9 => 'Zend_Gdata_App_Extension_Published',
      10 => 'Zend_Gdata_App_Extension_Source',
      11 => 'Zend_Gdata_App_Extension_Summary',
      12 => 'Zend_Gdata_App_Extension_Control',
      13 => 'Zend_Http_Client',
      14 => 'Zend_Gdata_App_FeedEntryParent',
      15 => 'Zend_Gdata_App',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Spreadsheets_ListFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Spreadsheets_ListQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Query',
      1 => 'Zend_Gdata_Spreadsheets_CellQuery',
      2 => 'Zend_Gdata_Spreadsheets_DocumentQuery',
    ),
  ),
  'Zend_Gdata_Spreadsheets_SpreadsheetEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_Spreadsheets_WorksheetFeed',
      2 => 'Zend_Gdata_MediaMimeStream',
      3 => 'Zend_Gdata_App_MediaSource',
      4 => 'Zend_Gdata_App_MediaEntry',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Spreadsheets_SpreadsheetFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Spreadsheets_WorksheetEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_MediaMimeStream',
      2 => 'Zend_Gdata_App_MediaSource',
      3 => 'Zend_Gdata_App_MediaEntry',
      4 => 'Zend_Gdata_App_Entry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Extension_Content',
      7 => 'Zend_Gdata_App_Extension_Published',
      8 => 'Zend_Gdata_App_Extension_Source',
      9 => 'Zend_Gdata_App_Extension_Summary',
      10 => 'Zend_Gdata_App_Extension_Control',
      11 => 'Zend_Http_Client',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App',
      14 => 'Zend_Gdata_App_Extension_Author',
      15 => 'Zend_Gdata_App_Extension_Id',
      16 => 'Zend_Gdata_App_Extension_Link',
      17 => 'Zend_Gdata_App_Extension_Rights',
      18 => 'Zend_Gdata_App_Extension_Title',
      19 => 'Zend_Gdata_App_Extension_Updated',
      20 => 'Zend_Gdata_App_InvalidArgumentException',
      21 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_Spreadsheets_WorksheetFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Gdata_App_HttpException',
      3 => 'Zend_Gdata_App',
      4 => 'Zend_Gdata_YouTube_VideoFeed',
      5 => 'Zend_Gdata_YouTube_VideoEntry',
      6 => 'Zend_Gdata_YouTube_CommentFeed',
      7 => 'Zend_Gdata_YouTube_PlaylistListFeed',
      8 => 'Zend_Gdata_YouTube_PlaylistVideoFeed',
      9 => 'Zend_Gdata_YouTube_ContactFeed',
      10 => 'Zend_Gdata_YouTube_UserProfileEntry',
      11 => 'Zend_Gdata_App_Exception',
      12 => 'Zend_Gdata_App_VersionException',
      13 => 'Zend_Gdata_YouTube_ActivityFeed',
      14 => 'Zend_Gdata_YouTube_InboxFeed',
      15 => 'Zend_Gdata_App_InvalidArgumentException',
      16 => 'Zend_Gdata_YouTube_InboxEntry',
      17 => 'Zend_Gdata_YouTube_CommentEntry',
      18 => 'Zend_Gdata_App_Feed',
      19 => 'Zend_Gdata_App_Entry',
      20 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Gdata_YouTube_ActivityEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_YouTube_Extension_VideoId',
      2 => 'Zend_Gdata_YouTube_Extension_Username',
      3 => 'Zend_Gdata_MediaMimeStream',
      4 => 'Zend_Gdata_App_MediaSource',
      5 => 'Zend_Gdata_App_MediaEntry',
      6 => 'Zend_Gdata_App_Entry',
      7 => 'Zend_Gdata_App_Exception',
      8 => 'Zend_Gdata_App_Extension_Content',
      9 => 'Zend_Gdata_App_Extension_Published',
      10 => 'Zend_Gdata_App_Extension_Source',
      11 => 'Zend_Gdata_App_Extension_Summary',
      12 => 'Zend_Gdata_App_Extension_Control',
      13 => 'Zend_Http_Client',
      14 => 'Zend_Gdata_App_FeedEntryParent',
      15 => 'Zend_Gdata_App',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_InvalidArgumentException',
      23 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_ActivityFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_CommentEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_MediaMimeStream',
      2 => 'Zend_Gdata_App_MediaSource',
      3 => 'Zend_Gdata_App_MediaEntry',
      4 => 'Zend_Gdata_App_Entry',
      5 => 'Zend_Gdata_App_Exception',
      6 => 'Zend_Gdata_App_Extension_Content',
      7 => 'Zend_Gdata_App_Extension_Published',
      8 => 'Zend_Gdata_App_Extension_Source',
      9 => 'Zend_Gdata_App_Extension_Summary',
      10 => 'Zend_Gdata_App_Extension_Control',
      11 => 'Zend_Http_Client',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App',
      14 => 'Zend_Gdata_App_Extension_Author',
      15 => 'Zend_Gdata_App_Extension_Id',
      16 => 'Zend_Gdata_App_Extension_Link',
      17 => 'Zend_Gdata_App_Extension_Rights',
      18 => 'Zend_Gdata_App_Extension_Title',
      19 => 'Zend_Gdata_App_Extension_Updated',
      20 => 'Zend_Gdata_App_InvalidArgumentException',
      21 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_CommentFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      3 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      4 => 'Zend_Gdata_App_Feed',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_InvalidArgumentException',
      8 => 'Zend_Http_Client',
      9 => 'Zend_Gdata_App_FeedSourceParent',
      10 => 'Zend_Gdata_App',
      11 => 'Zend_Gdata_App_FeedEntryParent',
      12 => 'Zend_Gdata_App_Extension_Generator',
      13 => 'Zend_Gdata_App_Extension_Icon',
      14 => 'Zend_Gdata_App_Extension_Logo',
      15 => 'Zend_Gdata_App_Extension_Subtitle',
      16 => 'Zend_Gdata_App_Extension_Author',
      17 => 'Zend_Gdata_App_Extension_Id',
      18 => 'Zend_Gdata_App_Extension_Link',
      19 => 'Zend_Gdata_App_Extension_Rights',
      20 => 'Zend_Gdata_App_Extension_Title',
      21 => 'Zend_Gdata_App_Extension_Updated',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_ContactEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_YouTube_UserProfileEntry',
      1 => 'Zend_Gdata_YouTube_Extension_Status',
      2 => 'Zend_Gdata_YouTube_Extension_AboutMe',
      3 => 'Zend_Gdata_App_VersionException',
      4 => 'Zend_Gdata_YouTube_Extension_FirstName',
      5 => 'Zend_Gdata_YouTube_Extension_LastName',
      6 => 'Zend_Gdata_YouTube_Extension_Statistics',
      7 => 'Zend_Gdata_Media_Extension_MediaThumbnail',
      8 => 'Zend_Gdata_YouTube_Extension_Age',
      9 => 'Zend_Gdata_YouTube_Extension_Username',
      10 => 'Zend_Gdata_YouTube_Extension_Books',
      11 => 'Zend_Gdata_YouTube_Extension_Company',
      12 => 'Zend_Gdata_YouTube_Extension_Hobbies',
      13 => 'Zend_Gdata_YouTube_Extension_Hometown',
      14 => 'Zend_Gdata_YouTube_Extension_Location',
      15 => 'Zend_Gdata_YouTube_Extension_Movies',
      16 => 'Zend_Gdata_YouTube_Extension_Music',
      17 => 'Zend_Gdata_YouTube_Extension_Occupation',
      18 => 'Zend_Gdata_YouTube_Extension_School',
      19 => 'Zend_Gdata_YouTube_Extension_Gender',
      20 => 'Zend_Gdata_YouTube_Extension_Relationship',
      21 => 'Zend_Gdata_MediaMimeStream',
      22 => 'Zend_Gdata_App_MediaSource',
      23 => 'Zend_Gdata_App_MediaEntry',
      24 => 'Zend_Gdata_App_Entry',
      25 => 'Zend_Gdata_App_Exception',
      26 => 'Zend_Gdata_App_Extension_Content',
      27 => 'Zend_Gdata_App_Extension_Published',
      28 => 'Zend_Gdata_App_Extension_Source',
      29 => 'Zend_Gdata_App_Extension_Summary',
      30 => 'Zend_Gdata_App_Extension_Control',
      31 => 'Zend_Http_Client',
      32 => 'Zend_Gdata_App_FeedEntryParent',
      33 => 'Zend_Gdata_App',
      34 => 'Zend_Gdata_App_Extension_Author',
      35 => 'Zend_Gdata_App_Extension_Id',
      36 => 'Zend_Gdata_App_Extension_Link',
      37 => 'Zend_Gdata_App_Extension_Rights',
      38 => 'Zend_Gdata_App_Extension_Title',
      39 => 'Zend_Gdata_App_Extension_Updated',
      40 => 'Zend_Gdata_App_InvalidArgumentException',
      41 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_ContactFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Feed',
      3 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      4 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      5 => 'Zend_Gdata_App_Feed',
      6 => 'Zend_Gdata_App_Entry',
      7 => 'Zend_Gdata_App_Exception',
      8 => 'Zend_Gdata_App_InvalidArgumentException',
      9 => 'Zend_Http_Client',
      10 => 'Zend_Gdata_App_FeedSourceParent',
      11 => 'Zend_Gdata_App',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App_Extension_Generator',
      14 => 'Zend_Gdata_App_Extension_Icon',
      15 => 'Zend_Gdata_App_Extension_Logo',
      16 => 'Zend_Gdata_App_Extension_Subtitle',
      17 => 'Zend_Gdata_App_Extension_Author',
      18 => 'Zend_Gdata_App_Extension_Id',
      19 => 'Zend_Gdata_App_Extension_Link',
      20 => 'Zend_Gdata_App_Extension_Rights',
      21 => 'Zend_Gdata_App_Extension_Title',
      22 => 'Zend_Gdata_App_Extension_Updated',
      23 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_AboutMe' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Age' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Books' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Company' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Control' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Control',
      1 => 'Zend_Gdata_App_Extension_Draft',
      2 => 'Zend_Gdata_YouTube_Extension_State',
      3 => 'Zend_Gdata_App_Entry',
      4 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_CountHint' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Description' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Duration' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_FirstName' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Gender' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Hobbies' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Hometown' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_LastName' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Link' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension_Link',
      1 => 'Zend_Gdata_YouTube_Extension_Token',
      2 => 'Zend_Gdata_App_Entry',
      3 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Location' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_MediaContent' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media_Extension_MediaContent',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_MediaCredit' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Media_Extension_MediaCredit',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_MediaGroup' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media_Extension_MediaGroup',
      1 => 'Zend_Gdata_YouTube_Extension_Duration',
      2 => 'Zend_Gdata_YouTube_Extension_VideoId',
      3 => 'Zend_Gdata_YouTube_Extension_Uploaded',
      4 => 'Zend_Gdata_YouTube_Extension_Private',
      5 => 'Zend_Gdata_YouTube_Extension_MediaRating',
      6 => 'Zend_Gdata_YouTube_Extension_MediaCredit',
      7 => 'Zend_Gdata_Media_Extension_MediaCopyright',
      8 => 'Zend_Gdata_Media_Extension_MediaTitle',
      9 => 'Zend_Gdata_Media_Extension_MediaDescription',
      10 => 'Zend_Gdata_Media_Extension_MediaKeywords',
      11 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_MediaRating' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Movies' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Music' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_NoEmbed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Occupation' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_PlaylistId' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_PlaylistTitle' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Position' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_Extension_Visibility',
      2 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Private' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_QueryString' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Racy' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Recorded' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Relationship' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_ReleaseDate' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_School' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_State' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Statistics' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Status' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Token' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_App_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Uploaded' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_Username' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_Extension_VideoId' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Extension',
      1 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_InboxEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media_Entry',
      1 => 'Zend_Gdata_App_VersionException',
      2 => 'Zend_Gdata_YouTube_Extension_Description',
      3 => 'Zend_Gdata_Extension_Rating',
      4 => 'Zend_Gdata_Extension_Comments',
      5 => 'Zend_Gdata_YouTube_Extension_Statistics',
      6 => 'Zend_Gdata_Media_Extension_MediaGroup',
      7 => 'Zend_Gdata_MediaMimeStream',
      8 => 'Zend_Gdata_App_MediaSource',
      9 => 'Zend_Gdata_App_MediaEntry',
      10 => 'Zend_Gdata_App_Entry',
      11 => 'Zend_Gdata_App_Exception',
      12 => 'Zend_Gdata_App_Extension_Content',
      13 => 'Zend_Gdata_App_Extension_Published',
      14 => 'Zend_Gdata_App_Extension_Source',
      15 => 'Zend_Gdata_App_Extension_Summary',
      16 => 'Zend_Gdata_App_Extension_Control',
      17 => 'Zend_Http_Client',
      18 => 'Zend_Gdata_App_FeedEntryParent',
      19 => 'Zend_Gdata_App',
      20 => 'Zend_Gdata_App_Extension_Author',
      21 => 'Zend_Gdata_App_Extension_Id',
      22 => 'Zend_Gdata_App_Extension_Link',
      23 => 'Zend_Gdata_App_Extension_Rights',
      24 => 'Zend_Gdata_App_Extension_Title',
      25 => 'Zend_Gdata_App_Extension_Updated',
      26 => 'Zend_Gdata_App_InvalidArgumentException',
      27 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_InboxFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Feed',
      3 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      4 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      5 => 'Zend_Gdata_App_Feed',
      6 => 'Zend_Gdata_App_Entry',
      7 => 'Zend_Gdata_App_Exception',
      8 => 'Zend_Gdata_App_InvalidArgumentException',
      9 => 'Zend_Http_Client',
      10 => 'Zend_Gdata_App_FeedSourceParent',
      11 => 'Zend_Gdata_App',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App_Extension_Generator',
      14 => 'Zend_Gdata_App_Extension_Icon',
      15 => 'Zend_Gdata_App_Extension_Logo',
      16 => 'Zend_Gdata_App_Extension_Subtitle',
      17 => 'Zend_Gdata_App_Extension_Author',
      18 => 'Zend_Gdata_App_Extension_Id',
      19 => 'Zend_Gdata_App_Extension_Link',
      20 => 'Zend_Gdata_App_Extension_Rights',
      21 => 'Zend_Gdata_App_Extension_Title',
      22 => 'Zend_Gdata_App_Extension_Updated',
      23 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_MediaEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media_Entry',
      1 => 'Zend_Gdata_Media_Extension_MediaGroup',
      2 => 'Zend_Gdata_MediaMimeStream',
      3 => 'Zend_Gdata_App_MediaSource',
      4 => 'Zend_Gdata_App_MediaEntry',
      5 => 'Zend_Gdata_App_Entry',
      6 => 'Zend_Gdata_App_Exception',
      7 => 'Zend_Gdata_App_Extension_Content',
      8 => 'Zend_Gdata_App_Extension_Published',
      9 => 'Zend_Gdata_App_Extension_Source',
      10 => 'Zend_Gdata_App_Extension_Summary',
      11 => 'Zend_Gdata_App_Extension_Control',
      12 => 'Zend_Http_Client',
      13 => 'Zend_Gdata_App_FeedEntryParent',
      14 => 'Zend_Gdata_App',
      15 => 'Zend_Gdata_App_Extension_Author',
      16 => 'Zend_Gdata_App_Extension_Id',
      17 => 'Zend_Gdata_App_Extension_Link',
      18 => 'Zend_Gdata_App_Extension_Rights',
      19 => 'Zend_Gdata_App_Extension_Title',
      20 => 'Zend_Gdata_App_Extension_Updated',
      21 => 'Zend_Gdata_App_InvalidArgumentException',
      22 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_PlaylistListEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_YouTube_Extension_Description',
      2 => 'Zend_Gdata_App_VersionException',
      3 => 'Zend_Gdata_YouTube_Extension_CountHint',
      4 => 'Zend_Gdata_YouTube_Extension_PlaylistId',
      5 => 'Zend_Gdata_MediaMimeStream',
      6 => 'Zend_Gdata_App_MediaSource',
      7 => 'Zend_Gdata_App_MediaEntry',
      8 => 'Zend_Gdata_App_Entry',
      9 => 'Zend_Gdata_App_Exception',
      10 => 'Zend_Gdata_App_Extension_Content',
      11 => 'Zend_Gdata_App_Extension_Published',
      12 => 'Zend_Gdata_App_Extension_Source',
      13 => 'Zend_Gdata_App_Extension_Summary',
      14 => 'Zend_Gdata_App_Extension_Control',
      15 => 'Zend_Http_Client',
      16 => 'Zend_Gdata_App_FeedEntryParent',
      17 => 'Zend_Gdata_App',
      18 => 'Zend_Gdata_App_Extension_Author',
      19 => 'Zend_Gdata_App_Extension_Id',
      20 => 'Zend_Gdata_App_Extension_Link',
      21 => 'Zend_Gdata_App_Extension_Rights',
      22 => 'Zend_Gdata_App_Extension_Title',
      23 => 'Zend_Gdata_App_Extension_Updated',
      24 => 'Zend_Gdata_App_InvalidArgumentException',
      25 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_PlaylistListFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Feed',
      3 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      4 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      5 => 'Zend_Gdata_App_Feed',
      6 => 'Zend_Gdata_App_Entry',
      7 => 'Zend_Gdata_App_Exception',
      8 => 'Zend_Gdata_App_InvalidArgumentException',
      9 => 'Zend_Http_Client',
      10 => 'Zend_Gdata_App_FeedSourceParent',
      11 => 'Zend_Gdata_App',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App_Extension_Generator',
      14 => 'Zend_Gdata_App_Extension_Icon',
      15 => 'Zend_Gdata_App_Extension_Logo',
      16 => 'Zend_Gdata_App_Extension_Subtitle',
      17 => 'Zend_Gdata_App_Extension_Author',
      18 => 'Zend_Gdata_App_Extension_Id',
      19 => 'Zend_Gdata_App_Extension_Link',
      20 => 'Zend_Gdata_App_Extension_Rights',
      21 => 'Zend_Gdata_App_Extension_Title',
      22 => 'Zend_Gdata_App_Extension_Updated',
      23 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_PlaylistVideoEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_YouTube_VideoEntry',
      1 => 'Zend_Gdata_YouTube_Extension_Position',
      2 => 'Zend_Gdata_YouTube_Extension_Recorded',
      3 => 'Zend_Gdata_YouTube_Extension_Location',
      4 => 'Zend_Gdata_YouTube_Extension_NoEmbed',
      5 => 'Zend_Gdata_YouTube_Extension_Statistics',
      6 => 'Zend_Gdata_YouTube_Extension_Racy',
      7 => 'Zend_Gdata_App_VersionException',
      8 => 'Zend_Gdata_Extension_Rating',
      9 => 'Zend_Gdata_Extension_Comments',
      10 => 'Zend_Gdata_App_Extension_Link',
      11 => 'Zend_Gdata_Geo_Extension_GeoRssWhere',
      12 => 'Zend_Gdata_YouTube_Extension_State',
      13 => 'Zend_Gdata_Media_Extension_MediaGroup',
      14 => 'Zend_Gdata_Media_Entry',
      15 => 'Zend_Gdata_MediaMimeStream',
      16 => 'Zend_Gdata_App_MediaSource',
      17 => 'Zend_Gdata_App_MediaEntry',
      18 => 'Zend_Gdata_App_Entry',
      19 => 'Zend_Gdata_App_Exception',
      20 => 'Zend_Gdata_App_Extension_Content',
      21 => 'Zend_Gdata_App_Extension_Published',
      22 => 'Zend_Gdata_App_Extension_Source',
      23 => 'Zend_Gdata_App_Extension_Summary',
      24 => 'Zend_Gdata_App_Extension_Control',
      25 => 'Zend_Http_Client',
      26 => 'Zend_Gdata_App_FeedEntryParent',
      27 => 'Zend_Gdata_App',
      28 => 'Zend_Gdata_App_Extension_Author',
      29 => 'Zend_Gdata_App_Extension_Id',
      30 => 'Zend_Gdata_App_Extension_Rights',
      31 => 'Zend_Gdata_App_Extension_Title',
      32 => 'Zend_Gdata_App_Extension_Updated',
      33 => 'Zend_Gdata_App_InvalidArgumentException',
      34 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_PlaylistVideoFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Feed',
      3 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      4 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      5 => 'Zend_Gdata_App_Feed',
      6 => 'Zend_Gdata_App_Entry',
      7 => 'Zend_Gdata_App_Exception',
      8 => 'Zend_Gdata_App_InvalidArgumentException',
      9 => 'Zend_Http_Client',
      10 => 'Zend_Gdata_App_FeedSourceParent',
      11 => 'Zend_Gdata_App',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App_Extension_Generator',
      14 => 'Zend_Gdata_App_Extension_Icon',
      15 => 'Zend_Gdata_App_Extension_Logo',
      16 => 'Zend_Gdata_App_Extension_Subtitle',
      17 => 'Zend_Gdata_App_Extension_Author',
      18 => 'Zend_Gdata_App_Extension_Id',
      19 => 'Zend_Gdata_App_Extension_Link',
      20 => 'Zend_Gdata_App_Extension_Rights',
      21 => 'Zend_Gdata_App_Extension_Title',
      22 => 'Zend_Gdata_App_Extension_Updated',
      23 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_SubscriptionEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_App_VersionException',
      2 => 'Zend_Gdata_YouTube_Extension_PlaylistId',
      3 => 'Zend_Gdata_YouTube_Extension_QueryString',
      4 => 'Zend_Gdata_YouTube_Extension_PlaylistTitle',
      5 => 'Zend_Gdata_YouTube_Extension_CountHint',
      6 => 'Zend_Gdata_Media_Extension_MediaThumbnail',
      7 => 'Zend_Gdata_YouTube_Extension_Username',
      8 => 'Zend_Gdata_MediaMimeStream',
      9 => 'Zend_Gdata_App_MediaSource',
      10 => 'Zend_Gdata_App_MediaEntry',
      11 => 'Zend_Gdata_App_Entry',
      12 => 'Zend_Gdata_App_Exception',
      13 => 'Zend_Gdata_App_Extension_Content',
      14 => 'Zend_Gdata_App_Extension_Published',
      15 => 'Zend_Gdata_App_Extension_Source',
      16 => 'Zend_Gdata_App_Extension_Summary',
      17 => 'Zend_Gdata_App_Extension_Control',
      18 => 'Zend_Http_Client',
      19 => 'Zend_Gdata_App_FeedEntryParent',
      20 => 'Zend_Gdata_App',
      21 => 'Zend_Gdata_App_Extension_Author',
      22 => 'Zend_Gdata_App_Extension_Id',
      23 => 'Zend_Gdata_App_Extension_Link',
      24 => 'Zend_Gdata_App_Extension_Rights',
      25 => 'Zend_Gdata_App_Extension_Title',
      26 => 'Zend_Gdata_App_Extension_Updated',
      27 => 'Zend_Gdata_App_InvalidArgumentException',
      28 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_SubscriptionFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Feed',
      3 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      4 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      5 => 'Zend_Gdata_App_Feed',
      6 => 'Zend_Gdata_App_Entry',
      7 => 'Zend_Gdata_App_Exception',
      8 => 'Zend_Gdata_App_InvalidArgumentException',
      9 => 'Zend_Http_Client',
      10 => 'Zend_Gdata_App_FeedSourceParent',
      11 => 'Zend_Gdata_App',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App_Extension_Generator',
      14 => 'Zend_Gdata_App_Extension_Icon',
      15 => 'Zend_Gdata_App_Extension_Logo',
      16 => 'Zend_Gdata_App_Extension_Subtitle',
      17 => 'Zend_Gdata_App_Extension_Author',
      18 => 'Zend_Gdata_App_Extension_Id',
      19 => 'Zend_Gdata_App_Extension_Link',
      20 => 'Zend_Gdata_App_Extension_Rights',
      21 => 'Zend_Gdata_App_Extension_Title',
      22 => 'Zend_Gdata_App_Extension_Updated',
      23 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_UserProfileEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Entry',
      1 => 'Zend_Gdata_YouTube_Extension_AboutMe',
      2 => 'Zend_Gdata_App_VersionException',
      3 => 'Zend_Gdata_YouTube_Extension_FirstName',
      4 => 'Zend_Gdata_YouTube_Extension_LastName',
      5 => 'Zend_Gdata_YouTube_Extension_Statistics',
      6 => 'Zend_Gdata_Media_Extension_MediaThumbnail',
      7 => 'Zend_Gdata_YouTube_Extension_Age',
      8 => 'Zend_Gdata_YouTube_Extension_Username',
      9 => 'Zend_Gdata_YouTube_Extension_Books',
      10 => 'Zend_Gdata_YouTube_Extension_Company',
      11 => 'Zend_Gdata_YouTube_Extension_Hobbies',
      12 => 'Zend_Gdata_YouTube_Extension_Hometown',
      13 => 'Zend_Gdata_YouTube_Extension_Location',
      14 => 'Zend_Gdata_YouTube_Extension_Movies',
      15 => 'Zend_Gdata_YouTube_Extension_Music',
      16 => 'Zend_Gdata_YouTube_Extension_Occupation',
      17 => 'Zend_Gdata_YouTube_Extension_School',
      18 => 'Zend_Gdata_YouTube_Extension_Gender',
      19 => 'Zend_Gdata_YouTube_Extension_Relationship',
      20 => 'Zend_Gdata_MediaMimeStream',
      21 => 'Zend_Gdata_App_MediaSource',
      22 => 'Zend_Gdata_App_MediaEntry',
      23 => 'Zend_Gdata_App_Entry',
      24 => 'Zend_Gdata_App_Exception',
      25 => 'Zend_Gdata_App_Extension_Content',
      26 => 'Zend_Gdata_App_Extension_Published',
      27 => 'Zend_Gdata_App_Extension_Source',
      28 => 'Zend_Gdata_App_Extension_Summary',
      29 => 'Zend_Gdata_App_Extension_Control',
      30 => 'Zend_Http_Client',
      31 => 'Zend_Gdata_App_FeedEntryParent',
      32 => 'Zend_Gdata_App',
      33 => 'Zend_Gdata_App_Extension_Author',
      34 => 'Zend_Gdata_App_Extension_Id',
      35 => 'Zend_Gdata_App_Extension_Link',
      36 => 'Zend_Gdata_App_Extension_Rights',
      37 => 'Zend_Gdata_App_Extension_Title',
      38 => 'Zend_Gdata_App_Extension_Updated',
      39 => 'Zend_Gdata_App_InvalidArgumentException',
      40 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_VideoEntry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_YouTube_MediaEntry',
      1 => 'Zend_Gdata_YouTube_Extension_Recorded',
      2 => 'Zend_Gdata_YouTube_Extension_Location',
      3 => 'Zend_Gdata_YouTube_Extension_NoEmbed',
      4 => 'Zend_Gdata_YouTube_Extension_Statistics',
      5 => 'Zend_Gdata_YouTube_Extension_Racy',
      6 => 'Zend_Gdata_App_VersionException',
      7 => 'Zend_Gdata_Extension_Rating',
      8 => 'Zend_Gdata_Extension_Comments',
      9 => 'Zend_Gdata_App_Extension_Link',
      10 => 'Zend_Gdata_Geo_Extension_GeoRssWhere',
      11 => 'Zend_Gdata_YouTube_Extension_State',
      12 => 'Zend_Gdata_Media_Extension_MediaGroup',
      13 => 'Zend_Gdata_Media_Entry',
      14 => 'Zend_Gdata_MediaMimeStream',
      15 => 'Zend_Gdata_App_MediaSource',
      16 => 'Zend_Gdata_App_MediaEntry',
      17 => 'Zend_Gdata_App_Entry',
      18 => 'Zend_Gdata_App_Exception',
      19 => 'Zend_Gdata_App_Extension_Content',
      20 => 'Zend_Gdata_App_Extension_Published',
      21 => 'Zend_Gdata_App_Extension_Source',
      22 => 'Zend_Gdata_App_Extension_Summary',
      23 => 'Zend_Gdata_App_Extension_Control',
      24 => 'Zend_Http_Client',
      25 => 'Zend_Gdata_App_FeedEntryParent',
      26 => 'Zend_Gdata_App',
      27 => 'Zend_Gdata_App_Extension_Author',
      28 => 'Zend_Gdata_App_Extension_Id',
      29 => 'Zend_Gdata_App_Extension_Rights',
      30 => 'Zend_Gdata_App_Extension_Title',
      31 => 'Zend_Gdata_App_Extension_Updated',
      32 => 'Zend_Gdata_App_InvalidArgumentException',
      33 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_VideoFeed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Media_Feed',
      1 => 'Zend_Gdata_Extension_OpenSearchTotalResults',
      2 => 'Zend_Gdata_Feed',
      3 => 'Zend_Gdata_Extension_OpenSearchStartIndex',
      4 => 'Zend_Gdata_Extension_OpenSearchItemsPerPage',
      5 => 'Zend_Gdata_App_Feed',
      6 => 'Zend_Gdata_App_Entry',
      7 => 'Zend_Gdata_App_Exception',
      8 => 'Zend_Gdata_App_InvalidArgumentException',
      9 => 'Zend_Http_Client',
      10 => 'Zend_Gdata_App_FeedSourceParent',
      11 => 'Zend_Gdata_App',
      12 => 'Zend_Gdata_App_FeedEntryParent',
      13 => 'Zend_Gdata_App_Extension_Generator',
      14 => 'Zend_Gdata_App_Extension_Icon',
      15 => 'Zend_Gdata_App_Extension_Logo',
      16 => 'Zend_Gdata_App_Extension_Subtitle',
      17 => 'Zend_Gdata_App_Extension_Author',
      18 => 'Zend_Gdata_App_Extension_Id',
      19 => 'Zend_Gdata_App_Extension_Link',
      20 => 'Zend_Gdata_App_Extension_Rights',
      21 => 'Zend_Gdata_App_Extension_Title',
      22 => 'Zend_Gdata_App_Extension_Updated',
      23 => 'Zend_Gdata_App_Base',
    ),
  ),
  'Zend_Gdata_YouTube_VideoQuery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Gdata_Query',
      1 => 'Zend_Gdata_App_InvalidArgumentException',
      2 => 'Zend_Gdata_App_VersionException',
    ),
  ),
  'Zend_Http_Client' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client_Exception',
      1 => 'Zend_Uri_Http',
      2 => 'Zend_Config',
      3 => 'Zend_Http_CookieJar',
      4 => 'Zend_Http_Cookie',
      5 => 'Zend_Http_Response',
      6 => 'Zend_Http_Client_Adapter_Interface',
    ),
  ),
  'Zend_Http_Client_Adapter_Curl' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client_Adapter_Interface',
      1 => 'Zend_Http_Client_Adapter_Stream',
      2 => 'Zend_Http_Client_Adapter_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Uri_Http',
      5 => 'Zend_Http_Client_Adapter_Socket',
    ),
  ),
  'Zend_Http_Client_Adapter_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client_Exception',
    ),
  ),
  'Zend_Http_Client_Adapter_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Uri_Http',
    ),
  ),
  'Zend_Http_Client_Adapter_Proxy' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client_Adapter_Socket',
      1 => 'Zend_Http_Client_Adapter_Stream',
      2 => 'Zend_Http_Client_Adapter_Interface',
      3 => 'Zend_Uri_Http',
      4 => 'Zend_Config',
      5 => 'Zend_Http_Client_Adapter_Exception',
    ),
  ),
  'Zend_Http_Client_Adapter_Socket' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client_Adapter_Interface',
      1 => 'Zend_Http_Client_Adapter_Stream',
      2 => 'Zend_Config',
      3 => 'Zend_Uri_Http',
      4 => 'Zend_Http_Client_Adapter_Exception',
    ),
  ),
  'Zend_Http_Client_Adapter_Stream' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Http_Client_Adapter_Test' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client_Adapter_Interface',
      1 => 'Zend_Config',
      2 => 'Zend_Http_Client_Adapter_Exception',
      3 => 'Zend_Uri_Http',
      4 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Http_Client_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Exception',
    ),
  ),
  'Zend_Http_Cookie' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Uri_Http',
    ),
  ),
  'Zend_Http_CookieJar' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Cookie',
      1 => 'Zend_Uri_Http',
      2 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Http_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Http_Response' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Exception',
    ),
  ),
  'Zend_Http_Response_Stream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Response',
      1 => 'Zend_Http_Exception',
    ),
  ),
  'Zend_Http_UserAgent' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Loader_PluginLoader_Exception',
      2 => 'Zend_Http_UserAgent_Storage',
      3 => 'Zend_Http_UserAgent_Device',
      4 => 'Zend_Http_UserAgent_Exception',
      5 => 'Zend_Loader_PluginLoader',
    ),
  ),
  'Zend_Http_UserAgent_AbstractDevice' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Device',
    ),
  ),
  'Zend_Http_UserAgent_Bot' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_AbstractDevice',
      1 => 'Zend_Http_UserAgent_Device',
    ),
  ),
  'Zend_Http_UserAgent_Checker' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Desktop',
      1 => 'Zend_Http_UserAgent_Device',
      2 => 'Zend_Http_UserAgent_AbstractDevice',
    ),
  ),
  'Zend_Http_UserAgent_Console' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Desktop',
      1 => 'Zend_Http_UserAgent_Device',
      2 => 'Zend_Http_UserAgent_AbstractDevice',
    ),
  ),
  'Zend_Http_UserAgent_Desktop' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_AbstractDevice',
      1 => 'Zend_Http_UserAgent_Device',
    ),
  ),
  'Zend_Http_UserAgent_Device' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Http_UserAgent_Email' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Desktop',
      1 => 'Zend_Http_UserAgent_Device',
      2 => 'Zend_Http_UserAgent_AbstractDevice',
    ),
  ),
  'Zend_Http_UserAgent_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Http_UserAgent_Features_Adapter' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Http_UserAgent_Features_Adapter_DeviceAtlas' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Features_Adapter',
    ),
  ),
  'Zend_Http_UserAgent_Features_Adapter_TeraWurfl' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Features_Adapter',
    ),
  ),
  'Zend_Http_UserAgent_Features_Adapter_WurflApi' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Features_Adapter',
    ),
  ),
  'Zend_Http_UserAgent_Features_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Exception',
    ),
  ),
  'Zend_Http_UserAgent_Feed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_AbstractDevice',
      1 => 'Zend_Http_UserAgent_Device',
    ),
  ),
  'Zend_Http_UserAgent_Mobile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_AbstractDevice',
      1 => 'Zend_Http_UserAgent_Device',
    ),
  ),
  'Zend_Http_UserAgent_Offline' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Desktop',
      1 => 'Zend_Http_UserAgent_Device',
      2 => 'Zend_Http_UserAgent_AbstractDevice',
    ),
  ),
  'Zend_Http_UserAgent_Probe' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_AbstractDevice',
      1 => 'Zend_Http_UserAgent_Device',
    ),
  ),
  'Zend_Http_UserAgent_Spam' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_AbstractDevice',
      1 => 'Zend_Http_UserAgent_Device',
    ),
  ),
  'Zend_Http_UserAgent_Storage' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Storage_Exception',
    ),
  ),
  'Zend_Http_UserAgent_Storage_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Exception',
    ),
  ),
  'Zend_Http_UserAgent_Storage_NonPersistent' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Storage',
      1 => 'Zend_Http_UserAgent_Storage_Exception',
    ),
  ),
  'Zend_Http_UserAgent_Storage_Session' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Storage',
      1 => 'Zend_Http_UserAgent_Storage_Exception',
    ),
  ),
  'Zend_Http_UserAgent_Text' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_AbstractDevice',
      1 => 'Zend_Http_UserAgent_Device',
    ),
  ),
  'Zend_Http_UserAgent_Validator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_UserAgent_Desktop',
      1 => 'Zend_Http_UserAgent_Device',
      2 => 'Zend_Http_UserAgent_AbstractDevice',
    ),
  ),
  'Zend_InfoCard' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Exception',
      1 => 'Zend_InfoCard_Adapter_Interface',
      2 => 'Zend_InfoCard_Cipher_Pki_Interface',
      3 => 'Zend_InfoCard_Cipher_Symmetric_Interface',
      4 => 'Zend_InfoCard_Claims',
    ),
  ),
  'Zend_InfoCard_Adapter_Default' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Adapter_Interface',
    ),
  ),
  'Zend_InfoCard_Adapter_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Exception',
    ),
  ),
  'Zend_InfoCard_Adapter_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_InfoCard_Cipher' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Cipher_Exception',
    ),
  ),
  'Zend_InfoCard_Cipher_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Exception',
    ),
  ),
  'Zend_InfoCard_Cipher_Pki_Adapter_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Cipher_Pki_Interface',
      1 => 'Zend_InfoCard_Cipher_Exception',
    ),
  ),
  'Zend_InfoCard_Cipher_Pki_Adapter_Rsa' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Cipher_Pki_Adapter_Abstract',
      1 => 'Zend_InfoCard_Cipher_Pki_Interface',
      2 => 'Zend_InfoCard_Cipher_Pki_Rsa_Interface',
      3 => 'Zend_InfoCard_Cipher_Exception',
    ),
  ),
  'Zend_InfoCard_Cipher_Pki_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_InfoCard_Cipher_Pki_Rsa_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Cipher_Exception',
    ),
  ),
  'Zend_InfoCard_Cipher_Symmetric_Adapter_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Cipher_Symmetric_Interface',
    ),
  ),
  'Zend_InfoCard_Cipher_Symmetric_Adapter_Aes128cbc' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Cipher_Symmetric_Adapter_Aes256cbc',
      1 => 'Zend_InfoCard_Cipher_Symmetric_Aes256cbc_Interface',
      2 => 'Zend_InfoCard_Cipher_Symmetric_Interface',
      3 => 'Zend_InfoCard_Cipher_Exception',
    ),
  ),
  'Zend_InfoCard_Cipher_Symmetric_Adapter_Aes256cbc' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Cipher_Symmetric_Adapter_Abstract',
      1 => 'Zend_InfoCard_Cipher_Symmetric_Interface',
      2 => 'Zend_InfoCard_Cipher_Symmetric_Aes256cbc_Interface',
      3 => 'Zend_InfoCard_Cipher_Exception',
    ),
  ),
  'Zend_InfoCard_Cipher_Symmetric_Aes128cbc_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Cipher_Symmetric_Aes256cbc_Interface',
    ),
  ),
  'Zend_InfoCard_Cipher_Symmetric_Aes256cbc_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_InfoCard_Cipher_Symmetric_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_InfoCard_Claims' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Exception',
    ),
  ),
  'Zend_InfoCard_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Exception_Abstract',
    ),
  ),
  'Zend_InfoCard_Exception_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_Assertion' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Exception',
      1 => 'Zend_InfoCard_Xml_Assertion_Interface',
    ),
  ),
  'Zend_InfoCard_Xml_Assertion_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_InfoCard_Xml_Assertion_Saml' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Element',
      1 => 'Zend_InfoCard_Xml_Element_Interface',
      2 => 'Zend_InfoCard_Xml_Assertion_Interface',
      3 => 'Zend_InfoCard_Xml_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_Element' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Element_Interface',
      1 => 'Zend_InfoCard_Xml_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_Element_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_InfoCard_Xml_EncryptedData' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_EncryptedData_Abstract',
      1 => 'Zend_InfoCard_Xml_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_EncryptedData_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Element',
      1 => 'Zend_InfoCard_Xml_Element_Interface',
      2 => 'Zend_InfoCard_Xml_KeyInfo_Abstract',
      3 => 'Zend_InfoCard_Xml_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_EncryptedData_XmlEnc' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_EncryptedData_Abstract',
      1 => 'Zend_InfoCard_Xml_Element_Interface',
      2 => 'Zend_InfoCard_Xml_Exception',
      3 => 'Zend_InfoCard_Xml_KeyInfo_Abstract',
      4 => 'Zend_InfoCard_Xml_Element',
    ),
  ),
  'Zend_InfoCard_Xml_EncryptedKey' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Element',
      1 => 'Zend_InfoCard_Xml_Element_Interface',
      2 => 'Zend_InfoCard_Xml_KeyInfo_Interface',
      3 => 'Zend_InfoCard_Xml_Exception',
      4 => 'Zend_InfoCard_Xml_KeyInfo_Abstract',
    ),
  ),
  'Zend_InfoCard_Xml_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_KeyInfo' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_KeyInfo_Abstract',
      1 => 'Zend_InfoCard_Xml_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_KeyInfo_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Element',
      1 => 'Zend_InfoCard_Xml_Element_Interface',
      2 => 'Zend_InfoCard_Xml_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_KeyInfo_Default' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_KeyInfo_Abstract',
      1 => 'Zend_InfoCard_Xml_Element_Interface',
      2 => 'Zend_InfoCard_Xml_Exception',
      3 => 'Zend_InfoCard_Xml_SecurityTokenReference',
      4 => 'Zend_InfoCard_Xml_Element',
    ),
  ),
  'Zend_InfoCard_Xml_KeyInfo_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_KeyInfo',
    ),
  ),
  'Zend_InfoCard_Xml_KeyInfo_XmlDSig' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_KeyInfo_Abstract',
      1 => 'Zend_InfoCard_Xml_Element_Interface',
      2 => 'Zend_InfoCard_Xml_KeyInfo_Interface',
      3 => 'Zend_InfoCard_Xml_Exception',
      4 => 'Zend_InfoCard_Xml_EncryptedKey',
      5 => 'Zend_InfoCard_Xml_KeyInfo_Default',
      6 => 'Zend_InfoCard_Xml_Element',
    ),
  ),
  'Zend_InfoCard_Xml_Security' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Security_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_SecurityTokenReference' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Element',
      1 => 'Zend_InfoCard_Xml_Element_Interface',
      2 => 'Zend_InfoCard_Xml_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_Security_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_Security_Transform' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Security_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_Security_Transform_EnvelopedSignature' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Security_Transform_Interface',
      1 => 'Zend_InfoCard_Xml_Security_Transform_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_Security_Transform_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Security_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_Security_Transform_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Security_Transform_Exception',
    ),
  ),
  'Zend_InfoCard_Xml_Security_Transform_XmlExcC14N' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_InfoCard_Xml_Security_Transform_Interface',
      1 => 'Zend_InfoCard_Xml_Security_Transform_Exception',
    ),
  ),
  'Zend_Json' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Json_Expr',
      1 => 'Zend_Json_Exception',
    ),
  ),
  'Zend_Json_Decoder' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Json_Exception',
    ),
  ),
  'Zend_Json_Encoder' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Json_Exception',
    ),
  ),
  'Zend_Json_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Json_Expr' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Json_Server' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Abstract',
      1 => 'Zend_Server_Interface',
      2 => 'Zend_Json_Server_Request',
      3 => 'Zend_Json_Server_Response',
      4 => 'Zend_Server_Definition',
      5 => 'Zend_Json_Server_Smd',
      6 => 'Zend_Server_Reflection_Function',
      7 => 'Zend_Server_Reflection_Function_Abstract',
      8 => 'Zend_Server_Method_Callback',
      9 => 'Zend_Server_Method_Definition',
      10 => 'Zend_Server_Exception',
    ),
  ),
  'Zend_Json_Server_Cache' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Cache',
      1 => 'Zend_Json_Server',
      2 => 'Zend_Server_Interface',
    ),
  ),
  'Zend_Json_Server_Error' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Json_Server_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Json_Exception',
    ),
  ),
  'Zend_Json_Server_Request' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Json_Server_Request_Http' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Json_Server_Request',
    ),
  ),
  'Zend_Json_Server_Response' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Json_Server_Error',
      1 => 'Zend_Json_Server_Smd',
    ),
  ),
  'Zend_Json_Server_Response_Http' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Json_Server_Response',
      1 => 'Zend_Json_Server_Error',
      2 => 'Zend_Json_Server_Smd',
    ),
  ),
  'Zend_Json_Server_Smd' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Json_Server_Smd_Service',
    ),
  ),
  'Zend_Json_Server_Smd_Service' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Json_Server_Exception',
    ),
  ),
  'Zend_Layout' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_View_Helper_Placeholder_Container',
      2 => 'Zend_View_Interface',
      3 => 'Zend_Filter_Inflector',
      4 => 'Zend_Layout_Exception',
    ),
  ),
  'Zend_Layout_Controller_Action_Helper_Layout' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action_Helper_Abstract',
      1 => 'Zend_Layout',
      2 => 'Zend_Controller_Front',
      3 => 'Zend_Controller_Action',
      4 => 'Zend_Controller_Request_Abstract',
      5 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Layout_Controller_Plugin_Layout' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Layout',
      2 => 'Zend_Layout_Controller_Action_Helper_Layout',
      3 => 'Zend_Controller_Request_Abstract',
      4 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Layout_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Ldap' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Ldap_Exception',
      2 => 'Zend_Ldap_Filter_Abstract',
      3 => 'Zend_Ldap_Dn',
      4 => 'Zend_Ldap_Collection',
      5 => 'Zend_Ldap_Collection_Iterator_Default',
      6 => 'Zend_Ldap_Node',
      7 => 'Zend_Ldap_Node_RootDse',
      8 => 'Zend_Ldap_Node_Schema',
    ),
  ),
  'Zend_Ldap_Attribute' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Ldap_Collection' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Collection_Iterator_Default',
      1 => 'Zend_Ldap_Exception',
    ),
  ),
  'Zend_Ldap_Collection_Iterator_Default' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap',
      1 => 'Zend_Ldap_Exception',
    ),
  ),
  'Zend_Ldap_Converter' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Converter_Exception',
      1 => 'Zend_Date',
    ),
  ),
  'Zend_Ldap_Converter_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Ldap_Dn' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Exception',
    ),
  ),
  'Zend_Ldap_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
      1 => 'Zend_Ldap',
    ),
  ),
  'Zend_Ldap_Filter' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Filter_String',
      1 => 'Zend_Ldap_Filter_Mask',
      2 => 'Zend_Ldap_Filter_Abstract',
      3 => 'Zend_Ldap_Filter_And',
      4 => 'Zend_Ldap_Filter_Or',
    ),
  ),
  'Zend_Ldap_Filter_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Filter_And',
      1 => 'Zend_Ldap_Filter_Or',
    ),
  ),
  'Zend_Ldap_Filter_And' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Filter_Logical',
      1 => 'Zend_Ldap_Filter_Abstract',
      2 => 'Zend_Ldap_Filter_Or',
    ),
  ),
  'Zend_Ldap_Filter_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Ldap_Filter_Logical' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Filter_Abstract',
      1 => 'Zend_Ldap_Filter_And',
      2 => 'Zend_Ldap_Filter_Or',
    ),
  ),
  'Zend_Ldap_Filter_Mask' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Filter_String',
      1 => 'Zend_Ldap_Filter_Abstract',
      2 => 'Zend_Ldap_Filter_And',
      3 => 'Zend_Ldap_Filter_Or',
    ),
  ),
  'Zend_Ldap_Filter_Not' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Filter_Abstract',
      1 => 'Zend_Ldap_Filter_And',
      2 => 'Zend_Ldap_Filter_Or',
    ),
  ),
  'Zend_Ldap_Filter_Or' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Filter_Logical',
      1 => 'Zend_Ldap_Filter_Abstract',
      2 => 'Zend_Ldap_Filter_And',
    ),
  ),
  'Zend_Ldap_Filter_String' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Filter_Abstract',
      1 => 'Zend_Ldap_Filter_And',
      2 => 'Zend_Ldap_Filter_Or',
    ),
  ),
  'Zend_Ldap_Ldif_Encoder' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Ldap_Node' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_Abstract',
      1 => 'Zend_Ldap_Dn',
      2 => 'Zend_Ldap',
      3 => 'Zend_Ldap_Exception',
      4 => 'Zend_Ldap_Filter_Abstract',
      5 => 'Zend_Ldap_Node_Collection',
      6 => 'Zend_Ldap_Node_ChildrenIterator',
    ),
  ),
  'Zend_Ldap_Node_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Dn',
      1 => 'Zend_Ldap_Exception',
      2 => 'Zend_Ldap',
    ),
  ),
  'Zend_Ldap_Node_ChildrenIterator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node',
    ),
  ),
  'Zend_Ldap_Node_Collection' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Collection',
      1 => 'Zend_Ldap_Node',
      2 => 'Zend_Ldap_Collection_Iterator_Default',
      3 => 'Zend_Ldap_Exception',
    ),
  ),
  'Zend_Ldap_Node_RootDse' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_Abstract',
      1 => 'Zend_Ldap',
      2 => 'Zend_Ldap_Exception',
      3 => 'Zend_Ldap_Dn',
    ),
  ),
  'Zend_Ldap_Node_RootDse_ActiveDirectory' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_RootDse',
      1 => 'Zend_Ldap_Dn',
      2 => 'Zend_Ldap',
      3 => 'Zend_Ldap_Exception',
      4 => 'Zend_Ldap_Node_Abstract',
    ),
  ),
  'Zend_Ldap_Node_RootDse_OpenLdap' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_RootDse',
      1 => 'Zend_Ldap',
      2 => 'Zend_Ldap_Exception',
      3 => 'Zend_Ldap_Dn',
      4 => 'Zend_Ldap_Node_Abstract',
    ),
  ),
  'Zend_Ldap_Node_RootDse_eDirectory' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_RootDse',
      1 => 'Zend_Ldap',
      2 => 'Zend_Ldap_Exception',
      3 => 'Zend_Ldap_Dn',
      4 => 'Zend_Ldap_Node_Abstract',
    ),
  ),
  'Zend_Ldap_Node_Schema' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_Abstract',
      1 => 'Zend_Ldap',
      2 => 'Zend_Ldap_Exception',
      3 => 'Zend_Ldap_Dn',
    ),
  ),
  'Zend_Ldap_Node_Schema_ActiveDirectory' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_Schema',
      1 => 'Zend_Ldap_Dn',
      2 => 'Zend_Ldap',
      3 => 'Zend_Ldap_Exception',
      4 => 'Zend_Ldap_Node_Abstract',
    ),
  ),
  'Zend_Ldap_Node_Schema_AttributeType_ActiveDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_Schema_Item',
      1 => 'Zend_Ldap_Node_Schema_AttributeType_Interface',
    ),
  ),
  'Zend_Ldap_Node_Schema_AttributeType_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Ldap_Node_Schema_AttributeType_OpenLdap' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_Schema_Item',
      1 => 'Zend_Ldap_Node_Schema_AttributeType_Interface',
    ),
  ),
  'Zend_Ldap_Node_Schema_Item' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Ldap_Node_Schema_ObjectClass_ActiveDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_Schema_Item',
      1 => 'Zend_Ldap_Node_Schema_ObjectClass_Interface',
    ),
  ),
  'Zend_Ldap_Node_Schema_ObjectClass_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Ldap_Node_Schema_ObjectClass_OpenLdap' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_Schema_Item',
      1 => 'Zend_Ldap_Node_Schema_ObjectClass_Interface',
    ),
  ),
  'Zend_Ldap_Node_Schema_OpenLdap' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Ldap_Node_Schema',
      1 => 'Zend_Ldap_Dn',
      2 => 'Zend_Ldap',
      3 => 'Zend_Ldap_Node_Schema_Item',
      4 => 'Zend_Ldap_Exception',
      5 => 'Zend_Ldap_Node_Abstract',
    ),
  ),
  'Zend_Loader' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Loader_Autoloader' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_Exception',
    ),
  ),
  'Zend_Loader_Autoloader_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Loader_Autoloader_Resource' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_Autoloader_Interface',
      1 => 'Zend_Config',
      2 => 'Zend_Loader_Exception',
    ),
  ),
  'Zend_Loader_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Loader_PluginLoader' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_PluginLoader_Interface',
      1 => 'Zend_Loader_Exception',
      2 => 'Zend_Loader_PluginLoader_Exception',
    ),
  ),
  'Zend_Loader_PluginLoader_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_Exception',
    ),
  ),
  'Zend_Loader_PluginLoader_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_PluginLoader',
    ),
  ),
  'Zend_Locale' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Locale_Exception',
      1 => 'Zend_Cache_Core',
    ),
  ),
  'Zend_Locale_Data' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Locale_Exception',
      1 => 'Zend_Locale',
      2 => 'Zend_Cache_Core',
      3 => 'Zend_Cache',
    ),
  ),
  'Zend_Locale_Data_Translation' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Locale_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Locale_Format' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Locale_Exception',
      1 => 'Zend_Locale',
    ),
  ),
  'Zend_Locale_Math' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Locale_Math_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Locale_Exception',
    ),
  ),
  'Zend_Locale_Math_PhpMath' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Locale_Math',
    ),
  ),
  'Zend_Log' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Writer_Abstract',
      1 => 'Zend_Config',
      2 => 'Zend_Log_Exception',
      3 => 'Zend_Log_Filter_Interface',
      4 => 'Zend_Log_Formatter_Interface',
    ),
  ),
  'Zend_Log_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Log_FactoryInterface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
    ),
  ),
  'Zend_Log_Filter_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Filter_Interface',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Log_Exception',
    ),
  ),
  'Zend_Log_Filter_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Log_Filter_Message' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Filter_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Log_Filter_Interface',
      3 => 'Zend_Log_Exception',
      4 => 'Zend_Config',
    ),
  ),
  'Zend_Log_Filter_Priority' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Filter_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Log_Filter_Interface',
      3 => 'Zend_Log_Exception',
      4 => 'Zend_Config',
    ),
  ),
  'Zend_Log_Filter_Suppress' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Filter_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Log_Filter_Interface',
      3 => 'Zend_Config',
      4 => 'Zend_Log_Exception',
    ),
  ),
  'Zend_Log_Formatter_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Formatter_Interface',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Config',
    ),
  ),
  'Zend_Log_Formatter_Firebug' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Formatter_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Log_Formatter_Interface',
      3 => 'Zend_Config',
    ),
  ),
  'Zend_Log_Formatter_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Log_Formatter_Simple' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Formatter_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Log_Formatter_Interface',
      3 => 'Zend_Log_Exception',
      4 => 'Zend_Config',
    ),
  ),
  'Zend_Log_Formatter_Xml' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Formatter_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Log_Formatter_Interface',
      3 => 'Zend_Config',
    ),
  ),
  'Zend_Log_Writer_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Log_FactoryInterface',
      1 => 'Zend_Log_Filter_Interface',
      2 => 'Zend_Log_Formatter_Interface',
      3 => 'Zend_Config',
      4 => 'Zend_Log_Exception',
    ),
  ),
  'Zend_Log_Writer_Db' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Writer_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Log_Exception',
      4 => 'Zend_Log_Filter_Interface',
    ),
  ),
  'Zend_Log_Writer_Firebug' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Writer_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Log_Filter_Interface',
      4 => 'Zend_Log_Formatter_Interface',
      5 => 'Zend_Log_Exception',
    ),
  ),
  'Zend_Log_Writer_Mail' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Writer_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Mail',
      3 => 'Zend_Layout',
      4 => 'Zend_Config',
      5 => 'Zend_Log_Exception',
      6 => 'Zend_Log_Formatter_Interface',
      7 => 'Zend_Log_Filter_Interface',
    ),
  ),
  'Zend_Log_Writer_Mock' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Writer_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Log_Filter_Interface',
      4 => 'Zend_Log_Formatter_Interface',
      5 => 'Zend_Log_Exception',
    ),
  ),
  'Zend_Log_Writer_Null' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Writer_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Log_Filter_Interface',
      4 => 'Zend_Log_Formatter_Interface',
      5 => 'Zend_Log_Exception',
    ),
  ),
  'Zend_Log_Writer_Stream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Writer_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Log_Exception',
      3 => 'Zend_Config',
      4 => 'Zend_Log_Filter_Interface',
      5 => 'Zend_Log_Formatter_Interface',
    ),
  ),
  'Zend_Log_Writer_Syslog' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Writer_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Log_Exception',
      4 => 'Zend_Log_Filter_Interface',
      5 => 'Zend_Log_Formatter_Interface',
    ),
  ),
  'Zend_Log_Writer_ZendMonitor' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Log_Writer_Abstract',
      1 => 'Zend_Log_FactoryInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Log_Filter_Interface',
      4 => 'Zend_Log_Formatter_Interface',
      5 => 'Zend_Log_Exception',
    ),
  ),
  'Zend_Mail' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mime_Message',
      1 => 'Zend_Mail_Transport_Abstract',
      2 => 'Zend_Mail_Exception',
      3 => 'Zend_Mime_Part',
      4 => 'Zend_Date',
      5 => 'Zend_Mime',
    ),
  ),
  'Zend_Mail_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Mail_Message' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Part',
      1 => 'Zend_Mail_Part_Interface',
      2 => 'Zend_Mail_Message_Interface',
      3 => 'Zend_Mail_Exception',
    ),
  ),
  'Zend_Mail_Message_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Part_File',
      1 => 'Zend_Mail_Part_Interface',
      2 => 'Zend_Mail_Message_Interface',
      3 => 'Zend_Mail_Exception',
      4 => 'Zend_Mail_Part',
    ),
  ),
  'Zend_Mail_Message_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Mail_Part' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Part_Interface',
      1 => 'Zend_Mail_Exception',
    ),
  ),
  'Zend_Mail_Part_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Part',
      1 => 'Zend_Mail_Part_Interface',
      2 => 'Zend_Mail_Exception',
    ),
  ),
  'Zend_Mail_Part_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Exception',
      1 => 'Zend_Mail_Part',
    ),
  ),
  'Zend_Mail_Protocol_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Protocol_Exception',
    ),
  ),
  'Zend_Mail_Protocol_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Exception',
    ),
  ),
  'Zend_Mail_Protocol_Imap' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Protocol_Exception',
    ),
  ),
  'Zend_Mail_Protocol_Pop3' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Protocol_Exception',
    ),
  ),
  'Zend_Mail_Protocol_Smtp' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Protocol_Abstract',
      1 => 'Zend_Mail_Protocol_Exception',
    ),
  ),
  'Zend_Mail_Protocol_Smtp_Auth_Crammd5' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Protocol_Smtp',
      1 => 'Zend_Mail_Protocol_Exception',
    ),
  ),
  'Zend_Mail_Protocol_Smtp_Auth_Login' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Protocol_Smtp',
      1 => 'Zend_Mail_Protocol_Exception',
    ),
  ),
  'Zend_Mail_Protocol_Smtp_Auth_Plain' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Protocol_Smtp',
      1 => 'Zend_Mail_Protocol_Exception',
    ),
  ),
  'Zend_Mail_Storage' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Mail_Storage_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Storage_Exception',
      1 => 'Zend_Mail_Message',
    ),
  ),
  'Zend_Mail_Storage_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Exception',
    ),
  ),
  'Zend_Mail_Storage_Folder' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Storage_Exception',
    ),
  ),
  'Zend_Mail_Storage_Folder_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Storage_Folder',
      1 => 'Zend_Mail_Storage_Exception',
    ),
  ),
  'Zend_Mail_Storage_Folder_Maildir' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Storage_Maildir',
      1 => 'Zend_Mail_Storage_Folder_Interface',
      2 => 'Zend_Mail_Storage_Exception',
      3 => 'Zend_Mail_Storage_Folder',
      4 => 'Zend_Mail_Message_File',
      5 => 'Zend_Mail_Message',
    ),
  ),
  'Zend_Mail_Storage_Folder_Mbox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Storage_Mbox',
      1 => 'Zend_Mail_Storage_Folder_Interface',
      2 => 'Zend_Mail_Storage_Exception',
      3 => 'Zend_Mail_Storage_Folder',
      4 => 'Zend_Mail_Message_File',
      5 => 'Zend_Mail_Message',
    ),
  ),
  'Zend_Mail_Storage_Imap' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Storage_Abstract',
      1 => 'Zend_Mail_Storage_Folder_Interface',
      2 => 'Zend_Mail_Storage_Writable_Interface',
      3 => 'Zend_Mail_Storage_Exception',
      4 => 'Zend_Mail_Protocol_Exception',
      5 => 'Zend_Mail_Message',
      6 => 'Zend_Mail_Storage_Folder',
    ),
  ),
  'Zend_Mail_Storage_Maildir' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Storage_Abstract',
      1 => 'Zend_Mail_Storage_Exception',
      2 => 'Zend_Mail_Message_File',
      3 => 'Zend_Mail_Message',
    ),
  ),
  'Zend_Mail_Storage_Mbox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Storage_Abstract',
      1 => 'Zend_Mail_Storage_Exception',
      2 => 'Zend_Mail_Message_File',
      3 => 'Zend_Mail_Message',
    ),
  ),
  'Zend_Mail_Storage_Pop3' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Storage_Abstract',
      1 => 'Zend_Mail_Storage_Exception',
      2 => 'Zend_Mail_Protocol_Exception',
      3 => 'Zend_Mail_Message',
    ),
  ),
  'Zend_Mail_Storage_Writable_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Storage_Folder',
      1 => 'Zend_Mail_Storage_Exception',
      2 => 'Zend_Mail_Message',
      3 => 'Zend_Mime_Message',
    ),
  ),
  'Zend_Mail_Storage_Writable_Maildir' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Storage_Folder_Maildir',
      1 => 'Zend_Mail_Storage_Folder_Interface',
      2 => 'Zend_Mail_Storage_Writable_Interface',
      3 => 'Zend_Mail_Storage_Exception',
      4 => 'Zend_Mail_Storage_Folder',
      5 => 'Zend_Mail_Message_File',
      6 => 'Zend_Mail_Message',
    ),
  ),
  'Zend_Mail_Transport_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Transport_Exception',
      1 => 'Zend_Mail',
    ),
  ),
  'Zend_Mail_Transport_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Exception',
    ),
  ),
  'Zend_Mail_Transport_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Transport_Abstract',
      1 => 'Zend_Config',
      2 => 'Zend_Mail_Transport_Exception',
      3 => 'Zend_Mail',
    ),
  ),
  'Zend_Mail_Transport_Sendmail' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Transport_Abstract',
      1 => 'Zend_Config',
      2 => 'Zend_Mail_Transport_Exception',
      3 => 'Zend_Mail',
    ),
  ),
  'Zend_Mail_Transport_Smtp' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mail_Transport_Abstract',
      1 => 'Zend_Mail_Protocol_Abstract',
      2 => 'Zend_Mail',
      3 => 'Zend_Mail_Transport_Exception',
    ),
  ),
  'Zend_Markup' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_PluginLoader',
      1 => 'Zend_Markup_Renderer_RendererAbstract',
    ),
  ),
  'Zend_Markup_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Markup_Parser_Bbcode' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Parser_ParserInterface',
      1 => 'Zend_Markup_TokenList',
      2 => 'Zend_Markup_Token',
    ),
  ),
  'Zend_Markup_Parser_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Exception',
    ),
  ),
  'Zend_Markup_Parser_ParserInterface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Markup_Parser_Textile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Parser_ParserInterface',
      1 => 'Zend_Markup_Token',
    ),
  ),
  'Zend_Markup_Renderer_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Exception',
    ),
  ),
  'Zend_Markup_Renderer_Html' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Renderer_RendererAbstract',
      1 => 'Zend_Config',
      2 => 'Zend_Markup_Token',
      3 => 'Zend_Markup_Parser_ParserInterface',
      4 => 'Zend_Loader_PluginLoader',
      5 => 'Zend_Markup_TokenList',
      6 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Markup_Renderer_Html_Code' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Renderer_Html_HtmlAbstract',
      1 => 'Zend_Markup_Renderer_TokenConverterInterface',
      2 => 'Zend_Markup_Token',
      3 => 'Zend_Markup_Renderer_Html',
    ),
  ),
  'Zend_Markup_Renderer_Html_HtmlAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Renderer_TokenConverterInterface',
      1 => 'Zend_Markup_Renderer_Html',
      2 => 'Zend_Markup_Token',
    ),
  ),
  'Zend_Markup_Renderer_Html_Img' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Renderer_Html_HtmlAbstract',
      1 => 'Zend_Markup_Renderer_TokenConverterInterface',
      2 => 'Zend_Markup_Token',
      3 => 'Zend_Markup_Renderer_Html',
    ),
  ),
  'Zend_Markup_Renderer_Html_List' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Renderer_Html_HtmlAbstract',
      1 => 'Zend_Markup_Renderer_TokenConverterInterface',
      2 => 'Zend_Markup_Token',
      3 => 'Zend_Markup_Renderer_Html',
    ),
  ),
  'Zend_Markup_Renderer_Html_Url' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Renderer_Html_HtmlAbstract',
      1 => 'Zend_Markup_Renderer_TokenConverterInterface',
      2 => 'Zend_Markup_Token',
      3 => 'Zend_Markup_Renderer_Html',
    ),
  ),
  'Zend_Markup_Renderer_RendererAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Markup_Parser_ParserInterface',
      2 => 'Zend_Loader_PluginLoader',
      3 => 'Zend_Markup_TokenList',
      4 => 'Zend_Markup_Token',
      5 => 'Zend_Filter_Interface',
    ),
  ),
  'Zend_Markup_Renderer_TokenConverterInterface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Token',
    ),
  ),
  'Zend_Markup_Token' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_TokenList',
    ),
  ),
  'Zend_Markup_TokenList' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Markup_Token',
    ),
  ),
  'Zend_Measure_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Locale',
      1 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Acceleration' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Angle' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Area' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Binary' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Capacitance' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Cooking_Volume' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Cooking_Weight' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Current' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Density' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Energy' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Measure_Flow_Mass' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Flow_Mole' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Flow_Volume' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Force' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Frequency' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Illumination' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Length' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Lightness' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Number' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Power' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Pressure' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Speed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Temperature' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Time' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Torque' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Viscosity_Dynamic' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Viscosity_Kinematic' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Volume' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Measure_Weight' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Measure_Abstract',
      1 => 'Zend_Locale',
      2 => 'Zend_Measure_Exception',
    ),
  ),
  'Zend_Memory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Memory_Manager',
      1 => 'Zend_Memory_Exception',
    ),
  ),
  'Zend_Memory_AccessController' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Memory_Container_Interface',
      1 => 'Zend_Memory_Container_Movable',
      2 => 'Zend_Memory_Exception',
      3 => 'Zend_Exception',
    ),
  ),
  'Zend_Memory_Container' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Memory_Container_Interface',
    ),
  ),
  'Zend_Memory_Container_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Memory_Container_Locked' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Memory_Container',
      1 => 'Zend_Memory_Container_Interface',
      2 => 'Zend_Memory_Manager',
    ),
  ),
  'Zend_Memory_Container_Movable' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Memory_Container',
      1 => 'Zend_Memory_Container_Interface',
      2 => 'Zend_Memory_Manager',
      3 => 'Zend_Memory_Exception',
      4 => 'Zend_Exception',
    ),
  ),
  'Zend_Memory_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Memory_Manager' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Cache_Backend',
      1 => 'Zend_Exception',
      2 => 'Zend_Memory_Container_Interface',
      3 => 'Zend_Memory_Exception',
      4 => 'Zend_Memory_Container',
      5 => 'Zend_Memory_Container_Movable',
    ),
  ),
  'Zend_Memory_Value' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Memory_Container_Movable',
    ),
  ),
  'Zend_Mime' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Mime_Decode' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Mime_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Mime_Message' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mime_Part',
      1 => 'Zend_Mime',
    ),
  ),
  'Zend_Mime_Part' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Mime_Exception',
    ),
  ),
  'Zend_Navigation' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Navigation_Container',
      1 => 'Zend_Config',
      2 => 'Zend_Navigation_Exception',
      3 => 'Zend_Navigation_Page',
    ),
  ),
  'Zend_Navigation_Container' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Navigation_Page',
      1 => 'Zend_Config',
      2 => 'Zend_Navigation_Exception',
    ),
  ),
  'Zend_Navigation_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Navigation_Page' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Navigation_Container',
      1 => 'Zend_Config',
      2 => 'Zend_Navigation_Exception',
      3 => 'Zend_Exception',
      4 => 'Zend_Acl_Resource_Interface',
    ),
  ),
  'Zend_Navigation_Page_Mvc' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Navigation_Page',
      1 => 'Zend_Navigation_Exception',
      2 => 'Zend_Controller_Action_Helper_Url',
      3 => 'Zend_Config',
      4 => 'Zend_Exception',
      5 => 'Zend_Acl_Resource_Interface',
      6 => 'Zend_Navigation_Container',
    ),
  ),
  'Zend_Navigation_Page_Uri' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Navigation_Page',
      1 => 'Zend_Navigation_Exception',
      2 => 'Zend_Config',
      3 => 'Zend_Exception',
      4 => 'Zend_Acl_Resource_Interface',
      5 => 'Zend_Navigation_Container',
    ),
  ),
  'Zend_Oauth' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Oauth_Client' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client',
      1 => 'Zend_Config',
      2 => 'Zend_Http_Client_Adapter_Interface',
      3 => 'Zend_Http_Client_Exception',
      4 => 'Zend_Http_Response',
      5 => 'Zend_Oauth_Exception',
      6 => 'Zend_Uri_Http',
      7 => 'Zend_Http_CookieJar',
      8 => 'Zend_Http_Cookie',
    ),
  ),
  'Zend_Oauth_Config' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Config_ConfigInterface',
      1 => 'Zend_Config',
      2 => 'Zend_Oauth_Exception',
      3 => 'Zend_Crypt_Rsa_Key_Public',
      4 => 'Zend_Crypt_Rsa_Key_Private',
      5 => 'Zend_Oauth_Token',
    ),
  ),
  'Zend_Oauth_Config_ConfigInterface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Oauth_Consumer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth',
      1 => 'Zend_Config',
      2 => 'Zend_Oauth_Http_RequestToken',
      3 => 'Zend_Oauth_Token_Request',
      4 => 'Zend_Oauth_Http_UserAuthorization',
      5 => 'Zend_Oauth_Http_AccessToken',
      6 => 'Zend_Oauth_Token_Access',
      7 => 'Zend_Oauth_Exception',
      8 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Oauth_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Oauth_Http' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Consumer',
      1 => 'Zend_Oauth_Http_Utility',
      2 => 'Zend_Http_Response',
      3 => 'Zend_Oauth_Exception',
      4 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Oauth_Http_AccessToken' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Http',
      1 => 'Zend_Oauth_Token_Access',
      2 => 'Zend_Http_Client',
      3 => 'Zend_Http_Response',
      4 => 'Zend_Oauth_Consumer',
      5 => 'Zend_Oauth_Http_Utility',
      6 => 'Zend_Oauth_Exception',
    ),
  ),
  'Zend_Oauth_Http_RequestToken' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Http',
      1 => 'Zend_Oauth_Token_Request',
      2 => 'Zend_Http_Client',
      3 => 'Zend_Http_Response',
      4 => 'Zend_Oauth_Consumer',
      5 => 'Zend_Oauth_Http_Utility',
      6 => 'Zend_Oauth_Exception',
    ),
  ),
  'Zend_Oauth_Http_UserAuthorization' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Http',
      1 => 'Zend_Oauth_Consumer',
      2 => 'Zend_Oauth_Http_Utility',
      3 => 'Zend_Http_Response',
      4 => 'Zend_Oauth_Exception',
      5 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Oauth_Http_Utility' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Config_ConfigInterface',
    ),
  ),
  'Zend_Oauth_Signature_Hmac' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Signature_SignatureAbstract',
    ),
  ),
  'Zend_Oauth_Signature_Plaintext' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Signature_SignatureAbstract',
    ),
  ),
  'Zend_Oauth_Signature_Rsa' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Signature_SignatureAbstract',
    ),
  ),
  'Zend_Oauth_Signature_SignatureAbstract' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Oauth_Token' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Response',
      1 => 'Zend_Oauth_Http_Utility',
    ),
  ),
  'Zend_Oauth_Token_Access' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Token',
      1 => 'Zend_Oauth_Config_ConfigInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Oauth_Client',
      4 => 'Zend_Http_Response',
      5 => 'Zend_Oauth_Http_Utility',
    ),
  ),
  'Zend_Oauth_Token_AuthorizedRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Token',
      1 => 'Zend_Oauth_Http_Utility',
      2 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Oauth_Token_Request' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Oauth_Token',
      1 => 'Zend_Http_Response',
      2 => 'Zend_Oauth_Http_Utility',
    ),
  ),
  'Zend_OpenId' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Response_Abstract',
      1 => 'Zend_OpenId_Exception',
    ),
  ),
  'Zend_OpenId_Consumer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_OpenId_Consumer_Storage',
      1 => 'Zend_Controller_Response_Abstract',
      2 => 'Zend_Http_Client',
      3 => 'Zend_Session_Namespace',
    ),
  ),
  'Zend_OpenId_Consumer_Storage' => 
  array (
    'instantiable' => false,
  ),
  'Zend_OpenId_Consumer_Storage_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_OpenId_Consumer_Storage',
      1 => 'Zend_OpenId_Exception',
    ),
  ),
  'Zend_OpenId_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_OpenId_Extension' => 
  array (
    'instantiable' => false,
  ),
  'Zend_OpenId_Extension_Sreg' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_OpenId_Extension',
    ),
  ),
  'Zend_OpenId_Provider' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_OpenId_Provider_User',
      1 => 'Zend_OpenId_Provider_Storage',
      2 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_OpenId_Provider_Storage' => 
  array (
    'instantiable' => false,
  ),
  'Zend_OpenId_Provider_Storage_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_OpenId_Provider_Storage',
      1 => 'Zend_OpenId_Exception',
    ),
  ),
  'Zend_OpenId_Provider_User' => 
  array (
    'instantiable' => false,
  ),
  'Zend_OpenId_Provider_User_Session' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_OpenId_Provider_User',
      1 => 'Zend_Session_Namespace',
    ),
  ),
  'Zend_Paginator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Loader_PluginLoader',
      1 => 'Zend_Config',
      2 => 'Zend_Cache_Core',
      3 => 'Zend_Paginator_Adapter_Interface',
      4 => 'Zend_Paginator_AdapterAggregate',
      5 => 'Zend_Filter_Interface',
      6 => 'Zend_View_Interface',
      7 => 'Zend_Paginator_ScrollingStyle_Interface',
    ),
  ),
  'Zend_Paginator_AdapterAggregate' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Paginator_Adapter_Interface',
    ),
  ),
  'Zend_Paginator_Adapter_Array' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Paginator_Adapter_Interface',
    ),
  ),
  'Zend_Paginator_Adapter_DbSelect' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Paginator_Adapter_Interface',
      1 => 'Zend_Db_Select',
      2 => 'Zend_Paginator_Exception',
    ),
  ),
  'Zend_Paginator_Adapter_DbTableSelect' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Paginator_Adapter_DbSelect',
      1 => 'Zend_Paginator_Adapter_Interface',
      2 => 'Zend_Db_Table_Rowset_Abstract',
      3 => 'Zend_Db_Select',
      4 => 'Zend_Paginator_Exception',
    ),
  ),
  'Zend_Paginator_Adapter_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Paginator_Adapter_Iterator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Paginator_Adapter_Interface',
      1 => 'Zend_Paginator_Exception',
    ),
  ),
  'Zend_Paginator_Adapter_Null' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Paginator_Adapter_Interface',
    ),
  ),
  'Zend_Paginator_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Paginator_ScrollingStyle_All' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Paginator_ScrollingStyle_Interface',
      1 => 'Zend_Paginator',
    ),
  ),
  'Zend_Paginator_ScrollingStyle_Elastic' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Paginator_ScrollingStyle_Sliding',
      1 => 'Zend_Paginator_ScrollingStyle_Interface',
      2 => 'Zend_Paginator',
    ),
  ),
  'Zend_Paginator_ScrollingStyle_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Paginator',
    ),
  ),
  'Zend_Paginator_ScrollingStyle_Jumping' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Paginator_ScrollingStyle_Interface',
      1 => 'Zend_Paginator',
    ),
  ),
  'Zend_Paginator_ScrollingStyle_Sliding' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Paginator_ScrollingStyle_Interface',
      1 => 'Zend_Paginator',
    ),
  ),
  'Zend_Paginator_SerializableLimitIterator' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Pdf' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Memory_Manager',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_Element_Reference',
      3 => 'Zend_Pdf_Page',
      4 => 'Zend_Pdf_Target',
      5 => 'Zend_Pdf_Destination_Explicit',
      6 => 'Zend_Pdf_Action_GoTo',
      7 => 'Zend_Pdf_Destination',
      8 => 'Zend_Pdf_Action',
      9 => 'Zend_Pdf_Resource_Font_Extracted',
    ),
  ),
  'Zend_Pdf_Action' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Target',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_GoTo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Destination',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_Exception',
      5 => 'Zend_Pdf_ElementFactory',
      6 => 'Zend_Pdf_Element_Object',
      7 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_GoTo3DView' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_GoToE' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_GoToR' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_Hide' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_ImportData' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_JavaScript' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_Launch' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_Movie' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_Named' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_Rendition' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_ResetForm' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_SetOCGState' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_Sound' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_SubmitForm' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_Thread' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_Trans' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_URI' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Action_Unknown' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Action',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element_Object',
      6 => 'Zend_Pdf_Element_Reference',
    ),
  ),
  'Zend_Pdf_Annotation' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Annotation_FileAttachment' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Annotation',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_Element',
    ),
  ),
  'Zend_Pdf_Annotation_Link' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Annotation',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_Target',
      3 => 'Zend_Pdf_Element',
    ),
  ),
  'Zend_Pdf_Annotation_Markup' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Annotation',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_Element',
    ),
  ),
  'Zend_Pdf_Annotation_Text' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Annotation',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_Element',
    ),
  ),
  'Zend_Pdf_Canvas' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Canvas_Abstract',
      1 => 'Zend_Pdf_Canvas_Interface',
      2 => 'Zend_Pdf_Resource',
      3 => 'Zend_Pdf_Color',
      4 => 'Zend_Pdf_Resource_Font',
      5 => 'Zend_Pdf_Style',
      6 => 'Zend_Pdf_Exception',
      7 => 'Zend_Pdf_Image',
    ),
  ),
  'Zend_Pdf_Canvas_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Canvas_Interface',
      1 => 'Zend_Pdf_Resource',
      2 => 'Zend_Pdf_Color',
      3 => 'Zend_Pdf_Resource_Font',
      4 => 'Zend_Pdf_Style',
      5 => 'Zend_Pdf_Exception',
      6 => 'Zend_Pdf_Image',
    ),
  ),
  'Zend_Pdf_Canvas_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Color',
      1 => 'Zend_Pdf_Resource_Font',
      2 => 'Zend_Pdf_Style',
      3 => 'Zend_Pdf_Exception',
      4 => 'Zend_Pdf_Page',
      5 => 'Zend_Pdf_Image',
    ),
  ),
  'Zend_Pdf_Cmap' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Cmap_ByteEncoding' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Cmap',
      1 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Cmap_ByteEncoding_Static' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Cmap_ByteEncoding',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_Cmap',
    ),
  ),
  'Zend_Pdf_Cmap_SegmentToDelta' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Cmap',
      1 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Cmap_TrimmedTable' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Cmap',
      1 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Color' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Pdf_Color_Cmyk' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Color',
    ),
  ),
  'Zend_Pdf_Color_GrayScale' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Color',
    ),
  ),
  'Zend_Pdf_Color_Html' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Color',
      1 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Color_Rgb' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Color',
    ),
  ),
  'Zend_Pdf_Destination' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Target',
      1 => 'Zend_Pdf_Element',
    ),
  ),
  'Zend_Pdf_Destination_Explicit' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination',
      1 => 'Zend_Pdf_Element',
      2 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Destination_Fit' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination_Explicit',
      1 => 'Zend_Pdf_Page',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_Destination',
    ),
  ),
  'Zend_Pdf_Destination_FitBoundingBox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination_Explicit',
      1 => 'Zend_Pdf_Page',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_Destination',
    ),
  ),
  'Zend_Pdf_Destination_FitBoundingBoxHorizontally' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination_Explicit',
      1 => 'Zend_Pdf_Page',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_Destination',
    ),
  ),
  'Zend_Pdf_Destination_FitBoundingBoxVertically' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination_Explicit',
      1 => 'Zend_Pdf_Page',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_Destination',
    ),
  ),
  'Zend_Pdf_Destination_FitHorizontally' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination_Explicit',
      1 => 'Zend_Pdf_Page',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_Destination',
    ),
  ),
  'Zend_Pdf_Destination_FitRectangle' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination_Explicit',
      1 => 'Zend_Pdf_Page',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_Destination',
    ),
  ),
  'Zend_Pdf_Destination_FitVertically' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination_Explicit',
      1 => 'Zend_Pdf_Page',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_Destination',
    ),
  ),
  'Zend_Pdf_Destination_Named' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination',
      1 => 'Zend_Pdf_Element',
      2 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Destination_Unknown' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination_Explicit',
      1 => 'Zend_Pdf_Element',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Destination',
    ),
  ),
  'Zend_Pdf_Destination_Zoom' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination_Explicit',
      1 => 'Zend_Pdf_Page',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_Destination',
    ),
  ),
  'Zend_Pdf_Element' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_ElementFactory',
      1 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_ElementFactory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_ElementFactory_Interface',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_Element_Object',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_Element_Object_Stream',
    ),
  ),
  'Zend_Pdf_ElementFactory_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_ElementFactory',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_Element_Object',
      3 => 'Zend_Pdf_Element',
      4 => 'Zend_Pdf_Element_Object_Stream',
    ),
  ),
  'Zend_Pdf_ElementFactory_Proxy' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_ElementFactory_Interface',
      1 => 'Zend_Pdf_ElementFactory',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Element_Object',
      4 => 'Zend_Pdf_Element',
      5 => 'Zend_Pdf_Element_Object_Stream',
    ),
  ),
  'Zend_Pdf_Element_Array' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_ElementFactory',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Element_Boolean' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_ElementFactory',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Element_Dictionary' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_ElementFactory',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Element_Name' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_ElementFactory',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Element_Null' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_ElementFactory',
      2 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Element_Numeric' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_ElementFactory',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Element_Object' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_ElementFactory',
      2 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Element_Object_Stream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element_Object',
      1 => 'Zend_Pdf_ElementFactory',
      2 => 'Zend_Pdf_Element_Dictionary',
      3 => 'Zend_Pdf_Exception',
      4 => 'Zend_Pdf_Element',
    ),
  ),
  'Zend_Pdf_Element_Reference' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_Element_Reference_Context',
      2 => 'Zend_Pdf_ElementFactory',
      3 => 'Zend_Pdf_Exception',
      4 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Element_Reference_Context' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_StringParser',
      1 => 'Zend_Pdf_Element_Reference_Table',
    ),
  ),
  'Zend_Pdf_Element_Reference_Table' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Element_Stream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_ElementFactory',
      2 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Element_String' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_ElementFactory',
      2 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Element_String_Binary' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element_String',
      1 => 'Zend_Pdf_ElementFactory',
      2 => 'Zend_Pdf_Element_Object',
      3 => 'Zend_Pdf_Element',
    ),
  ),
  'Zend_Pdf_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Pdf_FileParser' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Exception',
      1 => 'Zend_Pdf_FileParserDataSource',
    ),
  ),
  'Zend_Pdf_FileParserDataSource' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_FileParserDataSource_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_FileParserDataSource',
      1 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_FileParserDataSource_String' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_FileParserDataSource',
      1 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_FileParser_Font' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_FileParser',
      1 => 'Zend_Pdf_FileParserDataSource',
      2 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_FileParser_Font_OpenType' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_FileParser_Font',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_FileParserDataSource',
    ),
  ),
  'Zend_Pdf_FileParser_Font_OpenType_TrueType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_FileParser_Font_OpenType',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_FileParserDataSource',
    ),
  ),
  'Zend_Pdf_FileParser_Image' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_FileParser',
      1 => 'Zend_Pdf_FileParserDataSource',
      2 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_FileParser_Image_Png' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_FileParser_Image',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_FileParserDataSource',
    ),
  ),
  'Zend_Pdf_Filter_Ascii85' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Filter_Interface',
      1 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Filter_AsciiHex' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Filter_Interface',
      1 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Filter_Compression' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Filter_Interface',
      1 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Filter_Compression_Flate' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Filter_Compression',
      1 => 'Zend_Pdf_Filter_Interface',
      2 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Filter_Compression_Lzw' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Filter_Compression',
      1 => 'Zend_Pdf_Filter_Interface',
      2 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Filter_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Filter_RunLength' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Filter_Interface',
      1 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Font' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_FileParserDataSource',
    ),
  ),
  'Zend_Pdf_Image' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Image',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_FileParserDataSource',
      3 => 'Zend_Pdf_Resource_Image_Jpeg',
      4 => 'Zend_Pdf_Resource_Image_Png',
      5 => 'Zend_Pdf_Resource_Image_Tiff',
    ),
  ),
  'Zend_Pdf_NameTree' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
    ),
  ),
  'Zend_Pdf_Outline' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Color_Rgb',
      1 => 'Zend_Pdf_Target',
      2 => 'Zend_Pdf_Action',
      3 => 'Zend_Pdf_Exception',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element',
    ),
  ),
  'Zend_Pdf_Outline_Created' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Outline',
      1 => 'Zend_Pdf_Color_Rgb',
      2 => 'Zend_Pdf_Target',
      3 => 'Zend_Pdf_Exception',
      4 => 'Zend_Pdf_ElementFactory',
      5 => 'Zend_Pdf_Element',
      6 => 'Zend_Pdf_Action',
    ),
  ),
  'Zend_Pdf_Outline_Loaded' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Outline',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_Color_Rgb',
      3 => 'Zend_Pdf_Target',
      4 => 'Zend_Pdf_Element',
      5 => 'Zend_Pdf_Action',
      6 => 'Zend_Pdf_ElementFactory',
    ),
  ),
  'Zend_Pdf_Page' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Canvas_Abstract',
      1 => 'Zend_Pdf_Canvas_Interface',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Resource',
      4 => 'Zend_Pdf_ElementFactory_Interface',
      5 => 'Zend_Pdf_Element_Dictionary',
      6 => 'Zend_Pdf_Resource_Font_Extracted',
      7 => 'Zend_Pdf_Annotation',
      8 => 'Zend_Pdf_Color',
      9 => 'Zend_Pdf_Resource_Font',
      10 => 'Zend_Pdf_Style',
      11 => 'Zend_Pdf_Image',
    ),
  ),
  'Zend_Pdf_Parser' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Exception',
      1 => 'Zend_Pdf_Trailer_Keeper',
      2 => 'Zend_Pdf_ElementFactory_Interface',
      3 => 'Zend_Exception',
    ),
  ),
  'Zend_Pdf_RecursivelyIteratableObjectsContainer' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Pdf_Resource' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_ContentStream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource',
      1 => 'Zend_Pdf_Element_Object_Stream',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_ElementFactory_Interface',
      4 => 'Zend_Pdf_Page',
      5 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Extractor' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Pdf_Resource_Font' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_ElementFactory_Interface',
      3 => 'Zend_Pdf_Page',
      4 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_CidFont' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font',
      1 => 'Zend_Pdf_FileParser_Font_OpenType',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_ElementFactory_Interface',
      4 => 'Zend_Pdf_Page',
      5 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_CidFont_TrueType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_CidFont',
      1 => 'Zend_Pdf_FileParser_Font_OpenType_TrueType',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_ElementFactory_Interface',
      4 => 'Zend_Pdf_Page',
      5 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Extracted' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_ElementFactory_Interface',
      3 => 'Zend_Pdf_Page',
      4 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_FontDescriptor' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Exception',
      1 => 'Zend_Pdf_Resource_Font',
      2 => 'Zend_Pdf_FileParser_Font_OpenType',
      3 => 'Zend_Pdf_Element_Dictionary',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Parsed' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple',
      1 => 'Zend_Pdf_FileParser_Font_OpenType',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_ElementFactory_Interface',
      4 => 'Zend_Pdf_Page',
      5 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Parsed_TrueType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Parsed',
      1 => 'Zend_Pdf_FileParser_Font_OpenType_TrueType',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_ElementFactory_Interface',
      4 => 'Zend_Pdf_Page',
      5 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_Courier' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_CourierBold' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_CourierBoldOblique' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_CourierOblique' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_Helvetica' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_HelveticaBold' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_HelveticaBoldOblique' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_HelveticaOblique' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_Symbol' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_TimesBold' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_TimesBoldItalic' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_TimesItalic' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_TimesRoman' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Simple_Standard_ZapfDingbats' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font_Simple_Standard',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Font_Type0' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Font',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_ElementFactory_Interface',
      3 => 'Zend_Pdf_Page',
      4 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_GraphicsState' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource',
      1 => 'Zend_Pdf_Element_Object',
      2 => 'Zend_Pdf_Exception',
      3 => 'Zend_Pdf_Canvas_Interface',
      4 => 'Zend_Pdf_ElementFactory_Interface',
      5 => 'Zend_Pdf_Page',
    ),
  ),
  'Zend_Pdf_Resource_Image' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource',
      1 => 'Zend_Pdf_ElementFactory_Interface',
      2 => 'Zend_Pdf_Page',
      3 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_ImageFactory' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Pdf_Resource_Image_Jpeg' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Image',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_ElementFactory_Interface',
      3 => 'Zend_Pdf_Page',
      4 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Image_Png' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Image',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_ElementFactory_Interface',
      3 => 'Zend_Pdf_Page',
      4 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Image_Tiff' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource_Image',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_ElementFactory_Interface',
      3 => 'Zend_Pdf_Page',
      4 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_Resource_Unified' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Resource',
      1 => 'Zend_Pdf_Element',
      2 => 'Zend_Pdf_ElementFactory_Interface',
      3 => 'Zend_Pdf_Page',
      4 => 'Zend_Pdf_Element_Object',
    ),
  ),
  'Zend_Pdf_StringParser' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Element',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_Element_String',
      3 => 'Zend_Pdf_Element_String_Binary',
      4 => 'Zend_Pdf_Element_Array',
      5 => 'Zend_Pdf_Element_Dictionary',
      6 => 'Zend_Pdf_Element_Reference',
      7 => 'Zend_Pdf_Element_Numeric',
      8 => 'Zend_Pdf_Element_Reference_Context',
      9 => 'Zend_Pdf_Element_Object',
      10 => 'Zend_Pdf_ElementFactory_Interface',
    ),
  ),
  'Zend_Pdf_Style' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Color',
      1 => 'Zend_Pdf_Resource_Font',
    ),
  ),
  'Zend_Pdf_Target' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Destination',
      1 => 'Zend_Pdf_Exception',
      2 => 'Zend_Pdf_Element',
    ),
  ),
  'Zend_Pdf_Trailer' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Exception',
      1 => 'Zend_Pdf_Element_Dictionary',
    ),
  ),
  'Zend_Pdf_Trailer_Generator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Trailer',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_Trailer_Keeper' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Pdf_Trailer',
      1 => 'Zend_Pdf_Element_Dictionary',
      2 => 'Zend_Pdf_Element_Reference_Context',
      3 => 'Zend_Pdf_Exception',
    ),
  ),
  'Zend_Pdf_UpdateInfoContainer' => 
  array (
    'instantiable' => true,
  ),
  'Zend_ProgressBar' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_ProgressBar_Adapter',
      1 => 'Zend_ProgressBar_Exception',
    ),
  ),
  'Zend_ProgressBar_Adapter' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
    ),
  ),
  'Zend_ProgressBar_Adapter_Console' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_ProgressBar_Adapter',
      1 => 'Zend_Config',
      2 => 'Zend_ProgressBar_Adapter_Exception',
    ),
  ),
  'Zend_ProgressBar_Adapter_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_ProgressBar_Exception',
    ),
  ),
  'Zend_ProgressBar_Adapter_JsPull' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_ProgressBar_Adapter',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_ProgressBar_Adapter_JsPush' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_ProgressBar_Adapter',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_ProgressBar_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Queue' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Queue_Adapter_AdapterInterface',
      2 => 'Zend_Queue_Exception',
      3 => 'Zend_Queue_Message',
      4 => 'Zend_Queue_Message_Iterator',
    ),
  ),
  'Zend_Queue_Adapter_Activemq' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Adapter_AdapterAbstract',
      1 => 'Zend_Queue_Adapter_AdapterInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Queue',
      4 => 'Zend_Queue_Exception',
      5 => 'Zend_Queue_Message',
      6 => 'Zend_Queue_Message_Iterator',
    ),
  ),
  'Zend_Queue_Adapter_AdapterAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Adapter_AdapterInterface',
      1 => 'Zend_Config',
      2 => 'Zend_Queue',
      3 => 'Zend_Queue_Exception',
      4 => 'Zend_Queue_Message',
      5 => 'Zend_Queue_Message_Iterator',
    ),
  ),
  'Zend_Queue_Adapter_AdapterInterface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Queue',
      2 => 'Zend_Queue_Message',
      3 => 'Zend_Queue_Message_Iterator',
    ),
  ),
  'Zend_Queue_Adapter_Array' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Adapter_AdapterAbstract',
      1 => 'Zend_Queue_Adapter_AdapterInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Queue',
      4 => 'Zend_Queue_Exception',
      5 => 'Zend_Queue_Message',
      6 => 'Zend_Queue_Message_Iterator',
    ),
  ),
  'Zend_Queue_Adapter_Db' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Adapter_AdapterAbstract',
      1 => 'Zend_Queue_Adapter_AdapterInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Queue',
      4 => 'Zend_Db_Adapter_Abstract',
      5 => 'Zend_Queue_Exception',
      6 => 'Zend_Queue_Message',
      7 => 'Zend_Queue_Message_Iterator',
    ),
  ),
  'Zend_Queue_Adapter_Db_Message' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Abstract',
      1 => 'Zend_Db_Table_Definition',
      2 => 'Zend_Db_Table_Exception',
      3 => 'Zend_Db_Adapter_Abstract',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Db_Table_Select',
      6 => 'Zend_Db_Table_Rowset_Abstract',
      7 => 'Zend_Db_Table_Row_Abstract',
    ),
  ),
  'Zend_Queue_Adapter_Db_Queue' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Abstract',
      1 => 'Zend_Db_Table_Definition',
      2 => 'Zend_Db_Table_Exception',
      3 => 'Zend_Db_Adapter_Abstract',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Db_Table_Select',
      6 => 'Zend_Db_Table_Rowset_Abstract',
      7 => 'Zend_Db_Table_Row_Abstract',
    ),
  ),
  'Zend_Queue_Adapter_Memcacheq' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Adapter_AdapterAbstract',
      1 => 'Zend_Queue_Adapter_AdapterInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Queue',
      4 => 'Zend_Queue_Exception',
      5 => 'Zend_Queue_Message',
      6 => 'Zend_Queue_Message_Iterator',
    ),
  ),
  'Zend_Queue_Adapter_Null' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Adapter_AdapterAbstract',
      1 => 'Zend_Queue_Adapter_AdapterInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Queue',
      4 => 'Zend_Queue_Exception',
    ),
  ),
  'Zend_Queue_Adapter_PlatformJobQueue' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Adapter_AdapterAbstract',
      1 => 'Zend_Queue_Adapter_AdapterInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Queue',
      4 => 'Zend_Queue_Exception',
      5 => 'Zend_Queue_Message',
    ),
  ),
  'Zend_Queue_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Queue_Message' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Exception',
      1 => 'Zend_Queue',
    ),
  ),
  'Zend_Queue_Message_Iterator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue',
      1 => 'Zend_Queue_Adapter_AdapterInterface',
      2 => 'Zend_Queue_Exception',
      3 => 'Zend_Queue_Message',
    ),
  ),
  'Zend_Queue_Message_PlatformJob' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Message',
      1 => 'Zend_Queue_Exception',
      2 => 'Zend_Queue',
    ),
  ),
  'Zend_Queue_Stomp_Client' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Stomp_Client_ConnectionInterface',
      1 => 'Zend_Queue_Stomp_FrameInterface',
    ),
  ),
  'Zend_Queue_Stomp_Client_Connection' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Stomp_Client_ConnectionInterface',
      1 => 'Zend_Queue_Exception',
      2 => 'Zend_Queue_Stomp_FrameInterface',
    ),
  ),
  'Zend_Queue_Stomp_Client_ConnectionInterface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Exception',
      1 => 'Zend_Queue_Stomp_FrameInterface',
      2 => 'Zend_Queue_Stomp_Frame',
    ),
  ),
  'Zend_Queue_Stomp_Frame' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Stomp_FrameInterface',
      1 => 'Zend_Queue_Exception',
    ),
  ),
  'Zend_Queue_Stomp_FrameInterface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Queue_Exception',
    ),
  ),
  'Zend_Reflection_Class' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Reflection_File',
      1 => 'Zend_Reflection_Docblock',
      2 => 'Zend_Reflection_Exception',
      3 => 'Zend_Reflection_Method',
      4 => 'Zend_Reflection_Property',
    ),
  ),
  'Zend_Reflection_Docblock' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Reflection_Docblock_Tag',
    ),
  ),
  'Zend_Reflection_Docblock_Tag' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Reflection_Docblock_Tag_Param' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Reflection_Docblock_Tag',
    ),
  ),
  'Zend_Reflection_Docblock_Tag_Return' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Reflection_Docblock_Tag',
    ),
  ),
  'Zend_Reflection_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Reflection_Extension' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Reflection_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Reflection_Docblock',
      1 => 'Zend_Reflection_Class',
      2 => 'Zend_Reflection_Exception',
    ),
  ),
  'Zend_Reflection_Function' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Reflection_Docblock',
      1 => 'Zend_Reflection_Docblock_Tag_Return',
    ),
  ),
  'Zend_Reflection_Method' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Reflection_Docblock',
      1 => 'Zend_Reflection_Exception',
      2 => 'Zend_Reflection_Class',
    ),
  ),
  'Zend_Reflection_Parameter' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Reflection_Class',
      1 => 'Zend_Reflection_Function',
      2 => 'Zend_Reflection_Method',
    ),
  ),
  'Zend_Reflection_Property' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Reflection_Class',
      1 => 'Zend_Reflection_Docblock',
    ),
  ),
  'Zend_Registry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Rest_Client' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Abstract',
      1 => 'Zend_Uri_Http',
      2 => 'Zend_Rest_Client_Exception',
      3 => 'Zend_Http_Client_Exception',
      4 => 'Zend_Http_Response',
      5 => 'Zend_Rest_Client_Result',
      6 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Rest_Client_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Rest_Exception',
    ),
  ),
  'Zend_Rest_Client_Result' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Rest_Client_Result_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Rest_Client_Exception',
    ),
  ),
  'Zend_Rest_Controller' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Action',
      1 => 'Zend_Controller_Action_Interface',
      2 => 'Zend_Controller_Request_Abstract',
      3 => 'Zend_Controller_Response_Abstract',
      4 => 'Zend_View_Interface',
      5 => 'Zend_Controller_Exception',
      6 => 'Zend_Controller_Action_Helper_Abstract',
      7 => 'Zend_Controller_Front',
      8 => 'Zend_Controller_Action_Exception',
    ),
  ),
  'Zend_Rest_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Rest_Route' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Router_Route_Module',
      1 => 'Zend_Controller_Router_Route_Interface',
      2 => 'Zend_Controller_Front',
      3 => 'Zend_Controller_Request_Http',
      4 => 'Zend_Controller_Router_Route_Abstract',
      5 => 'Zend_Controller_Router_Route_Chain',
    ),
  ),
  'Zend_Rest_Server' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Interface',
      1 => 'Zend_Rest_Server_Exception',
    ),
  ),
  'Zend_Rest_Server_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Rest_Exception',
    ),
  ),
  'Zend_Search_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Search_Lucene' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Interface',
      1 => 'Zend_Search_Lucene_Index_TermsStream_Interface',
      2 => 'Zend_Search_Lucene_Storage_Directory',
      3 => 'Zend_Search_Lucene_Exception',
      4 => 'Zend_Search_Lucene_Storage_Directory_Filesystem',
      5 => 'Zend_Search_Lucene_Index_Writer',
      6 => 'Zend_Search_Lucene_Search_QueryParser',
      7 => 'Zend_Search_Lucene_Search_QueryHit',
      8 => 'Zend_Search_Lucene_Document',
      9 => 'Zend_Search_Lucene_Index_Term',
      10 => 'Zend_Search_Lucene_Index_DocsFilter',
      11 => 'Zend_Search_Lucene_Search_Similarity',
    ),
  ),
  'Zend_Search_Lucene_Analysis_Analyzer' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_Token',
    ),
  ),
  'Zend_Search_Lucene_Analysis_Analyzer_Common' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_Analyzer',
      1 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      2 => 'Zend_Search_Lucene_Analysis_Token',
    ),
  ),
  'Zend_Search_Lucene_Analysis_Analyzer_Common_Text' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_Analyzer_Common',
      1 => 'Zend_Search_Lucene_Analysis_Token',
      2 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      3 => 'Zend_Search_Lucene_Analysis_Analyzer',
    ),
  ),
  'Zend_Search_Lucene_Analysis_Analyzer_Common_TextNum' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_Analyzer_Common',
      1 => 'Zend_Search_Lucene_Analysis_Token',
      2 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      3 => 'Zend_Search_Lucene_Analysis_Analyzer',
    ),
  ),
  'Zend_Search_Lucene_Analysis_Analyzer_Common_TextNum_CaseInsensitive' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_Analyzer_Common_TextNum',
      1 => 'Zend_Search_Lucene_Analysis_Token',
      2 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      3 => 'Zend_Search_Lucene_Analysis_Analyzer',
    ),
  ),
  'Zend_Search_Lucene_Analysis_Analyzer_Common_Text_CaseInsensitive' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_Analyzer_Common_Text',
      1 => 'Zend_Search_Lucene_Analysis_Token',
      2 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      3 => 'Zend_Search_Lucene_Analysis_Analyzer',
    ),
  ),
  'Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_Analyzer_Common',
      1 => 'Zend_Search_Lucene_Exception',
      2 => 'Zend_Search_Lucene_Analysis_Token',
      3 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      4 => 'Zend_Search_Lucene_Analysis_Analyzer',
    ),
  ),
  'Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8Num' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_Analyzer_Common',
      1 => 'Zend_Search_Lucene_Exception',
      2 => 'Zend_Search_Lucene_Analysis_Token',
      3 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      4 => 'Zend_Search_Lucene_Analysis_Analyzer',
    ),
  ),
  'Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8Num_CaseInsensitive' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8Num',
      1 => 'Zend_Search_Lucene_Analysis_Token',
      2 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      3 => 'Zend_Search_Lucene_Analysis_Analyzer',
    ),
  ),
  'Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8_CaseInsensitive' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8',
      1 => 'Zend_Search_Lucene_Analysis_Token',
      2 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      3 => 'Zend_Search_Lucene_Analysis_Analyzer',
    ),
  ),
  'Zend_Search_Lucene_Analysis_Token' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Search_Lucene_Analysis_TokenFilter' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_Token',
    ),
  ),
  'Zend_Search_Lucene_Analysis_TokenFilter_LowerCase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      1 => 'Zend_Search_Lucene_Analysis_Token',
    ),
  ),
  'Zend_Search_Lucene_Analysis_TokenFilter_LowerCaseUtf8' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      1 => 'Zend_Search_Lucene_Analysis_Token',
    ),
  ),
  'Zend_Search_Lucene_Analysis_TokenFilter_ShortWords' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      1 => 'Zend_Search_Lucene_Analysis_Token',
    ),
  ),
  'Zend_Search_Lucene_Analysis_TokenFilter_StopWords' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Analysis_TokenFilter',
      1 => 'Zend_Search_Lucene_Analysis_Token',
      2 => 'Zend_Search_Exception',
    ),
  ),
  'Zend_Search_Lucene_Document' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Field',
    ),
  ),
  'Zend_Search_Lucene_Document_Docx' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Document_OpenXml',
      1 => 'Zend_Search_Lucene_Exception',
      2 => 'Zend_Search_Lucene_Document_Exception',
      3 => 'Zend_Search_Lucene_Field',
      4 => 'Zend_Search_Lucene_Document',
    ),
  ),
  'Zend_Search_Lucene_Document_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Exception',
    ),
  ),
  'Zend_Search_Lucene_Document_Html' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Document',
      1 => 'Zend_Search_Lucene_Exception',
      2 => 'Zend_Search_Lucene_Field',
    ),
  ),
  'Zend_Search_Lucene_Document_OpenXml' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Document',
      1 => 'Zend_Search_Lucene_Field',
    ),
  ),
  'Zend_Search_Lucene_Document_Pptx' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Document_OpenXml',
      1 => 'Zend_Search_Lucene_Exception',
      2 => 'Zend_Search_Lucene_Field',
      3 => 'Zend_Search_Lucene_Document',
    ),
  ),
  'Zend_Search_Lucene_Document_Xlsx' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Document_OpenXml',
      1 => 'Zend_Search_Lucene_Exception',
      2 => 'Zend_Search_Lucene_Field',
      3 => 'Zend_Search_Lucene_Document',
    ),
  ),
  'Zend_Search_Lucene_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Exception',
    ),
  ),
  'Zend_Search_Lucene_FSM' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Exception',
      1 => 'Zend_Search_Lucene_FSMAction',
    ),
  ),
  'Zend_Search_Lucene_FSMAction' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Search_Lucene_Field' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Search_Lucene_Index_DictionaryLoader' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Exception',
    ),
  ),
  'Zend_Search_Lucene_Index_DocsFilter' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Search_Lucene_Index_FieldInfo' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Search_Lucene_Index_SegmentInfo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Index_TermsStream_Interface',
      1 => 'Zend_Search_Lucene_Storage_Directory',
      2 => 'Zend_Search_Lucene_Exception',
      3 => 'Zend_Search_Lucene_Storage_File',
      4 => 'Zend_Search_Lucene_Index_FieldInfo',
      5 => 'Zend_Search_Lucene_Index_Term',
      6 => 'Zend_Search_Lucene_Index_TermInfo',
      7 => 'Zend_Search_Lucene_Index_DocsFilter',
    ),
  ),
  'Zend_Search_Lucene_Index_SegmentMerger' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Storage_Directory',
      1 => 'Zend_Search_Lucene_Index_SegmentInfo',
      2 => 'Zend_Search_Lucene_Exception',
    ),
  ),
  'Zend_Search_Lucene_Index_SegmentWriter' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Storage_Directory',
      1 => 'Zend_Search_Lucene_Field',
      2 => 'Zend_Search_Lucene_Index_FieldInfo',
      3 => 'Zend_Search_Lucene_Index_Term',
      4 => 'Zend_Search_Lucene_Storage_File',
      5 => 'Zend_Search_Lucene_Index_TermInfo',
      6 => 'Zend_Search_Lucene_Index_SegmentInfo',
    ),
  ),
  'Zend_Search_Lucene_Index_SegmentWriter_DocumentWriter' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Index_SegmentWriter',
      1 => 'Zend_Search_Lucene_Storage_Directory',
      2 => 'Zend_Search_Lucene_Document',
      3 => 'Zend_Search_Lucene_Exception',
      4 => 'Zend_Search_Lucene_Index_SegmentInfo',
      5 => 'Zend_Search_Lucene_Field',
      6 => 'Zend_Search_Lucene_Index_FieldInfo',
      7 => 'Zend_Search_Lucene_Index_Term',
      8 => 'Zend_Search_Lucene_Storage_File',
      9 => 'Zend_Search_Lucene_Index_TermInfo',
    ),
  ),
  'Zend_Search_Lucene_Index_SegmentWriter_StreamWriter' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Index_SegmentWriter',
      1 => 'Zend_Search_Lucene_Storage_Directory',
      2 => 'Zend_Search_Lucene_Index_SegmentInfo',
      3 => 'Zend_Search_Lucene_Field',
      4 => 'Zend_Search_Lucene_Index_FieldInfo',
      5 => 'Zend_Search_Lucene_Index_Term',
      6 => 'Zend_Search_Lucene_Storage_File',
      7 => 'Zend_Search_Lucene_Index_TermInfo',
    ),
  ),
  'Zend_Search_Lucene_Index_Term' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Search_Lucene_Index_TermInfo' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Search_Lucene_Index_TermsPriorityQueue' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_PriorityQueue',
    ),
  ),
  'Zend_Search_Lucene_Index_TermsStream_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Index_Term',
    ),
  ),
  'Zend_Search_Lucene_Index_Writer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Storage_Directory',
      1 => 'Zend_Search_Lucene_Storage_File',
      2 => 'Zend_Search_Lucene_Document',
      3 => 'Zend_Search_Lucene_Exception',
    ),
  ),
  'Zend_Search_Lucene_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Index_TermsStream_Interface',
      1 => 'Zend_Search_Lucene_Storage_Directory',
      2 => 'Zend_Search_Lucene_Exception',
      3 => 'Zend_Search_Lucene_Search_QueryHit',
      4 => 'Zend_Search_Lucene_Document',
      5 => 'Zend_Search_Lucene_Index_Term',
      6 => 'Zend_Search_Lucene_Index_DocsFilter',
      7 => 'Zend_Search_Lucene_Search_Similarity',
    ),
  ),
  'Zend_Search_Lucene_LockManager' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Storage_Directory',
      1 => 'Zend_Search_Lucene_Storage_File',
      2 => 'Zend_Search_Lucene_Exception',
    ),
  ),
  'Zend_Search_Lucene_PriorityQueue' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Search_Lucene_Proxy' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Interface',
      1 => 'Zend_Search_Lucene_Index_TermsStream_Interface',
      2 => 'Zend_Search_Lucene_Storage_Directory',
      3 => 'Zend_Search_Lucene_Exception',
      4 => 'Zend_Search_Lucene_Search_QueryHit',
      5 => 'Zend_Search_Lucene_Document',
      6 => 'Zend_Search_Lucene_Index_Term',
      7 => 'Zend_Search_Lucene_Index_DocsFilter',
      8 => 'Zend_Search_Lucene_Search_Similarity',
    ),
  ),
  'Zend_Search_Lucene_Search_BooleanExpressionRecognizer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_FSM',
      1 => 'Zend_Search_Lucene_Exception',
      2 => 'Zend_Search_Exception',
      3 => 'Zend_Search_Lucene_FSMAction',
    ),
  ),
  'Zend_Search_Lucene_Search_Highlighter_Default' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
      1 => 'Zend_Search_Lucene_Document_Html',
    ),
  ),
  'Zend_Search_Lucene_Search_Highlighter_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Document_Html',
    ),
  ),
  'Zend_Search_Lucene_Search_Query' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Interface',
      1 => 'Zend_Search_Lucene_Index_DocsFilter',
      2 => 'Zend_Search_Lucene_Search_Weight',
      3 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_QueryEntry' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query',
    ),
  ),
  'Zend_Search_Lucene_Search_QueryEntry_Phrase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_QueryEntry',
      1 => 'Zend_Search_Lucene_Search_Query',
      2 => 'Zend_Search_Lucene_Search_QueryParserException',
    ),
  ),
  'Zend_Search_Lucene_Search_QueryEntry_Subquery' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_QueryEntry',
      1 => 'Zend_Search_Lucene_Search_Query',
      2 => 'Zend_Search_Lucene_Search_QueryParserException',
    ),
  ),
  'Zend_Search_Lucene_Search_QueryEntry_Term' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_QueryEntry',
      1 => 'Zend_Search_Lucene_Search_Query',
      2 => 'Zend_Search_Lucene_Search_QueryParserException',
    ),
  ),
  'Zend_Search_Lucene_Search_QueryHit' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Interface',
      1 => 'Zend_Search_Lucene_Document',
    ),
  ),
  'Zend_Search_Lucene_Search_QueryLexer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_FSM',
      1 => 'Zend_Search_Lucene_Search_QueryParserException',
      2 => 'Zend_Search_Exception',
      3 => 'Zend_Search_Lucene_FSMAction',
    ),
  ),
  'Zend_Search_Lucene_Search_QueryParser' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_FSM',
      1 => 'Zend_Search_Lucene_Search_Query',
      2 => 'Zend_Search_Lucene_Search_QueryParserException',
      3 => 'Zend_Search_Lucene_Exception',
      4 => 'Zend_Search_Exception',
      5 => 'Zend_Search_Lucene_FSMAction',
    ),
  ),
  'Zend_Search_Lucene_Search_QueryParserContext' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Exception',
      1 => 'Zend_Search_Lucene_Search_QueryEntry',
      2 => 'Zend_Search_Lucene_Search_QueryParserException',
      3 => 'Zend_Search_Lucene_Search_Query',
      4 => 'Zend_Search_Lucene',
    ),
  ),
  'Zend_Search_Lucene_Search_QueryParserException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Exception',
    ),
  ),
  'Zend_Search_Lucene_Search_QueryToken' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Search_Lucene_Search_Query_Boolean' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query',
      1 => 'Zend_Search_Lucene_Interface',
      2 => 'Zend_Search_Lucene_Search_Weight',
      3 => 'Zend_Search_Lucene_Index_DocsFilter',
      4 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_Empty' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query',
      1 => 'Zend_Search_Lucene_Interface',
      2 => 'Zend_Search_Lucene_Search_Weight',
      3 => 'Zend_Search_Lucene_Index_DocsFilter',
      4 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_Fuzzy' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query',
      1 => 'Zend_Search_Lucene_Index_Term',
      2 => 'Zend_Search_Lucene_Exception',
      3 => 'Zend_Search_Lucene_Interface',
      4 => 'Zend_Search_Lucene_Search_Weight',
      5 => 'Zend_Search_Lucene_Index_DocsFilter',
      6 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_Insignificant' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query',
      1 => 'Zend_Search_Lucene_Interface',
      2 => 'Zend_Search_Lucene_Search_Weight',
      3 => 'Zend_Search_Lucene_Index_DocsFilter',
      4 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_MultiTerm' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query',
      1 => 'Zend_Search_Lucene_Exception',
      2 => 'Zend_Search_Lucene_Index_Term',
      3 => 'Zend_Search_Lucene_Interface',
      4 => 'Zend_Search_Lucene_Search_Weight_Term',
      5 => 'Zend_Search_Lucene_Search_Weight',
      6 => 'Zend_Search_Lucene_Index_DocsFilter',
      7 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_Phrase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query',
      1 => 'Zend_Search_Lucene_Exception',
      2 => 'Zend_Search_Lucene_Index_Term',
      3 => 'Zend_Search_Lucene_Interface',
      4 => 'Zend_Search_Lucene_Search_Weight_Term',
      5 => 'Zend_Search_Lucene_Search_Weight',
      6 => 'Zend_Search_Lucene_Index_DocsFilter',
      7 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_Preprocessing' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query',
      1 => 'Zend_Search_Lucene_Interface',
      2 => 'Zend_Search_Lucene_Search_Weight',
      3 => 'Zend_Search_Lucene_Index_DocsFilter',
      4 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_Preprocessing_Fuzzy' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query_Preprocessing',
      1 => 'Zend_Search_Lucene_Interface',
      2 => 'Zend_Search_Lucene_Search_Query',
      3 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
      4 => 'Zend_Search_Lucene_Search_Weight',
      5 => 'Zend_Search_Lucene_Index_DocsFilter',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_Preprocessing_Phrase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query_Preprocessing',
      1 => 'Zend_Search_Lucene_Interface',
      2 => 'Zend_Search_Lucene_Search_Query',
      3 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
      4 => 'Zend_Search_Lucene_Search_Weight',
      5 => 'Zend_Search_Lucene_Index_DocsFilter',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_Preprocessing_Term' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query_Preprocessing',
      1 => 'Zend_Search_Lucene_Interface',
      2 => 'Zend_Search_Lucene_Search_Query',
      3 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
      4 => 'Zend_Search_Lucene_Search_Weight',
      5 => 'Zend_Search_Lucene_Index_DocsFilter',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_Range' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query',
      1 => 'Zend_Search_Lucene_Index_Term',
      2 => 'Zend_Search_Lucene_Exception',
      3 => 'Zend_Search_Lucene_Interface',
      4 => 'Zend_Search_Lucene_Search_Weight',
      5 => 'Zend_Search_Lucene_Index_DocsFilter',
      6 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_Term' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query',
      1 => 'Zend_Search_Lucene_Index_Term',
      2 => 'Zend_Search_Lucene_Interface',
      3 => 'Zend_Search_Lucene_Search_Weight',
      4 => 'Zend_Search_Lucene_Index_DocsFilter',
      5 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Query_Wildcard' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Query',
      1 => 'Zend_Search_Lucene_Index_Term',
      2 => 'Zend_Search_Lucene_Interface',
      3 => 'Zend_Search_Lucene_Exception',
      4 => 'Zend_Search_Lucene_Search_Weight',
      5 => 'Zend_Search_Lucene_Index_DocsFilter',
      6 => 'Zend_Search_Lucene_Search_Highlighter_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Similarity' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Similarity_Default' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Similarity',
      1 => 'Zend_Search_Lucene_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Weight' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Search_Lucene_Search_Weight_Boolean' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Weight',
      1 => 'Zend_Search_Lucene_Search_Query',
      2 => 'Zend_Search_Lucene_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Weight_Empty' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Weight',
    ),
  ),
  'Zend_Search_Lucene_Search_Weight_MultiTerm' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Weight',
      1 => 'Zend_Search_Lucene_Search_Query',
      2 => 'Zend_Search_Lucene_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Weight_Phrase' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Weight',
      1 => 'Zend_Search_Lucene_Search_Query_Phrase',
      2 => 'Zend_Search_Lucene_Interface',
    ),
  ),
  'Zend_Search_Lucene_Search_Weight_Term' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Search_Weight',
      1 => 'Zend_Search_Lucene_Index_Term',
      2 => 'Zend_Search_Lucene_Search_Query',
      3 => 'Zend_Search_Lucene_Interface',
    ),
  ),
  'Zend_Search_Lucene_Storage_Directory' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Storage_File',
    ),
  ),
  'Zend_Search_Lucene_Storage_Directory_Filesystem' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Storage_Directory',
      1 => 'Zend_Search_Lucene_Exception',
      2 => 'Zend_Search_Lucene_Storage_File',
    ),
  ),
  'Zend_Search_Lucene_Storage_File' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Exception',
    ),
  ),
  'Zend_Search_Lucene_Storage_File_Filesystem' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Storage_File',
      1 => 'Zend_Search_Lucene_Exception',
    ),
  ),
  'Zend_Search_Lucene_Storage_File_Memory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Storage_File',
      1 => 'Zend_Search_Lucene_Exception',
    ),
  ),
  'Zend_Search_Lucene_TermStreamsPriorityQueue' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Search_Lucene_Index_TermsStream_Interface',
      1 => 'Zend_Search_Lucene_Index_Term',
    ),
  ),
  'Zend_Serializer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Serializer_Adapter_AdapterInterface',
      1 => 'Zend_Loader_PluginLoader',
      2 => 'Zend_Config',
      3 => 'Zend_Serializer_Exception',
    ),
  ),
  'Zend_Serializer_Adapter_AdapterAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Serializer_Adapter_AdapterInterface',
      1 => 'Zend_Config',
      2 => 'Zend_Serializer_Exception',
    ),
  ),
  'Zend_Serializer_Adapter_AdapterInterface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Serializer_Exception',
    ),
  ),
  'Zend_Serializer_Adapter_Amf0' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Serializer_Adapter_AdapterAbstract',
      1 => 'Zend_Serializer_Adapter_AdapterInterface',
      2 => 'Zend_Serializer_Exception',
      3 => 'Zend_Config',
    ),
  ),
  'Zend_Serializer_Adapter_Amf3' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Serializer_Adapter_AdapterAbstract',
      1 => 'Zend_Serializer_Adapter_AdapterInterface',
      2 => 'Zend_Serializer_Exception',
      3 => 'Zend_Config',
    ),
  ),
  'Zend_Serializer_Adapter_Igbinary' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Serializer_Adapter_AdapterAbstract',
      1 => 'Zend_Serializer_Adapter_AdapterInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Serializer_Exception',
    ),
  ),
  'Zend_Serializer_Adapter_Json' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Serializer_Adapter_AdapterAbstract',
      1 => 'Zend_Serializer_Adapter_AdapterInterface',
      2 => 'Zend_Serializer_Exception',
      3 => 'Zend_Config',
    ),
  ),
  'Zend_Serializer_Adapter_PhpCode' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Serializer_Adapter_AdapterAbstract',
      1 => 'Zend_Serializer_Adapter_AdapterInterface',
      2 => 'Zend_Serializer_Exception',
      3 => 'Zend_Config',
    ),
  ),
  'Zend_Serializer_Adapter_PhpSerialize' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Serializer_Adapter_AdapterAbstract',
      1 => 'Zend_Serializer_Adapter_AdapterInterface',
      2 => 'Zend_Config',
      3 => 'Zend_Serializer_Exception',
    ),
  ),
  'Zend_Serializer_Adapter_PythonPickle' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Serializer_Adapter_AdapterAbstract',
      1 => 'Zend_Serializer_Adapter_AdapterInterface',
      2 => 'Zend_Serializer_Exception',
      3 => 'Zend_Config',
    ),
  ),
  'Zend_Serializer_Adapter_Wddx' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Serializer_Adapter_AdapterAbstract',
      1 => 'Zend_Serializer_Adapter_AdapterInterface',
      2 => 'Zend_Serializer_Exception',
      3 => 'Zend_Config',
    ),
  ),
  'Zend_Serializer_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Server_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Interface',
      1 => 'Zend_Server_Definition',
      2 => 'Zend_Server_Reflection_Function_Abstract',
      3 => 'Zend_Server_Method_Callback',
      4 => 'Zend_Server_Method_Definition',
      5 => 'Zend_Server_Exception',
    ),
  ),
  'Zend_Server_Cache' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Interface',
    ),
  ),
  'Zend_Server_Definition' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Method_Definition',
      1 => 'Zend_Server_Exception',
    ),
  ),
  'Zend_Server_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Server_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Server_Method_Callback' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Exception',
    ),
  ),
  'Zend_Server_Method_Definition' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Method_Callback',
      1 => 'Zend_Server_Method_Prototype',
    ),
  ),
  'Zend_Server_Method_Parameter' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Server_Method_Prototype' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Method_Parameter',
    ),
  ),
  'Zend_Server_Reflection' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Reflection_Class',
      1 => 'Zend_Server_Reflection_Exception',
      2 => 'Zend_Server_Reflection_Function',
    ),
  ),
  'Zend_Server_Reflection_Class' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Server_Reflection_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Exception',
    ),
  ),
  'Zend_Server_Reflection_Function' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Reflection_Function_Abstract',
      1 => 'Zend_Server_Reflection_Node',
    ),
  ),
  'Zend_Server_Reflection_Function_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Reflection_Node',
    ),
  ),
  'Zend_Server_Reflection_Method' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Reflection_Function_Abstract',
      1 => 'Zend_Server_Reflection_Class',
      2 => 'Zend_Server_Reflection_Node',
    ),
  ),
  'Zend_Server_Reflection_Node' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Server_Reflection_Parameter' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Server_Reflection_Prototype' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Reflection_ReturnValue',
    ),
  ),
  'Zend_Server_Reflection_ReturnValue' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Akismet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Abstract',
      1 => 'Zend_Service_Exception',
      2 => 'Zend_Http_Response',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
      1 => 'Zend_Service_Amazon_ResultSet',
      2 => 'Zend_Service_Amazon_Item',
      3 => 'Zend_Rest_Client',
    ),
  ),
  'Zend_Service_Amazon_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Abstract',
      1 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Accessories' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Amazon_Authentication' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Service_Amazon_Authentication_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Exception',
    ),
  ),
  'Zend_Service_Amazon_Authentication_S3' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Authentication',
    ),
  ),
  'Zend_Service_Amazon_Authentication_V1' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Authentication',
    ),
  ),
  'Zend_Service_Amazon_Authentication_V2' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Authentication',
    ),
  ),
  'Zend_Service_Amazon_CustomerReview' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Amazon_Ec2' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Exception',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Response',
      2 => 'Zend_Service_Amazon_Ec2_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Availabilityzones' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Response',
      2 => 'Zend_Service_Amazon_Ec2_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Ec2_CloudWatch' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Response',
      2 => 'Zend_Service_Amazon_Ec2_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Ebs' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Response',
      2 => 'Zend_Service_Amazon_Ec2_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Elasticip' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Response',
      2 => 'Zend_Service_Amazon_Ec2_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Exception',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Image' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Response',
      2 => 'Zend_Service_Amazon_Ec2_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Instance' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Response',
      2 => 'Zend_Service_Amazon_Ec2_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Instance_Reserved' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Response',
      2 => 'Zend_Service_Amazon_Ec2_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Instance_Windows' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Response',
      2 => 'Zend_Service_Amazon_Ec2_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Keypair' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Exception',
      2 => 'Zend_Service_Amazon_Ec2_Response',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Region' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Response',
      2 => 'Zend_Service_Amazon_Ec2_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Response' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Service_Amazon_Ec2_Securitygroups' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Ec2_Abstract',
      1 => 'Zend_Service_Amazon_Ec2_Response',
      2 => 'Zend_Service_Amazon_Ec2_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_EditorialReview' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Amazon_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_Amazon_Image' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Amazon_Item' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Exception',
    ),
  ),
  'Zend_Service_Amazon_ListmaniaList' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Amazon_Offer' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Amazon_OfferSet' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Amazon_Query' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon',
      1 => 'Zend_Service_Exception',
      2 => 'Zend_Service_Amazon_Item',
      3 => 'Zend_Service_Amazon_ResultSet',
      4 => 'Zend_Rest_Client',
    ),
  ),
  'Zend_Service_Amazon_ResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Item',
    ),
  ),
  'Zend_Service_Amazon_S3' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Abstract',
      1 => 'Zend_Uri_Http',
      2 => 'Zend_Http_Response_Stream',
      3 => 'Zend_Http_Response',
      4 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_S3_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Exception',
    ),
  ),
  'Zend_Service_Amazon_S3_Stream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_S3',
    ),
  ),
  'Zend_Service_Amazon_SimilarProduct' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Amazon_SimpleDb' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Abstract',
      1 => 'Zend_Uri_Http',
      2 => 'Zend_Service_Amazon_SimpleDb_Page',
      3 => 'Zend_Service_Amazon_SimpleDb_Response',
      4 => 'Zend_Service_Amazon_SimpleDb_Exception',
      5 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_SimpleDb_Attribute' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Amazon_SimpleDb_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Exception',
    ),
  ),
  'Zend_Service_Amazon_SimpleDb_Page' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Amazon_SimpleDb_Response' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Service_Amazon_Sqs' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Abstract',
      1 => 'Zend_Service_Amazon_Sqs_Exception',
      2 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Amazon_Sqs_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Amazon_Exception',
    ),
  ),
  'Zend_Service_Audioscrobbler' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client',
      1 => 'Zend_Http_Client_Exception',
      2 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_Delicious' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Delicious_Exception',
      1 => 'Zend_Date',
      2 => 'Zend_Service_Delicious_PostList',
      3 => 'Zend_Service_Delicious_Post',
    ),
  ),
  'Zend_Service_Delicious_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_Delicious_Post' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Delicious_SimplePost',
      1 => 'Zend_Service_Delicious',
      2 => 'Zend_Service_Delicious_Exception',
      3 => 'Zend_Date',
    ),
  ),
  'Zend_Service_Delicious_PostList' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Delicious',
      1 => 'Zend_Service_Delicious_SimplePost',
      2 => 'Zend_Service_Delicious_Exception',
    ),
  ),
  'Zend_Service_Delicious_SimplePost' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Delicious_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_BaseUserService' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Client_ClientAbstract',
      1 => 'Zend_Service_DeveloperGarden_Client_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_BaseUserService_GetQuotaInformationResponse',
      3 => 'Zend_Service_DeveloperGarden_Response_BaseUserService_ChangeQuotaPoolResponse',
      4 => 'Zend_Service_DeveloperGarden_Request_BaseUserService_ChangeQuotaPool',
      5 => 'Zend_Service_DeveloperGarden_Response_BaseUserService_GetAccountBalanceResponse',
      6 => 'Zend_Service_DeveloperGarden_Client_Soap',
      7 => 'Zend_Service_DeveloperGarden_Credential',
      8 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_BaseUserService_AccountBalance' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_DeveloperGarden_Client_ClientAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Client_Exception',
      1 => 'Zend_Service_DeveloperGarden_Client_Soap',
      2 => 'Zend_Service_DeveloperGarden_Credential',
      3 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Client_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Client_Soap' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Soap_Client',
      1 => 'Zend_Service_DeveloperGarden_SecurityTokenServer',
      2 => 'Zend_Service_DeveloperGarden_Credential',
      3 => 'Zend_Service_DeveloperGarden_Response_SecurityTokenServer_SecurityTokenResponse',
      4 => 'Zend_Config',
      5 => 'Zend_Soap_Client_Exception',
      6 => 'Zend_Soap_Client_Common',
    ),
  ),
  'Zend_Service_DeveloperGarden_ConferenceCall' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Client_ClientAbstract',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceDetail',
      2 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceSchedule',
      3 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_CreateConferenceResponseType',
      4 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_CommitConferenceResponse',
      5 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_CCSResponseType',
      6 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceStatusResponseType',
      7 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetRunningConferenceResponseType',
      8 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceListResponseType',
      9 => 'Zend_Service_DeveloperGarden_ConferenceCall_ParticipantDetail',
      10 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_NewParticipantResponseType',
      11 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetParticipantStatusResponseType',
      12 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_CreateConferenceTemplateResponseType',
      13 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceTemplateResponseType',
      14 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceTemplateListResponseType',
      15 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_AddConferenceTemplateParticipantResponseType',
      16 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceTemplateParticipantResponseType',
      17 => 'Zend_Service_DeveloperGarden_Client_Exception',
      18 => 'Zend_Service_DeveloperGarden_Client_Soap',
      19 => 'Zend_Service_DeveloperGarden_Credential',
      20 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceAccount' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceDetail' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceSchedule' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_DeveloperGarden_ConferenceCall_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_ConferenceCall_Participant' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_ConferenceCall_ParticipantDetail',
    ),
  ),
  'Zend_Service_DeveloperGarden_ConferenceCall_ParticipantDetail' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_DeveloperGarden_ConferenceCall_ParticipantStatus' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_DeveloperGarden_Credential' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Client_Exception',
      1 => 'Zend_Service_DeveloperGarden_Client_ClientAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_IpLocation' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Client_ClientAbstract',
      1 => 'Zend_Service_DeveloperGarden_IpLocation_IpAddress',
      2 => 'Zend_Service_DeveloperGarden_Response_IpLocation_LocateIPResponse',
      3 => 'Zend_Service_DeveloperGarden_Client_Exception',
      4 => 'Zend_Service_DeveloperGarden_Client_Soap',
      5 => 'Zend_Service_DeveloperGarden_Credential',
      6 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_IpLocation_IpAddress' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_LocalSearch' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Client_ClientAbstract',
      1 => 'Zend_Service_DeveloperGarden_LocalSearch_SearchParameters',
      2 => 'Zend_Service_DeveloperGarden_Response_LocalSearch_LocalSearchResponseType',
      3 => 'Zend_Service_DeveloperGarden_Client_Exception',
      4 => 'Zend_Service_DeveloperGarden_Client_Soap',
      5 => 'Zend_Service_DeveloperGarden_Credential',
      6 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_LocalSearch_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_LocalSearch_SearchParameters' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_DeveloperGarden_Request_BaseUserService_ChangeQuotaPool' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_DeveloperGarden_Request_BaseUserService_GetAccountBalance' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_DeveloperGarden_Request_BaseUserService_GetQuotaInformation' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_AddConferenceTemplateParticipantRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ParticipantDetail',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_CommitConferenceRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_CreateConferenceRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceDetail',
      2 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceSchedule',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_CreateConferenceTemplateRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceDetail',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_GetConferenceListRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_GetConferenceStatusRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_GetConferenceTemplateListRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_GetConferenceTemplateParticipantRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_GetConferenceTemplateRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_GetParticipantStatusRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_GetRunningConferenceRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_NewParticipantRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ParticipantDetail',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_RemoveConferenceRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_RemoveConferenceTemplateParticipantRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_RemoveConferenceTemplateRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_RemoveParticipantRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_UpdateConferenceRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceDetail',
      2 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceSchedule',
      3 => 'Zend_Service_DeveloperGarden_Request_ConferenceCall_CreateConferenceRequest',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_UpdateConferenceTemplateParticipantRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ParticipantDetail',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_UpdateConferenceTemplateRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceDetail',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_ConferenceCall_UpdateParticipantRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ParticipantDetail',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_IpLocation_LocateIPRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_IpLocation_IpAddress',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_LocalSearch_LocalSearchRequest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_LocalSearch_SearchParameters',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_RequestAbstract' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Service_DeveloperGarden_Request_SendSms_SendFlashSMS' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_SendSms_SendSmsAbstract',
      1 => 'Zend_Service_DeveloperGarden_Request_Exception',
      2 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_SendSms_SendSMS' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_SendSms_SendSmsAbstract',
      1 => 'Zend_Service_DeveloperGarden_Request_Exception',
      2 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_SendSms_SendSmsAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_Request_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_SmsValidation_GetValidatedNumbers' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_SmsValidation_Invalidate' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
      1 => 'Zend_Service_DeveloperGarden_Request_SmsValidation_Validate',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_SmsValidation_SendValidationKeyword' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_SendSms_SendSmsAbstract',
      1 => 'Zend_Service_DeveloperGarden_Request_Exception',
      2 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_SmsValidation_Validate' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_VoiceButler_CallStatus' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_VoiceButler_VoiceButlerAbstract',
      1 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_VoiceButler_NewCall' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_VoiceButler_VoiceButlerAbstract',
      1 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_VoiceButler_NewCallSequenced' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_VoiceButler_NewCall',
      1 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_VoiceButler_TearDownCall' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_VoiceButler_VoiceButlerAbstract',
      1 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Request_VoiceButler_VoiceButlerAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Request_RequestAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_BaseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_BaseUserService_ChangeQuotaPoolResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_BaseUserService_GetAccountBalanceResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_BaseUserService_GetQuotaInformationResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_AddConferenceTemplateParticipantResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_AddConferenceTemplateParticipantResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_CCSResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_CommitConferenceResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_CreateConferenceResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_CreateConferenceResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_CreateConferenceTemplateResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_CreateConferenceTemplateResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceListResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceListResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceStatusResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceStatusResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceDetail',
      2 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceSchedule',
      3 => 'Zend_Service_DeveloperGarden_ConferenceCall_ParticipantDetail',
      4 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceAccount',
      5 => 'Zend_Service_DeveloperGarden_Response_Exception',
      6 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceTemplateListResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceTemplateListResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceTemplateParticipantResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceTemplateParticipantResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ParticipantDetail',
      2 => 'Zend_Service_DeveloperGarden_Response_Exception',
      3 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceTemplateResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetConferenceTemplateResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_ConferenceCall_ConferenceDetail',
      2 => 'Zend_Service_DeveloperGarden_ConferenceCall_Participant',
      3 => 'Zend_Service_DeveloperGarden_Response_Exception',
      4 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetParticipantStatusResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetParticipantStatusResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetRunningConferenceResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_GetRunningConferenceResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_NewParticipantResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_NewParticipantResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_RemoveConferenceResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_RemoveConferenceTemplateParticipantResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_RemoveConferenceTemplateResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_RemoveParticipantResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_UpdateConferenceResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_UpdateConferenceTemplateParticipantResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_UpdateConferenceTemplateResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ConferenceCall_UpdateParticipantResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ConferenceCall_ConferenceCallAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_IpLocation_CityType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_IpLocation_GeoCoordinatesType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_IpLocation_IPAddressLocationType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_IpLocation_RegionType',
      2 => 'Zend_Service_DeveloperGarden_Response_IpLocation_GeoCoordinatesType',
      3 => 'Zend_Service_DeveloperGarden_Response_IpLocation_CityType',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_IpLocation_LocateIPResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_IpLocation_LocateIPResponseType',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_IpLocation_LocateIPResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_IpLocation_RegionType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_LocalSearch_LocalSearchResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_LocalSearch_LocalSearchResponseType',
      2 => 'Zend_Service_DeveloperGarden_Response_Exception',
      3 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_LocalSearch_LocalSearchResponseType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_ResponseAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_SecurityTokenServer_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_SecurityTokenServer_GetTokensResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_SecurityTokenServer_Interface',
      2 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_SecurityTokenServer_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Service_DeveloperGarden_Response_SecurityTokenServer_SecurityTokenResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_SecurityTokenServer_Interface',
      2 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_SendSms_SendFlashSMSResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_SendSms_SendSmsAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_SendSms_SendSMSResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_SendSms_SendSmsAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_SendSms_SendSmsAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_SmsValidation_GetValidatedNumbersResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_SmsValidation_InvalidateResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_SmsValidation_SendValidationKeywordResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_SmsValidation_ValidateResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_BaseType',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_SmsValidation_ValidatedNumber' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_DeveloperGarden_Response_VoiceButler_CallStatus2Response' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_VoiceButler_CallStatusResponse',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_VoiceButler_CallStatusResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_VoiceButler_VoiceButlerAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_VoiceButler_NewCallResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_VoiceButler_VoiceButlerAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_VoiceButler_NewCallSequencedResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_VoiceButler_NewCallResponse',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_VoiceButler_TearDownCallResponse' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_VoiceButler_VoiceButlerAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
      2 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
    ),
  ),
  'Zend_Service_DeveloperGarden_Response_VoiceButler_VoiceButlerAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Response_ResponseAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_SecurityTokenServer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Client_ClientAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_SecurityTokenServer_SecurityTokenResponse',
      2 => 'Zend_Service_DeveloperGarden_Response_SecurityTokenServer_GetTokensResponse',
      3 => 'Zend_Service_DeveloperGarden_Client_Exception',
      4 => 'Zend_Service_DeveloperGarden_Client_Soap',
      5 => 'Zend_Service_DeveloperGarden_Credential',
      6 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_SecurityTokenServer_Cache' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Exception',
      1 => 'Zend_Service_DeveloperGarden_Response_SecurityTokenServer_Interface',
      2 => 'Zend_Cache_Core',
    ),
  ),
  'Zend_Service_DeveloperGarden_SendSms' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Client_ClientAbstract',
      1 => 'Zend_Service_DeveloperGarden_Request_SendSms_SendSMS',
      2 => 'Zend_Service_DeveloperGarden_Request_SendSms_SendFlashSMS',
      3 => 'Zend_Service_DeveloperGarden_Request_SendSms_SendSmsAbstract',
      4 => 'Zend_Service_DeveloperGarden_Response_SendSms_SendSmsAbstract',
      5 => 'Zend_Service_DeveloperGarden_Client_Exception',
      6 => 'Zend_Service_DeveloperGarden_Client_Soap',
      7 => 'Zend_Service_DeveloperGarden_Credential',
      8 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_SmsValidation' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Client_ClientAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_SmsValidation_ValidateResponse',
      2 => 'Zend_Service_DeveloperGarden_Response_SmsValidation_InvalidateResponse',
      3 => 'Zend_Service_DeveloperGarden_Response_SmsValidation_GetValidatedNumbersResponse',
      4 => 'Zend_Service_DeveloperGarden_Client_Exception',
      5 => 'Zend_Service_DeveloperGarden_Client_Soap',
      6 => 'Zend_Service_DeveloperGarden_Credential',
      7 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_DeveloperGarden_VoiceCall' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_DeveloperGarden_Client_ClientAbstract',
      1 => 'Zend_Service_DeveloperGarden_Response_VoiceButler_NewCallResponse',
      2 => 'Zend_Service_DeveloperGarden_Client_Exception',
      3 => 'Zend_Service_DeveloperGarden_Response_VoiceButler_NewCallSequencedResponse',
      4 => 'Zend_Service_DeveloperGarden_Response_VoiceButler_TearDownCallResponse',
      5 => 'Zend_Service_DeveloperGarden_Response_VoiceButler_CallStatusResponse',
      6 => 'Zend_Service_DeveloperGarden_Client_Soap',
      7 => 'Zend_Service_DeveloperGarden_Credential',
      8 => 'Zend_Service_DeveloperGarden_Exception',
    ),
  ),
  'Zend_Service_Ebay_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Service_Ebay_Finding_Exception',
    ),
  ),
  'Zend_Service_Ebay_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_Ebay_Finding' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Abstract',
      1 => 'Zend_Config',
      2 => 'Zend_Service_Ebay_Finding_Exception',
      3 => 'Zend_Rest_Client',
      4 => 'Zend_Service_Ebay_Finding_Response_Items',
      5 => 'Zend_Service_Ebay_Finding_Response_Histograms',
      6 => 'Zend_Service_Ebay_Finding_Response_Keywords',
      7 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Service_Ebay_Finding_Abstract' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Service_Ebay_Finding_Aspect' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_Aspect_Histogram_Container' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_Aspect_Histogram_Value' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_Aspect_Histogram_Value_Set' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Set_Abstract',
      1 => 'Zend_Service_Ebay_Finding_Aspect_Histogram_Value',
    ),
  ),
  'Zend_Service_Ebay_Finding_Aspect_Set' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Set_Abstract',
      1 => 'Zend_Service_Ebay_Finding_Aspect',
    ),
  ),
  'Zend_Service_Ebay_Finding_Category' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
      1 => 'Zend_Service_Ebay_Finding',
      2 => 'Zend_Config',
      3 => 'Zend_Service_Ebay_Finding_Response_Items',
    ),
  ),
  'Zend_Service_Ebay_Finding_Category_Histogram' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Category',
      1 => 'Zend_Service_Ebay_Finding',
      2 => 'Zend_Config',
      3 => 'Zend_Service_Ebay_Finding_Response_Items',
    ),
  ),
  'Zend_Service_Ebay_Finding_Category_Histogram_Container' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_Category_Histogram_Set' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Set_Abstract',
      1 => 'Zend_Service_Ebay_Finding_Category_Histogram',
    ),
  ),
  'Zend_Service_Ebay_Finding_Error_Data' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_Error_Data_Set' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Set_Abstract',
      1 => 'Zend_Service_Ebay_Finding_Error_Data',
    ),
  ),
  'Zend_Service_Ebay_Finding_Error_Message' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Exception',
    ),
  ),
  'Zend_Service_Ebay_Finding_ListingInfo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_PaginationOutput' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_Response_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Service_Ebay_Finding_Response_Histograms' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Response_Abstract',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Service_Ebay_Finding_Response_Items' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Response_Histograms',
      1 => 'Zend_Service_Ebay_Finding',
      2 => 'Zend_Service_Ebay_Finding_Exception',
      3 => 'Zend_Service_Ebay_Finding_Response_Abstract',
      4 => 'Zend_Config',
    ),
  ),
  'Zend_Service_Ebay_Finding_Response_Keywords' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Response_Abstract',
      1 => 'Zend_Service_Ebay_Finding',
      2 => 'Zend_Config',
      3 => 'Zend_Service_Ebay_Finding_Response_Items',
    ),
  ),
  'Zend_Service_Ebay_Finding_Search_Item' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
      1 => 'Zend_Service_Ebay_Finding',
      2 => 'Zend_Config',
      3 => 'Zend_Service_Ebay_Finding_Response_Items',
    ),
  ),
  'Zend_Service_Ebay_Finding_Search_Item_Set' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Set_Abstract',
      1 => 'Zend_Service_Ebay_Finding_Search_Item',
    ),
  ),
  'Zend_Service_Ebay_Finding_Search_Result' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_SellerInfo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_SellingStatus' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_Set_Abstract' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Service_Ebay_Finding_ShippingInfo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
    ),
  ),
  'Zend_Service_Ebay_Finding_Storefront' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Ebay_Finding_Abstract',
      1 => 'Zend_Service_Ebay_Finding',
      2 => 'Zend_Config',
      3 => 'Zend_Service_Ebay_Finding_Response_Items',
    ),
  ),
  'Zend_Service_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Service_Flickr' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Flickr_ResultSet',
      1 => 'Zend_Service_Exception',
      2 => 'Zend_Rest_Client',
    ),
  ),
  'Zend_Service_Flickr_Image' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Flickr_Result' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Flickr',
    ),
  ),
  'Zend_Service_Flickr_ResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Flickr',
      1 => 'Zend_Service_Flickr_Result',
    ),
  ),
  'Zend_Service_LiveDocx' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Service_LiveDocx_Exception',
      2 => 'Zend_Soap_Client',
    ),
  ),
  'Zend_Service_LiveDocx_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_LiveDocx_MailMerge' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_LiveDocx',
      1 => 'Zend_Service_LiveDocx_Exception',
      2 => 'Zend_Soap_Client',
    ),
  ),
  'Zend_Service_Nirvanix' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Nirvanix_Namespace_Base',
    ),
  ),
  'Zend_Service_Nirvanix_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_Nirvanix_Namespace_Base' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Nirvanix_Response',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Service_Nirvanix_Namespace_Imfs' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Nirvanix_Namespace_Base',
      1 => 'Zend_Service_Nirvanix_Response',
      2 => 'Zend_Http_Client',
      3 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Service_Nirvanix_Response' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Nirvanix_Exception',
    ),
  ),
  'Zend_Service_ReCaptcha' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Abstract',
      1 => 'Zend_Config',
      2 => 'Zend_Service_ReCaptcha_Exception',
      3 => 'Zend_Http_Response',
      4 => 'Zend_Service_ReCaptcha_Response',
      5 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_ReCaptcha_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_ReCaptcha_MailHide' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_ReCaptcha',
      1 => 'Zend_Config',
      2 => 'Zend_Validate_Interface',
      3 => 'Zend_Service_ReCaptcha_MailHide_Exception',
      4 => 'Zend_Service_ReCaptcha_Exception',
      5 => 'Zend_Http_Response',
      6 => 'Zend_Service_ReCaptcha_Response',
      7 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_ReCaptcha_MailHide_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_ReCaptcha_Exception',
    ),
  ),
  'Zend_Service_ReCaptcha_Response' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Service_ShortUrl_AbstractShortener' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Abstract',
      1 => 'Zend_Service_ShortUrl_Shortener',
      2 => 'Zend_Service_ShortUrl_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_ShortUrl_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_ShortUrl_IsGd' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_ShortUrl_AbstractShortener',
      1 => 'Zend_Service_ShortUrl_Shortener',
      2 => 'Zend_Service_ShortUrl_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_ShortUrl_JdemCz' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_ShortUrl_AbstractShortener',
      1 => 'Zend_Service_ShortUrl_Shortener',
      2 => 'Zend_Service_ShortUrl_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_ShortUrl_MetamarkNet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_ShortUrl_AbstractShortener',
      1 => 'Zend_Service_ShortUrl_Shortener',
      2 => 'Zend_Service_ShortUrl_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_ShortUrl_Shortener' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Service_ShortUrl_TinyUrlCom' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_ShortUrl_AbstractShortener',
      1 => 'Zend_Service_ShortUrl_Shortener',
      2 => 'Zend_Service_ShortUrl_Exception',
      3 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_Simpy' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client',
      1 => 'Zend_Service_Exception',
      2 => 'Zend_Service_Simpy_TagSet',
      3 => 'Zend_Service_Simpy_LinkQuery',
      4 => 'Zend_Service_Simpy_LinkSet',
      5 => 'Zend_Service_Simpy_WatchlistSet',
      6 => 'Zend_Service_Simpy_Watchlist',
      7 => 'Zend_Service_Simpy_NoteSet',
    ),
  ),
  'Zend_Service_Simpy_Link' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Simpy_LinkQuery' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Simpy_LinkSet' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Simpy_Note' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Simpy_NoteSet' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Simpy_Tag' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Simpy_TagSet' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Simpy_Watchlist' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Simpy_WatchlistFilterSet',
    ),
  ),
  'Zend_Service_Simpy_WatchlistFilter' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Simpy_WatchlistFilterSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Simpy_WatchlistFilter',
    ),
  ),
  'Zend_Service_Simpy_WatchlistSet' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_SlideShare' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_SlideShare_Exception',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Cache_Core',
      3 => 'Zend_Service_SlideShare_SlideShow',
    ),
  ),
  'Zend_Service_SlideShare_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_SlideShare_SlideShow' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_StrikeIron' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_StrikeIron_Exception',
    ),
  ),
  'Zend_Service_StrikeIron_Base' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_StrikeIron_Exception',
      1 => 'Zend_Service_StrikeIron_Decorator',
    ),
  ),
  'Zend_Service_StrikeIron_Decorator' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_StrikeIron_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_StrikeIron_SalesUseTaxBasic' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_StrikeIron_Base',
      1 => 'Zend_Service_StrikeIron_Exception',
      2 => 'Zend_Service_StrikeIron_Decorator',
    ),
  ),
  'Zend_Service_StrikeIron_USAddressVerification' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_StrikeIron_Base',
      1 => 'Zend_Service_StrikeIron_Exception',
      2 => 'Zend_Service_StrikeIron_Decorator',
    ),
  ),
  'Zend_Service_StrikeIron_ZipCodeInfo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_StrikeIron_Base',
      1 => 'Zend_Service_StrikeIron_Exception',
      2 => 'Zend_Service_StrikeIron_Decorator',
    ),
  ),
  'Zend_Service_Technorati' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_CosmosResultSet',
      1 => 'Zend_Service_Technorati_Exception',
      2 => 'Zend_Service_Technorati_SearchResultSet',
      3 => 'Zend_Service_Technorati_TagResultSet',
      4 => 'Zend_Service_Technorati_DailyCountsResultSet',
      5 => 'Zend_Service_Technorati_TagsResultSet',
      6 => 'Zend_Service_Technorati_BlogInfoResult',
      7 => 'Zend_Service_Technorati_GetInfoResult',
      8 => 'Zend_Service_Technorati_KeyInfoResult',
      9 => 'Zend_Rest_Client',
      10 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Service_Technorati_Author' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Uri_Http',
      1 => 'Zend_Service_Technorati_Exception',
    ),
  ),
  'Zend_Service_Technorati_BlogInfoResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Uri_Http',
      1 => 'Zend_Service_Technorati_Weblog',
    ),
  ),
  'Zend_Service_Technorati_CosmosResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_Result',
      1 => 'Zend_Service_Technorati_Weblog',
      2 => 'Zend_Uri_Http',
      3 => 'Zend_Date',
    ),
  ),
  'Zend_Service_Technorati_CosmosResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_ResultSet',
      1 => 'Zend_Uri_Http',
      2 => 'Zend_Service_Technorati_Weblog',
      3 => 'Zend_Service_Technorati_CosmosResult',
    ),
  ),
  'Zend_Service_Technorati_DailyCountsResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_Result',
      1 => 'Zend_Date',
    ),
  ),
  'Zend_Service_Technorati_DailyCountsResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_ResultSet',
      1 => 'Zend_Uri_Http',
      2 => 'Zend_Service_Technorati_DailyCountsResult',
    ),
  ),
  'Zend_Service_Technorati_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_Technorati_GetInfoResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_Author',
    ),
  ),
  'Zend_Service_Technorati_KeyInfoResult' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Technorati_Result' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Service_Technorati_ResultSet' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Service_Technorati_SearchResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_Result',
      1 => 'Zend_Service_Technorati_Weblog',
      2 => 'Zend_Date',
      3 => 'Zend_Uri_Http',
    ),
  ),
  'Zend_Service_Technorati_SearchResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_ResultSet',
      1 => 'Zend_Service_Technorati_SearchResult',
    ),
  ),
  'Zend_Service_Technorati_TagResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_Result',
      1 => 'Zend_Service_Technorati_Weblog',
      2 => 'Zend_Date',
      3 => 'Zend_Uri_Http',
    ),
  ),
  'Zend_Service_Technorati_TagResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_ResultSet',
      1 => 'Zend_Service_Technorati_TagResult',
    ),
  ),
  'Zend_Service_Technorati_TagsResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_Result',
    ),
  ),
  'Zend_Service_Technorati_TagsResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Technorati_ResultSet',
      1 => 'Zend_Service_Technorati_TagsResult',
    ),
  ),
  'Zend_Service_Technorati_Utils' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Uri_Http',
      1 => 'Zend_Service_Technorati_Exception',
      2 => 'Zend_Date',
    ),
  ),
  'Zend_Service_Technorati_Weblog' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Uri_Http',
      1 => 'Zend_Service_Technorati_Exception',
    ),
  ),
  'Zend_Service_Twitter' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Rest_Client',
      1 => 'Zend_Http_Client',
      2 => 'Zend_Service_Twitter_Exception',
      3 => 'Zend_Http_Client_Exception',
      4 => 'Zend_Rest_Client_Result',
      5 => 'Zend_Rest_Client_Exception',
      6 => 'Zend_Http_Response',
      7 => 'Zend_Uri_Http',
    ),
  ),
  'Zend_Service_Twitter_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_Twitter_Search' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Rest_Client',
      1 => 'Zend_Service_Twitter_Exception',
      2 => 'Zend_Http_Client_Exception',
      3 => 'Zend_Uri_Http',
      4 => 'Zend_Rest_Client_Exception',
      5 => 'Zend_Http_Response',
      6 => 'Zend_Rest_Client_Result',
      7 => 'Zend_Http_Client',
    ),
  ),
  'Zend_Service_WindowsAzure_Credentials_CredentialsAbstract' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Service_WindowsAzure_Credentials_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Exception',
    ),
  ),
  'Zend_Service_WindowsAzure_Credentials_SharedAccessSignature' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Credentials_CredentialsAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Credentials_SharedKey' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Credentials_CredentialsAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Credentials_SharedKeyLite' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Credentials_CredentialsAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Diagnostics_ConfigurationDataSources' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Diagnostics_ConfigurationObjectBaseAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Diagnostics_ConfigurationDiagnosticInfrastructureLogs' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Diagnostics_ConfigurationObjectBaseAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Diagnostics_ConfigurationDirectories' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Diagnostics_ConfigurationObjectBaseAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Diagnostics_ConfigurationInstance' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Diagnostics_ConfigurationObjectBaseAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Diagnostics_ConfigurationLogs' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Diagnostics_ConfigurationObjectBaseAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Diagnostics_ConfigurationObjectBaseAbstract' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Service_WindowsAzure_Diagnostics_ConfigurationPerformanceCounters' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Diagnostics_ConfigurationObjectBaseAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Diagnostics_ConfigurationWindowsEventLog' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Diagnostics_ConfigurationObjectBaseAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Diagnostics_DirectoryConfigurationSubscription' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Diagnostics_ConfigurationObjectBaseAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Diagnostics_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Exception',
    ),
  ),
  'Zend_Service_WindowsAzure_Diagnostics_LogLevel' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_WindowsAzure_Diagnostics_Manager' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_Blob',
      1 => 'Zend_Service_WindowsAzure_Diagnostics_ConfigurationInstance',
      2 => 'Zend_Service_WindowsAzure_Diagnostics_Exception',
    ),
  ),
  'Zend_Service_WindowsAzure_Diagnostics_PerformanceCounterSubscription' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Diagnostics_ConfigurationObjectBaseAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
    ),
  ),
  'Zend_Service_WindowsAzure_RetryPolicy_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Exception',
    ),
  ),
  'Zend_Service_WindowsAzure_RetryPolicy_NoRetry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_RetryPolicy_RetryPolicyAbstract',
      1 => 'Zend_Service_WindowsAzure_RetryPolicy_RetryN',
    ),
  ),
  'Zend_Service_WindowsAzure_RetryPolicy_RetryN' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_RetryPolicy_RetryPolicyAbstract',
      1 => 'Zend_Service_WindowsAzure_RetryPolicy_NoRetry',
    ),
  ),
  'Zend_Service_WindowsAzure_RetryPolicy_RetryPolicyAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_RetryPolicy_NoRetry',
      1 => 'Zend_Service_WindowsAzure_RetryPolicy_RetryN',
    ),
  ),
  'Zend_Service_WindowsAzure_SessionHandler' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_Table',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_RetryPolicy_RetryPolicyAbstract',
      1 => 'Zend_Http_Client_Adapter_Interface',
      2 => 'Zend_Service_WindowsAzure_Credentials_CredentialsAbstract',
      3 => 'Zend_Http_Response',
      4 => 'Zend_Service_WindowsAzure_Exception',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_Batch' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_BatchStorageAbstract',
      1 => 'Zend_Service_WindowsAzure_Exception',
      2 => 'Zend_Http_Response',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_BatchStorageAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage',
      1 => 'Zend_Service_WindowsAzure_Storage_Batch',
      2 => 'Zend_Service_WindowsAzure_Exception',
      3 => 'Zend_Http_Response',
      4 => 'Zend_Service_WindowsAzure_RetryPolicy_RetryPolicyAbstract',
      5 => 'Zend_Http_Client_Adapter_Interface',
      6 => 'Zend_Service_WindowsAzure_Credentials_CredentialsAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_Blob' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage',
      1 => 'Zend_Service_WindowsAzure_RetryPolicy_RetryPolicyAbstract',
      2 => 'Zend_Service_WindowsAzure_Exception',
      3 => 'Zend_Service_WindowsAzure_Storage_BlobContainer',
      4 => 'Zend_Service_WindowsAzure_Storage_BlobInstance',
      5 => 'Zend_Service_WindowsAzure_Storage_LeaseInstance',
      6 => 'Zend_Http_Response',
      7 => 'Zend_Http_Client_Adapter_Interface',
      8 => 'Zend_Service_WindowsAzure_Credentials_CredentialsAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_BlobContainer' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_WindowsAzure_Storage_BlobInstance' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_WindowsAzure_Storage_Blob_Stream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_Blob',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_DynamicTableEntity' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_TableEntity',
      1 => 'Zend_Service_WindowsAzure_Exception',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_LeaseInstance' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_StorageEntityAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_PageRegionInstance' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_StorageEntityAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_Queue' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage',
      1 => 'Zend_Service_WindowsAzure_RetryPolicy_RetryPolicyAbstract',
      2 => 'Zend_Service_WindowsAzure_Exception',
      3 => 'Zend_Service_WindowsAzure_Storage_QueueInstance',
      4 => 'Zend_Service_WindowsAzure_Storage_QueueMessage',
      5 => 'Zend_Http_Response',
      6 => 'Zend_Http_Client_Adapter_Interface',
      7 => 'Zend_Service_WindowsAzure_Credentials_CredentialsAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_QueueInstance' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_StorageEntityAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_QueueMessage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_StorageEntityAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_SignedIdentifier' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_StorageEntityAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_StorageEntityAbstract' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Service_WindowsAzure_Storage_Table' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_BatchStorageAbstract',
      1 => 'Zend_Service_WindowsAzure_RetryPolicy_RetryPolicyAbstract',
      2 => 'Zend_Service_WindowsAzure_Exception',
      3 => 'Zend_Service_WindowsAzure_Storage_TableInstance',
      4 => 'Zend_Service_WindowsAzure_Storage_TableEntity',
      5 => 'Zend_Service_WindowsAzure_Storage_TableEntityQuery',
      6 => 'Zend_Http_Response',
      7 => 'Zend_Service_WindowsAzure_Storage_Batch',
      8 => 'Zend_Http_Client_Adapter_Interface',
      9 => 'Zend_Service_WindowsAzure_Credentials_CredentialsAbstract',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_TableEntity' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Exception',
    ),
  ),
  'Zend_Service_WindowsAzure_Storage_TableEntityQuery' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_WindowsAzure_Storage_TableInstance' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_WindowsAzure_Storage_StorageEntityAbstract',
    ),
  ),
  'Zend_Service_Yahoo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_ResultSet',
      1 => 'Zend_Service_Exception',
      2 => 'Zend_Service_Yahoo_ImageResultSet',
      3 => 'Zend_Service_Yahoo_LocalResultSet',
      4 => 'Zend_Service_Yahoo_NewsResultSet',
      5 => 'Zend_Service_Yahoo_VideoResultSet',
      6 => 'Zend_Service_Yahoo_WebResultSet',
      7 => 'Zend_Rest_Client',
    ),
  ),
  'Zend_Service_Yahoo_Image' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Yahoo_ImageResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_Result',
    ),
  ),
  'Zend_Service_Yahoo_ImageResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_ResultSet',
      1 => 'Zend_Service_Yahoo_ImageResult',
    ),
  ),
  'Zend_Service_Yahoo_InlinkDataResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_Result',
    ),
  ),
  'Zend_Service_Yahoo_InlinkDataResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_ResultSet',
      1 => 'Zend_Service_Yahoo_InlinkDataResult',
    ),
  ),
  'Zend_Service_Yahoo_LocalResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_Result',
    ),
  ),
  'Zend_Service_Yahoo_LocalResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_ResultSet',
      1 => 'Zend_Service_Yahoo_LocalResult',
    ),
  ),
  'Zend_Service_Yahoo_NewsResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_Result',
    ),
  ),
  'Zend_Service_Yahoo_NewsResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_ResultSet',
      1 => 'Zend_Service_Yahoo_NewsResult',
    ),
  ),
  'Zend_Service_Yahoo_PageDataResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_Result',
    ),
  ),
  'Zend_Service_Yahoo_PageDataResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_ResultSet',
      1 => 'Zend_Service_Yahoo_WebResult',
    ),
  ),
  'Zend_Service_Yahoo_Result' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Service_Yahoo_ResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Exception',
      1 => 'Zend_Service_Yahoo_Result',
    ),
  ),
  'Zend_Service_Yahoo_VideoResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_Result',
    ),
  ),
  'Zend_Service_Yahoo_VideoResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_ResultSet',
      1 => 'Zend_Service_Yahoo_VideoResult',
    ),
  ),
  'Zend_Service_Yahoo_WebResult' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_Result',
    ),
  ),
  'Zend_Service_Yahoo_WebResultSet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Service_Yahoo_ResultSet',
      1 => 'Zend_Service_Yahoo_WebResult',
    ),
  ),
  'Zend_Session' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Session_Abstract',
      1 => 'Zend_Session_Exception',
      2 => 'Zend_Session_SaveHandler_Interface',
      3 => 'Zend_Session_Validator_Interface',
    ),
  ),
  'Zend_Session_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Session_Exception',
    ),
  ),
  'Zend_Session_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Session_Namespace' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Session_Abstract',
      1 => 'Zend_Session_Exception',
    ),
  ),
  'Zend_Session_SaveHandler_DbTable' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Db_Table_Abstract',
      1 => 'Zend_Session_SaveHandler_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Session_SaveHandler_Exception',
      4 => 'Zend_Db_Table_Row_Abstract',
      5 => 'Zend_Db_Table_Definition',
      6 => 'Zend_Db_Table_Exception',
      7 => 'Zend_Db_Adapter_Abstract',
      8 => 'Zend_Cache_Core',
      9 => 'Zend_Db_Table_Select',
      10 => 'Zend_Db_Table_Rowset_Abstract',
    ),
  ),
  'Zend_Session_SaveHandler_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Session_Exception',
    ),
  ),
  'Zend_Session_SaveHandler_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Session_Validator_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Session_Validator_Interface',
    ),
  ),
  'Zend_Session_Validator_HttpUserAgent' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Session_Validator_Abstract',
      1 => 'Zend_Session_Validator_Interface',
    ),
  ),
  'Zend_Session_Validator_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Soap_AutoDiscover' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Interface',
      1 => 'Zend_Soap_Wsdl_Strategy_Interface',
      2 => 'Zend_Uri',
      3 => 'Zend_Soap_AutoDiscover_Exception',
      4 => 'Zend_Server_Reflection_Function_Abstract',
      5 => 'Zend_Soap_Wsdl',
    ),
  ),
  'Zend_Soap_AutoDiscover_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Soap_Client' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Soap_Client_Exception',
      2 => 'Zend_Soap_Client_Common',
    ),
  ),
  'Zend_Soap_Client_Common' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Soap_Client_DotNet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Soap_Client',
      1 => 'Zend_Soap_Client_Exception',
      2 => 'Zend_Config',
      3 => 'Zend_Soap_Client_Common',
    ),
  ),
  'Zend_Soap_Client_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Soap_Client_Local' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Soap_Client',
      1 => 'Zend_Soap_Server',
      2 => 'Zend_Soap_Client_Common',
      3 => 'Zend_Config',
      4 => 'Zend_Soap_Client_Exception',
    ),
  ),
  'Zend_Soap_Server' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Interface',
      1 => 'Zend_Config',
      2 => 'Zend_Soap_Server_Exception',
    ),
  ),
  'Zend_Soap_Server_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Soap_Wsdl' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Soap_Wsdl_Strategy_Interface',
      1 => 'Zend_Uri_Http',
    ),
  ),
  'Zend_Soap_Wsdl_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Soap_Wsdl_Strategy_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Soap_Wsdl_Strategy_Interface',
      1 => 'Zend_Soap_Wsdl',
    ),
  ),
  'Zend_Soap_Wsdl_Strategy_AnyType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Soap_Wsdl_Strategy_Interface',
      1 => 'Zend_Soap_Wsdl',
    ),
  ),
  'Zend_Soap_Wsdl_Strategy_ArrayOfTypeComplex' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Soap_Wsdl_Strategy_DefaultComplexType',
      1 => 'Zend_Soap_Wsdl_Strategy_Interface',
      2 => 'Zend_Soap_Wsdl',
    ),
  ),
  'Zend_Soap_Wsdl_Strategy_ArrayOfTypeSequence' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Soap_Wsdl_Strategy_DefaultComplexType',
      1 => 'Zend_Soap_Wsdl_Strategy_Interface',
      2 => 'Zend_Soap_Wsdl_Exception',
      3 => 'Zend_Soap_Wsdl',
    ),
  ),
  'Zend_Soap_Wsdl_Strategy_Composite' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Soap_Wsdl_Strategy_Interface',
      1 => 'Zend_Soap_Wsdl_Exception',
      2 => 'Zend_Soap_Wsdl',
    ),
  ),
  'Zend_Soap_Wsdl_Strategy_DefaultComplexType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Soap_Wsdl_Strategy_Abstract',
      1 => 'Zend_Soap_Wsdl_Strategy_Interface',
      2 => 'Zend_Soap_Wsdl',
    ),
  ),
  'Zend_Soap_Wsdl_Strategy_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tag_Cloud' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Tag_Taggable',
      2 => 'Zend_Tag_ItemList',
      3 => 'Zend_Tag_Cloud_Decorator_Cloud',
      4 => 'Zend_Tag_Cloud_Decorator_Tag',
      5 => 'Zend_Loader_PluginLoader_Interface',
      6 => 'Zend_Loader_PluginLoader',
    ),
  ),
  'Zend_Tag_Cloud_Decorator_Cloud' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tag_Cloud',
    ),
  ),
  'Zend_Tag_Cloud_Decorator_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tag_Cloud_Exception',
    ),
  ),
  'Zend_Tag_Cloud_Decorator_HtmlCloud' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tag_Cloud_Decorator_Cloud',
      1 => 'Zend_Tag_Cloud',
    ),
  ),
  'Zend_Tag_Cloud_Decorator_HtmlTag' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tag_Cloud_Decorator_Tag',
      1 => 'Zend_Tag_Cloud_Decorator_Exception',
      2 => 'Zend_Tag_ItemList',
      3 => 'Zend_Tag_Cloud',
    ),
  ),
  'Zend_Tag_Cloud_Decorator_Tag' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tag_Cloud',
      1 => 'Zend_Tag_ItemList',
    ),
  ),
  'Zend_Tag_Cloud_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tag_Exception',
    ),
  ),
  'Zend_Tag_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Tag_Item' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tag_Taggable',
      1 => 'Zend_Config',
      2 => 'Zend_Tag_Exception',
    ),
  ),
  'Zend_Tag_ItemList' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tag_Exception',
      1 => 'Zend_Tag_Taggable',
    ),
  ),
  'Zend_Tag_Taggable' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Text_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Text_Figlet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Text_Figlet_Exception',
    ),
  ),
  'Zend_Text_Figlet_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Text_Exception',
    ),
  ),
  'Zend_Text_MultiByte' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Text_Table' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Text_Table_Exception',
      2 => 'Zend_Text_Table_Decorator_Interface',
      3 => 'Zend_Loader_PluginLoader',
      4 => 'Zend_Text_Table_Row',
    ),
  ),
  'Zend_Text_Table_Column' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Text_Table_Exception',
    ),
  ),
  'Zend_Text_Table_Decorator_Ascii' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Text_Table_Decorator_Interface',
    ),
  ),
  'Zend_Text_Table_Decorator_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Text_Table_Decorator_Unicode' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Text_Table_Decorator_Interface',
    ),
  ),
  'Zend_Text_Table_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Text_Exception',
    ),
  ),
  'Zend_Text_Table_Row' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Text_Table_Column',
      1 => 'Zend_Text_Table_Exception',
      2 => 'Zend_Text_Table_Decorator_Interface',
    ),
  ),
  'Zend_TimeSync' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_TimeSync_Exception',
      1 => 'Zend_Locale',
    ),
  ),
  'Zend_TimeSync_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_TimeSync_Ntp' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_TimeSync_Protocol',
      1 => 'Zend_TimeSync_Exception',
      2 => 'Zend_Locale',
      3 => 'Zend_Date',
    ),
  ),
  'Zend_TimeSync_Protocol' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_TimeSync_Exception',
      1 => 'Zend_Locale',
      2 => 'Zend_Date',
    ),
  ),
  'Zend_TimeSync_Sntp' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_TimeSync_Protocol',
      1 => 'Zend_TimeSync_Exception',
      2 => 'Zend_Locale',
      3 => 'Zend_Date',
    ),
  ),
  'Zend_Tool_Framework_Action_Base' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Action_Interface',
    ),
  ),
  'Zend_Tool_Framework_Action_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Exception',
    ),
  ),
  'Zend_Tool_Framework_Action_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Action_Repository' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      1 => 'Zend_Tool_Framework_Registry_Interface',
      2 => 'Zend_Tool_Framework_Action_Interface',
    ),
  ),
  'Zend_Tool_Framework_Client_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      1 => 'Zend_Tool_Framework_Registry_Interface',
    ),
  ),
  'Zend_Tool_Framework_Client_Config' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Exception',
      1 => 'Zend_Config',
      2 => 'Zend_Config_Writer_FileAbstract',
    ),
  ),
  'Zend_Tool_Framework_Client_Console' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Abstract',
      1 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      2 => 'Zend_Tool_Framework_Client_Interactive_InputInterface',
      3 => 'Zend_Tool_Framework_Client_Interactive_OutputInterface',
      4 => 'Zend_Tool_Framework_Client_Interactive_InputRequest',
      5 => 'Zend_Tool_Framework_Provider_Interface',
      6 => 'Zend_Tool_Framework_Action_Interface',
      7 => 'Zend_Tool_Framework_Registry_Interface',
    ),
  ),
  'Zend_Tool_Framework_Client_Console_ArgumentParser' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      1 => 'Zend_Tool_Framework_Registry_Interface',
    ),
  ),
  'Zend_Tool_Framework_Client_Console_HelpSystem' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Registry_Interface',
      1 => 'Zend_Tool_Framework_Metadata_Tool',
    ),
  ),
  'Zend_Tool_Framework_Client_Console_Manifest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      1 => 'Zend_Tool_Framework_Manifest_MetadataManifestable',
      2 => 'Zend_Tool_Framework_Manifest_Interface',
      3 => 'Zend_Tool_Framework_Registry_Interface',
    ),
  ),
  'Zend_Tool_Framework_Client_Console_ResponseDecorator_AlignCenter' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Response_ContentDecorator_Interface',
    ),
  ),
  'Zend_Tool_Framework_Client_Console_ResponseDecorator_Blockize' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Response_ContentDecorator_Interface',
    ),
  ),
  'Zend_Tool_Framework_Client_Console_ResponseDecorator_Colorizer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Response_ContentDecorator_Interface',
    ),
  ),
  'Zend_Tool_Framework_Client_Console_ResponseDecorator_Indention' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Response_ContentDecorator_Interface',
    ),
  ),
  'Zend_Tool_Framework_Client_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Exception',
    ),
  ),
  'Zend_Tool_Framework_Client_Interactive_InputHandler' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Tool_Framework_Client_Interactive_InputInterface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Interactive_InputRequest',
      1 => 'Zend_Tool_Framework_Client_Interactive_InputResponse',
    ),
  ),
  'Zend_Tool_Framework_Client_Interactive_InputRequest' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Tool_Framework_Client_Interactive_InputResponse' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Tool_Framework_Client_Interactive_OutputInterface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Client_Manifest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      1 => 'Zend_Tool_Framework_Manifest_MetadataManifestable',
      2 => 'Zend_Tool_Framework_Manifest_Interface',
      3 => 'Zend_Tool_Framework_Registry_Interface',
      4 => 'Zend_Tool_Framework_Client_Console_Manifest',
    ),
  ),
  'Zend_Tool_Framework_Client_Request' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Tool_Framework_Client_Response' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Response_ContentDecorator_Interface',
    ),
  ),
  'Zend_Tool_Framework_Client_Response_ContentDecorator_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Client_Response_ContentDecorator_Separator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Response_ContentDecorator_Interface',
    ),
  ),
  'Zend_Tool_Framework_Client_Storage' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Tool_Framework_Client_Storage_AdapterInterface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Client_Storage_Directory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Storage_AdapterInterface',
    ),
  ),
  'Zend_Tool_Framework_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Tool_Framework_Loader_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Loader_Interface',
      1 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      2 => 'Zend_Tool_Framework_Registry_Interface',
    ),
  ),
  'Zend_Tool_Framework_Loader_BasicLoader' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Loader_Interface',
      1 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      2 => 'Zend_Tool_Framework_Registry_Interface',
      3 => 'Zend_Tool_Framework_Loader_Abstract',
    ),
  ),
  'Zend_Tool_Framework_Loader_IncludePathLoader' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Loader_Abstract',
      1 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      2 => 'Zend_Tool_Framework_Loader_Interface',
      3 => 'Zend_Tool_Framework_Registry_Interface',
    ),
  ),
  'Zend_Tool_Framework_Loader_IncludePathLoader_RecursiveFilterIterator' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Tool_Framework_Loader_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Manifest_ActionManifestable' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Manifest_Interface',
      1 => 'Zend_Tool_Framework_Action_Interface',
    ),
  ),
  'Zend_Tool_Framework_Manifest_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Exception',
    ),
  ),
  'Zend_Tool_Framework_Manifest_Indexable' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Manifest_Interface',
      1 => 'Zend_Tool_Framework_Action_Interface',
    ),
  ),
  'Zend_Tool_Framework_Manifest_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Manifest_MetadataManifestable' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Manifest_Interface',
    ),
  ),
  'Zend_Tool_Framework_Manifest_ProviderManifestable' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Manifest_Interface',
      1 => 'Zend_Tool_Framework_Provider_Interface',
    ),
  ),
  'Zend_Tool_Framework_Manifest_Repository' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      1 => 'Zend_Tool_Framework_Registry_Interface',
      2 => 'Zend_Tool_Framework_Manifest_Interface',
    ),
  ),
  'Zend_Tool_Framework_Metadata_Attributable' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Metadata_Basic' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Metadata_Interface',
      1 => 'Zend_Tool_Framework_Metadata_Attributable',
    ),
  ),
  'Zend_Tool_Framework_Metadata_Dynamic' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Metadata_Interface',
      1 => 'Zend_Tool_Framework_Metadata_Attributable',
    ),
  ),
  'Zend_Tool_Framework_Metadata_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Metadata_Tool' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Metadata_Basic',
      1 => 'Zend_Tool_Framework_Metadata_Attributable',
      2 => 'Zend_Tool_Framework_Metadata_Interface',
      3 => 'Zend_Tool_Framework_Client_Abstract',
      4 => 'Zend_Tool_Framework_Action_Interface',
      5 => 'Zend_Tool_Framework_Provider_Interface',
    ),
  ),
  'Zend_Tool_Framework_Provider_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Provider_Interface',
      1 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      2 => 'Zend_Tool_Framework_Registry_Interface',
    ),
  ),
  'Zend_Tool_Framework_Provider_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Exception',
    ),
  ),
  'Zend_Tool_Framework_Provider_Initializable' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Provider_Interactable' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Provider_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Provider_Pretendable' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Provider_Repository' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      1 => 'Zend_Tool_Framework_Registry_Interface',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Provider_Signature',
      4 => 'Zend_Tool_Framework_Action_Interface',
    ),
  ),
  'Zend_Tool_Framework_Provider_Signature' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      1 => 'Zend_Tool_Framework_Provider_Interface',
      2 => 'Zend_Tool_Framework_Registry_Interface',
      3 => 'Zend_Reflection_Class',
    ),
  ),
  'Zend_Tool_Framework_Registry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Registry_Interface',
      1 => 'Zend_Tool_Framework_Client_Abstract',
      2 => 'Zend_Tool_Framework_Client_Config',
      3 => 'Zend_Tool_Framework_Client_Storage',
      4 => 'Zend_Tool_Framework_Loader_Interface',
      5 => 'Zend_Tool_Framework_Loader_Abstract',
      6 => 'Zend_Tool_Framework_Action_Repository',
      7 => 'Zend_Tool_Framework_Provider_Repository',
      8 => 'Zend_Tool_Framework_Manifest_Repository',
      9 => 'Zend_Tool_Framework_Client_Request',
      10 => 'Zend_Tool_Framework_Client_Response',
    ),
  ),
  'Zend_Tool_Framework_Registry_EnabledInterface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Framework_Registry_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Exception',
    ),
  ),
  'Zend_Tool_Framework_Registry_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Abstract',
      1 => 'Zend_Tool_Framework_Registry',
      2 => 'Zend_Tool_Framework_Loader_Abstract',
      3 => 'Zend_Tool_Framework_Action_Repository',
      4 => 'Zend_Tool_Framework_Provider_Repository',
      5 => 'Zend_Tool_Framework_Manifest_Repository',
      6 => 'Zend_Tool_Framework_Client_Request',
      7 => 'Zend_Tool_Framework_Client_Response',
    ),
  ),
  'Zend_Tool_Framework_System_Action_Create' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Action_Base',
      1 => 'Zend_Tool_Framework_Action_Interface',
    ),
  ),
  'Zend_Tool_Framework_System_Action_Delete' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Action_Base',
      1 => 'Zend_Tool_Framework_Action_Interface',
    ),
  ),
  'Zend_Tool_Framework_System_Manifest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Manifest_ProviderManifestable',
      1 => 'Zend_Tool_Framework_Manifest_Interface',
      2 => 'Zend_Tool_Framework_Manifest_ActionManifestable',
    ),
  ),
  'Zend_Tool_Framework_System_Provider_Config' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Client_Config',
      4 => 'Zend_Tool_Framework_Registry_Interface',
    ),
  ),
  'Zend_Tool_Framework_System_Provider_Manifest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Provider_Interface',
      1 => 'Zend_Tool_Framework_Registry_EnabledInterface',
    ),
  ),
  'Zend_Tool_Framework_System_Provider_Phpinfo' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Provider_Interface',
    ),
  ),
  'Zend_Tool_Framework_System_Provider_Version' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Provider_Interface',
      1 => 'Zend_Tool_Framework_Registry_EnabledInterface',
    ),
  ),
  'Zend_Tool_Project_Context_Content_Engine' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Storage',
      1 => 'Zend_Tool_Project_Context_Interface',
    ),
  ),
  'Zend_Tool_Project_Context_Content_Engine_CodeGenerator' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Storage',
      1 => 'Zend_Tool_Project_Context_Interface',
    ),
  ),
  'Zend_Tool_Project_Context_Content_Engine_Phtml' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Client_Storage',
      1 => 'Zend_Tool_Project_Context_Interface',
    ),
  ),
  'Zend_Tool_Project_Context_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Exception',
    ),
  ),
  'Zend_Tool_Project_Context_Filesystem_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Interface',
      1 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Filesystem_Directory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Filesystem_File' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Project_Context_Repository' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Interface',
    ),
  ),
  'Zend_Tool_Project_Context_System_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Project_Context_System_NotOverwritable' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Project_Context_System_ProjectDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_System_Interface',
      3 => 'Zend_Tool_Project_Context_System_NotOverwritable',
      4 => 'Zend_Tool_Project_Context_System_TopLevelRestrictable',
      5 => 'Zend_Tool_Project_Profile_Resource',
      6 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_System_ProjectProfileFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_System_Interface',
      3 => 'Zend_Tool_Project_Context_System_NotOverwritable',
      4 => 'Zend_Tool_Project_Profile',
      5 => 'Zend_Tool_Project_Profile_Resource',
      6 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_System_ProjectProvidersDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_System_Interface',
      3 => 'Zend_Tool_Project_Context_System_NotOverwritable',
      4 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      5 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_System_TopLevelRestrictable' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Tool_Project_Context_Zf_AbstractClassFile' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ActionMethod' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Interface',
      1 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ApisDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ApplicationConfigFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ApplicationDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_BootstrapFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_CacheDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ConfigFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ConfigsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ControllerFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_CodeGenerator_Php_Class',
      3 => 'Zend_Tool_Project_Profile_Resource',
      4 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ControllersDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_DataDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_DbTableDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_DbTableFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Zf_AbstractClassFile',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_File',
      4 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_DocsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_FormFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Zf_AbstractClassFile',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_File',
      4 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_FormsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_HtaccessFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_LayoutScriptFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Zf_ViewScriptFile',
      3 => 'Zend_Tool_Project_Profile_Resource',
      4 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_LayoutScriptsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_LayoutsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_LibraryDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_LocalesDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_LogsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ModelFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Zf_AbstractClassFile',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_File',
      4 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ModelsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ModuleDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Zf_ControllerFile',
      3 => 'Zend_Tool_Project_Profile_Resource',
      4 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ModulesDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ProjectProviderFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_PublicDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_PublicImagesDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_PublicIndexFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_PublicScriptsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_PublicStylesheetsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_SearchIndexesDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_SessionsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TemporaryDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestApplicationActionMethod' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Interface',
      1 => 'Zend_Tool_Project_Context_Zf_ActionMethod',
      2 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestApplicationBootstrapFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestApplicationControllerDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestApplicationControllerFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestApplicationDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestApplicationModuleDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Zf_ControllerFile',
      3 => 'Zend_Tool_Project_Profile_Resource',
      4 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestApplicationModulesDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestLibraryBootstrapFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestLibraryDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestLibraryFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestLibraryNamespaceDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestPHPUnitBootstrapFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestPHPUnitConfigFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_TestsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_UploadsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ViewControllerScriptsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ViewFiltersDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ViewHelpersDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ViewScriptFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_File',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile_Resource',
      3 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ViewScriptsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ViewsDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Context_Zf_ZfStandardLibraryDirectory' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Context_Filesystem_Directory',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Context_Filesystem_Abstract',
      3 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Tool_Project_Profile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Profile_Resource_Container',
      1 => 'Zend_Tool_Project_Profile_Resource_SearchConstraints',
      2 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Profile_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Exception',
    ),
  ),
  'Zend_Tool_Project_Profile_FileParser_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Profile',
    ),
  ),
  'Zend_Tool_Project_Profile_FileParser_Xml' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Profile_FileParser_Interface',
      1 => 'Zend_Tool_Project_Profile',
      2 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Profile_Iterator_ContextFilter' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Tool_Project_Profile_Iterator_EnabledResourceFilter' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Tool_Project_Profile_Resource' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Profile_Resource_Container',
      1 => 'Zend_Tool_Project_Context_Interface',
      2 => 'Zend_Tool_Project_Profile',
      3 => 'Zend_Tool_Project_Profile_Resource_SearchConstraints',
    ),
  ),
  'Zend_Tool_Project_Profile_Resource_Container' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Profile_Resource_SearchConstraints',
      1 => 'Zend_Tool_Project_Profile_Resource',
    ),
  ),
  'Zend_Tool_Project_Profile_Resource_SearchConstraints' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Tool_Project_Provider_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Provider_Initializable',
      4 => 'Zend_Tool_Project_Profile',
      5 => 'Zend_Tool_Framework_Registry_Interface',
    ),
  ),
  'Zend_Tool_Project_Provider_Action' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Framework_Provider_Pretendable',
      5 => 'Zend_Tool_Project_Profile',
      6 => 'Zend_Tool_Project_Profile_Resource',
      7 => 'Zend_Tool_Framework_Registry_Interface',
      8 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_Application' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Framework_Provider_Pretendable',
      5 => 'Zend_Tool_Project_Profile',
      6 => 'Zend_Tool_Framework_Registry_Interface',
      7 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_Controller' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Framework_Provider_Pretendable',
      5 => 'Zend_Tool_Project_Profile',
      6 => 'Zend_Tool_Project_Profile_Resource',
      7 => 'Zend_Tool_Framework_Registry_Interface',
      8 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_DbAdapter' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Framework_Provider_Interactable',
      5 => 'Zend_Tool_Framework_Provider_Pretendable',
      6 => 'Zend_Tool_Project_Profile',
      7 => 'Zend_Tool_Framework_Registry_Interface',
      8 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_DbTable' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Framework_Provider_Pretendable',
      5 => 'Zend_Tool_Project_Profile',
      6 => 'Zend_Tool_Framework_Registry_Interface',
      7 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Exception',
    ),
  ),
  'Zend_Tool_Project_Provider_Form' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Project_Profile',
      5 => 'Zend_Tool_Project_Profile_Resource',
      6 => 'Zend_Tool_Framework_Registry_Interface',
      7 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_Layout' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Framework_Provider_Pretendable',
      5 => 'Zend_Tool_Project_Profile',
      6 => 'Zend_Tool_Framework_Registry_Interface',
      7 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_Manifest' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Framework_Manifest_ProviderManifestable',
      1 => 'Zend_Tool_Framework_Manifest_Interface',
    ),
  ),
  'Zend_Tool_Project_Provider_Model' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Project_Profile',
      5 => 'Zend_Tool_Project_Profile_Resource',
      6 => 'Zend_Tool_Framework_Registry_Interface',
      7 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_Module' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Framework_Provider_Pretendable',
      5 => 'Zend_Tool_Project_Profile',
      6 => 'Zend_Tool_Framework_Registry_Interface',
      7 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_Profile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Project_Profile',
      5 => 'Zend_Tool_Framework_Registry_Interface',
      6 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_Project' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Project_Profile',
      5 => 'Zend_Tool_Framework_Registry_Interface',
      6 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_ProjectProvider' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Project_Profile',
      5 => 'Zend_Tool_Project_Profile_Resource',
      6 => 'Zend_Tool_Project_Provider_Exception',
      7 => 'Zend_Tool_Framework_Registry_Interface',
      8 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_Test' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Project_Profile',
      5 => 'Zend_Tool_Project_Profile_Resource',
      6 => 'Zend_Tool_Framework_Registry_Interface',
      7 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Tool_Project_Provider_View' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Tool_Project_Provider_Abstract',
      1 => 'Zend_Tool_Framework_Provider_Initializable',
      2 => 'Zend_Tool_Framework_Provider_Interface',
      3 => 'Zend_Tool_Framework_Registry_EnabledInterface',
      4 => 'Zend_Tool_Project_Profile',
      5 => 'Zend_Tool_Project_Profile_Resource',
      6 => 'Zend_Tool_Framework_Registry_Interface',
      7 => 'Zend_Tool_Framework_Provider_Abstract',
    ),
  ),
  'Zend_Translate' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Translate_Exception',
      2 => 'Zend_Translate_Adapter',
      3 => 'Zend_Cache_Core',
    ),
  ),
  'Zend_Translate_Adapter' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Config',
      1 => 'Zend_Translate_Exception',
      2 => 'Zend_Locale',
      3 => 'Zend_Cache_Core',
      4 => 'Zend_Cache',
    ),
  ),
  'Zend_Translate_Adapter_Array' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Translate_Adapter',
      1 => 'Zend_Config',
      2 => 'Zend_Translate_Exception',
      3 => 'Zend_Locale',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Cache',
    ),
  ),
  'Zend_Translate_Adapter_Csv' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Translate_Adapter',
      1 => 'Zend_Config',
      2 => 'Zend_Translate_Exception',
      3 => 'Zend_Locale',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Cache',
    ),
  ),
  'Zend_Translate_Adapter_Gettext' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Translate_Adapter',
      1 => 'Zend_Config',
      2 => 'Zend_Translate_Exception',
      3 => 'Zend_Locale',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Cache',
    ),
  ),
  'Zend_Translate_Adapter_Ini' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Translate_Adapter',
      1 => 'Zend_Translate_Exception',
      2 => 'Zend_Config',
      3 => 'Zend_Locale',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Cache',
    ),
  ),
  'Zend_Translate_Adapter_Qt' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Translate_Adapter',
      1 => 'Zend_Config',
      2 => 'Zend_Translate_Exception',
      3 => 'Zend_Locale',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Cache',
    ),
  ),
  'Zend_Translate_Adapter_Tbx' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Translate_Adapter',
      1 => 'Zend_Config',
      2 => 'Zend_Translate_Exception',
      3 => 'Zend_Locale',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Cache',
    ),
  ),
  'Zend_Translate_Adapter_Tmx' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Translate_Adapter',
      1 => 'Zend_Config',
      2 => 'Zend_Translate_Exception',
      3 => 'Zend_Locale',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Cache',
    ),
  ),
  'Zend_Translate_Adapter_Xliff' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Translate_Adapter',
      1 => 'Zend_Config',
      2 => 'Zend_Translate_Exception',
      3 => 'Zend_Locale',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Cache',
    ),
  ),
  'Zend_Translate_Adapter_XmlTm' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Translate_Adapter',
      1 => 'Zend_Config',
      2 => 'Zend_Translate_Exception',
      3 => 'Zend_Locale',
      4 => 'Zend_Cache_Core',
      5 => 'Zend_Cache',
    ),
  ),
  'Zend_Translate_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Translate_Plural' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Uri' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Uri_Exception',
      1 => 'Zend_Config',
    ),
  ),
  'Zend_Uri_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Uri_Http' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Uri',
      1 => 'Zend_Uri_Exception',
      2 => 'Zend_Config',
    ),
  ),
  'Zend_Validate' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Interface',
      1 => 'Zend_Validate_Exception',
      2 => 'Zend_Translate_Adapter',
      3 => 'Zend_Translate',
    ),
  ),
  'Zend_Validate_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Interface',
      1 => 'Zend_Validate_Exception',
      2 => 'Zend_Translate',
      3 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Alnum' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Filter_Alnum',
      4 => 'Zend_Validate_Exception',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Alpha' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Filter_Alpha',
      4 => 'Zend_Validate_Exception',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Barcode' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Barcode_AdapterAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_AdapterInterface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Validate_Barcode_Code25' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Code25interleaved' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Code39' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Code39ext' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Code93' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Code93ext' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Ean12' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Ean13' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Ean14' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Ean18' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Ean2' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Ean5' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Ean8' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Gtin12' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Gtin13' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Gtin14' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Identcode' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Intelligentmail' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Issn' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Itf14' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Leitcode' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Planet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Postnet' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Royalmail' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Sscc' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Upca' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Barcode_Upce' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Barcode_AdapterAbstract',
      1 => 'Zend_Validate_Barcode_AdapterInterface',
    ),
  ),
  'Zend_Validate_Between' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Callback' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Ccnum' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_CreditCard' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Date' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Locale',
      4 => 'Zend_Date',
      5 => 'Zend_Validate_Exception',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Db_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Db_Adapter_Abstract',
      4 => 'Zend_Db_Select',
      5 => 'Zend_Validate_Exception',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Db_NoRecordExists' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Db_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Db_Adapter_Abstract',
      4 => 'Zend_Db_Select',
      5 => 'Zend_Validate_Abstract',
      6 => 'Zend_Validate_Exception',
      7 => 'Zend_Translate',
      8 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Db_RecordExists' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Db_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Db_Adapter_Abstract',
      4 => 'Zend_Db_Select',
      5 => 'Zend_Validate_Abstract',
      6 => 'Zend_Validate_Exception',
      7 => 'Zend_Translate',
      8 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Digits' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_EmailAddress' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Validate_Hostname',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Validate_File_Count' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Validate_StringLength',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_Crc32' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_File_Hash',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Abstract',
      4 => 'Zend_Validate_Exception',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_ExcludeExtension' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_File_Extension',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Abstract',
      4 => 'Zend_Validate_Exception',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_ExcludeMimeType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_File_MimeType',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Validate_File_Extension',
      4 => 'Zend_Validate_Abstract',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_Exists' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_File_Extension',
      4 => 'Zend_Validate_Exception',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_Extension' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_FilesSize' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_File_Size',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Validate_StringLength',
      5 => 'Zend_Validate_Abstract',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_Hash' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_ImageSize' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Validate_StringLength',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_IsCompressed' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_File_MimeType',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Validate_File_Extension',
      5 => 'Zend_Validate_Abstract',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_IsImage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_File_MimeType',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Validate_File_Extension',
      5 => 'Zend_Validate_Abstract',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_Md5' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_File_Hash',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Abstract',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_MimeType' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Validate_File_Extension',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_NotExists' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_File_Exists',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_File_Extension',
      4 => 'Zend_Validate_Abstract',
      5 => 'Zend_Validate_Exception',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_Sha1' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_File_Hash',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Abstract',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_Size' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Validate_StringLength',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_Upload' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_File_WordCount' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_File_Count',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Validate_StringLength',
      5 => 'Zend_Validate_Abstract',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Float' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Locale',
      4 => 'Zend_Validate_Exception',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_GreaterThan' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Hex' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Hostname' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Ip',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Iban' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Locale',
      4 => 'Zend_Validate_Date',
      5 => 'Zend_Validate_Exception',
      6 => 'Zend_Translate',
      7 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Identical' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_InArray' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Int' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Locale',
      4 => 'Zend_Validate_Exception',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Exception',
    ),
  ),
  'Zend_Validate_Ip' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Isbn' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_LessThan' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_NotEmpty' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_PostCode' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Locale',
      3 => 'Zend_Config',
      4 => 'Zend_Validate_Exception',
      5 => 'Zend_Translate',
      6 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Regex' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Sitemap_Changefreq' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Sitemap_Lastmod' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Sitemap_Loc' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_Sitemap_Priority' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Validate_Exception',
      3 => 'Zend_Translate',
      4 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Validate_StringLength' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Validate_Abstract',
      1 => 'Zend_Validate_Interface',
      2 => 'Zend_Config',
      3 => 'Zend_Validate_Exception',
      4 => 'Zend_Translate',
      5 => 'Zend_Translate_Adapter',
    ),
  ),
  'Zend_Version' => 
  array (
    'instantiable' => true,
  ),
  'Zend_View' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Abstract',
      1 => 'Zend_View_Interface',
      2 => 'Zend_View_Exception',
      3 => 'Zend_Loader_PluginLoader',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_View_Interface',
      1 => 'Zend_View_Exception',
      2 => 'Zend_Loader_PluginLoader',
      3 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_View_Helper_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Interface',
      1 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_Action' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_BaseUrl' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_Currency' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Currency',
      3 => 'Zend_Locale',
      4 => 'Zend_View_Exception',
      5 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_Cycle' => 
  array (
    'instantiable' => true,
  ),
  'Zend_View_Helper_DeclareVars' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_Doctype' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_Fieldset' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_Form' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormButton' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormCheckbox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormElement' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HtmlElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormErrors' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormFile' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormHidden' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormImage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormLabel' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormMultiCheckbox' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormRadio',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Helper_FormElement',
      4 => 'Zend_View_Interface',
      5 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormNote' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormPassword' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormRadio' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormReset' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormSelect' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormSubmit' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormText' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_FormTextarea' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_Gravatar' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HtmlElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Exception',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_HeadLink' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Placeholder_Container_Standalone',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Helper_Placeholder_Registry',
      3 => 'Zend_View_Helper_Placeholder_Container_Abstract',
      4 => 'Zend_View_Interface',
      5 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_HeadMeta' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Placeholder_Container_Standalone',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Exception',
      3 => 'Zend_View_Helper_Placeholder_Registry',
      4 => 'Zend_View_Helper_Placeholder_Container_Abstract',
      5 => 'Zend_View_Interface',
      6 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_HeadScript' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Placeholder_Container_Standalone',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Exception',
      3 => 'Zend_View_Helper_Placeholder_Registry',
      4 => 'Zend_View_Helper_Placeholder_Container_Abstract',
      5 => 'Zend_View_Interface',
      6 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_HeadStyle' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Placeholder_Container_Standalone',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Exception',
      3 => 'Zend_View_Helper_Placeholder_Registry',
      4 => 'Zend_View_Helper_Placeholder_Container_Abstract',
      5 => 'Zend_View_Interface',
      6 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_HeadTitle' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Placeholder_Container_Standalone',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_Translate_Adapter',
      4 => 'Zend_View_Helper_Placeholder_Registry',
      5 => 'Zend_View_Helper_Placeholder_Container_Abstract',
      6 => 'Zend_View_Interface',
      7 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_HtmlElement' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_HtmlFlash' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HtmlObject',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_HtmlList' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_FormElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_HtmlObject' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HtmlElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_HtmlPage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HtmlObject',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_HtmlQuicktime' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HtmlObject',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_InlineScript' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HeadScript',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Exception',
      3 => 'Zend_View_Helper_Placeholder_Registry',
      4 => 'Zend_View_Helper_Placeholder_Container_Standalone',
      5 => 'Zend_View_Helper_Placeholder_Container_Abstract',
      6 => 'Zend_View_Interface',
      7 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_Interface' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_Json' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_Layout' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Layout',
      3 => 'Zend_Layout_Controller_Action_Helper_Layout',
      4 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_Navigation' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Navigation_HelperAbstract',
      1 => 'Zend_View_Helper_Navigation_Helper',
      2 => 'Zend_View_Helper_Interface',
      3 => 'Zend_Navigation_Container',
      4 => 'Zend_View_Exception',
      5 => 'Zend_Navigation_Exception',
      6 => 'Zend_Loader_PluginLoader_Exception',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Acl',
      9 => 'Zend_Acl_Role_Interface',
      10 => 'Zend_Navigation_Page',
      11 => 'Zend_View_Interface',
      12 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_Navigation_Breadcrumbs' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Navigation_HelperAbstract',
      1 => 'Zend_View_Helper_Navigation_Helper',
      2 => 'Zend_View_Helper_Interface',
      3 => 'Zend_Navigation_Container',
      4 => 'Zend_Translate_Adapter',
      5 => 'Zend_Acl',
      6 => 'Zend_View_Exception',
      7 => 'Zend_Acl_Role_Interface',
      8 => 'Zend_Navigation_Exception',
      9 => 'Zend_Navigation_Page',
      10 => 'Zend_View_Interface',
      11 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_Navigation_Helper' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Navigation_Container',
      1 => 'Zend_Translate_Adapter',
      2 => 'Zend_Acl',
      3 => 'Zend_View_Exception',
      4 => 'Zend_Acl_Role_Interface',
      5 => 'Zend_View_Helper_Navigation_HelperAbstract',
    ),
  ),
  'Zend_View_Helper_Navigation_HelperAbstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HtmlElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Helper_Navigation_Helper',
      3 => 'Zend_Navigation_Container',
      4 => 'Zend_Translate_Adapter',
      5 => 'Zend_Acl',
      6 => 'Zend_View_Exception',
      7 => 'Zend_Acl_Role_Interface',
      8 => 'Zend_Navigation_Exception',
      9 => 'Zend_Navigation_Page',
      10 => 'Zend_View_Interface',
      11 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_Navigation_Links' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Navigation_HelperAbstract',
      1 => 'Zend_View_Helper_Navigation_Helper',
      2 => 'Zend_View_Helper_Interface',
      3 => 'Zend_Navigation_Container',
      4 => 'Zend_Navigation_Exception',
      5 => 'Zend_Navigation_Page',
      6 => 'Zend_View_Exception',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Acl',
      9 => 'Zend_Acl_Role_Interface',
      10 => 'Zend_View_Interface',
      11 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_Navigation_Menu' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Navigation_HelperAbstract',
      1 => 'Zend_View_Helper_Navigation_Helper',
      2 => 'Zend_View_Helper_Interface',
      3 => 'Zend_Navigation_Container',
      4 => 'Zend_Navigation_Page',
      5 => 'Zend_Translate_Adapter',
      6 => 'Zend_Acl',
      7 => 'Zend_View_Exception',
      8 => 'Zend_Acl_Role_Interface',
      9 => 'Zend_Navigation_Exception',
      10 => 'Zend_View_Interface',
      11 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_Navigation_Sitemap' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Navigation_HelperAbstract',
      1 => 'Zend_View_Helper_Navigation_Helper',
      2 => 'Zend_View_Helper_Interface',
      3 => 'Zend_Navigation_Container',
      4 => 'Zend_Uri_Exception',
      5 => 'Zend_Navigation_Page',
      6 => 'Zend_View_Exception',
      7 => 'Zend_Translate_Adapter',
      8 => 'Zend_Acl',
      9 => 'Zend_Acl_Role_Interface',
      10 => 'Zend_Navigation_Exception',
      11 => 'Zend_View_Interface',
      12 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_PaginationControl' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Interface',
      1 => 'Zend_Paginator',
      2 => 'Zend_View_Exception',
    ),
  ),
  'Zend_View_Helper_Partial' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_PartialLoop' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Partial',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
      3 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_Partial_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Exception',
    ),
  ),
  'Zend_View_Helper_Placeholder' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Helper_Placeholder_Container_Abstract',
      3 => 'Zend_View_Helper_Placeholder_Registry',
      4 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_Placeholder_Container' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Placeholder_Container_Abstract',
    ),
  ),
  'Zend_View_Helper_Placeholder_Container_Abstract' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Placeholder_Container',
    ),
  ),
  'Zend_View_Helper_Placeholder_Container_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Exception',
    ),
  ),
  'Zend_View_Helper_Placeholder_Container_Standalone' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Helper_Placeholder_Registry',
      3 => 'Zend_View_Helper_Placeholder_Container_Abstract',
      4 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_Placeholder_Registry' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Placeholder_Container_Abstract',
    ),
  ),
  'Zend_View_Helper_Placeholder_Registry_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Exception',
    ),
  ),
  'Zend_View_Helper_RenderToPlaceholder' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_ServerUrl' => 
  array (
    'instantiable' => true,
  ),
  'Zend_View_Helper_TinySrc' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_HtmlElement',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Exception',
      3 => 'Zend_View_Interface',
      4 => 'Zend_View_Helper_Abstract',
    ),
  ),
  'Zend_View_Helper_Translate' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Translate',
      3 => 'Zend_Translate_Adapter',
      4 => 'Zend_View_Exception',
      5 => 'Zend_Locale',
      6 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_Url' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Helper_UserAgent' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_View_Helper_Abstract',
      1 => 'Zend_View_Helper_Interface',
      2 => 'Zend_Http_UserAgent',
      3 => 'Zend_View_Interface',
    ),
  ),
  'Zend_View_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_View_Stream' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Wildfire_Channel_HttpHeaders' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Controller_Plugin_Abstract',
      1 => 'Zend_Wildfire_Channel_Interface',
      2 => 'Zend_Wildfire_Exception',
      3 => 'Zend_Controller_Request_Abstract',
      4 => 'Zend_Controller_Response_Abstract',
    ),
  ),
  'Zend_Wildfire_Channel_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Wildfire_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_Wildfire_Plugin_FirePhp' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_Wildfire_Plugin_Interface',
      1 => 'Zend_Wildfire_Exception',
    ),
  ),
  'Zend_Wildfire_Plugin_FirePhp_Message' => 
  array (
    'instantiable' => true,
  ),
  'Zend_Wildfire_Plugin_FirePhp_TableMessage' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Wildfire_Plugin_FirePhp_Message',
      1 => 'Zend_Wildfire_Exception',
    ),
  ),
  'Zend_Wildfire_Plugin_Interface' => 
  array (
    'instantiable' => false,
  ),
  'Zend_Wildfire_Protocol_JsonStream' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Wildfire_Plugin_Interface',
      1 => 'Zend_Wildfire_Channel_Interface',
      2 => 'Zend_Wildfire_Exception',
    ),
  ),
  'Zend_XmlRpc_Client' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Http_Client',
      1 => 'Zend_XmlRpc_Client_ServerIntrospection',
      2 => 'Zend_XmlRpc_Request',
      3 => 'Zend_XmlRpc_Response',
      4 => 'Zend_XmlRpc_Client_ServerProxy',
      5 => 'Zend_XmlRpc_Client_HttpException',
      6 => 'Zend_XmlRpc_Client_FaultException',
    ),
  ),
  'Zend_XmlRpc_Client_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Exception',
    ),
  ),
  'Zend_XmlRpc_Client_FaultException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Client_Exception',
    ),
  ),
  'Zend_XmlRpc_Client_HttpException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Client_Exception',
    ),
  ),
  'Zend_XmlRpc_Client_IntrospectException' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Client_Exception',
    ),
  ),
  'Zend_XmlRpc_Client_ServerIntrospection' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Client',
    ),
  ),
  'Zend_XmlRpc_Client_ServerProxy' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Client',
    ),
  ),
  'Zend_XmlRpc_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Exception',
    ),
  ),
  'Zend_XmlRpc_Fault' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Exception',
    ),
  ),
  'Zend_XmlRpc_Generator_DomDocument' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
    ),
  ),
  'Zend_XmlRpc_Generator_GeneratorAbstract' => 
  array (
    'instantiable' => false,
  ),
  'Zend_XmlRpc_Generator_XmlWriter' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
    ),
  ),
  'Zend_XmlRpc_Request' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Fault',
    ),
  ),
  'Zend_XmlRpc_Request_Http' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Request',
      1 => 'Zend_XmlRpc_Fault',
    ),
  ),
  'Zend_XmlRpc_Request_Stdin' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Request',
      1 => 'Zend_XmlRpc_Fault',
    ),
  ),
  'Zend_XmlRpc_Response' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value',
      1 => 'Zend_XmlRpc_Fault',
    ),
  ),
  'Zend_XmlRpc_Response_Http' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Response',
      1 => 'Zend_XmlRpc_Value',
      2 => 'Zend_XmlRpc_Fault',
    ),
  ),
  'Zend_XmlRpc_Server' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Abstract',
      1 => 'Zend_Server_Interface',
      2 => 'Zend_XmlRpc_Server_Exception',
      3 => 'Zend_XmlRpc_Server_Fault',
      4 => 'Zend_XmlRpc_Request',
      5 => 'Zend_XmlRpc_Response',
      6 => 'Zend_XmlRpc_Fault',
      7 => 'Zend_Server_Definition',
      8 => 'Zend_XmlRpc_Server_System',
      9 => 'Zend_Server_Reflection_Function_Abstract',
      10 => 'Zend_Server_Method_Callback',
      11 => 'Zend_Server_Method_Definition',
      12 => 'Zend_Server_Exception',
    ),
  ),
  'Zend_XmlRpc_Server_Cache' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_Server_Cache',
      1 => 'Zend_Server_Interface',
    ),
  ),
  'Zend_XmlRpc_Server_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Exception',
    ),
  ),
  'Zend_XmlRpc_Server_Fault' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Fault',
      1 => 'Zend_XmlRpc_Exception',
    ),
  ),
  'Zend_XmlRpc_Server_System' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Server',
    ),
  ),
  'Zend_XmlRpc_Value' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
    ),
  ),
  'Zend_XmlRpc_Value_Array' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value_Collection',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
      2 => 'Zend_XmlRpc_Value',
    ),
  ),
  'Zend_XmlRpc_Value_Base64' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value_Scalar',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
      2 => 'Zend_XmlRpc_Value',
    ),
  ),
  'Zend_XmlRpc_Value_BigInteger' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value_Integer',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
      2 => 'Zend_XmlRpc_Value',
    ),
  ),
  'Zend_XmlRpc_Value_Boolean' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value_Scalar',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
      2 => 'Zend_XmlRpc_Value',
    ),
  ),
  'Zend_XmlRpc_Value_Collection' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
    ),
  ),
  'Zend_XmlRpc_Value_DateTime' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value_Scalar',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
      2 => 'Zend_XmlRpc_Value',
    ),
  ),
  'Zend_XmlRpc_Value_Double' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value_Scalar',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
      2 => 'Zend_XmlRpc_Value',
    ),
  ),
  'Zend_XmlRpc_Value_Exception' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Exception',
    ),
  ),
  'Zend_XmlRpc_Value_Integer' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value_Scalar',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
      2 => 'Zend_XmlRpc_Value',
    ),
  ),
  'Zend_XmlRpc_Value_Nil' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value_Scalar',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
      2 => 'Zend_XmlRpc_Value',
    ),
  ),
  'Zend_XmlRpc_Value_Scalar' => 
  array (
    'instantiable' => false,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
    ),
  ),
  'Zend_XmlRpc_Value_String' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value_Scalar',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
      2 => 'Zend_XmlRpc_Value',
    ),
  ),
  'Zend_XmlRpc_Value_Struct' => 
  array (
    'instantiable' => true,
    'dependencies' => 
    array (
      0 => 'Zend_XmlRpc_Value_Collection',
      1 => 'Zend_XmlRpc_Generator_GeneratorAbstract',
      2 => 'Zend_XmlRpc_Value',
    ),
  ),
);