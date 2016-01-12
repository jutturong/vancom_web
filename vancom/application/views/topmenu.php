 <div style="margin:10px 0;"></div>
    <div class="easyui-panel" style="padding:5px;">
        <a href="#" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-large-clipart'  "><?=$head?></a>
         <a href="#" class="easyui-linkbutton" iconCls="icon-large-picture">ผู้ป่วยทั้งหมด/ประวัติการรักษา</a>
        <a href="#" class="easyui-menubutton" data-options="menu:'#mm1',iconCls:'icon-edit'">Tool (ข้อมูลต่างๆ)</a>
        
         <a href="#" class="easyui-menubutton" data-options="menu:'#mm5',iconCls:'icon-add'">Add ComboBox (เพิ่มข้อมูล)</a>
        
        <a href="#" class="easyui-menubutton" data-options="menu:'#mm4',iconCls:'icon-large-picture'">Report</a>
        <a href="#" class="easyui-menubutton" data-options="menu:'#mm2',iconCls:'icon-help'">Help</a>
       <!-- <a href="#" class="easyui-menubutton" data-options="menu:'#mm3'">ออกจากระบบ</a> -->
        <a href="<?=base_url()?>index.php/welcome/index/" class="easyui-linkbutton" iconCls="icon-cancel">Sign Out</a>
    </div>
    
    
 

    <div id="mm1" style="width:150px;">
        <!--<div data-options="iconCls:'icon-add'">เพิ่มชื่อผู้ป่วย</div>-->
        <div data-options="iconCls:'icon-add'">Tool เกี่ยวกับผู้ป่วย</div>
        <div class="menu-sep"></div>
        <div onclick="op_addpatien()" data-options=" iconCls:'icon-man'   " >เพิ่มประวัติผู้ป่วย</div>
        <div onclick="op_diagnosis()"  data-options=" iconCls:' icon-large-shapes'   ">เพิ่มประวัติการรักษา</div>
        
        <div class="menu-sep"></div>
        <div  >
            <span>ลบ/แก้ไข</span>
            <div>
                <div>แก้ไข/ลบ ประวัติผู้ป่วย</div>
                <div class="menu-sep"></div>
                <div>แก้ไข/ลบ ประวัติการรักษา</div>
              
                
                <!--<div>New Toolbar...</div>-->
            </div>
        </div>
        <!--<div data-options="iconCls:'icon-remove'">Delete</div>
        <div>Select All</div>-->
    </div>
 
 
  <div id="mm5" style="width:150px;">
        <!--<div data-options="iconCls:'icon-add'">เพิ่มชื่อผู้ป่วย</div>-->
        <div data-options="iconCls:'icon-large-shapes'   ">เพิ่มข้อมูล ComboBox</div>
        <div class="menu-sep"></div>
        <div> - เพิ่ม Indication</div>

        
        <!--
        <div>
            <span>Toolbar</span>
            <div>
                <div>Address</div>
                <div>Link</div>
                <div>Navigation Toolbar</div>
                <div>Bookmark Toolbar</div>
                <div class="menu-sep"></div>
                <div>New Toolbar...</div>
            </div>
        </div>
        -->
        
        <!--
        <div data-options="iconCls:'icon-remove'">Delete</div>
        <div>Select All</div>
        -->
    </div>
    
    
     <div id="mm4" style="width:150px;">
        <!--<div data-options="iconCls:'icon-add'">เพิ่มชื่อผู้ป่วย</div>-->
        <div data-options="iconCls:'icon-add'">ระบุการค้นหา</div>
        <div class="menu-sep"></div>
        <div>จาก HN</div>
        <div>จาก ชื่อ - นามสกุล</div>
        <div>จาก  Vancomycin</div>
        <div>Date </div>
        <div>Date Sampling Time </div>
        <div class="menu-sep"></div>
        
        <!--
        <div>
            <span>Toolbar</span>
            <div>
                <div>Address</div>
                <div>Link</div>
                <div>Navigation Toolbar</div>
                <div>Bookmark Toolbar</div>
                <div class="menu-sep"></div>
                <div>New Toolbar...</div>
            </div>
        </div>
        -->
        
        <!--
        <div data-options="iconCls:'icon-remove'">Delete</div>
        <div>Select All</div>
        -->
    </div>
    
    
    <div id="mm2" style="width:100px;">
        <div>คู่มือการใช้งาน</div>
        <div>Update</div>
        <div>เกี่ยวกับเรา</div>
    </div>
    
  
    <!--
    <div id="mm3" class="menu-content" style="background:#f0f0f0;padding:10px;text-align:left">
        
       <img src="http://www.jeasyui.com/images/logo1.png" style="width:150px;height:50px">
        
       <p style="font-size:14px;color:#444;">Try jQuery EasyUI to build your modern, interactive, javascript applications.</p>
        <div  class="easyui-linkbutton"  data-options=" iconCls:' icon-cancel ' " >Sign out</div>
    </div>
       --> 