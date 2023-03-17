<style>
        .logo_main {
                width: 100%;
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
                .logo_main {
                        width: 80%;
                }
        }

        @media (max-width: 575.98px) {
                .logo_main {
                        width: 100%;

                }

                .search-h {
                        margin-left: 10px;
                }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
                .logo_main {
                        width: 63%;
                }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
                .logo_main {
                        width: 63%;
                }
        }

        @media (min-width: 1024px) {
                .menu li a {
                        font-size: 13px;
                }

                .box {
                        width: 25%;
                }


        }

        @media (min-width: 1200px) {
                .menu li a {
                        font-size: 16px;
                }
        }

        .header--sticky {
                background-color: #fff;
        }

        .header-option {
                float: none;
                margin-top: 10px;
                background-color: #16357B;
                /* border-bottom: 1px solid #d8d8d8; */
                /* padding: 0px 0px 4px 0px; */
        }

        .header-nav {
                margin-top: 0;
                text-align: right;
                font-size: 13px;
        }

        
        .change-lang {
                padding: 9px;
                color: #fff;

        }

        .lang-th {
                margin-right: 5px;
                color: #fff;
        }

        .lang-en {
                margin-right: 5px;
                color: #fff;
        }

        .font-large {
                font-size: 20px;
                color: #fff;
        }

        .font-medium {
                font-size: 16px;
                color: #fff;
        }

        .font-small {
                font-size: 14px;
                color: #fff;
        }

        .seaech-head {
                background-color: #5463B0;
                border: 1px solid #5463B0;

        }

        .f-1 {
                background: #000;
                padding: 3px 8px;
                color: #FFF;
                font-size: 14px;
                border-radius: 4px;
        }

        .f-2 {
                background: #CCC;
                padding: 3px 8px;
                color: #FFF;
                font-size: 14px;
                border-radius: 4px;
        }

        .f-3 {
                background: #000;
                padding: 3px 8px;
                color: yellow;
                font-size: 14px;
                border-radius: 4px;
        }

        .change-display {
                
               padding-right: 10px;
        }
</style>

