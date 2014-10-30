<?php
namespace NS;

class UserListLogger implements ObserverInterface
{
    public function onChanged($sender, $args)
    {
        echo ("'$args' added to user list\n");
    }
}
