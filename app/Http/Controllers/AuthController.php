<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Exception;

class AuthController extends Controller
{
    public function login(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'email'         => 'required|string|max:255',
                'password'      => 'required|string|min:6',
            ]);

            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return back()->withErrors([
                    'errors' => 'Incorrect email or password',
                ]);
            }

            Auth::login($user);
            Session::put([
                'id_user'   => $user->id_user,
                'email'     => $user->email,
                'role'      => $user->role,
                'name'      => $user->name,
            ]);

            switch (strtoupper($user->role)) {
                case 'ADMIN':
                    return to_route('admin.dashboard');
                case 'USER':
                    return to_route('user.dashboard');
                default:
                    Auth::logout();
                    return to_route('login')->withErrors(['errors' => 'Unauthorized role']);
            }
        } catch (ValidationException $validation) {
            return back()->withErrors($validation->errors());
        } catch (Exception $exception) {
            return back()->withErrors(['errors' => 'An error occurred. Please try again later.']);
        }
    }

    public function show_reset_password($token): View
    {
        try {
            $user = User::where('reset_token', $token)->first();

            $data = [
                'token' => $token,
                'email' => $user->email ?? '',
            ];

            if(!$user){
                $data['errors'] = 'Invalid reset token';
                return view('pages.auth.reset-password', $data);
            }

            return view('pages.auth.reset-password', $data);
        } catch (Exception $exception) {
            return back()->withErrors(['errors' => 'An error occurred. Please try again later.']);
        }
    }
    
    public function reset_password(Request $request): RedirectResponse
    {
        try {
            
        } catch (ValidationException $validation) {
            return back()->withErrors($validation->errors());
        } catch (Exception $exception) {
            return back()->withErrors(['errors' => 'An error occurred. Please try again later.']);
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();   
        return to_route('login'); 
    }

    public function register(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'email'    => 'required|string|email|max:100|unique:user,email',
                'password' => 'required|string|min:6',
                'name'     => 'required|string|max:100',
            ]);

            $user = new User();
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->name = $request->name;
            $user->save();

            return redirect()->route('login')->with('success', 'Registration successful. Please login.');
        } catch (ValidationException $validation) {
            return back()->withErrors($validation->errors())->withInput();
        } catch (Exception $exception) {
            return back()->withErrors(['errors' => 'An error occurred. Please try again later.']);
        }
    }
}
