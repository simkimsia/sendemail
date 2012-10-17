<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {



		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->layout = 'simple';

		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}

	public function sendemail() {
		App::uses('CakeEmail', 'Network/Email');

		$email = new CakeEmail();
		$email->from(array('abc@gmail.com' => 'My Site'));
		$email->to('abc@gmail.com');
		$email->subject('About');

		$email->attachments(array(
		    'coverletter.pdf' => array(

		        'file' => PATH_TO_SAMPLEDOCS . 'Q12-2009 - Cover Letter for Fast Return to WCDMA after Call Release.pdf',
		        'mimetype' => 'application/pdf',
		        'contentId' => 'my-unique-id-cover'
		    ),
		    'quotation.pdf' => array(
		        'file' => PATH_TO_SAMPLEDOCS . 'Q12-2009 - Quotation for Fast Return to WCDMA after Call Release.pdf',
		        'mimetype' => 'application/pdf',
		        'contentId' => 'my-unique-id-quotation'
		    )
		));

		$email->send('My message');



		$this->Session->setFlash('success');
		$this->redirect('/pages/test');
	}
}
