<?php

class PrintHead
{
    public function print()
    {
        return 'HEAD';
    }
}
class PrintBody
{
    public function print()
    {
        return 'BODY';
    }
}
class PrintFooter
{
    public function print()
    {
        return 'FOOTER';
    }
}

class ShowPage
{
    public $head;
    public $body;
    public $footer;

    public function __construct(PrintHead $head, PrintBody $body, PrintFooter $footer)
    {
        $this->head   = $head->print();
        $this->body   = $body->print();
        $this->footer = $footer->print();
    }
}
$head   = new PrintHead();
$body   = new PrintBody();
$footer = new PrintFooter();

$mainPage = new ShowPage($head, $body, $footer);
var_dump($mainPage);
