<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */

namespace App\Models{
    /**
     * App\Models\User.
     *
     * @property-read \App\Models\Project $contactOfProject
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $readNotifications
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
     */
    class User extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Project.
     *
     * @property-read \App\Models\User $contact
     */
    class Project extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Competency.
     */
    class Competency extends \Eloquent
    {
    }
}
