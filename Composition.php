<?php

class PrintHead {
    public function print()
    {
        echo 'HEAD';
    }
}
class PrintBody {
    public function print()
    {
        echo 'BODY';
    }
}
class PrintFooter {
    public function print()
    {
        echo 'FOOTER';
    }
}

class ShowPage {
    public function printAll()
    {
        $head = new PrintHead();
        $body = new PrintBody();
        $footer = new PrintFooter();

        $head->print();
        $body->print();
        $footer->print();
    }
}

$mainPage = new ShowPage();
$mainPage->printAll();
