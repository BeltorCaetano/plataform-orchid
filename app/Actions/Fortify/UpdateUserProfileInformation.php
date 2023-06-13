<?php

namespace App\Actions\Fortify;

use App\Models\Client;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(Client $client, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($client->id),
            ],
        ])->validateWithBag('updateProfileInformation');

        if ($input['email'] !== $client->email &&
            $client instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($client, $input);
        } else {
            $client->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(Client $client, array $input): void
    {
        $client->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $client->sendEmailVerificationNotification();
    }
}
