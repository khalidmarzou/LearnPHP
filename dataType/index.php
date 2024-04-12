<?php
    /* Data Type
        - bool ==> Boolean
        - int  ==> Integer
        - float ==> Floating Point Number
        - string
        - array
        - other types
        - gettype()
    */
    echo gettype(5);
    echo '<br />';
    echo gettype(true);
    echo '<br />';
    echo gettype(tRuE);
    echo '<br />';
    echo gettype(array('ma' => 'morrocco','usa' => 'united state ..'));
    echo '<br />';
    echo gettype(['morrocco','usa']);
    echo '<br />';
    echo gettype(array('morrocco','usa'));

    // automatic convert type :
    /*
        1 + "1" = 2 => integer
        echo True => 1
        true + true => 2 => integer
        5 + "5 khalid" => 10 + warning > integer + warning
        php dont change the original var , it just change the result type
    */
    // change type manual :
    echo '<br />';
    echo 10 + (int) '10 khalid'; // int or integer
    echo '<br />';
    echo 12 + (integer  ) 8.5; // => integer 20
    echo '<br />';
    echo 10.5 + 10.5 ; // 21 double
    echo '<br />';
    echo (int) 10.5 + (int) 10.5 ; // 21 integer
    echo '<br />';
    echo (int) (10.5 + 10.5); // 21 integer
    // change type Boolean :
    echo '<br />';
    var_dump((bool) 0); // false 1 true
    echo '<br />';echo '<br />';
    // var dump return type and value
    // bool 0 "0" [] "" ==> boolean(false)
    // bool 1 "anything" [anything] ==> boolean(true)
    // string escaping ==> \ ==> u can skip " for ex
    // new line to br html :
    echo nl2br('Hello PHP
    on Multiple line'); // PHP add on your html br after every single line