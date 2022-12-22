<?php

class ChristmasTree
{
    private $height;
    private $numberOfStars = 1;
    private $numberOfSpaces;
    private $numberOfStarsInLastLayer;

	public function __construct(int $height)
	{
        $this->height = $height;
        $this->numberOfSpaces = $height - 1;
	}   

    private function printBlankSpaces()
    {
        for($i = 0; $i < $this->numberOfSpaces; $i++)
        {
            echo "&nbsp;" . "&nbsp;";
        }
    }

    private function printStars()
    {
        for($i = 0; $i < $this->numberOfStars; $i++)
        {
            echo "*";
        }
        $this->numberOfStarsInLastLayer = $i;
    }

    private function printNewLine()
    {
            echo "<br>";
    }

    private function printRootOfChristmasTree()
    {
        $this->numberOfSpaces = ($this->numberOfStarsInLastLayer / 2) - 1 ;
        $this->numberOfStars = 1;
        $this->printBlankSpaces();
        $this->printStars();
    }

    public function printChristmasTree()
    {
        while( $this->numberOfSpaces > -1 )
        {
            $this->printBlankSpaces();
            $this->numberOfSpaces--;
            $this->printStars();
            $this->numberOfStars+=2;
            $this->printNewLine();
        }
        $this->printRootOfChristmasTree();
    }
}
