<?php 

trait Accordion{

    public function generateAccordion($key){
        return "
        <div class='accordion-item bg-white dark:bg-gray-700 rounded-md mt-8'>
            <h2 class='accordion-header mb-0   shadow hover:shadow-md transition-all rounded-md' id='headingTwo5'>
                <button 
                    class='
                  
                        accordion-button
                        collapsed
                        relative
                        flex
                        items-center
                        w-full
                        py-4
                        px-5
                        text-base text-left
                        bg-white dark:bg-gray-700
                        text-indigo-900  dark:text-slate-200 
                        border-0
                        rounded-none
                        transition
                        focus:outline-none'
                    type='button'
                    data-bs-toggle='collapse'
                    data-bs-target='#collapse{$key}'
                    aria-expanded='false'
                    aria-controls='collapse{$key}'>

                    {$this->name}

                </button>
            </h2>
        <div 
            id='collapse{$key}' 
            class='accordion-collapse collapse' ,
            aria-labelledby='headingTwo4'>

        <div 
        class='accordion-body py-4 px-5'>
           {$this->generateTabs($key)}

        </div>
    </div>
</div>";
    }
}