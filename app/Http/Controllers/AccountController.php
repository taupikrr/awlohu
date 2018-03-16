<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agen;
use App\User;
use App\rumah;
use App\Role;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Exceptions\rumahException;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       public function password()
        {
        return view('account.password');
        }

        public function password_update(Request $request)
{
    // Validation
    $this->validate(request(), [
        'password' => 'required|string|min:6|confirmed',
    ]);

    // All variables
    $user_password = auth()->user()->password;
    $old_password = request('old_password');
   $password =bcrypt($request['password']);
    // Cek jika password valid
    if (\Hash::check($old_password, $user_password)) {

        // Jika password telah terverifikasi valid, maka akan dilanjutkan
        auth()->user()->update([
            'password' => $password
        ]);

        dd("Your password changed");
    } else {
        // Jika password yang lama tidak sama dengan password yang sedang dimasukkan (old_password)
        dd("Something wrong! Double check your old password.");
    }
}
}
