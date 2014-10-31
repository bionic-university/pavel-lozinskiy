<?php

interface ObserverInterface
{
    public function onChanged($sender, $args);
}
