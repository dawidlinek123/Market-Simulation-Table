<?php
require_once __DIR__ . '/../views/Accordion.php';
require_once __DIR__ . '/../views/PropertyBox.php';
require_once __DIR__ . '/../views/Tabs.php';
require_once __DIR__ . '/../views/Input.php';
require_once __DIR__ . '/../views/Table.php';
class Simulation
{
    use Accordion, PropertyBox, Tabs, Input, Table;

    public string $name;
    public array $properties = [];
    public array $tableData = [];

    public function __construct($name, $properties = [],$tableData=[])
    {
        $this->name = $name;
        $this->properties = $properties;
        $this->tableData = $tableData;
    }

    public function addProperty($name, $value)
    {
        $this->properties[$name] = $value;
    }
    
    public function addToTable($row)
    {
        $this->tableData[]=$row;
    }

    /** 
     * @param Simulation[] $simulations List of simulation objects.
     */
    public static function generateHtml($simulations)
    {
        $html = "<div class='accordion'>";
        foreach ($simulations as $key => $simulation) {
            $html .= $simulation->generateAccordion($key);
        }
        $html .= "</div>";
        return $html;
    }
}
