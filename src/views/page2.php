<?php

namespace React\Tag;

use React\Component;

class Page2 extends Component{
    function render(){
        return [
            new h1('Page 2'),
            new div(highlight_string(file_get_contents(__FILE__), true), ['class'=> 'bg-light rounded p-4 mt-5']),
        ];
    }
}