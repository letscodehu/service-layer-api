<?php

interface UserService
{

    /**
     * @param $id
     * @return UserProfileView
     */
    public function showProfile($id);

}