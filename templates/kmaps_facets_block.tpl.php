<?php
/**
 * @file
 */
?>


<?php 
//error_log("Yo bang on the new template!  What to do now?"); 
//dpm($kmtype, $delta);
?>

<!-- BEGIN view section -->
<section id="ftsection" class="view-section">
    <ul class="nav nav-tabs">
        <li class="treeview active"><a href=".treeview" data-toggle="tab"><span class="icon shanticon-tree"></span>Tree</a></li>
        <li class="listview"><a href=".listview" data-toggle="tab"><span class="icon shanticon-list"></span>List</a></li>
    </ul>
    <div class="tab-content">
        <!-- TAB - tree view -->
        <div class="treeview tab-pane active">
            <div id="tree" 
            			data-delta="<?php echo $delta; ?>" 
            			data-kmtype="<?php echo $kmtype; ?>" 
            			data-kmroot="<?php echo $kmroot; ?>"
            			class="view-wrap"><!-- view-wrap controls tree container height --></div>
        </div>
        <!-- TAB - list view -->
        <div class="listview tab-pane">
            <div id="pager" class="pagination"></div>

            <div class="view-wrap"> <!-- view-wrap controls container height -->
                <div class="table-responsive">
                    <table class="table table-condensed table-results">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Feature Type</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <div id="pager-header"></div>
                </div>
            </div>
        </div>
    </div>

</section><!-- END view section -->
</section><!-- END kmaps-search -->
