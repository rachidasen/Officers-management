<div class="container">

    <header class="well">
        Admin Section Panel to manage Officers    
    </header>
    
    <main class="well">
        <title>Add/Edit Officer</title>
        <table class="table table-responsive">              <thead>
            <tr>
                <th>S.NO.</th>
                <th>OFFICER_ID</th>
                <th>PASSWORD</th>
                
            </tr>   
         </thead>
          <tbody>
              <?php for(i=0;i<rows;i++){
                    echo"<tr>
                            <td>$s_no</td>
                            <td>$officer</td>
                            <td>$password</td>
                        </tr>";
                } ?>
              <tr></tr>
          </tbody>
        
        </table>
    </main>
    
    <
    

</div>