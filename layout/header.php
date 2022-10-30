<header class="bg-primary">
    <div class="container-fluid d-flex justify-content-between pt-1">
        <div class="sailHeaderLogoLeft">
            <img class="w-100 h-100" src="./images/bs-logo.png" alt="logo">
        </div>
        <div class="text-light d-flex">
            <div class="menu">
                <div class="detail">
                    <span class="visitorNo">Visitor No: 00000 || हिन्दी || </span>
                    <?php

                    $sql = "select * count from core";

                    ?>
                    <input class="searchHeader" type="text" placeholder="Search" />
                </div>
                <div>
                    <div class="dropdown department ">
                        <button class="dropbtn department_box">DEPARTMENTS (NON-WORKS) <img src="images\352021_arrow_drop down_icon.svg" alt="down" class="down" /></button>

                        <div class="dropdown-content">
                            <a href="#">BUSINESS</a>
                            <a href="#">C&IT</a>
                            <a href="departmentnw.php">HRD</a>
                        </div>
                    </div>
                    <div class="dropdown department ">
                        <button class="dropbtn department_box">DEPARTMENTS (WORKS) <img src="images\352021_arrow_drop down_icon.svg" alt="down" class="down" /></button>
                        <div class="dropdown-content">
                            <a href="#">Central Maintenance (Mechanical)</a>
                            <a href="#">Contract Cell (Works)</a>
                            <a href="#">Electronics and Telecommunication</a>
                        </div>
                    </div>
                    <div class="dropdown department">
                        <button class="dropbtn department_box">IMMS/HRIS LINKS <img src="images\352021_arrow_drop down_icon.svg" alt="down" class="down" /></button>
                        <div class="dropdown-content">
                            <a href="#">EL Encashment</a>
                            <a href="#">S90 DNB/Trainees Data Entry</a>
                            <a href="#">Download Form-16</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="sailHeaderLogoRight">
            <img class="w-100 h-100" src="./images/SAIL-LOGO-24-Jan-new.png" alt="logo">
        </div>
    </div>
</header>