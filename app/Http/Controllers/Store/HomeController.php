<?php namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

/**
 * @package App\Http\Controllers\Store
 */
class HomeController extends Controller
{
	/**
	 * @return View
	 */
	public function index()
	{
		return view('desktop.home.index');
	}
}