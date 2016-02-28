<?php if(isset($set)):?>
<div class="panel panel-info ">
  <div class="panel-heading "data-toggle="collapse" data-target="#part-4">
    GENERAL
  </div>
  
  <div class="panel-body" id="part-4">
    <li>
      <label>Relations with public (wherever applicable)</label>
      <textarea class="form-control" name="public_relation" disabled><?=$public_relation;?></textarea>
    </li>
    <li><label>Training</label>
      <textarea class="form-control" name="training" disabled><?=$training;?></textarea>
    </li>
    <li>
      <label>Integrity</label>
      <textarea class="form-control" name="integrity" disabled><?=$integrity;?></textarea>
    </li>
    <li>
      <label>State of health</label>
      <textarea class="form-control" name="health" disabled><?=$health;?></textarea>
    </li>
    
    <li>
      <label>Pen Picture by Reporting Officer (in about 100 words ) on the overall qualities of the officer including areas of strength and lesser strength, extraordinary achievements, significant failures (ref 3(A) &amp; 3 (B) of part-2) and attitude towards waeker sections</label><textarea  rows=6 class="form-control" name="reporting_officer_penpicture" disabled><?=$reporting_officer_penpicture;?></textarea>
    </li>
    <li><label>Overall numerical grading on the basis of weightage given in sectionA, B and C in part-3 of the Report</label>
      <input type="number" readonly id="overall_numerical_grading" name="overall_numerical_grading"<?php if(isset($set)): ?> value=<?=(int)$overall_numerical_grading;?> <?php endif;?>>
    </li>
  </div>
</div>



<?php endif; ?>


