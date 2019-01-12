<?php

namespace App;

//use http\Env\Request;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Application extends Model
{
    protected $fillable = [
        'name', 'email', 'telephone', 'specialist_id',
    ];

    public static function getApplications()
    {
        return DB::table('applications')
            ->select('applications.id', 'name', 'email', 'telephone', 'applications.created_at',
                'applications.updated_at', 'specialist', 'status')
            ->join('specialists', 'specialist_id', '=', 'specialists.id')
            ->join('statuses', 'application_status_id', '=', 'statuses.id')
            ->orderByDesc('applications.created_at')
            ->get();
    }

    public static function createApplication(Request $request)
    {
//        dd($request->specialist);
//        if ($request->specialist === null) {
//            $request->specialist = 1;
//        }
//        if ($request->email === null) {
//            $request->email = 'отсутствует';
//        }
//        if ($request->day === null) {
//            $request->day = 8;
//        }
//        if ($request->timeStart == "") {
//            $request->timeStart = "00:00";
//        }
//        if ($request->timeEnd == "") {
//            $request->timeEnd = "00:00";
//        }
//        if ($request->dayChoice === null) {
//            $request->dayChoice = '8';
//        }
//        return DB::table('applications')
//            ->insert([
//                'fullName' => $request->fullName,
//                'email' => $request->email,
//                'telephone' => $request->phone,
//                'specialist_id' => $request->specialist,
//                'day_for_call_id' => $request->dayChoice,
//                'application_status_id' => 1,
//                'start_time' => $request->timeStart,
//                'end_time' => $request->timeEnd,
//                'created_at' => Carbon::now(),
//            ]);
    }


    /**
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public static function getApplicationById($id)
    {
        return DB::table('applications')
//            ->select('applications.id', 'fullName',
//                'email', 'telephone','start_time','end_time')
//            ->join('role_user', 'user_id', '=', 'users.id')
//            ->join('roles', 'role_id', '=', 'roles.id')
            ->where('applications.id', '=', $id)
            ->get();
    }

    /**
     * @param $request
     * @return \Illuminate\Database\Query\Builder
     */
    public static function updateApplication($request)
    {
        DB::table('applications')
            ->where('applications.id', '=', $request->applicationId)
            ->update([
                'application_status_id' => $request->status,
                'specialist_id' => $request->specialists,
                'updated_at' => Carbon::now(),
            ]);
        return back();
    }

    public static function deleteApplication($id)
    {
        return DB::table('applications')
            ->where('applications.id', '=', $id)
            ->delete();
    }
}
