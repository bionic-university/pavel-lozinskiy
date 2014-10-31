<?php

class UserList implements ObservableInterface
{
    private $_observers = array();

    public function addCustomer($name)
    {
        foreach ($this->_observers as $obs) {
            $obs->onChanged($this, $name);
        }
    }

    public function addObserver($observer)
    {
        $this->_observers[] = $observer;

    }
}
