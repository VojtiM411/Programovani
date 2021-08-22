<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
    <title>Seznam kurzů</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <br>
        <div class="table-striped">
            <table class="table table-bordered">
                <tr class="thead-dark">
                    <th>Název</th>
                    <th>Vyučující</th>
                    <th>Místo</th>
                    <th>Počet míst</th>
                </tr>
                    <?php
                    $this->load->model('MainModel');
                    if($vypis->num_rows() > 0)
                    {
                        foreach($vypis->result() as $row)
                        {
                        ?>
                            <tr>
                                <td><?php echo $row->nazev ?></td>
                                <td><?php echo $row->vyucujici ?></td>
                                <td><?php echo $row->misto ?></td>
                                <td><?php echo $row->pocet_mist ?></td>
                            </tr>
                        <?php
                        }
                    }
                    else
                    {
                        echo "No data";
                    }
                    ?>
            </table>
        </div> 
    </div>
</body>
</html>