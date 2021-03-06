<div class="container-fluid">

    <form method="post" action="<?php echo $form_submit_url; ?>">
        <input type="hidden" name="action" value="<?php echo $form_action_update_zaznam_vykonu; ?>"/>
        <input type="hidden" name="typ_id" value="<?php echo $zaznam_id; ?>" />

        <div class="row">

            <!-- START DETAIL SLUZBY PRO UPDATE -->
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        Editace záznamu výkonu #<?php echo $zaznam_id;?>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $text_columns = array();
                            //$text_columns["id"] = "Id";
                            //$text_columns["sluzba_id"] = "sluzba id";
                            $text_columns["cas_zacatek"] = "Čas začátek";
                            $text_columns["cas_konec"] = "Čas začátek";

                            $text_columns["poznamka"] = "Poznámka";

                            // definice, ktera pole jsou datumy
                            $dates_text_columns_keys = array();

                            $times_text_columns_keys = array();
                            $times_text_columns_keys["cas_zacatek"] = "cas_zacatek";
                            $times_text_columns_keys["cas_konec"] = "cas_konec";

                            // tridy pro konkretni polozky
                            $classes_for_columns = array();


                            // napoveda pro vse
                            $input_help_desc = array();

                            // popisy
                            $textarea_columns = array();

                            if ($text_columns != null) {

                                echo "<table class='table table-striped table-bordered'>";


                                // zakladni texty vcetne datumu
                                foreach ($text_columns as $key => $value) {

                                    // tridy
                                    $tr_class_pom = "";

                                    if (array_key_exists($key, $classes_for_columns)) {
                                        if (array_key_exists("tr", $classes_for_columns[$key])) {
                                            $tr_class_pom = "class=\"".$classes_for_columns[$key]["tr"]."\"";
                                        }
                                    }
                                    // konec tridy

                                    echo "<tr $tr_class_pom>";
                                    echo "<th class='w-30'>$value</th>";
                                    echo "<td class='w-40'>";

                                    $input_type = "text";
                                    if (in_array($key, $dates_text_columns_keys)) {
                                        // je to datum
                                        $input_type = "date";
                                    }
                                    if (in_array($key, $times_text_columns_keys)) {
                                        // je to datum
                                        $input_type = "time";
                                    }

                                    echo "<input type=\"$input_type\" class=\"form-control\" name=\"zaznam_vykonu[$key]\" value=\"".$zaznam_vykonu[$key]."\" />";
                                    echo "</td>";
                                    echo "<td class='w-30'>";
                                    // napoveda
                                    if (array_key_exists($key, $input_help_desc)) {
                                        // vypsat napovedu
                                        echo $input_help_desc[$key];
                                    }
                                    echo "</td>";
                                    echo "</tr>";
                                }

                                // prihodit popisy
                                foreach ($textarea_columns as $key => $value) {
                                    echo "<tr>";
                                    echo "<th class='w-25'>$value</th>";
                                    echo "<td class='w-75'>
                                                <textarea class=\"form-control\" name=\"zaznam_vykonu[$key]\" rows='7'>$zaznam_vykonu[$key]</textarea>
                                              </td>";
                                    echo "</tr>";
                                }

                                echo "</table>";
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">

                                    <input type="submit" class="btn btn-primary btn-lg" value="Uložit změny" />

                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo $url_sluzba_detail;?>" class="btn btn-default btn-lg">Zpět na detail služby</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- konec col-6 -->
            <!-- KONEC DETAIL OBYVATELE -->

        </div><!-- konec row-->

    </form>
</div>