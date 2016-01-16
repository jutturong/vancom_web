    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title><?=$title?></title>
        
        <?=$this->load->view("import_js")?>
        
        
        <script type="text/javascript">
            $(function(){  //แสดงรายการทั้งหมด ประวัติผู้ป่วย/ประวัติการรักษา
                   $('#p_patient').panel('close');
            });
              
            
            
                function  op_addpatien() //เพิ่มประวัติของผู้ป่วย
                {
                       $('#add_patient').window('open');
                }
                
                function  op_diagnosis()//เพิ่มประวัติของการรักษา
                {
                     $('#add_diagnosis').window('open');
                }
        </script>
        
        
    </head>
    <body>
        <?=$this->load->view("topmenu")?>
        
      <!--  ผู้ป่วยทัังหมด/ประวัติการรักษา   -->  
<?=$this->load->view("panel_patient")?>
      <!--  ผู้ป่วยทัังหมด/ประวัติการรักษา   -->  
      
      
      <!-- ค้นหา ประวัติผู้ป่วย/ประวัติการรักษา  จาก HN -->
      <?=$this->load->view("hn_search")?>
      <!-- ค้นหา ประวัติผู้ป่วย/ประวัติการรักษา  จาก HN -->
      
       <!-- ค้นหา ประวัติผู้ป่วย/ประวัติการรักษา  จาก ชื่อ-นามสกุล -->
      <div id="win_name_sr" class="easyui-window" title="ค้นหาประวัติผู้ป่วย/ประวัติการรักษา" 
              data-options="modal:true,closed:true,iconCls:'icon-save', iconCls:'icon-man'   " 
              style="width:350px;height:150px;padding:10px;">
          <table>
              <tr>
                  <td>
                      Patient's Name - Lastname :
                  </td>
                  <td>
                      
                      <select class="easyui-combogrid" id="name_sr"  name="name_sr"   style="width:150px;height: 40px" data-options="
            panelWidth: 300,
            idField: 'itemid',
            textField: '',
            mode:'remote',
            idField:'id_patient',
            url: '<?=base_url()?>index.php/welcome/cmb_name/',
            method: 'post',
            columns: [[
                {field:'HN',title:'HN'},
                {field:'Name',title:'Name'},
                {field:'Surname',title:'Lastname'},
                  {field:'Sex',title:'Sex'},
                
            ]],
            fitColumns: true,
          
                              " />
                      
                  </td>
              </tr>
              <tr>
                  <td>
                      <a href="javascript:void(0)" class="easyui-linkbutton" data-options=" 
                            iconCls:'icon-man',
                            onClick:function()
                               {
                               
                               
                                                         
                                    var   name_sr= $('#name_sr').combogrid('getValue');     
                                
                                    $('#p_patient').panel('open');
                                    $('#dg_patient').datagrid({
                                       // url:'<?=base_url()?>index.php/welcome/dg_patient/' +  name_sr   ,
                                      url:'<?=base_url()?>index.php/welcome/sr_NAME/' +  name_sr   ,  
                                       
                                        
                                      fitColumns:true,
                                      singleSelect:true,
                                      pagination: true  ,
                                     rownumbers:true ,    
                                      columns:[[
                                          {  field:'Name',title:'Name' },
                                          {  field:'Surname',title:'Lastname' },
                                          {  field:'HN',title:'HN' },
                                          {  field:'BirthDate',title:'Birth Date' },
                                          {  field:'Sex',title:'Sex' },
                                          {field:'id_patient',title:'ID'},
                                                     ]]
                                    
                                    });
                                   
                                    
                                    
                               }
                            " 
                            style="height: 30px" >Open</a>
                      <a href="javascript:void(0)" class="easyui-linkbutton" data-options=" iconCls:'icon-cancel' "  onclick="$('#win_name_sr').window('close')"  style="height: 30px" >Close</a>
                  <td>
              </tr>
              
          </table>
          
      </div>
      <!-- ค้นหา ประวัติผู้ป่วย/ประวัติการรักษา  จาก ชื่อ-นามสกุล --> 
      
      
      
      
    
    
        
   <!-- เพิ่มประวัติของผู้ป่วย -->    
       <?=$this->load->view("fr_patient")?> 
    <!-- เพิ่มประวัติของผู้ป่วย -->        
        
    <!-- เพิ่มประวัติการรักษา -->
    <?=$this->load->view("fr_diagnosis")?>
    <!-- เพิ่มประวัติการรักษา -->
    
    
    
    
    <!-- ผู้ป่วยทั้งหมด/ประวัติการรักษา -->
    

    
        <!-- ผู้ป่วยทั้งหมด/ประวัติการรักษา -->
    

</body>
    </html>