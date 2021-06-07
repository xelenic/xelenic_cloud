<?php

namespace App\Http\Composers;

use App\Models\Notification;
use Illuminate\View\View;

/**
 * Class GlobalComposer.
 */
class GlobalComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {

        if(auth()->user())
        {
            $notifications = Notification::where('user_id',auth()->user()->id)->get();
        }else{
            $notifications = null;
        }


        $view->with('notifications' , $notifications);
        $view->with('logged_in_user', auth()->user());
    }
}
