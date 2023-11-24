<?php

namespace App\Jobs\Emails;

use App\Notifications\Header;
use App\User;
use App\Models\UserLog;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SubscriptionDeletedEmailJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * @var int
     */
    public $userId;

    /**
     *
     */
    public $tries = 1;

    /**
     * WelcomeEmailJob constructor.
     */
    public function __construct(User $user)
    {
        $this->userId = $user->id;
    }

    public function handle()
    {
        // User deleted their account already? Sure thing
        /** @var User|null $user */
        $user = User::find($this->userId);
        if (empty($user)) {
            Log::warning('Subscription Deleted Email Job: unknown user id', ['userId' => $this->userId]);
            return;
        }

        // Don't notify if the user was banned
        if ($user->isBanned()) {
            Log::warning('Subscription Deleted Email Job: banned user id', ['userId' => $this->userId]);
            return;
        }

        $user->notify(new Header(
            'subscriptions.deleted',
            'far fa-credit-card',
            'red'
        ));

        $user->log(UserLog::TYPE_SUB_CANCEL_AUTO);
    }
}
