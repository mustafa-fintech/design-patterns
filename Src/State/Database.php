<?php 
namespace App\State;

use App\State\File;
use App\State\State;

class DataBase extends State
{
    public function handle1(): void
    {
        echo "Database handles request1.\n";
        echo "Database wants to change the state of the context.\n";
        $this->context->transitionTo(new File());
    }

    public function handle2(): void
    {
        echo "Database handles request2.\n";
    }

    public function getState(): string
    {
        return 'database';
    }
}