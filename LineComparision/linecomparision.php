<?php
class LineComparision
{

    //function for welcome message
    function welcome()
    {
        echo "Welcome to Line Comparison Computation Program\n";
    }

    //declaring variables
    public $x1;
    public $x2;
    public $y1;
    public $y2;
    
    //function to get user input values
    function userInput()
    {
        $this->x1 = readline("Enter Value for x1 :");
        $this->y1 = readline("Enter Value for y1 : ");
        $this->x2 = readline("Enter Value for x2 : ");
        $this->y2 = readline("Enter Value for y2 : ");
 
    }

    //function to calculate length from the formula
    function calculateLength()
    {
       $this->userInput();
        $value1=pow(($this->x2-$this->x1),2);
       $value2=pow(($this->y2-$this->y1),2);
       $this->length1=sqrt($value1+$value2);
       echo ("lenght of line1 is" ."\n" .round(($this->length1),2 ."\n"));
       return "lenght of line1 is" ."\n" .round(($this->length1),2 ."\n");
    }   
    //Function to check two line are equals are not
    function CheckEquality(){
        $this->lenght1=$this->calculateLength();
        $this->length2=$this->calculateLength();
        if($this->lenght1 == $this->length2){
            echo "\nBoth lines are euqals";
        }else{
            echo "\nLines are not equals";
        }        
    }

   
}
$line = new LineComparision();
$line->welcome();
$line->CheckEquality();
//$line->LineCompare();

?> 