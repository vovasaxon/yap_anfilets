<?php
class Companies{
    public $headers = [];
    public $data = [];

    public function Companies($headers)
    {
        $this->headers=$headers;
    }

    public function addRow($row){      //добавление предприятия в массив
        $tmp=[];
        foreach($this->headers as $header)
        {
            if(!isset($row[$header])) $row[$header]="";
            $tmp[]=$row[$header];
        }
        $this->data[]=$tmp;
    }
    public function readphp( $row)  // считывание с файла предприятий
    {
        $filepath="Companies.txt";
        $row=file_get_contents($filepath);
        $row=unserialize($row);
        return $row;
    }
    public function writephp( $row)     //запись в файл предприятий
    {
        $filepath="Companies.txt";
        $row=serialize($row);
        file_put_contents($filepath,$row);
    }
    public function searchphp($search)     //функция поиска по данным
    {
        if($_GET['Submit']){
            for($i=0;$i<count($this->data);$i++)
            {
                for($j=0;$j<count($this->data[$i]);$j++)
                {
                    if($search===$this->data[$i][$j]) {
                        echo "<strong>Совпадение найдено на ".($i+1)." - строчке, ".($j+1)." - столбце</strong><br>";        
                        $count++ ;
                    }
                }
            }
            if (!$count) echo "Ничего не найдено!<br>";
        }}
    function __construct()    {      //конструктор
        $this->data=readphp($this->data);

    }
    function __destruct() {         //деструктор
        echo "Сработал деструктор\n";
        unset($this->data);
        unset($this->header);
    }


}
class table extends Companies    //класс для создания таблицы пользователей
{
    public $cellpading ="9";
    public $bgcolor;
    function __construct($headers, $bgcolor){
        Companies::Companies($headers);
        $this->bgcolor=$bgcolor;
    }
    function setCellpadding($padding)
    {
        $this->cellpading=$padding;
    }
    function output()   //вывод таблицы
    {
        echo "<table cellpadding='".$this->cellpading."'><tr>";
        foreach ($this->headers as $header)
            echo "<th bgcolor='".$this->bgcolor."'>$header</th>";
        foreach ($this->data as $y)
        {
            echo "<tr>";
            foreach ($y as $x)
                echo "<td bgcolor='".$this->bgcolor."'>$x</td>";

        }
        echo "</table>";

    }


}
$Companies_array= new table(array("Title","Sobstvennost","Employees"),"lightcyan");
$Companies_array->data=$Companies_array->readphp($Companies_array->data);
