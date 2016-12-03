<?php
 $lines = file("data/temperature.txt");
 echo json_encode((int)trim(end($lines))) ;