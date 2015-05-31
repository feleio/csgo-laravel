<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Group;
use App\Weapon;
use App\Notification;

class AdminController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return redirect('back/weapons');
	}

	public function showGroups()
	{
		$groups = Group::all();
		return view('admin.groups')->withGroups($groups);
	}

	public function showWeapons()
	{
		$weapons = Weapon::with('notifications')->get();
		return view('admin.weapons')->withWeapons($weapons);
	}

	public function showAllNotifications()
	{
		$notifications = Notification::orderBy('created_at','desc')->get();
		return view('admin.notifications')->withNotifications($notifications);
	}

	public function showNotifications($weaponId)
	{
		$weapon = Weapon::with('notifications')->findOrFail($weaponId);
		$notifications = $weapon->notifications()->orderBy('created_at','desc')->get();
		return view('admin.notifications')->withNotifications($notifications);
	}

}
