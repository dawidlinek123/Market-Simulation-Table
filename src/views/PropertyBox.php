<?php
trait PropertyBox{
    public function generatePropertyBox($name,$value){
        return "    
        <div class='w-48 h-48  hover:shadow-xl transition-all block m-3 p-6 rounded-lg shadow-lg bg-white dark:bg-slate-800
        text-indigo-900  dark:text-slate-200 '>
            <h1 class='text-center text-2xl '>{$name}</h1>
            <p class='text-xl text-center mt-3'> {$value} </p>
        </div>";
    }
}