<?php
session_start();

abstract class AbsFormatter
{
  abstract public function format();

}

class JsonFormatter extends AbsFormatter
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

  public function format()
  {
    return json_decode($this->data);
  }
}
class CSVFormatter extends AbsFormatter
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function format()
    {
        return fgetcsv($this->data);
    }
}
$jf = new JsonFormatter([1,2,3,4,5]);
echo $jf->format();
$cf = new CSVFormatter(file://localhost//1.cvs);
echo $cf->format();
