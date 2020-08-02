<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\User;

class ForumController extends Controller
{

    public function __construct(){
        $this->authenticated_user = new AuthenticatedUserController;
    }
    //
    protected function getForum(){
        $chat_content = $this->showChatContent();
        return view('Admin.forum',compact('chat_content'));
    }
    /**
     * This function save the Forum Message
     */
    private function chatInForum(){
        $forum = new Forum;
        $forum->message = request()->message;
        $forum->user_id = $this->authenticated_user->getAuthenticatedUser();
        $forum->save();
        return redirect()->back();
    }
    /**
     * This function uploads the users photo
     */
    protected function uploadPhoto(){
        if(empty(request()->photo)){
            return redirect()->back()->withErrors('please attach a photo to continue');
        }else{
        $photo = request()->photo;
        $photo_original_name = $photo->getClientOriginalName();
        $photo->move('trainees_images/',$photo_original_name);
        User::where('id',auth()->user()->id)->update(array(
            'photo' => $photo_original_name
        ));
        return redirect()->back()->with('msg','Your profile picture has been uploaded');
        }
    }

    /**
     * This message shows the chat content
     */
    private function showChatContent(){
        $chat_content = Forum::get();
        return $chat_content;
    }
    /**
     * this function validates the forum chatting
     */
    protected function validateForum(){
        if(empty(request()->message)){
            return redirect()->back()->withErrors('please type a message and press enter to continue');
        }else{
            return $this->chatInForum();
        }
    }
}
