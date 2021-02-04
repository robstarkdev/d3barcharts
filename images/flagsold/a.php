<?php


foreach(glob("*.png" ) as $file ) {

echo realpath($file) . "\n";


}
