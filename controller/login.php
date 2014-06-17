<?php

include("../model/m_template.php");
$Template = new Template();
$Template->set_data();
$Template->load("../view/v_login.php");