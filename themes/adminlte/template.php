<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>หน้าแรก    </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/css/main.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/DataTables-1.10.16/datatables.min.js" />-->
        <script language="JavaScript">
            function chkNumber(ele)
            {
                var vchar = String.fromCharCode(event.keyCode);
                if ((vchar < '0' || vchar > '9') && (vchar != '.'))
                    return false;
                ele.onKeyPress = vchar;
            }
        </script>
    </head>
    <body>
        <header id="header">
            <div class="logo pull-left">ระบบจัดการสนามกอล์ฟ</div>
            <div class="header-content">
                <div class="header-date pull-left">

                </div>
                <div class="pull-right clearfix">
                    <ul class="info-menu list-inline list-unstyled">
                        <li class="profile">
                            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
                                <img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" alt="user-image" class="img-circle img-inline">
                                <?php $session_data = $this->session->logged_in; ?>
                                <?php if ($session_data->work == 2) { ?>
                                    <span> พนักงาน <i class="caret"></i></span>
                                <?php } elseif ($session_data->work == 3) { ?>
                                    <span> ผู้ใช้งาน <i class="caret"></i></span>
                                <?php } elseif ($session_data->work == 1) { ?>
                                    <span> ผู้ดูแลระบบ <i class="caret"></i></span>
                                <?php } ?>


                            </a>
                            <ul class="dropdown-menu">
                                <li <?php if ($session_data->work == 1) echo 'style="display:none;"' ?>>
                                    <?php
                                    $session_data = $this->session->logged_in;
                                    $id = "";
                                    if ($session_data->work == 1) {
                                        $id = $session_data->IdAdmin;
                                    } elseif ($session_data->work == 2) {
                                        $id = $session_data->IdEmp;
                                    } else {
                                        $id = $session_data->IdMem;
                                    }
                                    ?>
                                    <a href="<?php echo base_url(); ?>profile?id=<?php echo $id; ?>">
                                        <i class="glyphicon glyphicon-user"></i>
                                        ข้อมูลส่วนตัว
                                    </a>
                                </li>
                                <li class="last">
                                    <a href="<?php echo base_url();?>Login/Logout">
                                        <i class="glyphicon glyphicon-off"></i>
                                        ออกจากระบบ
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="sidebar">
            <!-- admin menu -->
            <?php $session_data = $this->session->logged_in; ?>
            <?php if ($session_data->work == 2) { ?>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>Member/callemtyEm" class="submenu-toggle">
                            <i class="glyphicon glyphicon-home"></i>
                            <span>หน้าแรก</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>booking/bookshowem" class="submenu-toggle">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <span>จัดการการจอง</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="submenu-toggle">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <span>บันทึกเช่า-คืนอุปกรณ์</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>member/memShowEm" class="submenu-toggle">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>จัดการสมาชิก</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Employee/callcaddyshow" class="submenu-toggle">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>จัดการแคดดี้</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url();?>Instrument/insshowem" class="submenu-toggle">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <span>จัดการอุปกรณ์</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Promotion" class="submenu-toggle">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <span>จัดการโปรโมชั่น</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Employee/price" class="submenu-toggle">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <span>จัดการราคา</span>
                        </a>
                    </li>
                </ul>
            <?php } elseif ($session_data->work == 3) { ?>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>booking/bookshowem" class="submenu-toggle">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <span>จัดการการจอง</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="submenu-toggle">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <span>รายการจอง</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="submenu-toggle">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <span>ประวัติการจอง</span>
                        </a>
                    </li>
                </ul>
            <?php } elseif ($session_data->work == 1) { ?>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>Employee/callemty" class="submenu-toggle">
                            <i class="glyphicon glyphicon-home"></i>
                            <span>หน้าแรก</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Employee/callshow" class="submenu-toggle">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>จัดการพนักงาน</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Member/callshow">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>จัดการสมาชิก</span>
                        </a>
                    </li>
                </ul>
            <?php } ?>

        </div>

        <div class="page">
            <!-- /MAIN body --> 
            <section class="content-wrapper" role="main">
                <div class="content" id="main-page-content "> 
                    <?php echo $layout_content; ?>

                </div><!-- /.content -->
            </section><!-- /MAIN --> 
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/js/functions.js"></script>
    </body>
</html>






