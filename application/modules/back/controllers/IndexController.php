<?php
/**
 * Marcel Framework Backoffice
 * 
 * @package application
 * 
 * @author Jay MOULIN
 */

/**
 * @see Zend_Controller_Action
 */
require_once('Zend/Controller/Action.php');
/**
 * @see Zend_Auth
 */
require_once('Zend/Auth.php');
/**
 * @see Marcel_Backoffice_Db_Table_Autodiscover
 */
require_once('Marcel/Backoffice/Db/Table/Autodiscover.php');
/**
 * @see Marcel_Backoffice_Model
 */
require_once('Marcel/Backoffice/Model.php');
/**
 * @see Marcel_Backoffice_Config
 */
require_once('Marcel/Backoffice/Config.php');

/**
 * Backoffice controller - May be renamed
 * 
 * @uses Zend_Controller_Action
 * 
 * @author Jay MOULIN
 *
 */
class Back_IndexController extends Zend_Controller_Action {

	/**
	 * (non-PHPdoc)
	 * @see Controller/Zend_Controller_Action#init()
	 */
	public function init() {
		if ($this->getRequest()->getActionName() == 'login') {
			if (!Zend_Auth::getInstance()->hasIdentity()) {
				return;
			} else {
				$this->_helper->redirector('index');
			}
		}
		if (!Zend_Auth::getInstance()->hasIdentity()) {
			$this->_helper->redirector('login');
		} else {
			$ident = Zend_Auth::getInstance()->getIdentity();
			if (!isset($ident['role']) || !isset($ident['password'])) {
				$this->_helper->redirector('login');
			}
		}
		$this->view->layout()->tables = Marcel_Backoffice_Db_Table_Autodiscover::getTableList(Marcel_Backoffice_Config::getInstance()->getConfig());
		$this->view->params = $this->_request->getParams();
		
		$this->view->layout()->acl = NULL;
		if (Zend_Controller_Front::getInstance()->getPlugin('Marcel_Backoffice_Plugin_Auth')) {
			$this->view->layout()->acl = Zend_Controller_Front::getInstance()->getPlugin('Marcel_Backoffice_Plugin_Auth');
		}
		$this->view->func = array(	'LIKE %...%'	=> 'CONTIENT',
																'LIKE' 				=> 'SIMILAIRE A',
																'NOT LIKE' 		=> 'NON SIMILAIRE A',
																'=' 					=> '=',
																'!=' 					=> '!=',
																'>' 				=> '&gt;',
																'>=' 			=> '&gt;=',
																'<' 				=> '&lt;',
																'<=' 			=> '&lt;=',
																'= \'\'' 			=> '= \'\'',
																'!= \'\'' 		=> '!= \'\'',
																'IS NULL' 		=> 'EST \'NULL\'',
																'IS NOT NULL'	=> 'N\'EST PAS \'NULL\'');
		$contextSwitch = $this->_helper->getHelper('contextSwitch');
		if (!$contextSwitch->getContext('csv')) {
			$contextSwitch->addContext('csv', array('suffix' => 'csv', 'headers' => array('content-type' => 'application/force-download')));
		}
        $contextSwitch->addActionContext('list', 'csv')->initContext();
	}
	
	/**
	 * Used do not delete - displays interface
	 */
	public function indexAction() {
	}
	
	/**
	 * Login action
	 * 
	 * @uses Marcel_Backoffice_Acl
	 * @uses Zend_Auth
	 */
	public function loginAction() {
		$this->_helper->layout()->setLayout('login');
		if ($this->_request->isPost()) {
			require_once('Marcel/Backoffice/Acl.php');
			$acl = new Marcel_Backoffice_Acl;
			$adapter = $acl->login($this->_request->getPost('login'), $this->_request->getPost('password'));
			$result = Zend_Auth::getInstance()->authenticate($adapter);
			if ($result->isValid()) {
				$this->_helper->redirector('index');
			}
		}
	}
	
	/**
	 * Logout
	 * 
	 * @uses Zend_Auth
	 */
	public function logoutAction() {
		if (Zend_Auth::getInstance()->hasIdentity()) {
			Zend_Auth::getInstance()->clearIdentity();
		}
		$this->_redirect(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $this->view->baseUrl() . '/back');
	}
	
