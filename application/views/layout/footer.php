<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</div>
</div>
                    <div class="mt-30">
                        <!-- Modal to select organization -->
                        <div class="modal fade" id="select-organization-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Select Organization</h4>
                                    </div>
                                    <div class="modal-body" id="list-organizations">

                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal super user mode -->
                        <div class="modal fade" id="select-associate-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Select Associate</h4>
                                    </div>
                                    <div class="modal-body" id="list-associate">
                                        <div class="form-group col-md-12 fg-line">
                                              <div class="m-b-15 promgr_select">
                                                  <p class="f-500 c-black m-b-15">Select Associate <span class="text-danger">*</span></p>
                                                  <select class="chosen" data-placeholder="Select project manager" name="e_p_a_pmanager" id="e-p-a-pmanager">
                                                      <optgroup label="Select Project Manager">
                                                      </optgroup>
                                                  </select>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" onclick="switchToAssociate(); return false;">Switch</button>
                                        <button type="button" id="cls-modal" onclick="resetSuperMode(); return false;" class="btn palette-Grey bg waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </body>

    <!-- Javascript Libraries -->
    <!-- <script src="assets/material-theme/vendors/bower_components/jquery/dist/jquery.min.js"></script>
     -->
   
     <!--seperate section-->
      <!--  <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->

    <script src="assets/material-theme/vendors/bower_components/jquery/dist/jquery.min.js"></script>
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js" integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ==" crossorigin="anonymous"></script> -->
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/4.2.2/jquery.flot.pie.min.js" integrity="sha512-xjmShmauHgG5L4dEf291qw/YPAbnTnDevXa+yXAp7slPWnLGDJNlJBuEn8ckjVImEZdI71V7+2ymsh+2Ym3rZA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flot.tooltip/0.9.0/jquery.flot.tooltip.min.js" integrity="sha512-oQJB9y5mlxC4Qp62hdJi/J1NzqiGlpprSfkxVNeosn23mVn5JA4Yn+6f26wWOWCDbV9CxgJzFfVv9DNLPmhxQg==" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js" integrity="sha512-Hyk+1XSRfagqzuSHE8M856g295mX1i5rfSV5yRugcYFlvQiE3BKgg5oFRfX45s7I8qzMYFa8gbFy9xMFbX7Lqw==" crossorigin="anonymous"></script>
     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
     <!-- Tree view scripts --> 
    
    <!-- <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script> -->
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
<!--     <script src="assets/material-theme/vendors/bower_components/moment/src/moment.js"></script>
    <script src="assets/material-theme/vendors/bower_components/fullcalendar/dist/fullcalendar.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js" integrity="sha512-G9dfCJFG3y/Xq8mbbqb5i3FQNVaGl0Fkkw+VPVT3L00gA4k7hyjSGNpAxykwgDw1cfJFlj5tO3XePa+ezjDQyQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha512-o0rWIsZigOfRAgBxl4puyd0t6YKzeAw9em/29Ag7lhCQfaaua/mDwnpE2PVzwqJ08N7/wqrgdjc2E0mwdSY2Tg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/sparklines/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/js/flot-charts/curved-line-chart.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/js/flot-charts/line-chart.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/fileinput/fileinput.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/nouislider/distribute/jquery.nouislider.all.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/chosen/chosen.jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>

    <script src="<?php echo base_url()?>assets/material-theme/js/charts.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/js/functions.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/js/actions.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/js/demo.js"></script>

    <script src="<?php echo base_url()?>assets/js/request.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url()?>assets/js/button-effects.js"></script>
    <script src="<?php echo base_url()?>assets/js/ImageSelect.jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/app.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.table2excel.js"></script>
    <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>assets/js/custom.js"></script>
    <script src="<?php echo base_url()?>AjaxMethods/AssociateAjaxMethods.js"></script>
    <script src="<?php echo base_url()?>AjaxMethods/DashboardAjaxMethods.js"></script>
    <script src="<?php echo base_url()?>AjaxMethods/loginAjaxMethod.js"></script>
    <script src="<?php echo base_url()?>AjaxMethods/UserAjaxMethods.js"></script>
    
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
            content.style.display = "none";
            } else {
            content.style.display = "block";
            }
        });
        }
        var coll_1 = document.getElementsByClassName("collapsible_group");
        var i;

        for (i = 0; i < coll_1.length; i++) {
        coll_1[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content_group = this.nextElementSibling;
            if (content_group.style.display === "block") {
            content_group.style.display = "none";
            } else {
            content_group.style.display = "block";
            content_group.style.width = "382px";
            }
        });
        }
        var coll_1 = document.getElementsByClassName("collapsible_notification");
        var i;

        for (i = 0; i < coll_1.length; i++) {
        coll_1[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content_notification = this.nextElementSibling;
            if (content_notification.style.display === "block") {
            content_notification.style.display = "none";
            } else {
            content_notification.style.display = "block";
            content_notification.style.width = "341px";
            }
        });
        }
    </script>
    <script>
        $(document).ready(function(){
         
            loadCompanyName("#comapny_name");
            $(document).on("change","#comapny_name",function(){
                var id=$(this).val();
                Active_Assoc_list(id);
                InActive_Assoc_list(id);
                Less_Used_Assoc_list(id);
                Task_Manager(id);
                loadtaskDates(id);
                Task(id);
                Project(id);
                Decision(id);
                Notes(id);
                Message(id);
                calendar.render();
            });
        });
       
    </script>
</html>