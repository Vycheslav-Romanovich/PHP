<?php
    class Group  
    {
        private $name, $teams=[]; 
        function __construct($name, Group $group=NULL)
        {
            $this->name = $name;
            if ($group!==NULL)
            {
                $count=count($group->teams);
                for($i=0;$i<$count;$i++)
                {
                    $this->teams[]=$group->teams[$i];
                }
            }
        }      
        function addTeam(Team $team)
        {
            $this->teams[count($this->teams)]=$team;
            return $this;
        }
        function __toString()
        {
            return $this->name;
        }
        function generateCalendar()
        {
            if (count($this->teams) % 2 !== 0)
            {
                array_push($this->teams, "pass");
            }
                $count = count($this->teams);
                $row2 = array_splice($this->teams, ($count / 2));            
                $row1 = $this->teams;  
                $row2 = array_reverse($row2);   
        
            for ($i = 1; $i < $count; $i++) 
            { 
                echo "$this->name. Round $i <br/>";
            if ($i == 1) 
            {   
                for ($j = 0; $j < $count / 2; $j++) 
                {   
                    if ($row1[$j] !== "pass" && $row2[$j] !== "pass")   
                        echo $row1[$j] . ' - ' . $row2[$j] . '<br/>';   
                    else continue; 
                }
            } 
            else 
            {   
                array_push($row2, array_pop($row1));  
                $top = array_shift($row1);  
                array_unshift($row1, array_shift($row2));   
                array_unshift($row1, $top);   
                for ($j = 0; $j < $count / 2; $j++)
                    if ($row1[$j] !== "pass" && $row2[$j] !== "pass")
                        echo $row1[$j] . ' - ' . $row2[$j] . '<br/>';
                    else continue;
            }
            echo "<br/>";
            }
    
        }
    }
 ?>