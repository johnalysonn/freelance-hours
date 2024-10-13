<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Timer extends Component
{
    public Project $project;

    public function timer() {

    }

    public function render()
    {
        $diffDate = now()->diff($this->project->ends_at);
        $days = $diffDate->d;
        $hours = $diffDate->h;
        $minutes = $diffDate->i;
        $seconds = $diffDate->s;

        return view('livewire.projects.timer', compact('days', 'hours', 'minutes', 'seconds'));
    }
}
