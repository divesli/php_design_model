<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file Fork.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/12 11:10:44
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */


class Fork {
    public $var1 = 0;
    public function run() {
        $var2 = 0;
        echo "var1 = ".$this->var1.", var2 = ".$var2."\n";
    
        for($i=0;$i<1;$i++) {
            $pid = pcntl_fork();

            if ($pid == -1) {
                echo "Fork failed\n";
            }

            if ($pid) {
                $this->var1++;
                $var2++;
                echo "i=$i,pid=".getmypid()."This is parent process".time().",var1 = ".$this->var1.", var2 = ".$var2."\n";
                sleep(10);
                $status = -1;
                echo "This parent time=".time()."\n";
                pcntl_waitpid($pid,$status);
                echo "This exit time=".time()."\n";
            } else {
                $this->var1++;
                $var2++;
                echo "i=$i,pid=".getmypid()."This is child process".time()."var1 = ".$this->var1.", var2 = ".$var2."\n";
                sleep(20);
                echo "This child time=".time()."\n";
            }
        }
    }
}

$f = new Fork();
$f->run();