	/**
	 * displays all models entries
	 * 
	 * @uses Zend_Paginator
	 * @uses Marcel_Backoffice_Config
	 * @uses Marcel_Backoffice_Model
	 */
	public function listAction() {
		$this->view->config = Marcel_Backoffice_Config::getInstance()->getConfig();
		$modelName = $this->_getParam('model');
		$model = Marcel_Backoffice_Model::factory($modelName);
		$this->view->cols = $model->info('cols');
		$select = null;
		
		if ($this->_request->getParam('data')) {
			
			$data = unserialize($this->_request->getParam('data'));
			$aWhere = array();
			$searchText = array();
			
			foreach ($data['query'] as $key => $q) {
			
				if (isset($data['fields'][$key]) && !empty($data['fields'][$key])) {
				
					$func = addslashes($data['func'][$key]);
					$q =	addslashes($q);
					$tmpWhere = array();
					$searchText[] = implode(' OU ', $data['fields'][$key]) . ' ' . $this->view->func[$func] . ' "' . stripslashes($q) . '"';
					
					foreach ($data['fields'][$key] as $field) {
					
						$field	=	addslashes($field);
						switch ($func) {
							case 'LIKE':
							case 'NOT LIKE':
							case '=':
							case '!=':
							case '>':
							case '>=':
							case '<':
							case '<=':
								if (trim($q) != '') { $tmpWhere[] = $field . ' ' . $func . ' \'' . $q . '\''; }
								break;
							case "= ''":
							case "!= ''":
							case 'IS NULL':
							case 'IS NOT NULL':
								$tmpWhere[] = $field . ' ' . stripslashes($func);
								break;
							default:
								if (trim($q) != '') { $tmpWhere[] = $field . ' LIKE \'%' . $q . '%\''; }
						}
					}
					$aWhere[] = '(' . implode(' OR ', $tmpWhere) . ')';
				}
			}
			if (!empty($aWhere)) { $select = $model->select()->where(implode(' AND ', $aWhere)); }
			$this->view->searchText = $searchText;
		}
		$this->view->model = $modelName;
		$this->view->allData = $model->fetchAll($select);
		$this->view->data = Zend_Paginator::factory($this->view->allData)
							->setCurrentPageNumber($this->_getParam('page', 1));
	}
	
	/**
	 * Add a data in a model - proxy
	 */
	public function addAction() {
		$this->_forward('edit', null, null, array('id' => 0, 'model' => $this->_getParam('model')));
	}
	
	/**
	 * Edit a data in model
	 * 
	 * @uses Marcel_Backoffice_Model
	 */
	public function editAction() {
		$id = (int) $this->_getParam('id');
		$modelName = $this->_getParam('model');
		
		$model = Marcel_Backoffice_Model::factory($modelName);
		$item = $model->find($id)->current();
		if (!$item) {
			$item = $model->createRow();
		}
		$form = $item->getForm();
		if ($this->_request->isPost()) {
			$newId = $form->populate($this->_request->getPost())->save();
			if ($newId) {
				$this->_helper->flashMessenger('Saved successfully!');
				$this->_helper->redirector('edit', null, null, array('id' => $newId, 'model' => $modelName));
			}
		}
		$this->view->form = $form;
		$this->view->messages = $this->_helper->flashMessenger->getMessages();
	}
	
	/**
	 * Delete a line in a model
	 * 
	 * @uses Model_Backoffice_Model
	 */
	public function deleteAction() {
		$id = (int) $this->_getParam('id');
		$modelName = $this->_getParam('model');
		$model = Marcel_Backoffice_Model::factory($modelName);
		$item = $model->find($id)->current();
		if ($item) {
			$item->delete();
		}
		$this->_helper->redirector('list', null, null, array('model' => $modelName));
	}
	
	/**
	 * Renders a queried file
	 */
	public function filerendererAction() {
		$filename = basename($this->_getParam('image'));
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		$this->getResponse()
				->setHeader('Content-Type', 'image/jpeg')
				->setBody(file_get_contents(ROOT_DIR . '/files/' . $filename));
	}
	
	/**
	 * Search lines in a model
	 * 
	 * @uses Model_Backoffice_Model
	 */
	public function searchAction() {
		$modelName = $this->_getParam('model');
		$model = Marcel_Backoffice_Model::factory($modelName);
		$this->view->cols = $model->info('cols');
		$this->view->model = $this->_getParam('model');
		$this->view->config = Marcel_Backoffice_Config::getInstance()->getConfig();
		
		if ($this->_request->isPost()) {
			$fields = array();
			$func 	= array();
			$query 	= array();
			foreach ($_POST['query'] as $key => $q) {
				if (isset($_POST['fields'][$key]) && !empty($_POST['fields'][$key])) {
					$fields[$key] = $_POST['fields'][$key];
					$func[$key] 	= $_POST['func'][$key];
					$query[$key] 	= $_POST['query'][$key];
				}
			}
			$data = array('fields' => $fields, 'func' => $func, 'query' => $query);
			$data = serialize($data);
			$this->_helper->redirector('list', null, null, array('model' => $modelName, 'data' => $data));
		}
	}
}