<div class="container-fluid pl-0 pr-0  header--sticky fixed-top">
        <div class="">
                <div class="header-nav header-option">
                        <div class="row flex-nowrap align-items-right">
                                <div class="col-12 d-flex justify-content-end align-items-center">
                                        <form class="d-flex pt-2 pb-2" role="search">
                                                <input class="form-control me-2 search-h " type="search"
                                                        placeholder="ค้นหา" aria-label="Search">&nbsp;
                                                <button class="btn btn-primary seaech-head" type="submit"
                                                        title="ค้นหา">ค้นหา</button>
                                        </form>&nbsp; &nbsp;
                                        <span class="change-font">
                                                <a href="#" class="font-small current" id="decrease" value="Decrease"
                                                        title="ก">ก</a>
                                                <a href="#" class="font-medium" id="normal" value="normal"
                                                        title="ก">ก</a>
                                                <a href="#" class="font-large" id="increase" value="Increase"
                                                        title="ก">ก</a>
                                        </span>&nbsp; &nbsp;
                                        <span class="change-lang">
                                                <a href="#" class="lang-th active" title="TH">TH</a> |
                                                <a href="#" class="lang-en" title="EN">EN</a>
                                        </span>
                                        <span class="change-display ">
                                                <a href="#" class="f-1" title="พื้นหลังสีดำพร้อมข้อความสีขาว"
                                                        onclick="bg_bk();">C</a>
                                                <a href="#" class="f-2" title="ปกติ" onclick="bg_null();">C</a>
                                                <a href="#" class="f-3" title="พื้นหลังสีดำพร้อมข้อความสีเหลือง"
                                                        onclick="bg_yell();">C</a>
                                        </span>

                                </div>
                        </div>

                </div>
        </div>

        <div class="container ">
                <nav class="navbar navbar-expand-lg navbar-light  py-0 menu">

                        <div class="container">
                                <a class=" pb-2 d-inline-flex box" href="index.php">
                                        <img src="assets/images/logo.webp" title="หน้าหลัก" alt="หน้าหลัก"
                                                class="img-fluid logo_main">
                                </a>
                                <button class="navbar-toggler mb-2" type="button" data-toggle="collapse"
                                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <ul class="navbar-nav ml-auto" data-toggle="collapse"
                                                href="#multiCollapseExample1" role="button" aria-expanded="false"
                                                aria-controls="multiCollapseExample1">
                                                <li class="nav-item dropdown font-nav-item "><a
                                                                class="nav-link dropdown-toggle" href="#"
                                                                id="navbarDropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                title="เกี่ยวกับเรา" target="_self"
                                                                style="text-align: left;">เกี่ยวกับเรา</a>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="navbarDropdownMenuLink">
                                                                <li><a class="dropdown-item" href=""
                                                                                title="ตราสัญลักษณ์" target="_self"
                                                                                style="text-align: left;">ตราสัญลักษณ์</a>
                                                                </li>

                                                                <li><a class="dropdown-item" href="" title="ประวัติ"
                                                                                target="_self"
                                                                                style="text-align: left;">ประวัติ</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href=""
                                                                                title="วิสัยทัศน์/พันธกิจ"
                                                                                target="_self"
                                                                                style="text-align: left;">วิสัยทัศน์/พันธกิจ</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li class="nav-item dropdown font-nav-item"><a
                                                                class="nav-link dropdown-toggle" href="#"
                                                                id="navbarDropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                title="ข้อมูล ปปส. อาเซียน" target="_self"
                                                                style="text-align: left;">ข้อมูล ปปส. อาเซียน</a>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="navbarDropdownMenuLink">
                                                                <li><a class="dropdown-item" href=""
                                                                                title="กำเนิดอาเซียน" target="_self"
                                                                                style="text-align: left;">กำเนิดอาเซียน</a>
                                                                </li>

                                                                <li><a class="dropdown-item" href=""
                                                                                title="ข้อมูลพื้นฐาน" target="_self"
                                                                                style="text-align: left;">ข้อมูลพื้นฐาน</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href=""
                                                                                title="โครงสร้างหน่วยงาน" target="_self"
                                                                                style="text-align: left;">โครงสร้างหน่วยงาน</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li class="nav-item dropdown font-nav-item"><a
                                                                class="nav-link dropdown-toggle" href="#"
                                                                id="navbarDropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                title="โครงการสำคัญ" target="_self"
                                                                style="text-align: left;">โครงการสำคัญ</a>
                                                        <ul class="dropdown-menu "
                                                                aria-labelledby="navbarDropdownMenuLink">
                                                                <li><a class="dropdown-item" href=""
                                                                                title="โครงการสกัดกั้นและปราบปรามยาเสพติด ณ ท่าอากาศยานสากล ในอาเซียน"
                                                                                target="_self"
                                                                                style="text-align: left;">โครงการสกัดกั้นและปราบปรามยาเสพติด
                                                                                ณ ท่าอากาศยานสากล ในอาเซียน</a></li>
                                                                <li class="dropdown-submenu"><a
                                                                                class="dropdown-item dropdown-toggle"
                                                                                href="#"
                                                                                title="โครงการแก้ปัญหายาเสพติดในสามเหลี่ยมทองคำ">โครงการแก้ปัญหายาเสพติดในสามเหลี่ยมทองคำ</a>
                                                                        <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="แม่น้ำโขงปลอดภัย"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">แม่น้ำโขงปลอดภัย</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="แผนความร่วมืออาเซียน"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">แผนความร่วมืออาเซียน</a>
                                                                                </li>
                                                                        </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href=""
                                                                                title="ด้านปราบปรามยาเสพติด"
                                                                                target="_self"
                                                                                style="text-align: left;">ด้านปราบปรามยาเสพติด</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href=""
                                                                                title="ด้านป้องกันยาเสพติด"
                                                                                target="_self"
                                                                                style="text-align: left;">ด้านป้องกันยาเสพติด</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href=""
                                                                                title="ด้านบำบัดรักษาและพื้นฟูสมรรถภาพ"
                                                                                target="_self"
                                                                                style="text-align: left;">ด้านบำบัดรักษาและพื้นฟูสมรรถภาพ</a>
                                                                </li>
                                                                <li class="dropdown-submenu"><a
                                                                                class="dropdown-item dropdown-toggle"
                                                                                href="#" title="ด้านวิจัย">ด้านวิจัย</a>
                                                                        <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="40th ASOD"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">40th
                                                                                                ASOD</a>
                                                                                </li>
                                                                        </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href=""
                                                                                title="ด้านพัฒนาทางเลือก" target="_self"
                                                                                style="text-align: left;">ด้านพัฒนาทางเลือก</a>
                                                                </li>
                                                        </ul>
                                                </li>
                                                <li class="nav-item dropdown font-nav-item"><a
                                                                class="nav-link dropdown-toggle" href="#"
                                                                id="navbarDropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                title="รายงานเฝ้าระวังยาเสพติด" target="_self"
                                                                style="text-align: left;">รายงานเฝ้าระวังยาเสพติด</a>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="navbarDropdownMenuLink">
                                                                <li><a class="dropdown-item" href=""
                                                                                title="ด้านลดอุปสงค์" target="_self"
                                                                                style="text-align: left;">ด้านลดอุปสงค์</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href=""
                                                                                title="ด้านลดอุปทาน" target="_self"
                                                                                style="text-align: left;">ด้านลดอุปทาน</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href=""
                                                                                title="ภาพการประชุม ADMN 2019"
                                                                                target="_self"
                                                                                style="text-align: left;">ภาพการประชุม
                                                                                ADMN 2019</a></li>
                                                        </ul>
                                                </li>
                                                <li class="nav-item dropdown font-nav-item"><a
                                                                class="nav-link dropdown-toggle" href="#"
                                                                id="navbarDropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                title="รายงาน" target="_self"
                                                                style="text-align: left;">รายงาน</a>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="navbarDropdownMenuLink">
                                                                <li><a class="dropdown-item" href="" title="สถิติจับกุม"
                                                                                target="_self"
                                                                                style="text-align: left;">สถิติจับกุม</a>
                                                                </li>
                                                                <li class="dropdown-submenu"><a
                                                                                class="dropdown-item dropdown-toggle"
                                                                                href="#"
                                                                                title="รายงานประจำปี">รายงานประจำปี</a>
                                                                        <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="รายงานประจำปี"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">รายงานประจำปี</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="รายงานการสำรวจฝิ่นประจำปี"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">รายงานการสำรวจฝิ่นประจำปี</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="รายงานเฝ้าระวังอาเซียน"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">รายงานเฝ้าระวังอาเซียน</a>
                                                                                </li>
                                                                        </ul>
                                                                </li>
                                                                <li class="dropdown-submenu"><a
                                                                                class="dropdown-item dropdown-toggle"
                                                                                href="#"
                                                                                title="สถานการณ์ปัญหายาเสพติด">สถานการณ์ปัญหายาเสพติด</a>
                                                                        <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="บรูไนดารุสซาลาม"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">บรูไนดารุสซาลาม</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="ราชอาณาจักร์กัมพูชา"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">ราชอาณาจักร์กัมพูชา</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="สาธารณะรัฐอินโดนีเซีย"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">สาธารณะรัฐอินโดนีเซีย</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="สาธารณะรัฐประชาธิปไตยประชาชนลาว"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">สาธารณะรัฐประชาธิปไตยประชาชนลาว</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="มาเลเซีย"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">มาเลเซีย</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="สาธารณรัฐแห่งสหภาพเมียนมาร์"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">สาธารณรัฐแห่งสหภาพเมียนมาร์</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="สาธาณรัฐฟิลิปินส์"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">สาธาณรัฐฟิลิปินส์</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="สาธาณรัฐสิงคโปร์"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">สาธาณรัฐสิงคโปร์</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="ราชอาณาจักรไทย"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">ราชอาณาจักรไทย</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" href=""
                                                                                                title="สาธาณรัฐสังคมนิยมเวียดนาม"
                                                                                                target="_blank"
                                                                                                style="text-align: left;">สาธาณรัฐสังคมนิยมเวียดนาม</a>
                                                                                </li>
                                                                        </ul>
                                                                </li>
                                                        </ul>
                                                </li>


                                                <li class="nav-item  font-nav-item"><a class="nav-link" href=""
                                                                title="ติดต่อเรา" target="_self"
                                                                style="text-align: left;">ติดต่อเรา<span
                                                                        class="sr-only">(current)</span></a>
                                                </li>
                                        </ul>
                                </div>

                        </div>


                </nav>
        </div>
</div>