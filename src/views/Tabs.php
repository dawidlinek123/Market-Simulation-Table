<?php 
trait Tabs{

    public function generateTabs($key){
        $propertiesHtml='';
        foreach($this->properties as $name=>$value){
            $propertiesHtml.=$this->generatePropertyBox($name,$value);
        }
        $input1=self::generateInput('input1','Example input 1');
        $input2=self::generateInput('input2','Example input 2');
        return "<div class='flex items-start'>
    <ul class='nav nav-tabs flex flex-col flex-wrap list-none border-b-0 pl-0 mr-4' id='tabs-tabVertical{$key}'
      role='tablist'>
      <li class='nav-item flex-grow text-center ' role='presentation'>
        <a href='#tabs-homeVertical{$key}' class='
            nav-link
            block
            font-medium
            text-xs
            leading-tight
            uppercase
            bg-white dark:bg-gray-700
            text-indigo-900  dark:text-slate-200 
            border-x-0 border-t-0 border-b-2 border-transparent
            px-6
            py-3
            my-2
            hover:border-transparent hover:bg-gray-100
            focus:border-transparent
            active
          ' id='tabs-home-tabVertical' data-bs-toggle='pill' data-bs-target='#tabs-homeVertical{$key}' role='tab'
          aria-controls='tabs-homeVertical{$key}' aria-selected='true'>Home</a>
      </li>
      <li class='nav-item flex-grow text-center' role='presentation'>
        <a href='#tabs-tableVertical{$key}' class='
            nav-link
            block
            font-medium
            text-xs
            leading-tight
            uppercase
            bg-white dark:bg-gray-700
            text-indigo-900  dark:text-slate-200 
            border-x-0 border-t-0 border-b-2 border-transparent
            px-6
            py-3
            my-2
            hover:border-transparent hover:bg-gray-100
            focus:border-transparent
          ' id='tabs-table-tabVertical' data-bs-toggle='pill' data-bs-target='#tabs-tableVertical{$key}' role='tab'
          aria-controls='tabs-tableVertical{$key}' aria-selected='false'>Table</a>
      </li>
      <li class='nav-item flex-grow text-center' role='presentation'>
        <a href='#tabs-updateVertical{$key}' class='
            nav-link
            block
            font-medium
            text-xs
            leading-tight
            uppercase
            bg-white dark:bg-gray-700
            text-indigo-900  dark:text-slate-200 
            border-x-0 border-t-0 border-b-2 border-transparent
            px-6
            py-3
            my-2
            hover:border-transparent hover:bg-gray-100
            focus:border-transparent
          ' id='tabs-update-tabVertical' data-bs-toggle='pill' data-bs-target='#tabs-updateVertical{$key}' role='tab'
          aria-controls='tabs-updateVertical{$key}' aria-selected='false'>Update</a>
      </li>
    </ul>
    <div class='tab-content w-full' id='tabs-tabContentVertical'>
      <div class='tab-pane fade show active' id='tabs-homeVertical{$key}' role='tabpanel'
        aria-labelledby='tabs-home-tabVertical{$key}'>
        

        <div class='flex flex-wrap '>
            {$propertiesHtml}
        </div>


      </div>
      <div class='tab-pane fade' id='tabs-tableVertical{$key}' role='tabpanel' aria-labelledby='tabs-table-tabVertical{$key}'>
        
        {$this->generateTable()}
      </div>
      <div class='tab-pane fade' id='tabs-updateVertical{$key}' role='tabpanel'
        aria-labelledby='tabs-update-tabVertical{$key}'>
        <div class='flex sm:flex-nowrap flex-wrap w-full'>
        {$input1}
        {$input2}
        </div>

        <div class='pr-2'>
            <button type='button' class=' ml-2 w-full inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out'>Save</button>

            <button type='button' class=' ml-2 mt-2 w-full inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out'>Delete</button>
            </div>

      </div>
    </div>
  </div>";
    }
}