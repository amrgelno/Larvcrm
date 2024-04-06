<?php


namespace  App\Http\Controllers\Admin\Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\client;
use App\Models\projects;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Dashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        @$users=auth::guard('user');

        @$client=client::All();

         $projects=projects::paginate(10,['id', 'title', 'Description', 'Deadline', 'Assigneduser', 'Assignedclient','status']);

         return view('Admin.Auth.dashboard',compact('users','client','projects'));

    }
}
