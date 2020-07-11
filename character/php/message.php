<?php

function dieRollMethodText($choice)
{
    switch($choice)
    {
        case 1:
            return 'Ability Scores: Roll 3d6 (Old School) ';
        break;

        case 2:
            return 'Ability Scores: Roll 4d6 (drop the lowest die) ';
        break;

        case 3:
            return 'Ability Scores: Roll 2d6+6 ';
        break;

        case 4:
            return 'Ability Scores: Roll 1d5+1d6+1d7 ';
        break;

        case 5:
            return 'Ability Scores: Roll 5d6 (use the 3 highest dice) ';
        break;

        default:
        return '';

    }
}


function abilityScoreAssignmentText($choice)
{
    switch($choice)
    {
        case 1:
            return 'and randomly assign the results.';
        break;

        case 2:
            return 'and optimize the results in the order of INT, LUCK, PER, STA, STR & AGI.';
        break;

        case 3:
            return 'and optimize the results in the order of INT, PER, LUCK, STA, AGI & STR.';
        break;

        case 4:
            return 'and optimize the results in the order of LUCK, INT, PER, STA, AGI & STR.';
        break;

        case 5:
            return 'and optimize the results in the order of LUCK, INT, STA, PER, AGI & STR.';
        break;

        default:
        return '';

    }
}


?>