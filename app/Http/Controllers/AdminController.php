<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }//End Method

    public function profil() {
        $id = Auth::User()->id;
        $adminData = User::find($id);
        return view ('admin.admin_profile_view', compact('adminData'));
    }//end Method

    public function EditProfile(){

        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit',compact('editData'));
    }// End Method 

    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
    

        if ($request->file('profile_image')) {
           $file = $request->file('profile_image');

           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/admin_images'),$filename);
           $data['profile_image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Profil d\'administrateur mis à jour avec succès.', 
            'alert-type' => 'info'
        );

        return redirect()->route('admin.profil')->with($notification);

    }// End Method

    public function ChangePassword() {
        return view('admin.admin_change_password');
    }// End Method

    public function UpdatePassword(Request $request) {
        $validateData = $request->validate([
            'ancien_mot_de_passe' => 'required',
            'nouveau_mot_de_passe' => 'required|min:8',
            'confirmer_mot_de_passe' => 'required|same:nouveau_mot_de_passe',
        ]);
    
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->ancien_mot_de_passe, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->nouveau_mot_de_passe);
            $user->save();
    
            session()->flash('message', 'Mot de Passe mise à jour avec succès.');
            return redirect()->back();
        } else {
            return redirect()->back()->withErrors(['ancien_mot_de_passe' => 'Ancien mot de passe ne correspond pas.'])->withInput();
        }
    }
    
}
