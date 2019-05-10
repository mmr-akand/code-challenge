<?php

class TableGenerator extends ArrayObject
{
    protected $tableFileName;
    protected $tableData;

    //Constructor
    public function __construct(array $data = array())
    {
        parent::__construct($data, ArrayObject::ARRAY_AS_PROPS);
        $this->setTableFileName();
    }

    //set a file name containing html table
    public function setTableFileName(): void
    {
        $tableFileName = 'table.php';
        if (!file_exists( $tableFileName )) {
            throw new InvalidArgumentException('File is invalid.');
        }
        $this->tableFileName = $tableFileName;
    }

    //display assigned properties as table
    public function displayAsTable(): string
    {        
        $this->tableData = $this->generateHtmlTable();
        include $this->tableFileName;
        return ob_get_clean();
    }  

    //process assigned properties to display
    public function generateHtmlTable(): string
    {
        $iterator = $this->getIterator();

        $tableHtml = '<table>';

        while($iterator->valid()) {
            $tableHtml .= '<tr>';
            foreach ($iterator->current() as $key => $value) {
                $tableHtml .= '<td>'.$value.'</td>';
            }
            $tableHtml .= '</tr>';
            $iterator->next();
        }
        $tableHtml .= '</table>';

        return $tableHtml;
    }  
}