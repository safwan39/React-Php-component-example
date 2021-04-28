<?php

namespace React\Tag;

use React\Component;

class Page1 extends Component{
    function render(){
        return [
            new h1('Page 1'),
            new div(array_map(function(){  return new div(new Card, ['class' => 'col-md-2 my-2']);}, range(0, 11)), ['class'=> 'row']), 
            new CodeWrap(['file'=> __FILE__]),
        ];
    }
}

class Card extends Component{
    var $state = ['counter' => 1];

    function render(){
        $counter = $this->state->counter;

        return new div([
            new div([
                "counter: $counter",
                new input(['value'=> $counter,'onkeyup'=> 'this.setState({counter: parseInt(this.value)})', 'key'=>'12', 'type'=> 'number']),
            ], ['class'=> 'card-body']),
            new div([
                new button('update state', ['onclick'=> 'this.setState(prevState=>({counter: prevState.counter + 1}))', 'class' => 'm-auto btn btn-primary']),
            ], ['class'=> 'card-footer'])
        ], ['class'=> 'card']);
    }
}