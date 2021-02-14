<?php

namespace App\Rules;

use App\TaskUser;
use App\User;

use Illuminate\Contracts\Validation\Rule;

class AlreadyAssignedTask implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public $task;
    public $user;

    public function __construct($task, $user)
    {
        $this->task = $task;
        $this->user = $user;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $task_user = TaskUser::where('task_id', $this->task)->where('user_id', $this->user)->first();

        if(!$task_user) {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This task was already assigned to that user';
    }
}
