<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    line();
    $name = prompt('May I have your name? ', false, '');
    line('Hello, %s!', $name);
}
