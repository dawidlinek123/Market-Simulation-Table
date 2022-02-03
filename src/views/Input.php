<?php 

trait Input{
    public function generateInput($name,$label,$placeholder="Write here...",$type='text'){
        return "
        <div class='form-floating mb-3 ml-2 w-full sm:w-1/2 '>
        <input type='{$type}' name='{$name}' class='form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        dark:text-gray-100
        bg-white bg-clip-padding
        dark:bg-slate-700
        border border-solid border-gray-300 dark:border-gray-800
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none'  placeholder='{$placeholder}'>
        <label  class='text-gray-700   dark:text-gray-100'>{$label}</label>
      </div>";
    }
} 