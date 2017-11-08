<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class AddaPlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class AddaPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->$choice;
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------

        //aliance

        if ($this->result->getStatsFor($this->opponentSide)['name'] == 'Garnaoui')
        {
            return parent::paperChoice();
        }
        if ($this->result->getStatsFor($this->opponentSide)['name'] == 'Diomande')
        {
            return parent::paperChoice();
        }


        if ($this->result->getNbRound() == 0) {
            return parent::scissorsChoice();
        }
        if ($this->result->getLastScoreFor($this->mySide)>$this->result->getLastScoreFor($this->opponentSide) )
        {
                if ($this->result->getLastChoiceFor($this->opponentSide) == 'rock' )
                {
                    return parent::scissorsChoice();
                }
               return $this->result->getLastChoiceFor($this->mySide);
        }
        return $this->result->getLastChoiceFor($this->opponentSide);
    }
};