    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title><?=$title?></title>
        
        <?=$this->load->view("import_js")?>
        
        <script type="text/javascript">
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
        
   
<!-- เพิ่มประวัติของผู้ป่วย -->    
        <div id="add_patient" class="easyui-window" title="เพิ่มประวัติของผู้ป่วย  "    data-options="
                 modal:true,closed:true,
                 iconCls:'icon-man',
                 closable:true,
                 resizable:true,
                 "
                 style="width:700px;height:270px;padding:10px;">
            <div style="padding:10px 60px 20px 60px">
                <form id="fr_patient" method="post">
            <table cellpadding="1">
                <tr>
                    <td>Patient's Name - Lastname :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="name" data-options="required:true"  style="  width:150px;height:30px  "></input>
                         <input class="easyui-textbox" type="text" name="name" data-options="required:true"  style="  width:200px;height:30px  "></input>
                    </td>
                </tr>
                <tr>
                    <td>HN :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="name" data-options="required:true"  style="  width:100px;height:30px  "></input>
                         
                    </td>
                </tr>
                
                <tr>
                    <td>Birth Date :</td>
                    <td> <input class="easyui-datebox" style="height: 30px"  data-options="required:true" ></input></td>
                </tr>
                
                 <tr>
                    <td>Sex :</td>
                    <td>
                        
                           <select class="easyui-combobox" name="state" style="width:100px;height: 30px;">
        <option value="1">(ชาย) Male</option>
        <option value="2">(หญิง) Female</option>

                           </select>
                    
                    </td>
                </tr>
                
                
                <tr>
                    <td colspan="2">
                          <a href="javascript:void(0)" class="easyui-linkbutton" data-options=" iconCls:'icon-add' " >Insert</a>
                          <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-cancel'   "  onclick="$('#add_patient').window('close')   "  >Close</a>
                    </td>
                </tr>
                
            </table>
            </div>
    </div>
<!-- เพิ่มประวัติของผู้ป่วย -->       
        
        

<!-- เพิ่มประวัติการรักษา -->
        <div id="add_diagnosis" class="easyui-window" title=" เพิ่มประวัติประวัติการรักษา (Therapeutic Drug Monitoring) "    data-options="
                 modal:true,closed:true,
                 iconCls:'icon-man',
                 closable:true,
                 resizable:true,
                 "
                 style="width:900px;height:700px;padding:10px;">
            
            
            
            <div style="padding:10px 60px 20px 60px">
                <form id="fr_diagnosis" method="post">
                    <table>
                       <tr>
                    <td>HN :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="name" data-options="required:true"  style="  width:100px;height:30px  "></input>
                         
                    </td>
                </tr>
                
                <tr>
                    <td>Patient's Name - Lastname :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="name" data-options="required:true"  style="  width:150px;height:30px  "></input>
                         <input class="easyui-textbox" type="text" name="name" data-options="required:true"  style="  width:200px;height:30px  "></input>
                    </td>
                </tr>
                
                
                <tr>
                    <td>Ward :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="name" data-options="required:false"  style="  width:100px;height:30px;  "></input>
                  
                    </td>
                </tr>
                
                <tr>
                    <td>Weight  :</td>
                    <td>
                        <input class="easyui-numberbox" type="text" name="name" data-options="required:false"  style="  width:100px;height:30px  "></input>
                        Kg.
                    </td>
                </tr>
                
                 <tr>
                    <td>Height  :</td>
                    <td>
                        <input class="easyui-numberbox" type="text" name="name" data-options="required:false"  style="  width:100px;height:30px  "></input>
                        cm.
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Indication 1 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-large-shapes '  " >Add Indication</a>
                        
                    </td>
                    
                    
                </tr>
                
                <tr>
                    <td>
                        Indication 2 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                        Underllying disease 1 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        Underllying disease 6 :
                        
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                        Underllying disease 2 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        Underllying disease 7 :
                        
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                        Underllying disease 3 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        Underllying disease 8 :
                        
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                    </td>
                </tr>
                
                 <tr>
                    <td>
                        Underllying disease 4 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        Underllying disease 9 :
                        
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                        Underllying disease 5 :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                        Underllying disease 10 :
                        
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">AFI</option>
        <option value="2">ESRD S/P HD</option>
        <option value="3">TVD</option>
                           </select>
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                       Reason for TDM :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">Routine Follow up</option>
        
       
                           </select>
                        
                          <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-large-shapes '  " >Add Reason for TDM</a>
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td>
                       Drug level requested :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">Vancomycin</option>
        
       
                           </select>
                        
                          <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-large-shapes '  " >Add Drug level requested</a>
                        
                    </td>
                </tr>
                
                
                
                <tr>
                    <td>
                       Current Medications :
                    </td>
                    <td>
                        <select class="easyui-combobox" name="state" style="width:200px;height: 30px;">
        <option value="1">ceftazidime 2 g IV OD. (Start: 30/1/2558)</option>
         <option value="2">Vancomycin 1 g in D5W 200 ml IV drip in 2 hr. q. 12 hr.(22.00) (Start : 30/10/2558)</option>
       
                           </select>
                        
                     
                        
                          <a href="javascript:void(0)" class="easyui-linkbutton" data-options="  iconCls:' icon-large-shapes '  " >Add Current Medications</a>
                        
                    </td>
                </tr>
                
                
                 <tr>
                    <td colspan="2">
                          <a href="javascript:void(0)" class="easyui-linkbutton" data-options=" iconCls:'icon-add' " >Insert</a>
                          <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-cancel'   "  onclick="$('#add_diagnosis').window('close')   "  >Close</a>
                    </td>
                </tr>
                
                    </table>
                </form>
                
            </div>

<!-- เพิ่มประวัติการรักษา -->
        
        
        
    </body>
    </html>