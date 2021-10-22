<?php 
    session_start();

    if(isset($_SESSION['now']) && $_SESSION['TimerStarts'] == true)
    {
        $starttime = date('i:s', $_SESSION['now']);
        // echo 'start time ->'.$starttime.'<br>';
    
        $endtime = date('i:s', $_SESSION['then']);
        // echo 'end time ->'.$endtime.'<br>';
    
        $diff = $_SESSION['then'] - $_SESSION['now'];
        $d = date('i:s', $diff);

        if($d > '00:00')
        {
            echo $d;
            $_SESSION['now'] = $_SESSION['now'] + 1;
    
        }else{
            echo 'Timeout';
            session_unset();
            session_destroy();
        }
    }
    else
    {
        
    }

?>