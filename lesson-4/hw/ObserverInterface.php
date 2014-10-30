<?php
namespace NS;

interface ObserverInterface
{
    public function onChanged($sender, $args);
}
