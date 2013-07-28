<?php

class User extends CI_Model
{
    public function authenticate($email, $password)
    {
        // get password_digest

        $password_digest = $this->db->select('password_digest')->get_where('users', array('email' => $email))->row()->password_digest;

        if ($password_digest)
        {
            // hash password with password_digest and find user

            $md5 = md5($password_digest);

            $user = $this->db->select('email')->get_where('users', array(
                'email' => $email,
                'password_digest' => $md5
            ))->row();

            return $user;
        }

        return false;
    }
}
