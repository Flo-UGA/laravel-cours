<?php

namespace App\Listeners;

use App\Events\ProjectCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewProject;

class SuiviManager
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProjectCreated  $event
     * @return void
     */
    public function handle(ProjectCreated $event)
    {
        //
        /* var_dump($event);
         * die('Die SuiviManager listener'); */

        /* Mail::raw('Le projet: '.$event->project->title.' a été crée', function ($message) {
         *     $message->to('florian.rodriguez@univ-grenoble-alpes.fr')
         *             ->subject('Nouveau projet créé');
         * }); */

        Mail::to('titi@toto.com')
            ->send(new NewProject($event->project->title));

    }
}
