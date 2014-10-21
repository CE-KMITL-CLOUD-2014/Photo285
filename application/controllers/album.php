<?

class Album extends CI_Controller {
$query = $this->db->query('SELECT *, FROM my_table');

foreach ($query->result() as $row)
{
    echo $row->ID;
    echo $row->name;
    echo $row->pass;
	echo $row->info;
}

echo 'Total Results: ' . $query->num_rows();

}
?>