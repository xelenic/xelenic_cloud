<?php
use App\Models\Notification;

if (! function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

if (! function_exists('gravatar')) {
    /**
     * Access the gravatar helper.
     */
    function gravatar()
    {
        return app('gravatar');
    }
}


if (! function_exists('publish_notification')) {
    /**
     * Access the gravatar helper.
     */
    function publish_notification($user_id,$icon,$description,$link)
    {
        $notification = new Notification;
        $notification->notification_icon = $icon;
        $notification->description = $description;
        $notification->user_id = $user_id;
        $notification->link = $link;
        $notification->save();
        return $notification->id;
    }
}

if (! function_exists('home_route')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function home_route()
    {
        if (auth()->check()) {
            if (auth()->user()->can('view backend')) {
                return 'admin.dashboard';
            }

            return 'frontend.user.dashboard';
        }

        return 'frontend.index';
    }
}
