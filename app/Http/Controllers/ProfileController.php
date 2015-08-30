<?php
namespace App\Http\Controllers;
use App\Models\Profile as Profile;

class ProfileController extends Controller
{
    public function getIndex() {
        header('content-type:text/html; charset=utf-8');
        $profile = Profile::get();
        if ($profile) {
            return 'Model Profile Connect Yes!';
        }
        else {
            return 'Error! Model Profile Connect False!!!';
        }
    }
}
