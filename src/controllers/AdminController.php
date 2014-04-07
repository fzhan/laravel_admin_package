<?php namespace Mars\Admin;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use AdministratorBaseController as Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\File\File as SFile;
use Illuminate\Support\Facades\Validator as LValidator;


/**
 * Handles all requests related to managing the data models
 */
class AdminController extends Controller
{

	/**
	 * Shows the dashboard page
	 *
	 * @return Response
	 */
	public function dashboard()
	{
		var_dump('Hello');
	}
}
