<?php

class PresidentialSpier implements ObserverInterface
{
    public function onChanged($sender, $args)
    {
        echo "'$args' is copy by spier.\n";
    }
}
