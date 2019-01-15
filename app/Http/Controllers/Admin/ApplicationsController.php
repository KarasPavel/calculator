<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 18.12.18
 * Time: 12:28
 */

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Day;
use App\Specialist;
use App\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

//use App\Role;

class ApplicationsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewApplications()
    {
        $user = Auth::user();
        $allApp = Application::getApplications();
        //dd($allUsers);
        return view('admin/viewApplications', ['user' => $user, 'allApp' => $allApp]);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function createApplications(Request $request)
    {
//        return $request;
//        //dd($request);
        $request->validate([
            'name' => 'required|string|min:2|max:100',
            'email' => 'nullable|email|max:100',
            'phone' => 'required|min:10|max:11',
//            'dayChoice' => 'nullable|min:1|max:8|size:1',
            'specialist' => 'nullable|min:1|max:3|size:1',
        ]);

//        Application::createApplication($request);
//        return redirect()->route('main');
        return "all ok";
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editApplication($id)
    {
//        dd($id);
        $user = Auth::user();
        $application = Application::getApplicationById($id);
        $days = Day::getDays();
        $specialists = Specialist::getSpecialists();
        $statuses = Status::getStatuses();
        return view('admin/editApplication', ['application' => $application, 'days' => $days,
            'user' => $user, 'specialists' => $specialists, 'statuses' => $statuses]);

    }

    public function updateApplication(Request $request){
        //dd($request);
        Application::updateApplication($request);
        return redirect()->route('viewApplications');
    }
    public function deleteApplication($id){
//        dd($id);
        Application::deleteApplication($id);
        return redirect()->route('viewApplications');
    }
}