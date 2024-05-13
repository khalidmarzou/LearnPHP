<?php

    $name = 'khalid';

    // Here Doc :
        echo <<<"here"
                hello from PHP
                    in Multiple line with here Doc $$$$\\\\"'é'é"("&é"
                    my name is $name
                here;

    // Now Doc :
        echo '<br />';
        echo <<<'Now'
                hello from PHP
                    in Multiple line with Now Doc $$$$\\\\"'é'é"("&é"
                    my name is $name
                Now;


    // practice :
        echo <<<"navbar"
                    <ul>
                        <li>$name</li>
                        <li>$name</li>
                        <li>$name</li>
                        <li>$name</li>
                    </ul>
                navbar;