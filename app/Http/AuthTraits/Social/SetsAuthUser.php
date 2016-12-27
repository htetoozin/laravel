<?php

namespace App\Http\AuthTraits\Social;

trait SetsAuthUser
{

    /**
     * @param $socialUser
     * @return User
     * @throws \App\Exceptions\CredentialsDoNotMatchException
     * @throws \App\Exceptions\EmailAlreadyInSystemException
     */

    private function setAuthUser($socialUser)
    {

        $authUser = $this->findOrCreateUser($socialUser);

        return $authUser;

    }

}