<?php
class Plan
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertplan($data)
    {
        $str_query = 'INSERT INTO [STT_EXPORT].[dbo].[TBL_PLAN_EXPORT_TEST] ([Biz],[Line],[Planlot],[Procode],[Description],[PO_number],[Production_date],[Qty],[Rec_date])
        VALUES (:CL,:Line,:Planlot,:Procode,:Description,:PO_number,CONVERT(datetime,:Production_date),:Qty,GETDATE()'.');';

        // var_dump($str_query);

        $this->db->query($str_query);

        $this->db->bind(':CL', 'CL');
        $this->db->bind(':Line', $data['line']);
        $this->db->bind(':Planlot', $data['planlot']);
        $this->db->bind(':Procode', $data['procode']);
        $this->db->bind(':Description', $data['description']);
        $this->db->bind(':PO_number',$data['ponumber']);
        $this->db->bind(':Production_date',$data['productiondate']);
        $this->db->bind(':Qty',$data['qty']);

        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
