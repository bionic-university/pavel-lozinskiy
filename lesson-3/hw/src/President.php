<?php

class President implements RevisionInterface, SanitizeInterface, ObservableInterface
{

    private $document = null;
    private $docTypeSign = null;
    private $docTypeCorrect = null;
    private $_observers = array();

    public function __construct()
    {
        echo PHP_EOL . 'Tell President which document you give him, like: agreement, contract or application :';
        $this->document = trim(strtolower(fgets(STDIN)));
        $this->docTypeSign = ['agreement', 'contract', 'application'];
        $this->docTypeCorrect = ['contract', 'application'];

    }

    public function performDuty()
    {
        echo $this->validate();

        foreach ($this->_observers as $obs) {
            $obs->onChanged($this, $this->document);
        }
    }

    public function validate()
    {
        if (in_array($this->document, $this->docTypeSign)) {
            if (in_array($this->document, $this->docTypeCorrect)) {
                return 'I can sign and send back for revision your: ' . $this->document . PHP_EOL;
            }
            return 'I can only sign: ' . $this->document . PHP_EOL;
        } else {
            return 'The first time I see this document: ' . $this->document . PHP_EOL;
        }
    }

    public function addObserver($observer)
    {
        $this->_observers[] = $observer;
    }

}
