<?php
    $name = "kikon";

    echo "Hi, " . $name .".\n";
    echo "My name is ". $name . ".\n";
    echo "My name is $name. ". "\n";

    
    echo 'My name is $name.'.'\n'; 
    echo "\n".'My name is $name.'."\n"; 
    // escape 
    echo "This is a Quotes \"hello word!\" \n";

    // {}
    $juice = "apple";
    echo "This juice is a {$juice}s. \n";
    
    // PHP_EOL
    echo "Hi, what's up!". PHP_EOL;
    echo "How do yu do, bro!". PHP_EOL;
    
    // long strings
    echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quia veritatis non consequuntur quis qusimos eaque totam.". PHP_EOL;

    // Heredoc
    $x = 'hi';
    $y = 'hello';
    // <<<名稱接大小寫皆可，"結尾" 與 "開頭" 的名稱要一致
    $text = <<<text
    Line1 $x
    Line2 $y
    Line3  \n
    text;

    echo $text;

    // Nowdoc
    $text = <<<'WORD'
    -----Line1 $x
    -----Line2 $y
    -----Line3 \n 
    WORD;

    echo $text. PHP_EOL;
    
    // Heredoc ex: 將 html tag insert into the strings
    $html = <<<DOC
    <h1>你好嗎？</h1>
    <p>地址原因過程性能，浙江這麼多接觸政治世界盃裡面搜尋引擎改善，評價歌曲考試這一點攻擊具備回憶可用誠信課程複雜僅供背景夫人，廣</p>
    <p>大客人醫療有點通信校長生命數碼相機石油方式國有交易谷歌，寫真必須，這樣遭遇，吸引包括無派親愛的一家，為什麼資本自身是的大多數，視頻運。</p>
    DOC;

    echo $html. PHP_EOL;

    $whatever = 
 "\n大客人醫療有點通信校長
生命數碼相機石油方式國有交易谷歌，寫真
必須，這樣遭遇，吸引包括無派親愛的一家，
為什麼資本自身是的大多數，視頻運。
    ";

    echo $whatever;

    
