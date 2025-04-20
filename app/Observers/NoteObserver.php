<?php

namespace App\Observers;

use App\Contracts\NotificationService;
use App\Models\Note as Note;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class NoteObserver
{
    public function __construct(private NotificationService  $notification){
    }
    public function creating(Note $model)
    {
     }       
     public function created(Note $model)
     {
         $this->notification->sendNotification(
             "Note '{$model->title}' created via Observer!",
             $model->user->email
         );
     }
    public function updating(Note $model)
    {
        // Logic to execute before a note is updated
    }
    public function updated(Note $model)
    {
        // Logic to execute after a note is updated
    }
    public function deleting(Note $model)
    {
        // Logic to execute before a note is deleted
    }
    public function deleted(Note $model)
    {
        // Logic to execute after a note is deleted
    }
    public function restoring(Note $model)
    {
        // Logic to execute before a note is restored
    }
    public function restored(Note $model)
    {
        // Logic to execute after a note is restored
    }
    public function saving(Note $model)
    {
        // Logic to execute before a note is saved
    }
}
