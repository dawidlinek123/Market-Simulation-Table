<?php 
trait Table{
    public function generateTable(){
        $tableHtml= "<div class='flex flex-col 
        text-indigo-900 dark:text-slate-200'>
        <div class='overflow-x-auto sm:-mx-6 lg:-mx-8'>
          <div class='py-2 inline-block min-w-full sm:px-6 lg:px-8'>
            <div class='overflow-hidden'>
              <table class='min-w-full'>
                <thead class='border-b'> <tr  class=' bg-transparent hover:bg-gray-100 dark:hover:bg-gray-800 transition-all'>";
                foreach($this->tableData[0]??[] as $header){

                   $tableHtml.="
                    <th scope='col' class='text-sm font-medium px-6 py-4 text-left '>
                    {$header}
                    </th>
                    ";
                
                }
                $tableHtml.="
                </tr>
                </thead>
                <tbody>";
                foreach($this->tableData as $key=>$row){
                    if($key==0){continue;}
                    $tableHtml.="<tr class=' bg-transparent hover:bg-gray-100 dark:hover:bg-gray-800 transition-all'>";
                    foreach($row as $column){
                        $tableHtml.=" <td class='text-sm font-light px-6 py-4 whitespace-nowrap'>
                        {$column}
                      </td>";
                    }
                    $tableHtml.="</tr>";
                }
                  $tableHtml.="
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>";
      return $tableHtml;
    }
}