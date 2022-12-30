<?php
    namespace albinapolyakina\cold_hot\Controller;
    use function albinapolyakina\cold_hot\View\showGame;

    function startGame(){
        echo "Game started".PHP_EOL;
        showGame();
    }
?>