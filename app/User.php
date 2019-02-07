<?php

namespace App;

//use http\Env\Request;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getUsers()
    {
        return DB::table('users')
            ->select('users.id', 'users.name', 'display_name', 'email','users.created_at')
            ->join('role_user', 'user_id', '=', 'users.id')
            ->join('roles', 'role_id', '=', 'roles.id')
            ->orderBy('users.id')
            ->paginate(10);
    }

    public static function createAccount(Request $request)
    {
        DB::table('users')
            ->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'created_at' => Carbon::now(),
            ]);
        $userId = DB::table('users')
            ->select('id')
            ->where('email', '=', $request->email)
            ->get();

        DB::table('role_user')
            ->insert([
                'role_id' => $request->role,
                'user_id' => $userId[0]->id,
                'user_type' => 'App\User'
            ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public static function getUserById($id)
    {
        return DB::table('users')
            ->select('users.id', 'users.name', 'display_name', 'email')
            ->join('role_user', 'user_id', '=', 'users.id')
            ->join('roles', 'role_id', '=', 'roles.id')
            ->where('users.id', '=', $id)
            ->get();
    }

    /**
     * @param Request $request
     * @return int
     */
    public static function updateAccount(Request $request)
    {
        return DB::table('users')
            ->join('role_user', 'user_id', '=', 'users.id')
            ->where('users.id', '=', $request->userId)
            ->update([
                'role_id' => $request->role
            ]);
    }

    /**
     * @param $id
     * @return int
     */
    public static function deleteAccount($id)
    {
        return DB::table('users')
            ->where('id', '=', $id)
            ->delete();
    }

}
