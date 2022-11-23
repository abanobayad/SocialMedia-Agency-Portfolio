<?php

namespace App\Http\Controllers;

use Illuminate\Notifications\DatabaseNotification;

class NotificationController extends Controller
{
    public function read($id)
    {
        $Notifi = DatabaseNotification::find($id);
        $Notifi->markAsRead();
        $type = $Notifi->type;
        if($type == 'App\Notifications\NewContact')
        {

            return redirect(route('contact.show' ,$Notifi->data['data']['con_id']));
        }
        elseif($type == 'App\Notifications\NewHire')
        {
            return redirect(route('hire.show' ,$Notifi->data['data']['hire_id']));
        }

    }

    public function readAll( )
    {
        $uestUnreadNotifi = auth()->user()->unreadNotifications;
        if($uestUnreadNotifi)
        {
            // dd($uestUnreadNotifi);
            $uestUnreadNotifi->markAsRead();

        }
        return back();
    }

    public function showAll()
    {
        $uestUnreadNotifi = auth()->user()->unreadNotifications->sortByDesc('updated_at');
        $uestReadNotifi = auth()->user()->readNotifications->sortByDesc('updated_at');
        $uestAllNotifi = auth()->user()->Notifications-> sortByDesc('updated_at');

        return view('Dashboard.notifications' , compact('uestUnreadNotifi' , 'uestReadNotifi' , 'uestAllNotifi'));
    }
}
