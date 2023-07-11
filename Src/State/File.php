<?php 
namespace App\State;

use App\State\State;
use App\State\DataBase;

class File extends State
{
    public function handle1(): void
    {
        echo "File handles request1.\n";
        echo "File wants to change the state of the context.\n";
        $this->context->transitionTo(new DataBase());
    }

    public function handle2(): void
    {
        echo "File handles request2.\n";
    }

    public function getState(): string
    {
        return 'file';
    }
}